<template>
    <div class="upload">
        <button @click="click">点击上传</button>
        <div style="display:none;">
            <input ref="file" type="file" name="" id="" @change="change">
        </div>
        <p>上传jpg/png大小不超过500kb</p>
        <p v-for="item in arr" :key="item.index">name:{{item.name}};size:{{item.size}}
            <img :src="src" alt="加载" :style="{width:50+'px',height:50+'px'}"/>
        </p>
    </div>
</template>

<script>
import axios from 'axios'
import qs from 'qs'
export default {
    name:"Upload",
    data(){
        return {
            arr:[],
            index:0,
            src:""
        }
    },
    props:{
        url:{
            type:String
        }
    },
    methods:{
        click:function(){
           const file=this.$refs;
            console.log(file)
            this.$refs.file.click()
        },
        change:function(e){
            console.log(e)
            this.index=this.index+1
            const form=new FormData();
            form.append("val",e.target.files[0])
            axios.post(this.url,form,
            {
                headers:{
                    "Content-Type":"multipart/form-data"
                }
            }
            ).then(res=>{
                console.log(res)
                this.src=res.data.url
            })
            if(e.target.files[0].size<=512000&&e.target.files[0].type=="image/jpeg"||e.target.files[0].type=="image/png"){
                this.arr.push({
                    index:this.index,
                    name:e.target.files[0].name,
                    size:Math.round(e.target.files[0].size/1024)+'kb'
                })
                console.log(this.arr)
            }

        }
    }
}
</script>

<style scoped>
.upload{
    border: 1px solid skyblue;
    width: 250px;
    
}
p{
    margin: 0px;
}
</style>