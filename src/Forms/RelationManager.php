<?php

namespace Njxqlus\Filament\Components\Forms;

use Closure;
use Filament\Schemas\Components\Component;

class RelationManager extends Component
{
    protected string $view = 'filament-relation-manager-component::forms.relation-manager';

    protected string | Closure $relationManager;

    protected bool | Closure $isLazy = false;

    public static function make(): static
    {
        return app(static::class);
    }

    public function manager(string | Closure $relationManager): static
    {
        $this->relationManager = $relationManager;

        return $this;
    }

    public function getRelationManager(): string
    {
        return $this->evaluate($this->relationManager);
    }

    public function lazyLoaded(bool | Closure $condition = true): static
    {
        $this->isLazy = $condition;

        return $this;
    }

    public function isLazyLoaded(): bool
    {
        return (bool) $this->evaluate($this->isLazy);
    }

    /**
     * @deprecated Use `lazyLoaded()` instead.
     */
    public function lazy(bool | Closure $condition = true): static
    {
        return $this->lazyLoaded($condition);
    }

    /**
     * @deprecated Use `isLazyLoaded()` instead.
     */
    public function isLazy(): bool
    {
        return $this->isLazyLoaded();
    }
}
