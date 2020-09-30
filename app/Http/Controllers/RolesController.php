<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Departament;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $roles = Role::select('roles.id','users.name1', 'users.lastname1', 'status.name','departaments.name as depa', 'users.id as id_user')
            ->join('status','status.id','=','roles.status')
            ->join('departaments', 'departaments.id','=','roles.depa')
            ->join('users','users.id','=','roles.user')
            ->where('roles.status', 1)
            ->orderby('id')
            ->paginate(5);
            return view('role/index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::select('users.name1','users.lastname1','users.id')
        ->where('status',1)
        ->get();
        $departaments = Departament::select('departaments.name','departaments.id')
        ->where('status',1)
        ->get();
        return view('role/add_role', compact('users', 'departaments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $count = User::select('*')
        ->join('departaments','departaments.id','=','users.depa')
        ->where('users.id',$request->user)
        ->where('departaments.id',$request->depa)
        ->count();
        if($count == 0){
            Role::create(array(
            'user' => $request->user,
            'depa'  => $request->depa,
            'status' => 1
            ));

            return view('role/add_exitoso');}else{
                return view('role/ya_tiene');
            }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
