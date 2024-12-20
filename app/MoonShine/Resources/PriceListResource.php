<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\PriceList;
use MoonShine\Fields\File;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class PriceListResource extends Resource
{
    public static string $model = PriceList::class;
    public static array $activeActions = ['show', 'edit'];
    public static string $title = 'Перечень запчастей';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            File::make('Файл', 'file')
                ->keepOriginalFileName()
                ->disk(config('filesystems.default'))
                ->dir('uploads')
                ->showOnExport()
                ->nullable()
                ->required()
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
