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
        url: "/storage/images/careers/inginformatica1.jpg",
    },
];
</script>
<template>
    <Head title="Ingeniería Informática" />
    <div class="flex items-start justify-center gap-8">
        <CareersSidebar />
        <div class="flex w-2/3 flex-col gap-4 p-10">
            <h1 class="w-full text-center text-3xl">Ingeniería Informática</h1>
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
                Formar profesionales competentes en el diseño, desarrollo,
                implementación y administración de proyectos informáticos con
                una visión sistémica, tecnológica y estratégica; ofreciendo
                soluciones innovadoras e integrales a las organizaciones de
                acuerdo con las necesidades actuales; comprometidos con su
                entorno, desempeñándose con actitud ética, emprendedora y de
                liderazgo.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Misión</h2>
            <p class="text-justify text-lg">
                Formar profesionistas capaces de desarrollar e innovar sistemas
                especializados de calidad, mediante el uso de tecnologías de
                clase mundial beneficiando el desarrollo económico, social y
                cultural con una actitud emprendedora, enfoque sistémico y
                pensamiento crítico en el entorno.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Visión</h2>
            <p class="text-justify text-lg">
                Ser Ingenieros Informáticos reconocidos a nivel regional
                competitivos por la calidad de sus conocimientos, formación
                ética favoreciendo a soluciones de problemática del sector
                productivo y social mediante creación e implementación de
                infraestructura tecnológica de vanguardia con la colaboración
                del personal especializado que integran al ITSS.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Perfil de Ingreso</h2>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>
                    Interés por la tecnología y sus aplicaciones, en especial la
                    relacionada con la informática y los sistemas
                    computacionales.
                </li>
                <li>
                    Capacidad de plantear y resolver problemas en base al
                    razonamiento, a la síntesis, la abstracción y la
                    creatividad.
                </li>
                <li>
                    Capacidad de adaptarse a los cambios tecnológicos y estar a
                    la vanguardia, siempre con un enfoque con sentido de la
                    responsabilidad y comprometido con el entorno, la sociedad y
                    la naturaleza.
                </li>
                <li>Habilidad numérica.</li>
                <li>
                    Razonamiento formal que le facilite la resolución de
                    problemas lógicos y de su contexto.
                </li>
                <li>
                    Habilidad para comunicarse apropiadamente e interpretar
                    instrucciones escritas y verbales.
                </li>
                <li>
                    Actitud y Disponibilidad para el aprendizaje y trabajo
                    colaborativo.
                </li>
                <li>Aplicación de valores universales.</li>
                <li>Predisposición hacia la organización y el orden.</li>
                <li>
                    Interés y vocación de servicio, capacidad creativa e
                    innovadora.
                </li>
                <li>
                    Capacidad de adaptación y respuesta ágil y eficiente ante
                    situaciones imprevistas.
                </li>
                <li>
                    Capacidad de análisis, síntesis, abstracción, y
                    predisposición para el trabajo en equipo.
                </li>

                <li>Iniciativa, curiosidad y creatividad.</li>
                <li>Habilidad para generar relaciones interpersonales.</li>
                <li>Habilidad cognitiva.</li>
            </ul>
            <h2 class="text-2xl font-bold text-blue-950">Perfíl de Egreso</h2>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>
                    Aplica conocimientos científicos y tecnológicos en el área
                    informática para la solución de problemas con un enfoque
                    multidisciplinario.
                </li>
                <li>
                    Formula, desarrolla y gestiona el desarrollo de proyectos de
                    software para incrementar la competitividad en las
                    organizaciones, considerando las normas de calidad vigentes.
                </li>
                <li>
                    Aplica herramientas computacionales actuales y emergentes
                    para optimizar los procesos en las organizaciones.
                </li>
                <li>
                    Diseña e implementa Bases de Datos para el almacenamiento,
                    recuperación, distribución, visualización y manejo de la
                    información en las organizaciones.
                </li>
                <li>
                    Crea y administra redes de computadoras, considerando el
                    diseño, selección, instalación y mantenimiento para la
                    operación eficiente de los recursos informáticos.
                </li>
                <li>
                    Realiza consultorías relacionadas con la función informática
                    para la mejora continua de la organización.
                </li>
                <li>
                    Se desempeña profesionalmente con ética, respetando el marco
                    legal, la pluralidad y la conservación del medio ambiente.
                </li>
                <li>
                    Participa y dirige grupos de trabajo interdisciplinarios,
                    para el desarrollo de proyectos que requieran soluciones
                    innovadoras basadas en tecnologías y sistemas de
                    información.
                </li>
            </ul>

            <h2 class="text-2xl font-bold text-blue-950">
                Especialidad - Desarrollo de Aplicaciones con Nuevas Tecnologías
            </h2>
            <h3 class="text-lg text-blue-950">Objetivo General</h3>
            <p class="text-justify text-lg">
                Formar profesionales competentes en la administración, diseño y
                desarrollo de proyectos con nuevas tecnologías incluyendo
                computación en la nube, proyectos multiplataforma y simulación
                de sistemas para la toma de decisiones.
            </p>
            <h3 class="text-lg text-blue-950">Perfil de egreso de la especialidad</h3>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>
                    Implementar soluciones informáticas para la agilización de
                    procesos en las organizaciones.
                </li>
                <li>
                    Diseñar y desarrollar modelados matemáticos que mediante la
                    simulación de sistemas contribuyan a la toma de decisiones.
                </li>
                <li>
                    Aplicar nuevas metodologías que permitan administrar
                    proyectos en los que se apliquen TIC´s.
                </li>
                <li>
                    Desarrollar soluciones en múltiples plataformas operativas
                    haciendo uso de software de código abierto.
                </li>
                <li>
                    Desarrollar sistemas informáticos en ambientes Web mediante
                    lenguajes que den soporte a arquitectura cliente – servidor.
                </li>
                <li>
                    Generar soluciones en las organizaciones mediante el uso de
                    tecnología de información y sistemas.
                </li>
                <li>
                    Propiciar en el estudiante una perspectiva sistémica y
                    diseño de soluciones tecnológicas para la mejora de las
                    organizaciones.
                </li>
            </ul>

            <h3 class="text-lg text-blue-950">Campo laboral</h3>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>
                    Empresas dedicadas a desarrollar, organizar y evaluar
                    software.
                </li>
                <li>
                    El Ingeniero en Informática puede incorporarse a todo tipo
                    de organizaciones pequeñas, medianas sean públicas o
                    privadas, que cuenten con sistemas de información.
                </li>
            </ul>
            <h3 class="text-lg text-blue-950">Habilidades</h3>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>
                    Desarrollar, mantener, evaluar y afinar sistemas
                    informáticos.
                </li>
                <li>Resolver problemas aplicando herramientas tecnológicas.</li>
                <li>
                    Realizar investigación en computación y relacionar la teoría
                    con la práctica.
                </li>
                <li>
                    Diseñar, desarrollar, implantar y mantener sistemas para
                    administrar la información en cualquier campo de desarrollo,
                    diseñando métodos y procedimientos que contribuya a
                    optimizar los recursos.
                </li>
                <li>
                    Diseñar, implantar y administrar redes y sistemas
                    distribuidos.
                </li>

                <li>
                    Aplicar tecnología de información para contribuir el
                    desarrollo sustentable de la industria.
                </li>
                <li>
                    Analizar, diseñar implantar y controla sistema de
                    información para la solución de problemas complejos bajo el
                    esquema de consultoría.
                </li>
                <li>
                    Desarrollar habilidades profesionales y humanas que permita
                    mantenerse en un alto nivel de competitividad.
                </li>
                <li>
                    Actualizarse y adaptarse a la revolución tecnológica que
                    tiende a la complejidad del conocimiento.
                </li>
            </ul>

            <Acordion title="Retícula" ariaTitle="retícula" class="mt-10">
                <div class="flex w-full items-center justify-between">
                    <h4>Programa IINF-2010-220</h4>
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
                        <h4>Administración para Informática</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Fundamentos de Programación</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Desarrollo Sustentable</h4>
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
                        <h4>
                            Administración de los Recursos y Función Informática
                        </h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Física para Informática</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Programación Orientada a Objetos</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Contabilidad Financiera</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Matemáticas Discretas</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Contabilidad Financiera</h4>
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
                        <h4>Fundamentos de Sistemas de Información</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Sistemas Electrónicos para Informática</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Estructura de Datos</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Costos Empresariales</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Álgebra Lineal</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Probabilidad y Estadística</h4>
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
                        <h4>Taller de Investigación I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Arquitectura de Computadoras</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Administración y Organización de Datos</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Fundamentos de Telecomunicaciones</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Sistemas Operativos I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Investigación de Operaciones</h4>
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
                        <h4>Análisis y Modelado de Sistemas de Información</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Tecnologías e Interfaces de Computadoras</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Fundamentos de Base de Datos</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Redes de Computadora</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Sistemas Operativos II</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Taller de Legislación Informática</h4>
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
                        <h4>
                            Desarrollo e Implementación de Sistemas de
                            Información
                        </h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Auditoría Informática</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Taller de Base de Datos</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Interconectividad de Redes</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Desarrollo de Aplicaciones Web</h4>
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
                        <h4>Calidad en los Sistemas de Información</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Fundamentos de Gestión de Servicios de TI</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Tópicos de Base de Datos</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Administración de Servidores</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Programación en Ambiente Cliente Servidor</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Taller de Investigación II</h4>
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
                        <h4>Taller de Emprendedores</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Estrategias de Gestión de Servicios de TI</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Inteligencia de Negocios</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>
                            Desarrollo de Aplicaciones para Dispositivos Móviles
                        </h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Seguridad Informática</h4>
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
                        <h4>
                            Diseño y Desarrollo de Sistemas en Código Abierto |
                            DAD-1303
                        </h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>
                            Diseño de Arquitectura de Software y Administración
                            de Proyectos Informáticos | DAD-1302
                        </h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Ingeniería Web | DAD-1304</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>
                            Seminario de Tecnologías de Información | DAD-1305
                        </h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Simulación de sistemas | DAD-1301</h4>
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
