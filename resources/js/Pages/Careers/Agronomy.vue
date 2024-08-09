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
        url: "/storage/images/careers/ingagronomia1.jpg",
    },
];
</script>
<template>
    <Head title="Ingeniería en Agronomía" />
    <div class="flex items-start justify-center gap-8">
        <CareersSidebar />
        <div class="flex w-2/3 flex-col gap-4 p-10">
            <h1 class="w-full text-center text-3xl">Ingeniería en Agronomía</h1>
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
                Formar profesionistas en el campo de la agronomía capaces de
                generar, adaptar y transferir tecnología, con base en estándares
                de calidad, vocación de servicio, visión creativa y
                emprendedora, comprometidos con la sociedad y el manejo
                sustentable de los recursos naturales para la producción
                agropecuaria.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Misión</h2>
            <p class="text-justify text-lg">
                Impulsar la formación integral de profesionistas en el campo de
                la Agronomía con alto nivel académico, emprendedores,
                pensamiento holístico, sentido crítico, humanístico y
                científico, capaces de innovar en los sistemas de producción
                agropecuarios del trópico mexicano que contribuyan al desarrollo
                sostenible del país y al bienestar de la sociedad.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Visión</h2>
            <p class="text-justify text-lg">
                Ser un programa de educación superior reconocido por su
                excelencia académica y contenidos pertinentes, comprometido con
                el desarrollo rural sustentable del trópico mexicano y la
                formación de recursos humanos altamente competentes en las áreas
                de la agricultura y los recursos naturales acordes con los
                avances científicos y tecnológicos de vanguardia.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Perfil de Ingreso</h2>
            <p class="text-justify text-lg">
                El aspirante a Ingeniería Agronomía deberá contar con las
                siguientes características para ingresar al plan de estudios:
            </p>
            <h3 class="text-xl text-blue-950">Habilidades</h3>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>Capacidad de asombro</li>
                <li>Trabajo en equipo</li>
                <li>Destreza para el trabajo con plantas y animales</li>
                <li>Comprensión de fenómenos biológicos</li>
                <li>Gusto por el campo</li>
                <li>Ingenio</li>
                <li>Capacidad para relacionarse con el sector agrícola</li>
                <li>Desempeño con productores rurales y empresarios</li>
                <li>Hábitos de estudio</li>
                <li>Hábito de la lectura</li>
                <li>Conservación de la naturaleza y el ambiente</li>
                <li>Interés por los recursos vegetales nativos</li>
                <li>
                    Participación con los agentes sociales e institucionales
                </li>
                <li>
                    Interés por la solución de problemas de los sistemas de
                    producción agropecuarios
                </li>
                <li>Visión empresarial</li>
            </ul>
            <h3 class="text-xl text-blue-950">Actitudes</h3>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>Responsabilidad</li>
                <li>Disciplina</li>
                <li>Ser emprendedor</li>
                <li>Disponibilidad</li>

                <li>Empatía con los campesinos</li>
                <li>Humildad para aprender y enseñar</li>
                <li>Interés por documentarse continuamente</li>
                <li>Tener una visión holística</li>
                <li>Honestidad y ética</li>
                <li>Vocación solidaria y de apoyo</li>
                <li>Manejo óptimo de los recursos agropecuarios</li>
                <li>Respeto por las culturas</li>
                <li>
                    Compromiso con la mejora social, cultural y económico de la
                    sociedad
                </li>
                <li>Iniciativa</li>
                <li>Respeto así mismo y a los demás</li>
                <li>Lealtad</li>
                <li>Liderazgo</li>
                <li>Creatividad</li>
                <li>Organización</li>
                <li>Tolerancia y equidad</li>
                <li>Gentileza</li>
            </ul>
            <h3 class="text-xl text-blue-950">Aptitudes</h3>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>
                    Uso eficiente de sistemas de cómputo y manejo de bases de
                    datos
                </li>
                <li>
                    Relacionarse de manera fácil y sencilla con personas de
                    nivel socio económico diverso
                </li>
                <li>Protección de los recursos fitogenéticos locales</li>
                <li>
                    Manejo correcto del instrumental científico, equipo y
                    maquinaria
                </li>
                <li>Comunicarse de manera táctica y estratégica</li>
                <li>Manejo de TICs en beneficio de su formación</li>
                <li>Conciencia del cuidado del ambiente y cambio climático</li>
            </ul>
            <h3 class="text-xl text-blue-950">Conocimientos</h3>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>Matemáticas</li>
                <li>Biología</li>
                <li>Física</li>

                <li>Química</li>
                <li>Administración</li>
                <li>Humanidades</li>
                <li>TICs</li>
                <li>Geografía</li>
            </ul>
            <h2 class="text-2xl font-bold text-blue-950">Perfíl de Egreso</h2>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>
                    Desempeña el ejercicio de su profesión en forma ética sobre
                    bases científico-tecnológicas, participando en equipos inter
                    y multidisciplinarios en sistemas de producción
                    agropecuaria.
                </li>
                <li>
                    Identifica y analiza la problemática social, económica y
                    política, en los ámbitos regional, nacional e internacional
                    para la toma de decisiones en el desempeño de su profesión.
                </li>
                <li>
                    Maneja las tecnologías de información y comunicación para
                    obtener, procesar y compartir información en la construcción
                    del conocimiento aplicado a los sistemas de producción de
                    bienes y servicios.
                </li>
                <li>
                    Aplica habilidades de comunicación verbal y escrita en su
                    propio idioma e interpretar correctamente información en una
                    segunda lengua.
                </li>
                <li>
                    Ejerce su vocación de servicio Integrando a los productores
                    agropecuarios en las cadenas productivas en la
                    transformación de productos para generar valor agregado,
                    demostrando su compromiso con la sociedad.
                </li>
                <li>
                    Identifica riesgos e implementar estrategias de bioseguridad
                    e inocuidad en los sistemas productivos agropecuarios.
                </li>
                <li>
                    Ejerce liderazgo con visión creativa y emprendedora en su
                    desempeño profesional, para propiciar e impulsar cambios que
                    mejoren las condiciones de vida de la sociedad.
                </li>
                <li>
                    Gestiona y aplica los programas de apoyo técnico,
                    financiero, social y de comercialización para el desarrollo
                    regional y nacional.
                </li>
                <li>
                    Genera, transfiere y aplica alternativas tecnológicas de
                    aprovechamiento sustentable de los recursos naturales para
                    el mejoramiento de los agroecosistemas.
                </li>
                <li>
                    Desarrolla procesos productivos agropecuarios con un enfoque
                    sustentable basado en estándares de calidad.
                </li>
            </ul>

            <h2 class="text-2xl font-bold text-blue-950">
                Especialidad - Sistemas de Producción Agropecuarios del Trópico
            </h2>
            <h3 class="text-xl text-blue-950">Objetivo General</h3>
            <p class="text-justify text-lg">
                Fortalecer la formación integral del Ingeniero Agrónomo mediante
                asignaturas que aporten los conocimientos específicos para
                comprender, analizar y proponer soluciones e innovaciones en los
                sistemas de producción agrícolas y pecuarios del trópico
                mexicano.
            </p>
            <h3 class="text-xl text-blue-950">
                Perfil de egreso de la especialidad
            </h3>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>
                    Desarrolla procesos productivos agropecuarios del trópico
                    con enfoque de sustentabilidad.
                </li>
                <li>
                    Identifica, analiza y propone soluciones a la problemática
                    de los principales sistemas de producción agropecuarios del
                    trópico.
                </li>
                <li>
                    Genera, transfiere y aplica conocimiento tecnológico y
                    científico para el aprovechamiento sustentable de los
                    recursos naturales.
                </li>
                <li>
                    Integra a los productores agropecuarios del trópico en
                    cadenas productivas para la transformación de productos que
                    generen valor agregado.
                </li>
                <li>
                    Identifica riesgos e implementa estrategias de bioseguridad
                    e inocuidad en los sistemas productivos agropecuarios del
                    trópico
                </li>
                <li>
                    Propicia e impulsa cambios que mejoren las condiciones de
                    vida de los productores agropecuarios del trópico
                </li>
                <li>
                    Promueve la diversificación productiva de los sistemas de
                    producción agropecuarios del trópico
                </li>
            </ul>

            <h3 class="text-xl text-blue-950">Campo laboral</h3>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>
                    Autoemplearse al explotar un predio agrícola o ganadero.
                </li>
                <li>
                    Desempeñarse en empresas dedicadas a la producción agrícola
                    o pecuaria (ejidatarios, pequeños propietarios, asociaciones
                    e instituciones).
                </li>
                <li>
                    Formar parte de las instituciones oficiales del sector
                    agropecuario en los tres niveles de gobierno (federal,
                    estatal y municipal) y empresas paraestatales o
                    descentralizadas.
                </li>
                <li>
                    Transmitir los conocimientos adquiridos al formar parte de
                    instituciones y empresas dedicadas a la docencia y/o
                    investigación agrícola y pecuaria.
                </li>
                <li>
                    Proporcionar de forma individual o como parte de una
                    corporación (bufete), asistencia técnica a productores.
                </li>
                <li>
                    Empresa de tipo industrial, comercial, servicios y
                    agropecuarias.
                </li>
                <li>
                    Estar a cargo de empresas dedicadas a la producción y
                    comercialización de: fertilizantes, maquinaria agrícola,
                    plaguicidas, equipo y materiales agropecuarios e
                    instrumentos de labranza agrícola.
                </li>
                <li>Desarrollar proyectos productivos.</li>
            </ul>
            <h3 class="text-xl text-blue-950">Habilidades</h3>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>
                    Generar, adoptar y transferir tecnologías apropiadas a las
                    necesidades del entorno.
                </li>
                <li>
                    Aplicar la ingeniería de proyectos a fenómenos que influyen
                    en los procesos productivos.
                </li>
                <li>
                    Identificar riesgos y aplicar estrategias de bioseguridad e
                    inocuidad en los sistemas productivos agropecuarios.
                </li>
                <li>
                    Ejercer liderazgo en las áreas de su desempeño profesional
                    para proporcionar e impulsar cambios que mejoren las
                    condiciones de su entorno.
                </li>
                <li>
                    Organizar, capacitar y asesorar a los usuarios de los
                    sistemas de producción.
                </li>
            </ul>

            <Acordion title="Retícula" ariaTitle="retícula" class="mt-10">
                <div class="flex w-full items-center justify-between">
                    <h4>Programa IAGR-2010-214</h4>
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
                        <h4>Bioquimica</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Botánica General</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Edafologia</h4>
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
                        <h4>Zoología</h4>
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
                        <h4>Agroclimatología</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Agroecología</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Botánica Sistemática</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Cálculo Integral</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Mecanización Agropecuaria</h4>
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
                </div>
            </Acordion>
            <Acordion title="Cuarto Semestre">
                <div class="flex flex-col gap-4">
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
                        <h4>Fisiología Animal</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Fisiología Vegetal</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Sistemas de Producción Agrícola</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Sociología Rural</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Topografía</h4>
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
                        <h4>Diseños Experimentales</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Gestión Empresarial</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Hidráulica</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Nutrición Vegetal</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Sistemas de Producción Pecuaria</h4>
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
                        <h4>Entomología</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Figuras Asociativas para la Producción</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Genética General</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Geomática</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Nutrición Animal</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Taller de Investigacion I</h4>
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
                        <h4>Cultivos Energéticos</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Fitopatología</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Manejo Integral de Cuencas Hidrográficas</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Modelos Matemáticos Aplicados a la Agricultura</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>
                            Planificación y Dirección de la Empresa Agropecuaria
                        </h4>
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
                        <h4>Higiene Pecuaria</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Uso Eficiente del Agua</h4>
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
                        <h4>Agronegocios | PAF-2101</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>
                            Especies Agrícolas de Importancia Económica |
                            DAD-2102
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
                            Inocuidad Agrolimentaria y Bioseguridad | DAC-2103
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
                            Reproducción de Especies Pecuarias de Importancia
                            Económica | DAG-2104
                        </h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Zootecnia | DAF-2105</h4>
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
