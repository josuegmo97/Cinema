<?php

namespace Cinema\Http\Controllers;

use Cinema\User;
use Illuminate\Http\Request;
use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserUpdateRequest;
use Illuminate\Routing\Route;
use Session;
use Redirect;

class UsuarioController extends Controller
{
     public function __construct()
    {
        //$this->beforeFilter('@find' , ['only' => 'edit' , 'update' , 'destroy']);
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /*
    public function find(Route $route)
    {
        $this->user = User::find($route->getParameter());
    } */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::onlyTrashed()->paginate(5);
        $users = User::paginate(10);

        return view('usuario.index' , ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        User::create($request->all());

        Session::flash('message', 'Usuario Creado Correctamente.');
        return redirect('/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('usuario.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();

        Session::flash('message', 'Usuario Editado Correctamente.');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        Session::flash('message', 'Usuario Eliminado Correctamente.');
        return Redirect::to('/usuario');
    }
}
