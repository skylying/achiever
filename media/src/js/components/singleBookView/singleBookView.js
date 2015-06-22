/** @jsx React.DOM */
var React = require('react');
var Profile = require('./profile');
var History = require('./history');
var Digest = require('./digest');
var Review = require('./review');
var Question = require('./question');

var SingleBookView = React.createClass({
    render: function() {
	    return (
		    <div className="singlebook-container">
			    <Profile />
			    <hr/>
			    <History />
			    <hr/>
			    <Digest />
			    <hr/>
			    <Review />
			    <hr/>
			    <Question />


			    <br/>
			    <br/>
			    <br/>
			    <br/>
			    <br/>
		    </div>
	    )
    }
});

module.exports = SingleBookView;