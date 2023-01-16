<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center  pt-6 sm:pt-0 bg-gradient-to-r from-red-200 to-pink-200">

        <div class="w-full sm:max-w-md mt-6 px-10 py-10 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mx-auto pb-10 flex justify-center">
                <Link href="/">
                    <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
                </Link>
            </div>
            <slot />
        </div>
    </div>
</template>
