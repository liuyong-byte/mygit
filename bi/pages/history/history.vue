<template>
	<view class="col">
		
		<!-- #ifdef H5 -->
		{{this.$store.state.admin}}
		<!-- #endif -->
		<!-- #ifdef APP-PLUS -->
		{{user}}记录
		<!-- #endif -->
	</view>
</template>

<script>
	export default {
		data() {
			return {
				user:""
			}
		},
		methods: {
			
		},
		onLoad(options) {
			// #ifdef APP-PLUS
			this.user=options.user
			// #endif
			
		}
	}
</script>

<style>

</style>
