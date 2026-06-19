function registrarUsuario(){

    let nombre = document.getElementById("nombre").value;
    let email = document.getElementById("registroEmail").value;
    let password = document.getElementById("registroPassword").value;
    let confirmar = document.getElementById("confirmarPassword").value;

    let mensaje = document.getElementById("mensajeRegistro");

    if(nombre === "" || email === "" || password === "" || confirmar === ""){

        mensaje.style.color = "red";
        mensaje.textContent = "Complete todos los campos";

        return;
    }

    if(password !== confirmar){

        mensaje.style.color = "red";
        mensaje.textContent = "Las contraseñas no coinciden";

        return;
    }

    if(localStorage.getItem(email)){

        mensaje.style.color = "red";
        mensaje.textContent = "El usuario ya existe";

        return;
    }

    let usuario = {

        nombre: nombre,
        email: email,
        password: password

    };

    localStorage.setItem(email, JSON.stringify(usuario));

    mensaje.style.color = "green";
    mensaje.textContent = "Usuario registrado correctamente";

}

function iniciarSesion(){

    let email = document.getElementById("loginEmail").value;
    let password = document.getElementById("loginPassword").value;

    let mensaje = document.getElementById("mensajeLogin");

    let usuarioGuardado = localStorage.getItem(email);

    if(!usuarioGuardado){

        mensaje.style.color = "red";
        mensaje.textContent = "Usuario no encontrado";

        return;
    }

    let usuario = JSON.parse(usuarioGuardado);

    if(usuario.password === password){

        localStorage.setItem(
            "usuarioActivo",
            JSON.stringify(usuario)
        );

        window.location.href = "inicio.html";

    }else{

        mensaje.style.color = "red";
        mensaje.textContent = "Contraseña incorrecta";

    }

}