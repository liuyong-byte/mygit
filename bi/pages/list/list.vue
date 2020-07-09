<template>
	<view>
		<view class="col">
			<view class="col-1">好友列表</view>
			<view class="col-1" v-for="item in list"  style="background: #F0AD4E;">
				<text>{{item.name}}</text>
				<image :src="item.url" mode="aspectFill" style="width: 50px;height: 50px;border-radius: 25px;"></image>
				<button type="primary" size="mini">聊天</button>
			</view>
		</view>
	</view>
</template>

<script>
	export default {
		data() {
			return {
				list:""
			}
		},
		methods: {
			
		},
		onLoad:function(){
			const vue=this;
			uni.getStorage({
				key:"user",
				success:function(res){
					uni.request({
						url:"https://25q686n876.qicp.vip/tp5/publica/index/Bii/cList",
						method:"POST",
						data:{myself:res.data},
						dataType:"json",
						header:{
							"Content-Type":"application/x-www-form-urlencoded"
						},
						success:function(res){
							console.log(res.data)
							vue.list=res.data
						}
					})
				}
			})
		}
	}
</script>

<style>

</style>
