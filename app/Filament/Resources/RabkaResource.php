<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Rabka;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;

use Awcodes\Shout\Components\Shout;
use Livewire\Component as Livewire;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\RabkaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RabkaResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;

class RabkaResource extends Resource
{
    protected static ?string $model = Rabka::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Rabka Zdrój';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('SEO')
                    ->icon('heroicon-o-globe-alt')
                    ->collapsible()
                    ->collapsed()
                    ->description('Wprowadź meta title oraz meta description , które informują użytkowników o treści strony.')
                    ->schema([
                        Shout::make('info')
                            ->content('Tytuł oraz opis zostaną uzupełnione automatycznie jezeli ich nie podasz. Zachecamy jednak do zrobienia tego w celu lepszej optymalizacji')
                            ->type('info')
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

                Section::make('Główne informacje')
                    ->icon('heroicon-o-information-circle')
                    ->columns(2)
                    ->collapsible()
                    ->collapsed()
                    ->description('Podaj nazwę pokoju, dodaj opis oraz wyposażenie')
                    ->schema([

                        Forms\Components\TextInput::make('heading')
                            ->label('Nagłówek')

                            ->minLength(3)
                            ->maxLength(255)
                            ->required(),
                        Forms\Components\TextInput::make('subheading')
                            ->label("Subnagłówek")

                            ->minLength(3)
                            ->maxLength(255)
                            ->required(),

                        RichEditor::make('short_desc')
                            ->label('Krótki opis')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                            ])
                            ->required()
                            ->placeholder('Pojawi się na liście apartamentów')
                            ->columnSpanFull(),


                        Forms\Components\FileUpload::make('gallery')
                            ->label('Galeria')
                            ->directory('apartments-galleries')
                            ->getUploadedFileNameForStorageUsing(
                                fn(TemporaryUploadedFile $file): string => 'apartament-galeria-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                            )
                            ->multiple()
                            ->appendFiles()
                            ->image()
                            ->reorderable()
                            ->hint('Galeria musi mieć co najmniej 5 zdjęć')
                            ->maxSize(8192)
                            ->optimize('webp')
                            ->imageEditor()
                            ->minFiles(3)
                            ->maxFiles(12)
                            ->panelLayout('grid')
                            ->imageEditorAspectRatios([
                                null,
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->required()

                            ->columnSpanFull(),

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
                            ->placeholder('Pojawi się na stronie pokoju')
                            ->columnSpanFull(),
                    ]),

             





            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
            'index' => Pages\ListRabkas::route('/'),
            'create' => Pages\CreateRabka::route('/create'),
            'edit' => Pages\EditRabka::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Informacje');
    }
    public static function getPluralLabel(): string
    {
        return ('Informacje');
    }

    public static function getLabel(): string
    {
        return ('Informacja');
    }
}
