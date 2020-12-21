<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'subject' => 'required|string|min:4',
            'message' => 'required|string|min:4',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Veuillez completer ce champ svp !',
            'name.min' => 'Ce champ doit contenir :min carractères minimum',
            'email.required' => 'Veuillez completer ce champ svp !.',
            'email.email' => 'Veuillez saisir une addresse mail valide',
            'subject.required' => 'Veuillez completer ce champ svp !',
            'subject.min' => 'Ce champ doit contenir :min carractères minimum',
            'message.required' => 'Veuillez completer ce champ svp !.',
            'message.min' => 'Ce champ doit contenir :min carractères minimum',
        ];
    }
}
