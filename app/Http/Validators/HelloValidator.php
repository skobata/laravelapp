<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class HelloValidator extends Validator
{
    /**
     * @param string $attribute
     * @param mixed  $value
     * @param        $parameters
     * @return bool
     */
    public function validateHello(string $attribute, mixed $value, $parameters): bool
    {
        return $value % 2 == 0;
    }
}
