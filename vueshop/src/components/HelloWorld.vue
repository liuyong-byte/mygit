<template>
  <div>
    你要找的页面不在这
    hello world
    {{this.$route.params.id}}
    {{this.$route.query.age}}
    <router-view name="sls"></router-view>
    <router-view name="a"></router-view>
  </div>
</template>

<script>
export default {
 beforeRouteEnter (to, from, next) {
   // ...
   next();
 },
 beforeRouteLeave (to, from, next) {
   // ...
 },
 beforeRouterUpdate(){

 }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

