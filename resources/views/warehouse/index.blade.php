<x-layouts.app title="Almacenes" :warehouse="false">
    <x-slot name="modal">
        <x-forms.warehouseForm />
    </x-slot>

    <section class="warehouse_section">
        <h1>Almacenes</h1>
        <div class="warehouse_grid">
            <button class="warehouse_add_btn" id="btnAddWarehouse">
                <i class="fa-solid fa-plus fa-2x"></i>
            </button>
            @foreach ($warehouses as $warehouse)
                <x-warehouseCard :data="$warehouse" />
            @endforeach
        </div>
    </section>
</x-layouts.app>