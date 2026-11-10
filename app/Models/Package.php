<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Package extends Model{
    
    public $timestamps = false; 

    public function drinks(): HasMany {
        
        return $this->hasMany(Drink::class);
    }
}
