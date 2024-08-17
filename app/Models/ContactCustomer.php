<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class ContactCustomer extends Model
{
    protected $table = "contact_customer";
    protected $fillable = ['nomor_cs','nama','phone','email','subjek','pesan','lang','tanggal','status'];
    public $timestamps = false;
}
