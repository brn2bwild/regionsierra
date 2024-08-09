<script setup>
import MainLayout from "@/Layouts/Main/MainLayout.vue";
import { Head } from "@inertiajs/vue3";
import DifussionSidebar from "@/Pages/Difussion/Partials/DifussionSidebar.vue";

defineOptions({
    layout: MainLayout,
});
</script>
<template>
    <Head title="Calendario Escolar" />
    <div class="flex items-start justify-center gap-8">
        <DifussionSidebar />
        <div class="flex w-2/3 flex-col gap-4 p-10">
            <h1 class="w-full text-center text-3xl">
                Calendario Escolar
            </h1>
            <embed
                src="/storage/files/calendario/CalendarioEscolar2023-2024.pdf"
                class="h-screen w-full"
            />
        </div>
    </div>
</template>