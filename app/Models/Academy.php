<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    use HasFactory;
    protected $table = 'academies';
    protected $primaryKey = 'id';

    protected $fillable = ['nama', 'harga', 'diskon', 'jumlah_pertemuan', 'created_at', 'updated_at'];
}
