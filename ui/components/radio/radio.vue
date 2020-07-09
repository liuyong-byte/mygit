<template>
        <button class="radio">
                <input  type="radio" :value="value" @click="click" @change="change(value)"/>
        </button>
</template>
<script>
export default {
    name:"radio",
    props:{
        value:{
            type:String||Number||Boolean
        }
    },
    methods:{
        click:function(e){
            this.$emit('click',e)
        },
        change:function(value){
            this.$emit("change",value)
        }
    }
}
</script>
<style scoped>
.radio{
  border: 2px solid skyblue;
}
</style>