import Vue from 'vue'
import vuex from 'vuex'
import axios from 'axios'
import qs from 'qs'
axios.defaults.baseURL="http://localhost:8000/tp5/"
Vue.use(vuex);
const state={//仓库
    user:"liu",
    pass:"yong",
    page:[],
    index:0,
    info:"100",
    phone:"",
    search:"",
    text:"",
    book:""
}
export const info=state.info.success;
const mutations={//同步提交
    hello(state,a){//两个回调参数一个state，一个形参
        console.log("hello world"+a.a+state.pass)
        this.state.user="liuyu"
    },
    page(state){
        const data={
            params:{
                a:state.index
            }
        }
        axios.get("publica/index/Api/page",data,{headers:{"Content-Type":"application/json"}}).then(res=>{
            state.page=res.data.b
        })
    },
    zhu(state,pho){
        const ph={
                phone:pho
        }
        const header={
            headers:{
                "Content-Type":"application/x-www-form-urlencoded"
            }
        }
        axios.post("publica/index/Api/zhu",qs.stringify(ph),header).then(res=>{
                state.info=res.data
        })
    },
    search(state){
        const data={
            params:{
                inf:null
            }
        }
        const header={
            headers:{
                "Content-Type":"application/json"
            }
        }
        axios.get("publica/index/Api/search",data,header).then(res=>{
            state.text=res.data
        })
    },
    book(state){
        const data={
            params:{
                book:null
            }
        }
        const header={
            headers:{
                "Content-Type":"application/json"
            }
        }
        axios.get("publica/index/Api/book",data,header).then(res=>{
            state.book=res.data
        })
    }
   
    
}
const actions={//分发dispatch
    hel(con){//{commit}
        con.commit("hello",{a:10,b:11})
    },
    page(con){
        con.commit("page",);
    },
    zhu(con){
        con.commit("zhu",state.phone)
    },
    search(con){
        con.commit("search")
    },
    book(con){
        con.commit("book")
    }
}
const getters={//获取属性
    he(state){
        return  state.user;
    }
}
const ma={//模块
  state  
}
const modules={//模块
    ma:ma
}
export  default new vuex.Store({
    state,
    mutations,
    actions,
    getters,
    modules
    
})
