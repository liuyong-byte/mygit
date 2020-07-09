<template>
	<view class="col">
		<view class="col-1">
			<view class="row">
				<view class="row-2">
					<view class="row">
						<view class="row-3">
							<input type="text" value=""placeholder="搜索" />
							
						</view>
						<view class="row-1">
							<button type="primary" size="mini">搜索</button>
						</view>
					</view>
				</view>
				<view class="row-1">
					<view class="row">
						<view class="row-1">
							<navigator url="../shou/shou" open-type="navigate">收藏</navigator>
						</view>
						<view class="row-1">
							<navigator url="../history/history">记录</navigator>
						</view>
					</view>
				</view>
			</view>
		</view>
		<view v-once class="col-1" style="margin-top: 20px;">
			<swiper :indicator-dots="true" :autoplay="true" :interval="3000" :duration="1000">
				<swiper-item>
					<view class="swiper-item">
						<image src="/static/1.jpg"  style="width: 100%;"></image>
					</view>
				</swiper-item>
				<swiper-item>
					<view class="swiper-item">
						<image src="/static/2.jpg"  style="width: 100%;"></image>
					</view>
				</swiper-item>
				<swiper-item>
					<view class="swiper-item">
						<image src="/static/4.jpg"  style="width: 100%;"></image>
					</view>
				</swiper-item>
			</swiper>
		</view>
		<view class="col-1">
			<view class="" v-for="a in img" :key="a.id" style="width: 50%;box-sizing: border-box;float: left;padding: 10px;">
				<view class="col">
					<view class="col-1">
						<image :src="a.url" style="width: 100%;height: 150px;" mode=""></image>
						<text>小说</text>
						<text>记录</text>
						<text @click="shou(a.url)">收藏</text>
					</view>
				</view>
			</view>		
		</view>
	</view>
</template>

<script lang="ts">
	
	export default {
		data() {
			return {
				title: 'Hello',
				img:[
					{id:"1",url:"/static/1.jpg"},
					{id:"2",url:"/static/2.jpg"},
					{id:"3",url:"/static/4.jpg"},
					{id:"4",url:"/static/7.jpg"}
				]
			}
		},
		onLoad() {
			
		},
		mounted(){
			const a:string="123";
			console.log(a)
		},
		methods: {
			shou:function(url:string):void{
				const ur:any={
					url:"../shou/shou?url="+url+""
				}
				uni.navigateTo(ur)
			}
		},
		
	}
</script>

<style>
@import "../../common/index.css";
</style>
