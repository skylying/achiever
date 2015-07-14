/** @jsx React.DOM */
var React = require('react');
var ProfileEdit = require('./profileEdit');
var SectionEdit = require('./sectionEdit');

var AddNewBookView = React.createClass({
    render: function() {
	    return (
		    <div>
			    <ProfileEdit />
			    <hr/>
			    <SectionEdit />
		    </div>
	    )
    }
});

module.exports = AddNewBookView;