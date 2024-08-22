<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'tindakan';

    // Define which attributes are mass assignable
    protected $fillable = [
        'nama_tindakan',
        'biaya',
    ];

    // Optionally, define the attributes that should be cast to native types
    protected $casts = [
        'biaya' => 'decimal:2',
    ];
}
