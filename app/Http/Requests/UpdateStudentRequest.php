<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

                'name' => 'required|string|max:255',
                'birthday' => 'date',
                'address' => 'string|max:255',
                'phone' => 'string|max:20',
                'city_id' => 'exists:cities,id',
                'gender_id' => 'exists:genders,id',
                'stage_id' => 'exists:stages,id',
                'email' => 'email|unique:students,email,' ,
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

        ];
    }
}
