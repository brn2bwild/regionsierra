<script setup>
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import DropdownGroup from "@/Components/DropdownGroup.vue";
import DropdownItem from "@/Components/DropdownItem.vue";
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <nav class="z-50 flex w-full items-center justify-end bg-neutral-100 px-10">
        <DropdownGroup>
            <template #trigger>
                <span class="inline-flex rounded-md">
                    <button
                        type="button"
                        class="inline-flex items-center px-4 py-2 font-medium text-neutral-950 transition duration-150 ease-in-out hover:bg-neutral-200 focus:outline-none"
                    >
                        Estudiantes
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
                <div class="bg-neutral-100">
                    <DropdownItem
                        class="text-neutral-950 hover:bg-neutral-200"
                        :href="'/historia'"
                    >
                        SIE Estudiantes
                    </DropdownItem>
                    <DropdownItem
                        class="text-neutral-950 hover:bg-neutral-200"
                        :href="'/filosofia'"
                    >
                        Reglamento Laboratorio de Cómputo
                    </DropdownItem>
                    <DropdownItem
                        class="text-neutral-950 hover:bg-neutral-200"
                        :href="'/directorio'"
                    >
                        Reglamento Estudiantil
                    </DropdownItem>
                    <DropdownItem
                        class="text-neutral-950 hover:bg-neutral-200"
                        :href="'/organigrama'"
                    >
                        Quejas y Sugerencias
                    </DropdownItem>
                </div>
            </template>
        </DropdownGroup>
        <DropdownGroup>
            <template #trigger>
                <span class="inline-flex rounded-md">
                    <button
                        type="button"
                        class="inline-flex items-center px-4 py-2 font-medium text-neutral-950 transition duration-150 ease-in-out hover:bg-neutral-200 focus:outline-none"
                    >
                        Académicos
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
                <div class="bg-neutral-100">
                    <DropdownItem
                        class="text-neutral-950 hover:bg-neutral-200"
                        :href="'/historia'"
                    >
                        SIE Docentes
                    </DropdownItem>
                </div>
            </template>
        </DropdownGroup>
        <DropdownGroup>
            <template #trigger>
                <span class="inline-flex rounded-md">
                    <button
                        type="button"
                        class="inline-flex items-center px-4 py-2 font-medium text-neutral-950 transition duration-150 ease-in-out hover:bg-neutral-200 focus:outline-none"
                    >
                        Egresados
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
                <div class="bg-neutral-100">
                    <DropdownItem
                        class="text-neutral-950 hover:bg-neutral-200"
                        :href="'/historia'"
                    >
                        Encuesta de Egresados
                    </DropdownItem>
                    <DropdownItem
                        class="text-neutral-950 hover:bg-neutral-200"
                        :href="'/historia'"
                    >
                        Bolsa de Trabajo
                    </DropdownItem>
                </div>
            </template>
        </DropdownGroup>
        <DropdownGroup>
            <template #trigger>
                <span class="inline-flex rounded-md">
                    <button
                        type="button"
                        class="inline-flex items-center px-4 py-2 font-medium text-neutral-950 transition duration-150 ease-in-out hover:bg-neutral-200 focus:outline-none"
                    >
                        Transparencia TecNM
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
                <div class="bg-neutral-100">
                    <DropdownItem
                        class="text-neutral-950 hover:bg-neutral-200"
                        :href="'/historia'"
                    >
                        Transparencia
                    </DropdownItem>
                    <DropdownItem
                        class="text-neutral-950 hover:bg-neutral-200"
                        :href="'/historia'"
                    >
                        Ayudas y Subsidios
                    </DropdownItem>
                    <DropdownItem
                        class="text-neutral-950 hover:bg-neutral-200"
                        :href="'/historia'"
                    >
                        Avances Financieros </DropdownItem
                    ><DropdownItem
                        class="text-neutral-950 hover:bg-neutral-200"
                        :href="'/historia'"
                    >
                        Cuenta Pública
                    </DropdownItem>
                    <DropdownItem
                        class="text-neutral-950 hover:bg-neutral-200"
                        :href="'/historia'"
                    >
                        Estidos Financieros
                    </DropdownItem>
                    <DropdownItem
                        class="text-neutral-950 hover:bg-neutral-200"
                        :href="'/historia'"
                    >
                        Patrimonio
                    </DropdownItem>
                </div>
            </template>
        </DropdownGroup>
    </nav>
</template>
