<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Fields\Url;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class ClientResource extends Resource
{
    public static string $model = Client::class;

    public static string $title = 'Клиенты';

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
