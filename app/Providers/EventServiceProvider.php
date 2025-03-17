<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use BezhanSalleh\FilamentLanguageSwitch\Events\LocaleChanged;
use App\Listeners\LocaleChangedEventListener;

final class EventServiceProvider extends ServiceProvider
{
    /**
     * Die Event-Listener-Zuordnung für die Anwendung.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        LocaleChanged::class => [
            LocaleChangedEventListener::class,
        ],
    ];

    public function boot(): void
    {
        parent::boot();
    }
}