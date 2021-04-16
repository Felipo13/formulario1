<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

        return view('projects.index', [

            'projects' => Proyecto::latest()->paginate()

        ]);
    }


    public function show($id)
    {

        return view('projects.show', [
            'project' => Proyecto::findOrFail($id)
        ]);

    }


    public function create()
    {
       return view('projects.create');
    }

    
    public function store(){

        Proyecto::create([

            'nombre'=>request('nombre'),
            'paterno'=>request('paterno'),
            'materno'=>request('materno'),
            'correo'=>request('correo'),
            'carrera'=>request('carrera')

        ]);

        return redirect()->route('portafolio.index');

    }


}