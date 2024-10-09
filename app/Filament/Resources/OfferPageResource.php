<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\OfferPage;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Tabs;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Database\Eloquent\Builder;
use FilamentTiptapEditor\Enums\TiptapOutput;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\OfferPageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OfferPageResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;
use Livewire\Component as Livewire;
use Filament\Forms\Components\Component;


class OfferPageResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = OfferPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $navigationGroup = 'Oferty';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([

            Tabs::make('Tabs')
                ->columnSpanFull()
                ->tabs(
                    [


                        // INFO
                        Tabs\Tab::make('Główne informacje')
                            ->icon('heroicon-o-information-circle')
                            ->columns()
                            ->schema([
                                Forms\Components\TextInput::make('page_title')
                                    ->label('Nazwa strony')
                                    ->unique(ignoreRecord: true)
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->required()
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),

                                Forms\Components\TextInput::make('slug')
                                    ->label('Slug')
                                    ->required()
                                    ->hint('Przyjazny adres url który wygeneruje się automatycznie')
                                    ->readOnly(),

                                Forms\Components\TextInput::make('heading')
                                    ->label('Nagłówek')
                                    ->required(),


                                Forms\Components\FileUpload::make('banner_img')
                                    ->label('Banner')
                                    ->directory('banners')
                                    ->getUploadedFileNameForStorageUsing(
                                        fn(TemporaryUploadedFile $file): string => 'banner-' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                                    )
                                    ->image()
                                    ->maxSize(8192)
                                    ->optimize('webp')
                                    ->imageEditor()
                                    ->imageEditorAspectRatios([
                                        null,
                                        '16:9',
                                        '4:3',
                                        '1:1',
                                    ])
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                        // CONTENT
                        Tabs\Tab::make('Treść')
                            ->icon('heroicon-o-information-circle')
                            ->columns()
                            ->schema([
                                TiptapEditor::make('content')->profile('default')
                                    ->label("Treść")
                                    ->output(TiptapOutput::Json)
                                    ->maxContentWidth('5xl')
                                    ->required()
                                    ->columnSpanFull(),
                            ]),
                        // META
                        Tabs\Tab::make('Meta')
                            ->icon('heroicon-o-globe-alt')
                            ->columns()
                            ->schema([

                                TextInput::make('meta_title')
                                    ->label('Tytuł Meta')
                                    ->placeholder('Meta title to tytuł strony internetowej wyświetlany w wynikach wyszukiwarek i na kartach przeglądarki.')
                                    ->characterLimit(60)
                                    ->minLength(10)
                                    ->maxLength(75)
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                        $validate = $livewire->validateOnly($component->getStatePath());
                                    })
                                    ->columnSpanFull()
                                    ->required(),

                                TextInput::make('meta_desc')
                                    ->label('Opis Meta')
                                    ->placeholder('Meta description to krótki opis strony internetowej wyświetlany w wynikach wyszukiwarek.')
                                    ->characterLimit(160)
                                    ->minLength(10)
                                    ->maxLength(180)
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                        $validate = $livewire->validateOnly($component->getStatePath());
                                    })
                                    ->columnSpanFull()
                                    ->required(),
                            ]),
                    ]
                ),

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

                Tables\Columns\ImageColumn::make('banner_img')
                    ->label(label: 'Banner'),

                Tables\Columns\TextColumn::make('title')
                    ->label('Tytuł'),
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
            'index' => Pages\ListOfferPages::route('/'),
            'create' => Pages\CreateOfferPage::route('/create'),
            'edit' => Pages\EditOfferPage::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Strony');
    }
    public static function getPluralLabel(): string
    {
        return ('Strony');
    }

    public static function getLabel(): string
    {
        return ('Strony');
    }
}
