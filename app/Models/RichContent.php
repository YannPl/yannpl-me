<?php

namespace App\Models;

use Database\Factories\RichContentFactory;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RichContent extends Model
{
    /** @use HasFactory<RichContentFactory> */
    use HasFactory, HasTimestamps;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'uuid',
        'title',
        'seo_title',
        'seo_description',
        'main_image',
        'html',
        'editor_json',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}
