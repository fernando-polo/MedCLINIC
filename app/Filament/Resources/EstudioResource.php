<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EstudioResource\Pages;
use App\Filament\Resources\EstudioResource\RelationManagers;
use App\Models\Estudio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EstudioResource extends Resource
{
    protected static ?string $model = Estudio::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label("Nombre")
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('price')
                    ->label("Precio")
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\RichEditor::make('description')
                    ->label("Descripción")
                    ->required()
                    ->maxLength(65353)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label("Nombre del Estudio")
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->label("Precio")
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->label("Descripción")
                    ->searchable(),
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
            'index' => Pages\ListEstudios::route('/'),
            'create' => Pages\CreateEstudio::route('/create'),
            'edit' => Pages\EditEstudio::route('/{record}/edit'),
        ];
    }
}
