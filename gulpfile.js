var gulp = require('gulp');
	uglify = require('gulp-uglify'),
	htmlreplace = require('gulp-html-replace'),
	source = require('vinyl-source-stream'),
	browserify = require('browserify'),
	watchify = require('watchify'),
	reactify = require('reactify'),
	streamify = require('gulp-streamify'),
	notify = require('gulp-notify'),
	connect = require('gulp-connect'),
	less = require('gulp-less'),
	livereload = require('gulp-livereload');

// TODO: Production settings

var path = {
	MINIFIED_JS_OUTPUT_FILE: 'build.min.js',
	JS_OUTPUT_FILE: 'build.js',
	SRC_LESS_FILE: 'media/src/less/style.less',
	SRC_LESS_SCOPE: 'media/src/less/*.less',
	DEST: 'media/dist',
	DEST_JS: 'media/dist/js',
	DEST_CSS: 'media/dist/css',
	DEST_BUILD: 'media/dist/build',
	ENTRY_POINT: './media/src/js/main.js'
};

function bundleErrorHandler(err) {
	if (err) {
		gulp.src('').pipe(notify(err.toString()));
	}
}

gulp.task('watch', function() {

	// Listen localhost
	livereload.listen();

	// Watch less compile
	gulp.watch([path.SRC_LESS_SCOPE], ['less-compile']);

	var watcher  = watchify(browserify({
		entries: [path.ENTRY_POINT],
		transform: [reactify],
		debug: true,
		cache: {}, packageCache: {}, fullPaths: true
	}));

	watcher.on('update', function() {
		watcher.bundle()
			.on('error', bundleErrorHandler)
			.pipe(source(path.JS_OUTPUT_FILE))
			.pipe(gulp.dest(path.DEST_JS))
			.pipe(notify('== Successfully build =='))
			.pipe(livereload())
	})
		.bundle()
		.on('error', bundleErrorHandler)
		.pipe(source(path.JS_OUTPUT_FILE))
		.pipe(gulp.dest(path.DEST_JS))
		.pipe(notify('== Successfully build =='))
		.pipe(livereload())
});

gulp.task('less-compile', function() {
	gulp.src(path.SRC_LESS_FILE)
		.pipe(less())
		.pipe(gulp.dest(path.DEST_CSS))
		.pipe(livereload());
});

gulp.task('default', ['watch']);
