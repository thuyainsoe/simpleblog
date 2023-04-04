<template>
  <Wrapper>
    <form @submit.prevent="login" class="login-form">
        <div class="login-input">
            <label for="email">Email</label> <br>
            <input type="email" id="email" v-model="form.email"/>
        </div>
        <br/>
        <div>
            <label for="password">Password</label> <br>
            <input type="password" id="email" v-model="form.password"/>
        </div>
        <br/>
        <div>
            <button type="submit">
                Login
            </button>
            <br/><br/> 
        </div>
    </form>
  </Wrapper>
</template>
<script setup>
import Wrapper from '../../Components/Wrapper.vue';
import { useForm, Link } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'

const form = useForm({
  email : null,
  password : null,
})

const login = () => {
    router.post('/login', form)
}
</script>

<style scoped>
.login-form {
    margin-top: 20px;
    font-size: 0.9rem;
}

.login-input {
    font-size: 0.9rem;
}

</style>