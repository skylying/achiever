/** @jsx React.DOM */
var React = require('react');
var BookThumbnailView = require('./components/bookThumbnailView/bookThumbnailView');

/**
 * Single book data format
 */
var singleBook = {
	'path': 'media/image/books/from0to1.jpg',
	'link': window.location.href + 'book'
};

var fakeData = generateFakeBooks(20);

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



React.render(<BookThumbnailView data={fakeData} />, document.getElementById('content'));