<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    url: {
        type: String,
        required: true,
    },
    text: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});
</script>
<template>
    <Link
        :href="props.url"
        class="px-4 py-2 hover:bg-neutral-50 hover:text-blue-950"
        :class="[active ? 'bg-neutral-50 text-blue-950' : 'text-neutral-50']"
    >
        {{ props.text }}
    </Link>
</template>
