<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class goodsFullService extends Model
{
    protected $table = 'vehicle_service';

    protected $fillable = [
        'TrackID',
        'ClientID',
        // ...
    ];
    
    use HasFactory;
}