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
        url: "/storage/images/careers/ingindustrial1.jpg",
    },
];
</script>
<template>
    <Head title="Ingeniería Industrial" />
    <div class="flex items-start justify-center gap-8">
        <CareersSidebar />
        <div class="flex w-2/3 flex-col gap-4 p-10">
            <h1 class="w-full text-center text-3xl">Ingeniería Industrial</h1>
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
                Formar profesionales, éticos, líderes, creativos y emprendedores
                en el área de Ingeniería Industrial; competente para diseñar,
                implantar, administrar, innovar y optimizar sistemas de
                producción de bienes y servicios; con enfoque sistemático y
                sustentable en un entorno global.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Misión</h2>
            <p class="text-justify text-lg">
                Ser Institución líder en los servicios de educación superior en
                el país, mediante la participación del personal de excelencia,
                apoyados en un sistema de gestión administrativa eficiente, con
                infraestructura de vanguardia que permitan prestar servicios
                tecnológicos, educación continua e investigación científica, que
                contribuyan al desarrollo nacional.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Visión</h2>
            <p class="text-justify text-lg">
                Formar de manera integral y pertinente profesionales que cumplan
                con los requisitos de los programas académicos con altos niveles
                de educación superior, capaces de potenciar el desarrollo
                económico, social y cultural de la región, a través de la
                innovación tecnológica, del pensamiento crítico, sentido
                humanístico y actitud emprendedora. Asimismo, ofertar servicios
                tecnológicos, de investigación y de educación continua, acordes
                a las necesidades del entorno.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Perfil de Ingreso</h2>
            <p class="text-justify text-lg">
                El aspirante a Ingeniería Industrial deberá contar con las
                siguientes características para ingresar al plan de estudios:
            </p>
            <h3 class="text-xl text-blue-950">Conocimientos</h3>
            <ul class="list-disc pl-8 text-lg text-justify">
                <li>
                    Redacción, ciencias naturales, matemáticas y lógica
                    matemática.
                </li>
                <li>Cultura general y ambiental.</li>
                <li>Ciencias experimentales como: física y química.</li>
            </ul>
            <h3 class="text-xl text-blue-950">Habilidades</h3>
            <ul class="list-disc pl-8 text-lg text-justify">
                <li>Autoaprendizaje, análisis y autoaprendizaje.</li>
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
                <li>Lectura y comprensión de textos.</li>
                <li>Comunicarse en forma oral y escrita.</li>
                <li>Interés por la investigación y la tecnología.</li>
                <li>
                    Creatividad e interés por la aplicación de la ciencia y la
                    tecnología en beneficio de la región y del país.
                </li>
                <li>Contribuir al desarrollo sustentable.</li>
            </ul>
            <h3 class="text-xl text-blue-950">Actitudes y Valores</h3>
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
                <li>Realizar actividades gerenciales.</li>
                <li>
                    Hacerse cargo de la Administración General de una empresa.
                </li>
                <li>Analizar y tomar decisiones.</li>
                <li>
                    Diseñar e implantar sistemas productivos desde el estudio de
                    localización hasta la puesta en marcha.
                </li>
                <li>Planificar y programar la producción.</li>
                <li>
                    Implantar sistemas de medición y mejoramiento de la
                    productividad.
                </li>
                <li>Administrar planes y programas de mantenimiento.</li>
                <li>Diseñar e Implantar sistemas de gestión de calidad.</li>
                <li>
                    Administrar sistemas integrales de seguridad e higiene en
                    centros de trabajo.
                </li>
                <li>
                    Diseñar sistemas logísticos y de administración de la cadena
                    de suministro.
                </li>
            </ul>

            <h2 class="text-2xl font-bold text-blue-950">
                Especialidad - Calidad y Productividad
            </h2>
            <h3 class="text-xl text-blue-950">Objetivo General</h3>
            <p class="text-justify text-lg">
                Formar profesionales que diseñen, implanten, desarrollen y
                mejoren continuamente sistemas de calidad, mediante la
                planeación, especificación, evaluación y control de las
                características de los productos y los servicios; aplicando
                herramientas de calidad y técnicas cuantitativas para la toma de
                decisiones.
            </p>
            <h3 class="text-xl text-blue-950">
                Perfil de egreso de la especialidad
            </h3>
            <ul class="list-disc pl-8 text-lg text-justify">
                <li>
                    Diseñar, implantar y mejorar métodos de trabajo y sistemas
                    de calidad.
                </li>
                <li>
                    Desarrollar y aplicar técnicas para la medición y evaluación
                    de la productividad.
                </li>
                <li>Diseñar y mejorar productos y el servicio.</li>
            </ul>

            <h3 class="text-xl text-blue-950">Campo laboral</h3>
            <ul class="list-disc pl-8 text-lg text-justify">
                <li>
                    El Ingeniero Industrial puede participar en empresas de
                    diversos giros y de cualquier tamaño, ya que su
                    especialización en calidad y productividad le posibilita
                    desarrollarse en áreas que cualquier empresa tiene.
                </li>
                <li>
                    Es así que puede desarrollarse en áreas productivas y de
                    apoyo a la producción tales como mantenimiento, seguridad y
                    gestión de la calidad. De igual forma puede ubicarse en
                    áreas gerenciales y directivas como tomador de decisiones o
                    administrador de recursos.
                </li>
            </ul>
            <h3 class="text-xl text-blue-950">Habilidades</h3>
            <ul class="list-disc pl-8 text-lg text-justify">
                <li>
                    Analizar, diseñar y gestionar sistemas productivos desde la
                    provisión de insumos hasta la entrega de bienes y servicios,
                    integrándolos con efectividad.
                </li>
                <li>
                    Conocer, seleccionar y aplicar tecnologías de automatización
                    para optimizar procesos productivos.
                </li>
                <li>
                    Diseñar, implementar y administrar sistemas de mantenimiento
                    para eficientar la operación de las instalaciones y equipos.
                </li>
                <li>
                    Implementar sistemas de gestión de la calidad para
                    satisfacer los requerimientos del cliente.
                </li>
                <li>
                    Utilizar los instrumentos de medición de mayor aplicación
                    para el apoyo de la certificación y/o acreditación con las
                    normas vigentes.
                </li>
            </ul>

            <Acordion title="Retícula" ariaTitle="retícula" class="mt-10">
                <div class="flex w-full items-center justify-between">
                    <h4>Programa IIND-2010-227</h4>
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
                        <h4>Electricidad y Electrónica Industrial</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Propiedades de los Materiales</h4>
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
                    <div class="flex w-full items-center justify-between">
                        <h4>Análisis de la Realidad Nacional</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Taller de Liderazgo</h4>
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
                        <h4>Metrología y Normalización</h4>
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
                        <h4>Cálculo Vectorial</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Economía</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Estadística Inferencial I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Estudio del Trabajo I</h4>
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
                        <h4>Procesos de Fabricación</h4>
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
                        <h4>Algoritmos y Lenguajes de Programación</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Investigación de Operaciones I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Estadística Inferencial II</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Estudio del Trabajo II</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Higiene y Seguridad Industrial</h4>
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
                        <h4>Administración de Proyectos</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Gestión de Costos</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Administración de las Operaciones I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Investigación de las Operaciones II</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Control Estadística de Calidad</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Ergonomía</h4>
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
                        <h4>Ingeniería Económica</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Administracion de las Operaciones II</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Simulación</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Administración del Mantenimiento</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Mercadotecnia</h4>
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
                        <h4>Planeación Financiera</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Planeación y Diseño de Instalaciones</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Sistemas de Manufactura</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Logística y Cadenas de Suministro</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Ingeniería de Sistemas</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Gestión de los Sistemas de Calidad</h4>
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
                        <h4>Formulación y Evaluación de Proyectos</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Relaciones Industriales</h4>
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
                        <h4>Ingeniería de Calidad | CPF-1201</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Productividad Humana | CPC-1202</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Productividad Aplicada | CPM-1206</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>
                            Gestión de los Sistemas de Calidad Aplicados |
                            CPF-1203
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
                            Temas Selectos de Ingeniería Industrial | CPJ-1204
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
                            Medición y Mejoramiento de la Productividad |
                            CPF-1205
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
