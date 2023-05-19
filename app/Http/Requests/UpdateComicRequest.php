<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'nullable|max:65000',
            'thumb' => 'required|url|max:255',
            'price' => 'required|numeric|decimal:2',
            'series' => 'required|max:100',
            'sale_date' => 'nullable|max:20',
            'type' => 'nullable|max:30',
        ];
    }

    public function messages(){
        return[
            'title.required' => 'Titolo richiesto.',
            'title.max' => 'Il titolo puo avere massimo 255 caratteri',

            'description.max' => 'Lunghezza massima descrizione di 65000 caratteri',

            'thumb.required' => 'URL richiesto',
            'thumb.url' => 'L\'URL inserito non è valido',
            'thumb.max' => 'l\'URL puo avere massimo 255 caratteri',

            'price.required' => 'Prezzo richiesto.',
            'price.numeric' => 'Il prezzo inserito deve essere un numero',
            'price.decimal' => 'Il prezzo inserito deve avere 2 decimali',

            'series.required' => 'nome della Serie richiesto',
            'series.max' => 'Il nome inserito puo avere massimo 100 caratteri',

            'sale_date.max' => 'La data inserita puó avere massimo 20 caratteri',

            'type.max' => 'Il tipo inserito puo avere massimo 30 caratteri',
        ];
    }
}
