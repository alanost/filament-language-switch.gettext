<?php

namespace App\Listeners;

use BezhanSalleh\FilamentLanguageSwitch\Events\LocaleChanged;
use Tio\Laravel\Facade as Translation;

class LocaleChangedEventListener
{
    public function handle(LocaleChanged $event): void
    {
        //dd($event->locale);
        Translation::setLocale($event->locale);
    }
}