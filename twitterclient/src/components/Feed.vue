<template>
<div>
	<app-new-tweet></app-new-tweet>
	<app-tweet v-for="tweet in tweets" :tweets="tweet"></app-tweet>
	</div>
</template>

<script>
	import Tweet from './Tweet';
	import NewTweet from './SubmitTweet';  
	import { mapActions } from 'vuex';
	import { mapGetters } from 'vuex';

	export default {
		data() {
			return {
				user: [{username:'bsiddiqui'}]
			}
		}, 
		methods: {
			...mapActions([
				'getTweets'
			])
		},
		components: {
			appTweet: Tweet, 
			appNewTweet: NewTweet
		},
		computed: {
			tweets() {
				console.log(this.$store.getters.getTweets)
				return this.$store.getters.getTweets;
			}
		},  
		created: function() {
			this.getTweets(1); 
		}
	}
</script>

<style>
</style>