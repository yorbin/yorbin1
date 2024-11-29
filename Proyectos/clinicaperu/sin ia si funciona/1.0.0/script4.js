
document.addEventListener('DOMContentLoaded', (event) => {
    const menuIcon = document.querySelector('.menu-icon');
    const portalIcon = document.querySelector('.portal');
    const themeSwitcher = document.querySelector('.theme-switcher');

    menuIcon.addEventListener('click', () => {
        menuIcon.classList.add('clicked');
        setTimeout(() => {
            menuIcon.classList.remove('clicked');
        }, 300);
    });

    portalIcon.addEventListener('click', () => {
        portalIcon.classList.add('clicked');
        setTimeout(() => {
            portalIcon.classList.remove('clicked');
        }, 300);
    });

    themeSwitcher.addEventListener('click', () => {
        document.body.classList.toggle('dark-theme');
        const isDarkTheme = document.body.classList.contains('dark-theme');
        themeSwitcher.innerHTML = isDarkTheme ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
        localStorage.setItem('darkTheme', isDarkTheme);
    });

    const savedTheme = localStorage.getItem('darkTheme');
    if (savedTheme === 'true') {
        document.body.classList.add('dark-theme');
        themeSwitcher.innerHTML = '<i class="fas fa-sun"></i>';
    }
});
