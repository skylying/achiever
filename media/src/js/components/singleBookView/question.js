/** @jsx React.DOM */
var React = require('react');
var MoreAnswer = require('./widgets/moreAnswer');
var AddNewComment = require('./widgets/addNewComment');
var $ = require('jquery');

var Question = React.createClass({
    render: function() {
	    return (
		    <div className="row">
			    <h1>最常提的問題</h1>
			    <ul id="question-tab" className="nav nav-tabs" role="tablist">
				    <li role="presentation" className="active"><a href="#answered" onClick={this.tabOnClickHandler} aria-controls="answered" role="tab" data-toggle="tab">已回答 (7)</a></li>
				    <li role="presentation" className=""><a href="#pending" onClick={this.tabOnClickHandler} aria-controls="pending" role="tab" data-toggle="tab">待回答 (3)</a></li>
			    </ul>

			    <div className="tab-content">
				    <div id="answered" role="tabpanel" className="tab-pane active">
					    <h3>為什麼曉萱要自殺呢 </h3>
					    <div className="vote pull-left">
						    <div className="vote-wrap text-center">
							    <span className="glyphicon glyphicon-ok"></span>
							    <span className="glyphicon glyphicon-chevron-up"></span>
							    <span className="votes">22</span>
							    <span className="glyphicon glyphicon-chevron-down"></span>
						    </div>
					    </div>
					    <div className="answer pull-left">
						    <p>
							    學小院異謝他的到時不做查今。岸了只下發招管有南了寶此建動不麼是，職送有智麼懷，證期比的小感也……時散省過！氣果請個初著與像準市！你兒強場起質因真足成他。就國的：一此外片方港情意雙河，可方點子路下，他由自，他縣早引操朋廠開。
							    <br/>
							    <br/>
							    終片入心根景點半育會千來情的點方算廣，客下後男路坡房她……解心省……小了他洋心。我記兒球陽送竟！好香受問開；下道況談這接司官消西臺我功、細生成到一公會認山許病治：小商十可這們有上：到不四業分白各顯態成失國覺下什世和善站球母直年足。比電等陽當年來認知親身來假標任子而也過作動這紅團車壓相：住史我的去子低……孩下士著手答續經到女保對社它的，麼到子油快去學解議重味際可海的民待便達使小史可回拿題以明斷！張雨據就有真來對畫、的更他最立在北成化始體整，一出前灣及車說木你有、狀爭光，思未出一如企以了美臺見在電一家你之影團。做做己的理流想人每……也口氣東念心禮口他腳全些市家可。了子果我預言去山細
						    </p>
					    </div>
					    <div className="clearfix"></div>
					    <MoreAnswer isPull={true} />
				    </div>

				    <div id="answered" role="tabpanel" className="tab-pane active">
					    <h3>匡復對一晴的感情是真的嗎？ </h3>
					    <div className="vote pull-left">
						    <div className="vote-wrap text-center">
							    <span className="glyphicon glyphicon-ok"></span>
							    <span className="glyphicon glyphicon-chevron-up"></span>
							    <span className="votes">7</span>
							    <span className="glyphicon glyphicon-chevron-down"></span>
						    </div>
					    </div>
					    <div className="answer pull-left">
						    <p>
							    學小院異謝他的到時不做查今。岸了只下發招管有南了寶此建動不麼是，職送有智麼懷，證期比的小感也……時散省過！氣果請個初著與像準市！你兒強場起質因真足成他。就國的：一此外片方港情意雙河，可方點子路下，他由自，他縣早引操朋廠開。							    <br/>
							    <br/>
							    終片入心根景點半育會千來情的點方算廣，客下後男路坡房她……解心省……小了他洋心。我記兒球陽送竟！好香受問開；下道況談這接司官消西臺我功、細生成到一公會認山許病治：小商十可這們有上：到不四業分白各顯態成失國覺下什世和善站球母直年足。比電等陽當年來認知親身來假標任子而也過作動這紅團車壓相：住史我的去子低……孩下士著手答續經到女保對社它的，麼到子油快去學解議重味際可海的民待便達使小史可回拿題以明斷！張雨據就有真來對畫、的更他最立在北成化始體整，一出前灣及車說木你有、狀爭光，思未出一如企以了美臺見在電一家你之影團。做做己的理流想人每……也口氣東念心禮口他腳全些市家可。了子果我預言去山細						    </p>
					    </div>
					    <div className="clearfix"></div>
					    <MoreAnswer isPull={true} />
				    </div>

				    <div id="pending" role="tabpanel" className="tab-pane">
					    <AddNewComment />
				    </div>
			    </div>
		    </div>
	    )
    },
	tabOnClickHandler: function(e) {
		e.preventDefault();
		$(this).tab('show')
	}
});

module.exports = Question;