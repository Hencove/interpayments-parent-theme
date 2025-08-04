const mix = require("laravel-mix");
require("laravel-mix-clean");

mix

  .js("_source/js/block-variations.js", "_build/js/block-variations.js")
  .js("_source/js/scripts.js", "_build/js/scripts.js")
  .sourceMaps()
  .sass("_source/scss/styles.scss", "_build/css/styles.css")
  .sourceMaps()
  .sass("_source/scss/editor-styles.scss", "_build/css/editor-styles.css")
  .sourceMaps()
  .sass("_source/scss/block-styles.scss", "_build/css/block-styles.css")
  .sourceMaps()
  .clean({
    cleanOnceBeforeBuildPatterns: ["./_build/*"],
  })
  .options({
    processCssUrls: false,
  });
