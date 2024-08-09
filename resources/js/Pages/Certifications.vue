<script setup>
import MainLayout from "@/Layouts/Main/MainLayout.vue";
import { Head } from "@inertiajs/vue3";

defineOptions({
    layout: MainLayout,
});

const data = [
    {
        name: "Sistema de Gestión de Calidad (SGC)",
        description: "Norma ISO 9001:2015",
    },
    {
        name: "Sistema de Gestión de Igualdad de Género y No Discriminación (SGIG)",
        description: "Norma Mexicana NMX-R-025-SCFI-2015",
    },
];
</script>
<template>
    <Head title="Certificaciones" />
    <div class="flex w-full flex-col items-center justify-center gap-10 p-10">
        <h1 class="text-3xl font-bold">Certificaciones</h1>
        <div class="flex justify-center gap-6">
            <div
                v-for="certification in data"
                :key="certification.index"
                class="flex h-40 w-1/3 flex-col items-center justify-between overflow-hidden rounded-xl bg-neutral-200"
            >
                <h2 class="w-full text-center bg-blue-950 text-neutral-50 text-lg p-4">{{ certification.name }}</h2>
                <div class="flex items-center h-full">
                    <h3 class="w-full text-center">{{ certification.description }}</h3>
                </div>
            </div>
        </div>
    </div>
</template>
