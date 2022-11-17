<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddBanner extends Model
{
protected $table = 'addbanners';

    protected $fillable = [
        'name',
        'image',
        'created_at'
        
    ];
}
