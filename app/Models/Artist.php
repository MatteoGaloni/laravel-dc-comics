<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    public function comic()
    {
        return $this->belongsTo(Comic::class, 'comic_id');
    }
}
