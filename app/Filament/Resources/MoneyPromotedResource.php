<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MoneyPromotedResource\Pages;
use App\Filament\Resources\MoneyPromotedResource\RelationManagers;
use App\Models\MoneyPromoted;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
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


class MoneyPromotedResource extends Resource
{
    protected static ?string $model = MoneyPromoted::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Select::make('money_id')
                        ->relationship('money', 'name'),
                    DatePicker::make('date_begin')->required(),
                    DatePicker::make('date_end')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('money.name')->sortable(),
                Tables\Columns\TextColumn::make('money.name')->sortable(),
                Tables\Columns\TextColumn::make('date_begin')->sortable(),
                Tables\Columns\TextColumn::make('date_end')->sortable(),
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
            'index' => Pages\ListMoneyPromoteds::route('/'),
            'create' => Pages\CreateMoneyPromoted::route('/create'),
            'edit' => Pages\EditMoneyPromoted::route('/{record}/edit'),
        ];
    }
}
