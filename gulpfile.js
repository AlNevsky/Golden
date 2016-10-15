var gulp = require('gulp');
var $    = require('gulp-load-plugins')();
var compass = require('gulp-compass');

var sassPaths = [
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];

function wrapPipe(taskFn) {
  return function(done) {
    var onSuccess = function() {
      done();
    };
    var onError = function(err) {
      done(err);
    }
    var outStream = taskFn(onSuccess, onError);
    if(outStream && typeof outStream.on === 'function') {
      outStream.on('end', onSuccess);
    }
  }
}

gulp.task('compass', wrapPipe(function(success, error) {
  return gulp.src('scss/style.scss')
      .pipe(compass({
        config_file: 'config.rb',
        includePaths: 'found',
        css: 'css',
        sass: 'scss',
        task: 'watch',
      })).on('error', error);
}));


gulp.task('watch', function() {
  gulp.watch(['scss/**/*.scss', 'css/**/*.css', '*.html']).on("change", function(file) {
    // setTimeout(function(){
    //   browserSync.reload(file.path);
    // }, 1000);
  });
});


gulp.task('default', ['watch', 'compass']);