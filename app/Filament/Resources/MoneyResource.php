<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MoneyResource\Pages;
use App\Filament\Resources\MoneyResource\RelationManagers;
use App\Models\Money;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\BooleanColumn;

class MoneyResource extends Resource
{
    protected static ?string $model = Money::class;

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
                    Select::make('chain_id')
                        ->relationship('chain', 'name'),
                    SpatieMediaLibraryFileUpload::make('thumbnail')->collection('moneys'),
                    TextInput::make('contract_address')
                        ->maxLength(255),
                    TextInput::make('presale_link')
                        ->maxLength(255),
                    Textarea::make('description')
                        ->maxLength(65535),
                    DatePicker::make('launch_date')->required(),
                    TextInput::make('custom_chart_link')
                        ->maxLength(255),
                    TextInput::make('custom_swap_link')
                        ->maxLength(255),
                    TextInput::make('website_link')
                        ->maxLength(255),
                    TextInput::make('telegram_link')
                        ->maxLength(255),
                    TextInput::make('twitter_link')
                        ->maxLength(255),
                    TextInput::make('discord_link')
                        ->maxLength(255),

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                SpatieMediaLibraryImageColumn::make('thumbnail')->collection('moneys'),
                Tables\Columns\TextColumn::make('symbol'),
                Tables\Columns\TextColumn::make('chain.name')->sortable(),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('created_at')
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
            'index' => Pages\ListMoney::route('/'),
            'create' => Pages\CreateMoney::route('/create'),
            'edit' => Pages\EditMoney::route('/{record}/edit'),
        ];
    }
}
