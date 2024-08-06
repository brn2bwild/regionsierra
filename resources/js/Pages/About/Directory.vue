<script setup>
import MainLayout from "@/Layouts/Main/MainLayout.vue";
import { Head } from "@inertiajs/vue3";
import AboutSidebar from "@/Pages/About/Partials/AboutSidebar.vue";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { faLocationPin, faPlus } from "@fortawesome/free-solid-svg-icons";
import { ref } from "vue";
import Acordion from "@/Components/Acordion.vue";

defineOptions({
    layout: MainLayout,
});

const data = [
    {
        name: "dirección",
        data: {
            name: "Martín Ernesto Bouchot Mollinedo",
            position: "dirección",
            conmutator: "932 324 0650",
            extention: "101",
            email: "dir_dregionsierra@tecnm.mx",
        },
    },
    {
        name: "subdireccion de servicios administrativos",
        data: {
            name: "José David Rodríguez Deveze",
            position: "subdireccion de servicios administrativos",
            conmutator: "9323240650",
            extention: "106",
            email: "sub_admon@regionsierra.tecnm.mx",
        },
    },
    {
        name: "dirección de planeación y vinculación",
        data: {
            name: "Alfredo Ramón Álvarez Pérez",
            position: "dirección de planeación y vinculación",
            conmutator: "9323240650",
            extention: "104",
            email: "planeacion_vinculacion@regionsierra.tecnm.mx",
        },
    },
    {
        name: "subdirección de planeación",
        data: {
            name: "Juán Carlos Gutierrez Velueta",
            position: "subdirección de planeación",
            conmutator: "9323240650",
            extention: "107",
            email: "planeacion@regionsierra.tecnm.mx",
        },
    },
    {
        name: "subdirección de vinculación",
        data: {
            name: "Isabel González Calzada",
            position: "subdirección de vinculación",
            conmutator: "9323240650",
            extention: "127",
            email: "vinculacion@regionsierra.tecnm.mx",
        },
    },
    {
        name: "depto. de planeación y programación",
        data: {
            name: "Evaristo Cornelio López",
            position: "depto. de planeación y programación",
            conmutator: "9323240650",
            extention: "134",
            email: "",
        },
    },
    {
        name: "depto. de estadística y evaluación",
        data: {
            name: "Julio Alberto García Aguilar",
            position: "depto. de estadística y evaluación",
            conmutator: "9323240650",
            extention: "134",
            email: "estadistica@regionsierra.tecnm.mx",
        },
    },
    {
        name: "depto. de control escolar",
        data: {
            name: "Mortimer Castellanos Cruz",
            position: "depto. de control escolar",
            conmutator: "9323240650",
            extention: "108",
            email: "escolares@regionsierra.tecnm.mx",
        },
    },
    {
        name: "depto. de informática administrativa",
        data: {
            name: "Humberto Javier Guirao Martínez",
            position: "depto. de informática administrativa",
            conmutator: "9323240650",
            extention: "109",
            email: "informatica@regionsierra.tecnm.mx",
        },
    },
    {
        name: "depto. de vinculación",
        data: {
            name: "Victor Manuel Álvarez Alfonso",
            position: "depto. de vinculación",
            conmutator: "9323240650",
            extention: "114",
            email: "dvinculacion@regionsierra.tecnm.mx",
        },
    },
    {
        name: "depto. de difusión y concertación",
        data: {
            name: "Migda Leydi Sánchez Cálix",
            position: "depto. de difusión y concertación",
            conmutator: "9323240650",
            extention: "135",
            email: "dvinculacion@regionsierra.tecnm.mx",
        },
    },
    {
        name: "depto. de residencias profesionales y servicio social",
        data: {
            name: "Rosaura Hernández Pérez",
            position: "depto. de residencias profesionales y servicio social",
            conmutator: "9323240650",
            extention: "123",
            email: "residencia_servicio@regionsierra.tecnm.mx",
        },
    },
    {
        name: "dirección académica",
        data: {
            name: "Juan Carlos Rodríguez Cabriales",
            position: "dirección académica",
            conmutator: "9323240650",
            extention: "110",
            email: "dir_academica@regionsierra.tecnm.mx",
        },
    },
    {
        name: "subdirección académica",
        data: {
            name: "Rocio Hernández Ovando",
            position: "subdirección académica",
            conmutator: "9323240650",
            extention: "116",
            email: "subdir_academica@regionsierra.tecnm.mx",
        },
    },
    {
        name: "subdirección de postgrado e investigación",
        data: {
            name: "Pedro Guillén de la Cruz",
            position: "subdirección de postgrado e investigación",
            conmutator: "9323240650",
            extention: "112",
            email: "subdir_postgrado@regionsierra.tecnm.mx",
        },
    },
    {
        name: "depto. de postgrado e investigación",
        data: {
            name: "Lidio Rodriguez Mendez",
            position: "depto. de postgrado e investigación",
            conmutator: "9323240650",
            extention: "112",
            email: "dpostgrado@regionsierra.tecnm.mx",
        },
    },
    {
        name: "depto. de desarrollo académico",
        data: {
            name: "Mariana Martinez Moreno",
            position: "depto. de desarrollo académico",
            conmutator: "9323240650",
            extention: "170",
            email: "desarrollo_academico@regionsierra.tecnm.mx",
        },
    },
    {
        name: "depto. de ciencias básicas",
        data: {
            name: "Miguel Landero Ramirez",
            position: "depto. de ciencias básicas",
            conmutator: "9323240650",
            extention: "168",
            email: "ciencias_basicas@regionsierra.tecnm.mx",
        },
    },
    {
        name: "división de ing. administración",
        data: {
            name: "Pedro Perez Salvador",
            position: "división de ing. administración",
            conmutator: "9323240650",
            extention: "121",
            email: "academia_administracion@regionsierra.tecnm.mx",
        },
    },
    {
        name: "división de ing. electromecánica",
        data: {
            name: "Eduardo de la Fuente Narvaez",
            position: "división de ing. electromecánica",
            conmutator: "9323240650",
            extention: "117",
            email: "academia_electromecanica@regionsierra.tecnm.mx",
        },
    },
    {
        name: "división de ing. industrial",
        data: {
            name: "Veronica Avendaño Gomez",
            position: "división de ing. industrial",
            conmutator: "9323240650",
            extention: "118",
            email: "academia_industrial@regionsierra.tecnm.mx",
        },
    },
    {
        name: "división de ing. bioquímica",
        data: {
            name: "Jesus Armando Romero Gonzalez",
            position: "división de ing. bioquímica",
            conmutator: "9323240650",
            extention: "131",
            email: "academia_bioquimica@regionsierra.tecnm.mx",
        },
    },
    {
        name: "división de ing. informática",
        data: {
            name: "Angelica Avalos Cano",
            position: "Dirección",
            conmutator: "9323240650",
            extention: "115",
            email: "academia_informatica@regionsierra.tecnm.mx",
        },
    },
    {
        name: "Eleodoro Hernandez Meneses",
        data: {
            name: "Martín Ernesto Bouchot Mollinedo",
            position: "Dirección",
            conmutator: "9323240650",
            extention: "126",
            email: "academiaagronomia@regionsierra.tecnm.mx",
        },
    },
    {
        name: "división de ing. energías renovables",
        data: {
            name: "Mauro Alejandro Gonzalez Cornelio",
            position: "división de ing. energías renovables",
            conmutator: "9323240650",
            extention: "153",
            email: "",
        },
    },
    {
        name: "depto. de personal",
        data: {
            name: "Isabel Perez Mendez",
            position: "depto. de personal",
            conmutator: "9323240650",
            extention: "132",
            email: "dpersonal@regionsierra.tecnm.mx",
        },
    },
    {
        name: "depto. de recursos materiales y servicios",
        data: {
            name: "Jorge Luis Pedrero Cordova",
            position: "depto. de recursos materiales y servicios",
            conmutator: "9323240650",
            extention: "125",
            email: "rmateriales@regionsierra.tecnm.mx",
        },
    },
    {
        name: "depto. de servicios generales",
        data: {
            name: "Roberto Perez Cornelio",
            position: "depto. de servicios generales",
            conmutator: "9323240650",
            extention: "122",
            email: "",
        },
    },
    {
        name: "depto. de recursos financieros",
        data: {
            name: "Alma Rosa Flores Mendoza",
            position: "depto. de recursos financieros",
            conmutator: "9323240650",
            extention: "103",
            email: "rfinancieros@regionsierra.tecnm.mx | contabilidad@regionsierra.tecnm.mx",
        },
    },
    {
        name: "caja",
        data: {
            name: "Jaiker Alexa Ocaña Osorio",
            position: "caja",
            conmutator: "9323240650",
            extention: "167",
            email: "",
        },
    },
];
</script>
<template>
    <Head title="Directorio" />
    <div class="flex items-start justify-center gap-8">
        <AboutSidebar />
        <div class="flex w-2/3 flex-col gap-4 p-10">
            <h1 class="w-full text-center text-3xl font-bold">Directorio</h1>
            <section class="flex flex-col gap-4">
                <Acordion
                    v-for="item in data"
                    :key="item.index"
                    :title="item.name"
                    :ariaTitle="item.name"
                >
                    <div class="w-full">
                        <h4 class="text-xl font-bold">{{ item.data.name }}</h4>
                        <h5 class="text-lg capitalize text-neutral-700">
                            {{ item.data.position }}
                        </h5>
                        <p class="mt-2 text-lg">
                            <strong>Conmutador: </strong
                            >{{ item.data.conmutator }}
                            <strong class="ml-2">Extensión: </strong>
                            {{ item.data.extention }}
                        </p>
                        <span class="text-lg">{{ item.data.email }}</span>
                    </div>
                </Acordion>
            </section>
        </div>
    </div>
</template>
