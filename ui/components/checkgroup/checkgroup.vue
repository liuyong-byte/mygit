<template>
  <p ref="gen">
      <slot></slot>
      <button @click="click">{{t}}</button>
  </p>
</template>

<script>
export default {
    name:"Checkgroup",
    props:{
        
    },
    data(){
        return{
             bool:true,
             t:"确定",
             list:[],
             err:[]
        }
    },
    mounted(){
        const gen=this.$refs.gen
        console.log(gen.children.length)
        console.log(gen.children[0].children[0].checked)


    },
    methods:{
        click:function(){
            console.log(123)
            const gen=this.$refs.gen
          this.bool= this.bool?false:true;
           if(this.bool===false){
               this.t="取消"
 for(let i=0;i<=gen.children.length-2;i++){
                gen.children[i].children[0].disabled=true
                if(gen.children[i].children[0].checked){
                     this.list.push(gen.children[i].children[0].value)
                }
                else{
                    this.err.push(null)
                }
            }
            
            }
            else{
                this.t="确定"
                for(let i=0;i<=gen.children.length-2;i++){
                gen.children[i].children[0].disabled=false
               
                
            }
            }
           console.log(this.list.length)   
           if(this.list.length!=0){
               this.$emit('val',this.list)
           }
        //    else{
        //        this.$emit('val',this.list)
        //    }
          
        }
    }
}
</script>

<style>

</style>