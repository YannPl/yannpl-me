<?php

namespace App\Models;

use Carbon\Carbon;
use Database\Factories\ArticleFactory;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @property Category $category
 * @property Carbon $created_at
 * @property RichContent $currentRichContent
 */
class Article extends Model
{
    /** @use HasFactory<ArticleFactory> */
    use HasFactory, HasTimestamps;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'uuid',
        'slug',
        'is_published',
        'created_by_id',
        'current_rich_content_id',
        'category_id',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Get the user that created the article.
     *
     * @return BelongsTo<User, $this>
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    /**
     * Get the current rich content associated with the article.
     *
     * @return BelongsTo<RichContent, $this>
     */
    public function currentRichContent(): BelongsTo
    {
        return $this->belongsTo(RichContent::class, 'current_rich_content_id');
    }

    /**
     * Get the category associated with the article.
     *
     * @return BelongsTo<Category, $this>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * @return BelongsToMany<Tag, $this>
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * @return BelongsToMany<RichContent, $this, Pivot>
     */
    public function articleHistory(): BelongsToMany
    {
        return $this->belongsToMany(RichContent::class, 'article_history');
    }
}
