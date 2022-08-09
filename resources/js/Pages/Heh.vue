<template>
  <div class="view-area">
  <h1 id="title">
    Just Kidding
  </h1>
  <p id="sub">
    Don't contact me!

  
  </p>
  </div>
  
</template>

<script setup>
  import Layout from '../Shared/Layout.vue'
</script>

<script>
  
  export default {

    layout: Layout
  }

</script>

<style scoped>
.view-area {
  background: url('../../../public/spiraling colors.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  width: 100vw;
  height: 93vh;
}

#title {
  padding-top: 18vh;
  margin-left: 39vw;
  margin-right: 39vw;
  font-size: 60px;
  color: white;
  /* size: 100px; */
}

#sub{
  margin-top: 80px;
  padding: 20px;
  /* color: white; */
  font-size: 20px;
  margin-left: 35vw;
  margin-right: 35vw;
  color: black;
  background-color: rgba(255, 255, 255, 0.815);
  border-radius: 10px;
  text-align: center;
}

</style>