<template>
  <span :class="check"><input type="checkbox" @change="change" :value="value" @click="click"/><slot>多选</slot></span>
</template>

<script>
export default {
        name:"Checkbox",
        props:{
            value:{
                type:String||Number||Boolean
            }
        },
        data(){
            return {
                check:"check"
            }
        },
        methods:{
            click:function(e){
                this.$emit("click",e)
                this.check=e.target.checked?"checked":"check"
            },
            change:function(e){
               const val= e.target.checked?this.value:null
               this.$emit('change',val)
            }
        }
}
</script>

<style scoped>
.checked{
    color: skyblue;
}
.check{
    color: black;
}
</style>