// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import store from './vuex/vuex'
import '../element/index'
Vue.config.productionTip = false;
//Vue.prototype.api=api;
//将所有接口放入api对象中，然后将api对象export出去
//避免每个涉及到数据请求的文件都引入apis.js文件
//在main.js文件将apis.js文件引入
/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  components: { App },
  template: '<App/>'
})
