

<template>
  <div id="home-area">
    <h1 id="home-title">Jan's Almanac of Random Things</h1>

    <p id="catchphrase">Letting you read what you don't need to know.</p>
  <!-- <p>{{ message }}</p> -->
  </div>
  
</template>

<script setup>
import Layout from '../Shared/Layout.vue';
</script>

<script>
export default {
  layout: Layout
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inspiration&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Abel&family=Inspiration&display=swap');

#home-area {
  background: url('../../../public/colorful-home.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  width: 100vw;
  height: 93vh;
}

#home-title {
  font-family: 'Inspiration', cursive;
  padding-top: 18vh;
  margin-left: 40vw;
  margin-right: 40vw;
  font-size: 60px;
  /* size: 100px; */
}

#catchphrase{
  font-family: 'Abel', sans-serif;
  padding-top: 20px;
  /* color: white; */
  font-size: 20px;
  margin-left: 38vw;
  margin-right: 38vw;
}
</style>

