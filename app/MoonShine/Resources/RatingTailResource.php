<?php

namespace App\MoonShine\Resources;

use App\Models\TailRating;
use Illuminate\Database\Eloquent\Model;

use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Fields\Url;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class RatingTailResource extends Resource
{
    public static string $model = TailRating::class;

    public static string $title = 'Плитки "RTK в цифрах"';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Нзвание', 'title'),
            Text::make('Значение', 'value'),
            Image::make('Изображение', 'image')
                ->keepOriginalFileName()
                ->disk(config('filesystems.default'))
                ->dir('uploads')
                ->showOnExport()
                ->allowedExtensions(['jpg', 'png'])
                ->hint('Загружайте только png или jpg'),

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
