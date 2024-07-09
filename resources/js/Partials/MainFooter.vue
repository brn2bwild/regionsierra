<script setup>
import {
    faFacebook,
    faTelegram,
    faTwitter,
    faWhatsapp,
} from "@fortawesome/free-brands-svg-icons";
import {
    faCalendar,
    faLocationPin,
    faPhone,
} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <footer class="flex w-full flex-col items-center bg-blue-950 px-10">
        <div class="flex w-full justify-center p-6">
            <h1 class="text-xl font-medium text-white">
                Tecnológico Nacional de México Campus de la Región Sierra
            </h1>
        </div>
        <hr class="h-0.5 w-full border-t-0 bg-neutral-50" />
        <div class="flex w-full justify-between gap-10 py-8">
            <div class="flex w-1/2 flex-col items-center justify-center gap-8">
                <span
                    class="flex w-[440px] items-center text-center text-lg text-white"
                >
                    <FontAwesomeIcon
                        :icon="faLocationPin"
                        class="mr-4 text-white"
                    />
                    Carretera Teapa-Tacotalpa Km 4.5, Francisco Javier Mina,
                    Teapa Tabasco C.P. 86801</span
                >
                <span class="flex items-center text-center text-lg text-white"
                    ><FontAwesomeIcon
                        :icon="faCalendar"
                        class="mr-4 text-white"
                    />Horario de atención: 8:00 a.m. a 4:00 p.m. lunes a
                    viernes</span
                >
                <span class="flex items-center text-center text-lg text-white">
                    <FontAwesomeIcon
                        :icon="faPhone"
                        class="mr-4 text-white"
                    />Conmutador: 9323 240 650</span
                >
                <div class="flex w-1/3 flex-col items-center gap-3">
                    <span class="text-xl text-white">Redes Sociales</span>
                    <div class="flex w-full justify-center gap-10">
                        <Link href="">
                            <FontAwesomeIcon
                                :icon="faFacebook"
                                class="text-4xl text-white"
                            />
                        </Link>
                        <Link href="">
                            <FontAwesomeIcon
                                :icon="faTelegram"
                                class="text-4xl text-white"
                            />
                        </Link>
                        <Link href="">
                            <FontAwesomeIcon
                                :icon="faTwitter"
                                class="text-4xl text-white"
                            />
                        </Link>
                        <Link href="">
                            <FontAwesomeIcon
                                :icon="faWhatsapp"
                                class="text-4xl text-white"
                            />
                        </Link>
                    </div>
                </div>
            </div>
            <div class="h-[380px] w-1/2 overflow-hidden rounded-xl">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15216.533703182653!2d-92.9143549!3d17.548833100000017!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edba26af875131%3A0xc124cf73d391e65!2sTecNM%20Campus%20de%20la%20Region%20sierra!5e0!3m2!1ses-419!2smx!4v1720463464852!5m2!1ses-419!2smx"
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="w-full object-center"
                ></iframe>
            </div>
        </div>
        <div class="flex w-full justify-end gap-6 py-2 text-white">
            <h1>Politicas de privacidad</h1>
            <h1>Términos y condiciones</h1>
            <h1>Copyright</h1>
        </div>
    </footer>
</template>
