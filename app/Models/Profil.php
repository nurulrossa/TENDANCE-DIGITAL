<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profils';
    protected $primaryKey = 'id';

    protected $fillable = ['nama', 'visi', 'misi', 'tentang', 'alamat', 'kontak', 'email', 'twitter', 'ig', 'fb', 'created_at', 'updated_at'];
}
