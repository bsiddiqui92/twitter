<template>
  <div id="app">
    <app-feed></app-feed>
  </div>
</template>

<script>
import Feed from './components/Feed'
export default {
  name: 'app',
  components: {
    appFeed: Feed
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

.nav-pills-custom>li>a {
  color: lightgrey;
}

.nav-pills-custom>li>a:focus,
.nav-pills-custom>li>a:hover {
  background: none;
  color: grey;
}

.panel-custom>.panel-heading {
  background: none;
  border-bottom: none;
}

.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover{
  background-color: #337AB7;
}
.form-control-nav{
  background-color:#F0FFFF;
  border: lightgrey solid 1px;
  border-radius:15px;
}
body{
  background-color: #F0FFFF;
}
.navbar-default .navbar-collapse, .navbar-default{
background-color: white;
}
.panel-footer{
  background-color: lightcyan;
}
.well{
  background-color: lightcyan;
}
a{
  color:#60A6C1;
}
div.panel-heading{
  padding-top:15px;
  padding-bottom: 0px;
}
.form-control-feedback{
  line-height:27px;
}
.panel-info{
  border:1px lightgrey solid;
}



</style>
