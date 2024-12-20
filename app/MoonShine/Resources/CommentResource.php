<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

use MoonShine\Fields\Email;
use MoonShine\Fields\Image;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class CommentResource extends Resource
{
    public static string $model = Comment::class;

    public static string $title = 'Отзывы';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Image::make('Фото', 'image')
                ->keepOriginalFileName()
                ->disk(config('filesystems.default'))
                ->dir('uploads')
                ->showOnExport()
                ->allowedExtensions(['jpg', 'png'])
                ->nullable()
                ->hint('Фото загружать не обязательно, если не добавите, то автоматически установится изображение заглушка | Загружайте только png или jpg'),
            Text::make('ФИО', 'fullname'),
            Text::make('Компания', 'company'),
            Text::make('Должность', 'position'),
            Email::make('Email', 'email'),
            Textarea::make('Отзыв', 'comment')
                ->hideOnIndex(),
            SwitchBoolean::make('Опубликовано', 'isPublished')

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
