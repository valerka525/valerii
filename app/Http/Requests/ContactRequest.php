<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required|min:5|max:50',
        'message' => 'required|min:15|max:500'
        ];
    }

    public function messages() {
      return [
        'name.required' => 'Поле имя не заполнено',
        'email.required' => 'Поле email не заполнено',
        'subject.required' => 'Поле "Тема сообщения" не заполнено',
        'message.required' => 'Поле "Сообщение" не заполнено'
      ];
    }
}
