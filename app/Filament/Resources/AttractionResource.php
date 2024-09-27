<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Attraction;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AttractionResource\Pages;
use App\Filament\Resources\AttractionResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;


use FilamentTiptapEditor\TiptapEditor;
use FilamentTiptapEditor\Enums\TiptapOutput;

class AttractionResource extends Resource
{
    protected static ?string $model = Attraction::class;

    protected static ?string $navigationIcon = 'heroicon-o-hand-thumb-up';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([


                Shout::make('info')
                ->content('Atrakcje pojawią się na stronie głównej')
                ->type('info')
                ->color('success')
                ->columnSpanFull(),

                Forms\Components\TextInput::make(name: 'name')
                ->label('Tytuł')
                ->columns(1)
                ->minLength(3)
                ->maxLength(255)
                ->placeholder('np. stołówka i kawiarnia z bilardem')
                ->required(),

               

                Forms\Components\FileUpload::make('image')
                    ->label('Zdjęcie')
                    ->directory('attractions')
                    ->getUploadedFileNameForStorageUsing(
                        fn(TemporaryUploadedFile $file): string => 'atrakcja-sanatorium-rabka-' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                    )
                    ->image()
                    ->maxSize(4096)
                    ->optimize('webp')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        null,
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->required(),
            ]);

            
    }

    public static function table(Table $table): Table
    {
        return $table
        ->reorderable('sort')
            ->defaultSort('sort', 'asc')
            ->columns([
                Tables\Columns\TextColumn::make('sort')
                    ->label('#')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Miniaturka'),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nazwa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Data utworzenia')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Data modyfikacji')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAttractions::route('/'),
            'create' => Pages\CreateAttraction::route('/create'),
            'edit' => Pages\EditAttraction::route('/{record}/edit'),
        ];
    }



    public static function getNavigationLabel(): string
    {
        return ('Atrakcje');
    }
    public static function getPluralLabel(): string
    {
        return ('Atrakcje');
    }

    public static function getLabel(): string
    {
        return ('Atrakcja');
    }
}
