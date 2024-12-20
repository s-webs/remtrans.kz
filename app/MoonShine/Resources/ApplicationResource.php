<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Application;

use MoonShine\Fields\NoInput;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class ApplicationResource extends Resource
{
    public static string $model = Application::class;
//    public static array $activeActions = ['show', 'edit', 'delete'];
    public static string $title = 'Заявки';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            NoInput::make('Фио', 'fullname'),
            NoInput::make('Телефон', 'phone'),
            NoInput::make('Email', 'email'),
            NoInput::make('Сообщение', 'message'),
            SwitchBoolean::make('Обработано', 'completed')
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
