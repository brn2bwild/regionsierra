<script setup>
import DropdownGroup from "@/Components/DropdownGroup.vue";
import DropdownItem from "@/Components/DropdownItem.vue";
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <nav
        class="sticky z-10 flex w-full items-center justify-center bg-blue-950 font-medium text-white"
    >
        <Link
            href="/"
            class="px-4 py-2 font-medium hover:bg-white hover:text-blue-950"
            >Inicio</Link
        >
        <DropdownGroup>
            <template #trigger>
                <span class="inline-flex rounded-md">
                    <button
                        type="button"
                        class="inline-flex items-center bg-blue-950 px-4 py-2 font-medium text-white transition duration-150 ease-in-out hover:bg-white hover:text-blue-950 focus:outline-none"
                    >
                        Conócenos
                        <svg
                            class="-me-0.5 ms-2 h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                </span>
            </template>
            <template #content>
                <DropdownItem :href="'/historia'">Historia</DropdownItem>
                <DropdownItem :href="'/filosofia'">Filosofía</DropdownItem>
                <DropdownItem :href="'/directorio'">Directorio</DropdownItem>
                <DropdownItem :href="'/organigrama'">Organigrama</DropdownItem>
                <DropdownItem :href="'/programa-institucional'"
                    >Programa Institucional</DropdownItem
                >
                <DropdownItem :href="'/decreto-creacion'"
                    >Decreto de Creación</DropdownItem
                >
                <DropdownItem :href="'/manual-organizacion'"
                    >Manual de Organización</DropdownItem
                >
            </template>
        </DropdownGroup>
        <DropdownGroup>
            <template #trigger>
                <span class="inline-flex rounded-md">
                    <button
                        type="button"
                        class="inline-flex items-center bg-blue-950 px-4 py-2 font-medium text-white transition duration-150 ease-in-out hover:bg-white hover:text-blue-950 focus:outline-none"
                    >
                        Oferta Educativa
                        <svg
                            class="-me-0.5 ms-2 h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                </span>
            </template>
            <template #content>
                <DropdownItem :href="'/ingenieria-agronomia'">
                    Ingeniería Agronomía
                </DropdownItem>
                <DropdownItem :href="'/ingenieria-bioquimica'">
                    Ingeniería Bioquímica
                </DropdownItem>
                <DropdownItem :href="'/ingenieria-industrial'">
                    Ingeniería Industrial
                </DropdownItem>
                <DropdownItem :href="'/ingenieria-informatica'">
                    Ingeniería Informática
                </DropdownItem>
                <DropdownItem :href="'/ingenieria-administracion'">
                    Ingeniería Administración
                </DropdownItem>
                <DropdownItem :href="'/ingenieria-electromecanica'">
                    Ingeniería Electromecánica
                </DropdownItem>
                <DropdownItem :href="'/ingenieria-energias-renovables'">
                    Ingeniería Energías Renovables
                </DropdownItem>
            </template>
        </DropdownGroup>
        <DropdownGroup>
            <template #trigger>
                <span class="inline-flex rounded-md">
                    <button
                        type="button"
                        class="inline-flex items-center bg-blue-950 px-4 py-2 font-medium text-white transition duration-150 ease-in-out hover:bg-white hover:text-blue-950 focus:outline-none"
                    >
                        Aspirantes
                        <svg
                            class="-me-0.5 ms-2 h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                </span>
            </template>
            <template #content>
                <DropdownItem :href="'/admision'"> Admisión </DropdownItem>
            </template>
        </DropdownGroup>
        <Link
            href=""
            class="px-4 py-2 font-medium hover:bg-white hover:text-blue-950"
            >Certificaciones</Link
        >
        <DropdownGroup>
            <template #trigger>
                <span class="inline-flex rounded-md">
                    <button
                        type="button"
                        class="inline-flex items-center bg-blue-950 px-4 py-2 font-medium text-white transition duration-150 ease-in-out hover:bg-white hover:text-blue-950 focus:outline-none"
                    >
                        Difusión
                        <svg
                            class="-me-0.5 ms-2 h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                </span>
            </template>
            <template #content>
                <DropdownItem :href="'/noticias'"> Noticias </DropdownItem>
                <DropdownItem :href="'/convocatorias'">
                    Convocatorias
                </DropdownItem>
                <DropdownItem :href="'/galeria'"> Galería </DropdownItem>
                <DropdownItem :href="'/calendario-escolar'">
                    Calendario Escolar
                </DropdownItem>
            </template>
        </DropdownGroup>
        <DropdownGroup>
            <template #trigger>
                <span class="inline-flex rounded-md">
                    <button
                        type="button"
                        class="inline-flex items-center bg-blue-950 px-4 py-2 font-medium text-white transition duration-150 ease-in-out hover:bg-white hover:text-blue-950 focus:outline-none"
                    >
                        Departamentos
                        <svg
                            class="-me-0.5 ms-2 h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                </span>
            </template>
            <template #content>
                <DropdownItem :href="'/servicios-escolares'">
                    Servicios escolares
                </DropdownItem>
                <DropdownItem :href="'/vinculacion'">
                    Vinculación
                </DropdownItem>
                <DropdownItem :href="'/recursos-financieros'">
                    Recursos financieros
                </DropdownItem>
                <DropdownItem :href="'/sistema-institucional-archivos'">
                    Sistema Institucional Archivos</DropdownItem
                >
            </template>
        </DropdownGroup>
    </nav>
</template>
