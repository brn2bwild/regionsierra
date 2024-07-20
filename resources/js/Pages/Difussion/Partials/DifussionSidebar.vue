<script setup>
import MenuSidebarLink from "@/Components/MenuSidebarLink.vue";
import MenuSidebar from "@/Pages/Partials/MenuSidebar.vue";
</script>
<template>
    <MenuSidebar>
        <MenuSidebarLink
            url="/noticias"
            text="Noticias"
            :active="$page.url.includes('noticias')"
        />
        <hr />
        <MenuSidebarLink
            url="/convocatorias"
            text="Convocatorias"
            :active="$page.url.includes('convocatorias')"
        />
        <hr />
        <MenuSidebarLink
            url="/galeria"
            text="Galería"
            :active="$page.url.includes('galeria')"
        />
        <hr />
        <MenuSidebarLink
            url="/calendario-escolar"
            text="Calendario Escolar"
            :active="$page.url.includes('calendario-escolar')"
        />
    </MenuSidebar>
</template>
