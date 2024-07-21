<script setup>
import InternNavbar from "@/Layouts/Main/Partials/InternNavbar.vue";
import GovNavbar from "@/Layouts/Main/Partials/GovNavbar.vue";
import MainFooter from "@/Layouts/Main/Partials/MainFooter.vue";
import MainNavbar from "@/Layouts/Main/Partials/MainNavbar.vue";
import GovFooter from "@/Layouts/Main/Partials/GovFooter.vue";
</script>
<template>
    <GovNavbar />
    <div class="flex h-28 w-full items-center justify-between bg-white">
        <div class="flex h-full items-center justify-between gap-1">
            <img class="w-56" src="/storage/logos/gobierno_mexico.png" alt="gob-mexico" />
            <img class="w-56" src="/storage/logos/educacion.png" alt="educacion-mexico" />
            <img class="h-24" src="/storage/logos/tecnm.jpg" alt="tecnm" />
            <img class="h-24 ml-2" src="/storage/logos/logo_itss_azul.png" alt="region-sierra" />
        </div>
        <div></div>
    </div>
    <InternNavbar />
    <MainNavbar />
    <div class="w-full bg-neutral-50">
        <slot />
    </div>
    <MainFooter />
    <GovFooter />
</template>
