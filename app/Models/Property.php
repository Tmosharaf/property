<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected  $fillable=[
        'title',
        'featured_image',
        'price',
        'overview',
        'short_description',
        'long_description',
        'type',
        'service_type',
        'bathroom',
        'bedroom',
        'net_area',
        'pool',
        'location_id',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
