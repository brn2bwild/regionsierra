<script setup>
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { faChevronDown, faChevronUp } from "@fortawesome/free-solid-svg-icons";
import { ref } from "vue";

const props = defineProps({
    title: { type: String, required: true },
    ariaTitle: { type: String, required: true },
});

const showPanel = ref(false);

const togglePanel = (event) => {
    showPanel.value = !showPanel.value;
};
</script>
<template>
    <div
        class="rounded-lg border-[1px] border-b-2 border-neutral-300 border-b-blue-950"
    >
        <button
            :arial-controls="'accordion-content-' + ariaTitle"
            :id="'accordion-control-' + ariaTitle"
            class="flex w-full cursor-pointer items-center justify-between px-4 py-2 font-medium text-neutral-900 hover:text-blue-900"
            @click.prevent="togglePanel"
        >
            <h2 class="capitalize">{{ props.title }}</h2>
            <FontAwesomeIcon v-if="!showPanel" :icon="faChevronDown" class="" />
            <FontAwesomeIcon v-if="showPanel" :icon="faChevronUp" class="" />
        </button>
        <Transition
            enter-active-class="transition ease-out duration-200"
            enter-from-class="opacity-0 scale-95"
            enter-to-class="opacity-100 scale-100"
            leave-active-class="transition ease-in duration-75"
            leave-from-class="opacity-100 scale-100"
            leave-to-class="opacity-0 scale-95"
        >
            <div
                :aria-hidden="!showPanel"
                :id="'content-' + ariaTitle"
                class="p-4"
                v-if="showPanel"
            >
                <slot />
            </div>
        </Transition>
    </div>
</template>
