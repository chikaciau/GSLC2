<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumPicture extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image', 'picture_taken'];
}
