
function toggleMenu() {
    const sidebar = document.getElementById('sidebar');
    const currentWidth = window.getComputedStyle(sidebar).width;
    if (currentWidth === '0px' || currentWidth === '0') {
        if (window.innerWidth <= 768) {
            sidebar.style.width = '80px';
        } else {
            sidebar.style.width = '256px';
        }
    } else {
        sidebar.style.width = '0px';
    }
}

// Ajustar el menú al cambiar el tamaño de la ventana
window.addEventListener('resize', function() {
    const sidebar = document.getElementById('sidebar');
    if (window.innerWidth <= 768) {
        sidebar.style.width = sidebar.style.width !== '0px' ? '80px' : '0px';
    } else {
        sidebar.style.width = sidebar.style.width !== '0px' ? '256px' : '0px';
    }
});
