<?php

namespace App\Modules\PushNotificationDevices\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertPushNotificationDevice extends FormRequest
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
            'device_token' => 'required|string|max:255',
            'user_id'      => 'required|exists:users,id'
        ];
    }
}
