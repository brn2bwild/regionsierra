<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    href: { type: String, required: true },
});
</script>

<template>
    <Link
        :href="props.href"
        class="block w-full px-4 py-2 text-start text-sm leading-5 transition duration-150 ease-in-out focus:outline-none"
    >
        <slot />
    </Link>
</template>
