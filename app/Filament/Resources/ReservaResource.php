<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservaResource\Pages;
use App\Filament\Resources\ReservaResource\RelationManagers;
use App\Models\Reserva;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ReservaResource extends Resource
{
    protected static ?string $model = Reserva::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DateTimePicker::make('data_reserva')
                    ->disabled(),
                Forms\Components\Select::make('status')
                    ->required()
                    ->native(false)
                    ->options([
                        'pendente' => 'Pendente',
                        'reservada' => 'Reservada',
                        'estoque insuficiente' => 'Estoque insuficiente',
                        'cancelada' => 'Cancelada',
                    ]),
                Forms\Components\TextInput::make('mota_id')
                    ->disabled()
                    ->numeric(),
                Forms\Components\TextInput::make('cliente_id')
                    ->disabled()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('mota.imagem_url'),
                Tables\Columns\TextColumn::make('data_reserva')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'info' => 'pendente',
                        'success' => 'reservada',
                        'danger' => 'cancelada',
                        'warning' => 'estoque insuficiente',
                    ]),
                TextColumn::make('mota.modelo.marca.nome'),
                TextColumn::make('mota.modelo.nome'),
                TextColumn::make('mota.preco')
                    ->numeric()
                    ->money('AOA'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListReservas::route('/'),
            'create' => Pages\CreateReserva::route('/create'),
            'view' => Pages\ViewReserva::route('/{record}'),
            'edit' => Pages\EditReserva::route('/{record}/edit'),
        ];
    }
}
