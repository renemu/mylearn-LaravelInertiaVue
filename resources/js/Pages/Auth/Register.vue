<script setup>
import { reactive } from "vue";
const state = reactive({
    formData: {},
});

const register = () => {
    console.log(state.formData);
};
</script>
<template>
    <h1 class="title">Register</h1>
    <div class="w-2/4 mx-auto">
        <form @submit.prevent="register">
            <div class="mb-6">
                <label>Name</label>
                <input type="text" v-model="state.formData.name" />
            </div>
            <div class="mb-6">
                <label>Email</label>
                <input type="email" v-model="state.formData.email" />
            </div>
            <div class="mb-6">
                <label>Password</label>
                <input type="password" v-model="state.formData.password" />
            </div>
            <div class="mb-6">
                <label>Confirm Password</label>
                <input type="password" v-model="state.formData.cpassword" />
            </div>
            <div>
                <p class="text-slate-600 mb-2">
                    Already a user? <a href="#" class="text-link">Login</a>
                </p>
                <button class="primary-btn">Register</button>
            </div>
        </form>
    </div>
</template>
