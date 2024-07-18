<script setup>
import { Link } from "@inertiajs/vue3";
import CareerSidebarLink from "@/Components/CareerSidebarLink.vue";
</script>
<template>
    <div class="sticky top-10 m-8 flex w-[250px] flex-col bg-blue-950 p-4">
        <CareerSidebarLink
            url="/ingenieria-agronomia"
            text="Ing. en Agronomía"
            :active="$page.url.includes('ingenieria-agronomia')"
        />
        <hr />
        <CareerSidebarLink
            url="/ingenieria-bioquimica"
            text="Ing. Bioquímica"
            :active="$page.url.includes('ingenieria-bioquimica')"
        />
        <hr />
        <CareerSidebarLink
            url="/ingenieria-industrial"
            text="Ing. Industrial"
            :active="$page.url.includes('ingenieria-industrial')"
        />
        <hr />
        <CareerSidebarLink
            url="/ingenieria-informatica"
            text="Ing. Informática"
            :active="$page.url.includes('ingenieria-informatica')"
        />
        <hr />
        <CareerSidebarLink
            url="/ingenieria-administracion"
            text="Ing. en Administración"
            :active="$page.url.includes('ingenieria-administracion')"
        />
        <hr />
        <CareerSidebarLink
            url="/ingenieria-electromecanica"
            text="Ing. Electromecánica"
            :active="$page.url.includes('ingenieria-electromecanica')"
        />
        <hr />
        <CareerSidebarLink
            url="/ingenieria-energias-renovables"
            text="Ing. en Energías Renovables"
            :active="$page.url.includes('ingenieria-energias-renovables')"
        />
    </div>
</template>
