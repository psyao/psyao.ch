var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('css', function() {
  gulp.src('app/assets/sass/main.scss')
    .pipe(sass())
    .pipe(autoprefixer('last 10 version'))
    .pipe(gulp.dest('public/css'));
});

gulp.task('css-admin', function() {
  gulp.src('app/assets/sass/admin.scss')
    .pipe(sass())
    .pipe(autoprefixer('last 10 version'))
    .pipe(gulp.dest('public/css'));
});

gulp.task('watch', function() {
  gulp.watch('app/assets/sass/**/*.scss', ['css', 'css-admin']);
});

gulp.task('default', ['css', 'css-admin', 'watch']);
