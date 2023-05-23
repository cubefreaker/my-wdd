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
use Filament\Tables\Columns\TextColumn;

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
                        ->searchable()
                        ->required()
                        ->options(UndanganGroup::where('status', 'active')->get()->pluck('nama_undangan_group', 'id')),
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
                    SpatieMediaLibraryFileUpload::make('cover')->collection('undanganGroupImg')->conversion('thumb'),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_undangan')->label('Nama')->searchable()->sortable()
                    ->url(fn (Undangan $record): string => url("tema/{$record->id}"))
                    ->openUrlInNewTab()->icon('heroicon-o-link')->iconPosition('after')->tooltip('Buka Demo Undangan'),
                SpatieMediaLibraryImageColumn::make('cover')->collection('undanganGroupImg')->conversion('thumb'),
                TextColumn::make('undangan_group.nama_undangan_group')->label('Group')->searchable()->sortable(),
                TextColumn::make('undangan_group.price_amount')->label('Harga')->getStateUsing(function ($record){
                    return 'Rp. ' . number_format($record->undangan_group->price_amount, 0, ',', '.');
                })->searchable()->sortable(),
                TextColumn::make('laravel_controller_class')->searchable()->limit(30)->tooltip(fn (TextColumn $column) => $column->getState())->hidden(auth()->user()->hasRole('User')),
                TextColumn::make('laravel_view_path')->searchable()->limit(30)->tooltip(fn (TextColumn $column) => $column->getState())->hidden(auth()->user()->hasRole('User')),
                BadgeColumn::make('status')
                    ->enum([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])->colors([
                        'success' => 'active',
                        'danger' => 'inactive',
                    ])->sortable(),
                // TextColumn::make('created_at')
                //     ->dateTime(),
                // TextColumn::make('updated_at')
                //     ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
