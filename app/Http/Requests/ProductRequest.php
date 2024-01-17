<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class ProductRequest extends FormRequest
{

    protected function prepareForValidation() : void
    {
        $this -> merge([
            'slug' => Str::slug($this -> slug ?? $this -> name),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //dd($this->request->all(), $this->files->all());
        $rules = [];

        foreach ($this->request->all() as $key => $value) {
            if (strpos($key, 'couleur') === 0) {
                $rules[$key] = 'required|string|min:3|max:255'; // Règles de validation pour les champs dynamiques
            }
            if(strpos($key, 'taille')=== 0){
                $rules[$key] = 'required|string';
            }
            if(strpos($key, 'quantite') === 0){
                $rules[$key] = 'required|integer';
            }
            if(strpos($key, 'colorable') === 0){
                $rules[$key] = 'required';
            }
            if(strpos($key, 'taillable') === 0){
                $rules[$key] = 'required';
            }
            if(strpos($key, 'pointurable') === 0){
                $rules[$key] = 'required';
            }
        }
        
            
        $rules['name'] = ['required', 'string', 'between:3,190'];
        $rules['price'] = ['required', 'integer'];
        $rules['remise'] = ['required'];
        $rules['description'] = ['required', 'string', 'min:10'];
        $rules['subcategory_id'] = ['required', 'integer', 'exists:subcategories,id'];
        $rules['tagp_ids'] = ['array', 'exists:tagps,id'];
        $rules['thumbnail'] = ['required','image', 'max:2048'];
        //dd($rules);
        return $rules;
    }
}
