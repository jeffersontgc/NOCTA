<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamCreateRequest extends FormRequest
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

      /*CON RULES AGREGASMOS NUESTRAS VALIDACIONES DE FORMULARIO DE LOGIN O REGISTER*/
    public function rules()
    {
        return [
                'nombre' => 'required',
                'estadio' => 'required',
                'fundacion' => 'required|max:4',
                'jugadores' => 'required',
        ];
    }


       /*CON ATRIBUTOS PODEMOS CUSTOMIZAR EL MENSAJE DE VALIDACIONES A NUESTRO GUSTO*/
    //  public function attributes()
    // {
       
    // }
}
