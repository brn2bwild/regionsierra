<script setup>
import MenuSidebarLink from '@/Components/MenuSidebarLink.vue';
import MenuSidebar from '@/Pages/Partials/MenuSidebar.vue';
</script>
<template>
    <MenuSidebar>
        <MenuSidebarLink
            url="/admision"
            text="Admisión"
            :active="$page.url.includes('admision')"
        />
    </MenuSidebar>
</template>
