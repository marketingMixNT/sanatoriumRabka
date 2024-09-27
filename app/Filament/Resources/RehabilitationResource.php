<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RehabilitationResource\Pages;
use App\Filament\Resources\RehabilitationResource\RelationManagers;
use App\Models\Rehabilitation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RehabilitationResource extends Resource
{
    protected static ?string $model = Rehabilitation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Rehabilitacja';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('meta_title')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('meta_desc')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
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
            'index' => Pages\ListRehabilitations::route('/'),
            'create' => Pages\CreateRehabilitation::route('/create'),
            'edit' => Pages\EditRehabilitation::route('/{record}/edit'),
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
        return ('Strona');
    }
}
