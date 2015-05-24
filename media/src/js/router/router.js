/** @jsx React.DOM */
var React = require('react');
var SingleBookView = require('../components/singleBookView/singleBookView');
var BookThumbnailView = require('../components/bookThumbnailView/bookThumbnailView');

var Router = React.createClass({
	getInitialState: function() {
	    return {
		    component: <div></div>
	    }
	},
	/**
	 * Load different component according to different route as Router component mount
	 */
	componentDidMount: function() {
		var route = this.parseRoute();
		switch(route) {
			case 'book':
				this.setState({component: <SingleBookView data={this.props.data} />});
				break;
			default:
				this.setState({component: <BookThumbnailView data={this.props.data} />});
				break;
		}
	},
    render: function() {
	    return (
		    <div>
		        {this.state.component}
		    </div>
	    )
    },
	/**
	 * Method to parse routing
	 *
	 * @returns string
	 */
	parseRoute: function() {

		var host = window.location.host,
			pathName = window.location.pathname;

		if (host == 'localhost') {
			var local = pathName.replace('/bookbeacon/', '').split('/');
			return local[0];
		} else {
			var server = pathName.slice(1).split('/');
			return server[0];
		}
	}
});

module.exports = Router;