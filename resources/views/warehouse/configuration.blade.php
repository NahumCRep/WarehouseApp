<x-layouts.app title="Configuracion" :warehouseDashboard="$warehouse->id">
    <x-slot name="modal"></x-slot>
    @dump($warehouse)
</x-layouts.app>