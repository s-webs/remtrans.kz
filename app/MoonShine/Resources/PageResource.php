<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Page;

use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Code;
use MoonShine\Fields\Number;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class PageResource extends Resource
{
    public static string $model = Page::class;
    public static array $activeActions = ['show', 'edit'];
    public static string $title = 'Страницы';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),

            Grid::make([
                Column::make([
                    Block::make('Основное', [
                        Text::make('Заголовок', 'title'),
                        Slug::make('slug')->from('title')->separator('-')->unique()->disabled(),
//                        TinyMce::make('Контент', 'content')->hideOnIndex(),
                        Code::make('Код', 'content')
                            ->language('html')
                            ->lineNumbers()
                            ->hideOnIndex(),
                        Number::make('Просмотры', 'views')
                            ->hideOnCreate()
                            ->hideOnUpdate()
                            ->hideOnForm()
                    ])
                ])->columnSpan(6), // 6 из 12 - половина экрана

                Column::make([
                    Block::make('Seo', [
                        Text::make('Ключевые слова для поисковиков', 'seo_tags')
                            ->hideOnIndex(),
                        Textarea::make('Описание для поисковиков', 'seo_description')
                            ->hideOnIndex(),
                    ])
                ])->columnSpan(6), // 6 из 12 - половина экрана
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    public function search(): array
    {
        return ['id'];
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
