<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    phpVersion: String,
    title: String,
});
</script>

<template>
    <Head>
        <title>{{title}}</title>
        <meta name="description" content="Creative Guild">
    </Head>
    <div class="relative flex items-top justify-center min-h-screen bg-gradient-to-r from-red-200 to-pink-200 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="text-sm text-gray-700 dark:text-gray-500 underline"
                >Dashboard</Link
            >

            <template v-else>
                <Link :href="route('login')" class="text-lg text-gray-800 dark:text-white underline">Log in</Link>

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ml-4 text-lg text-gray-800  underline"
                    >Register</Link
                >
            </template>
        </div>

        <div class="grid max-w-6xl mx-auto sm:px-6 lg:px-8 justify-items-center">
            <ApplicationLogo class="w-20 h-20 fill-current mb-6" />
            <h1 class="text-2xl mt-6 md:mt-0">Creative Guild</h1>
        </div>
    </div>
</template>
