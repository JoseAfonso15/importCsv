<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price_table extends Model
{
    protected $fillable = ['from_postcode','to_postcode','from_weight','to_weight','cost','cost1','cost2','cost3'];
    use HasFactory;
}
