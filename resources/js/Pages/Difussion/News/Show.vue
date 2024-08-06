<script setup>
import MainLayout from "@/Layouts/Main/MainLayout.vue";
import { Head } from "@inertiajs/vue3";
import DifussionSidebar from "@/Pages/Difussion/Partials/DifussionSidebar.vue";
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";

defineOptions({
    layout: MainLayout,
});

const props = defineProps({
    update: {
        type: Object,
        required: true,
    },
});
</script>
<template>
    <Head title="Noticias" />
    <div class="flex items-start justify-center gap-8">
        <DifussionSidebar />
        <div
            class="flex w-2/3 flex-col items-center justify-between gap-6 p-10"
        >
            <h1 class="text-4xl">{{ props.update.data.name }}</h1>
            <p class="text-lg">{{ props.update.data.content }}</p>
            <Carousel
                v-if="props.update.data.images != 0"
                :autoplay="4000"
                :items-to-show="1"
                :wrap-around="false"
                pause-autoplay-on-hover
            >
                <Slide
                    v-for="image in props.update.data.images"
                    :key="image.index"
                    class="flex w-full items-center justify-center"
                >
                    <img
                        :src="image.original_url"
                        alt="image"
                        class="carousel__item bg-neutral-200 object-contain"
                    />
                </Slide>

                <template #addons>
                    <Navigation />
                </template>
            </Carousel>
        </div>
    </div>
</template>

<style>
.carousel__item {
    max-height: 600px;
    min-height: 200px;
    width: 100%;
    font-size: 20px;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel__pagination {
    display: flex;
    justify-content: center;
    list-style: none;
    line-height: 2;
    margin: 0;
    padding: 0;
}

.carousel__pagination-button {
    display: block;
    border: none;
    margin: 0;
    cursor: pointer;
    background: transparent;
    padding: 10px;
    border-radius: 4px;
}

.carousel__pagination-button::after {
    display: block;
    content: "";
    width: 12px;
    height: 12px;
    border-radius: 10px;
    background-color: #2563eb;
}

.carousel__pagination-button--active::after {
    background-color: #172554;
}

@media (hover: hover) {
    .carousel__pagination-button:hover::after {
        background-color: #172554;
    }
}

.carousel__slide__sistemas {
    padding: 10px;
    margin: 10px;
}

/* .carousel__viewport {
    perspective: 2000px;
}

.carousel__track {
    transform-style: preserve-3d;
}

.carousel__slide--sliding {
    transition: 0.5s;
}

.carousel__slide {
    opacity: 0.9;
    transform: rotateY(-20deg) scale(0.9);
}

.carousel__slide--active ~ .carousel__slide {
    transform: rotateY(20deg) scale(0.9);
}*/

.carousel__slide--prev {
    opacity: 1;
    transform: rotateY(-10deg) scale(0.95);
}

.carousel__slide--next {
    opacity: 1;
    transform: rotateY(10deg) scale(0.95);
}

.carousel__prev,
.carousel__next {
    box-sizing: content-box;
    border: 4px solid white;
    border-radius: 30px;
    background-color: #172554;
    color: honeydew;
}

.carousel__prev:hover,
.carousel__next:hover {
    color:darkgray
}

/*
.carousel__slide--active {
    opacity: 1;
    transform: rotateY(0) scale(1.1);
} */
</style>
