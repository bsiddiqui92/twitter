import Vue from 'vue'; 
import Vuex from 'vuex'; 


Vue.use(Vuex); 

export const store = new Vuex.Store({
	state: {
		tweets: '',
		user_id: '1',
		username: 'bsiddiqui', 
		currentTweet: '' 
	},
	getters: {
		getTweets: state => {
			return state.tweets;
		}, 
		getUsername: state => {
			return state.username;
		}
	},
	mutations: {
		updateTweets: (state, payload) => {
			state.tweets = payload; 
		}, 
		updateUser: (state, payload) => {
			state.user_id = payload.user_id
		}, 
		updateCurrentTweet: (state, payload) => {
			state.currentTweet = payload
		}
	}, 
	actions: {
		getTweets: ({commit, dispatch}, payload) => {
			Vue.http.get('http://localhost:8000/public/index.php/tweet/'+payload)
			.then( response => {
				var tweets = response.body;
				commit('updateTweets', tweets.data);  
			}); 
		}, 
		updateCurrentTweet: ({commit, dispatch}, payload) => {
			commit('updateCurrentTweet', payload); 
		}, 
		submitTweet: ({commit, dispatch, state}, payload) => {
			var reqBody = {
				"message": state.currentTweet, 
				"user_id": state.user_id, 
			};
			reqBody = JSON.stringify(reqBody); 
			Vue.http.post('http://localhost:8000/public/index.php/tweet', reqBody)
			.then( response => {
				dispatch('getTweets');
				alert('Tweet Submitted');    
			}); 			
		}, 
		setUser: ({commit, dispatch}, payload) => {
			commit('updateUser', payload); 
		}
	}
}); 

