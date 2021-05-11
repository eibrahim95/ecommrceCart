<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;
use Image;
class EditProductRequest extends FormRequest
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
            'name' => 'required|min:6|max:255|unique:products,name,'.$this->product->id,
            'description' => 'required|min:20',
            'image' => ['required', 'url', function ($attribute, $value, $fail) {
                try {
                    Image::make($value);
                }
                catch(\Exception $e) {
                    $fail('The '.$attribute.' is an invalid image.');
                }
            }],
            'price' => 'required|numeric',
        ];
    }
}
