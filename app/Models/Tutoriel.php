<?php

namespace App\Models;

use App\Models\Categorie;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Tutoriel extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'video_url',
        'categorie_id',
        'matrice'
    ];

    public function categorie():BelongsTo{
        return $this->belongsTo(Categorie::class);   
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->performOnCollections('videos');
    }
    
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('videos')
             ->singleFile(); // Utiliser `singleFile` pour permettre un seul fichier par collection
    }
}
