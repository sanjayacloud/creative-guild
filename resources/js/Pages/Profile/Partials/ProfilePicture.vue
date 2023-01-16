<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm, usePage } from '@inertiajs/inertia-vue3';

const props = defineProps({
    status: String,
});

const form = useForm({
    image:'',
});

const submit = () => {
    form.post(route('profile.picture'), {
        onFinish: () => form.reset('image'),
    });
};
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">Change Profile Picture</h2>
        </header>

        <form @submit.prevent="submit" class="mt-6 space-y-6">

            <div class="grid gap-6 mb-6 md:grid-cols-1">
                <div>
                    <label class="block">
                        <span class="sr-only">Choose profile photo</span>
                        <input type="file"  @input="form.image = $event.target.files[0]"
                               class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 "/>
                    </label>

                    <InputError class="mt-2" :message="form.errors.image" />
                </div>
                <div class="flex items-center gap-4">
                    <PrimaryButton :disabled="form.processing">Save</PrimaryButton>
                </div>
                <div>
                    <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
                        <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Profile image changed.</p>
                    </Transition>
                </div>
            </div>

        </form>
    </section>
</template>

