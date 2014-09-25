// =============================================================================
// Gulp file!
// =============================================================================

var gulp =        require('gulp');
var gulputil =    require('gulp-util');
var plumber =     require('gulp-plumber');
var compass =     require('gulp-compass');
var ignore =      require('gulp-ignore');
var rimraf =      require('gulp-rimraf');
var autoprefix =  require('gulp-autoprefixer');
var notify =      require("gulp-notify");
var watch =       require("gulp-watch");
var rename =      require("gulp-rename");
var replace =     require('gulp-replace');
var sass =        require('gulp-sass');
var connect =     require('gulp-connect');


// =============================================================================
// Clean
// =============================================================================
gulp.task('clean', function() {
  return gulp.src(['css'], { read: false, dot: true })
    .pipe(rimraf());
});


// =============================================================================
// Styles
// =============================================================================
gulp.task('styles', function() {
  return gulp.src("scss/**/*.scss")
    .pipe(plumber())
    .pipe(compass({
      relative: true,
      comments: true,
      style: 'expanded',
      css: 'css',
      sass: 'scss',
      image: 'img'
    }))
    .pipe(autoprefix('last 4 versions', '> 2%', 'ie >= 8', 'ff >= 17'))
    .pipe(gulp.dest("css"));
});


// Build task
gulp.task('build', ['clean'], function() {
  gulp.start(['styles']);
});

// Watch task
gulp.task('watch', ['build'], function() {
  gulp.watch("scss/**/*.scss", ['styles']);
});

// Run server
gulp.task('connect', function() {
  connect.server();
});
