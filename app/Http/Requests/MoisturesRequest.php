<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoisturesRequest extends FormRequest
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
    public function messages()
    {
        return [
            'moisture.required' => 'É necessário enviar o estado de úmidade',
        ];
    }

    public function rules()
    {
        switch (strtolower($this->route()->getActionMethod())):
            case 'store_moisture':
                return [
                    'moisture' => 'required',
                ];
                break;

            default:
                return [];
                break;
        endswitch;
    }
}
