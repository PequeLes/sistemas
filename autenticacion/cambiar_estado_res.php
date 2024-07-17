<?php
// Conectar a la base de datos
$conexion = new mysqli("localhost", "root", "", "db_fuerza");

// Obtener los datos enviados por la solicitud
$data = json_decode(file_get_contents('php://input'), true);

$id = $data['id'];

// Actualizar el estado del usuario
$sql = "UPDATE usuarios SET estado = 1 WHERE id = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param('i', $id);
$success = $stmt->execute();

echo json_encode(['success' => $success]);
