<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderTableRequest extends FormRequest
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
            'user_id' => 'nullable|exists:users',
            'user_name' => 'required|max:255',
            'user_phone' => 'required|integer|max:10',
            'user_address' => 'required',
            'sum' => 'required|integer',
            'itemOrders' => 'required'
        ];
    }
}
