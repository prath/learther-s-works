/**
 * Theme Gulp Task
 *
 * TODO :
 * - custom task to migrate mysql db
 * - custom task to generate changelog
 * - custom task to zip and release
 * - css-flip to support RTL
 */

/**
 * Theme Name init
 */
var themename = 'leathers',
	themenamecap = 'Leathers';

/**
 * Requires
 */
var gulp = require('gulp'),
	changed = require('gulp-changed'),
	cached = require('gulp-cached'),
	jade = require('gulp-jade'),
	less = require('gulp-less'),
	jshint = require('gulp-jshint'),
	prefix = require('gulp-autoprefixer'),
	clean = require('gulp-rimraf'),
	livereload = require('gulp-livereload'),
	path = require('path'),
	es = require('event-stream'),
	chalk = require('chalk'),
	rename = require('gulp-rename'),
	replace = require('gulp-replace'),
	uglify = require('gulp-uglify'),
	concat = require('gulp-concat'),
	minifycss = require('gulp-minify-css'),
	imagemin = require('gulp-imagemin'),
	csscomb = require('gulp-csscomb'),
	jscs = require('gulp-jscs'),
	csslint = require("gulp-csslint"),
	fs = require('fs');
	// finder = require('findit'),
	// find = finder('../includes');

/**
 * [Tasks]
 * =====================================================================================================================
 */

/**
 * Less Task
 */
gulp.task('less', ['clean-css'], function() {
	return es.concat(
		gulp.src('src/less/style.less')
		.pipe(less({
			paths: ['src/less/bootstrap-less', 'src/less/inc/']
		}))
		.pipe(prefix('last 2 version', '> 1%', 'ie 8', 'ie 7', 'ie 9', 'android 2.3', 'android 4', 'opera 12'))
		.pipe(gulp.dest('../')),

		gulp.src(['src/less/*.less', '!src/less/style.less'])
		.pipe(less({
			paths: ['src/less/bootstrap-less', 'src/less/inc/']
		}))
		.pipe(prefix('last 2 version', '> 1%', 'ie 8', 'ie 7', 'ie 9', 'android 2.3', 'android 4', 'opera 12'))
		.pipe(csscomb({
			config: '.csscomb.json'
		}))
		.pipe(gulp.dest('../assets/front/css/'))
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(minifycss())
		.pipe(gulp.dest('../assets/front/css/')),

		gulp.src('src/less/vendor/**/*.css')
		.pipe(gulp.dest('../assets/front/css/'))
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(minifycss())
		.pipe(gulp.dest('../assets/front/css/'))
	);
});

/**
 * Scripts Tasks
 */
gulp.task('scripts', ['clean-js'], function() {
	return es.concat(
		gulp.src('src/js/*.js')
		.pipe(jshint())
		.pipe(jshint.reporter('default'))
		.pipe(gulp.dest('../assets/front/js/'))
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(uglify({
			compress: true
		}))

		.pipe(gulp.dest('../assets/front/js/')),
		gulp.src('src/js/vendor/*.js')
		.pipe(gulp.dest('../assets/front/js/vendor/'))
	);
})

/**
 * Copy dummy-images
 */
gulp.task('copy-dummy', ['clean-dummy'], function() {
	return gulp.src('src/dummy-images/**/*')
		.pipe(gulp.dest('../assets/front/dummy-images/'));
})

/**
 * Copy Images
 */
gulp.task('copy-images', ['clean-images'], function() {
	return gulp.src('src/images/**/*')
		.pipe(gulp.dest('../assets/front/images/'));
})

/**
 * Copy Fonts
 */
gulp.task('copy-fonts', ['clean-fonts'], function() {
	return gulp.src('src/fonts/**/*')
		.pipe(gulp.dest('../assets/front/fonts/'));
})

/**
 * [Watch Tasks]
 * =====================================================================================================================
 */
gulp.task('watch', function() {
	gulp.watch('src/less/**/*.less', function(event) {
		console.log(chalk.red('File : [' + event.path + '] was ' + event.type));
		console.log(chalk.green('running tasks...'));
		gulp.start('less');
	});
	gulp.watch('src/dummy-images/**/*', function(event) {
		console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
		gulp.start('copy-dummy');
	});
	gulp.watch('src/images/**/*', function(event) {
		console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
		gulp.start('copy-images');
	});
	gulp.watch('src/js/**/*', function(event) {
		console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
		gulp.start('scripts');
	});
	gulp.watch('src/fonts/**/*', function(event) {
		console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
		gulp.start('copy-fonts');
	});
});

/**
 * [Default Tasks]
 * =====================================================================================================================
 */
gulp.task('default', [
	'less',
	'copy-images',
	'copy-dummy',
	'scripts',
	'copy-fonts',
	'watch'
]);

/**
 * [Check JS Code Style Tasks]
 * =====================================================================================================================
 */
gulp.task('jscs', function() {
	return gulp.src('src/js/*.js')
		.pipe(jscs());
})

/**
 * [Lint CSS Files]
 * =====================================================================================================================
 */
gulp.task('csslint', function() {
	return gulp.src(['../assets/front/css/theme.css', '../assets/front/css/grid-custom.css', '../assets/front/css/bootstrap-theme.css'])
		.pipe(csslint())
		.pipe(csslint.reporter());
})

/**
 * [Rename and Replace Text Domain]
 * =====================================================================================================================
 */

/**
 * Search and Replace for text domain
 */
gulp.task('tdchange', function() {
	return es.concat(
		gulp.src(['../*'])
		.pipe(replace('\'wpbootstrap\'', '\'' + themename + '\''))
		.pipe(replace('wpbootstrap_', themename + '_'))
		.pipe(replace(' wpbootstrap', ' ' + themename))
		.pipe(replace('wpbootstrap-', themename + '-'))
		.pipe(replace('Wpbootstrap_', themenamecap + '_'))
		.pipe(gulp.dest('../')),
		gulp.src(['../includes/**/*'])
		.pipe(replace('\'wpbootstrap\'', '\'' + themename + '\''))
		.pipe(replace('wpbootstrap_', themename + '_'))
		.pipe(replace(' wpbootstrap', ' ' + themename))
		.pipe(replace('wpbootstrap-', themename + '-'))
		.pipe(replace('Wpbootstrap_', themenamecap + '_'))
		.pipe(gulp.dest('../includes/')),
		gulp.src(['../languages/**/*'])
		.pipe(replace('\'wpbootstrap\'', '\'' + themename + '\''))
		.pipe(replace('wpbootstrap_', themename + '_'))
		.pipe(replace(' wpbootstrap', ' ' + themename))
		.pipe(replace('wpbootstrap-', themename + '-'))
		.pipe(replace('Wpbootstrap_', themenamecap + '_'))
		.pipe(gulp.dest('../languages/')),
		gulp.src(['../layouts/**/*'])
		.pipe(replace('\'wpbootstrap\'', '\'' + themename + '\''))
		.pipe(replace('wpbootstrap_', themename + '_'))
		.pipe(replace(' wpbootstrap', ' ' + themename))
		.pipe(replace('wpbootstrap-', themename + '-'))
		.pipe(replace('Wpbootstrap_', themenamecap + '_'))
		.pipe(gulp.dest('../layouts/')),
		gulp.src(['../_src/src/less/*.less'])
		.pipe(replace('\'wpbootstrap\'', '\'' + themename + '\''))
		.pipe(replace('wpbootstrap_', themename + '_'))
		.pipe(replace(' wpbootstrap', ' ' + themename))
		.pipe(replace('wpbootstrap-', themename + '-'))
		.pipe(replace('Wpbootstrap_', themenamecap + '_'))
		.pipe(gulp.dest('../_src/src/less/'))
	);
})

/**
 * Revert Search and Replace for text domain
 */
gulp.task('tdchangerev', function() {
	return es.concat(
		gulp.src(['../*'])
		.pipe(replace('\'' + themename + '\'', '\'wpbootstrap\''))
		.pipe(replace(themename + '_', 'wpbootstrap_'))
		.pipe(replace(' ' + themename, ' wpbootstrap'))
		.pipe(replace(themename + '-', 'wpbootstrap-'))
		.pipe(replace(themenamecap + '_', 'Wpbootstrap_'))
		.pipe(gulp.dest('../')),
		gulp.src(['../includes/**/*'])
		.pipe(replace('\'' + themename + '\'', '\'wpbootstrap\''))
		.pipe(replace(themename + '_', 'wpbootstrap_'))
		.pipe(replace(' ' + themename, ' wpbootstrap'))
		.pipe(replace(themename + '-', 'wpbootstrap-'))
		.pipe(replace(themenamecap + '_', 'Wpbootstrap_'))
		.pipe(gulp.dest('../includes/')),
		gulp.src(['../languages/**/*'])
		.pipe(replace('\'' + themename + '\'', '\'wpbootstrap\''))
		.pipe(replace(themename + '_', 'wpbootstrap_'))
		.pipe(replace(' ' + themename, ' wpbootstrap'))
		.pipe(replace(themename + '-', 'wpbootstrap-'))
		.pipe(replace(themenamecap + '_', 'Wpbootstrap_'))
		.pipe(gulp.dest('../languages/')),
		gulp.src(['../layouts/**/*'])
		.pipe(replace('\'' + themename + '\'', '\'wpbootstrap\''))
		.pipe(replace(themename + '_', 'wpbootstrap_'))
		.pipe(replace(' ' + themename, ' wpbootstrap'))
		.pipe(replace(themename + '-', 'wpbootstrap-'))
		.pipe(replace(themenamecap + '_', 'Wpbootstrap_'))
		.pipe(gulp.dest('../layouts/')),
		gulp.src(['../_src/src/less/*.less'])
		.pipe(replace('\'' + themename + '\'', '\'wpbootstrap\''))
		.pipe(replace(themename + '_', 'wpbootstrap_'))
		.pipe(replace(' ' + themename, ' wpbootstrap'))
		.pipe(replace(themename + '-', 'wpbootstrap-'))
		.pipe(replace(themenamecap + '_', 'Wpbootstrap_'))
		.pipe(gulp.dest('../_src/src/less/'))
	);
})

/**
 * Search and Replace for text domain
 */
// gulp.task('tdchange', function(){
// 	return gulp.src(['../**/*', '!../_src/**/*', '!../.git/**/*', '!../assets/**/*'])
// 		.pipe(replace('\'wpbootstrap\'', '\''+themename+'\''))
// 		.pipe(replace('wpbootstrap_', themename+'_'))
// 		.pipe(replace(' wpbootstrap', ' '+themename))
// 		.pipe(replace('wpbootstrap-', themename+'-'))
// 		.pipe(replace('Wpbootstrap_', themenamecap+'_'))
// 		.pipe(gulp.dest('../'));
// })

/**
 * Revert Search and Replace for text domain
 */
// gulp.task('tdchangerev', function(){
// 	return gulp.src(['../**/*', '!../_src/**/*', '!../.git/**/*', '!../assets/**/*'])
// 		.pipe(replace('\''+themename+'\'', '\'wpbootstrap\''))
// 		.pipe(replace(themename+'_', 'wpbootstrap_'))
// 		.pipe(replace(' '+themename, ' wpbootstrap'))
// 		.pipe(replace(themename+'-', 'wpbootstrap-'))
// 		.pipe(replace(themenamecap+'_', 'Wpbootstrap_'))
// 		.pipe(gulp.dest('../'));
// })

gulp.task('rename', function() {
	var match = '-wpbootstrap-';
	var src = [];
	var renamed = [];
	find.on('file', function(file) {
		if (file.indexOf(match) !== -1) {
			// console.log('File: ' + file + 'on : ' + file.indexOf(match) + ' length: ' + match.length);
			src.push(file);
		}
	});

	find.on('end', function() {
		src.forEach(function(file) {
			// console.log(file);
			var l = file.length + 1,
				indexFirst = file.indexOf(match),
				indexLast = file.indexOf(match) + match.length,
				frontChunk = file.substr(-l, indexFirst),
				backChunk = file.substr(indexFirst + match.length),
				rename = frontChunk + '-' + themename + '-' + backChunk;

			renamed.push(rename);
		})

		src.forEach(function(file, k) {
			fs.renameSync(file, renamed[k]);
			console.log(chalk.green(file + ' has been renamed into : ' + renamed[k]));
		})
	})

})

gulp.task('renamerev', function() {
	var match = '-' + themename + '-';
	var src = [];
	var renamed = [];
	find.on('file', function(file) {
		if (file.indexOf(match) !== -1) {
			// console.log('File: ' + file + 'on : ' + file.indexOf(match) + ' length: ' + match.length);
			src.push(file);
		}
	});

	find.on('end', function() {
		src.forEach(function(file) {
			// console.log(file);
			var l = file.length + 1,
				indexFirst = file.indexOf(match),
				indexLast = file.indexOf(match) + match.length,
				frontChunk = file.substr(-l, indexFirst),
				backChunk = file.substr(indexFirst + match.length),
				rename = frontChunk + '-' + 'wpbootstrap' + '-' + backChunk;

			renamed.push(rename);
		})

		src.forEach(function(file, k) {
			fs.renameSync(file, renamed[k]);
			console.log(chalk.green(file + ' has been renamed into : ' + renamed[k]));
		})
	})

})

/**
 * [Clean]
 * =====================================================================================================================
 */

/**
 * Clean CSS
 */
gulp.task('clean-css', function() {
	return gulp.src('../assets/front/css/', {
		read: false
	})
		.pipe(clean({
			force: true
		}));
});

/**
 * Clean Images
 */
gulp.task('clean-images', function() {
	return gulp.src('../assets/front/images/', {
		read: false
	})
		.pipe(clean({
			force: true
		}));
});

/**
 * Clean Dummy Images
 */
gulp.task('clean-dummy', function() {
	return gulp.src('../assets/front/dummy-images/', {
		read: false
	})
		.pipe(clean({
			force: true
		}));
});

/**
 * Clean Fonts
 */
gulp.task('clean-fonts', function() {
	return gulp.src('../assets/front/fonts/', {
		read: false
	})
		.pipe(clean({
			force: true
		}));
});

/**
 * Clean JS
 */
gulp.task('clean-js', function() {
	return gulp.src('../assets/front/js/', {
		read: false
	})
		.pipe(clean({
			force: true
		}));
});
