<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drawer extends Model
{
    public function comics()
    {
        return $this->hasMany(Comic::class);
    }
}