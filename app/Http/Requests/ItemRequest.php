<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'nama_barang' => ['required', 'string'],
            'brand' => ['required', 'string'],
            'stok' => ['required', 'integer'],
            'harga_beli' => ['required', 'string'],
            'harga_jual' => ['required', 'string'],
            'user_id' => ['required', 'string'],
        ];
    }
}
