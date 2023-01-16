<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255'],
            'last_name' => 'required|string|max:255',
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'phone' => 'required|string',
            'bio' => 'required|string|min:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'First name is required.'  ,
            'last_name.required' => 'Last name is required.' ,
            'phone.required' => 'Phone number is required.' ,
            'phone.digits' => 'Phone number should have 10 number.' ,
            'bio.min' => 'Bio should have at least 255 characters.' ,
        ];
    }
}
