import Vue from 'vue'
import vuex from 'vuex'
Vue.use(vuex);
const state={//仓库
    user:"liu",
    pass:"yong"
}
const mutations={//同步提交
    hello(state,a){//两个回调参数一个state，一个形参
        console.log("hello world"+a.a+state.pass)
        this.state.user="liuyu"
    }
}
const actions={//分发dispatch
    hel(con){//{commit}
        con.commit("hello",{a:10,b:11})
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
