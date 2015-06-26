/** @jsx React.DOM */
var React = require('react');
var Book = require('./book');
var SearchBar = require('./searchBar');

var BookThumbnailView = React.createClass({
	getInitialState: function() {
		return {data: this.props.data};
	},
	render: function() {

		var books = this.state.data.books,
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
						<SearchBar addNewBookLink={this.props.data.addNewBookLink} />
					</div>
				</div>
			</div>
		);
	}
});

module.exports = BookThumbnailView;