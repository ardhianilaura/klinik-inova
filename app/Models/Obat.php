<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model ini
    protected $table = 'obat';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama_obat',
        'harga',
        'stok',
    ];

    // Jika tidak menggunakan kolom `created_at` dan `updated_at`, Anda bisa menonaktifkannya:
    // public $timestamps = false;

    // Anda bisa menambahkan metode dan relasi lain yang dibutuhkan oleh model ini di bawah
}
