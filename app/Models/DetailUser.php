<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    use HasFactory;
    protected $fillable =['id_user','nama_lengkap','alamat','no_telpon','tanggal_lahir','nik'];

    public function user()
    {
        return $this->belongsTo(User::class,'id','id_user');
    }
}
