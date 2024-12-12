<?php

namespace App\Filament\Cliente\Resources;

use App\Filament\Cliente\Resources\ReservaResource\Pages;
use App\Filament\Cliente\Resources\ReservaResource\RelationManagers;
use App\Models\Cliente;
use App\Models\Reserva;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ReservaResource extends Resource
{
    protected static ?string $model = Reserva::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DateTimePicker::make('data_reserva')
                    ->native(false)
                    ->minDate(now())
                    ->required(),
                Select::make('mota_id')
                    ->native(false)
                    ->relationship('mota', 'nome')
                    ->label('Mota')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        $clientId = Cliente::where('user_id', Auth::user()->id)->first()->id;
        return $table
            ->modifyQueryUsing(fn(Builder $query) => $query->where('cliente_id', $clientId))
            ->columns([
                Tables\Columns\TextColumn::make('data_reserva')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('mota.nome')
                    ->label('Nome da Mota')
                    ->sortable(),
                Tables\Columns\TextColumn::make('cliente.user.name')
                    ->label('Solicitante')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                ->label('Criado em')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
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
