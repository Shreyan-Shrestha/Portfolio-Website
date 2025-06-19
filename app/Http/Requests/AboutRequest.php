<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
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
            "jobtitle"=>"required|string|max:255",
            "number"=>"required|string|max:15",
            "email"=>"required|email|max:100",
            "address"=>"required|string|max:255",
            "aboutshort"=>"required|string|max:100",
            "aboutlong"=>"required|string|max:800",
            "photo"=>"nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
            "github"=>"required|string|max:100",
        ];
    }
}
