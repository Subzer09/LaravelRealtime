const { default: Echo } = require('laravel-echo');

require('./bootstrap');
// empezamos a escuchar al canal publico llamado notificaciones

window.Echo.private("notificaciones")
    .listen("UserSessionChanged", (e) =>{
        const notificationElement = document.getElementById("notificacion");
        notificationElement.innerText = e.message;
        notificationElement.classList.remove('invisible');
        notificationElement.classList.remove('alert-success');
        notificationElement.classList.remove("alert-danger");

        notificationElement.classList.add(`alert-${e.type}`);
});
