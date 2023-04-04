<template>
    <main>
        <Wrapper style="margin-top: 90px">
            <h1 class="blog-logo">
               Hti Lar Blog
            </h1>
            <br>
            <hr>

            <ul class="nav">
                <li class="nav-item">
                    <Link href="/" class="nav-link">
                        Home
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="/blogs" class="nav-link">
                        Blogs
                    </Link>
                </li>
                <li class="nav-item">
                    <Link href="/latest-blogs" class="nav-link">
                        Latest
                    </Link>
                </li>
                <div v-if="$page.props.user" class="user-logout">
                  <div>{{ $page.props.user.name }}</div>
                  <Link href="/blog/create" class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium p-2 rounded-md">New Blog</Link>
                  <div>
                  <Link href="/logout" method="delete" as="button">Logout</Link>
                </div>
            </div>
            </ul>

            
        </Wrapper>
        <slot/>
    </main>
</template>
<script setup>
import { Link } from '@inertiajs/vue3'
import Wrapper from '../Components/Wrapper.vue';
</script>
<style scoped>

.nav {
  display: flex;
  margin-top: 20px;
}

.nav-item {
  list-style: none;
  padding: 10px 10px 10px 0;
}

.nav-item:not(:first-child) {
  padding: 10px 15px;
}

.nav-link {
  text-decoration: none;
}

.blog-logo {
  font-size: 50px;
}

.user-logout {
  display: flex;
  gap: 20px;
  margin-left: 400px;
}
</style>