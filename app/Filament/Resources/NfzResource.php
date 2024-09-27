<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NfzResource\Pages;
use App\Filament\Resources\NfzResource\RelationManagers;
use App\Models\Nfz;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NfzResource extends Resource
{
    protected static ?string $model = Nfz::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $navigationGroup = 'NFZ';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('meta_title')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('meta_desc')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('banner_img')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('title')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('slug')
                    ->required()
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
            'index' => Pages\ListNfzs::route('/'),
            'create' => Pages\CreateNfz::route('/create'),
            'edit' => Pages\EditNfz::route('/{record}/edit'),
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
