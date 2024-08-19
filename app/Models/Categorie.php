<?php

namespace App\Models;

use App\Models\Tutoriel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable=[
        'titre',
        'description',
        'cour_id'
    ];

    public function cour():BelongsTo{
        return $this->belongsTo(Cour::class);
    }

    public function tutoriels():HasMany{
        return $this->hasMany(Tutoriel::class);
    }
}
