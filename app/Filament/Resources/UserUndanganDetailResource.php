<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserUndanganDetailResource\Pages;
use App\Filament\Resources\UserUndanganDetailResource\RelationManagers;
use App\Models\Undangan;
use App\Models\UserUndanganDetail;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class UserUndanganDetailResource extends Resource
{
    protected static ?string $model = UserUndanganDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('slug')->label('Slug Url')->placeholder('Contoh: nama-undangan-kamu')
                        ->required()
                        ->unique(ignoreRecord: true)
                        ->disabled(fn ($state) => !!$state)
                        ->alphaDash()
                        ->maxLength(191),
                    Select::make('undangan_id')->label('Tema Undangan')
                        ->searchable()
                        ->required()
                        ->options(Undangan::where('status', 'active')->get()->pluck('nama_undangan', 'id')),
                    SpatieMediaLibraryFileUpload::make('foto_pengantin_pria')->label('Foto Pengantin Pria')->collection('fotoPengantinPria')->responsiveImages()->maxSize(512),
                    SpatieMediaLibraryFileUpload::make('foto_pengantin_wanita')->label('Foto Pengantin Wanita')->collection('fotoPengantinWanita')->responsiveImages()->maxSize(512),
                    TextInput::make('groom_name')->label('Pengantin Pria')->placeholder('Tulis nama lengkap pengantin pria')->required(),
                    TextInput::make('groom_short_name')->label('Panggilan Pengantin Pria')->placeholder('Tulis nama panggilan pengantin pria')->required(),
                    TextInput::make('bride_name')->label('Pengantin Wanita')->placeholder('Tulis nama lengkap pengantin wanita')->required(),
                    TextInput::make('bride_short_name')->label('Panggilan Pengantin Wanita')->placeholder('Tulis nama panggilan pengantin wanita')->required(),
                    TextInput::make('groom_parent_text')->label('Text Orang Tua Pengantin Pria')->placeholder('Contoh: Putra dari Bapak dan Ibu')->required(),
                    TextInput::make('bride_parent_text')->label('Text Orang Tua Pengantin Wanita')->placeholder('Contoh: Putri dari Bapak dan Ibu')->required(),
                    DatePicker::make('date_akad')->label('Tanggal Akad')->required(),
                    TextInput::make('address_akad')->label('Alamat Akad')->placeholder('Tulis alamat akad')->required(),
                    TimePicker::make('time_akad_start')->label('Waktu Mulai Akad')->required(),
                    TimePicker::make('time_akad_end')->label('Waktu Selesai Akad'),
                    DatePicker::make('date_resepsi')->label('Tanggal Resepsi')->required(),
                    TextInput::make('address_resepsi')->label('Alamat Resepsi')->placeholder('Tulis alamat resepsi')->required(),
                    TimePicker::make('time_resepsi_start')->label('Waktu Mulai Resepsi')->required(),
                    TimePicker::make('time_resepsi_end')->label('Waktu Selesai Resepsi'),
                    TextInput::make('map_akad_latlng')->label('Koordinat Map Akad')->placeholder('Contoh: -6.123456,106.123456')->required(),
                    TextInput::make('gmap_akad_url')->label('URL Google Map Akad')->placeholder('Contoh: https://goo.gl/maps/123456')->required(),
                    TextInput::make('map_resepsi_latlng')->label('Koordinat Map Resepsi')->placeholder('Contoh: -6.123456,106.123456')->required(),
                    TextInput::make('gmap_resepsi_url')->label('URL Google Map Resepsi')->placeholder('Contoh: https://goo.gl/maps/123456')->required(),
                    Toggle::make('use_unduhmantu')->default(0)->reactive()->label(fn (Closure $get): string => $get('use_unduhmantu') == 1 ? 'Unduhmantu Aktif' : 'Unduhmantu Tidak Aktif'),
                    Fieldset::make('')->columns(2)->schema([
                        DatePicker::make('date_unduhmantu')->label('Tanggal Unduhmantu')->required(),
                        TextInput::make('address_unduhmantu')->label('Alamat Unduhmantu')->placeholder('Tulis alamat unduhmantu')->required(),
                        TimePicker::make('time_unduhmantu_start')->label('Waktu Mulai Unduhmantu')->required(),
                        TimePicker::make('time_unduhmantu_end')->label('Waktu Selesai Unduhmantu'),
                        TextInput::make('map_unduhmantu_latlng')->label('Koordinat Map Unduhmantu')->placeholder('Contoh: -6.123456,106.123456')->required(),
                        TextInput::make('gmap_unduhmantu_url')->label('URL Google Map Unduhmantu')->placeholder('Contoh: https://goo.gl/maps/123456')->required(),
                    ])->hidden(fn (Closure $get): bool => $get('use_unduhmantu') == 0), 
                    Fieldset::make('Galeri')->schema([
                        SpatieMediaLibraryFileUpload::make('foto_galeri')->label('')->collection('fotoGaleriUndangan')->multiple()->responsiveImages()->enableReordering()->maxSize(512)
                            ->maxFiles(10),
                    ])->columns(1),
                    Select::make('status')
                        ->options([
                            'publish' => 'Publish',
                            'draft' => 'Draft',
                        ])
                        ->searchable()
                        ->required()
                        ->default('draft')
                        ->disabled(fn ($state) => auth()->user()->hasRole('User')),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('slug')->label('Slug Url')->searchable()->sortable()->toggleable()->url(fn (UserUndanganDetail $record): string => url($record->slug))
                ->openUrlInNewTab()->getStateUsing( function (Model $record){
                    return '/'.$record->slug;
                 })->icon('heroicon-o-link')->iconPosition('after')->tooltip('Buka Undangan'),
                TextColumn::make('undangan.nama_undangan')->label('Tema Undangan')->searchable()->sortable()->toggleable(),
                TextColumn::make('groom_name')->label('Pengantin Pria')->searchable()->sortable()->toggleable(),
                TextColumn::make('bride_name')->label('Pengantin Wanita')->searchable()->sortable()->toggleable(),
                TextColumn::make('groom_parent_text')->label('Text Orang Tua Pengantin Pria')->searchable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('bride_parent_text')->label('Text Orang Tua Pengantin Wanita')->searchable()->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('date_akad')->label('Tanggal Akad')->toggleable(),
                TextColumn::make('date_resepsi')->label('Tanggal Resepsi')->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('date_unduhmantu')->label('Tanggal Unduhmantu')->toggleable(isToggledHiddenByDefault: true)->placeholder('-'),
                TextColumn::make('time_akad_start')->label('Waktu Mulai Akad')->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('time_akad_end')->label('Waktu Selesai Akad')->toggleable(isToggledHiddenByDefault: true)->placeholder('-'),
                TextColumn::make('time_resepsi_start')->label('Waktu Mulai Resepsi')->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('time_resepsi_end')->label('Waktu Selesai Resepsi')->toggleable(isToggledHiddenByDefault: true)->placeholder('-'),
                TextColumn::make('time_unduhmantu_start')->label('Waktu Mulai Unduhmantu')->toggleable(isToggledHiddenByDefault: true)->placeholder('-'),
                TextColumn::make('time_unduhmantu_end')->label('Waktu Selesai Unduhmantu')->toggleable(isToggledHiddenByDefault: true)->placeholder('-'),
                TextColumn::make('address_akad')->label('Alamat Akad')->toggleable(isToggledHiddenByDefault: true)->limit(30)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getLimit()) {
                            return null;
                        }
                        return $state;
                    }),
                TextColumn::make('address_resepsi')->label('Alamat Resepsi')->toggleable(isToggledHiddenByDefault: true)->limit(30)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getLimit()) {
                            return null;
                        }
                        return $state;
                    }),
                TextColumn::make('address_unduhmantu')->label('Alamat Unduhmantu')->toggleable(isToggledHiddenByDefault: true)->limit(30)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getLimit()) {
                            return null;
                        }
                        return $state;
                    })->placeholder('-'),
                TextColumn::make('gmap_akad_url')->label('Gmap Akad')->toggleable(isToggledHiddenByDefault: true)->url(fn (UserUndanganDetail $record): string => $record->gmap_akad_url)
                    ->openUrlInNewTab()->icon('heroicon-o-link')->iconPosition('after')->tooltip('Buka Google Map'),
                TextColumn::make('gmap_resepsi_url')->label('Gmap Resepsi')->toggleable(isToggledHiddenByDefault: true)->url(fn (UserUndanganDetail $record): string => $record->gmap_resepsi_url)->openUrlInNewTab()->icon('heroicon-o-link')->iconPosition('after')->tooltip('Buka Google Map'),
                TextColumn::make('gmap_unduhmantu_url')->label('Gmap Unduhmantu')->toggleable(isToggledHiddenByDefault: true)->url(fn (UserUndanganDetail $record): string => $record->gmap_unduhmantu_url)->openUrlInNewTab()->icon('heroicon-o-link')->iconPosition('after')->tooltip('Buka Google Map')->placeholder('-'),
                BadgeColumn::make('status')
                ->enum([
                    'publish' => 'Published',
                    'draft' => 'Draft',
                ])->colors([
                    'success' => 'publish',
                    'warning' => 'draft',
                ])->toggleable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()->hidden(fn ($record) => $record->is_sample),
                Tables\Actions\DeleteAction::make()->hidden(fn ($record) => $record->is_sample),
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
            'index' => Pages\ListUserUndanganDetails::route('/'),
            'create' => Pages\CreateUserUndanganDetail::route('/create'),
            'edit' => Pages\EditUserUndanganDetail::route('/{record}/edit'),
        ];
    }
    
    public static function getEloquentQuery(): Builder
    {
        if(auth()->user()->hasRole('User')) {
            return parent::getEloquentQuery()->where('user_id', auth()->user()->id);
        } else {
            return parent::getEloquentQuery();
        }
    }
}
