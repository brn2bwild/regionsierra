<script setup>
import MainLayout from "@/Layouts/Main/MainLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import DifussionSidebar from "@/Pages/Difussion/Partials/DifussionSidebar.vue";

defineOptions({
    layout: MainLayout,
});

const props = defineProps({
    convocation: {
        type: Object,
        required: true,
    },
});
</script>
<template>
    <Head title="Convocatorias" />
    <div class="flex items-start justify-center gap-8">
        <DifussionSidebar />
        <div
            class="flex w-2/3 flex-col items-center justify-center gap-6 p-10"
        >
            <h1 class="w-full text-center text-xl">
                {{ props.convocation.data.title }}
            </h1>
            <embed :src="props.convocation.data.file" class="w-full h-screen" />
        </div>
    </div>
</template>