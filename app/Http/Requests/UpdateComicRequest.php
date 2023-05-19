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
            'title'=>'required|max:50',
            'description'=>'nullable|max:65535',
            'thumb'=>'required|url|max:255',
            'price'=>'required|max:10',
            'series'=>'required|max:50',
            'sale_date'=>'date:10',
            'type'=>'required|max:20'
        ];
    }
}
