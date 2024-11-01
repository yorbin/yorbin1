document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.querySelector('.toggle-btn');
    const toggleBtn1 = document.querySelector('.toggle-btn1');
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.add('collapsed'); // Collapse sidebar by default

    toggleBtn.addEventListener('click', function() {
        sidebar.classList.toggle('collapsed');
    });

    toggleBtn1.addEventListener('click', function() {
        sidebar.classList.toggle('collapsed');
    });

    // Cargar la sección guardada en localStorage o la sección de inicio por defecto
    const savedSection = localStorage.getItem('selectedSection') || 'inicio';
    loadSection(savedSection);

    // Agregar event listeners a los elementos del menú
    const menuItems = document.querySelectorAll('.menu-item');
    console.log('Menu items:', menuItems);
    menuItems.forEach(item => {
        console.log('Adding event listener to:', item);
        item.addEventListener('click', function() {
            const section = this.getAttribute('data-section');
            loadSection(section);
            localStorage.setItem('selectedSection', section);
        });
    });
});

function loadSection(section) {
    const sectionTitle = {
        'inicio': 'Inicio',
        'sobre-mi': '¿Quiénes Somos?',
        'portafolio': 'Portafolio',
        'contacto': 'Contacto',
        'articulos': 'Articulos',
        'articulosagregar': 'Agregar Articulos',
        'prueba': 'Prueba',
        'error': 'Error 404'
    };

    if (!sectionTitle[section]) {
        // Si la sección no existe, redirigir a la sección de error
        section = 'error';
    }

    document.getElementById('section-title').innerText = sectionTitle[section];

    fetch(`assets/Plantillas/${section}.php`)
        .then(response => response.text())
        .then(data => {
            const content = document.getElementById('main-content');
            content.innerHTML = data;

            // Buscar y ejecutar scripts dentro de la plantilla
            const scripts = content.querySelectorAll('script');
            scripts.forEach(script => {
                const scriptElement = document.createElement('script');
                scriptElement.textContent = script.textContent;
                document.body.appendChild(scriptElement);
            });

            init();
        })
        .catch(error => console.error('Error al cargar la sección:', error));
}

function init() {
    const searchBox = document.getElementById('search-box');
    const productos = document.getElementById('lista-productos').children;

    searchBox.addEventListener('input', function() {
        const filter = this.value.toLowerCase();

        for (let i = 0; i < productos.length; i++) {
            const titulo = productos[i].getElementsByTagName('h5')[0].innerText.toLowerCase();

            if (titulo.includes(filter)) {
                productos[i].style.display = '';
            } else {
                productos[i].style.display = 'none';
            }
        }
    });

    const form = document.getElementById('form-agregar-articulo');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData();
        formData.append('titulo', form.elements.titulo.value);
        formData.append('precio', form.elements.precio.value);
        formData.append('imagen', form.elements.imagen.files[0]); // Agrega el archivo imagen
        fetch('assets/php/agregar_articulo.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                Swal.fire({
                    title: 'Éxito',
                    text: data.message,
                    icon: 'success',
                    confirmButtonText: 'Cerrar'
                });
            } else {
                Swal.fire({
                    title: 'Error',
                    text: data.message,
                    icon: 'error',
                    confirmButtonText: 'Cerrar'
                });
            }
        })
        .catch(error => console.error('Error al enviar el formulario:', error));
    });

    
}