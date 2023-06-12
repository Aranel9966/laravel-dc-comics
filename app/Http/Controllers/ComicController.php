<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        return view('comics/home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
        $formData = $request->all();
        $newComics = new Comic();
        $newComics->fill($formData);
        $newComics->save();
        return redirect()->route('comics.show', $newComics->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics/showComics', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validation($request);

        $formData = $request->all();
        $comic->update($formData);
        $comic->save();
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }


    private function validation($request)
    {
        $formData = $request->all();

        $validator = Validator::make($formData, [
            'title' => 'required|max:50|min:5',
            'description' => 'required|min:10',
            'thumb' => 'required|max:255',
            'price' => 'required|max:10',
            'series' => 'required|max:10',
            'sale_date' => 'required|max:10',
            'type' => 'required|max:10',
            'artists' => 'required|max:50',
            'writers' => 'required|max:50',
        ], [
            'title.max' => "il titolo non deve essere più lungo di :max caratteri",
            'title.required' => "Il titolo deve essere indicato",

            'description.min' => "La descrizione non deve essere meno lunga di 10 caratteri",
            'description.required' => "La descrizione deve essere indicata",


            'thumb.max' => "l'indirizzo non deve essere più lungo di 255 caratteri",
            'thumb.required' => "Il link dell'immagine deve essere indicato",

            'price.max' => "il price non deve essere più lungo di 10 caratteri",
            'price.required' => "Il prezzo deve essere indicato",


            'series.max' => "la serie non deve essere più lungo di 10 caratteri",
            'series.required' => "La serie deve essere indicata",


            'sale_date.max' => "la data non deve essere più lungo di 10 caratteri",
            'sale_date.required' => "La data deve essere indicata",


            'type.max' => "il tipo non deve essere più lungo di 10 caratteri",
            'type.required' => "Il tipo deve essere indicato",


            'artists.max' => "l' artista non deve essere più lungo di 50 caratteri",
            'artists.required' => "l' artista deve essere indicato",


            'writers.max' => "gli scrittori non deve avere il nome più lungo di 50 caratteri",
            'writers.required' => "gli scrittori devono essere indicati",

        ])->validate();

        return $validator;
    }
}
