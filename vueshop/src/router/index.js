import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import {shou} from '../shou/shou'
import {view} from '../view/view'
import sls from '../components/HelloWorld'
import {info} from "../vuex/vuex"
Vue.use(Router)
export default new Router({
  mode:"history",//hash
  routes: [
    {
      path:"/",
      name:"view",
      component:view.shouye
    },
    {
      path:"/deng",
      name:"deng",
      component:view.deng
    },
    {
      path:"/zhu",
      name:"zhu",
      alias:"/c",
      component:view.zhu,
      meta:{
        isLogin:true    // 添加该字段，表示进入这个路由是需要登录的
      },//路由元
      children:[{
        path:"/zhu/",
        name:"zhub",
        component:{
          template:`<div>123</div>`
        },
        meta:{
          user:"as"
        }
      },
      {
        path:"/zhu/a",
        name:"zhua",
        component:{
          template:`<div>123</div>`
        },
        meta:{
          userq:"aas"
        }
      }
     
    ],
      beforeEnter:function(to,from,next){
        console.log(to)
        console.log(from)
        next()
      }
    },
    {
      path:"/book",
      name:"book",
      component:view.book,
      beforeEnter:function(to,from,next){
       // var a=true
       var a=false;
        if(!a)
          next()
        else
          next({path:"/zhu"})  
      },
      
    },
    {
      path:"/center",
      name:"center",
      component:view.center
      
    },
    {
      path:"/daohan",
      name:"daohan",
      component:view.daohan
    },
    {
      path:"/shop",
      name:"shop",
      component:view.shop
    },
    {
      path:"/video",
      name:"video",
      component:view.video,
      children:[
        {
          path:"/video/",
          component:sls
        }
      ]
    },
    {
      path:"*/:id",
      name:"sls",
   //   alias:"a",
  //    redirect:"/",
      component:sls,
      children:[
        {
          path:"a",
          components:{
            sls:{
              template:`<div>asa</div>`
            },
            a:{
              template:`<div>assa</div>`
            }
          }
        }
      ]
    }
  ]
})
