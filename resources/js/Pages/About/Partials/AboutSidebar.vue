<script setup>
import MenuSidebarLink from "@/Components/MenuSidebarLink.vue";
import MenuSidebar from "@/Pages/Partials/MenuSidebar.vue";
</script>
<template>
    <MenuSidebar>
        <MenuSidebarLink
            url="/historia"
            text="Historia"
            :active="$page.url.includes('historia')"
        />
        <hr />
        <MenuSidebarLink
            url="/filosofia"
            text="Filosofía"
            :active="$page.url.includes('filosofia')"
        />
        <hr />
        <MenuSidebarLink
            url="/directorio"
            text="Directorio"
            :active="$page.url.includes('directorio')"
        />
        <hr />
        <MenuSidebarLink
            url="/organigrama"
            text="Organigrama"
            :active="$page.url.includes('organigrama')"
        />
        <hr />
        <MenuSidebarLink
            url="/programa-institucional"
            text="Programa Institucional"
            :active="$page.url.includes('programa-institucional')"
        />
        <hr />
        <MenuSidebarLink
            url="/decreto-creacion"
            text="Decreto de creación"
            :active="$page.url.includes('decreto-creacion')"
        />
        <hr />
        <MenuSidebarLink
            url="/manual-organizacion"
            text="Manual de organización"
            :active="$page.url.includes('manual-organizacion')"
        />
    </MenuSidebar>
</template>
