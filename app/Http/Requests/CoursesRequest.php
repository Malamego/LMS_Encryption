<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoursesRequest extends FormRequest
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
            'name'            => 'required',
            'cat_id'          => 'required',
            'desc'            => 'nullable',
            'metatitle'       => 'nullable',
            'metadescr'       => 'nullable',
            'metakeyword'     => 'nullable',
            'price'           => 'sometimes|nullable|numeric',
        ];
    }


    public function attributes()
    {
        return [
            'name'              => trans('main.name'),
            'cat_id'            => trans('main.category'),
            'desc'              => trans('main.description'),            
            'metatitle'         => trans('main.metatitle'),
            'metadescr'         => trans('main.metadescr'),
            'metakeyword'       => trans('main.metakeyword'),
            'price'            => trans('main.price'),
        ];
    }
}
