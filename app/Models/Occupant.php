<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hostel;

class Occupant extends Model
{
    use HasFactory;

    public function hostel()
    {
        return $this->belongsTo(Hostel::class, 'hostel_id', 'id');
    }
}
