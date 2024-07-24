<?php

namespace App\Http\Requests;

use App\Models\Collect;
use App\Rules\outMonth;
use Auth;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class CollectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (Auth::user()->is_admin) {
            return true;
        } else return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'quorter' => ['string','exists:pgsql.city_ref.quorters,name'],
            'av' => ['required'],
            'date' => ['required','date',new outMonth]
        ];
    }
    
}
