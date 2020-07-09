<template>
	<view>
		<view class="row">
			<view class="row-1">
				<text>{{list.user}}</text>
				<image :src="list.url" mode="aspectFill" style="width: 50px;height: 50px;border-radius:25px ;"></image>
				<button type="primary" size="mini" @click="add(list.user)">添加好友</button>
			</view>
		</view>
	</view>
</template>

<script>
	export default {
		data() {
			return {
				user:null,
				list:"",
				my:""
			}
		},
		methods: {
			add:function(us){
				console.log(us)
				const vue=this;
				uni.getStorage({
					key:"user",
					success:function(res){
						vue.my=res.data
						if(us==res.data){
							
							uni.showToast({
								title:"不能添加自己",
								success:function(){
									setTimeout(()=>{
										uni.hideToast()
									},1500)
								}
							})
						}
						else{
							uni.request({
								url:"https://25q686n876.qicp.vip/tp5/publica/index/Bii/Add",
								method:"POST",
								data:{myself:vue.my,other:vue.list.user},
								dataType:"json",
								header:{
									"Content-Type":"application/x-www-form-urlencoded"
								},
								success:function(res){
									console.log(res.data)
									if(res.data.info=="200"){
										uni.showToast({
											title:"添加成功",
											success:function(){
												setTimeout(()=>{
													uni.hideToast()
													uni.navigateBack({
														animationDuration:1500
													})
												},1500)
											}
										})
									}
								}
							})
						}
					}
				})
				// uni.$on("user",(res)=>{
				// 	console.log(res)
					
				// })
			}
		},
		onLoad:function(){
			const vue=this;
			uni.getStorage({
				key:"admin",
				success:function(res){
					vue.user=res.data
					// uni.removeStorage({
					// 	key:""
					// })
					uni.request({
						url:"https://25q686n876.qicp.vip/tp5/publica/index/Bii/search",
						method:"POST",
						data:{user:vue.user},
						dataType:"json",
						header:{
							"Content-Type":"application/x-www-form-urlencoded"
						},
						success:function(res){
							
							if(res.data.err=="404"){
								
									uni.showToast({
										title:"用户不存在",
										success:function(){
											setTimeout(()=>{
												uni.hideToast()
												uni.navigateBack({
													animationDuration:1500
												})
											},1500)
										}
									})
								
							}
							else{
								console.log(res.data)
								vue.list=res.data
							}
						}
					})
				}
			})
		}
	}
</script>

<style>

</style>
