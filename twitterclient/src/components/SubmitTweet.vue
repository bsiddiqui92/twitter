<template>
	<div>
		<textarea rows="4" cols="50" 
					v-model="taValue"
					:keyup="updateCurrentTweet(taValue)"  
					:disabled="(chars >= 140) ? '' : disabled">	
		</textarea>
		<button type="button" @click="submitTweet">Tweet</button><br/>
		<span class="limiter">{{charactersLeft}}</span>
	</div>
</template>

<script>

	import { mapActions } from 'vuex';
	import { mapGetters } from 'vuex';

	export default {
		data() {
			return {
				taValue: '',
				chars: ''			
			}
		},
		methods: {
			...mapActions([
				'submitTweet', 
				'updateCurrentTweet'
			])
		},
		computed: {
		    charactersLeft() {
		        var chars = this.taValue.length,
		            limit = 140;
		            this.chars = chars; 
		        return (limit - chars) + " / " + limit + "characters remaining";
		      }
		}
	}
</script>

<style>
</style>


