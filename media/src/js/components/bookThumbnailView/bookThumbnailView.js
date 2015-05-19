/** @jsx React.DOM */
var React = require('react');
var Book = require('./book');

var BookThumbnailView = React.createClass({
	getInitialState: function() {
		return {data: this.props.data};
	},
	render: function() {

		var books = this.state.data,
			bookList = [];

		books.forEach(function(book, index) {

			bookList.push(
				<Book data={book} />
			)
		});

		return (
			<div className="container-fluid" id="thumbnail-view">
				<div className="row">
					<div className="col-md-9">
						{bookList}
					</div>
					<div className="col-md-3">
						<h1>Right column</h1>
					</div>
				</div>
			</div>
		);
	}
});

module.exports = BookThumbnailView;