<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Crear cliente</title>
</head>
<body>

<div id="container">
	<h1>Crear cliente</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('clientes/create'); ?>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="telefono">Telefono:</label>
        <input type="telefono" name="telefono" id="telefono" required><br>

        <label for="direccion">Direccion:</label>
        <input type="direccion" name="direccion" id="direccion" required><br>

        <input type="submit" value="Crear">
    <?php echo form_close(); ?>
</div>

</body>
</html>
