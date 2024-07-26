<script setup>
import MainLayout from "@/Layouts/Main/MainLayout.vue";
import { Head } from "@inertiajs/vue3";
import DifussionSidebar from "@/Pages/Difussion/Partials/DifussionSidebar.vue";

defineOptions({
    layout: MainLayout,
});

const props = defineProps({
    updates: {
        type: Object,
        required: true,
    },
});
</script>
<template>
    <Head title="Noticias" />
    <div class="flex items-start justify-center gap-8">
        <DifussionSidebar />
        <div class="grid w-2/3 grid-cols-1 p-10 md:grid-cols-3 gap-8">
            <div
                v-for="update in props.updates"
                :key="update.index"
                class="border-1 h-80 w-full rounded-xl border-neutral-600 bg-red-400"
            ></div>
        </div>
    </div>
</template>
