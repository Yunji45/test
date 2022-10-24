<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkin extends Model
{
    use HasFactory;
    protected $id = 'id';
    protected $table = 'checkins';

    protected $fillable = [
        'Nopol',
        'Tanggal',
        'jam',
        'Jenis_kendaraan'
    ];

    public function cek ()
    {
        return $this->hasMany(checout::class);
    }
}
