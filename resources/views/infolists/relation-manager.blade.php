@php
    $manager = $getRelationManager();
    $isLazy = $isLazy();

    $normalizeRelationManagerClass = function (string | Filament\Resources\RelationManagers\RelationManagerConfiguration $manager): string {
        if ($manager instanceof \Filament\Resources\RelationManagers\RelationManagerConfiguration) {
            return $manager->relationManager;
        }

        return $manager;
    };

    $normalizedManagerClass = $normalizeRelationManagerClass($manager);

    $managerLivewireProperties = ['lazy' => $isLazy, 'ownerRecord' => $record(), 'pageClass' => $this::class];
@endphp


<div>
    @livewire($normalizedManagerClass, [...$managerLivewireProperties, ...$manager instanceof \Filament\Resources\RelationManagers\RelationManagerConfiguration ? $manager->properties : []], key($normalizedManagerClass))
</div>
