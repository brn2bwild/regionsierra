<script setup>
import { Link } from "@inertiajs/vue3";
import MenuSidebarLink from "@/Components/MenuSidebarLink.vue";
</script>
<template>
    <div class="sticky top-28 m-8 flex w-[250px] flex-col bg-blue-950 p-4">
        <slot />
    </div>
</template>
