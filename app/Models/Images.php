<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'sub_id',
        'image',
        'image_path'
        ];

    public function TripsModel(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TripsModel::class);
    }

}
