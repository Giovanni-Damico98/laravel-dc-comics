<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePokemonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => ['required', 'string', 'max:50', 'min:3'],
            'specie' => ['required', 'string', 'max:50', 'min:3'],
            'abilita' => ['required', 'string', 'max:100', 'min:3'],
            'elemento' => ['required', 'string', 'in:acqua,fuoco,terra,erba,elettrico,ghiaccio'],
        ];
    }

    public function messages()
    {
        return [
            // messaggi per il campo 'nome'
            'nome.required' => 'Il nome è obbligatorio.',
            'nome.string' => 'Il nome deve essere una stringa di testo.',
            'nome.max' => 'Il nome non può superare i 50 caratteri.',
            'nome.min' => 'Il nome deve avere almeno 3 caratteri.',

            // messaggi per il campo 'specie'
            'specie.required' => 'La specie è obbligatoria.',
            'specie.string' => 'La specie deve essere una stringa di testo.',
            'specie.max' => 'La specie non può superare i 50 caratteri.',
            'specie.min' => 'La specie deve avere almeno 3 caratteri.',

            // messaggi per il campo 'abilita'
            'abilita.required' => 'L’abilità è obbligatoria.',
            'abilita.string' => 'L’abilità deve essere una stringa di testo.',
            'abilita.max' => 'L’abilità non può superare i 100 caratteri.',
            'abilita.min' => 'L’abilità deve avere almeno 3 caratteri.',

            // messaggi per il campo 'elemento'
            'elemento.required' => 'L’elemento è obbligatorio.',
            'elemento.string' => 'L’elemento deve essere una stringa di testo.',
            'elemento.in' => 'L’elemento deve essere uno dei seguenti: acqua, fuoco, terra, erba, elettrico, ghiaccio.',
        ];
    }
}