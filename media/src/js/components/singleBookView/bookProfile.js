var React = require('react');

var BookProfile = React.createClass({
    render: function() {
	    return (
		    <div className="row">
		        <div className="col-md-3 col-sm-4 col-xs-12 text-center">
		            <div id="book-cover">
		                <img src="media/image/books/werther.jpg"/>
		            </div>
		        </div>
			    <div className="col-md-4 col-sm-5 col-xs-12">
				    <div id="book-profile">
					    <h2>中年維特之煩惱<small> - 沐林</small></h2>
					    <h4>這本書 6 歲</h4>
					    <hr/>
					    <div>
						    <span>預計閱讀時間：</span>
						    <span className="glyphicon glyphicon-glass"></span>
						    <span className="glyphicon glyphicon-glass"></span>
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
		    </div>
	    )
    }
});

module.exports = BookProfile;