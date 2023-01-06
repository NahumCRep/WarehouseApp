<x-layouts.itempage title="Items" :$warehouse :$items>
    <section class="item-page-form-section">
        <x-forms.itemForm :warehouseId="$warehouse->id" />
    </section>
</x-layouts.itempage>