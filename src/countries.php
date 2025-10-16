<?php
// Incluye el archivo de configuración que devuelve la conexión
$conn = include('../config/database.php');

// Verifica que la conexión sea válida
if (!$conn) {
    die("Error: No se pudo conectar a la base de datos.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar que los campos POST estén definidos y no vacíos
    $name = isset($_POST['name']) ? trim($_POST['name']) : null;
    $abbrev = isset($_POST['abbrev']) ? trim($_POST['abbrev']) : null;
    $code = isset($_POST['code']) ? trim($_POST['code']) : null;

    if (!$name || !$abbrev || !$code) {
        echo "<script>alert('Por favor, complete todos los campos.'); window.location.href='countries.php';</script>";
        exit;
    }

    // Usar pg_query_params para evitar inyección SQL
    $query = "INSERT INTO countries (name, abbrev, code) VALUES ($1, $2, $3)";
    $result = pg_query_params($name, $abbrev, $code);

    if ($result) {
        echo "<script>alert('País registrado con éxito'); window.location.href='countries.php';</script>";
    } else {
        // Mostrar mensaje de error detallado para depuración (opcional)
        $error = pg_last_error($conn);
        echo "<script>alert('Error al registrar el país: " . addslashes($error) . "'); window.location.href='countries.php';</script>";
    }
}

?>
