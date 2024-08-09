<script setup>
import MainLayout from "@/Layouts/Main/MainLayout.vue";
import { Head } from "@inertiajs/vue3";
import CareersSidebar from "@/Pages/Careers/Partials/CareersSidebar.vue";
import Acordion from "@/Components/Acordion.vue";
import { Carousel, Navigation, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";

defineOptions({
    layout: MainLayout,
});

const images = [
    {
        name: "image-1",
        url: "/storage/images/careers/ingbioquimica1.jpg",
    },
];
</script>
<template>
    <Head title="Ingeniería Bioquímica" />
    <div class="flex items-start justify-center gap-8">
        <CareersSidebar />
        <div class="flex w-2/3 flex-col gap-4 p-10">
            <h1 class="w-full text-center text-3xl">Ingeniería Bioquímica</h1>
            <Carousel
                :autoplay="4000"
                :items-to-show="1"
                :wrap-around="false"
                pause-autoplay-on-hover
            >
                <Slide
                    v-for="image in images"
                    :key="image.index"
                    class="flex w-full items-center justify-center"
                >
                    <img
                        :src="image.url"
                        :alt="image.name"
                        class="carousel__item bg-neutral-200 object-contain"
                    />
                </Slide>

                <template #addons>
                    <Navigation />
                </template>
            </Carousel>
            <h2 class="text-2xl font-bold text-blue-950">Objetivo General</h2>
            <p class="text-justify text-lg">
                Formar profesionales íntegros de la Ingeniería Bioquímica
                competentes para trabajar en equipos multidisciplinarios y
                multiculturales que, con sentido ético, crítico, creativo,
                emprendedor y actitud de liderazgo, diseñe, controle, simule y
                optimice equipos, procesos y tecnologías sustentables que
                utilicen recursos bióticos y sus derivados, proporcionando
                también asesoría técnica a empresas y organismos dedicadas a la
                producción de bienes y servicios que contribuyan a elevar el
                nivel de vida de la sociedad.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Misión</h2>
            <p class="text-justify text-lg">
                Contribuir al desarrollo sustentable de la región, formando,
                capacitando e instruyendo profesionistas de alto nivel, capaces
                de diseñar, seleccionar, desarrollar y evaluar equipos de los
                sistemas productivos, a fin de integrarlos al sistema económico
                de la región.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Visión</h2>
            <p class="text-justify text-lg">
                Convertirnos en la mayor opción en cuanto a excelencia académica
                en Ingeniería Bioquímica en educación superior y tecnológica en
                el estado.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Perfil de Ingreso</h2>
            <p class="text-justify text-lg">
                El aspirante a Ingeniería Bioquímica deberá contar con las
                siguientes características para ingresar al plan de estudios:
            </p>
            <h3 class="text-xl text-blue-950">Conocimientos</h3>
            <ul class="list-disc pl-8 text-lg text-justify">
                <li>
                    De redacción, ciencias naturales, matemáticas y lógica
                    matemática.
                </li>
                <li>De cultura general.</li>
                <li>De cultura ambiental.</li>
                <li>De ciencias experimentales como: física y química.</li>
            </ul>
            <h3 class="text-xl text-blue-950">Actitudes y Valores</h3>
            <ul class="list-disc pl-8 text-lg text-justify">
                <li>Autoaprendizaje.</li>
                <li>Análisis y síntesis.</li>
                <li>
                    Para comunicarse con las personas independientemente de su
                    situación socioeconómica y nivel educativo.
                </li>
                <li>
                    Habilidad lógica en la comprensión de conceptos y problemas
                    reales.
                </li>

                <li>
                    Uso de tecnologías de la información y la comunicación para
                    realizar trabajos académicos.
                </li>
                <li>
                    Capacidad para integrarse a equipos de trabajo
                    multidisciplinarios.
                </li>
                <li>Para la lectura y comprensión de textos.</li>
                <li>Para comunicarse en forma oral y escrita.</li>
                <li>Interés por la investigación y la tecnología.</li>
                <li>
                    Creatividad e interés por la aplicación de la ciencia y la
                    tecnología en beneficio de la región y del país.
                </li>
                <li>Contribuir al desarrollo sustentable.</li>
            </ul>
            <h3 class="text-xl text-blue-950">Aptitudes y Valores</h3>
            <ul class="list-disc pl-8 text-lg text-justify">
                <li>De ayuda a las personas.</li>
                <li>
                    De respeto, confidencialidad y empatía con las personas.
                </li>
                <li>De Honestidad y responsabilidad.</li>
                <li>De liderazgo y humanismo.</li>
                <li>Actitud crítica, reflexiva y de servicio.</li>
                <li>Flexibilidad, disponibilidad y puntualidad.</li>
            </ul>
            <h2 class="text-2xl font-bold text-blue-950">Perfíl de Egreso</h2>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>
                    Diseñar, seleccionar, adaptar y escalar equipos y procesos
                    en los que se aprovechen de manera sustentable los recursos
                    bióticos.
                </li>
                <li>
                    Identificar, prevenir, controlar y dar solución a problemas
                    de alta dirección dentro de la práctica de la Ingeniería
                    Bioquímica.
                </li>
                <li>
                    Identificar y aplicar tecnologías emergentes relacionadas
                    con el campo de acción del Ingeniero Bioquímico.
                </li>
                <li>
                    Participar en el diseño y aplicación de normas y programas
                    de gestión y aseguramiento de la calidad, en empresas del
                    ámbito de la Ing. Bioquímica.
                </li>
                <li>
                    Formular y evaluar proyectos de Ingeniería Bioquímica con
                    criterios de sustentabilidad.
                </li>
                <li>
                    Realizar investigación científica y tecnológica en el campo
                    de la Ingeniería Bioquímica y difundir sus resultados.
                </li>
                <li>
                    Crear, implementar y administrar con sustentabilidad,
                    empresas de productos y servicios del ámbito de la
                    Ingeniería Bioquímica.
                </li>
                <li>
                    Inspeccionar, evaluar y controlar la inocuidad en alimentos,
                    equipos e instalaciones de procesos conservando la calidad,
                    seguridad y trazabilidad de los mismos.
                </li>
            </ul>

            <h2 class="text-2xl font-bold text-blue-950">
                Especialidad - Procesos Alimentarios
            </h2>
            <h3 class="text-xl text-blue-950">Objetivo General</h3>
            <p class="text-justify text-lg">
                Desarrollar productos alimenticios convencionales y no
                convencionales con la utilización de tecnología, así como el
                control de calidad a través del análisis bromatológico de éstos
                para su caracterización fisicoquímica y microbiológicos para la
                determinación de la inocuidad durante su preparación y tiempo de
                disposición en anaquel.
            </p>
            <h3 class="text-xl text-blue-950">Perfil de egreso de la especialidad</h3>
            <ul class="list-disc pl-8 text-lg text-justify">
                <li>
                    Desarrollar e innovar proyectos pertinentes para el
                    aprovechamiento integral de la materia prima existente en la
                    región, aplicando la biotecnología alimentaria.
                </li>
                <li>
                    Identificar, prevenir, controlar y dar solución a problemas
                    de alta dirección dentro de la práctica de la ingeniería
                    orientada a los procesos biotecnológicos de
                    industrialización de alimentos.
                </li>
                <li>
                    Planear, organizar y administrar con sustentabilidad, las
                    distintas empresas de productos y servicios del ámbito de la
                    biotecnología aplicada en las ciencias alimentarias.
                </li>
            </ul>

            <h3 class="text-xl text-blue-950">Campo laboral</h3>
            <ul class="list-disc pl-8 text-lg text-justify">
                <li>Laboratorio de análisis químico y microbiológico.</li>
                <li>PEMEX, Institutos de Investigación.</li>
                <li>
                    Industrias relacionadas con la producción de alimentos,
                    tales como: Bimbo, Coca-Cola, Santorin, Cristal, La
                    victoria.
                </li>
                <li>Plantas de tratamientos de agua: SAS, SAPAET.</li>
            </ul>
            <h3 class="text-xl text-blue-950">Habilidades</h3>
            <ul class="list-disc pl-8 text-lg text-justify">
                <li>
                    Diseñar, seleccionar, adaptar y escalar equipos y procesos
                    en los que se aprovechen de manera sustentables los recursos
                    bióticos.
                </li>
                <li>
                    Identificar, prevenir controlar y dar solución a problemas
                    de alta dirección dentro de la práctica de la ingeniería en
                    bioquímica.
                </li>
                <li>
                    Identificar y aplicar tecnologías emergentes relacionadas
                    con el campo de acción del Ingeniero Bioquímico.
                </li>
                <li>
                    Planear, organizar y administrar con sustentabilidad,
                    empresas de productos y servicios del ámbito de la
                    Ingeniería Bioquímica.
                </li>
            </ul>

            <Acordion title="Retícula" ariaTitle="retícula" class="mt-10">
                <div class="flex w-full items-center justify-between">
                    <h4>Programa IBQA-2010-207</h4>
                    <a
                        href="/storage/files/IADM-2010-213.pdf"
                        class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                        target="blank"
                        >Descargar</a
                    >
                </div>
            </Acordion>
            <Acordion title="Primer Semestre">
                <div class="flex flex-col gap-4">
                    <div class="flex w-full items-center justify-between">
                        <h4>Cálculo Diferencial</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Fundamentos de Investigación</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Taller de Ética</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Dibujo Industrial</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Química</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Taller de Herramientas Intelectuales</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                </div>
            </Acordion>
            <Acordion title="Segundo Semestre">
                <div class="flex flex-col gap-4">
                    <div class="flex w-full items-center justify-between">
                        <h4>Calculo Integral</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Algebra Lineal</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Administracion y Legislacion Empresas</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Biologia</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Quimica Analitica</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Química Orgánica I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                </div>
            </Acordion>
            <Acordion title="Tercer Semestre">
                <div class="flex flex-col gap-4">
                    <div class="flex w-full items-center justify-between">
                        <h4>Calculo Vectorial</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Ecuaciones Diferenciales</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Termodinámica</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Estadística</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Física</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Química Orgánica II</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                </div>
            </Acordion>
            <Acordion title="Cuarto Semestre">
                <div class="flex flex-col gap-4">
                    <div class="flex w-full items-center justify-between">
                        <h4>Balance de Materia y Energía</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Bioquímica</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Electromagnetismo</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Análisis Instrumental</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Aseguramiento de la Calidad</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Programacion y Metodos Numericos</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                </div>
            </Acordion>
            <Acordion title="Quinto Semestre">
                <div class="flex flex-col gap-4">
                    <div class="flex w-full items-center justify-between">
                        <h4>Desarrollo Sustentable</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Instrumentación y Control</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Bioquímica del Nitrógeno y Regulación Genética</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Fenómenos de Transporte I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Fisicoquímica</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Ingeniería Económica</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                </div>
            </Acordion>
            <Acordion title="Sexto Semestre">
                <div class="flex flex-col gap-4">
                    <div class="flex w-full items-center justify-between">
                        <h4>Taller de Investigación I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Microbiología</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Cinética Química y Biológica</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Fenómenos de Transporte II</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Higiene y Seguridad</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Operaciones Unitarias I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                </div>
            </Acordion>
            <Acordion title="Septimo Semestre">
                <div class="flex flex-col gap-4">
                    <div class="flex w-full items-center justify-between">
                        <h4>Taller de Investigación II</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Ingeniería de Biorreactores</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Operaciones Unitarias II</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Operaciones Unitarias III</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                </div>
            </Acordion>
            <Acordion title="Octavo Semestre">
                <div class="flex flex-col gap-4">
                    <div class="flex w-full items-center justify-between">
                        <h4>Ingeniería de Procesos</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Ingeniería de Proyectos</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Ingeniería y Gestión Ambiental</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                </div>
            </Acordion>
            <Acordion title="Noveno Semestre">
                <div class="flex flex-col gap-4">
                    <div class="flex w-full items-center justify-between">
                        <h4>Especialidad</h4>
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Residencia Profesional</h4>
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Servicio Social</h4>
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Actividades Complementarias</h4>
                    </div>
                </div>
            </Acordion>
            <Acordion title="Especialidad">
                <div class="flex flex-col gap-4">
                    <div class="flex w-full items-center justify-between">
                        <h4>Ciencia de los Alimentos | PRD-1301</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Tecnología de Cárnicos y Derivados | PRD-1303</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>
                            Tecnología de Cereales, Leguminosa y Oleaginosa |
                            PRD-1305
                        </h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Tecnología de Frutas y Hortalizas | PRD-1302</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>
                            Tecnología de Leche y Productos Lácteos | PRD-1304
                        </h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                </div>
            </Acordion>
        </div>
    </div>
</template>

<style>
.carousel__item {
    max-height: 600px;
    min-height: 200px;
    width: 100%;
    font-size: 20px;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel__pagination {
    display: flex;
    justify-content: center;
    list-style: none;
    line-height: 2;
    margin: 0;
    padding: 0;
}

.carousel__pagination-button {
    display: block;
    border: none;
    margin: 0;
    cursor: pointer;
    background: transparent;
    padding: 10px;
    border-radius: 4px;
}

.carousel__pagination-button::after {
    display: block;
    content: "";
    width: 12px;
    height: 12px;
    border-radius: 10px;
    background-color: #2563eb;
}

.carousel__pagination-button--active::after {
    background-color: #172554;
}

@media (hover: hover) {
    .carousel__pagination-button:hover::after {
        background-color: #172554;
    }
}

.carousel__slide__sistemas {
    padding: 10px;
    margin: 10px;
}

/* .carousel__viewport {
    perspective: 2000px;
}

.carousel__track {
    transform-style: preserve-3d;
}

.carousel__slide--sliding {
    transition: 0.5s;
}

.carousel__slide {
    opacity: 0.9;
    transform: rotateY(-20deg) scale(0.9);
}

.carousel__slide--active ~ .carousel__slide {
    transform: rotateY(20deg) scale(0.9);
}*/

.carousel__slide--prev {
    opacity: 1;
    transform: rotateY(-10deg) scale(0.95);
}

.carousel__slide--next {
    opacity: 1;
    transform: rotateY(10deg) scale(0.95);
}

.carousel__prev,
.carousel__next {
    box-sizing: content-box;
    border: 4px solid white;
    border-radius: 30px;
    background-color: #172554;
    color: honeydew;
}

.carousel__prev:hover,
.carousel__next:hover {
    color: darkgray;
}

/*
.carousel__slide--active {
    opacity: 1;
    transform: rotateY(0) scale(1.1);
} */
</style>
