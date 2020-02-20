'use strict';
const gulp = require('gulp');
const sass = require('gulp-sass');

//compile scss into css
function style() {
    return gulp.src('scss/**/*.scss')
    .pipe(sass().on('error',sass.logError))
    .pipe(gulp.dest('css-compiled'))
}

function watch() {
    gulp.watch('scss/**/*.scss', style)
}

exports.style = style;
exports.watch = watch;
