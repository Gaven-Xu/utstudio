var gulp = require('gulp'),
    sass = require('gulp-sass'),
    cached = require('gulp-cached'),
    sm = require('gulp-sourcemaps'),
    rename = require('gulp-rename'),
    plumber = require('gulp-plumber'),
    del = require('del');

gulp.task('scss', function () {
    gulp.src('./scss/**/*.scss')
        .pipe(cached('scssCachedFile'))
        .pipe(plumber())
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
        .pipe(gulp.dest('./css'));
})

gulp.task('css:clean', function () {
    del(['./css'])
})

gulp.task('scss:watch',function () {
    gulp.watch(['./scss/**/*.scss'], ['scss'])
})

gulp.task('default',['scss','scss:watch'], function () {
    console.log('gulp is watching your scss: (～￣▽￣)～');
})