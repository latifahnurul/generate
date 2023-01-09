<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generates extends Model
{
    use HasFactory;
    protected $table = 'generates';
    protected $primarykey = 'No';
    protected $fillable = ['Jumlah User', 'Kode Enkripsi', 'Masa Berlaku'];
}
