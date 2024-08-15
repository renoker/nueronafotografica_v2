<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => ['required', 'regex:/^(\+?\d{1,3}[-.\s]?)?\d{10}$/'],
        ];
    }

    public function messages()
    {
        return [
            'name.required'   => 'Es necesario que nos des tu nombre',
            'email.required'  => 'Es necesario que nos des tu Email',
            'phone.required'  => 'Es necesario que nos des tu Teléfono',
            'phone.regex'     => 'El número de teléfono debe ser un número de celular válido de 10 dígitos.',
        ];
    }
}
