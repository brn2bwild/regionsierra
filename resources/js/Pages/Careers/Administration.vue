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
        url: "/storage/images/careers/ingadministracion1.jpg",
    },
];
</script>
<template>
    <Head title="Ingeniería en Administración" />
    <div class="flex items-start justify-center gap-8">
        <CareersSidebar />
        <div class="flex w-2/3 flex-col gap-4 p-10">
            <h1 class="w-full text-center text-3xl">
                Ingeniería en Administración
            </h1>
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

            <!-- Contenido de la carrera -->
            <h2 class="text-2xl font-bold text-blue-950">Objetivo General</h2>
            <p class="text-justify text-lg">
                Formar profesionales competentes que apliquen la ciencia y la
                tecnología en la generación, innovación y dirección de empresas,
                para resolver los desafíos de un entorno globalizado, con una
                visión emprendedora, ética, humana y de responsabilidad social.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Misión</h2>
            <p class="text-justify text-lg">
                Formar de manera íntegra profesionales en Ingeniería en
                Administración capaces de llevar a cabo procesos de creación,
                mejora, innovación y dirección de organizaciones del sector
                público o privado en empresas de servicios, comerciales o
                manufactureras a nivel local nacional e internacional
                competentes en gestión directiva empleando métodos, técnicas o
                procedimientos de organizaciones sustentables competitivos e
                integrales con visión globalizada de responsabilidad social y de
                carácter emprendedor y a través del desarrollo de un perfil
                ético e innovador, con perspectiva de género.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Visión</h2>
            <p class="text-justify text-lg">
                Ser un programa educativo de calidad a mediano plazo en los
                aspectos de docencia, investigación y vinculación académica;
                líder en la formación de profesionales de Ingeniería en
                Administración y las ciencias económico-administrativas en la
                región Sierra de Tabasco; con un alto sentido de sostenibilidad
                y sustentabilidad fomentando la innovación a partir del
                desarrollo de conocimientos científicos y tecnológicos, para dar
                respuesta a las exigencias cambiantes de las organizaciones;
                asimismo el Instituto Tecnológico Superior de la Región Sierra
                espera que los estudiantes a su ingreso manifiesten
                responsabilidad e interés por aprender, apego a conductas de
                urbanidad adecuadas, interés por participar en actividades extra
                académicas y que mantengan un buen desempeño académico durante
                su vida estudiantil; se comprometan al momento de su ingreso,
                con los principios, la visión, la misión, las políticas y las
                normas del Instituto Tecnológico Superior de la Región Sierra.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Perfil de Ingreso</h2>
            <p class="text-justify text-lg">
                El aspirante a Ingeniería Administración deberá contar con las
                siguientes características para ingresar al plan de estudios:
                Los alumnos candidatos a ingresar a la carrera de Ingeniería en
                Administración deberán tener características como: aptitudes y
                habilidades de organización, capacidad de liderazgo y para
                planear, entienden la forma de trabajar de las organizaciones y
                con cultura general orientada a la posibilidad de una percepción
                global de la realidad social, económica y política del estado,
                la región, el país y el mundo; personas emprendedoras con
                ingenio y creatividad, conocimiento y uso básico de las TIC´s y
                capacidad de comunicación oral y escrita, análisis, síntesis,
                interpretación y reflexión de la información; actitud de
                servicio con capacidad de colaboración y trabajo en equipo,
                hábitos de estudio y de trabajo intelectual independiente;
                respetuoso del medio ambiente, posea la capacidad para
                desarrollarse en otros idiomas, habilidad para adaptarse a
                diferentes ambientes culturales, ejercer liderazgo y ser agente
                de cambio. Adicionalmente, el aspirante a ingresar a la carrera
                de Ingeniería en Administración, tendrá que cumplir con los
                estándares tales como: Demostrar una capacidad de razonamiento
                verbal y matemático; aspirar a desarrollarse en ambientes de
                alto nivel académico y de exigencia trabajando en equipos
                multidisciplinarios; tener la capacidad de adaptarse a los
                constantes cambios e innovación tecnológicos y educativos; tener
                deseo de desarrollar capacidad emprendedora y de innovación.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Perfíl de Egreso</h2>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>
                    Ser un profesional ético, sensible a la diversidad cultural,
                    con la capacidad de gestionar, crear, desarrollar e innovar
                    organizaciones competitivas con una visión de
                    sustentabilidad y responsabilidad social.
                </li>
                <li>
                    Ser un emprendedor que promueva la transformación económica
                    y social a través de la creación de empresas, identificando
                    las oportunidades de negocios en contextos locales,
                    regionales, nacionales e internacionales.
                </li>
                <li>
                    Proponer soluciones creativas que generen ventajas
                    competitivas para resolver problemas de las áreas
                    funcionales en las organizaciones, utilizando
                    procedimientos, técnicas y herramientas de la ingeniería.
                </li>
                <li>
                    Actuar como agente de cambio en las organizaciones, en
                    respuesta a las necesidades del entorno.
                </li>
                <li>
                    Utilizar las tecnologías de la información y comunicación en
                    el ejercicio de su práctica profesional.
                </li>
                <li>
                    Organizar, integrar y dirigir equipos de trabajo para
                    favorecer el crecimiento de la organización.
                </li>
                <li>
                    Aplicar habilidades directivas para el logro de los
                    objetivos organizacionales en diferentes contextos.
                </li>
                <li>
                    Utilizar procesos de comunicación efectivos en las
                    organizaciones y su entorno. Interpretar y gestionar los
                    sistemas de calidad y el proceso de mejora continua para las
                    organizaciones.
                </li>
                <li>
                    Interpretar y aplicar el marco legal vigente, acorde a las
                    necesidades situacionales de la organización.
                </li>
                <li>
                    Desarrollar y dirigir proyectos empresariales utilizando los
                    medios y herramientas de forma multidisciplinaria.
                </li>
                <li>
                    Diseñar e implementar estrategias para optimizar los
                    procesos de las áreas funcionales de la organización.
                </li>
                <li>
                    omar decisiones en las operaciones económicas,
                    administrativas y financieras que se generen dentro de la
                    organización, en un marco jurídico/fiscal.
                </li>
                <li>
                    Prestar servicios de consultoría en su ámbito profesional.
                </li>
                <li>
                    Generar, promover y dirigir investigación para propiciar el
                    desarrollo del entorno. Participar en la administración de
                    sistemas de logística.
                </li>
                <li>
                    Identificar y administrar los riesgos financieros de las
                    organizaciones.
                </li>
                <li>
                    Diseñar, implementar y evaluar los sistemas y modelos
                    administrativos, para la optimización de los recursos que
                    intervienen en la organización, con un enfoque de calidad y
                    competitividad.
                </li>
                <li>
                    Promover y desarrollar el potencial del capital humano en
                    los diferentes niveles de la organización.
                </li>
                <li>
                    Diseñar y gestionar procesos productivos y de servicios que
                    respondan a las necesidades del entorno.
                </li>
            </ul>

            <!-- Especialidad -->
             <h2 class="text-2xl font-bold text-blue-950">
                Especialidad - Calidad en la Dirección y Gestión de Empresas
            </h2>
            <h3 class="text-lg text-blue-950">Objetivo General</h3>
            <p class="text-justify text-lg">
                Formar profesionales competentes que gestionen y apliquen
                sistemas de calidad para desarrollar el potencial de la
                organización, minimizando los impactos económicos, sociales y
                ambientales; aplicando herramientas y técnicas cuantitativas
                para la toma de decisiones.
            </p>
            <h3 class="text-lg text-blue-950">Perfil de egreso de la especialidad</h3>
            <ul class="list-disc pl-8 text-lg text-justify">
                <li>
                    Capacidad para simular analíticamente situaciones que se
                    presenten en las organizaciones.
                </li>
                <li>
                    Desarrollar y aplicar técnicas para la medición y evaluación
                    de la productividad.
                </li>
                <li>
                    Diseñar y mejorar la gestión en la calidad del capital
                    humano.
                </li>
                <li>
                    Desarrollo de habilidades directivas, manejo de la
                    inteligencia emocional y liderazgo en la toma de decisiones.
                </li>
            </ul>
            <h3 class="text-lg text-blue-950">Campo laboral</h3>
            <ul class="list-disc pl-8 text-lg text-justify">
                <li>Hospitales.</li>
                <li>Recursos Humanos.</li>
                <li>Empresas de Consultoría.</li>
                <li>Instituciones educativas.</li>
                <li>Instituciones públicas y privadas.</li>
                <li>
                    Empresa de tipo industrial, comercial, servicios y
                    agropecuarias.
                </li>
            </ul>
            <h3 class="text-lg text-blue-950">Habilidades</h3>
            <ul class="list-disc pl-8 text-lg text-justify">
                <li>
                    Ser un profesional ético, sensible a la diversidad cultural,
                    con la capacidad de gestiona, crear e innovar organizaciones
                    competitivas con una visión de sustentabilidad y
                    responsabilidad social.
                </li>
                <li>
                    Ser un emprendedor que promueva la transformación económica
                    y social atreves de la creación de empresas, identificando
                    las oportunidades de negocios en contexto locales,
                    regionales, nacionales e internacionales.
                </li>
                <li>
                    Proponer soluciones creativas que generen ventajas
                    competitivas para resolver problemas en las organizaciones,
                    utilizando procedimientos, técnicas y herramientas de la
                    ingeniería.
                </li>
            </ul>

            <!-- Retícula -->
            <Acordion title="Retícula" ariaTitle="retícula" class="mt-10">
                <div class="flex w-full items-center justify-between">
                    <h4>Programa IADM-2010-213</h4>
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
                        <h4>Contabilidad Aplicada a la Ingeniería</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Dinámica Social</h4>
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
                        <h4>Taller de Administración I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Tecnologías de la Información</h4>
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
                        <h4>Contabilidad Administrativa</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Comportamiento Organizacional</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Taller de Administración 2</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Taller de Etica</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>TIC´s Aplicadas a la Administración</h4>
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
                        <h4>Algebra Lineal</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Comunicacion Organizacional</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Derecho Laboral</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Estadistica I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Innovacion Tecnologica I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Matematicas Financieras</h4>
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
                        <h4>Capital Humano I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Derecho Mercantil</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Economia I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Estadistica II</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Mercadotecnia I</h4>
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
                        <h4>Administración Financiera I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Capital Humano II</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Derecho Fiscal</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Economia II</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Investigacion de Operaciones</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Mercadotecnia II</h4>
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
                        <h4>Administración de la Produccion</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Administración Financiera II</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Analisis de la Problematica Nacional</h4>
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
                    <div class="flex w-full items-center justify-between">
                        <h4>Investigacion de Mercado</h4>
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
                        <h4>Administración de la Calidad</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Diseño Organizacional</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Economia Internacional</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Mercadotecnia Electrónica</h4>
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
                        <h4>Auditoria Administrativa</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Consultoria</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Gestion Estratégica</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Plan de Negocios</h4>
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
                        <h4>Administración de Riesgos Laborales | CDD-2106</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>
                            Gestión de Calidad en el Capital Humano | CDD-2101
                        </h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Habilidades Directivas | CDD-2105</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Ingeniería de la Calidad | CDD-2103</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Modelos de Simulación | CDG-2104</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Planeación y Control Financiero | CDD-2102</h4>
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
