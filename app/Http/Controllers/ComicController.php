<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
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
    public function store(StoreComicRequest $request)
    {
        //Validazione dei dati
        //utilizzando un'array associativo
        //require: riuchiede qualcosa  
        // $request->validate([
        //     'title'=>'required|max:50',
        //     'description'=>'nullable|max:65535',
        //     'thumb'=>'required|url|max:255',
        //     'price'=>'required|max:10',
        //     'series'=>'required|max:50',
        //     'sale_date'=>'date:10',
        //     'type'=>'required|max:20'
        // ]);
        // $form_data = $request->all();

        $form_data = $request->validated();
        $newComic = new Comic();
        $newComic->fill($form_data);
        // $newComic->title = $form_data['title'];
        // $newComic->description = $form_data['description'];
        // $newComic->thumb = $form_data['thumb'];
        // $newComic->price = $form_data['price'];
        // $newComic->series = $form_data['series'];
        // $newComic->sale_date = $form_data['sale_date'];
        // $newComic->type = $form_data['type'];
        $newComic->save();

        return redirect()->route('comics.index')->with('status', 'Aggiunto con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic) //$id
    {
        // $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        // $comic = Comic::findOrFail($id);

        //Metodo di validazione n1
        // $request->validate([
        //     'title'=>'required|max:50',
        //     'description'=>'nullable|max:65535',
        //     'thumb'=>'required|url|max:255',
        //     'price'=>'required|max:10',
        //     'series'=>'required|max:50',
        //     'sale_date'=>'date:10',
        //     'type'=>'required|max:20'
        // ]);
        $form_data = $request->validated();
        $comic->update($form_data);
        return redirect()->route('comics.index')->with('status', 'Aggiornato con successo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }

    /*
        private function validation($data) {

            $validator = Validator::make(
                //array associativo di ($request->all())
                $data,
                //regole di validazione
                [
                    'title'=>'required|max:50',
                    'description'=>'nullable|max:65535',
                    'thumb'=>'required|url|max:255',
                    'price'=>'required|max:10',
                    'series'=>'required|max:50',
                    'sale_date'=>'date:10',
                    'type'=>'required|max:20'
                ],
                //Messaggi di errore custom
                [
                    'title.required' => "Il titolo deve essere lungo massimo 50 caratteri."
                ]
            )->validate();
        return $validator; 
        }
    */
}
