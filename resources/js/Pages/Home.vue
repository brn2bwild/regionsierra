<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";
import MainLayout from "@/Layouts/Main/MainLayout.vue";
import Tweet from "vue-tweet";
import "vue3-carousel/dist/carousel.css";

defineOptions({
    layout: MainLayout,
});

const props = defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>

<template>
    <Head title="Inicio" />
    <Carousel
        :autoplay="4000"
        :items-to-show="1"
        :wrap-around="true"
        pause-autoplay-on-hover
    >
        <Slide :key="1">
            <div class="flex h-[600px] w-full items-center justify-center">
                <img src="/storage/images/FirmaConvenio20230511.jpg" alt="" />
            </div>
        </Slide>
        <Slide :key="2">
            <div class="flex h-[600px] w-full items-center justify-center">
                <img src="/storage/images/FirmaConvenio20230616.jpg" alt="" />
            </div>
        </Slide>
        <Slide :key="3">
            <div class="flex h-[600px] w-full items-center justify-center">
                <img
                    src="/storage/images/HACCP APLICADO A LA AGROINDUSTRIA.jpg"
                    alt=""
                />
            </div>
        </Slide>

        <template #addons>
            <Pagination />
        </template>
    </Carousel>

    <section class="flex flex-col items-center justify-between p-8">
        <h2 class="mb-6 text-4xl font-medium text-blue-950">Comunicación</h2>
        <div class="grid w-full grid-cols-1 gap-16 px-20 md:grid-cols-4">
            <div class="relative h-[400px] overflow-hidden rounded-xl">
                <div
                    class="absolute z-10 h-full w-full bg-black bg-opacity-30"
                ></div>
                <div
                    class="absolute bottom-4 left-4 z-20 rounded-l-xl bg-blue-700 bg-opacity-90 p-3"
                >
                    <span class="text-md line-clamp-3 text-white">
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit.
                    </span>
                    <Link
                        href=""
                        class="block text-end text-lg font-semibold text-white"
                        >Leer más</Link
                    >
                </div>
                <img
                    src="/storage/images/FirmaConvenio20230511.jpg"
                    alt="image"
                    class="h-full w-full object-cover"
                />
            </div>
            <div class="relative h-[400px] overflow-hidden rounded-xl">
                <div
                    class="absolute z-10 h-full w-full bg-black bg-opacity-30"
                ></div>
                <div
                    class="absolute bottom-4 left-4 z-20 rounded-l-xl bg-blue-700 bg-opacity-90 p-3"
                >
                    <span class="text-md line-clamp-3 text-white">
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit.
                    </span>
                    <Link
                        href=""
                        class="block text-end text-lg font-semibold text-white"
                        >Leer más</Link
                    >
                </div>
                <img
                    src="/storage/images/FirmaConvenio20230511.jpg"
                    alt="image"
                    class="h-full w-full object-cover"
                />
            </div>
            <div class="relative h-[400px] overflow-hidden rounded-xl">
                <div
                    class="absolute z-10 h-full w-full bg-black bg-opacity-30"
                ></div>
                <div
                    class="absolute bottom-4 left-4 z-20 rounded-l-xl bg-blue-700 bg-opacity-90 p-3"
                >
                    <span class="text-md line-clamp-3 text-white">
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit.
                    </span>
                    <Link
                        href=""
                        class="block text-end text-lg font-semibold text-white"
                        >Leer más</Link
                    >
                </div>
                <img
                    src="/storage/images/FirmaConvenio20230511.jpg"
                    alt="image"
                    class="h-full w-full object-cover"
                />
            </div>
            <div class="relative h-[400px] overflow-hidden rounded-xl">
                <div
                    class="absolute z-10 h-full w-full bg-black bg-opacity-30"
                ></div>
                <div
                    class="absolute bottom-4 left-4 z-20 rounded-l-xl bg-blue-700 bg-opacity-90 p-3"
                >
                    <span class="text-md line-clamp-3 text-white">
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit.
                    </span>
                    <Link
                        href=""
                        class="block text-end text-lg font-semibold text-white"
                        >Leer más</Link
                    >
                </div>
                <img
                    src="/storage/images/FirmaConvenio20230511.jpg"
                    alt="image"
                    class="h-full w-full object-cover"
                />
            </div>
        </div>
    </section>

    <section class="flex flex-col items-center justify-center p-20">
        <h2 class="mb-6 text-4xl font-medium text-blue-950">Redes sociales</h2>
        <div class="flex w-full items-center justify-center gap-10">
            <iframe
                src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FTecNMRegionS%2Fposts%2Fpfbid0jSshfdNmTo5phaULz5KjzjW9HRwC1sNaXTUZgwhFchgXdC8TvKhcVdEwWG87ZDSQl&show_text=true&width=300"
                style="border: none; overflow: hidden"
                scrolling="no"
                frameborder="0"
                allowfullscreen="true"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                class="h-[485px] w-1/4 overflow-hidden rounded-xl"
            ></iframe>
            <Tweet
                class="flex w-1/2 justify-center"
                tweet-id="1768407298467148015"
            />
            <iframe
                width="1425"
                height="485"
                src="https://www.youtube.com/embed/YPHhKXKgzyw"
                title="Mensaje de bienvenida por parte del Director General"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
                class="rounded-xl"
            ></iframe>
        </div>
    </section>

    <section class="flex w-full justify-center py-8">
        <Carousel
            class="w-1/2"
            :autoplay="4000"
            :items-to-show="4"
            :wrap-around="true"
            pause-autoplay-on-hover
        >
            <Slide
                class="h-40 overflow-hidden rounded-xl bg-neutral-500"
                style="margin: 10px"
                v-for="slide in 10"
                :key="slide"
            >
                <div class="carousel__item text-xl text-white">
                    Sistemas de gestión
                </div>
            </Slide>

            <template #addons>
                <Navigation />
            </template>
        </Carousel>
    </section>

    <section class="flex flex-col items-center justify-center py-8">
        <h2 class="mb-6 text-4xl font-medium text-blue-950">
            Sitios de interés
        </h2>
        <Carousel
            class="w-3/4"
            :autoplay="4000"
            :items-to-show="4"
            :wrap-around="true"
            pause-autoplay-on-hover
        >
            <Slide
                class="h-40 overflow-hidden rounded-xl bg-neutral-100"
                style="margin: 10px"
                v-for="slide in 10"
                :key="slide"
            >
                <div class="carousel__item text-xl text-white">
                    Sistemas de gestión
                </div>
            </Slide>

            <template #addons>
                <Navigation />
            </template>
        </Carousel>
    </section>
</template>

<style>
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
}

.carousel__slide--prev {
    opacity: 1;
    transform: rotateY(-10deg) scale(0.95);
}

.carousel__slide--next {
    opacity: 1;
    transform: rotateY(10deg) scale(0.95);
}

.carousel__slide--active {
    opacity: 1;
    transform: rotateY(0) scale(1.1);
} */
</style>
