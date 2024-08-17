<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactReply extends Model
{
    protected $table = "contact_reply";
    protected $fillable = ['nomor_reply','reply','tanggal'];
    public $timestamps = false;
}
