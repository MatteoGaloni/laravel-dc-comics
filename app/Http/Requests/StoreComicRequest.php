<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:50',
            'description' => 'nullable|min:10|max:1000',
            'thumb' => 'nullable|url',
            'price' => 'nullable|regex:/^\d+(\.\d{1,2})?$/',
            'series' => 'required|min:3|max:20',
            'sale_date' => 'nullable|date_format:Y-m-d',
            'type' => 'required|min:10|max:50',
        ];
    }
    public function message()
    {
        return [
            "title.required" => "Mi dispiace ma il titolo è obbligatorio",
            "title.min" => "Mi dispiace il titolo deve essere di almeno 5 caratteri",
            "title.max" => "Il titolo deve essere almeno di almeno 50 caratteri",
            "description.min" => "La descrizione deve essere almeno di almeno 10 caratteri",
            "description.max" => "La descrizione deve essere inferiore hai 1000 caratteri",
            "thumb.url" => "Devi inserire un url ",
            "price.required" => "Il prezzo è obbligatorio",
            "price.regex" => "errore nel formato",
            // "price.between" => "Il prezzo deve essere un numero positivo",
            "series.required" => "Mi dispiace il campo deve essere popolato",
            "series.min" => "Mi dispiace il campo deve essere di almeno 3 caratteri",
            "series.max" => "Mi dispiace il campo deve essere inferiore ai 20 caratteri",
            "sale_date.date_format" => "Mi dispiace quella che hai inserito non è una data di tipo Y-m-d",
            "type.required" => "Mi dispiace ma questo campo è obbligatorio",
        ];
    }
}
