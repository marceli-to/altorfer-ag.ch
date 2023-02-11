<?php

class layout_main_html_018c609a67085ecd8290ced7a39ca062e41b452b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'dce' => 
  array (
    0 => 'T3\\Dce\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<!doctype html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="de"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de"> <!--<![endif]-->
<html class="no-js" lang="de">
<head>
<meta charset="utf-8">
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$array5 = array (
);return $renderingContext->getVariableProvider()->getByPath('seoBlock', $array5);
};
$arguments3 = array();
return TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);
};
$arguments1 = array();
$arguments1['value'] = NULL;

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '
<meta name="keywords" content="Ihr Partner bei der Planung und Realisierung von Metallbauprojekten in Stahl, Aluminium und CNS - seit 1954." />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#ffffff">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="/fileadmin/assets/css/app.css">
<script src="/fileadmin/assets/js/modernizr.js"></script>
</head>
<body>
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['section'] = NULL;
$arguments6['partial'] = NULL;
$arguments6['delegate'] = NULL;
$arguments6['renderable'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['optional'] = false;
$arguments6['default'] = NULL;
$arguments6['contentAs'] = NULL;
$arguments6['debug'] = true;
$arguments6['section'] = 'body';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
<script src="/fileadmin/assets/js/app.js"></script>
</body>
</html>
<!-- made with ♥ by marceli.to -->
';

return $output0;
}


}
#