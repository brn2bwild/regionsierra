<script></script>
<template>
    <div class="group/dropdown relative">
        <div>
            <slot name="trigger" />
        </div>
        <div
            class="absolute z-30 hidden w-48 overflow-hidden rounded-lg group-hover/dropdown:block"
        >
            <slot name="content" />
        </div>
    </div>
</template>
