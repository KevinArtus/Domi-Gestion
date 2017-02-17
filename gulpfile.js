var gulp = require('gulp');
var plugins = require('gulp-load-plugins')();
var concatCss = require('gulp-concat-css');

var source = './src/DomiGestion';
var destination = './web';

gulp.task('copy', function() {
    return gulp.src('./app/Resources/public/css/*.css')
        .pipe(plugins.csscomb()) //Format CSS coding style
        .pipe(plugins.cssbeautify({indent: '  '})) //Reindent and reformat CSS
        .pipe(plugins.autoprefixer()) //Prefix CSS with webkit....
        .pipe(gulp.dest(destination + '/assets/css'));
})

gulp.task('css', function () {
    return gulp.src(source + '/assets/css/*.css')
        .pipe(concatCss('/assets/css/style.css'))
        .pipe(gulp.dest(destination + '/assets/css/'));
});

gulp.task('minify', function () {
    return gulp.src(source + '/assets/css/*.css')
        .pipe(plugins.csso())
        .pipe(plugins.rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(destination + '/assets/css/'));
});

gulp.task('browserSync', function() {
    browserSync.init({
        proxy: "http://domigestion.dev/app_dev.php"
    });
});

gulp.task('watch', ['browserSync', 'compass'], function() {
    gulp.watch('sass/*.scss', ['compass']);
});