<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    protected $table = "permintaan";
    protected $fillable = ['nomor_permintaan','nama','permintaan','email','telpon','tanggal','status'];
    public $timestamps = false;
}
