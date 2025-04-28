<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $fillable = [
        'nama_mobil',
        'harga_sewa',
        'gambar',
        'bahan_bakar',
        'jumlah_kursi',
        'transmisi',
        'status',
        'p3k',
        'charger',
        'audio',
        'ac',
        'deskripsi'
    ];

    protected static function boot()
{
    parent::boot();

    static::creating(function ($mobil) {
        $mobil->slug = Str::slug($mobil->nama_mobil);
    });
}
}
