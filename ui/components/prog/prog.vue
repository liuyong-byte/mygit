<template>
  <div class="flex">  
      <div class="row-1">
          <slot name="decrease">
          <button @click="dec">-</button>
      </slot>
      </div>
        <div class="row-4">
            <progress  :value="val" :max="100"></progress>{{val}}
        </div>
      <div class="row-1">
          <slot name="add">
          <button @click="add">+</button>
      </slot>
      </div>
      
  </div>
</template>

<script>

export default {
        name:"Prog",
        props:{
            value:{
                type:Number,
            },
            max:{
                type:Number
            },
            scale:{
                type:Number
            }
        },
        data(){
            return {
                val:this.value
            }
        },
        methods:{
             add:function(){
                this.val=this.val+this.scale
                this.$emit('change',this.val)
             },
             dec:function(){
                 this.val=this.val-this.scale
                 this.$emit('change',this.val)
             }
        }
}
</script>

<style scoped>
.flex{
    width: 14%;
    display: flex;
    flex-direction: row;
}
.row-4{
    flex: 4;
}
.row-1{
    flex: 1;
}
button{
    height: 20px;
}
button:hover{
    color: skyblue;
}
progress{
    height: 20px;
}
</style>