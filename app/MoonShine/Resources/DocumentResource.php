<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Document;

use MoonShine\Fields\File;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class DocumentResource extends Resource
{
    public static string $model = Document::class;

    public static string $title = 'Документы';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Название', 'title'),
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
