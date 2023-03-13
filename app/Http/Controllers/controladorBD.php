<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

#use DB;
use App\Http\Requests\validadorForm1;

class controladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultaConsultas= DB::table('producto')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        DB::table('producto')->insert([
            "Nombre"=>$req->input('txtTitulo'),
            "Descripcion"=>$req->input('txtTitulo1'),
            "created_at"=> Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('/entrada')->with('mensaje','Tu recuerdo se ha guardado en la BD');
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
        $consultaid =DB::table('producto')->where('id',$id)->First();
        return view('editarConsulta', compact('consultaid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        DB::table('producto')->where('id',$id)->update([
            "Nombre"=>$req->input('txtTitulo'),
            "Temporada"=>$req->input('txtTitulo1'),
            "Precio"=>$req->input('txtTitulo2'),
            "Stock"=>$req->input('txtTitulo3'),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('consulta')->with('mensaje', 'Tu consulta está actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm($id){
        $consultaid=DB::table('producto')->where('id',$id)->first();
        return view('confirmElim', compact('consultaid'));
    }

     public function destroy($id)
    {
        DB::table('producto')->where('id',$id)->delete();
        return redirect('consulta')->with('mensaje', 'registro borrado');
    }
}
