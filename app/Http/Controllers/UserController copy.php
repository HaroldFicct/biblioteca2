<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    //Mostrar una lista de los registros
    public function index(){
        $users = User::all();
        return view('usuarios',['users'=>$users]);
    }

    //Mostrar el formulario para crear un nuevo registro
    public function create(){

    }

    //Almacenan los regustros recien creados de create en la base de datos
    public function store(){

    }

    //Mostramos un registro en especifico
    public function show(){

    }

    //Muestra el formulario con los datos a editar de un registro especifico
    public function edit(){

    }

    //Actualizar un registro en la base de datos
    public function update(){

    }

    //Eliminar un registro especifico de la base de datos
    public function destroy(){
        
    }


}
