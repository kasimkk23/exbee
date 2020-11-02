
let modalBtn = document.querySelector('.lobby__circle-1');
let modalBg = document.querySelector('.modal-bg');
let closeModal = document.querySelector('.close-modal');


modalBtn.addEventListener('click', function() {
    modalBg.classList.add('modal-bg-active');
});

closeModal.addEventListener('click', function() {
    modalBg.classList.remove('modal-bg-active');
});
