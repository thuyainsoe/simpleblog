<template>
   <Wrapper>
        <ul class="blog-list">
            <li v-for="blog in blogs.data" :key="blog.id">
                <a :href="blog.url">{{ blog.title }}</a>
            </li>
        </ul>
        <br/><br/>
        <Link
            v-for="(link,index) in blogs.links" 
            :key="index" 
            class="pagination-link" 
            :href="link.url" 
            :class="{active : link.active}"
            v-html="link.label"
        />
   </Wrapper>
</template>

<script setup>
import Wrapper from "../../Components/Wrapper.vue";
import { Link } from '@inertiajs/vue3'

defineProps({
    blogs: Object
})
</script>

<style scoped>
.blog-list {
    margin-top: 20px;
    margin-left: 35px;
}

.blog-list li {
    margin: 10px 0;
}

.active {
    background: blue;
    color: #fff;
    margin-left: 5px;
}

.pagination-link {
    padding: 10px;
}
</style>