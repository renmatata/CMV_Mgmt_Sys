<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restobar extends Model
{
    use HasFactory;

    protected $fillable =['date', 'ornumber', 'amount'];
}
