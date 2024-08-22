<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    protected $table = 'wilayah';

    protected $fillable = ['nama_wilayah'];

    /**
     * Get the pegawais for the wilayah.
     */
    public function pegawais()
    {
        return $this->hasMany(Pegawai::class, 'wilayah_id');
    }
}
