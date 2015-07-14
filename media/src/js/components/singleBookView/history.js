var React = require('react');
var AddNewComment = require('./widgets/addNewComment');

var BookProfile = React.createClass({
	render: function() {
		return (
			<div className="row">
				<h3>時空背景</h3>
				<AddNewComment />
			</div>
		)
	}
});

module.exports = BookProfile;