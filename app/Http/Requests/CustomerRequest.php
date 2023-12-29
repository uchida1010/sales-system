<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
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
            'company' => 'required|max:255',
            'name' => 'required|max:255',
            'address' => 'nullable|max:255',
            'telephone' => 'nullable',
            'cellphone' => 'nullable',
            'remarks' => 'nullable|max:255',
            'personincharge_id' => 'nullable',
          ];
    }

            /**
 * 定義済みバリデーションルールのエラーメッセージ取得
 *
 * @return array
 */
public function messages()
{
    return 
          [
            '*.required' => ':attributeを入力してください',
            '*.max' => '文字数の範囲内で入力してください',
            'telephone||cellphone' => '正しい形式で入力してください',
          ];
}

public function attributes(): array
{
    return [
        'company' => '会社名',
        'name' => '顧客名',
        'address' => '住所',
        'telephone' => '電話番号',
        'cellphone' => '携帯番号',
        'remarks' => '備考',
        'personincharge_id' => '担当者'
    ];
}
}
