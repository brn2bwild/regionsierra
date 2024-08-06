<script setup>
import MainLayout from "@/Layouts/Main/MainLayout.vue";
import { Head } from "@inertiajs/vue3";
import AboutSidebar from "@/Pages/About/Partials/AboutSidebar.vue";

defineOptions({
    layout: MainLayout,
});
</script>
<template>
    <Head title="Filosofía" />
    <div class="flex items-start justify-center gap-8">
        <AboutSidebar />
        <div class="flex w-2/3 flex-col items-center justify-center gap-4 p-10">
            <h1 class="w-full text-center text-3xl font-bold">
                Nuestra Filosofía
            </h1>
            <img src="/storage/images/mision-vision.jpg" alt="area" />
            <h2 class="w-full text-start text-xl font-medium text-blue-900">
                Misión
            </h2>
            <p class="text-justify w-full text-lg">
                Formar de manera integral y pertinente profesionales que cumplan
                con los requisitos de los programas académicos con altos niveles
                de educación superior, capaces de potenciar el desarrollo
                económico, social y cultural de la región, a través de la
                innovación tecnológica, del pensamiento crítico, sentido
                humanístico y actitud emprendedora. Asimismo ofertar servicios
                tecnológicos, de investigación y de educación continua, acordes
                alas necesidades del entorno.
            </p>
            <h2 class="w-full text-start text-xl font-medium text-blue-900">
                Visión
            </h2>

            <p class="w-full text-justify text-lg">
                Institución líder en los servicios de educación superior en el
                país, mediante la participación del personal de excelencia,
                apoyados en un sistema de gestión administrativa eficiente, con
                infraestructura de vanguardia que permitan prestar servicio
                tecnológicos, educación continua e investigación científica, que
                contribuyan al desarrollo nacional.
            </p>
            <h2 class="w-full text-start text-xl font-medium text-blue-900">
                Valores
            </h2>
            <ul class="w-full text-lg">
                <li>Excelencia</li>
                <li>Ética</li>
                <li>Creatividad</li>
                <li>Trabajo en equipo</li>
                <li>Calidad</li>
                <li>Profesionalismo</li>
                <li>Liderazgo</li>
                <li>Cultura</li>
                <li>Respeto</li>
                <li>Confianza</li>
            </ul>
        </div>
    </div>
</template>
