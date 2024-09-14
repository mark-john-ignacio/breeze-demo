<?php

namespace Modules\Mobiles\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Mobiles\Database\Factories\MobileFactory;

class Mobile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    
    protected static function newFactory(): MobileFactory
    {
        return MobileFactory::new();
    }
}
