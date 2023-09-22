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
            'email' => 'required|email',
            'phone'    => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'   => 'Es necesario que nos des tu nombre',
            'email.required'   => 'Es necesario que nos des tu Email',
            'phone.required'   => 'Es necesario que nos des tu Teléfono',
        ];
    }
}
