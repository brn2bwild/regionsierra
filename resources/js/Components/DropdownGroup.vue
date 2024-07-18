<script></script>
<template>
    <div class="group/dropdown relative">
        <div>
            <slot name="trigger" />
        </div>
        <div
            class="absolute hidden w-48 overflow-hidden rounded-lg bg-blue-950 group-hover/dropdown:block"
        >
            <slot name="content" />
        </div>
    </div>
</template>
