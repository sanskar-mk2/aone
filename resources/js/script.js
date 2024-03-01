const toggleBtn = document.getElementById("menuToggle");
const toggleMenu = document.getElementById("menuExpand");

const openToggleMenu = () => {
    if (toggleMenu.classList.contains('hidden')) {
        toggleMenu.classList.remove('hidden');
    } else {
        toggleMenu.classList.add('hidden');
    }
};

toggleBtn.addEventListener('click', openToggleMenu);
