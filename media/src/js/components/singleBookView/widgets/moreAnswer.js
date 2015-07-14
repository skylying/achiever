var React = require('react');

var MoreAnswer = React.createClass({
    render: function() {
	    var isPull = this.props.isPull ? 'pull-right' : '';
	    return (
		    <div className={isPull}>
		        <span>查看更多答案</span>
			    <span className="glyphicon glyphicon-hand-down"></span>
		    </div>
	    )
    }
});

module.exports = MoreAnswer;