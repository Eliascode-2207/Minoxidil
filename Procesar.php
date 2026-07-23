<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturamos los datos enviados por el formulario de manera segura
    $nombre = htmlspecialchars($_POST['nombre']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $direccion = htmlspecialchars($_POST['direccion']);
} else {
    // Si entran directamente a este archivo sin llenar el formulario, los devolvemos al inicio
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedido Recibido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5 text-center">
        <div class="card shadow-sm p-5 border-0 mx-auto" style="max-width: 600px;">
            <div class="mb-4">
                <span class="text-success display-1">✔</span>
            </div>
            <h2 class="fw-bold text-success mb-3">¡Muchas gracias por tu pedido, <?php echo $nombre; ?>!</h2>
            <p class="text-muted mb-4">
                Hemos registrado tus datos correctamente. Nos pondremos en contacto contigo a través de WhatsApp (<strong><?php echo $telefono; ?></strong>) para coordinar el envío a la dirección: <strong><?php echo $direccion; ?></strong>.
            </p>
            <a href="index.php" class="btn btn-dark">Regresar a la tienda</a>
        </div>
    </div>
</body>
</html>