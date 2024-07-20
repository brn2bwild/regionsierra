<script setup>
import MenuSidebarLink from "@/Components/MenuSidebarLink.vue";
import MenuSidebar from "@/Pages/Partials/MenuSidebar.vue";
</script>
<template>
    <MenuSidebar>
        <MenuSidebarLink
            url="/servicios-escolares"
            text="Servicios Escolares"
            :active="$page.url.includes('servicios-escolares')"
        />
        <hr />
        <MenuSidebarLink
            url="/vinculacion"
            text="Vinculación"
            :active="$page.url.includes('vinculacion')"
        />
        <hr />
        <MenuSidebarLink
            url="/recursos-financieros"
            text="Recursos Financieros"
            :active="$page.url.includes('recursos-financieros')"
        />
        <hr />
        <MenuSidebarLink
            url="/sistema-institucioanl-archivos"
            text="Sistema Institucional de Archivos"
            :active="$page.url.includes('sistema-institucional-archivos')"
        />
    </MenuSidebar>
</template>
