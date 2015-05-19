/** @jsx React.DOM */
var React = require('react');

var Book = React.createClass({
	getInitialState: function() {
		return {
			path: this.props.data.path
		};
	},
	render: function()
	{
		return (
			<div className="col-md-3 col-sm-6 col-xs-12 column-padding">
				<img src={this.state.path} style={this.getImageStyle()}/>
			</div>
		)
	},
	getRowStyle: function() {
		return {
			paddingBottom: 20
		}
	},
	getImageStyle: function() {
		return {
			width: 100
		}
	}
});

module.exports = Book;