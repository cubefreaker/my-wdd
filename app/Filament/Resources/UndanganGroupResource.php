<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UndanganGroupResource\Pages;
use App\Filament\Resources\UndanganGroupResource\RelationManagers;
use App\Models\UndanganGroup;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextInput\Mask;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UndanganGroupResource extends Resource
{
    protected static ?string $model = UndanganGroup::class;

    protected static ?string $label = 'Undangan Group';
    protected static ?string $modelLabel = 'Undangan Group';
    protected static ?string $navigationLabel = 'Undangan Group';
    protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('nama_undangan_group')
                        ->required()
                        ->maxLength(191),
                    TextInput::make('price_amount')
                        ->numeric()
                        ->required()
                        ->mask(fn (Mask $mask) => $mask->money(
                            prefix: 'Rp ',
                            decimalPlaces: 2,
                            thousandsSeparator: '.',
                        )),
                    Select::make('status')
                        ->options([
                            'active' => 'Active',
                            'inactive' => 'Inactive',
                        ])
                        ->searchable()
                        ->required()
                        ->default('active'),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_undangan_group')->label('Nama')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('price_amount')
                    ->label('Harga')
                    ->money('idr')
                    ->searchable()
                    ->sortable(),
                BadgeColumn::make('status')
                    ->enum([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])->colors([
                        'success' => 'active',
                        'danger' => 'inactive',
                    ])->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListUndanganGroups::route('/'),
            'create' => Pages\CreateUndanganGroup::route('/create'),
            'edit' => Pages\EditUndanganGroup::route('/{record}/edit'),
        ];
    }    
}
