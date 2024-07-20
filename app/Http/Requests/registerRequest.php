<?php

namespace App\Http\Requests;

//use Rules\Password;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:50', 'unique:pgsql.users.users,email'],
            'commune' =>['required', 'string','max:50'],
            'zone' => ['required','string','max:50'],
            'quorter' =>['string','max:50'],
            'av' =>['required', 'string','max:50'],
            'house' => ['required', 'max:3',],
            'password' => ['required','min:6','max:8', 'confirmed']
        ];
    }
}
