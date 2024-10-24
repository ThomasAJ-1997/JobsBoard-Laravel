<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'salary', 'location', 'work', 'url', 'featured'];

    public function employer() :belongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate(['name'=> $name]);

        // Interact with Pivot table
        $this->tags()->attach($tag);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
