<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'time_id'=>['required'],
            'person_id'=>['required'],
            'date'=>['required'],
        ];
    }

    public function messages(){
        return[
            'time_id.required'=>'時間を選択してください',
            'person_id.required'=>'人数を選択してください',
            'date.required'=>'日付を選択してください'
        ];
    }
}
