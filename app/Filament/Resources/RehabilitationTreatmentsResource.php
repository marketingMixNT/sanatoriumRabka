<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RehabilitationTreatmentsResource\Pages;
use App\Filament\Resources\RehabilitationTreatmentsResource\RelationManagers;
use App\Models\RehabilitationTreatments;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RehabilitationTreatmentsResource extends Resource
{
    protected static ?string $model = RehabilitationTreatments::class;

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
                Forms\Components\Textarea::make('banner_img')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('title')
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
            'index' => Pages\ListRehabilitationTreatments::route('/'),
            'create' => Pages\CreateRehabilitationTreatments::route('/create'),
            'edit' => Pages\EditRehabilitationTreatments::route('/{record}/edit'),
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
