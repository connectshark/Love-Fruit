//註冊事件
const {
    src,
    dest,
    series,
    parallel,
    watch
} = require('gulp');


const style = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');
const browsersync = require('browser-sync').create();


// sass
function sass() {
    return src('./sass/*.scss')
        .pipe(style())
        .pipe(dest('./css'));
}
//browserSync
function browserSync(done) {
    browsersync.init({
        server: {
            baseDir: "./",
            index: "index.html"
        },
        port: 3000
    });
    done();
}
// BrowserSync Reload
function browserSyncReload(done) {
    browsersync.reload();
    done();
}


//watch files
function watchfiles() {
    watch(['./sass/*.scss' , './sass/**/*.scss'] , sass);
    watch(['./', './**/*'], series(browserSyncReload))
}


// mini css
function miniCss(){
    return src('css/*.css')
    .pipe(cleanCSS({compatibility: '*'}))
    .pipe(dest('css/mini'));
}


const watcher = series(sass, parallel( watchfiles , browserSync));

exports.mini = miniCss;
exports.default = watcher;