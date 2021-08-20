<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Comic extends Model
{
    public function drawer()
    {
        return $this->belongsTo(Drawer::class);
    }
    
    /**
    * 
    * The roles that belong to the user.
    *
    */
}