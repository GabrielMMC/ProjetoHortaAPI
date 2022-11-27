<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogStatusRequest extends FormRequest
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
            'on.required' => 'É necessário enviar o status do arduino',
        ];
    }

    public function rules()
    {
        switch (strtolower($this->route()->getActionMethod())):
            case 'store_log_status':
                return [
                    'on' => 'required',
                ];
                break;

            default:
                return [];
                break;
        endswitch;
    }
}
