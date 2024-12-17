<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property_master extends Model
{
    use HasFactory;
    protected $table = 'property_masters';
    protected $primaryKey = 'id';

    // Used for query builder for updating
    protected $fillable = [
        'owner',
        'owner_contact',
        'address',
        'image_url',
        'description',
        'amount',
        'action'
    ];
}
