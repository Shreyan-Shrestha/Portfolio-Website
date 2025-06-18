<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Personal extends FormRequest
{
  
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
            "name"=> "required|string|max:255",
            "number"=> "required|string|max:15",
            "email"=> "required|email|max:100",
            "address"=> "required|string|max:255",
            "about"=> "nullable|text|max:500",
            "photo"=> "nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "github"=> "nullable|url|max:100",
        ];
    }
}
