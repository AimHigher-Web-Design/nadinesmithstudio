//Variables
var gulp = require('gulp');
var sass = require('gulp-sass');

//File Paths
var sassFiles = 'source/scss/main.scss',
    cssFiles = 'resources/css/'

//Compile sass into css
gulp.task('sassy', function(){
  gulp.src(sassFiles)
      .pipe(sass().on('error', sass.logError)) //Using gulp-sass
      .pipe(gulp.dest(cssFiles))
});

gulp.task('watch', function() {
  gulp.watch(sassFiles, ['sassy']);
});
