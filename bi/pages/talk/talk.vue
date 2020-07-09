<template>
	<view>
		<view class="col">
			<view class="col-1">
				<text>{{user}}</text>
				<view >
					{{info}}
				</view>
				<view>
				<text>{{time}}</text>
				</view>
			</view>
			<view class="col-1" style="border: 1px solid #007AFF;">
				<textarea v-model="val" placeholder="评论" />
			</view>
			<view class="col-1">
				<button type="primary" size="mini" @click="but">提交</button>
			</view>
		</view>
	</view>
</template>

<script>
	export default {
		data() {
			return {
				val:"",
				user:"",
				time:"",
				info:"",
				other:""
			}
		},
		methods: {
			but:function(){
				const vue=this;
				uni.request({
					
					url:"https://25q686n876.qicp.vip/tp5/publica/index/Bii/Talk",
					data:{user:vue.user,time:vue.time,speak:vue.val,other:vue.other},
					dataType:"json",
					header:{
						"Content-Type":"application/x-www-form-urlencoded"
					},
					method:"POST",
					success:function(res){
						if(res.data.info=="200"){
							uni.showToast({
								title:"评论成功",
								success:function(){
									setTimeout(()=>{
										uni.hideToast();
										uni.navigateBack({
											animationDuration:1000
										})
									},1500)
								}
							})
						}
						else{
							uni.showLoading({
								title:"评论失败",
								success:function(){
									setTimeout(()=>{
										uni.hideLoading();
										uni.navigateBack({
											animationDuration:1000
										})
									},1500)
								}
							})
						}
					}
				})
			}
		},
		onLoad:function(options){
			console.log(options)
			const vue=this;
			// #ifdef H5  
			uni.getStorage({
				key:"id",
				success:function(res){
					vue.user=res.data.user
					vue.time=res.data.time
					vue.info=res.data.info
					vue.other=res.data.other
				}
			})
			// #endif
			
			// #ifdef APP-PLUS
			vue.user=options.user
			vue.time=options.time
			vue.info=options.info
			vue.other=options.other
			// #endif
			
			// #ifdef MP-WEIXIN 
			uni.getStorage({
				key:"id",
				success:function(res){
					vue.user=res.data.user
					vue.time=res.data.time
					vue.info=res.data.info
					vue.other=res.data.other
				}
			})
			// #endif
		}
	}
</script>

<style>

</style>
