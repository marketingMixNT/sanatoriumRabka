<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Treatment;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\TreatmentResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TreatmentResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class TreatmentResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Treatment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Rehabilitacja';

    public static function form(Form $form): Form
{
    return $form
        ->schema([

            Forms\Components\TextInput::make('name')
                ->label('Nazwa')
                ->columns(1)
                ->required(),

            Forms\Components\TextInput::make('price')
                ->label('Cena')
                ->numeric()
                ->default(null)
                ->columns(1)
                ->suffix('zł'),

            Forms\Components\FileUpload::make('thumbnail')
                ->label('Miniaturka')
                ->directory('treatments-thumbnails')
                ->getUploadedFileNameForStorageUsing(
                    fn(TemporaryUploadedFile $file): string => 'sanatorium-rabka-zabiegi-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                )
                ->image()
                ->maxSize(8192)
                ->optimize('webp')
                ->imageEditor()
                ->columnSpanFull()
                ->imageEditorAspectRatios([
                    null,
                    '16:9',
                    '4:3',
                    '1:1',
                ])
                ->required(),

                Fieldset::make('Treść')
                ->schema([

            Textarea::make('description')
                ->label('Opis')
                ->required()
                ->rows(4)
                ->columnSpanFull(),

            RichEditor::make('indications')
                ->label('Wskazania')
                ->toolbarButtons([
                    'bulletList',
                ])
                ->required()
                ->columnSpanFull(),]),
        ]);
}


    public static function table(Table $table): Table
    {
        return $table
        ->reorderable('sort')
        ->defaultSort('sort', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('sort')
                ->label('#')
                ->sortable(),
                Tables\Columns\ImageColumn::make('thumbnail')
                ->label('Miniaturka'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nazwa')
                    ->description(function (Treatment $record) {
                        return Str::limit(strip_tags($record->description), 40);
                    })
                    ->searchable()
                    ->sortable(),
            
             
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListTreatments::route('/'),
            'create' => Pages\CreateTreatment::route('/create'),
            'edit' => Pages\EditTreatment::route('/{record}/edit'),
        ];
    }


    public static function getNavigationLabel(): string
    {
        return ('Zabiegi');
    }
    public static function getPluralLabel(): string
    {
        return ('Zabiegi');
    }

    public static function getLabel(): string
    {
        return ('Zabieg');
    }
}
