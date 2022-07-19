<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EvidenciaFormRequest extends FormRequest
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
            'evid_descri'=>'required|min:2'    //
        ];
    }
    public function messages(){
        return [
        // 'descri.required'=>'O prenchimento do campo Descrição é obrigatório',
        'required'=>'O prenchimento do campo :attribute é obrigatório',
        'evid_descri.min'=>'O campo descrição deve ter pelo menos dois caracteres'
        ];
    }
}
