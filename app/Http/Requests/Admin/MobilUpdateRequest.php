<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MobilUpdateRequest extends FormRequest
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
            'nama_mobil'=> 'required',
            'harga_sewa'=> 'required',
            'bahan_bakar'=> 'required',
            'jumlah_kursi'=> 'required',
            'transmisi'=> 'required',
            'status'=> 'required',
            'p3k'=> 'required',
            'charger'=> 'required',
            'audio'=> 'required',
            'ac'=> 'required',
            'deskripsi'=> 'required'
        ];
    }
}
