<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MitraPelaku extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function mitra(){
        return $this->belongsTo(User::class);

    }
    public function pelaku(){
        return $this->belongsTo(User::class);
    }
}
