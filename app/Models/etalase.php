<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etalase extends Model
{
    use HasFactory;
    protected $table = 'etalases';
    protected $primarykey = 'id';
    protected $fillable = ['nama_karya','nama_kreator','harga_karya','deskripsi_karya'];
}
