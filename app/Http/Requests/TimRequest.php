<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TimRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required',
            'jabatan' => 'required',
            'prodi' => 'required',
            'file_foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan tipe file dan ukuran maksimal yang diizinkan
        ];
    }
}
