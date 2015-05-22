/** @jsx React.DOM */
var React = require('react');
var SearchBar = React.createClass({
	render: function() {
		return (
			<div className="row">
				<div className="col-md-12 col-sm-12 col-xs-12">
					<button className="btn btn-default" style={{width: '100%'}}>Add books</button>
				</div>
			</div>
		)
	}
});

module.exports = SearchBar;