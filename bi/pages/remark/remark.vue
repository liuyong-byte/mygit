<template>
	<view>
		<view class="col">
			<view class="col-1" v-for="item in list" :key="item.id">
				<text>{{item.other}}</text>
				<view>
					{{item.speak}}
				</view>
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
		onLoad:function(options){
			const vue=this;
		// #ifdef H5
		uni.getStorage({
			key:"remark",
			success:function(res){
				uni.request({
					url:"https://25q686n876.qicp.vip/tp5/publica/index/Bii/Look",
					method:"POST",
					header:{
						"Content-Type":"application/x-www-form-urlencoded"
					},
					data:{user:res.data.user,time:res.data.time},
					dataType:"json",
					success:function(res){
						vue.list=res.data.info
					}
				})
			}
		})
		// #endif
		
		uni.getStorage({
			key:"remark",
			success:function(res){
				uni.request({
					url:"https://25q686n876.qicp.vip/tp5/publica/index/Bii/Look",
					method:"POST",
					header:{
						"Content-Type":"application/x-www-form-urlencoded"
					},
					data:{user:res.data.user,time:res.data.time},
					dataType:"json",
					success:function(res){
						vue.list=res.data.info
					}
				})
			}
		})
		
		// #ifdef APP-PLUS
		uni.request({
			url:"https://25q686n876.qicp.vip/tp5/publica/index/Bii/Look",
			method:"POST",
			header:{
				"Content-Type":"application/x-www-form-urlencoded"
			},
			data:{user:options.user,time:options.time},
			dataType:"json",
			success:function(res){
				vue.list=res.data.info
			}
		})
		// #endif
		}
	}
</script>

<style>

</style>
