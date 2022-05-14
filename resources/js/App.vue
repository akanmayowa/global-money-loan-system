<template>
    <div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"><router-link to="/" class="nav-item nav-link"><a class="nav-link">Agents</a></router-link></li>
<li class="nav-item"><router-link to="/CreateAgent" class="nav-item nav-link"><a class="nav-link">Register Agent</a></router-link></li>
    </ul>

    <form class="form-inline my-2 my-lg-0" onClick="">
          <div class="form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
     </form>
  </div>
</nav>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {}
</script>
