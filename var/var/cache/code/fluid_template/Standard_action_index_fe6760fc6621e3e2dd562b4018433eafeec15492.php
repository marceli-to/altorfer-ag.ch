<?php

class Standard_action_index_fe6760fc6621e3e2dd562b4018433eafeec15492 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div id="dceConfigurationWizard">
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['section'] = NULL;
$arguments25['partial'] = NULL;
$arguments25['delegate'] = NULL;
$arguments25['renderable'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['optional'] = false;
$arguments25['default'] = NULL;
$arguments25['contentAs'] = NULL;
$arguments25['debug'] = true;
$arguments25['partial'] = 'ConfigurationEditor/AvailableTemplates';
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['uniqueIdentifier'] = $renderingContext->getVariableProvider()->getByPath('uniqueIdentifier', $array28);
$array29 = array (
);$array27['availableTemplates'] = $renderingContext->getVariableProvider()->getByPath('availableTemplates', $array29);
$arguments25['arguments'] = $array27;

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
		';
return $output24;
};
$arguments22 = array();

$output21 .= '';

$output21 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['section'] = NULL;
$arguments33['partial'] = NULL;
$arguments33['delegate'] = NULL;
$arguments33['renderable'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['optional'] = false;
$arguments33['default'] = NULL;
$arguments33['contentAs'] = NULL;
$arguments33['debug'] = true;
$arguments33['partial'] = 'ConfigurationEditor/AvailableVariables';
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['showFields'] = $renderingContext->getVariableProvider()->getByPath('showFields', $array36);
$array37 = array (
);$array35['uniqueIdentifier'] = $renderingContext->getVariableProvider()->getByPath('uniqueIdentifier', $array37);
$array38 = array (
);$array35['availableFields'] = $renderingContext->getVariableProvider()->getByPath('availableFields', $array38);
$array39 = array (
);$array35['famousViewHelpers'] = $renderingContext->getVariableProvider()->getByPath('famousViewHelpers', $array39);
$array40 = array (
);$array35['dceViewHelpers'] = $renderingContext->getVariableProvider()->getByPath('dceViewHelpers', $array40);
$arguments33['arguments'] = $array35;

$output32 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
		';
return $output32;
};
$arguments30 = array();
$arguments30['if'] = NULL;

$output21 .= '';

$output21 .= '
	';
return $output21;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('parameters.showTemplates', $array19);

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['debug'] = true;
$arguments4['partial'] = 'ConfigurationEditor/AvailableTemplates';
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['uniqueIdentifier'] = $renderingContext->getVariableProvider()->getByPath('uniqueIdentifier', $array7);
$array8 = array (
);$array6['availableTemplates'] = $renderingContext->getVariableProvider()->getByPath('availableTemplates', $array8);
$arguments4['arguments'] = $array6;

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
		';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['section'] = NULL;
$arguments10['partial'] = NULL;
$arguments10['delegate'] = NULL;
$arguments10['renderable'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['optional'] = false;
$arguments10['default'] = NULL;
$arguments10['contentAs'] = NULL;
$arguments10['debug'] = true;
$arguments10['partial'] = 'ConfigurationEditor/AvailableVariables';
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['showFields'] = $renderingContext->getVariableProvider()->getByPath('showFields', $array13);
$array14 = array (
);$array12['uniqueIdentifier'] = $renderingContext->getVariableProvider()->getByPath('uniqueIdentifier', $array14);
$array15 = array (
);$array12['availableFields'] = $renderingContext->getVariableProvider()->getByPath('availableFields', $array15);
$array16 = array (
);$array12['famousViewHelpers'] = $renderingContext->getVariableProvider()->getByPath('famousViewHelpers', $array16);
$array17 = array (
);$array12['dceViewHelpers'] = $renderingContext->getVariableProvider()->getByPath('dceViewHelpers', $array17);
$arguments10['arguments'] = $array12;

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
		';
return $output9;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	<div>
		<textarea class="dce-codemirror" data-mode="';
$array41 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('parameters.mode', $array41)]);

$output0 .= '" id="codemirror_';
$array42 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('uniqueIdentifier', $array42)]);

$output0 .= '" name=';
$array43 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('name', $array43)]);

$output0 .= ' cols="80" rows="15" onchange="';
$array44 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onChangeFunc', $array44)]);

$output0 .= '">';
$array45 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('value', $array45)]);

$output0 .= '</textarea>
	</div>
</div>

<script type="text/javascript">
	require([\'TYPO3/CMS/Dce/DceCodemirror\'], function(DceCodemirror) {
		DceCodemirror.initCodeMirrorEditor(\'#codemirror_';
$array46 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('uniqueIdentifier', $array46)]);

$output0 .= '\', \'';
$array47 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('parameters.mode', $array47)]);

$output0 .= '\');
	});
</script>
';

return $output0;
}


}
#