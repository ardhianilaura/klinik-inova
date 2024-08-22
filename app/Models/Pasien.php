<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';

    protected $fillable = [
        'nama_pasien',
        'alamat',
        'tanggal_lahir',
        'no_telepon',
    ];

    /**
     * Define the relationship with the Pendaftaran model.
     */
    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
