<?php $__env->startSection('content'); ?>
    <html>

    <head>
        <title>Ayuda T</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    </head>

    <body>
        <form action="<?php echo e(route('pymes.preview')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="container">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                </div>
                <input name="name" id="name" type="text" class="form-control" placeholder="Nombre" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <br>
            <div class="container">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Cargo</span>
                </div>
                <input name="cargo" id="cargo" type="text" class="form-control" placeholder="Cargo" aria-label="Username"
                    aria-describedby="basic-addon1">
            </div>
            <br>
            <div class="container">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">Teléfono</span>
                </div>
                <input name="phone" id="phone" type="text" class="form-control" placeholder="Teléfono"
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <br>
            <div class="container">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Foto</span>
                </div>
                <input type="file" id="photo" name='photo'>

            </div>
            <br>
            <div class="container">
                <button type="submit" name="btnPreviewAyudaT" id="btnPreviewAyudaT"
                    class="btn btn-outline-primary">Preview</button>
            </div>
        </form>


    </body>


    </html>
    <style type="text/css">
        .circular--square {
            border-radius: 50%;
        }

        /* Form */
        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 300px;
            margin: 0 auto 100px;
            padding: 30px;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
            text-align: center;
        }

        .form .thumbnail {
            background: #3a4cef;
            width: 150px;
            height: 150px;
            margin: 0 auto 30px;
            padding: 50px 30px;
            border-top-left-radius: 100%;
            border-top-right-radius: 100%;
            border-bottom-left-radius: 100%;
            border-bottom-right-radius: 100%;
            box-sizing: border-box;
        }

        .form .thumbnail img {
            display: block;
            width: 100%;
        }

        .form input {
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form button {
            outline: 0;
            background: #3a4cef;
            width: 100%;
            border: 0;
            padding: 15px;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
            color: #FFFFFF;
            font-size: 14px;
            transition: all 0.3 ease;
            cursor: pointer;
        }

        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }

        .form .message a {
            color: #3a4cef;
            text-decoration: none;
        }

        .form .register-form {
            display: none;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }

        .container:before,
        .container:after {
            content: "";
            display: block;
            clear: both;
        }

        .container .info {
            margin: 50px auto;
            text-align: center;
        }

        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }

        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }

        .container .info span a {
            color: #000000;
            text-decoration: none;
        }

        .container .info span .fa {
            color: #3a4cef;
        }

        /* END Form */
        /* Demo Purposes */
        body {
            background: #ccc;
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body:before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            display: block;
            background: rgba(255, 255, 255, 0.8);
            width: 100%;
            height: 100%;
        }

        #video {
            z-index: -99;
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translateX(-50%) translateY(-50%);
        }

    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ProyectoFirma\resources\views/pymes/index.blade.php ENDPATH**/ ?>