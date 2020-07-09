<template>
	<view>
		<view class="row">
			<view class="row-1">
				<button type="primary" @click="all">加载更多</button>
			</view>
		</view>
		<view class="col" style="border: 1px solid #007AFF;">
			<view class="col-1" style="text-align: center;">
				<text>下拉刷新</text>
			</view>
			<view class="col-1" v-for="a in list" :key="a.id">
				<text style="color: #007AFF;">{{a.uadmin}}</text>
				<image :src="a.uimg" mode="aspectFill" style="width:50px;height: 50px;border-radius:25px ;"></image>
				<view class="col">
					<view class="col-1">
						{{a.uinfo}}
					</view>
					<view class="col-1">
						{{a.utime}}
					</view>				
				</view>				
					<text>点赞</text>
					<text @click="talk(a.uadmin,a.uinfo,a.utime)">评论</text>
					<text style="color: #007AFF;" @click="look(a.uadmin,a.utime)">查看评论</text>
			</view>
			
		</view>		
		
		
	</view>
	
</template>

<script>
	export default {
		data() {
			return {
				list:"",
				id:0,
				other:""
			}
		},
		methods: {
			look:function(user,time){
				const vue=this;
				uni.removeStorage({
					key:"remark"
				})
				
				uni.navigateTo({
					url:"../remark/remark?user="+user+'&time='+time,
					success:function(){
						uni.setStorage({
							key:"remark",
							data:{user:user,time:time,other:vue.other}
						})
					}
				})
			},
			talk:function(uadmin,uinfo,utime){
				const vue=this
				uni.removeStorage({
					key:"id"
				})
				// #ifdef MP-WEIXIN
				const admin={
					user:uadmin,
					info:uinfo,
					time:utime,
					other:vue.other
				}
				uni.navigateTo({
					url:"../talk/talk?user="+uadmin+'&info='+uinfo+'&time='+utime+'&other='+vue.other,
					success:function(){
						uni.setStorage({
							key:"id",
							data:{user:uadmin,info:uinfo,time:utime,other:vue.other}
						})
					}
				})
				// #endif
				
				// #ifdef APP-PLUS
				const admin={
					user:uadmin,
					info:uinfo,
					time:utime,
					other:vue.other
				}
				uni.navigateTo({
					url:"../talk/talk?user="+uadmin+'&info='+uinfo+'&time='+utime+'&other='+vue.other,
					success:function(){
						uni.setStorage({
							key:"id",
							data:{user:uadmin,info:uinfo,time:utime,other:vue.other}
						})
					}
				})
				// #endif
				// #ifdef H5
				const admin={
					user:uadmin,
					info:uinfo,
					time:utime,
					other:vue.other
				}
				uni.navigateTo({
					url:"../talk/talk?user="+uadmin+'&info='+uinfo+'&time='+utime+'&other='+vue.other,
					success:function(){
						uni.setStorage({
							key:"id",
							data:{user:uadmin,info:uinfo,time:utime,other:vue.other}
						})
					}
				})
				// #endif
			},
			all:function(){
				// uni.showToast({
				// 	title:"加载中",
				// 	duration:1500
				// })
				const vue=this;
				this.id=this.id+1;
				uni.showLoading({
					title:"加载中",
					success() {
						setTimeout(()=>{
							uni.hideLoading()
							uni.request({
											url:"https://25q686n876.qicp.vip/tp5/publica/index/Bii/xin",
											method:"POST",
											data:{id:vue.id},
											dataType:"json",
											header:{
												"Content-Type":"application/x-www-form-urlencoded"
											},
											success:function(res){
												
												vue.list=res.data;
											}
										})
						},1500)
					}
				})
				
				}
		},
		onLoad() {
			const vue=this;
			uni.getStorage({
								key:"user",
								success:function(res){
									vue.other=res.data
									console.log(vue.other)
								}
							})
			const data={
				id:0
			}
			uni.request({
				url:"https://25q686n876.qicp.vip/tp5/publica/index/Bii/xin",
				method:"POST",
				data:data,
				dataType:'json',
				header:{
					"Content-Type":"application/x-www-form-urlencoded"
				},
				success:function(res){
					
					vue.list=res.data;
				}
			})
		},
		onPullDownRefresh:function(){
			console.log(123)
			const vue=this;
			setTimeout(()=>{
				uni.stopPullDownRefresh();
				uni.request({
					url:"https://25q686n876.qicp.vip/tp5/publica/index/Bii/xin",
					method:"POST",
					header:{
						"Content-Type":"application/x-www-form-urlencoded"
					},
					success:function(res){
						
						vue.list=res.data;
					}
				})
			},1500)
		}
	}
</script>

<style>

</style>
