<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResumeRequest extends FormRequest
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
            "name"=>"required|string|max:255",
            "jobtitle"=>"required|string|max255",
            "number"=>"required|string|max:15",
            "email"=>"required|email|max:100",
            "address"=>"required|string|max:255",
            "aboutshort"=>"required|string|max:100",
            "aboutlong"=>"required|text|max:800",
            "photo"=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:4048",
            "github"=>"required|url|max:100",
        ];
    }
}
