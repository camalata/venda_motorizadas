<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReservaResource\Pages;
use App\Filament\Resources\ReservaResource\RelationManagers;
use App\Models\Reserva;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
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
                Tables\Columns\TextColumn::make('data_reserva')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'info' => 'pendente',
                        'success' => 'reservada',
                        'danger' => 'cancelada',
                        'warning' => 'estoque insuficiente',
                    ]),
                Tables\Columns\TextColumn::make('mota.marca')
                    ->label('Marca da Mota')
                    ->sortable(),
                Tables\Columns\TextColumn::make('mota.modelo')
                    ->label('Modelo da Mota')
                    ->sortable(),
                Tables\Columns\TextColumn::make('cliente.user.name')
                    ->label('Nome do Cliente')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Atualizado em')
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
