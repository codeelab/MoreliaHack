var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
});


/*
* Dependencias
*/
var gulp = require('gulp'),
concat = require('gulp-concat'),
uglify = require('gulp-uglify');
/*
* Configuración de las tareas 'demo'
*/
gulp.task('demo', function () {
gulp.src('js/source/*.js')
.pipe(concat('compilacion.js'))
.pipe(uglify())
.pipe(gulp.dest('js/build/'))
});