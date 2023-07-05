<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiAtas extends Model
{
    use HasFactory;

    protected $table = 'informasi';

    protected $guarded = ['id'];
}
