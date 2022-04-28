<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AyudaT;
use Illuminate\Support\Str;

class PymesController extends Controller
{
    public function index()
    {
        return view('pymes.index');



    }
    public function create(array $data){
        return AyudaT::create([
            'name' => $data['name'],
            'cargo' => $data['cargo'],
            'phone' => $data['phone'],
            'photo' => $data['photo'],
        ]);
    }

    public function preview(Request $request)
    {
        $ayudaT = $request->all();

        if (isset($_POST['btnPreviewAyudaT'])) {


            if ($photo=$request->file('photo')) {
                $photo       =   $request->file('photo');
                $nombreimagen   =   Str::slug("nombre").time().'.'.$photo->getClientOriginalExtension();
                $nuevaruta      =   public_path('/imagen/'.$nombreimagen);
                copy($photo->getRealPath(),$nuevaruta);
                $ayudaT['photo']='/imagen/'.$nombreimagen;

            } else {

                $rutaGuardarImg = '/imagen/';
                $ayudaT['photo'] = (string)$rutaGuardarImg . "default.jpg";
            }

            return view('pymes.preview', compact('ayudaT'));
        }
    }
}
