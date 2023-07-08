<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComicRequest;
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
        $someLinks = config('someLinks');
        return view('comics.index', compact('comics', 'someLinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $someLinks = config('someLinks');
        return view('comics.create', compact('someLinks'));
    }

    // private function validateComic($data)
    // {
    //     $validator = Validator::make(
    //         $data,
    //         [
    //             'title' => 'required|min:5|max:50',
    //             'description' => 'nullable|min:10|max:1000',
    //             'thumb' => 'nullable|url',
    //             'price' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
    //             'series' => 'required|min:3|max:20',
    //             'sale_date' => 'nullable|date_format:Y-m-d',
    //             'type' => 'required|min:10|max:50',
    //         ],
    //         [
    //             "title.required" => "Mi dispiace ma il titolo è obbligatorio",
    //             "title.min" => "Mi dispiace il titolo deve essere di almeno 5 caratteri",
    //             "title.max" => "Il titolo deve essere almeno di almeno 50 caratteri",
    //             "description.min" => "La descrizione deve essere almeno di almeno 10 caratteri",
    //             "description.max" => "La descrizione deve essere inferiore hai 1000 caratteri",
    //             "thumb.url" => "Devi inserire un url ",
    //             "price.required" => "Il prezzo è obbligatorio",
    //             "price.regex" => "errore nel formato",
    //             // "price.between" => "Il prezzo deve essere un numero positivo",
    //             "series.required" => "Mi dispiace il campo deve essere popolato",
    //             "series.min" => "Mi dispiace il campo deve essere di almeno 3 caratteri",
    //             "series.max" => "Mi dispiace il campo deve essere inferiore ai 20 caratteri",
    //             "sale_date.date_format" => "Mi dispiace quella che hai inserito non è una data di tipo Y-m-d",
    //             "type.required" => "Mi dispiace ma questo campo è obbligatorio",
    //         ]
    //     )->validate();
    //     return $validator;
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        $data = $request->validated();
        // *******************************************
        // $data = $this->validateComic($request->all());

        $newComic = new Comic();
        $newComic->fill($data);

        // ***************************************
        // foreach ($data as $key => $value) {
        //     $newcomic[$key] = $value;
        // }
        // ***************************************    
        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];
        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $someLinks = config('someLinks');
        return view('comics.show', compact('comic', 'someLinks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $someLinks = config('someLinks');
        return view('comics.edit', compact('comic', 'someLinks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreComicRequest $request, Comic $comic)
    {
        $data = $request->validated();
        $comic->fill($data);
        // ************************************************
        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        $comic->update();

        // $comic->update($data);
        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // altro metodo per recuperare id
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
