<template>
  <Wrapper>
    <form @submit.prevent="create">
    <div class="form-content">
        <label for="title">Title</label> <br>
        <input type="text" id="title" v-model="form.title">
    </div>
    <div class="form-content">
        <label for="url">URL</label> <br>
        <input type="text" id="url" v-model="form.url">
    </div>
    <div class="form-content">
        <label for="content">Content</label> <br>
        <input type="text" id="content" v-model="form.content">
    </div>
    <button class="button">
        Submit
    </button>
  </form>
  </Wrapper>
</template>

<script setup>
import Wrapper from '../../Components/Wrapper.vue'
import { useForm } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'

const form = useForm({
  title: null,
  url: null,
  content: null
})

const create = () => {
    router.post('/blog', form)
}
</script>

<style scoped>
.form-content {
    margin-bottom: 20px;
}

.button {
    font-size: 0.8rem;
    padding: 5px 10px;
}
</style>