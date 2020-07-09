<template>
	<view class="col">
			<view class="col-1">
				<view class="row">
					<view class="row-1">
						<button @click="show(true)" style="margin-left: 40%;margin-right: 30%;" type="primary" size="mini">登录</button>
						
					</view>
					<view class="row-1">
						<button @click="show(false)" type="primary" size="mini" style="margin-left: 40%;margin-right: 30%;">注册</button>
					</view>
				</view>
			</view>
			<view class="col-1" v-show="bool">
				<view style="text-align: center;">
					欢迎来到登录界面
				</view>
				<form @submit="dsub" @reset="dres">
					<view class="col">
						<view class="col-1">
						<text>账号</text>
						<input name="user" type="text" value="" />
						</view>
						<view class="col-1">
						<text>密码</text>
						<text ref="text" style="color: #FFA200;" @click="dchange">显示密码</text>
						<text @click="wj">忘记密码</text>
						<input name="pass" type="password" value="" />
						</view>
					</view>
					<view class="row">
						<view class="row-1">
							<button form-type="submit" style="margin-left: 40%;margin-right: 30%;" type="primary" size="mini">确定</button>
							
						</view>
						<view class="row-1">
							<button form-type="reset" type="primary" size="mini" style="margin-left: 40%;margin-right: 30%;">重置</button>
						</view>
					</view>
				</form>
			</view>
			<view class="col-1" v-show="!bool">
				<view style="text-align: center;">
					欢迎来到注册界面
				</view>
				<form @submit="zsub" @reset="zres">
					<view class="col">
						<view class="col-1">
						<text>账号</text>
						<input name="user" type="text" value="" />
						</view>
						<view class="col-1">
						<text>密码</text>
						<text style="color: #FFA200;" @click="zchange">{{text}}</text>
						<input id="zpass" ref="zpass" name="pass" :type="type" value="" />
						</view>
					</view>
					<view class="row">
						<view class="row-1">
							<button form-type="submit" style="margin-left: 40%;margin-right: 30%;" type="primary" size="mini">注册</button>
							
						</view>
						<view class="row-1">
							<button form-type="reset" type="primary" size="mini" style="margin-left: 40%;margin-right: 30%;">重置</button>
						</view>
					</view>
				</form>
			</view>
			
	</view>
</template>

<script>
	export default {
		data() {
			return {
				bool:!true,
				change:true,
				type:"password",
				text:"显示",
				prt:0,
				
			}
		},
		methods: {
			gps:function(){
				
			},
			wj:function(){
				uni.navigateTo({
					url:"../wj/wj"
				})
			},
			upload:function(){
				const vue=this;
				uni.chooseImage({
					success(res) {
						const path=res.tempFilePaths;
						const up=uni.uploadFile({
							url:"https://25q686n876.qicp.vip/tp5/publica/index/Bii/upload",
							filePath:path[0],
							name:"file",
							
							success:function(res){
								console.log(res.data)
							}
						})
						up.onProgressUpdate((res)=>{
							console.log(typeof res.progress)
							vue.prt=res.progress
						})
					}
				})
			}	,
			dsub:function(e){
				const vue=this;
				const admin={
					user:e.detail.value.user,
					pass:e.detail.value.pass
				}
				uni.request({
					url:"https://25q686n876.qicp.vip/tp5/publica/index/Bii/Deng",
					dataType:"json",//这里就是发送http请求 需要https域名设置微信白名单
					method:"POST",
					data:admin,
					header:{
						"Content-Type":"application/x-www-form-urlencoded"
					},
					success:function(res){
						console.log(res.data)
						if(res.data.info=="200"){
							uni.setStorage({
								key:"user",
								data:e.detail.value.user,							
							})
							uni.switchTab({
								url:"../info/info"
							})
						}
						else{
							uni.showToast({
								title:"账号或密码错误",
								duration:1500
							})
						}
					}
					
				})
			},
			dres:function(){
				
			},
			zsub:function(e){
				console.log(e)
				const vue=this;
				const admin={
					user:e.detail.value.user,
					pass:e.detail.value.pass
				}
				
				console.log(admin)
				uni.request({
					url:"https://25q686n876.qicp.vip/tp5/publica/index/Bii/login",
					data:admin,
					method:"POST",
					header:{
						"Content-Type":"application/x-www-form-urlencoded"
					},
					success:function(res){
						
						console.log(res)
						if(res.data.succ=="404"){
							uni.showLoading({
								title:"账号存在"
							})
							setTimeout(()=>{
								uni.hideLoading();
							},1000)
						}
						else{
							vue.$store.state.admin=e.detail.value.user
							uni.setStorage({
								key:"user",
								data:e.detail.value.user,
								success() {
									console.log('成功')
								}
							})
							uni.showLoading({
								title:"注册成功"
							})
							setTimeout(()=>{
								uni.hideLoading();
								
								uni.navigateTo({
									url:"../history/history?user="+e.detail.value.user+""
								})
							},1000)
						}
					}
					
				})
			},
			zres:function(){
				
			},
			show:function(ble){
				this.bool=ble?true:false
			},
			dchange:function(){
				
				 
				
			},
			zchange:function(){
				console.log(this.change)
				
				this.change=this.change?false:true
				if(this.change===false){
					this.type="text"
					this.text="隐藏"
				}
				else{
					this.type="password"
					this.text="显示"
				}
			}
			
		},
		onLoad:function(){
			// const innerAudioContext = uni.createInnerAudioContext();
			// innerAudioContext.autoplay = true;
			// innerAudioContext.src = "http://25q686n876.qicp.vip/tp5/publica/audio/zhaolei.mp3";
			// innerAudioContext.onPlay(() => {
			//   console.log('开始播放');
			// });
			// innerAudioContext.onError((res) => {
			//   console.log(res.errMsg);
			//   console.log(res.errCode);
			// });
		}
	}
</script>

<style>
@import '../../common/index.css';
</style>
