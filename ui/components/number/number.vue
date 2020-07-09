<template>
    <span><button @click="decrease">-</button><input class="padd" v-model="val" type="text"/><button @click="add">+</button></span>
</template>
<script>
export default{
    name:"Number",
    data(){
        return {

        }
    },
    props:{
        value:{
            type:Number
        },
        max:{
            type:Number
        },
        min:{
            type:Number
        }
    },
    data(){
        return {
            val:this.value
        }
    },
    methods:{
        decrease:function(){
            this.val=this.val-1
            if(this.val<=this.min){
                this.val=this.min
                this.$emit('change',this.val)
            }
            else{
                this.$emit('change',this.val)
            }
            
        },
        add:function(){
            this.val=this.val+1
            if(this.val>=this.max){
                this.val=this.max
                this.$emit('change',this.val)
            }
            else{
                this.$emit('change',this.val)
            }
        }
    }
}
</script>
<style scoped>
.padd{
    text-align: center;
}
button:hover{
    color: skyblue;
}
</style>