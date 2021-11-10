@extends('layouts.header')
<div class="content">
    <section>
        <div class="container-editar">
            <div class="buttons">
                    <button class="btn-editar" id="editar">Editar perfil</button>
                    <button class="btn-editar" id="cambiar">Cambiar contraseña</button>
                    <button class="btn-editar" id="privacidad">Privacidad y seguridad</button>
                    <button class="btn-editar" id="correo">Correos electronicos de instagram</button>
                    <button id="profesional" class="proffesional-count">Cambiar a cuenta profesional</button>
            </div>

            <div class="contenido-editar">
                @component('components.editForm')
                @endcomponent
            </div>
        </div>
    </section>
</div>
@extends('layouts.footer')