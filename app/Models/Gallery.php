<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'travel_packages_id', 'image'
    ];

    public function travel_package()
    {
        return $this->belongsTo(TravelPackages::class, 'travel_packages_id', 'id');
    }
}
