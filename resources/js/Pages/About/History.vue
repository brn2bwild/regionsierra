<script setup>
import MainLayout from "@/Layouts/Main/MainLayout.vue";
import { Head } from "@inertiajs/vue3";
import AboutSidebar from "@/Pages/About/Partials/AboutSidebar.vue";

defineOptions({
    layout: MainLayout,
});

</script>
<template>
    <Head title="Historia" />
    <div class="flex items-start justify-center gap-8">
        <AboutSidebar />
        <div class="flex w-2/3 flex-col items-center justify-center gap-4 p-10">
            <h1 class="w-full text-center text-3xl font-bold">
                Nuestra Historia
            </h1>
            <img src="/storage/images/entrada_itss.png" alt="entrada" />
            <p class="text-justify text-lg">
                La comunidad tecnológica es totalmente consiente del compromiso
                que ha asumido, así como del papel fundamental que juega en la
                formación académica de los jóvenes que hoy se capacitan en el
                Instituto Tecnológico Superior de la Región Sierra, por tanto,
                asume una actitud propositiva entorno al objetivo por el cual
                fue creado el instituto hace ya nueve años de
                <strong>
                    impulsar la educación tecnológica, así como realizar
                    investigación científica y tecnológica en la entidad, que
                    contribuya a elevar la calidad académica, vinculándola con
                    las necesidades de desarrollo regional, estatal y nacional
                </strong>
                .
            </p>
            <p class="text-justify text-lg">
                El ITSS inicia sus actividades el 4 de Septiembre del año 2000,
                en las instalaciones de la Escuela Primaria Lic. Tomas Garrido
                Canabal del Municipio de Teapa, Tabasco; con una matrícula
                inicial de 211 alumnos distribuidos en las 3 carreras que se
                ofertan: Lic. En Administración, Licenciatura en Informática e
                Ingeniería en Bioquímica, atendidos por 10 docentes y 17
                administrativos.
            </p>

            <p class="text-justify text-lg">
                Actualmente en el ITSS se ofertan 7 carreras, todas a nivel de
                Ingeniería de las cuales 5 de ellas acreditadas en calidad de
                los programas académicos: Administración, Informática,
                Bioquímica, Electromecánica e Industrial; una más en proceso de
                acreditación: Agronomía. Se cuenta con una matrícula de 1,293
                alumnos y una plantilla general de recursos humanos de los
                cuales 74 son docentes y 90 se encuentran laborando en el área
                administrativa y de intendencia. Actualmente el Instituto está
                certificado bajo la Norma ISO 9001:2015 alineada por Multisitio
                del Tecnológico Nacional de México, enfocado en mantener la
                calidad del servicio educativo, seguimiento a las percepciones
                de los clientes y el grado en que se cumplen las necesidades y
                expectativas de estos, que implica, de alguna manera, redoblar
                esfuerzos, permitiendo a la comunidad tecnológica a permanecer
                en la senda del trabajo en equipo y el esfuerzo conjunto con la
                finalidad de formar profesionistas de excelente nivel académico.
            </p>
        </div>
    </div>
</template>
