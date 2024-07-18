<script setup>
import Dropdown from "@/Components/Dropdown.vue";
import DropdownGroup from "@/Components/DropdownGroup.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
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
                    Ing. Agronomía
                </DropdownItem>
                <DropdownItem :href="'/ingenieria-bioquimica'">
                    Ing. Bioquímica
                </DropdownItem>
                <DropdownItem :href="'/ingenieria-industrial'">
                    Ing. Industrial
                </DropdownItem>
                <DropdownItem :href="'/ingenieria-informatica'">
                    Ing. Informática
                </DropdownItem>
                <DropdownItem :href="'/ingenieria-administracion'">
                    Ing. Administración
                </DropdownItem>
                <DropdownItem :href="'/ingenieria-electromecanica'">
                    Ing. Electromecánica
                </DropdownItem>
                <DropdownItem :href="'/ingenieria-energias-renovables'">
                    Ing. Energías Renovables
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
                <DropdownItem :href="''"> Admisión </DropdownItem>
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
                <DropdownItem :href="''"> Avisos </DropdownItem>
                <DropdownItem :href="''"> Convocatorias </DropdownItem>
                <DropdownItem :href="''"> Galería </DropdownItem>
                <DropdownItem :href="''"> Calendario escolar </DropdownItem>
                <DropdownItem :href="''"> Bolsa de trabajo </DropdownItem>
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
                <DropdownItem :href="''"> Servicios escolares </DropdownItem>
                <DropdownItem :href="''"> Vinculación </DropdownItem>
                <DropdownItem :href="''"> Recursos financieros </DropdownItem>
                <DropdownItem :href="''"> Sis. Inst. Archivos</DropdownItem>
            </template>
        </DropdownGroup>
    </nav>
</template>
