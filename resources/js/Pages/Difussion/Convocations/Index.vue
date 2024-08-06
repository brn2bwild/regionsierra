<script setup>
import MainLayout from "@/Layouts/Main/MainLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import DifussionSidebar from "@/Pages/Difussion/Partials/DifussionSidebar.vue";

defineOptions({
    layout: MainLayout,
});

const props = defineProps({
    convocations: {
        type: Object,
        required: true,
    },
});
</script>
<template>
    <Head title="Convocatorias" />
    <div class="flex items-start justify-center gap-8">
        <DifussionSidebar />
        <div class="flex w-2/3 flex-col gap-8 p-10">
            <div
                v-for="convocation in props.convocations.data"
                :key="convocation.index"
                class="border-1 flex h-20 w-full items-center justify-between rounded-xl border-neutral-600 bg-neutral-200 p-6"
            >
                <h1 class="line-clamp-2 w-2/3 text-xl">
                    {{ convocation.title }}
                </h1>
                <Link
                    :href="
                        route('difussion.convocations.show', convocation.slug)
                    "
                    as="button"
                    class="rounded-xl bg-blue-700 px-3 py-2 font-medium text-neutral-50 hover:bg-blue-800"
                    >Ver más</Link
                >
            </div>
        </div>
    </div>
</template>
