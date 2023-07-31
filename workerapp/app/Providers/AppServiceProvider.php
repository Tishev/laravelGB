<?php
declare(strict_types=1);
namespace App\Providers;

use App\Queries\CategoriesQueryBuilder;
use App\Queries\NewsQueryBuilder;
use App\Queries\QueryBuilder;
use Illuminate\Support\ServiceProvider;
use App\Services\Contracts\Parser;
use App\Services\Contracts\Social;
use App\Services\ParserService;
use App\Services\SocialService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(QueryBuilder::class, CategoriesQueryBuilder::class);
        $this->app->bind(QueryBuilder::class, NewsQueryBuilder::class);

              // Services

        $this->app->bind(Parser::class, ParserService::class);
        $this->app->bind(Social::class, SocialService::class);
        $this->app->bind(Upload::class, UploadService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
