<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DescripUserResource\Pages;
use App\Filament\Resources\DescripUserResource\RelationManagers;
use App\Models\DescripUser;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DescripUserResource extends Resource
{
    protected static ?string $model = DescripUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label("Correo del usuario")
                    ->relationship('user', 'email')
                    ->required(),
                Forms\Components\TextInput::make('telefono')
                    ->label("Teléfono")
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('sexo')
                    ->label("Sexo")
                    ->required()
                    ->options([
                        'hombre' => 'Hombre',
                        'mujer' => 'Mujer'
                    ]),
                Forms\Components\DatePicker::make('fecha_nacimiento')
                    ->label("Fecha de nacimiento")
                    ->required()
                    ->native(false),
                Forms\Components\TextInput::make('nss')
                    ->label("NSS")
                    ->required()
                    ->maxLength(11),
                Forms\Components\TextInput::make('curp')
                    ->label("CURP")
                    ->required()
                    ->maxLength(18),
                Forms\Components\TextInput::make('cedula')
                    ->label("Cédula")
                    ->maxLength(8),
                Forms\Components\RichEditor::make('historial_medico')
                    ->label("Historial médico")
                    ->maxLength(65353),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('telefono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sexo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_nacimiento')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nss')
                    ->searchable(),
                Tables\Columns\TextColumn::make('curp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cedula')
                    ->searchable(),
                Tables\Columns\TextColumn::make('historial_medico')
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
            'index' => Pages\ListDescripUsers::route('/'),
            'create' => Pages\CreateDescripUser::route('/create'),
            'edit' => Pages\EditDescripUser::route('/{record}/edit'),
        ];
    }
}
