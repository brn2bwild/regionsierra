<script setup>
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <nav class="flex w-full items-center justify-end bg-white px-10">
        <div class="relative ms-3">
            <Dropdown align="left" width="48">
                <template #trigger>
                    <span class="inline-flex rounded-md">
                        <button
                            type="button"
                            class="bg-white-950 inline-flex items-center px-4 py-2 font-medium text-neutral-950 transition duration-150 ease-in-out hover:bg-neutral-300 hover:text-neutral-800 focus:outline-none"
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
                    <DropdownLink :href="''"> SIE Estudiantes </DropdownLink>
                    <DropdownLink :href="''">
                        Reglamento Lab. Cómputo
                    </DropdownLink>
                    <DropdownLink :href="''">
                        Reglamento estudiantil
                    </DropdownLink>
                    <DropdownLink :href="''">
                        Quejas y sugerencias
                    </DropdownLink>
                </template>
            </Dropdown>
        </div>
        <div class="relative ms-3">
            <Dropdown align="left" width="48">
                <template #trigger>
                    <span class="inline-flex rounded-md">
                        <button
                            type="button"
                            class="bg-white-950 inline-flex items-center px-4 py-2 font-medium text-neutral-950 transition duration-150 ease-in-out hover:bg-neutral-300 hover:text-neutral-800 focus:outline-none"
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
                    <DropdownLink :href="''"> SIE Docentes </DropdownLink>
                </template>
            </Dropdown>
        </div>
        <div class="relative ms-3">
            <Dropdown align="left" width="48">
                <template #trigger>
                    <span class="inline-flex rounded-md">
                        <button
                            type="button"
                            class="bg-white-950 inline-flex items-center px-4 py-2 font-medium text-neutral-950 transition duration-150 ease-in-out hover:bg-neutral-300 hover:text-neutral-800 focus:outline-none"
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
                    <DropdownLink :href="''">
                        Encuesta de egresados
                    </DropdownLink>
                </template>
            </Dropdown>
        </div>
        <div class="relative ms-3">
            <Dropdown align="left" width="48">
                <template #trigger>
                    <span class="inline-flex rounded-md">
                        <button
                            type="button"
                            class="bg-white-950 inline-flex items-center px-4 py-2 font-medium text-neutral-950 transition duration-150 ease-in-out hover:bg-neutral-300 hover:text-neutral-800 focus:outline-none"
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
                    <DropdownLink :href="''"> Transparencia </DropdownLink>
                    <DropdownLink :href="''"> Ayudas y subsidios </DropdownLink
                    ><DropdownLink :href="''">
                        Avances financieros </DropdownLink
                    ><DropdownLink :href="''"> Cuenta pública </DropdownLink
                    ><DropdownLink :href="''">
                        Estudios financieros </DropdownLink
                    ><DropdownLink :href="''"> Patrimonio </DropdownLink>
                </template>
            </Dropdown>
        </div>
    </nav>
</template>
