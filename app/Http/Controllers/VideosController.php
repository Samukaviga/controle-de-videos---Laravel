<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideosFormRequest;
use Illuminate\Http\Request;
use App\Models\Videos;

class VideosController extends Controller
{

    public function index()
    {

        $videos = Videos::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('videos.index')->with('videos', $videos)
                                    ->with('mensagemSucesso', $mensagemSucesso);
    }


    public function create()
    {
        return view('videos.create');
    }


    public function store(VideosFormRequest $request)
    {
        Videos::create($request->all());

        return redirect('/videos')->with('mensagem.sucesso', "Video '$request->descricao' Adicionado com sucesso!");
        
    }

    public function edit(Videos $videos, Request $request)
    {
         $video = $videos::find($request->id);

        return view('videos.edit')->with('video', $video);
    }   

    public function update(Videos $videos, VideosFormRequest $request)
    {
        $video = $videos::find($request->id);
    
        $video->url = $request->url;
        $video->descricao = $request->descricao;
        $video->save();

        return redirect('/videos')->with('mensagem.sucesso', "Video '$video->descricao' atualizado com sucesso!");
    }

    public function destroy( Videos $videos ,Request $request)
    {   
        $video = $videos::find($request->id);

        $videos::destroy($request->id);
    
        return redirect('/videos')->with('mensagem.sucesso', "Video '$video->descricao' excluido");
    }

    public function show($id)
    {
        
    }
}
