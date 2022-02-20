<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trips extends Model
{
    use HasFactory;

    protected $table = 'trips';

    protected $primaryKey = 'id';

    public $timestamp = true;

    protected $dateFormat = 'h:m:s';

    protected $fillable = [

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

}
