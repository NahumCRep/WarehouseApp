<form 
    id="delete_item_form" 
    method="POST" 
    :action="{{route('warehouse.deleteItem', $warehouseId)}}" 
    class="form"
>
    @method('DELETE')
    <div class="modal_bg_title">
        <i class="fa-solid fa-box-archive fa-xl"></i> 
        <span>Eliminar Item</span>
    </div>
    <p class="formDeleteMessage">Seguro que quiere eliminar el item: <span id="item_name"></span> ?</p>
    @csrf
    <input type="hidden" name="warehouse" value="{{ $warehouseId }}">
    <input type="hidden" name="itemCode" id="itemCode">
    <button type="submit" class="delete_btn">eliminar</button>
</form>