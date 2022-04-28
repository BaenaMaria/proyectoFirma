
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <label>Nombre: <?php echo e($name); ?></label>
    <br>
    <label>Cargo: <?php echo e($cargo); ?></label>
    <br>
    <label>Teléfono: <?php echo e($phone); ?></label>
    <br>
    <label>Foto: </label><img src="<?php echo e($photo); ?>">
</body>
</html>
<?php /**PATH C:\laragon\www\ProyectoFirma\resources\views/AyudaT/preview.blade.php ENDPATH**/ ?>