<script setup>
import MainLayout from "@/Layouts/Main/MainLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
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
        <div class="grid w-2/3 grid-cols-1 gap-8 p-10 md:grid-cols-3">
            <div
                v-for="update in props.updates.data"
                :key="update.index"
                class="relative h-96 w-full overflow-hidden rounded-xl"
            >
                <img
                    class="absolute h-full w-full object-cover object-top"
                    :src="
                        update.image === ''
                            ? '/storage/images/news_default.jpg'
                            : update.image
                    "
                    alt="image"
                />
                <div
                    class="absolute bottom-0 left-0 flex h-32 w-full flex-col justify-between bg-blue-700 bg-opacity-90 p-3"
                >
                    <h1 class="line-clamp-3 text-neutral-50">
                        {{ update.name }}
                    </h1>
                    <Link
                        :href="route('difussion.news.show', update.slug)"
                        as="button"
                        class="rounded-lg bg-neutral-50 p-1 font-medium text-neutral-950 hover:bg-neutral-300"
                        >Leer más</Link
                    >
                </div>
            </div>
        </div>
    </div>
</template>
