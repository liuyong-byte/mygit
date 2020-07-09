<template>
	<view class="col">
		收藏
		{{this.$store.state.msg}}
		
		
		<view class="col-1">
			<!-- <image :src="a.url" :key="a.id" v-for="a in url" mode="" style="width: 60%;"></image> -->
			<image v-for="a in url" default="图片如下" :key="a.id" :src="a.url" style="width: 60%;"></image>
		</view>
		<button type="primary" size="mini" @click="upload">上传</button>
	</view>
</template>

<script>
	export default {
		data() {
			return {
				url:""
			}
		},
		methods: {
			upload:function(){
				uni.chooseImage({
					success:function(res){
						console.log(res)
					}
				})
			}
		},
		created(options) {
			console.log(this.$store.state.img)
			this.$store.state.img.shift();
			this.url=this.$store.state.img
			
			
		},
		onLoad(options) {
			console.log(options)
			this.$store.state.index=this.$store.state.index+1
			const data={
				id:this.$store.state.index,
				url:options.url
			}
			this.$store.state.img.push(data)
			
		}
	}
</script>

<style>

</style>
