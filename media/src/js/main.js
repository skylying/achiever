/** @jsx React.DOM */
var React = require('react');
var BookThumbnailView = require('./components/bookThumbnailView/bookThumbnailView');
var Router = require('./router/router');

(function() {

	if (window.ReactLoader !== undefined) {
		return false;
	}

	/**
	 * Load react App based on different page
	 *
	 * @type {{init: Function}}
	 */
	window.ReactLoader = {
		init: function(data, appendTarget) {

			/**
			 * Single book data format
			 */
			var singleBook = {
				'path': 'media/image/books/werther.jpg',
				'link': window.location.href + 'book'
			};

			/**
			 * Debug function, used to generate fake book thumbnail data
			 *
			 * @param number
			 */
			function generateFakeBooks(number)
			{
				var result = [];
				for (var i = 1; i <= number; i++) {
					result.push(singleBook);
				}
				return result;
			}

			// We should pass data from php to this variable in the future
			var data = {
				"books": generateFakeBooks(20),
				"addNewBookLink": window.location.href + 'new'
			};


			React.render(<Router data={data} />, appendTarget);
		}
	}
})();
