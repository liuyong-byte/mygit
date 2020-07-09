<template>
	<view class="col">
		<view class="col">
			<view class="col-1" v-show="show">
				请登录
			</view>
			<view class="col-1" v-show="!show">
				{{user}} 欢迎您 请上传头像 <button type="primary" size="mini" @click="exit">注销</button>
				
				<image :src="url" mode="aspectFill"></image>
				<view class="col">
					<view class="col-1">
				<button type="primary" size="mini" @click="upload">上传头像</button>			
						 <progress :percent="prt" show-info />
					</view>
				</view>
				<view class="col">
					<view class="col-1">
						<text>发表动态与心情</text>
						<textarea  v-model="text" placeholder="发表动态" style="border: 1px solid #007AFF;" />
						<button type="primary" size="mini" @click="things">提交</button>
					</view>
					<view class="col-1">
						<input v-model="adm" style="width: 80%;border: 1px solid #333333;float: left;" type="text" value="" placeholder="搜索朋友" />
						<button @click="search" type="primary" size="mini" style="float: left;">搜索</button>
						<text style="color: #007AFF;" @click="open">好友列表</text>
					</view>
					<view class="col-1">
						<video :src="src" controls></video>
						<button @click="video" type="primary" size="mini">上传视频</button>
					</view>
				</view>
			</view>
		</view>
	</view>
</template>

<script>
	export default {
		data() {
			return {
				user:null,
				admin:"未登录",
				show:true,
				prt:0,
				url:null,
				text:"hello world",
				img:true,
				adm:"",
				src:""
				
			}
		},
		onLoad() {//加载一次
		//console.log(new Date().toLocaleString())
		
		const vue=this;
			 uni.getStorage({
			 	key:"user",
			 	success:function(res){
			 		vue.user=res.data
					uni.$emit("user",{msg:vue.user})
					if(vue.user===null){
							
							uni.stopPullDownRefresh({
								success(){
									setTimeout(()=>{
										uni.stopPullDownRefresh();
										uni.showLoading({
											title:"请登录",
												mask:true
										})
										setTimeout(()=>{
											uni.hideLoading()
										},2000)
									},3000)
								}
							})
						}
						else{
							
							vue.show=false
							uni.request({
								url:"https://25q686n876.qicp.vip/tp5/publica/index/Bii/tou",
								method:"POST",
								dataType:"json",
								data:{user:vue.user},
								header:{
									"Content-Type":"application/x-www-form-urlencoded"
								},
								success:function(res){
									vue.img=false
									vue.url=res.data.url
								}
							})
							uni.startPullDownRefresh({
								success() {
									setTimeout(()=>{
										uni.stopPullDownRefresh()
									},1000)
								}
							})
						}
					
			 	}
			 })
			 
			 console.log(this.user)
			},
		methods: {
			video:function(){
				const vue=this;
				uni.chooseVideo({
					success:function(res){
					const path=res.tempFilePath;
					vue.src=path												
					// const up=uni.uploadFile({
					// 	           // url:"http://localhost:8000/tp5/publica/index/Bii/Video",      
					// 				url:"http://25q686n876.qicp.vip/tp5/publica/index/Bii/Video",
					// 	            filePath:path,
									
					// 	            name:'video',
					// 	            success: (res) => {                    
					// 	             console.log(res)						                                
					// 	                }
					// 	           })					
					}
				})
			},
			exit:function(){
				uni.setStorage({
					key:"user",
					data:null,
					success:function(){
						uni.showToast({
							title:"退出成功",
							duration:1500,
							success:function(){
								setTimeout(()=>{
									
									uni.reLaunch({
										url:"../user/user"
									});
								},1500)
							}
						})
						setTimeout(()=>{
							uni.hideToast();
							
						},1500)
						
					}
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
								formData:{
									user:vue.user
								},
								success:function(res){
									const obj=JSON.parse(res.data)
									vue.url=obj.url
									console.log(vue)
								}
							})
							up.onProgressUpdate((res)=>{
								console.log(typeof res.progress)
								vue.prt=res.progress
							})
						}
					})
				
				
			},
			open:function(){
				uni.navigateTo({
					url:"../list/list"
				})
			},
			//json返回特殊符号会转译 返回字符串格式 需要json.parse() json.stringify(obj,key,number||string)
			things:function(){
				const vue=this;
				const time=new Date().toLocaleString()
				uni.getStorage({
					key:"user",
					success:function(res){
						vue.user=res.data
						const content=vue.text
						const url=vue.url
						//console.log(content)
						const data=new Date();
						const time=data.getFullYear()+"年"+data.getMonth()+"月"+data.getDay()+"日"+data.getHours()+"时"+data.getMinutes()+"分"+data.getSeconds()+"秒";
						uni.request({
							url:"https://25q686n876.qicp.vip/tp5/publica/index/Bii/Submit",
							method:"POST",
							data:{user:vue.user,content:content,time:time,url:url},
							dataType:"json",
							header:{
								"Content-type":"application/x-www-form-urlencoded"
							},
							success:function(res){
								if(res.data.info=="200"){
									uni.showLoading({
										title:"发表成功",
										success:function(){
											setTimeout(()=>{
												uni.hideLoading()
												uni.switchTab({
													url:"../dong/dong"
												})
											},1500)
										}
									})
								}
								else{
									uni.showLoading({
										title:"发表失败",
										success:function(){
											setTimeout(()=>{
												uni.hideLoading()
												
											},1500)
										}
									})
								}
							}
							
						})
					}
				})
				
			}
			,search:function(){
				const vue=this;
				
				uni.setStorage({
					key:"admin",
					data:vue.adm,
					success:function(){
						uni.navigateTo({
							url:"../search/search"
						})
					}
				})
			}
		}
	}
</script>

<style>

</style>
