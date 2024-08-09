<script setup>
import MainLayout from "@/Layouts/Main/MainLayout.vue";
import { Head } from "@inertiajs/vue3";
import AplicantsSidebar from "@/Pages/Aplicants/Partials/AplicantsSidebar.vue";

defineOptions({
    layout: MainLayout,
});
</script>
<template>
    <Head title="Admisión" />
    <div class="flex items-start justify-center gap-8">
        <AplicantsSidebar />
        <div class="flex w-2/3 flex-col gap-4 p-10">
            <h1 class="w-full text-center text-3xl">
                Convocatorio de Nuevo Ingreso
            </h1>
            <embed
                src="/storage/files/nuevoingreso/ConvocatoriaAdmision012024.pdf"
                class="h-screen w-full"
            />
        </div>
    </div>
</template>
