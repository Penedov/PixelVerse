<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;


class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //"chamou" a model
        //$contatos = Contato::all();        
        //$contatos = Contato::where('idContato',3)->get();
        //$contatos = Contato::where('idContato','>=',3)->get();
        //$contatos = Contato::where('emailContato','=','amaria@gmail.com')->get();
        //$contatos = Contato::where('idContato','>',0)->orderBy('emailContato','desc')->get();
        $contatos = Contato::where('idContato','>',0)->orderBy('emailContato','asc')->get();

        //nome da view      //atributo $contatos sem $
        return view('contato',compact('contatos')); 
    }

    public function indexApi(){
        $contato = Contato::all();        
        return $contato;   
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contato = new Contato();
            $contato->nomeContato = $request->txNome;
            $contato->emailContato = $request->txEmail;
            $contato->assuntoContato = $request->txAssunto;
            $contato->mensagemContato = $request->txMensagem;

            $contato ->save();

            return redirect('/contato');
    }

    public function storeApi(Request $request)
    {
        $contato = new Contato();
        $contato->nomeContato = $request->nome;
        $contato->emailContato = $request->email;
        $contato->assuntoContato = $request->assunto;
        $contato->mensagemContato = $request->mensagem;

        $contato ->save();
        
        return response()->json([
            'message'=> 'Contato criado com successo',
            'code'=>200]
        );
        
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
