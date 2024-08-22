<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran'; // Sesuaikan nama tabel dengan nama tabel di database

    protected $fillable = ['pasien_id', 'dokter_id', 'tanggal_pendaftaran', 'status'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function dokter()
    {
        return $this->belongsTo(User::class, 'dokter_id');
    }
}
