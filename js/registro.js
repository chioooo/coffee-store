document.addEventListener("DOMContentLoaded", function (event) {
    document.getElementById('register-form').addEventListener('submit', registrarUsuario)
});

function registrarUsuario(e) {
    e.preventDefault();
    var username = document.getElementById('username').value;
    var pass = document.getElementById('pass').value;
    var nomina = document.getElementById('nomina').value;
    var errorMessage = document.getElementById('error-message');

    if (!username || !pass || !nomina) {
        errorMessage.textContent = 'Por favor, completa todos los campos';
        return;
    }

    if (!/^\d{4,6}$/.test(nomina)) {
        errorMessage.textContent = 'El número de nómina debe tener entre 4 y 6 dígitos';
        return;
    }
    
    if (!(pass.length >= 8 && pass.length <= 16 && /[A-Z]/.test(pass) && /[!@#$%^&*]/.test(pass))) {
        errorMessage.textContent = 'La contraseña debe tener entre 8 y 16 caracteres, al menos una letra mayúscula y un carácter especial(!@#$%^&*)';
        return;
    }
    
    this.submit();
}