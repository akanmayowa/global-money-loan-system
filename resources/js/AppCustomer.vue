<template>
  <div class="container">
         <div class="col-md-2">
            <router-link  to="/CreateCustomer" class="btn btn-primary">Create Item</router-link>
          </div>
          <br />
        <div>
            <transition name="fade">
                <router-view></router-view>
            </transition>
            <!-- <Customer></Customer> -->
        </div>
    </div>
</template>


<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
</style>

