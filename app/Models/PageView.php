<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageView extends Model
{
    protected $table = "page_view";
    protected $fillable = ['page','ip','browser','platform','tanggal'];
    public $timestamps = false;
}
