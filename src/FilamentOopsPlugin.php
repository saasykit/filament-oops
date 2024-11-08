<?php

namespace Saasykit\FilamentOops;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\View\View;

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
        if (isset($panel->getPlugins()[$this->getId()])) {
            FilamentView::registerRenderHook(
                PanelsRenderHook::BODY_END,
                fn (): View => view('filament-oops::main', [
                    'config' => $this->config,
                ]),
            );
        }
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

    public function config(string $envName, string $label, string $color): FilamentOopsPlugin
    {
        $this->config[$envName] = [
            'color' => $color,
            'label' => $label,
        ];

        return $this;
    }

    public function getConfig(): array
    {
        return $this->config;
    }
}
