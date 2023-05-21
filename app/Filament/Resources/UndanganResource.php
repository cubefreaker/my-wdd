<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UndanganResource\Pages;
use App\Filament\Resources\UndanganResource\RelationManagers;
use App\Models\Undangan;
use App\Models\UndanganGroup;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

class UndanganResource extends Resource
{
    protected static ?string $model = Undangan::class;

    protected static ?string $label = 'Undangan';
    protected static ?string $modelLabel = 'Undangan';
    protected static ?string $navigationLabel = 'Undangan';
    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Select::make('undangan_group_id')->label('Group')
                        ->relationship('undangan_group', 'id')
                        ->getOptionLabelFromRecordUsing(fn ($record) => $record->nama_undangan_group)
                        ->searchable()
                        ->getSearchResultsUsing(fn (string $query, Builder $queryBuilder) => $queryBuilder->where('nama_undangan_group', 'like', '%' . $query . '%'))
                        ->required()
                        ->preload(),
                    Forms\Components\TextInput::make('nama_undangan')->label('Nama')
                        ->required()
                        ->maxLength(191),
                    Forms\Components\TextInput::make('laravel_controller_class')
                        ->required()
                        ->maxLength(191),
                    Select::make('status')
                        ->options([
                            'active' => 'Active',
                            'inactive' => 'Inactive',
                        ])
                        ->searchable()
                        ->required()
                        ->default('active'),
                    SpatieMediaLibraryFileUpload::make('cover')->collection('undanganGroupImg'),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_undangan')->label('Nama')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('undangan_group.nama_undangan_group')->label('Group')->searchable()->sortable(),
                // Tables\Columns\TextColumn::make('thumbnail_undangan')->searchable(),
                SpatieMediaLibraryImageColumn::make('cover')->collection('undanganGroupImg'),
                Tables\Columns\TextColumn::make('laravel_controller_class')->searchable(),
                BadgeColumn::make('status')
                    ->enum([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])->colors([
                        'success' => 'active',
                        'danger' => 'inactive',
                    ])->sortable(),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime(),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime(),
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
            'index' => Pages\ListUndangans::route('/'),
            'create' => Pages\CreateUndangan::route('/create'),
            'edit' => Pages\EditUndangan::route('/{record}/edit'),
        ];
    }    

    public static function getWidgets(): array
    {
        return [
            UndanganResource\Widgets\UndanganOverview::class,
        ];
    }
}
