<template>
<div id="beers-area">
  <h1>Beers</h1>

  <hr>
  <div id="table-beers">
    <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Brand Name</th>
        <th scope="col">Description</th>
        <th scope="col">History</th>
      </tr>
    </thead>
    <tbody v-for="beer in beers" :key="beer.id">
      <tr>
        <th scope="row">{{ beer.id }}</th>
        <td>{{ beer.brand }}</td>
        <td>{{ beer.description}}</td>
        <td>{{ beer.history }}</td>
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
      beers: Array
    }  
  }

</script>

<style scoped>
#beers-area {
  background: url('../../../public/beers-3.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  
}


#table-beers{
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