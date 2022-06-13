<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class score extends Model
{
    use HasFactory;

public function student()
{
    return $this->belongsTo(student::class);
}

public function matter()
{
    return $this->belongsTo(matter::class);
}


}