<?php
/**
 * Title: Columns of Dropdowns
 * Slug: hencovestarter/columns-of-dropdowns
 * Description: 
 * Categories: interactive
 * Keywords: 
 * Viewport Width: 1280
 * Block Types: 
 * Post Types: 
 * Inserter: true
 * Custom Categories: Interactive
 */
register_block_pattern_category( 'interactive', [ 'label' => __( 'Interactive', 'hencovestarter' ), 'pm_custom' => true ] );
?>
<!-- wp:columns {"align":"full","className":"","epStylingOptions":{"epCustomColumnsResponsiveEnabled":true,"epCustomColumnsReverseResponsiveEnabled":true,"epCustomColumnsSpacingResponsiveEnabled":true,"epCustomColumns":{"target":"wp-block-column","responsive":true,"hover":false,"options":[{"custom":true,"control":"ColumnToggle"},{"label":"Responsive Columns","control":"Range","attribute":"epCustomColumns","defaults":{"tablet":"2","mobile":"1"},"css":"flex-basis","customValue":"calc(( 100% - ({{Range:epCustomColumnsSpacing:auto:0px}} * ({{value}} - 1))) / {{value}}) !important","props":{"max":6,"min":1,"supportedUnits":[]},"condition":{"query":[{"field":"attributes.className","compare":"IN","value":"ep-custom-column"},[{"relation":"OR","query":[{"field":"viewport","compare":"EQUAL","value":"tablet"},{"field":"viewport","compare":"EQUAL","value":"mobile"}]}]]}}]},"epCustomColumnsReverse":{"target":"","responsive":true,"hover":false,"options":[{"label":"Columns Order","control":"ButtonGroup","attribute":"epCustomColumnsReverse","css":"flex-direction","customValue":"{{value}}","condition":{"relation":"AND","query":[{"field":"attributes.className","compare":"IN","value":"ep-custom-column"},[{"relation":"OR","query":[[{"relation":"AND","query":[{"field":"attributes.epCustomColumns.mobile","controlledBy":"Range","compare":"IN","value":"1"},{"field":"viewport","compare":"EQUAL","value":"mobile"}]}],[{"relation":"AND","query":[{"field":"attributes.epCustomColumns.tablet","controlledBy":"Range","compare":"IN","value":"1"},{"field":"viewport","compare":"EQUAL","value":"tablet"}]}]]}]]},"defaults":{"tablet":"column","mobile":"column"},"props":{"layout":"stacked","options":[{"label":"Default","value":"column"},{"label":"Reverse","value":"column-reverse"}]}}]},"epCustomColumnsSpacing":{"target":"","responsive":true,"hover":false,"options":[{"label":"Columns Gap","control":"Range","attribute":"epCustomColumnsSpacing","defaults":{"desktop":"32px","tablet":"32px","mobile":"32px"},"css":"gap","props":{"max":100,"min":0,"supportedUnits":["px"]},"condition":{"query":[{"field":"attributes.className","compare":"IN","value":"ep-custom-column"}]}}]},"savedStyling":"","clientId":"f363dd8a-a365-4dbd-aabb-8a2ab88101e2"},"epCustomColumns":{"desktop":{"value":"","important":false,"unit":"%"},"tablet":{"value":2,"important":false,"unit":""},"tabletModified":true,"mobile":{"value":1,"important":false,"unit":""},"mobileModified":true},"epCustomColumnsSpacing":{"desktop":{"value":32,"important":false,"unit":"px"},"tablet":{"value":32,"important":false,"unit":"px"},"tabletModified":true,"mobile":{"value":32,"important":false,"unit":"px"},"mobileModified":true},"epCustomColumnsReverse":{"desktop":"","tablet":"column","tabletModified":true,"mobile":"column","mobileModified":true},"epAnimationGeneratedClass":"edplus_anim-3Jgbsw","epGeneratedClass":"eplus-wrapper"} -->
<div class=" wp-block-columns alignfull eplus-wrapper"><!-- wp:column {"width":"","className":"","epAnimationGeneratedClass":"edplus_anim-RcDxit","epGeneratedClass":"eplus-wrapper"} -->
<div class=" wp-block-column eplus-wrapper"><!-- wp:ub/content-toggle-block {"blockID":"95fcaa8b-8754-4ee9-870f-12ab0f25fb00","theme":"#00000000","collapsed":true,"titleColor":"#002f2e","titleLinkColor":"#002f2e","toggleColor":"#03bd89","toggleIcon":"plus","padding":{"top":"0","bottom":"0"},"className":"is-interpayments-content-toggles"} -->
<!-- wp:ub/content-toggle-panel-block {"theme":"#00000000","collapsed":true,"titleColor":"#002f2e","titleLinkColor":"#002f2e","panelTitle":"Lorem ipsum dolor sit amet","toggleColor":"#03bd89","toggleIcon":"plus","border":false,"blockID":"7633a8ca-0139-4ecf-816d-b104d5224919"} -->
<!-- wp:paragraph {"placeholder":"Panel content","className":"","epAnimationGeneratedClass":"edplus_anim-0EQMvU","epGeneratedClass":"eplus-wrapper"} -->
<p class=" eplus-wrapper">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->
<!-- /wp:ub/content-toggle-panel-block -->
<!-- /wp:ub/content-toggle-block --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","className":"","epAnimationGeneratedClass":"edplus_anim-RcDxit","epGeneratedClass":"eplus-wrapper"} -->
<div class=" wp-block-column eplus-wrapper"><!-- wp:ub/content-toggle-block {"blockID":"11296617-1848-4d70-89e1-2eb60fc9bc14","theme":"#00000000","collapsed":true,"titleColor":"#002f2e","titleLinkColor":"#002f2e","toggleColor":"#03bd89","toggleIcon":"plus","padding":{"top":"0","bottom":"0"},"className":"is-interpayments-content-toggles"} -->
<!-- wp:ub/content-toggle-panel-block {"theme":"#00000000","collapsed":true,"titleColor":"#002f2e","titleLinkColor":"#002f2e","panelTitle":"Lorem ipsum dolor sit amet","toggleColor":"#03bd89","toggleIcon":"plus","border":false,"blockID":"e0563abf-ee5a-4c2d-9696-c1a05504fad0"} -->
<!-- wp:paragraph {"placeholder":"Panel content","className":"","epAnimationGeneratedClass":"edplus_anim-0EQMvU","epGeneratedClass":"eplus-wrapper"} -->
<p class=" eplus-wrapper">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->
<!-- /wp:ub/content-toggle-panel-block -->
<!-- /wp:ub/content-toggle-block --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","className":"","epAnimationGeneratedClass":"edplus_anim-RcDxit","epGeneratedClass":"eplus-wrapper"} -->
<div class=" wp-block-column eplus-wrapper"><!-- wp:ub/content-toggle-block {"blockID":"1ee5fe58-b072-4f4a-834a-58abee651e27","theme":"#00000000","collapsed":true,"titleColor":"#002f2e","titleLinkColor":"#002f2e","toggleColor":"#03bd89","toggleIcon":"plus","padding":{"top":"0","bottom":"0"},"className":"is-interpayments-content-toggles"} -->
<!-- wp:ub/content-toggle-panel-block {"theme":"#00000000","collapsed":true,"titleColor":"#002f2e","titleLinkColor":"#002f2e","panelTitle":"Lorem ipsum dolor sit amet","toggleColor":"#03bd89","toggleIcon":"plus","border":false,"blockID":"1096fcfe-8713-4d1e-bdf0-2de8ff369214"} -->
<!-- wp:paragraph {"placeholder":"Panel content","className":"","epAnimationGeneratedClass":"edplus_anim-0EQMvU","epGeneratedClass":"eplus-wrapper"} -->
<p class=" eplus-wrapper">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<!-- /wp:paragraph -->
<!-- /wp:ub/content-toggle-panel-block -->
<!-- /wp:ub/content-toggle-block --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
