<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = $this->user();

        return $user != null && $user->tokenCan('update');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'  => [$this->isUpdate()],
            'type'  => [$this->isUpdate(), Rule::in(['I', 'B', 'i', 'b'])],
            'email' => [$this->isUpdate(), 'email'],
            'address'   => [$this->isUpdate()],
            'city'  => [$this->isUpdate()],
            'state' => [$this->isUpdate()],
            'postalCode' => [$this->isUpdate()]
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->postalCode) {
            $this->merge([
                'postal_code'   => $this->postalCode
            ]);
        }
    }

    public function isUpdate()
    {
        return request()->isMethod('POST') ? 'required' : 'sometimes';
    }
}
