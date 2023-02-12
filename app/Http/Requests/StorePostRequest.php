<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
   * @return array
   */
  public function rules()
  {
    return [
      "title" => "required|unique:posts",

      "summary" => "required",
      "content" => "required",
      "status" => "required",
      "photo" => "required",
      "category" => "required",
      "author" => "required",

    ];

  }
  public function messages()
{
    return [
        'title.required' => 'A title is required',
        'summary.required' => 'Summary Field is required',
        'content.required' => 'content Field is required',
        'status.required' => 'status Field is required',
        'category.required' => 'Category Field is required',
        'author.required' => 'author Field is required',
    ];
}
}
