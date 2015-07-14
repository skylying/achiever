/** @jsx React.DOM */
var React = require('react');

var ProfileEdit = React.createClass({
	render: function() {
		return (
			<div className="row">
				<div className="col-md-3 col-sm-4 col-xs-12 text-center">
					<div className="placeholder-book"><span className="glyphicon glyphicon-camera"></span></div>
				</div>
				<div className="col-md-4 col-sm-5 col-xs-12">
					<input placeholder="輸入書名" />
					<div className="btn-group btn-group-justified" role="group" aria-label="...">
						<div className="btn-group" role="group">
							<button type="button" className="btn btn-default">輕薄</button>
						</div>
						<div className="btn-group" role="group">
							<button type="button" className="btn btn-default">中等</button>
						</div>
						<div className="btn-group" role="group">
							<button type="button" className="btn btn-default">厚重</button>
						</div>
					</div>
					<div className="badge-group">
						<div className="badge-group-wrap">
							<span className="glyphicon glyphicon-glass badge-item-icon"></span>
							<span className="badge-item-text">晨讀</span>
						</div>

						<span className="glyphicon glyphicon-glass"></span>
						<span className="glyphicon glyphicon-glass"></span>
					</div>
					<div>
						<span>推薦閱讀地點：</span>
						<span>台大校園</span>
					</div>
					<div>
						<span>(午後)</span>
						<span>(通勤)</span>
					</div>
					<button className="btn btn-success">勵志</button>
				</div>
			</div>
		)
	}
});

module.exports = ProfileEdit;