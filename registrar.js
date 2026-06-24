console.log("Registrador cargado");

// ===============================
// REGISTRO DE USUARIOS
// MMA Systems
// ===============================

// Obtener el formulario
const registerForm = document.getElementById("registerForm");

// Escuchar el envío del formulario
registerForm.addEventListener("submit", function(e){

    // Evita que la página se recargue
    e.preventDefault();

    // Obtener los datos
    const nombre = document.getElementById("nombre").value.trim();
    const apellido = document.getElementById("apellido").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;

    const mensaje = document.getElementById("mensaje");

    // Limpiar mensajes anteriores
    mensaje.textContent = "";

    // Verificar campos vacíos
    if(nombre === "" || apellido === "" || email === "" || password === "" || confirmPassword === ""){

        mensaje.style.color = "red";
        mensaje.textContent = "Debe completar todos los campos.";

        return;
    }

    // Verificar contraseñas
    if(password !== confirmPassword){

        mensaje.style.color = "red";
        mensaje.textContent = "Las contraseñas no coinciden.";

        return;
    }

    // Verificar si el correo ya existe
    if(localStorage.getItem(email)){

        mensaje.style.color = "red";
        mensaje.textContent = "Ese correo ya está registrado.";

        return;
    }

    // Crear objeto usuario
    const usuario = {

        nombre: nombre,
        apellido: apellido,
        email: email,
        password: password,
        rol: "Alumno"

    };

    // Guardar usuario
    localStorage.setItem(email, JSON.stringify(usuario));

    // Mensaje de éxito
    mensaje.style.color = "green";
    mensaje.textContent = "Registro exitoso. Redirigiendo al inicio de sesión...";

    // Redirigir al login
    setTimeout(function(){

        window.location.href = "login.html";

    },2000);

});