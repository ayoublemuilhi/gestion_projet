<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProjetUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nom_projet' => 'required',
            'realisation' => 'required|numeric',
            'prevision' => 'required|numeric',
            'indicateur' => 'required',
            'date' => 'required|date'
        ];
    }

    public function messages()
    {
        return [
            'nom_projet.required' => 'nom projet est requis.',
            'realisation.required' => 'le champs realisation est  requis.',
            'realisation.numeric' => 'le champs realisation est doit etre numeric .',
            'prevision.required' => 'le champs prevision est  requis.',
            'prevision.numeric' => 'le champs prevision est doit etre numeric .',
            'indicateur.required' => 'le champs indicateur est  requis.',
            'date.required' => 'le champs date est  requis.',
        ];
    }
}
