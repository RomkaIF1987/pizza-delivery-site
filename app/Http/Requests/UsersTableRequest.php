<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersTableRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|max:10|unique:users',
            'password' => 'required|min:6',
            'city' => 'nullable|string|max:255',
            'street' => 'nullable|string|max:255',
            'house' => 'nullable|string|max:255',
            'room' => 'nullable|string|max:255',
        ];
    }
}
