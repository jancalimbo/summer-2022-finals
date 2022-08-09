<template>

<nav id="navbar-things" class="navbar navbar-expand-lg bg-dark" >
  <a class="navbar-brand" href="/">The Jar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <Link class="nav-link" :class="{'selected' : $page.component=='Home'}" href="/">Home</Link>
      </li>

      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" :class="{'selected' : $page.component == 'Layout'}" href="#" id="navbarDarkDropdownMenuLink" role="button"  data-bs-toggle="dropdown" aria-expanded="false"> 
              Learn About
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li class="nav-item">
                <Link class="nav-link" :class="{'selected' : $page.component=='Beers'}" href="/beers">Beers</Link>
              </li>
              <li class="nav-item">
                <Link class="nav-link" :class="{'selected' : $page.component=='Pizza'}" href="/pizza">Pizzas</Link>
              </li>
                <li class="nav-item">
                  <Link class="nav-link" :class="{'selected' : $page.component=='Cocktails'}" href="/cocktails">Cocktails</Link>
                  </li>
              <li class="nav-item">
                <Link class="nav-link" :class="{'selected' : $page.component=='StreetFood'}" href="/streetfood">Street Foods</Link>
              </li>
              <li class="nav-item">
                <Link class="nav-link" :class="{'selected' : $page.component=='Flowers'}" href="/flower">Flowers</Link>
              </li>
            </ul>
          </li>
        </ul>
      </div>

        <li class="nav-item active">
          <Link class="nav-link" :class="{'selected' : $page.component=='AboutUs'}" href="/aboutus">About Us</Link>
        </li>
      <li class="nav-item active">
        <Link class="nav-link" :class="{'selected' : $page.component=='ContactUs'}" href="/contactus">Contact Us</Link>
      </li>
     
    </ul>
    
  </div>
  
</nav>
<slot/>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<style scoped>




.navbar-brand{
  margin-left: 5%;
  color: rgb(255, 255, 255);
}

#navbarSupportedContent{
  margin-left: 60%;
}

.nav-link{
  color: rgb(255, 255, 255);
}

.selected {
  color: rgb(228, 19, 19);
  border-bottom: 2px solid; 
  font-weight: bolder;
}

</style>