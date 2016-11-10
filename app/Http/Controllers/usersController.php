<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Paciente;
use App\Doctor;
use Laracasts\Flash\Flash;
use App\Http\Requests\userRequest;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         $user = User::orderBy('id','ASC')->paginate(10);
        return view('admin.users.index')->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User($request->all());

        $user ->password = bcrypt($request->password);
        $user -> save();


        if($request->id_tipo==2) {

        $doctor=Doctor::create(['id_user'=>$user->id]);
        
        }

        if($request->id_tipo==3) {

            $paciente =Paciente::create(['id_user'=>$user->id]);
        }


        Flash::success('Usuario '  .$user->email. ' Registrado');
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        return view('admin.users.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        $user->email = $request->email;
        $user->id_tipo=$request->id_tipo;

        $user->save();

        Flash::warning('Usuario Editado Correctamente');
        return redirect()->route('admin.users.index');
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

        Flash::error('Usuario '.$user->nombre. ' Eliminado Correctamente');
        return redirect()->route('admin.users.index');
    }
}
