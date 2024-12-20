<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceTail;

use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Fields\Url;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class ServiceTailResource extends Resource
{
    public static string $model = ServiceTail::class;
    public static array $activeActions = ['show', 'edit'];
    public static string $title = 'Плитки услуг';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Заголовок', 'title'),
            Image::make('Изображение', 'image')
                ->keepOriginalFileName()
                ->disk(config('filesystems.default'))
                ->dir('uploads')
                ->showOnExport()
                ->allowedExtensions(['jpg', 'png'])
                ->hint('Загружайте только png или jpg'),
            Text::make('Ссылка', 'link')
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
