<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'propertyid',
        'property_name',
        'property_category',
        'number_of_rooms',
        'number_of_listed_rooms',
        'is_listed',
        'is_featured',
        'is_most_liked',
        'location',
        'geolocation',
        'contact_information',
        // Add other fillable columns as needed
    ];
    public function room()
    {
        return $this->hasMany(Room::class, 'propertyid', 'propertyid');
    }
}
