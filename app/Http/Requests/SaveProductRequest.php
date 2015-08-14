<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveProductRequest extends Request
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
            'name'          => 'required',
            'description'   => 'required',
            'extract'       => 'required',
            'price'         => 'required',
            'image'         => 'required',
            'category_id'   => 'required'
        ];
    }
}
