<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'avatar' => [
                'nullable',
                'mimes:jpeg,png',
                'max:5120',
                'dimensions:max_width=1000,max_height=1000'
            ],
            // 'avatar' => [
            //     'nullable',
            //     File::image()->types(['jpeg','png'])->max(5 * 1024)->dimensions(Rule::dimensions()->maxWidth(1000)->maxHeight(1000))
            
            // ],
        ];
    }
}
