
// warehouse index page
const warehouseAddBtn = document.querySelector('#btnAddWarehouse');
const modalContainer = document.querySelector('#modal_container');
const modalXmarkBtn = document.querySelector('#xmark_btn');

// warehouse items page
const itemOpenModalBtn  = document.querySelector('#itemModalBtn');
const itemForm          = document.querySelector('#itemForm');
const itemDeleteForm    = document.querySelector('#delete_item_form');
const tableDeleteBtns   = document.querySelectorAll('.table_delete_btn');
const itemName          = document.querySelector('#item_name');
const itemCode          = document.querySelector('#itemCode');


const closeModal = () => {
    modalContainer.style.animation = 'fadeOut 0.8s forwards';
    modalContainer.style.display = 'none';
}

const openModal = () => {
    modalContainer.style.display = 'flex';
    modalContainer.style.animation = 'fadeIn 1s forwards';
}

// open modal
warehouseAddBtn?.addEventListener('click', () => {
    openModal();
});

// close modal if click anywhere outside the modal
modalContainer.addEventListener('click', ({target}) => {
    if(target.id) {
        closeModal();
    }
});

modalXmarkBtn.addEventListener('click', () => {
    closeModal();
});

itemOpenModalBtn?.addEventListener('click', () => {
    itemDeleteForm.style.display = 'none';
    itemForm.style.display = 'flex';
    openModal();
});

tableDeleteBtns.forEach((tableBtn) => {
    tableBtn.addEventListener('click', (e) => {
        let item = JSON.parse(tableBtn.value);
        itemForm.style.display = 'none';
        itemDeleteForm.style.display = 'flex';
        itemName.innerHTML = item.name;
        itemCode.value = item.code;
        openModal();
    })
});



const editConfigBtn = document.querySelector('#editWarehouseBtn');
const formInputs = document.querySelectorAll('#configInput');
const submitDiv = document.querySelector('.submit_btn_div');

editConfigBtn.addEventListener('click', () => {
    formInputs.forEach((input) => {
        input.toggleAttribute('disabled')
    });
    
    if(editConfigBtn.value === 'false') {
        editConfigBtn.value = 'true';
        editConfigBtn.innerHTML = '<i class="fa-solid fa-pen-to-square"></i> cancelar';
        submitDiv.style.display = 'flex';
    }else {
        editConfigBtn.innerHTML = '<i class="fa-solid fa-pen-to-square"></i> editar';
        editConfigBtn.value = 'false';
        submitDiv.style.display = 'none';
    } 
});

