<template>
<div id="flowers-area">
<h1>Flowers</h1>

<hr>
<div id="table-flowers">
  <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody v-for="flower in flowers" :key="flower.id">
    <tr>
      <th scope="row">{{ flower.id }}</th>
      <td>{{ flower.name }}</td>
      <td>{{ flower.description}}</td>
    </tr>
  </tbody>
</table>
</div>
</div>


</template>

<script setup>
  import Layout from '../Shared/Layout.vue'
</script>

<script>
  
  export default {

    layout: Layout,
    props: {
      flowers: Array
    }  
  }

</script>

<style scoped>
#flowers-area {
  background: url('../../../public/flowers.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  
}

#table-flowers{
  margin-left: 300px;
  margin-right: 300px;
  background-color: rgba(0, 0, 0, 0.381);
  border-radius: 10px;
  padding: 10px;
}
h1{
  margin-left: 100px;
  padding-top: 20px;
  color: rgb(0, 0, 0);
}
</style>