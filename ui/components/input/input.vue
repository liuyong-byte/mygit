<template>
  <div class="border">
      <input :type="type" :value="value" @click="click" @change="change"/>
      <slot name="app" :data="msg"></slot>
      <!-- <el-input v-model="value" placeholder="">
            <i slot="prefix" class="el-input__icon el-icon-search"></i>
            <template slot="append">.com</template>
      </el-input> -->
  </div>
</template>

<script>
export default {
    name:"Input",
    props:{
        type:{
            type:String
        },
        value:{
            type:String
        }
    },
    data() {
        return {
            msg:"hello world"
        }
    },
    methods:{
        click:function(e){
            this.$emit('click',e)
        },
        change:function(e){
            this.$emit('change',e)
        }
       
    }
}
</script>

<style scoped>
.border{
    border: 1px solid skyblue;
}
</style>