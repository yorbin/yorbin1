
document.addEventListener('DOMContentLoaded', function() {
    const registerForm = document.getElementById('registerForm');
    const togglePassword = document.getElementById('togglePassword');
    const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');
    const themeToggle = document.getElementById('themeToggle');
    const returnButton = document.getElementById('returnButton');

    // Toggle password visibility
    function togglePasswordVisibility(inputField, button) {
        const type = inputField.getAttribute('type') === 'password' ? 'text' : 'password';
        inputField.setAttribute('type', type);
        button.querySelector('i').classList.toggle('fa-eye');
        button.querySelector('i').classList.toggle('fa-eye-slash');
    }

    togglePassword.addEventListener('click', () => togglePasswordVisibility(password, togglePassword));
    toggleConfirmPassword.addEventListener('click', () => togglePasswordVisibility(confirmPassword, toggleConfirmPassword));

    // Theme toggle functionality
    themeToggle.addEventListener('click', function() {
        document.body.classList.toggle('dark-theme');
        const icon = this.querySelector('i');
        icon.classList.toggle('fa-moon');
        icon.classList.toggle('fa-sun');
    });

    // Return button functionality
    returnButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.history.back();
    });

    // Form submission
    registerForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic form validation
        const name = document.getElementById('name').value.trim();
        const surname = document.getElementById('surname').value.trim();
        const idNumber = document.getElementById('idNumber').value.trim();
        const username = document.getElementById('username').value.trim();
        const passwordValue = password.value;
        const confirmPasswordValue = confirmPassword.value;

        if (!name || !surname || !idNumber || !username || !passwordValue || !confirmPasswordValue) {
            alert('Por favor, complete todos los campos.');
            return;
        }

        if (passwordValue !== confirmPasswordValue) {
            alert('Las contraseñas no coinciden.');
            return;
        }

        // If validation passes, you can proceed with registration
        // For now, we'll just log the data
        console.log('Registro exitoso:', { name, surname, idNumber, username });
        alert('Registro exitoso!');
        
        // In a real application, you would send this data to a server
        // registerForm.submit();
    });
});
