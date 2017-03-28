//Variables
var gulp = require('gulp');
var sass = require('gulp-sass');
var replace = require('gulp-replace');
var replaceString = require('gulp-string-replace');


//File Paths
var sassFiles = 'source/scss/**/*.scss',
    mainSassFile = 'source/scss/main.scss',
    cssFiles = 'resources/css/',
    localHostPath = '/nadinesmithstudio/wp-content/',
    remotePath = '/wp-content/',
    pathFiles ='*'

//Compile main sass into css
gulp.task('sassy', function(){
  gulp.src(mainSassFile)
      .pipe(sass().on('error', sass.logError)) //Using gulp-sass
      .pipe(gulp.dest(cssFiles))
});


//Watch for changes in sass files and running sass compile
gulp.task('watch', function() {
  gulp.watch(sassFiles, ['sassy']);
});


//Replace file paths for local host with remote server
gulp.task('replacePaths', function(){
  gulp.src([pathFiles, '!gulpfile.js'])
    .pipe(replace(localHostPath, remotePath))
    .pipe(gulp.dest('./'));

  gulp.src([sassFiles, '!gulpfile.js'])
    .pipe(replaceString(localHostPath, remotePath))
    .pipe(gulp.dest('source/scss/'));

  gulp.task('caller', ['sassy']);
});
