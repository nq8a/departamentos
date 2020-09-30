<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::select('users.id','users.name1','users.name2','users.lastname1','users.lastname2','status.name','departaments.name as depa', 'users.email')
        ->join('status', 'status.id','=','users.status')
        ->join('departaments','departaments.id','=','users.depa')
        ->where('status.id',1)
        ->orderby('id')
        ->paginate(5);

        return view('user/index', compact('users'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user/add_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $count_user = User::count();
        $id_user = ($count_user + 1);
        $count = User::Where('email','=',$request->email)->count();
        if($count == 0){
            User::create(array(
                'name1' => $request->name1,
                'name2'  => $request->name2,
                'lastname1' => $request->lastname1,
                'lastname2' => $request->lastname2,
                'status' => 1,
                'depa' => $request->depa,
                'email' => $request->email,
                'password' => Hash::make($request->pass)
            ));

            Role::create(array(
            'id' => $id_user,
            'user' => $id_user,
            'depa'  => $request->depa,
            'status' => 1
            ));
            return view('user/add_exitoso');
        }else{
            return view('user/existe');
        }



        return($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $roles = Role::select('users.id','users.name1','users.lastname1','departaments.name as depa')
        ->join('departaments','departaments.id','=','roles.depa')
        ->join('users','roles.user','=','users.id')
        ->where('roles.user',$id)
        ->orderby('id')
        ->paginate(5);

        return view('role/consulta',compact('roles'));
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::select('users.id','users.name1','users.name2','users.lastname1','users.lastname2','status.name','departaments.name as depa', 'users.email')
        ->join('status', 'status.id','=','users.status')
        ->join('departaments','departaments.id','=','users.depa')
        ->where('users.id',$id)
        ->first();
        return view('user/mod_user', compact('users'));
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

        $count = User::where('id', $id)->count();
        if($count == 0){
         return('users/no_existe');
        }else{

         User::where('id', $id)
        ->update([
                     'name1' => $request['name1'],
                     'name2' => $request['name2'],
                     'lastname1' => $request['lastname1'],
                     'lastname2' => $request['lastname2'],
                     'depa' => $request['depa'],
                     'status' => $request['status'],
                     'email' => $request['email']
                 ]);

                 return view('user/mod_exitosa');     
        }
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
