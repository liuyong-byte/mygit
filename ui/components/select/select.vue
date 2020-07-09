<template>
  <div>
      <p :style="{width:width+'px',height:height+'px'}">
          <span>{{text}}</span><span :class="cla" @click="display"></span>
      </p>
      <transition name="fade">
          <div v-show="show" class="drop" :style="{width:width+'px'}">
          <p class="dropitem" @click="click(item.value)" v-for="item in array" :key="item.key">{{item.value}}</p>
      </div>
      </transition>
  </div>
</template>

<script>
export default {
        name:"Select",
        props:{
            width:{
                type:Number||String
            },
            height:{
                type:Number||String
            },
            array:{
                type:Array
            }
        },
        data(){
            return {
                show:true,
                text:"请选择",
                cla:"s"
            }
        },
        methods:{
            display:function(){
            this.show=this.show?false:true
            this.cla=this.cla=="s"?"ss":"s"
        },
        click:function(val){
                this.text=val
                this.$emit('change',val)
        }
        }
}
</script>

<style scoped>
P{
    border: 1px solid skyblue;
    opacity: 0.6;
}
p:hover{
    cursor: pointer;
    opacity: 1.0;
}
.drop{
    border: 1px solid skyblue;
    
}
.dropitem{
    opacity: 1.0;
    margin: 0px;
    border: 0px;
}
.dropitem:hover{
    color: skyblue;
}
.drop:hover{
     cursor: pointer;
    opacity: 1.0;
}
.s{
    width: 0;
    height: 0;
    border-width: 10px;
    border-style:solid ;
    border-color:black transparent transparent transparent  ;
    position: relative;
    top: 15px;
}
.ss{
    width: 0;
    height: 0;
    border-width: 10px;
    border-style:solid ;
    border-color:transparent transparent black transparent  ;
    position: relative;
    bottom: 15px;
}
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>