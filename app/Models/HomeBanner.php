<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
protected $table = 'homebanners';

    protected $fillable = [
        'image',
        'created_at'
    ];
}
