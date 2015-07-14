/** @jsx React.DOM */
var React = require('react');

var SectionEdit = React.createClass({
    render: function() {
	    return (
		    <div>
			    <h1>選擇您想編輯的區塊</h1>
			    <div className="row">
				    <div className="col-md-3">
					    <button className="btn btn-default btn-edit-block">時空背景</button>
				    </div>
				    <div className="col-md-3">
					    <button className="btn btn-default btn-edit-block">書摘</button>
				    </div>
				    <div className="col-md-3">
					    <button className="btn btn-default btn-edit-block">讀後賞析</button>
				    </div>
				    <div className="col-md-3"></div>
			    </div>
		    </div>
	    )
    }
});

module.exports = SectionEdit;