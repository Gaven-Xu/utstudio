var gulp = require('gulp'),
    sass = require('gulp-sass'),
    cached = require('gulp-cached'),
    sm = require('gulp-sourcemaps'),
    rename = require('gulp-rename'),
    plumber = require('gulp-plumber'),
    del = require('del'),
    connect = require('gulp-connect'),
    notify = require('gulp-notify');

var guli = [
    '骚年你很棒',
    '加油，你可以',
    '要不要喝点水',
    '药，药，切克闹，煎饼果子来一套'
]

gulp.task('scss', function () {
    gulp.src('./scss/**/*.scss')
        .pipe(cached('scssCachedFile'))
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
        .pipe(sm.init({
            loadMaps: true
        }))
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(rename(function (path) {
            path.basename += '.min'
        }))
        .pipe(sm.write('./'))
        .pipe(gulp.dest('./css'))
        .pipe(notify({ message: guli[parseInt(guli.length*Math.random())]}))
		// .pipe(connect.reload())
})

gulp.task('css:clean', function () {
    del(['./css'])
})

gulp.task('scss:watch',function () {
    gulp.watch(['./scss/**/*.scss'], ['scss'])
})

// gulp.task('connect', function () {
// 	connect.server({
// 		port:'2333',
// 		livereload: true
// 	});
// });

gulp.task('default',['scss','scss:watch'], function () {
    notify({ message: 'gulp is watching your scss: (～￣▽￣)～' })
    notify({ message: 'SCSS IS OK' })
})