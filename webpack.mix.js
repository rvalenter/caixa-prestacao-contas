const mix = require('laravel-mix');
require('laravel-mix-tailwind');

mix
  .js('resources/js/app.js', 'public/js')
  .less('resources/less/app.less', 'public/css')
  .tailwind()
  .vue({ version: 3 })
  .version();




// .js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ])
//   .tailwind()
//     .vue({ version: 3 });
