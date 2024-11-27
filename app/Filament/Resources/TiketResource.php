<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TiketResource\Pages;
use App\Filament\Resources\TiketResource\RelationManagers;
use App\Models\Tiket;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class TiketResource extends Resource
{
    protected static ?string $model = Tiket::class;

    protected static ?string $navigationGroup = 'Tiket';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('kendaraan_id')
                    ->relationship('kendaraan', 'name')//function pertama itu ngambil dari relation di model yo, yang kedua itu column yang dipanggil dari table tersebut
                    ->required(),
                Forms\Components\TextInput::make('nama')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->prefix('IDR')
                    ->numeric(),
                Forms\Components\TextInput::make('stocks')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tujuan')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                ->required(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('kendaraan.name'),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('stocks'),
                Tables\Columns\TextColumn::make('tujuan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTikets::route('/'),
            'create' => Pages\CreateTiket::route('/create'),
            'edit' => Pages\EditTiket::route('/{record}/edit'),
        ];
    }
}
