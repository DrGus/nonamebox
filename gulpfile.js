var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var prefix = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

//	--------------------
//	Configuracion global
//	--------------------

// Nombre del proyecto (Proxy para BroserSync)
var project = 'nnb.localhost';

// Nombres finales de los ficheros minificados.
css_file = 'nnb-style.css';
js_file = 'main.min.js';

// Autoprefixer
var autoprefixer_config = ['last 2 versions', '> 1%', 'ie 8', 'ie 7'];

// Directorios source
var php_dir = 'application/views/**/*.php';
var js_dir = 'js/**/*.js';
var sass_dir = './sass/*.sass';

// Directorios destino
var css_dest = 'public/css';
var js_dest = 'public/js';

gulp.task('sass', function(){
	return gulp.src(sass_dir)
	.pipe(sass({
		includePaths: ['sass'],
		onError: browserSync.notify
	}))
	.pipe(prefix(autoprefixer_config, { cascade: true }))
	.pipe(concat(css_file))
	.pipe(gulp.dest(css_dest))
	.pipe(browserSync.reload({stream: true}))
})

gulp.task('minify-js', function(){
	return gulp.src(js_dir)
	.pipe(concat(js_file))
	.pipe(uglify(js_file))
	.pipe(gulp.dest(js_dest))
	.pipe(browserSync.reload({stream: true}))
})

gulp.task('browserSync', function() {
	browserSync.init({
        proxy: project
    });
	browserSync.reload();
})

gulp.task('browserSync-reload', function() {
	browserSync.reload();
})

gulp.task('watch', ['sass'], function(){
	gulp.watch(sass_dir, ['sass']);
	gulp.watch(php_dir, ['browserSync-reload']);
	gulp.watch(js_dir, ['minify-js']);
})

gulp.task('default', ['browserSync', 'watch']);
