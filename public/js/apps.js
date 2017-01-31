new Vue({
	el:'body',
	data: {
		message: 'Hello',
		products: [],
		loading: false,
		error: false,
		query: '',
	},
	methods:{
		search: function() {
			this.error = '';
			this.products = [];
			this.loading = true;
			this.$http.get('/api/search?q=' + this.query).then((response) => {
				response.body.error ? this.error = response.body.error : this.products = response.body;
				this.loading = false;
				this.query = '';
			});
		}
	}
});
