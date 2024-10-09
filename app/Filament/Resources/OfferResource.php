<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Offer;

use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Tabs;
use Livewire\Component as Livewire;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\OfferResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OfferResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Schmeits\FilamentCharacterCounter\Forms\Components\Textarea;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;
use Filament\Resources\Concerns\Translatable;


class OfferResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Offer::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static ?string $navigationGroup = 'Oferty';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([



                Tabs::make('Tabs')
                    ->columnSpanFull()
                    ->tabs([

                        // CONTENT
                        Tabs\Tab::make('Treść')
                            ->icon('heroicon-o-pencil')
                            ->columns()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Tytuł')
                                    ->unique(ignoreRecord: true)
                                    ->required()
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),

                                Forms\Components\TextInput::make('slug')
                                    ->readonly()
                                    ->label('Slug')
                                    ->required()
                                    ->minLength(3)
                                    ->maxLength(255)
                                    ->helperText('Przyjazny adres url który wygeneruje się automatycznie na podstawie tytułu.'),

                               

                                Textarea::make('short_desc')
                                    ->label('Krótki opis')
                                    ->required()
                                    ->hint('Pojawi się na liście ofert')
                                    ->columnSpanFull()
                                    ->characterLimit(225),

                                RichEditor::make('description')
                                    ->label('Opis główny')
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'bulletList',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'underline',
                                        'undo',
                                    ])
                                    ->required()
                                    ->columnSpanFull(),
                            ]),

                        // PHOTOS
                        Tabs\Tab::make('Zdjęcia')
                            ->icon('heroicon-o-camera')
                            ->columns()
                            ->schema([

                                Forms\Components\FileUpload::make('banner_img')
                                    ->label('Banner')
                                    ->directory('offers-banners')

                                    ->getUploadedFileNameForStorageUsing(
                                        fn(TemporaryUploadedFile $file): string => 'sanatorium-rabka-oferta-baner' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
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

                                Forms\Components\FileUpload::make('thumbnail')
                                    ->label('Miniaturka')
                                    ->directory('offers-thumbnails')

                                    ->getUploadedFileNameForStorageUsing(
                                        fn(TemporaryUploadedFile $file): string => 'sanatorium-rabka-oferta-miniaturka' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
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




                            ]),

                        // PUBLISHED
                        Tabs\Tab::make('Publikacja')
                            ->icon('heroicon-o-clock')
                            ->columns()
                            ->schema([
                                DateTimePicker::make('published_at')
                                    ->label('Data publikacji')
                                    ->columns(1)
                                    ->default(now())
                                    ->required(),
                                DateTimePicker::make('published_end')
                                    ->label('Zakończenie publikacji')
                                    ->columns(1)
                                    ->default(now()->addMonths(3))
                                    ->required(),
                            ]),

                        // META
                        Tabs\Tab::make('Meta')
                            ->icon('heroicon-o-globe-alt')
                            ->columns()
                            ->schema([
                                Shout::make('info')
                                    ->content('Tytuł oraz opis zostaną uzupełnione automatycznie jezeli ich nie podasz. Zachecamy jednak do zrobienia tego w celu lepszej optymalizacji')
                                    ->type('info')
                                    ->columnSpanFull()
                                    ->color('success'),

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
                                    ->columnSpanFull(),

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
                                    ->columnSpanFull(),
                            ]),

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('sort')
            ->defaultSort('published_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('sort')
                    ->label('#')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Miniaturka'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Tytuł')
                    ->searchable()
                    ->sortable()
                    ->description(function (Offer $record) {
                        return Str::limit(strip_tags($record->short_desc), 40);
                    }),
                Tables\Columns\TextColumn::make('published_at')
                    ->label('Data publikacji')
                    ->badge()
                    ->dateTime()
                    ->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->format('d-m-Y H:i');
                    })
                    ->color(function ($state) {
                        if ($state <= Carbon::now()) {
                            return 'success';
                        } else {
                            return 'danger';
                        }
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('published_end')
                    ->label('Data zakończenia')
                    ->badge()
                    ->dateTime()
                    ->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->format('d-m-Y H:i');
                    })
                    ->color(function ($state) {
                        if ($state >= Carbon::now()) {
                            return 'success';
                        } else {
                            return 'danger';
                        }
                    })
                    ->sortable(),
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
            'index' => Pages\ListOffers::route('/'),
            'create' => Pages\CreateOffer::route('/create'),
            'edit' => Pages\EditOffer::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Oferty');
    }
    public static function getPluralLabel(): string
    {
        return ('Oferty');
    }

    public static function getLabel(): string
    {
        return ('Pokój');
    }
}
