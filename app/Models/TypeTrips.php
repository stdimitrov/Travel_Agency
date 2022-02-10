<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTrips extends Model
{
    use HasFactory;

    protected $table = 'type_trips';

    protected $primaryKey = 'id';

    protected $fillable = [
        'type_id',
        'movement',
        'types',
        'destinations'
    ];

    public function TripsModel(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TripsModel::class);
    }
}
