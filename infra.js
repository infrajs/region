
Event.one('Controller.oninit', function () {
	Template.scope['Region'] = {};
	Template.scope['Region']['get'] = function () {
		return Region.get();
	};
});
