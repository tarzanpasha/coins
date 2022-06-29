<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChainResource\Pages;
use App\Filament\Resources\ChainResource\RelationManagers;
use App\Models\Chain;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;



class ChainResource extends Resource
{
    protected static ?string $model = Chain::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('symbol')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    SpatieMediaLibraryFileUpload::make('thumbnail')->collection('chain'),
                    Textarea::make('description')
                        ->maxLength(65535),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('thumbnail')->collection('chains'),
                TextColumn::make('id'),
                TextColumn::make('symbol'),
                TextColumn::make('chain.name')->sortable(),
                TextColumn::make('name'),
                TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListChains::route('/'),
            'create' => Pages\CreateChain::route('/create'),
            'edit' => Pages\EditChain::route('/{record}/edit'),
        ];
    }
}
