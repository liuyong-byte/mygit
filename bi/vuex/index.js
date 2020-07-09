import Vue from 'vue'
import vuex from 'vuex'
Vue.use(vuex);
var state={
	msg:"hello world",
	you:"sj",
	img:[{id:null,url:null}],
	index:0,
	admin:""
}
var actions={
	but:function(cons){
		cons.commit("but",1)//commit同步提交mutations dispatch异步提交actions
	}
}
var ma={
	state:state
}
var  modules={
	ma:ma
}

var mutations={
	but:function(state,a){
		console.log(state.msg+a);
	}
}
var  getters={
	val:function(state){
		return 123;
	}
}
export  default new vuex.Store({
    state,
    mutations,
    actions,
    getters,
    modules
    
})