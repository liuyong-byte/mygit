<template>
  <a :class="lin" href="#">
      <slot>自制链接</slot>
  </a>
</template>

<script>
export default {
    name:"Link",
    props:{
        color:{
            type:String
        },
        line:{
            type:String
        }
    },
    data() {
        return {
            lin:"no"
        }
    },
  mounted(){
       if(this.line==="yes"){
           this.lin="yes"
       }
       if(this.line==="no"){
           this.lin="no"
       }
  },
    methods:{

    }
}
</script>

<style scoped>
a:hover{
    color:tomato;
}
a:active{
    color: red;
}
a{
    color: skyblue;
}
.yes{
    text-decoration-line: none;
}
.no{
    text-decoration-line: underline;
}
</style>