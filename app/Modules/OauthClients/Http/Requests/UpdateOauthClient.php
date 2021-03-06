<?php

namespace App\Modules\OauthClients\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOauthClient extends FormRequest
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
            'id'       => 'required|exists:oauth_clients,id',
            'name'     => 'required|max:255',
            'redirect' => 'required|url',
            'user_id'  => 'required|exists:users,id',
            'revoked'  => 'boolean'
        ];
    }
}
