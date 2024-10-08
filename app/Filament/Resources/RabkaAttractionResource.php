<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\RabkaAttraction;
use Filament\Resources\Resource;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Database\Eloquent\Builder;
use FilamentTiptapEditor\Enums\TiptapOutput;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RabkaAttractionResource\Pages;
use App\Filament\Resources\RabkaAttractionResource\RelationManagers;

class RabkaAttractionResource extends Resource
{
    protected static ?string $model = RabkaAttraction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Rabka Zdrój';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('meta_title')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('meta_desc')
                    ->columnSpanFull(),

                TiptapEditor::make('description')->profile('default')
                    ->output(TiptapOutput::Json)
                    ->maxContentWidth('5xl')
                    ->required()
                    ->columnSpanFull(),
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
            'index' => Pages\ListRabkaAttractions::route('/'),
            'create' => Pages\CreateRabkaAttraction::route('/create'),
            'edit' => Pages\EditRabkaAttraction::route('/{record}/edit'),
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
