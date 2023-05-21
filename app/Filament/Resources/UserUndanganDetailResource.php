<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserUndanganDetailResource\Pages;
use App\Filament\Resources\UserUndanganDetailResource\RelationManagers;
use App\Models\UserUndanganDetail;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserUndanganDetailResource extends Resource
{
    protected static ?string $model = UserUndanganDetail::class;

    protected static ?string $label = 'User Undangan Detail';
    protected static ?string $modelLabel = 'User Undangan';
    protected static ?string $navigationLabel = 'User Undangan Detail';
    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListUserUndanganDetails::route('/'),
            'create' => Pages\CreateUserUndanganDetail::route('/create'),
            'edit' => Pages\EditUserUndanganDetail::route('/{record}/edit'),
        ];
    }    

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('is_sample', false);
    }
}
