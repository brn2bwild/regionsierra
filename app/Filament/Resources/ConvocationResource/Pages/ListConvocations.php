<?php

namespace App\Filament\Resources\ConvocationResource\Pages;

use App\Filament\Resources\ConvocationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConvocations extends ListRecords
{
    protected static string $resource = ConvocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
