<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function config() {
        return view('user.homeUser');
    }
    public function editarPerfil() {
        return view('user.editarUser');
    }


    public function update(Request $request) {
        // Conseguir usuario identificado y su id
        $user = \Auth::user();
        $id = \Auth::user()->id;
        
        // Validacion de los campos
        $validate = $this->validate($request, [
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$id,
            'username' => 'required|string|max:255|unique:users,nick,'.$id ,
            'telefono' => 'required|numeric|min:5',
            'sitio' => 'min:5',
            'sexo' => 'string',
        ]);

        // Almacenar en un variable los datos del formulario
        $nombre = $request->input('nombre');
        $username = $request->input('username');
        $sitio = $request->input('sitio');
        $biografia = $request->input('biografia');
        $email = $request->input('email');
        $telefono = $request->input('telefono');
        $sexo = $request->input('sexo');

        //Setear valores a nuetro objeto user
        $user->name = $nombre;
        $user->nick = $username;
        $user->email = $email ;
        $user->telefono = $telefono ;
        $user->sexo = $sexo;
        $user->sitio = $sitio ;
        $user->biografia = $biografia ;

        //Recibir imagen
        $imagen = $request->file('avatar');
        
        if($imagen){
            $image_full = time().$imagen->getClientOriginalName();
            //Storage
            Storage::disk('users')->put($image_full, File::get($imagen));
            
            $user->image = $image_full;
        
        }
        // Ejecutar query
        $user->update();

        return redirect()->route('editar-perfil')->
                with(['message' => 'Usuario actualizado correctamente']);
    }

    public function getAvatar($filename){
        $file = Storage::disk('users')->get($filename);
        return new Response($file,200);
    }
}
