<template>
    <Wrapper>
      <form @submit.prevent="register" class="login-form">
          <div class="login-input">
              <label for="name">Name</label> <br>
              <input type="text" id="name" v-model="form.name"/>
          </div>
          <br/>
          <div class="login-input">
              <label for="email">Email</label> <br>
              <input type="email" id="email" v-model="form.email"/>
          </div>
          <br/>
          <div>
              <label for="password">Password</label> <br>
              <input type="password" id="password" v-model="form.password"/>
          </div>
          <br/>
          <div>
              <label for="password_confirmation">Confirm Password</label> <br>
              <input type="password" id="password_confirmation" v-model="form.password_confirmation"/>
          </div>
          <br/>
          <div>
              <button type="submit">
                  Create
              </button>
              <br/><br/>
              <div>   
                  <Link href="">
                      Create Account
                  </Link>
              </div>  
          </div>
      </form>
    </Wrapper>
  </template>
<script setup>
import Wrapper from '../../Components/Wrapper.vue';
import { useForm, Link } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'

const form = useForm({
    name: null,
    email : null,
    password : null,
    password_confirmation: null,
});

const register = () => {
    router.post('/user-account', form)
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