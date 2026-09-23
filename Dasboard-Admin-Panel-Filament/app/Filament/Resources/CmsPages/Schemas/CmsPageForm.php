<?php

namespace App\Filament\Resources\CmsPages\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CmsPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Page Title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255)
                    ->helperText('Example: about-us'),

                RichEditor::make('content')
                    ->label('Page Content')
                    ->required()
                    ->columnSpanFull(),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'unpublished' => 'Unpublished',
                    ])
                    ->default('draft')
                    ->required(),

                Select::make('visibility')
                    ->label('Visibility')
                    ->options([
                        'public' => 'Public',
                        'authenticated' => 'Logged-in Users Only',
                    ])
                    ->default('public')
                    ->required(),

                DateTimePicker::make('published_at')
                    ->label('Published At')
                    ->nullable(),
            ]);
    }
}