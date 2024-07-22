<script setup>
import { faFacebook, faTwitter } from "@fortawesome/free-brands-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <footer class="relative h-80 overflow-hidden">
        <img
            class="absolute left-0 top-0 z-0 w-full"
            src="https://framework-gb.cdn.gob.mx/landing/img/fondofooter.jpg"
            alt="background-image"
        />
        <div class="absolute flex h-80 w-full justify-center gap-20 py-10">
            <Link href=""
                ><img
                    class="h-24"
                    src="https://framework-gb.cdn.gob.mx/landing/img/logoheader.svg"
                    alt="logo-gob-mexico"
            /></Link>
            <div class="flex w-1/6 flex-col text-white">
                <span class="mb-2 text-xl">Enlaces</span>
                <a class="hover:text-neutral-300 hover:underline" href="">Participa</a>
                <a class="hover:text-neutral-300 hover:underline" href=""
                    >Publicaciones Oficiales</a
                >
                <a class="hover:text-neutral-300 hover:underline" href="">Marco Jurídico</a>
                <a class="hover:text-neutral-300 hover:underline" href=""
                    >Plataforma Nacional de Transparencia</a
                >
                <a class="hover:text-neutral-300 hover:underline" href="">Alerta</a>
                <a class="hover:text-neutral-300 hover:underline" href="">Denuncia</a>
            </div>
            <div class="flex w-1/6 flex-col text-white">
                <span class="mb-2 text-xl">¿Qué es gob.mx?</span>
                <span>
                    Es el portal único de trámites, información y participación
                    ciudadana.
                    <a class="hover:text-neutral-300 hover:underline" href="">Leer más</a>
                </span>
                <a class="hover:text-neutral-300 hover:underline" href=""
                    >Portal de datos abierto</a
                >
                <a class="hover:text-neutral-300 hover:underline" href=""
                    >eclaración de accesibilidad</a
                >
                <a class="hover:text-neutral-300 hover:underline" href=""
                    >Aviso de privacidad simplificado</a
                >
                <a class="hover:text-neutral-300 hover:underline" href=""
                    >Términos y Condiciones</a
                >
                <a class="hover:text-neutral-300 hover:underline" href=""
                    >Política de seguridad</a
                >
                <a class="hover:text-neutral-300 hover:underline" href="">Mapa de sitio</a>
            </div>
            <div class="flex flex-col gap-4 text-white">
                <a class="hover:text-neutral-300 hover:underline" href=""
                    >Denuncia contra servidores públicos</a
                >
                <span class="text-xl">Síguenos en</span>
                <div class="flex justify-start gap-4">
                    <a class="hover:text-neutral-300 hover:underline" href="">
                        <FontAwesomeIcon
                            :icon="faFacebook"
                            class="text-3xl text-white"
                        />
                    </a>
                    <a class="hover:text-neutral-300 hover:underline" href="">
                        <FontAwesomeIcon
                            :icon="faTwitter"
                            class="text-3xl text-white"
                        />
                    </a>
                </div>
            </div>
        </div>
    </footer>
</template>
