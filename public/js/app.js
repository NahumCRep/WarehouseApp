
// warehouse index page
const warehouseAddBtn = document.querySelector('#btnAddWarehouse');
const modalContainer = document.querySelector('#modal_container');
const modalXmarkBtn = document.querySelector('#xmark_btn');

// warehouse items page
const itemOpenModalBtn = document.querySelector('#itemModalBtn');

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
    openModal();
});
