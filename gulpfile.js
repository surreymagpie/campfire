const   { src, dest, series }       = require ('gulp');
const   sass                        = require ('gulp-sass');
        sass.compiler               = require ('node-sass');

// Compile Sass files into CSS
function styles() {
    return src('./src/sass/campfire.sass')
    .pipe(sass({
        outputStyle: 'expanded',
        sourceMap: false
        }).on('error', sass.logError))
    .pipe(dest('./assets/css'));
}

exports.default = styles;
