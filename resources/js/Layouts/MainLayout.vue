<script setup>
import InternNavbar from "@/Partials/InternNavbar.vue";
import GovNavbar from "@/Partials/GovNavbar.vue";
import MainFooter from "@/Partials/MainFooter.vue";
import MainNavbar from "@/Partials/MainNavbar.vue";
import GovFooter from "@/Partials/GovFooter.vue";
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
