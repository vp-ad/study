<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DishRequest extends FormRequest
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
            'name' => 'required|min:5|max:25',
            'count' => 'required',
            'cooking' => 'required|min:50|max:500',
            'about' => 'required|min:20|max:200',
            'hour' => 'required',
            'minute' => 'required'

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Введите название рецепта',
            'name.min' => 'Название рецепта слишком короткое',
            'name.max' => 'Название рецепта слишком длинное',
            'cooking.required' => 'Поле приготовление не должно быть пустым',
            'cooking.min' => 'Описание приготовления слишком короткое',
            'cooking.max' => 'Описание приготовления слишком длинное',
            'about.required' => 'Поле описания не должно быть пустым',
            'about.min' => 'Описание рецепта слишком короткое',
            'about.max' => 'Описание рецепта слишком длинное',
            'count.required' => 'Введите количество порций',
            'hour.required' => 'Выберите количество часов на приготовление',
            'minute.required' => 'Выберите количество минут на приготовление'
        ];
    }
}
