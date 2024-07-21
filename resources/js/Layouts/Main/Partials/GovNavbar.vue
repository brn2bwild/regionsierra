<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <nav
        class="flex w-full items-center justify-between bg-[#0C231E] px-16 text-white"
    >
        <div>
            <Link href=""
                ><img
                    class="w-32"
                    src="https://framework-gb.cdn.gob.mx/landing/img/logoheader.svg"
                    alt="logo-gob-mexico"
            /></Link>
        </div>
        <div class="flex">
            <Link class="hover:bg-green-800 px-4 py-3" href="">Gobierno</Link>
            <Link class="hover:bg-green-800 px-4 py-3" href="">Participa</Link>
            <Link class="hover:bg-green-800 px-4 py-3" href="">Datos</Link>
        </div>
    </nav>
</template>
