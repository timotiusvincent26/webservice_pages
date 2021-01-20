let hamburger = document.getElementById('hamburger');
    let list = document.getElementById('list');

    hamburger.addEventListener('click', () => {
        list.classList.toggle('active');
    });