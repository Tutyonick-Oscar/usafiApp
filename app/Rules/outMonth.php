<?php

namespace App\Rules;

use Closure;
use Carbon\Carbon;
use App\Models\Collect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\ValidationRule;

class outMonth implements DataAwareRule, ValidationRule
{
    protected $data = [];
    public function setData(array $data): static
    {
        $this->data = $data;
 
        return $this;
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        /**
         * accessing the latest collection
         */
        $latest = Collect::where([
                                ['user_id',Auth::user()->getAuthIdentifier()],
                                ['quorter',$this->data['quorter']],
                                ['av', $this->data['av']]
                                ])->orderBy('created_at','desc')->first();

        if($latest)
        {
            if (
                $this->data['quorter'] == $latest->quorter && 
                $this->data['av'] == $latest->av &&
                Carbon::parse($value)->getTranslatedMonthName() == Carbon::parse($latest->date)->getTranslatedMonthName()
            )
            {
                $fail('impossible de planifier deux collectes durant le même mois');
            } 
        }
    }
}
