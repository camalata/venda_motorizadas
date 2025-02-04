<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MotaResource\Pages;
use App\Filament\Resources\MotaResource\RelationManagers;
use App\Models\Mota;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MotaResource extends Resource
{
    protected static ?string $model = Mota::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('marca')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('preco')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('descricao')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('imagem_url')
                    ->label('Imagem')
                    ->directory('motas')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('preco')
                    ->money('AOA')
                    ->sortable(),
                Tables\Columns\IconColumn::make('disponivel')
                    ->boolean(),
                BadgeColumn::make('reservas_count')
                    ->label('Total de Reservas')
                    ->counts('reservas') // Nome da relação hasMany
                    ->color('success'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(),
                    Tables\Columns\TextColumn::make('updated_at')
                    ->label('Atualizado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListMotas::route('/'),
            'create' => Pages\CreateMota::route('/create'),
            'view' => Pages\ViewMota::route('/{record}'),
            'edit' => Pages\EditMota::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
