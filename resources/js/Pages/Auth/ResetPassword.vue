<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm, Link } from '@inertiajs/vue3';

const props = defineProps({
    email: {
        type: String,
        required: true,
    },
    token: {
        type: String,
        required: true,
    },
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('password.store'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    

    <Link :href="route('welcome')" class="relative flex justify-end mt-[50px] mr-[60px]">
                        <img class="w-12 " src="assets/images/logo.png" alt="">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-[#6640FF]">E-HUB</span>
                        
                    </Link>
    <div class="flex items-center justify-center ">
        <div class="hide-medium md:block lg:block absolute top-0 h-[800px] w-1/2 bg-[#5730F6] transform -translate-x-full rounded-[50px] rotate-45 ml-[100px]">
            <div class="absolute ml-[400px] w-[300px] h-auto flex items-center justify-center transform -rotate-45">
                <img
                    src="https://img.freepik.com/free-vector/forgot-password-concept-illustration_114360-1095.jpg?w=740&t=st=1716715589~exp=1716716189~hmac=fe230953cfed2d3ea9fd894652ddf51d3840fdb48ef274f0ff688ed7fd0f2359"
                    alt="Education Illustration"
                    class="max-w-sm mx-auto  lg:mx-30 w-[900px] h-[500px]"
                />
            </div>
        </div>
        <div class="w-full lg:w-1/2  lg:ml-[350px]">
            <div class="p-8">
                <div class="mb-4">
                    <div class="relative ml-[600px] h-8 w-8 rounded-full flex justify-start bg-[#F6AD2B66]"></div>
                    
                    
                </div>

                <GuestLayout>
                    <Head title="Reset Password" />

                    <form @submit.prevent="submit">
                        <div>
                            <InputLabel for="email" value="Email" />

                            <TextInput
                                id="email"
                                type="email"
                                class="mt-1 block w-full"
                                v-model="form.email"
                                required
                                autofocus
                                autocomplete="username"
                            />

                            <InputError class="mt-2" :message="form.errors.email" />
                        </div>

                        <div class="mt-4">
                            <InputLabel for="password" value="Password" />

                            <TextInput
                                id="password"
                                type="password"
                                class="mt-1 block w-full"
                                v-model="form.password"
                                required
                                autocomplete="new-password"
                            />

                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>

                        <div class="mt-4">
                            <InputLabel for="password_confirmation" value="Confirm Password" />

                            <TextInput
                                id="password_confirmation"
                                type="password"
                                class="mt-1 block w-full"
                                v-model="form.password_confirmation"
                                required
                                autocomplete="new-password"
                            />

                            <InputError class="mt-2" :message="form.errors.password_confirmation" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Reset Password
                            </PrimaryButton>
                        </div>
                    </form>
                </GuestLayout>
            </div>
        </div>
    </div>
</template>

<style>
.hidden {
    display: none;
}
.block {
    display: block;
}

@media (max-width: 768px) {
  .hide-medium {
    display: none;
  }
}
</style>