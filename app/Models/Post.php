<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Post extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'title',
        'content',
        'date',
        'username',
    ];
}