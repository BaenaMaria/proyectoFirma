<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PymesController extends Controller
{
    public function index()
    {
        return view('pymes.index');

        $name = $_POST['basic-addon1'];

    }
    public function preview()
    {

    }
}
