'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var bs = require('browser-sync').create();
var plumber  = require('gulp-plumber');

gulp.task('html', function() {
  gulp.src('src/**/*.html')
  .pipe(gulp.dest('dist/'));
});

gulp.task('gulp-sass', function() {
  gulp.src('src/**/*.scss')
  .pipe(sass().on('error', sass.logError))
  .pipe(gulp.dest('dist/'));
});

gulp.task('watch',function(){
gulp.watch('src/**/*.html', ['html']);
gulp.watch('src/**/*.scss',['gulp-sass']);
gulp.watch("src/**/*.html").on('change', bs.reload);
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
