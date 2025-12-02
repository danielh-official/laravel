<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Infolists\Components\TextEntry;
use Filament\Tables\Columns\TextColumn;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        TextEntry::configureUsing(static function (TextEntry $field): void {
            $field->placeholder('-');
        });

        TextColumn::configureUsing(static function (TextColumn $column): void {
            $column->placeholder('-');
        });
    }
}
