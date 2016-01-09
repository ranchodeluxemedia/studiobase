// 'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    rename = require('gulp-rename'),
    minifycss = require('gulp-minify-css'),
    plumber = require('gulp-plumber');

var input = './assets/scss/**/*.scss',
    bootstrap = './assets/vendor/bootstrap-sass/assets/**/*.*',
    output = './assets/css';

var SassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded'
};

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

// gulp.task('copy-sass', function(){
//   return gulp
//     .src(bootstrap)
//       .pipe(gulp.dest('./assets/bootstrap'));
// });

gulp.task('build-sass', function(){
  return gulp
    .src(input)
      .pipe(sass(SassOptions).on('error', sass.logError))
      .pipe(autoprefixer(autoprefixerOptions))
      .pipe(minifycss({ compatibility: 'ie8' }))
      .pipe(rename({ suffix: '.min' }))
      .pipe(gulp.dest(output));
});

gulp.task('watch', function(){
  gulp.watch(input, ['build-sass']);
});

gulp.task('default', ['watch', 'build-sass']);
