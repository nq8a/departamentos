<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departament;

class DepartamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $depas = Departament::select('departaments.id','departaments.name', 'status.name as status')
        ->join('status','status.id','=','departaments.status')
        ->where('departaments.status', 1)
        ->orderby('id')
        ->paginate(5);
        return view('departamento/index', compact('depas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departamento/add_depa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = Departament::select('*')->where('name',$request->depa)->count();

        if($count == 0){
            Departament::create(array(
                'name' => $request->depa,
                'status' => 1,
            ));
            return view('departamento/add_exitoso');
        }else{
            return view('departamento/existe');
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
        $depas = Departament::select('departaments.id','departaments.name', 'status.name as status')
        ->join('status','status.id','=','departaments.status')
        ->where('departaments.id',$id)
        ->first();
        return view('departamento/mod_depa', compact('depas'));
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
        $count = Departament::where('id', $id)->count();
        if($count == 0){
         return('departamento/no_existe');
        }else{

         Departament::where('id', $id)
        ->update([
                     'name' => $request['name'],
                     'status' => $request['status']
                 ]);

                 return view('departamento/mod_exitosa');     
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
