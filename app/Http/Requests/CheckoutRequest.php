<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'nickname' => 'required',
            'suname' => 'required',
            'country' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'card_no' => 'required|numeric',
            'yy' => 'required|numeric',
            'mm' => 'required|numeric'
        ];
    }
}
