<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $filliable = [
        'name',
        'image',
        'technologies',
        'route'
    ];

    public function technologies() {
        return $this->belongsToMany(Technology::class,'projects_tecnologies');
    }
}
