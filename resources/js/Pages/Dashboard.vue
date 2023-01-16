<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';

defineProps({
    photographer: Object,
    albums: Object,
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Photographer Profile</h2>
        </template>

        <div class="py-12">
            <div class="container mx-auto bg-white p-3">
                <div class="grid grid-cols-12 gap-1 m-5">
                <div class="col-span-12 md:col-span-2">
                    <img :src="photographer.profile_picture" alt="Profile Image" class="w-50 md:w-32 lg:w-48 rounded-full" v-if="photographer.profile_picture !== null">
                    <img src="assets/img/profile.jpeg" alt="Profile Image" class="w-50 md:w-32 lg:w-48 rounded-full" v-else>
                </div>
                <div class="col-span-12 md:col-span-8 md:ml-5">
                    <h1 class="font-black text-4xl"> {{photographer.first_name}} {{photographer.last_name}} </h1>
                    <h4 class="font-black text-gray-500">Bio</h4>
                    <p>
                        {{photographer.bio}}
                    </p>
                </div>
                <div class="col-span-12 md:col-span-2 lg:pl-4">
                    <div class="lg:mt-11 md:mt-0">
                        <p>
                            <span class="font-bold text-gray-500">Phone</span>
                            <br>
                            <span class="text-fuchsia-500"><a href="tel:5555555555">{{photographer.phone}}</a></span>
                        </p>
                        <p>
                            <span class="font-bold text-gray-500">Email</span>
                            <br>
                            <span class="text-fuchsia-500"><a href="mailto:nike.reynold.domain.co">{{photographer.email}}</a></span>
                        </p>
                    </div>
                </div>
               </div>
            </div>

            <div class="container mx-auto">
                <h3 class="font-semibold text-lg pl-3 mt-8">Example Album</h3>
                <div class="grid grid-cols-12 gap-1">
                    <div class="col-span-12 md:col-span-4 mt-5">
                        <div class="rounded overflow-hidden shadow-lg h-full">
                            <div class="relative">
                                <img class="w-full" src="assets/img/album/landscape1.jpeg" alt="Sunset in the mountains">
                                <div class="font-bold text-xl text-white absolute bottom-2 left-2">The Coldest Sunset</div>
                            </div>
                            <div class="px-6 py-4">
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>

                            </div>
                            <div class="px-6 pt-4 pb-2">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 float-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red" class="w-6 h-6 text-gray-600">
                                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                    </svg>
                                </span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 float-right">2023-01-16</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 mt-5 pl-5 pr-5">
                        <div class="rounded overflow-hidden shadow-lg h-full">
                            <div class="relative">
                                <img class="w-full" src="assets/img/album/landscape2.jpeg" alt="Sunset in the mountains">
                                <div class="font-bold text-xl text-white absolute bottom-2 left-2">The Coldest Sunset</div>
                            </div>
                            <div class="px-6 py-4">
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>

                            </div>
                            <div class="px-6 pt-4 pb-2">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 float-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red" class="w-6 h-6 text-gray-600">
                                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                    </svg>
                                </span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 float-right">2023-01-16</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 mt-5">
                        <div class="rounded overflow-hidden shadow-lg h-full">
                            <div class="relative">
                                <img class="w-full" src="assets/img/album/landscape3.jpeg" alt="Sunset in the mountains">
                                <div class="font-bold text-xl text-white absolute bottom-2 left-2">The Coldest Sunset</div>
                            </div>
                            <div class="px-6 py-4">
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>

                            </div>
                            <div class="px-6 pt-4 pb-2">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 float-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red" class="w-6 h-6 text-gray-600">
                                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                    </svg>
                                </span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 float-right">2023-01-16</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 mt-5">
                        <div class="rounded overflow-hidden shadow-lg h-full">
                            <div class="relative">
                                <img class="w-full" src="assets/img/album/landscape4.jpeg" alt="Sunset in the mountains">
                                <div class="font-bold text-xl text-white absolute bottom-2 left-2">The Coldest Sunset</div>
                            </div>
                            <div class="px-6 py-4">
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>

                            </div>
                            <div class="px-6 pt-4 pb-2">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 float-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red" class="w-6 h-6 text-gray-600">
                                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                    </svg>
                                </span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 float-right">2023-01-16</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 mt-5 pl-5 pr-5">
                        <div class="rounded overflow-hidden shadow-lg h-full">
                            <div class="relative">
                                <img class="w-full" src="assets/img/album/landscape5.jpeg" alt="Sunset in the mountains">
                                <div class="font-bold text-xl text-white absolute bottom-2 left-2">The Coldest Sunset</div>
                            </div>
                            <div class="px-6 py-4">
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>

                            </div>
                            <div class="px-6 pt-4 pb-2">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 float-right">2023-01-16</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-4 mt-5 ">
                        <div class="rounded overflow-hidden shadow-lg h-full">
                            <div class="relative">
                                <img class="w-full" src="assets/img/album/landscape6.jpeg" alt="Sunset in the mountains">
                                <div class="font-bold text-xl text-white absolute bottom-2 left-2">The Coldest Sunset</div>
                            </div>
                            <div class="px-6 py-4">
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>

                            </div>
                            <div class="px-6 pt-4 pb-2">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 float-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red" class="w-6 h-6 text-gray-600">
                                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                    </svg>
                                </span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 float-right">2023-01-16</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--This is for future development if you add album create function, This will help for you.-->
            <div class="container mx-auto" v-if="albums.length > 0">
                <h3 class="font-semibold text-lg pl-3 mt-8">My Album</h3>
                <div class="grid grid-cols-12 gap-1">
                    <div class="col-span-12 md:col-span-4 mt-5 pl-3 pr-3" :key="index"
                         v-for="(album,index) in albums">
                        <div class="rounded overflow-hidden shadow-lg h-full">
                            <div class="relative">
                                <img class="w-full" v-bind:src="album.feature_img" alt="Sunset in the mountains">
                                <div class="font-bold text-xl text-white absolute bottom-2 left-2">{{album.title}}</div>
                            </div>
                            <div class="px-6 py-4">
                                <p class="text-gray-700 text-base">
                                   {{album.description}}
                                </p>

                            </div>
                            <div class="px-6 pt-4 pb-2">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 float-left" v-if="album.featured == 1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="red" class="w-6 h-6 text-gray-600">
                                        <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                    </svg>
                                </span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 float-right">{{album.date}}</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>
