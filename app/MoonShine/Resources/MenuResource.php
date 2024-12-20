<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;

use MoonShine\Fields\Enum;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Fields\Url;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class MenuResource extends Resource
{
    public static string $model = Menu::class;

    public static string $title = 'Меню';

    public static string $orderField = 'order';

    public static string $orderType = 'ASC';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Название', 'title'),
            Text::make('Ссылка', 'link'),
            Number::make('Положение', 'order')
                ->default(1)
                ->min(1)
                ->max(Menu::all()->count())
                ->hideOnCreate()
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    public function search(): array
    {
        return ['id, title, link'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
