<?php

class source_8106ea6516c33adf8ef6d9273529d0c9324c840d_Standard_index_html extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
    1 => 'ArminVieweg\\Dce\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<section class="box-text box-text--team">
  <div class="cf">
    <div class="text__content">
      <div>
        <h2>';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.department', $array1)]);

$output0 .= '</h2>
      </div>
    </div>
  </div>
  <div class="grid-2xs_3sm_4md">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
	    <figure class="span team-member">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$arguments10['alt'] = NULL;
$arguments10['ismap'] = NULL;
$arguments10['longdesc'] = NULL;
$arguments10['usemap'] = NULL;
$arguments10['src'] = NULL;
$arguments10['treatIdAsReference'] = NULL;
$arguments10['image'] = NULL;
$arguments10['crop'] = NULL;
$arguments10['cropVariant'] = 'default';
$arguments10['width'] = NULL;
$arguments10['height'] = NULL;
$arguments10['minWidth'] = NULL;
$arguments10['minHeight'] = NULL;
$arguments10['maxWidth'] = NULL;
$arguments10['maxHeight'] = NULL;
$arguments10['absolute'] = false;
$array12 = array (
);$arguments10['image'] = $renderingContext->getVariableProvider()->getByPath('img', $array12);
$output13 = '';
$array14 = array (
);
$output13 .= $renderingContext->getVariableProvider()->getByPath('member.firstname', $array14);

$output13 .= ' ';
$array15 = array (
);
$output13 .= $renderingContext->getVariableProvider()->getByPath('member.name', $array15);
$arguments10['alt'] = $output13;
$arguments10['width'] = '800c';
$arguments10['height'] = '1000c';

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
			';
return $output9;
};
$arguments6 = array();
$arguments6['each'] = NULL;
$arguments6['as'] = NULL;
$arguments6['key'] = NULL;
$arguments6['reverse'] = false;
$arguments6['iteration'] = NULL;
$array8 = array (
);$arguments6['each'] = $renderingContext->getVariableProvider()->getByPath('member.image', $array8);
$arguments6['as'] = 'img';

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
			<figcaption>
				<h3>';
$array16 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('member.firstname', $array16)]);

$output5 .= ' ';
$array17 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('member.name', $array17)]);

$output5 .= '</h3>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$array20 = array (
);return $renderingContext->getVariableProvider()->getByPath('member.info', $array20);
};
$arguments18 = array();
$arguments18['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output5 .= '
			</figcaption>
	    </figure>
	';
return $output5;
};
$arguments2 = array();
$arguments2['each'] = NULL;
$arguments2['as'] = NULL;
$arguments2['key'] = NULL;
$arguments2['reverse'] = false;
$arguments2['iteration'] = NULL;
$array4 = array (
);$arguments2['each'] = $renderingContext->getVariableProvider()->getByPath('field.members', $array4);
$arguments2['as'] = 'member';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
  </div>
</section>



 ';

return $output0;
}


}
#