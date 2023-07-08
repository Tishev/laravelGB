<?php
declare(strict_types=1);

namespace App\Models;

use App\Enums\NewsStatus;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'author',
        'status',
        'description'
    ];


    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_has_news',
    'news_id', 'category_id',);
    }

    // Scopes


    public function scopeActive(EloquentBuilder $query): void
    {
        $query->where('active', NewsStatus::ACTIVE->value);
    }
    public function scopeDraft(EloquentBuilder $query): void
    {
        $query->where('active', NewsStatus::DRAFT->value);
    }
    public function scopeBlocked(EloquentBuilder $query): void
    {
        $query->where('active', NewsStatus::BLOCKED->value);
    }
   
}
