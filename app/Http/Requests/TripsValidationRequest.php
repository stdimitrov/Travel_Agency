<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TripsValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:30',
            'title' => 'required|string|min:5|max:100',
            'second_title' => 'required|string|min:5|max:100',
            'overview' => 'required|string|min:3|min:5|max:1000',
            'description' => 'required|string|min:5|max:1000',
            'second_description' => 'required|string|min:5|max:1000',
            'price_one' => 'required|Integer',
            'price_two' => 'required|Integer',
            'included' => 'required|string|max:255',
            'not_included' => 'required|string|max:255',
            'discount' => 'required',
            //'created_at' => 'nullable|date',
            //'updated_at' => 'nullable|date|after:created_at'
        ];
    }
}
