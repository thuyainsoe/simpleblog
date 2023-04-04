<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footballnew extends Model
{
    use HasFactory;

    protected $fillable = ['title','author','content','tags','image_url','views','likes','comments'];
}
