<template>
  <span>
      <span>
      <slot name="open" >开</slot>
      <input type="radio"/>
      </span>

      <span>
      <slot name="close" >关</slot>
      <input type="radio"/>
      </span>

  </span>
</template>

<script>
export default {
    name:"Swi",
    data(){
      return {

      }
    }

}
</script>

<style scoped>
span:nth-child(1):hover,span:nth-child(2):hover{
  color: skyblue;
  cursor: pointer;
}
</style>