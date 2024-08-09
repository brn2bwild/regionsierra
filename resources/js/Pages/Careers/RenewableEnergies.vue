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
        url: "/storage/images/careers/ingenergiasrenovables1.jpg",
    },
];
</script>
<template>
    <Head title="Ingeniería en Energías Renovables" />
    <div class="flex items-start justify-center gap-8">
        <CareersSidebar />
        <div class="flex w-2/3 flex-col gap-4 p-10">
            <h1 class="w-full text-center text-3xl">
                Ingeniería en Energías Renovables
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
            <h2 class="text-2xl font-bold text-blue-950">Objetivo General</h2>
            <p class="text-justify text-lg">
                Formar profesionales que desarrollen proyectos de generación,
                transformación, almacenamiento y gestión de energía proveniente
                de fuentes renovables; competentes en el diseño, implementación
                y evaluación de tecnologías limpias para el uso eficiente de la
                energía en el entorno nacional e internacional.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Misión</h2>
            <p class="text-justify text-lg">
                Formar de manera integral y pertinente profesionales de la
                Ingeniería en Energías Renovables que cumplan con los requisitos
                de los programas académicos del TecNM, capaces de potenciar el
                desarrollo económico, social y cultural de la región, a través
                de la innovación tecnológica, del pensamiento crítico, sentido
                humanístico y actitud emprendedora.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Visión</h2>
            <p class="text-justify text-lg">
                Ser el programa educativo de Ingeniería en Energías Renovables
                líder en el País, a través de la participación de personal
                docente de excelencia, apoyados en un sistema de gestión
                administrativa eficiente, con infraestructura de vanguardia que
                permitan prestar servicios tecnológicos, educación continua e
                investigación científica, que contribuyan al desarrollo
                nacional.
            </p>
            <h2 class="text-2xl font-bold text-blue-950">Perfil de Ingreso</h2>
            <p class="text-justify text-lg">
                El aspirante a Ingeniería en Energías Renovables deberá contar
                con los siguientes conocimientos, habilidades, actitudes y
                valores para ingresar al plan de estudios:
            </p>
            <h3 class="text-xl text-blue-950">Conocimientos</h3>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>De cultura general.</li>
                <li>De cultura ambiental.</li>
                <li>De ciencias experimentales como: física y química.</li>
                <li>
                    De redacción, ciencias naturales, matemáticas y lógica
                    matemática.
                </li>
            </ul>
            <h3 class="text-xl text-blue-950">Habilidades</h3>
            <ul class="list-disc pl-8 text-justify text-lg">
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
                <li>Toma de decisiones.</li>
                <li>Propositivo.</li>
            </ul>

            <h3 class="text-xl text-blue-950">Aptitudes y Valores</h3>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>De ayuda a las personas.</li>
                <li>
                    De respeto, confidencialidad y empatía con las personas.
                </li>

                <li>De honestidad y responsabilidad.</li>
                <li>De liderazgo y humanismo.</li>
                <li>Actitud crítica, reflexiva y de servicio.</li>
                <li>Flexibilidad, disponibilidad y puntualidad.</li>
                <li>Participación en la transformación de su contexto.</li>
            </ul>

            <h2 class="text-2xl font-bold text-blue-950">Perfíl de Egreso</h2>
            <ul class="list-decimal pl-8 text-justify text-lg">
                <li>
                    Formula, evalúa y gestiona estrategias en proyectos de
                    energía renovable con base a la normatividad vigente, para
                    promover la eficiencia y la sustentabilidad energética.
                </li>
                <li>
                    Diseña e implementa sistemas energéticos renovables para
                    promover la competitividad de los sectores productivos.
                </li>
                <li>
                    Analiza y evalúa la factibilidad de implementar procesos
                    derivados de actividades de transformación y producción para
                    el tratamiento de subproductos orgánicos.
                </li>
                <li>
                    Aplica habilidades para establecer su propia empresa
                    contribuyendo al desarrollo social, económico, tecnológico y
                    ambiental de su entorno.
                </li>
                <li>
                    Diseña proyectos de investigación, desarrollo e innovación
                    tecnológica, relacionados con la energía proveniente de
                    fuentes renovables para optimizar los recursos energéticos.
                </li>
                <li>
                    Identifica y evalúa el recurso energético renovable
                    disponible en el entorno para la producción de energía con
                    calidad.
                </li>
                <li>
                    Contribuye al desarrollo de transferencia de tecnologías
                    limpias a los sectores productivos para prevenir y mitigar
                    los efectos del cambio climático.
                </li>
            </ul>

            <h2 class="text-2xl font-bold text-blue-950">
                Especialidad - Sistemas de Conversión y Uso Eficiente de la
                Energía
            </h2>
            <h3 class="text-xl text-blue-950">Objetivo General</h3>
            <p class="text-justify text-lg">
                Aplicar las competencias profesionales de la electroquímica, los
                sistemas híbridos, los microcontroladores, el ahorro y uso
                eficiente de la energía, así como la dirección y gestion de
                proyectos, para la generación, transformación, almacenamiento y
                gestión de energía proveniente de fuentes renovables.
            </p>
            <h3 class="text-xl text-blue-950">
                Perfil de egreso de la especialidad
            </h3>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>
                    Será capaz de realizar un proyecto relacionado al
                    almacenamiento de energía química, por ejemplo, baterías y/o
                    hidrógeno.
                </li>
                <li>
                    Relacionará el aprendizaje adquirido y lo aplicará en
                    situaciones de la vida real, formando escenarios
                    particulares, que le permitan analizar, planear, dirigir,
                    ejecutar y controlar proyectos energéticos, seleccionando,
                    dirigiendo y aplicando las metodologías y herramientas
                    técnicas para el uso y desarrollo de proyectos e ideas de
                    negocio de creación de productos y servicios de energías
                    renovables.
                </li>
                <li>
                    Aplicará los conocimientos de Ahorro de Energía lumínica,
                    térmica, eléctrica, hidráulica y de enfriamiento en los
                    sectores industriales y de los servicios, para promover el
                    desarrollo sustentable y generar una cultura para el uso
                    racional de la energía, a través de programas de ahorro y de
                    dispositivos que lo propicien.
                </li>
                <li>
                    Diseñará y evaluará prototipos donde se utilicen algunas
                    fuentes alternativas de energía y/o sustentables a partir
                    del análisis de su potencial y evalúa su eficiencia.
                </li>
                <li>
                    Implementará sistemas híbridos aprovechando la energía
                    proveniente de los diferentes sistemas para la obtención de
                    energía.
                </li>
                <li>
                    Será capaz de realizar un proyecto de control industrial en
                    un entorno de Energías Renovables utilizando el
                    microcontrolador más adecuado según las especificaciones,
                    tanto a nivel hardware como software.
                </li>
            </ul>

            <h3 class="text-xl text-blue-950">Campo laboral</h3>
            <p class="text-justify text-lg">
                El sector energético renovable ha tenido uno de los
                crecimientos más grandes en el campo laboral actual,
                empleando a ingenieros en energías renovables en diferentes
                rubros, incluyendo el sector industrial, público y privado,
                gubernamental y las firmas consultoras. De acuerdo a la
                Agencia Internacional de Energía Renovable (IRENA, por sus
                siglas en inglés), para el 2018-2019, existían poco más de
                11 millones de empleos formales en energías renovables a
                nivel mundial, con una tasa de crecimiento de 5.3 % anual,
                además, cerca del 32 % de estos empleos son ocupados por
                mujeres. Entre los principales sectores empleadores
                destacan:
            </p>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>La hidroeléctrica.</li>
                <li>Los biocombustibles líquidos.</li>
                <li>La energía solar.</li>
                <li>La energía eólica.</li>
            </ul>
            <p class="text-justify text-lg">
                Siendo estos últimos dos, los que han mostrado un
                crecimiento acelerado y constante.
            </p>
            <p class="text-justify text-lg">
                Para 2030, los mapas de ruta de IRENA, para Norte América,
                proyectan que el sector energético renovable, combinado con
                el crecimiento de empleos en eficiencia energética,
                sobrepasen la oferta de empleos de los combustibles fósiles.
                Por lo que nuestros egresados disfrutaran de un campo
                laboral en expansión con múltiples oportunidades.
            </p>
            <p class="text-justify text-lg">
                Nuestro programa de Ingeniería provee una formación
                multidisciplinaria en ciencias, ingeniería y
                sustentabilidad, lo cual permite a nuestros estudiantes
                incursionar en las diferentes disciplinas antes mencionadas,
                además de encontrarse en una ubicación estratégica en el
                estado de Tabasco, con recursos de alto potencial para la
                generación de energía renovable.
            </p>
            <p class="text-justify text-lg">
                Algunos ejemplos de los sectores públicos interesados en
                emplear a Ingenieros en Energías Renovables incluyen: la
                Comisión Federal de Electricidad, La Secretaria para el
                Desarrollo Energético, la Secretaría de Agricultura y
                Desarrollo Rural, Petróleos Mexicanos y la Comisión Nacional
                del Agua, entre otras. Para el sector privado, un Ingeniero
                en Energías Renovables puede laborar en centrales eólicas,
                centrales hidroeléctricas, centrales fotovoltaicas,
                centrales térmicas y centrales híbridas que combinan varios
                sistemas energéticos renovables y no renovables en empresas
                nacionales e internacionales.
            </p>
            <h3 class="text-xl text-blue-950">Habilidades</h3>
            <ul class="list-disc pl-8 text-justify text-lg">
                <li>
                    Dirigir, diseñar, gestionar, evaluar y desarrollar proyectos
                    de energías renovables vinculados al sector público y
                    privado.
                </li>
                <li>
                    Diseñar, optimizar y desarrollar tecnología sustentable
                    innovadora.
                </li>
                <li>
                    Solucionar problemas energéticos a través del uso de fuentes
                    de energía renovable.
                </li>
                <li>
                    Desarrollar nuevos productos y/o servicios energéticos de
                    valor agregado.
                </li>
            </ul>

            <Acordion title="Retícula" ariaTitle="retícula" class="mt-10">
                <div class="flex w-full items-center justify-between">
                    <h4>Programa IENR-2010-217</h4>
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
                    <div class="flex w-full items-center justify-between">
                        <h4>Dibujo Industrial</h4>
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
                        <h4>Bioquímica</h4>
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
                        <h4>Estadística y Diseño de Experimentos</h4>
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
                        <h4>Tecnología e Ingenieráa de Materiales</h4>
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
                        <h4>Electromagnetismo</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Estática y Dinámica</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Metrología, Mecánica y Eléctrica</h4>
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
                        <h4>Taller de Sistemas de Información Geográfica</h4>
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
                        <h4>Circuitos Electricos I</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Comportamiento Humano en las Organizaciones</h4>
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
                        <h4>Resistencia de Materiales</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Optica y Semiconductores</h4>
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
                </div>
            </Acordion>
            <Acordion title="Quinto Semestre">
                <div class="flex flex-col gap-4">
                    <div class="flex w-full items-center justify-between">
                        <h4>Biocombustibles</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Circuitos Eléctricos II</h4>
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
                        <h4>Marco Jurídico en Gestión Energética</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Mecánica de Fluidos</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Transferencia de Calor</h4>
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
                        <h4>Energía Eólica</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Instalaciones Eléctricas e Iluminación</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Máquinas Eléctricas</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Máquinas Hidraulícas</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Refrigeración y Aire Acondicionado</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Taller de Investigación I</h4>
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
                        <h4>Simulación de Sistemas de Energías Renovables</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Sistemas Solares Fotovoltaícos y Térmicos</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Sistemas Térmicos</h4>
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
                    <div class="flex w-full items-center justify-between">
                        <h4>Instrumentación</h4>
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
                        <h4>Admnistración y Técnicas de Conservación</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Auditoría Energética</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>
                            Formulación y Evaluación de Proyectos de Energías
                            Renovables
                        </h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Gestión de Empresas de Energías Renovables</h4>
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
                        <h4>Ahorro y Uso Eficiente de la Energía | SCF-2303</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>
                            Dirección y Gestión de Proyectos Energéticos |
                            SCF-2302
                        </h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Electroquímica | SCF-2301</h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>
                            Microcontrol de Sistemas de Energía Renovable |
                            SFC-2305
                        </h4>
                        <a
                            href="/storage/files/IADM-2010-213.pdf"
                            class="cursor-pointer rounded-lg bg-blue-950 px-4 py-1 text-sm text-neutral-50"
                            target="blank"
                            >Descargar</a
                        >
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <h4>Sistemas Híbridos | SCF-2304</h4>
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
