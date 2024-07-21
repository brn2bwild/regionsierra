<script setup>
import { faFacebook, faTwitter } from "@fortawesome/free-brands-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <footer class="flex h-80 w-full justify-center gap-20 bg-[#0C231E] py-10">
        <Link href=""
            ><img
                class="w-60"
                src="https://framework-gb.cdn.gob.mx/landing/img/logoheader.svg"
                alt="logo-gob-mexico"
        /></Link>
        <div class="flex w-1/6 flex-col text-white">
            <a href="">Enlaces</a>
            <a href="">Participa</a>
            <a href="">Publicaciones Oficiales</a>
            <a href="">Marco Jurídico</a>
            <a href="">Plataforma Nacional de Transparencia</a>
            <a href="">Alerta</a>
            <a href="">Denuncia</a>
        </div>
        <div class="flex w-1/6 flex-col text-white">
            <span>
                ¿Qué es gob.mx? Es el portal único de trámites, información y
                participación ciudadana. <a href="">Leer más</a>
            </span>
            <a href="">Portal de datos abierto</a>
            <a href="">eclaración de accesibilidad</a>
            <a href="">Aviso de privacidad simplificado</a>
            <a href="">Términos y Condiciones</a>
            <a href="">Política de seguridad</a>
            <a href="">Mapa de sitio</a>
        </div>
        <div class="flex flex-col gap-4 text-white">
            <a href="">Denuncia contra servidores públicos</a>
            <span class="text-xl">Síguenos en</span>
            <div class="flex justify-start gap-4">
                <a href="">
                    <FontAwesomeIcon
                        :icon="faFacebook"
                        class="text-3xl text-white"
                    />
                </a>
                <a href="">
                    <FontAwesomeIcon
                        :icon="faTwitter"
                        class="text-3xl text-white"
                    />
                </a>
            </div>
        </div>
    </footer>
</template>
