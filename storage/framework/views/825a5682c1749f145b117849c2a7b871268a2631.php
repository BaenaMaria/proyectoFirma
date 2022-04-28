<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form>
        <a href="<?php echo e(route('pymes.index')); ?>" type="submit" name="btnPymes" id="btnPymes" class="btn btn-outline-primary">Ayuda T Pymes</a>
        <br><br>
        <a href="<?php echo e(route('ayudat.index')); ?>" type="submit" name="btnAyudaT" id="btnAyudaT" class="btn btn-outline-primary">Ayuda T</a>
        <br><br>
        <a href="<?php echo e(route('edase.index')); ?>" type="submit" name="btnEdase" id="btnEdase" class="btn btn-outline-primary">Edase</a>
    </form>
</body>
</html>
<?php /**PATH C:\laragon\www\ProyectoFirma\resources\views/welcome.blade.php ENDPATH**/ ?>