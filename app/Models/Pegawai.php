<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    // Explicitly specify the table name if different from the default (optional)
    protected $table = 'pegawai';

    // Fillable attributes
    protected $fillable = ['nama_pegawai', 'wilayah_id'];

    /**
     * Get the wilayah that owns the pegawai.
     */
    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'wilayah_id');
    }
}