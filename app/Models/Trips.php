<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    use HasFactory;

    protected $table = 'trips';

    protected $primaryKey = 'id';

    protected $timestamp = true;

    protected $dateFormat = 'h:m:s';

    protected $fillable = [
        //'type_id',      // temporary
        'name',
        'title',
        'second_title',
        'overview',
        'description',
        'second_description',
        'price_one',
        'price_two',
        'included',
        'not_included',
        'discount',
        'created_at'
    ];
/*
    public function imagesModel(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ImageModel::class);
    }

    public function typeTripsModel(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(TypeTripsModel::class);
    }
*/
}
