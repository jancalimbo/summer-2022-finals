<template>
<div id="pizza-area">
<h1>Pizzas</h1>

<hr>
<div id="table-pizzas">
  <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Toppings</th>
      <th scope="col">Dough</th>
      <th scope="col">Size</th>
      <!-- <th scope="col">Tips</th> -->
    </tr>
  </thead>
  <tbody v-for="pizza in pizzas" :key="pizza.id">
    <tr>
      <th scope="row">{{ pizza.id }}</th>
      <td>{{ pizza.name }}</td>
      <td>{{ pizza.toppings}}</td>
      <td>{{ pizza.dough }}</td>
      <td>{{ pizza.size }}</td>
      <!-- <td>{{ pizza.tips }}</td> -->
    </tr>
  </tbody>
</table>
</div>

<p>.</p>
<p>.</p>
<!-- <p>.</p> -->
</div>

</template>

<script setup>
  import Layout from '../Shared/Layout.vue'
</script>

<script>
  
  export default {

    layout: Layout,
    props: {
      pizzas: Array
    }  
  }

</script>

<style scoped>
#table-pizzas{
  margin-left: 300px;
  margin-right: 300px;
}

#pizza-area {
  background: url('../../../public/pizza.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  
}

#table-pizzas{
  margin-left: 300px;
  margin-right: 300px;
  background-color: rgba(255, 255, 255, 0.486);
  border-radius: 10px;
  padding: 10px;
}
h1{
  margin-left: 100px;
  padding-top: 20px;
  color: rgb(125, 234, 141);
}
</style>