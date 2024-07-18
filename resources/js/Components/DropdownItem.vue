<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    href: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Link
        :href="href"
        class="block w-full px-4 py-2 text-start text-sm leading-5 text-neutral-50 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-blue-950 focus:bg-gray-50 focus:text-blue-950 focus:outline-none"
    >
        <slot />
    </Link>
</template>
