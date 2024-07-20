<script setup>
import MenuSidebarLink from '@/Components/MenuSidebarLink.vue';
import MenuSidebar from '@/Pages/Partials/MenuSidebar.vue';

</script>
<template>
    <MenuSidebar>
        <MenuSidebarLink
            url="/ingenieria-agronomia"
            text="Ingeniería en Agronomía"
            :active="$page.url.includes('ingenieria-agronomia')"
        />
        <hr />
        <MenuSidebarLink
            url="/ingenieria-bioquimica"
            text="Ingeniería Bioquímica"
            :active="$page.url.includes('ingenieria-bioquimica')"
        />
        <hr />
        <MenuSidebarLink
            url="/ingenieria-industrial"
            text="Ingeniería Industrial"
            :active="$page.url.includes('ingenieria-industrial')"
        />
        <hr />
        <MenuSidebarLink
            url="/ingenieria-informatica"
            text="Ingeniería Informática"
            :active="$page.url.includes('ingenieria-informatica')"
        />
        <hr />
        <MenuSidebarLink
            url="/ingenieria-administracion"
            text="Ingeniería en Administración"
            :active="$page.url.includes('ingenieria-administracion')"
        />
        <hr />
        <MenuSidebarLink
            url="/ingenieria-electromecanica"
            text="Ingeniería Electromecánica"
            :active="$page.url.includes('ingenieria-electromecanica')"
        />
        <hr />
        <MenuSidebarLink
            url="/ingenieria-energias-renovables"
            text="Ingeniería en Energías Renovables"
            :active="$page.url.includes('ingenieria-energias-renovables')"
        />
    </MenuSidebar>
</template>
