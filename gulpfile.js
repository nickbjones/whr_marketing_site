const gulp = require('gulp');
const autoprefixer = require('gulp-autoprefixer');
const sass = require('gulp-sass');

const srcFiles = [
  './assets/styles/sass/pages/*.scss',
];
const watchDirs = [
  './assets/styles/sass/*/*.scss',
];
const destDir = './assets/styles/css';

// functions
const rollupCSS = function() {
  return gulp.src(srcFiles)
    .pipe(sass()) // compile sass
    .pipe(autoprefixer({ // add vendor prefixes
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest(destDir)) // write
};

// tasks
gulp.task('build', function() {
  rollupCSS();
});
gulp.task('watch', function() {
  rollupCSS();
  gulp.watch(watchDirs, ['build']);
});
