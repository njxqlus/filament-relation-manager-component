<?php

namespace Njxqlus\Filament\Components\Forms;

use Closure;
use Filament\Forms\Components\Component;
use Illuminate\Database\Eloquent\Model;

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

    public function lazy(bool | Closure $condition = true): static
    {
        $this->isLazy = $condition;

        return $this;
    }

    public function isLazy(): bool
    {
        return (bool) $this->evaluate($this->isLazy);
    }

    public function record(): ?Model
    {
        return $this->getRecord();
    }
}
