<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cour extends Model
{
    use HasFactory;
    protected $fillable = ['titre','classe','description',];

    public function categories():HasMany{
        return $this->hasMany(Categorie::class);
    }
}
