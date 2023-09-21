<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'username' => ['required', 'string'],
			'age' => ['nullable', 'integer'],
			'company_id' => ['required'],
			'status' => ['required', 'in:w,old'],
        ];
    }
}
