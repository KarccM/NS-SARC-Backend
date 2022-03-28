<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'nat_id' => 'required|unique:personal,nat_id|digits:11',
            'fst_nm' => 'required|max:30',
            'mdl_nm' => 'required|max:30',
            'lst_nm' => 'required|max:30',
            'mthr_nm' => 'required|max:30',
            'gender' => 'required',
            'birth_date'  => 'required|before:2003-01-01',
            'birth_place' => 'required|max:200',
            'marital_status' => 'required',
            'mobile' => 'required|digits:10',
            'phone' => 'required|digits:10',
            'certificate_type' => 'required',
            'certificate_Details' => 'required',
            'engName' => 'required',
            'shoes_size' => 'required',
            'waist_size' => 'required',
            'shoulders_size' => 'required',
        ];
    }
}
