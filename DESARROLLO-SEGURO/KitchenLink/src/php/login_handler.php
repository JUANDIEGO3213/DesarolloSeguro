<?php
// Incluye el archivo de conexión
include 'db_connection.php';
include 'config.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

require __DIR__ . '/../../../vendor/autoload.php';

// Inicia la sesión para guardar datos del usuario
session_start();

// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];

    // Validación de la contraseña con longitud mínima de 8 caracteres
    if (strlen($password) < 8) {
        echo "La contraseña debe tener al menos 8 caracteres.";
        exit();
    }

    // Prepara la consulta SQL
    $stmt = $conn->prepare("SELECT user_id, user, password, name, rol_id FROM users WHERE user = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verifica si la contraseña es correcta
        if (password_verify($password, $hashed_password)) {
            // Contraseña correcta: inicia sesión
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['rol_id'] = $row['rol_id'];
            
            // Redirige al dashboard.
            //header("Location: /KitchenLink/dashboard.php");

            // Esto genera el JWT
            $issuedAt = time();
            $expire = $issuedAt + 3600; // Esto crea 1 hora de validez antes de que se expire
            $payload = [
                "iat" => $issuedAt,
                "exp" => $expire,
                "id" => $row['user_id'],
                "email" => $row['user'],
                "rol" => $row['rol_id']
            ];

            $jwt = JWT::encode($payload, $secret_key, 'HS256');

            // Devuelve el token como JSON
            echo json_encode([
                "message" => "Login exitose",
                "jwt" => $jwt,
                "user" => [
                    "id" => $row['user_id'],
                    "email" => $row['user'],
                    "rol" => $row['rol_id']
                ] 
            ]);


            exit();
        } else {
            echo json_encode(["error" => "Contraseña incorrecta. Intenta de nuevo."]);
        }
    } else {
        echo json_encode(["error" => "Usuario no encontrado. Intenta de nuevo."]);
    }

    $stmt->close();
}

$conn->close();
?>