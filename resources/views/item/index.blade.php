<x-layouts.itempage title="Items" :$warehouse :$items> 
    <section class="item-page-form-section">
        @if ($item->id)
            <x-forms.itemForm :warehouseId="$warehouse->id" :$item />
        @else
            <x-forms.itemForm :warehouseId="$warehouse->id" />
        @endif
    </section>
</x-layouts.itempage>