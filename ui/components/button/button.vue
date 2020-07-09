<template>
    <button class="L-but" :style="{color:this.fColor,backgroundColor:this.bgColor}" @click="click">
        <slot>按钮</slot>
    </button>
</template>

<script>
export default {
    name:"Button",
    props:{
        bgColor:{
            type:String,
            value:"skyblue"
        },
        fColor:{
            type:String,
            value:"white"
        }
        
    },
    data() {
        return {
            
        }
    },
    methods:{
        click:function(e){
            this.$emit('click',e)
        }
    }
}
</script>

<style scoped>
.L-but{
    border: 1px solid white;
}
</style>