const { src, dest} = require('gulp');


function copy(){
  return src('./*.js')
  .pipe(dest('js/output/'));
}


exports.copy = copy