<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'username' => ['sometimes', 'string'],
			'age' => ['sometimes', 'integer'],
			'company_id' => ['sometimes'],
			'status' => ['sometimes', 'in:w,old'],
        ];
    }
}
