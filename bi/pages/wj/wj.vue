<template>
	<view>
		<input type="text" placeholder="输入邮箱" v-model="email" style="border: 1px solid #007AFF;" />
		<button type="primary" size="mini" @click="but">提交</button>
	</view>
</template>

<script>
	export default {
		data() {
			return {
				email:""
			}
		},
		methods: {
			but:function(){
				const vue=this;
				uni.request({
					url:"http://25q686n876.qicp.vip/PHPMailer/mail.php",
					data:{email:vue.email},
					dataType:"json",
					method:"POST",
					header:{
						"Content-Type":"application/x-www-form-urlencoded"
					},
					success:function(res){
						console.log(res.data)
					}
				})
			}
		}
	}
</script>

<style>

</style>
