<script setup>
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <nav
        class="sticky z-10 flex w-full items-center justify-center bg-blue-950 font-medium text-white"
    >
        <Link
            href=""
            class="px-4 py-2 font-medium hover:bg-white hover:text-blue-950"
            >Inicio</Link
        >
        <div class="relative ms-3">
            <Dropdown align="left" width="48">
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
                    <DropdownLink :href="''"> Historia </DropdownLink>
                    <DropdownLink :href="''"> Filosofía </DropdownLink>
                    <DropdownLink :href="''"> Directorio </DropdownLink>
                    <DropdownLink :href="''"> Organigrama </DropdownLink>
                    <!-- <DropdownLink :href="''" method="post" as="button">
                        Log Out
                    </DropdownLink> -->
                </template>
            </Dropdown>
        </div>
        <div class="relative ms-3">
            <Dropdown align="left" width="48">
                <template #trigger>
                    <span class="inline-flex rounded-md">
                        <button
                            type="button"
                            class="inline-flex items-center bg-blue-950 px-4 py-2 font-medium text-white transition duration-150 ease-in-out hover:bg-white hover:text-blue-950 focus:outline-none"
                        >
                            Oferta educativa
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
                    <DropdownLink :href="''"> Ing. Agronimía </DropdownLink>
                    <DropdownLink :href="''"> Ing. Bioquímica </DropdownLink>
                    <DropdownLink :href="''"> Ing. Industrial </DropdownLink>
                    <DropdownLink :href="''"> Ing. Informática </DropdownLink>
                    <DropdownLink :href="''">
                        Ing. Administración
                    </DropdownLink>
                    <DropdownLink :href="''">
                        Ing. Electromecánica
                    </DropdownLink>
                    <DropdownLink :href="''">
                        Ing. Energías Renovables
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
                    <DropdownLink :href="''"> Admisión </DropdownLink>
                </template>
            </Dropdown>
        </div>
        <Link
            href=""
            class="px-4 py-2 font-medium hover:bg-white hover:text-blue-950"
            >Certificaciones</Link
        >
        <div class="relative ms-3">
            <Dropdown align="left" width="48">
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
                    <DropdownLink :href="''"> Avisos </DropdownLink>
                    <DropdownLink :href="''"> Convocatorias </DropdownLink>
                    <DropdownLink :href="''"> Galería </DropdownLink>
                    <DropdownLink :href="''"> Calendario escolar </DropdownLink>
                    <DropdownLink :href="''"> Bolsa de trabajo </DropdownLink>
                </template>
            </Dropdown>
        </div>
        <div class="relative ms-3">
            <Dropdown align="left" width="48">
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
                    <DropdownLink :href="''">
                        Servicios escolares
                    </DropdownLink>
                    <DropdownLink :href="''"> Vinculación </DropdownLink>
                    <DropdownLink :href="''">
                        Recursos financieros
                    </DropdownLink>
                    <DropdownLink :href="''"> Sis. Inst. Archivos</DropdownLink>
                </template>
            </Dropdown>
        </div>
    </nav>
</template>
