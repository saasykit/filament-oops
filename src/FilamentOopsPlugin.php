<?php

namespace Saasykit\FilamentOops;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentOopsPlugin implements Plugin
{
    protected array $config = [
        'production' => [
            'color' => 'red',
            'label' => 'Production',
        ],
    ];

    public function getId(): string
    {
        return 'filament-oops';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }

    public function setConfig(array $config): FilamentOopsPlugin
    {
        $this->config = $config;

        return $this;
    }

    public function getConfig(): array
    {
        return $this->config;
    }
}
