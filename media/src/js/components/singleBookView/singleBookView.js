/** @jsx React.DOM */
var React = require('react');
var BookProfile = require('./bookProfile');
var BookHistory = require('./bookHistory');
var BookDigest = require('./bookDigest');

var SingleBookView = React.createClass({
    render: function() {
	    return (
		    <div>
			    <BookProfile />
			    <BookHistory />
			    <BookDigest />
		    </div>
	    )
    }
});

module.exports = SingleBookView;