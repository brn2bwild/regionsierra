<?php

namespace App\Filament\Resources\ConvocationResource\Pages;

use App\Filament\Resources\ConvocationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConvocation extends EditRecord
{
    protected static string $resource = ConvocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
