

const warehouseAddBtn = document.querySelector('#btnAddWarehouse');
const modalContainer = document.querySelector('#modal_container');
const modalXmarkBtn = document.querySelector('#xmark_btn')

// open modal
warehouseAddBtn.addEventListener('click', () => {
    modalContainer.style.display = 'flex';
});

// close modal if click anywhere outside the modal
modalContainer.addEventListener('click', ({target}) => {
    if(target.id) modalContainer.style.display = 'none';
});

modalXmarkBtn.addEventListener('click', () => {
    modalContainer.style.display = 'none';
});