<script setup>
import MainLayout from "@/Layouts/Main/MainLayout.vue";
import { Head } from "@inertiajs/vue3";
import AboutSidebar from "@/Pages/About/Partials/AboutSidebar.vue";

defineOptions({
    layout: MainLayout,
});
</script>
<template>
    <Head title="Programa Institucional" />
    <div class="flex items-start justify-center gap-8">
        <AboutSidebar />
        <div class="w-2/3 flex flex-col gap-4 p-10">
            <h1 class="w-full text-center text-3xl font-bold">Programa Institucional</h1>
            <embed src="/storage/files/ProgramaInstitucional2019_2024.pdf" class="w-full h-screen" />
        </div>
    </div>
</template>
