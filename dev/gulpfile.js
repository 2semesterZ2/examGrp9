'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var bs = require('browser-sync').create();
var plumber  = require('gulp-plumber');
var uncss = require('gulp-uncss');
var concat = require('gulp-concat');
var nano = require('gulp-cssnano');
var htmlmin = require('gulp-htmlmin');

gulp.task('html', function() {
  gulp.src('src/**/*.html')
  .pipe(htmlmin({collapseWhitespace: true, removeComments: true}))
  .pipe(gulp.dest('dist/'));
});

gulp.task('gulp-sass', function() {
  gulp.src('src/**/*.scss')
  .pipe(sass().on('error', sass.logError))
.pipe(nano())
  .pipe(gulp.dest('dist/'));
});



gulp.task('watch', ['browser-sync'], function () {
  gulp.watch('src/**/*.html', ['html']);
    gulp.watch("src/**/*.scss", ['gulp-sass']);
    gulp.watch("dist/**/*.html").on('change', bs.reload);
    gulp.watch("dist/**/*.css").on('change', bs.reload);
});
gulp.task('browser-sync', function() {
    bs.init({
        server: {
            baseDir: "./dist/"
        }
    });
});
