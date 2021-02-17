# seneca

### Descripción del Proyecto

<ul>
    <li>Inicio de session</li>
    <li>Registrar fecha y hora de último inicio de session</li>
    <li>Cerrar session</li>
    <li>Registro de nuevos usuarios</li>
    <li>Activación de cuenta por correo electrónico</li>
    <li>Activación de cuenta por correo electrónico</li>
    <li>Recuperación de contraseña</li>
    <li>Formulario de actualización de información de usuario</li>
    <li>Incluir un usuario por defecto</li>
</ul>

### Requisitos del sistema

<ul>
    <li>Php 7.3 o superior</li>
    <li>Node JS 14.* o superior</li>
    <li>Npm 6.* o superior</li>
    <li>Composer 2.* o superior</li>
    <li>Servidor Web (nginx, apache, etc)</li>
</ul>

### Instalación
<ul>
    <li>Clonar Proyecto</li>
    <li>
        Ejecutar los siguientes comandos:
        <ul>
            <li>composer install</li>
            <li>npm install</li>
            <li>npm run dev /npm run production (depende del ambiente)</li>
        </ul> 
    </li>
    <li>
    Configurar variables de entorno en el archivo .env
    <ul>
            <li>Credenciales de la base de datos</li>
            <li>Credenciales del servidor de correo electrónico</li>
            <li>Url del dominio</li>
        </ul> 
    </li>
    <li>Ejecutar php artisan migrate:refresh --seed</li>
    <li>Levantar el ambiente</li>

</ul>