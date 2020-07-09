<template>
  <div id="app" class="container">
   <el-button style="border:0px;" size="small"  id="open" @click="show" ></el-button>
   <div class="row" id="view" v-show="open">
<ul class="nav nav-justified">	
<li><router-link to="/">首页</router-link> </li>
<li><router-link to="/deng">请登录</router-link> </li>
<li> <router-link to="zhu">免费注册</router-link> </li>			
<li><router-link to="/book">小说书城</router-link> </li>
<li><router-link to="/shop">时尚衣柜</router-link> </li>
<li><router-link to="/video">电影走廊</router-link></li>        
<li><router-link to="/center">管理中心</router-link> </li>

</ul>
   </div>
   
   <div class="row">
	   <router-view></router-view>
   </div>
  </div>
</template>
<script>
export default {
  name: 'App',
  data(){
    return {
      open:false
    }
  },
  methods:{
    show:function(){
      this.open=this.open==false?true:false;
    }
  },
  mounted(){
    window.onload=function(){
      const width=document.body.clientWidth;
    const view=document.getElementById("view");
    const open=document.getElementById("open");
    console.log(width);
    if(width<=375){
        view.style.display="none"
        open.style.display="block"
        open.className="el-icon-menu"
        open.style.background="skyblue"
    }
    else{
      view.style.display="block"
        open.style.display="none"
    }
    }
  }
}
</script>
