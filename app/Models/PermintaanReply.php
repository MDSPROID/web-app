<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanReply extends Model
{
    protected $table = "permintaan_reply";
    protected $fillable = ['nomor_reply','reply','tanggal'];
    public $timestamps = false;
}
