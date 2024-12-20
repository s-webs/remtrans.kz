<?php

namespace App\Providers;

use App\MoonShine\Resources\ApplicationResource;
use App\MoonShine\Resources\ClientResource;
use App\MoonShine\Resources\CommentResource;
use App\MoonShine\Resources\DocumentResource;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\PartnerResource;
use App\MoonShine\Resources\PriceListResource;
use App\MoonShine\Resources\RatingTailResource;
use App\MoonShine\Resources\ServiceTailResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MenuGroup::make('moonshine::ui.resource.system', [
                MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
                    ->translatable()
                    ->icon('users'),
                MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
                    ->translatable()
                    ->icon('bookmark'),
            ])->translatable(),
//            MenuResource::class,
            PageResource::class,
            PartnerResource::class,
            ClientResource::class,
            ServiceTailResource::class,
            RatingTailResource::class,
            CommentResource::class,
            DocumentResource::class,
            PriceListResource::class,
            ApplicationResource::class
        ]);
    }
}
