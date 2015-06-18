/** @jsx React.DOM */
var React = require('react');

var AddNewComment = React.createClass({
    render: function() {
	    return (
		    <div className="book-history-placeholder-div">
			    <span className="glyphicon glyphicon-plus-sign"></span>
		    </div>
	    )
    }
});

module.exports = AddNewComment;