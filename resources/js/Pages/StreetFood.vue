<template>
<div id="streetfood-area">
<h1>Street Foods</h1>

<hr>
<div id="table-streetfoods">
  <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Price</th>
      <th scope="col">Location</th>
      <!-- <th scope="col">Tips</th> -->
    </tr>
  </thead>
  <tbody v-for="streetfood in streetfoods" :key="streetfood.id">
    <tr>
      <th scope="row">{{ streetfood.id }}</th>
      <td>{{ streetfood.name }}</td>
      <td>{{ streetfood.type}}</td>
      <td>{{ streetfood.price }}</td>
      <td>{{ streetfood.location }}</td>
    </tr>
  </tbody>
</table>
</div>
<p>.</p>
<p>.</p>
</div>


</template>

<script setup>
  import Layout from '../Shared/Layout.vue'
</script>

<script>
  
  export default {

    layout: Layout,
    props: {
      streetfoods: Array
    }  
  }

</script>

<style scoped>

#streetfood-area {
  background: url('../../../public/street-food.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  
}

#table-streetfoods{
  margin-left: 300px;
  margin-right: 300px;
  background-color: rgba(255, 255, 255, 0.662);
  border-radius: 10px;
  padding: 10px;
}
h1{
  margin-left: 100px;
  padding-top: 20px;
  color: rgb(255, 255, 255);
}
</style>