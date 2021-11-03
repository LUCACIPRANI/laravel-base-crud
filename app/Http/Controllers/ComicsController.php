<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comics;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comicons = Comics::all();
        return view('comics.index', compact('comicons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'title' => 'required|unique:comics|max:50',
            'type' => 'required|max:20'
        ]);

        $new_comics = new Comics();
        // $new_comics->title = $data['title'];
        // $new_comics->description = $data['description'];
        // $new_comics->thumb = $data['thumb'];
        // $new_comics->price = $data['price'];
        // $new_comics->series = $data['series'];
        // $new_comics->sale_date = $data['sale_date'];
        // $new_comics->type = $data['type'];
        $new_comics->fill($data);
        $new_comics->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comics::find($id);
        return view('comics.show', compact('comics'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics = Comics::findORFail($id);
        return view('comics.edit', compact('comics'));

        // OPPURE 
        // if($dettaglio_comics) {
        //     return view('comics.edit', compact('comics'));
        // }
        // abort(404);
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
        $data = $request->all();
        $comics = Comics::find($id);
        $comics->update($data);
        return redirect()->route('comics.index', $comics['id']);
        // l'aggiunta di '$comics['id']' serve per reindirizzare la pagina al dettaglio dell'elemento modificato, e quindi si puo anche tralasciare;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comics = Comics::find($id);
        $comics->delete();
        return redirect()->route('comics.index');
    }
}
