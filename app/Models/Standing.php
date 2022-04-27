<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Standing extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['position', 'driver', 'nationality', 'car', 'points'];

    public function standing()
    {
        return $this->belongsTo(Standing::class);
    }

    public function sluggable(): array
    {
        return [
            'driver' => [
                'source' => 'position'
            ]
        ];
    }
}
