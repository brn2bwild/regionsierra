<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConvocationResource\Pages;
use App\Filament\Resources\ConvocationResource\RelationManagers;
use App\Models\Convocation;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConvocationResource extends Resource
{
    protected static ?string $model = Convocation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'convocatoria';
    protected static ?string $pluralModelLabel = 'convocatorias';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                SpatieMediaLibraryFileUpload::make('file')
                    ->label('Archivo')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(1024)
                // Forms\Components\TextInput::make('slug')
                //     ->required()
                //     ->maxLength(255),
                // Forms\Components\Textarea::make('content')
                //     ->required()
                //     ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('slug')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListConvocations::route('/'),
            'create' => Pages\CreateConvocation::route('/create'),
            'edit' => Pages\EditConvocation::route('/{record}/edit'),
        ];
    }
}
