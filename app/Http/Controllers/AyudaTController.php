<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyudaTController extends Controller
{

    public function index()
    {
        return view('Ayudat.index');

        $name = $_POST['name'];
        $cargo = $_POST['cargo'];
        $phone = $_POST['phone'];
        $photo = $_POST['photo'];

        if ($photo->file('photo')) {
            $rutaGuardarImg='/imagen/';
            $imagenNombre = $name.$cargo;
            $photo->move($rutaGuardarImg,$imagenNombre );
            $photo=(string)$rutaGuardarImg.$imagenNombre;



        }
        else {

            $rutaGuardarImg='/imagen/';
            $photo=(string)$rutaGuardarImg."dafault.jpg";
        }



    }
    public function preview()
    {
        if (isset($_GET['btnPreviewAyudaT'])) {

            $name = $_GET['name'];
            $cargo = $_GET['cargo'];
            $phone = $_GET['phone'];
            $photo = $_GET['photo'];

            return view('AyudaT.preview', $name, $cargo, $phone, $photo);
        }
    }

}
