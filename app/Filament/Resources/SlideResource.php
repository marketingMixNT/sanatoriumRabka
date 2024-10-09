<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Slide;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Fieldset;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SlideResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SlideResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

use Filament\Resources\Concerns\Translatable;

class SlideResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Slide::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Strona główna';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Shout::make('info')
                    ->content('Slajdy pojawią się na stronie głównej. Jeżeli masz stronę wielojęzyczną pamiętaj o zlokalizowaniu tekstu alternatywnego.')
                    ->type('info')
                    ->color('success')
                    ->columnSpanFull(),

                // PHOTO
                Fieldset::make('Zdjęcie')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('')
                            ->directory('slides')
                            ->getUploadedFileNameForStorageUsing(
                                fn(TemporaryUploadedFile $file): string => 'sanatorium-rabka-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                            )
                            ->image()
                            ->maxSize(4096)
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

                        Forms\Components\TextInput::make('alt')
                            ->label('Tekst alternatywny')
                            ->required()
                            ->minLength(3)
                            ->maxLength(255)
                            ->helperText('Opisz w jednym zdaniu co znajduje się na obrazku aby poprawić SEO'),
                    ]),

                // CONTENT
                Fieldset::make('Treść')
                    ->schema([
                        Forms\Components\TextInput::make('heading')
                            ->label('Tytuł')
                            ->columnSpanFull()
                            ->minLength(3)
                            ->maxLength(255)
                            ->required(),

                        Forms\Components\Textarea::make('text')
                            ->label('Tekst')
                            ->columnSpanFull()
                            ->rows(3)
                            ->required(),
                    ]),

                // LINK & BUTTON
                Fieldset::make('Treść')
                    ->schema([
                        Forms\Components\TextInput::make('link')
                            ->label('Link')
                            ->columnSpanFull()
                            ->url()
                            ->required(),
                        Forms\Components\TextInput::make('button_text')
                            ->label('Tekst w przycisku')
                            ->placeholder('np. zobacz ofertę')
                            ->columnSpanFull()
                            ->minLength(3)
                            ->maxLength(255)
                            ->required(),
                    ]),



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

                Tables\Columns\TextColumn::make('heading')
                    ->label('Nagłówek')
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
            'index' => Pages\ListSlides::route('/'),
            'create' => Pages\CreateSlide::route('/create'),
            'edit' => Pages\EditSlide::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Slajdy');
    }
    public static function getPluralLabel(): string
    {
        return ('Slajdy');
    }

    public static function getLabel(): string
    {
        return ('Slajd');
    }
}
