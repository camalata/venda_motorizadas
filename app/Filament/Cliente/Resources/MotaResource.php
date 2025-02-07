<?php

namespace App\Filament\Cliente\Resources;

use App\Filament\Cliente\Resources\MotaResource\Pages;
use App\Filament\Cliente\Resources\MotaResource\RelationManagers;
use App\Models\Mota;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class MotaResource extends Resource
{
    protected static ?string $model = Mota::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('cor')
                    ->required(),
                Forms\Components\TextInput::make('preco')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('cilindragem')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('capacidade')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('descricao')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('disponivel')
                    ->required(),
                Forms\Components\FileUpload::make('imagem_url')
                    ->required(),
                Forms\Components\TextInput::make('modelo_id')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cor'),
                Tables\Columns\TextColumn::make('preco')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cilindragem')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('capacidade')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('disponivel')
                    ->boolean(),
                Tables\Columns\ImageColumn::make('imagem_url'),
                Tables\Columns\TextColumn::make('modelo_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListMotas::route('/'),
            'create' => Pages\CreateMota::route('/create'),
            'view' => Pages\ViewMota::route('/{record}'),
            'edit' => Pages\EditMota::route('/{record}/edit'),
        ];
    }
}
