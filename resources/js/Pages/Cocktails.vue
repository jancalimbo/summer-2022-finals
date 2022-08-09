<template>
<div id="cocktails-area">
<h1>Cocktails</h1>

<hr>
<div id="table-cocktails">
  <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Strength</th>
      <th scope="col">Ingredients</th>
      <th scope="col">Preparation</th>
      <th scope="col">Tips</th>
    </tr>
  </thead>
  <tbody v-for="cocktail in cocktails" :key="cocktail.id">
    <tr>
      <th scope="row">{{ cocktail.id }}</th>
      <td>{{ cocktail.name }}</td>
      <td>{{ cocktail.strength}}</td>
      <td>{{ cocktail.ingredients }}</td>
      <td>{{ cocktail.preparation }}</td>
      <td>{{ cocktail.tips }}</td>
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
      cocktails: Array
    }  
  }

</script>

<style scoped>
#table-cocktails{
  margin-left: 300px;
  margin-right: 300px;
}

#cocktails-area {
  background: url('../../../public/cocktails.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  
}

#table-cocktails{
  margin-left: 300px;
  margin-right: 300px;
  background-color: rgba(255, 255, 255, 0.568);
  border-radius: 10px;
  padding: 10px;
  border: black solid 1px;
}
h1{
  margin-left: 100px;
  padding-top: 20px;
  color: rgb(0, 0, 0);
}
</style>