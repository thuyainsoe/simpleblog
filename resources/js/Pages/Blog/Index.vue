<template>
  <Wrapper>
    <div class="about-content">
      <p class="first-line">I'm maker of things, rider of bikes and hiker of mountains</p> <br>
      <p>
        I'm that guy who's always tinkering with ideas and making stuff. My projects are my metaphorical garden. <br><br>

        I'm currently working on a no-nonsense blogging platform and site builder and a character posing tool for artists. I keep a list of previous projects and work here. <br><br>

        I also write. Mostly short-to-mid length essays about tech, life, etc. At some point I’ll write a book. Maybe tomorrow.<br><br>
      </p>
    </div>
  </Wrapper>
</template>

<script setup>
import Wrapper from '../../Components/Wrapper.vue';


defineProps({
  footballnews: Object
})
</script>

<style>

.about-content {
  margin-top: 30px;
}

.first-line {
  font-weight: bold;
}

</style>