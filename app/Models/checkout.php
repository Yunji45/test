<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    use HasFactory;
    protected $id = 'id';
    
    public function in ()
    {
        return $this ->belongsTo (checkin::class);
    }
}
