const   { src, dest, series, watch }    = require ('gulp');
const   sass                            = require ('gulp-sass');
        sass.compiler                   = require ('node-sass');
const   browserSync                     = require ('browser-sync').create();
const   settings                        = require ('./settings')

// Compile Sass files into CSS
function styles() {
    return src('./src/sass/campfire.sass')
    .pipe(sass({
        outputStyle: 'expanded',
        sourceMap: false
        }).on('error', sass.logError))
    .pipe(dest('./assets/css'))
    .pipe(browserSync.stream());
}

// Static server
function browsersync(done) {
    browserSync.init({
        proxy: settings.urlToPreview
    });
    done();
};

function reload(done) {
    browserSync.reload();
	done();
}

function watch_files() {
    watch('src/sass/**/*.s(a|c)ss', styles);
    watch('(*.php|inc/*.php)', reload);
}

exports.styles  = styles;
exports.serve   = browsersync;
exports.default = series(styles, browsersync, watch_files);
