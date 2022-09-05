<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'title' => 'required|string|unique:posts,title',
            // 'description' => 'required|min:5|max:300',
            // 'is_publishing' => 'required|integer',
            // 'status' => 'required|integer'
        ];
    }
}
