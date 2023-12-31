<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    public $timestamps = false;
    use HasFactory;

    
    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }


}
