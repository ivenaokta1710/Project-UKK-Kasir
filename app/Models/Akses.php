<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akses extends Model
{
    use HasFactory;
    protected $fillable=['menu'];

    public function role()
    {
        return $this->hasMany(Role::class,'id_akses','id');
    }
}
