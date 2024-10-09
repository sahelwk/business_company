<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class raw_item extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['name' , 'unit_price' , 'quantity' , 'total_price'];
}
