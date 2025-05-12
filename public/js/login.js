document.addEventListener('DOMContentLoaded', function() {
    // Referencias a elementos del DOM
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');
    const loginBtn = document.getElementById('loginBtn');
    const rememberCheckbox = document.getElementById('remember');

    // Función para mostrar/ocultar contraseña
    togglePassword.addEventListener('click', function() {
        // Cambiar el tipo de input entre password y text
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        
        // Cambiar el icono
        this.classList.toggle('bx-show');
        this.classList.toggle('bx-hide');
    });

    // // Función para validar el formulario
    // function validateForm() {
    //     let isValid = true;
        
    //     // Validar usuario (email)
    //     if (!usernameInput.value.trim()) {
    //         markInvalid(usernameInput, 'Por favor ingrese su correo');
    //         isValid = false;
    //     } else if (!isValidEmail(usernameInput.value)) {
    //         markInvalid(usernameInput, 'Por favor ingrese un correo válido');
    //         isValid = false;
    //     } else {
    //         markValid(usernameInput);
    //     }
        
    //     // Validar contraseña
    //     if (!passwordInput.value.trim()) {
    //         markInvalid(passwordInput, 'Por favor ingrese su contraseña');
    //         isValid = false;
    //     } else if (passwordInput.value.length < 3) {
    //         markInvalid(passwordInput, 'La contraseña debe tener al menos 6 caracteres');
    //         isValid = false;
    //     } else {
    //         markValid(passwordInput);
    //     }
        
    //     return isValid;
    // }

    // Función para marcar un campo como inválido
    function markInvalid(input, message) {
        input.style.borderColor = '#ef4444';
        
        // Buscar si ya existe un mensaje de error
        let errorElement = input.parentElement.nextElementSibling;
        if (errorElement && errorElement.classList.contains('error-message')) {
            errorElement.textContent = message;
        } else {
            // Crear nuevo mensaje de error
            errorElement = document.createElement('div');
            errorElement.classList.add('error-message');
            errorElement.style.color = '#ef4444';
            errorElement.style.fontSize = '12px';
            errorElement.style.marginTop = '5px';
            errorElement.textContent = message;
            
            // Insertar después del contenedor del input
            input.parentElement.insertAdjacentElement('afterend', errorElement);
        }
    }

    // Función para marcar un campo como válido
    function markValid(input) {
        input.style.borderColor = '#10b981';
        
        // Eliminar mensaje de error si existe
        const errorElement = input.parentElement.nextElementSibling;
        if (errorElement && errorElement.classList.contains('error-message')) {
            errorElement.remove();
        }
    }

    // Función para validar formato de email
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }


    // Cargar usuario recordado si existe
    const rememberedUser = localStorage.getItem('rememberedUser');
    if (rememberedUser) {
        usernameInput.value = rememberedUser;
        rememberCheckbox.checked = true;
    }

    // Enfocar el campo de usuario al cargar la página si está vacío
    if (!usernameInput.value) {
        usernameInput.focus();
    }
});