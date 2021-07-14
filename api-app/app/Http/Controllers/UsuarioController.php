<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonReponse;

class UsuarioController extends Controller
{
    public function __construct(
        protected Usuario $user,
    )
    {

    }
    
   
    public function index(): JsonResponse
    {
        return response()
            ->json($this->user::all(), Response::HTTP_OK);
        
    }

    public function show($id): JsonResponse
    {
        return response()
        ->json($this->user::find($id), Response::HTTP_OK);
    }

    public function create(Request $request): JsonResponse
    {
        $request->validate(
            [
                'nome' => 'required',
                'idade' => 'required',
                'sexo' => 'required',
            ]
        );

        $this->user::create($request->all());

        return response()
        ->json(['mesagem' => 'Registro Salvo'], Response::HTTP_CREATED);
    }

    public function update($id, Request $request): JsonResponse
    {
        $request->validate(
            [
                'nome' => 'required',
                'idade' => 'required',
                'sexo' => 'required',
            ]
        );

        $usurio = $this->user::find($id)->get();
        $usurio->update($request->all());

        return response()
        ->json(['mesagem' => 'Registro Salvo'], Response::HTTP_ALTER);
    }
}
