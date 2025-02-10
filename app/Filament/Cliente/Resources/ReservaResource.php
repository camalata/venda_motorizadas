<?php

namespace App\Filament\Cliente\Resources;

use App\Filament\Cliente\Resources\ReservaResource\Pages;
use App\Filament\Cliente\Resources\ReservaResource\RelationManagers;
use App\Models\Cliente;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Mota;
use App\Models\Reserva;
use DateTime;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ReservaResource extends Resource
{
    protected static ?string $model = Reserva::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('data_reserva'),
                TextEntry::make('mota.marca.nome')
                    ->label('Marca da Mota'),
                TextEntry::make('mota.modelo.nome')
                    ->label('Modelo da Mota'),
                TextEntry::make('mota.preco')
                    ->label('Preço')
                    ->money('AOA'),
                TextEntry::make('mota.cilindragem')
                    ->label('Cilindragem')
                    ->numeric(),
                TextEntry::make('mota.capacidade')
                    ->label('Capacidade')
                    ->numeric(),
                TextEntry::make('mota.cor')
                    ->label('Cor'),
                TextEntry::make('mota.descricao')
                    ->label('Descricão')
                    ->columnSpan(2)

                    ->numeric(),
            ]);
    }

    public static function form(Form $form): Form
    {

        $motaId = request()->query('motas_id');

        if (session()->has('mota_id')) {
            $motaId = session()->get('mota_id');
        } else {
            session(['mota_id' => $motaId]);
        }

        if ($motaId) {
            $mota = Mota::find($motaId);

            return $form
                ->schema([
                    DateTimePicker::make('data_reserva')
                        ->label('Data da Reserva')
                        ->native(false)
                        ->required()
                        ->minDate(now()->subMinutes(10))
                        ->maxDate(now()->addDays(30))
                        ->default(now()),
                    Select::make('marca_id')
                        ->label('Marca')
                        ->options(Marca::all()->pluck('nome', 'id'))
                        ->searchable()
                        ->live()
                        ->default($mota->modelo->marca_id)
                        ->disabled(true)
                        ->required(),
                    Select::make('modelo_id')
                        ->label('Modelo')
                        ->disabled(true)
                        ->searchable()
                        ->default($mota->modelo_id)
                        ->required(),
                    TextInput::make('preco')
                        ->default('Kz ' . number_format($mota->preco, 2))
                        ->disabled(true),
                    TextInput::make('cilindragem')
                        ->default(number_format($mota->cilindragem, 0) . ' cm3')
                        ->disabled(true),
                    Select::make('cor')
                        ->default($mota->cor)
                        ->disabled(true)
                        ->options([
                            'preta' => 'Preta',
                            'branca' => 'Branca',
                            'amarela' => 'Amarela',
                            'vermelha' => 'Vermelha',
                            'azul' => 'Azul',
                            'verde' => 'Verde',
                            'outro' => 'Outro',
                        ]),
                    Toggle::make('disponivel')
                        ->default($mota->disponivel)
                        ->disabled(true),
                    Hidden::make('mota_id')
                        ->default($mota->id),
                ]);
        } else {
            return $form
                ->schema([
                    DateTimePicker::make('data_reserva')
                        ->label('Data da Reserva')
                        ->native(false)
                        ->required()
                        ->minDate(now()->subMinutes(10))
                        ->maxDate(now()->addDays(30))
                        ->default(now()),
                    Hidden::make('mota.id'),
                    Select::make('mota_id')
                        ->label('Mota')
                        ->options(Marca::all()->pluck('nome', 'id'))
                        ->searchable()
                        ->live()
                        ->disabled(fn($get) => $get('mota.id'))
                        ->required(),
                ]);
        }
    }

    public static function table(Table $table): Table
    {
        $clientId = Cliente::where('user_id', Auth::user()->id)->first()->id;

        return $table
            ->modifyQueryUsing(fn(Builder $query) => $query->where('cliente_id', $clientId))
            ->columns([
                ImageColumn::make('mota.imagem_url'),
                Tables\Columns\TextColumn::make('data_reserva')
                    ->dateTime()
                    ->sortable(),
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
            ->filters([])
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
