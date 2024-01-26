<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
            'title' => ['required', 'max:200', 'min:5', Rule::unique('projects')->ignore($this->project)],
            'description' => ['nullable'],
            'type_id' => ['nullable', 'numeric', 'exists:types,id']
        ];
        
    }
    public function messages()
    {
        return
        [ 
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve essere lungo almeno :min caratteri',
            'title.max' =>'Il titolo deve essere lungo massimo :max caratteri',
        ];
       
    }
}
