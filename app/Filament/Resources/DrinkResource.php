<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DrinkResource\Pages;
use App\Filament\Resources\DrinkResource\RelationManagers;
use App\Models\Drink;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;


class DrinkResource extends Resource
{
    protected static ?string $model = Drink::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('kategori_id')
                    ->label('Kategori')
                    ->relationship('kategori', 'name')
                    ->required(),

                TextInput::make('name')
                    ->required(),

                TextInput::make('price')
                    ->numeric()
                    ->required(),
                
                FileUpload::make('image')
                    ->image()
                    ->directory('drinks')
                    ->disk('public') 
                    ->imagePreviewHeight('200')
                    ->downloadable()
                    ->openable()
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('price'),
                TextColumn::make('category.name')->label('Category'),
                TextColumn::make('created_at')->dateTime(),
                ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public') // agar ambil dari /storage
                    ->height(50)
                    ->width(50),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDrinks::route('/'),
            'create' => Pages\CreateDrink::route('/create'),
            'edit' => Pages\EditDrink::route('/{record}/edit'),
        ];
    }
}
