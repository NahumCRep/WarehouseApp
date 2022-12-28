

const warehouseAddBtn = document.querySelector('#btnAddWarehouse');
const modalContainer = document.querySelector('#modal_container');
const modalXmarkBtn = document.querySelector('#xmark_btn');

const closeModal = () => {
    modalContainer.style.animation = 'fadeOut 0.8s forwards';
    modalContainer.style.display = 'none';
}

// open modal
warehouseAddBtn.addEventListener('click', () => {
    modalContainer.style.display = 'flex';
    modalContainer.style.animation = 'fadeIn 1s forwards';
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