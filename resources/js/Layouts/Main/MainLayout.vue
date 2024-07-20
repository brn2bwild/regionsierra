<script setup>
import InternNavbar from "@/Layouts/Main/Partials/InternNavbar.vue";
import GovNavbar from "@/Layouts/Main/Partials/GovNavbar.vue";
import MainFooter from "@/Layouts/Main/Partials/MainFooter.vue";
import MainNavbar from "@/Layouts/Main/Partials/MainNavbar.vue";
import GovFooter from "@/Layouts/Main/Partials/GovFooter.vue";
</script>
<template>
    <GovNavbar />
    <InternNavbar />
    <MainNavbar />
    <div class="w-full bg-neutral-50">
        <slot />
    </div>
    <MainFooter />
    <GovFooter />
</template>
