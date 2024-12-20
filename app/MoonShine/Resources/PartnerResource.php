<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Partner;

use MoonShine\Fields\File;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Fields\Url;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class PartnerResource extends Resource
{
    public static string $model = Partner::class;

    public static string $title = 'Партнеры';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Нзвание', 'title'),
            Image::make('Логотип', 'image')
                ->keepOriginalFileName()
                ->disk(config('filesystems.default'))
                ->dir('uploads')
                ->showOnExport()
                ->allowedExtensions(['jpg', 'png'])
                ->hint('Загружайте только png или jpg'),
            Url::make('Ссылка', 'link')
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
