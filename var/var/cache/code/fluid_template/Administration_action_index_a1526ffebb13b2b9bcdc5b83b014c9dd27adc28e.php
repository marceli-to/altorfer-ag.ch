<?php

class Administration_action_index_a1526ffebb13b2b9bcdc5b83b014c9dd27adc28e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Backend/Default';
}
public function hasLayout() {
return TRUE;
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
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
));
}

/**
 * section categoryTree
 */
public function section_fca14bbaa23e55bf6615b2e4fdf213505b61af98(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<ul class="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array1)]);

$output0 .= '">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
			<li>
				<label title="';
$array6 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.uid', $array6)]);

$output5 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.item.title', $array10);
};
$arguments7 = array();
$arguments7['value'] = NULL;
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = 'UTF-8';
$arguments7['doubleEncode'] = true;
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output5 .= !is_string($value9) && !(is_object($value9) && method_exists($value9, '__toString')) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments7['encoding'], $arguments7['doubleEncode']);

$output5 .= '">
					<input type="checkbox" ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Be\IsCheckboxActiveViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['id'] = NULL;
$arguments11['categories'] = array (
);
$array13 = array (
);$arguments11['id'] = $renderingContext->getVariableProvider()->getByPath('category.item.uid', $array13);
$array14 = array (
);$arguments11['categories'] = $renderingContext->getVariableProvider()->getByPath('demand.selectedCategories', $array14);

$output5 .= GeorgRinger\News\ViewHelpers\Be\IsCheckboxActiveViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output5 .= ' name="tx_news_web_newstxnewsm2[demand][selectedCategories][]" value="';
$array15 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.uid', $array15)]);

$output5 .= '" /> ';
$array16 = array (
);
$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.title', $array16)]);

$output5 .= '
				</label>

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['section'] = NULL;
$arguments23['partial'] = NULL;
$arguments23['delegate'] = NULL;
$arguments23['renderable'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['optional'] = false;
$arguments23['default'] = NULL;
$arguments23['contentAs'] = NULL;
$arguments23['debug'] = true;
$arguments23['section'] = 'categoryTree';
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['categories'] = $renderingContext->getVariableProvider()->getByPath('category.children', $array26);
$array27 = array (
);$array25['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array27);
$arguments23['arguments'] = $array25;

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
				';
return $output22;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('category.children', $array20);

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = $renderChildrenClosure18;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output5 .= '
			</li>
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
);$arguments2['each'] = $renderingContext->getVariableProvider()->getByPath('categories', $array4);
$arguments2['as'] = 'category';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '
	</ul>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output28 = '';

$output28 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['languageKey'] = NULL;
$arguments29['alternativeLanguageKeys'] = NULL;
$arguments29['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.title';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output28 .= '
	</h1>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['key'] = NULL;
$arguments43['id'] = NULL;
$arguments43['default'] = NULL;
$arguments43['arguments'] = NULL;
$arguments43['extensionName'] = NULL;
$arguments43['languageKey'] = NULL;
$arguments43['alternativeLanguageKeys'] = NULL;
$arguments43['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.why.text';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output42 .= '
			<br>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['identifier'] = NULL;
$arguments48['size'] = 'small';
$arguments48['overlay'] = NULL;
$arguments48['state'] = 'default';
$arguments48['alternativeMarkupIdentifier'] = NULL;
$arguments48['identifier'] = 'ext-news-donation';

$output47 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['languageKey'] = NULL;
$arguments50['alternativeLanguageKeys'] = NULL;
$arguments50['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.link';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output47 .= '
				';
return $output47;
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['name'] = NULL;
$arguments45['rel'] = NULL;
$arguments45['rev'] = NULL;
$arguments45['target'] = NULL;
$arguments45['action'] = NULL;
$arguments45['controller'] = NULL;
$arguments45['extensionName'] = NULL;
$arguments45['pluginName'] = NULL;
$arguments45['pageUid'] = NULL;
$arguments45['pageType'] = NULL;
$arguments45['noCache'] = NULL;
$arguments45['noCacheHash'] = NULL;
$arguments45['section'] = NULL;
$arguments45['format'] = NULL;
$arguments45['linkAccessRestrictedPages'] = NULL;
$arguments45['additionalParams'] = NULL;
$arguments45['absolute'] = NULL;
$arguments45['addQueryString'] = NULL;
$arguments45['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments45['addQueryStringMethod'] = NULL;
$arguments45['arguments'] = NULL;
$arguments45['action'] = 'donate';
$arguments45['class'] = 'btn btn-default';

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output42 .= '
		';
return $output42;
};
$arguments37 = array();
$arguments37['message'] = NULL;
$arguments37['title'] = NULL;
$arguments37['state'] = -2;
$arguments37['iconName'] = NULL;
$arguments37['disableIcon'] = false;
$output39 = '';

$output39 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['key'] = NULL;
$arguments40['id'] = NULL;
$arguments40['default'] = NULL;
$arguments40['arguments'] = NULL;
$arguments40['extensionName'] = NULL;
$arguments40['languageKey'] = NULL;
$arguments40['alternativeLanguageKeys'] = NULL;
$arguments40['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.support';

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);
$arguments37['title'] = $output39;
$arguments37['state'] = -1;
$renderChildrenClosure38 = ($arguments37['message'] !== null) ? function() use ($arguments37) { return $arguments37['message']; } : $renderChildrenClosure38;
$output36 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
	';
return $output36;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('showSupportArea', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = $renderChildrenClosure32;

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output28 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
		<div class="alert alert-info">
			<div class="message-body">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['languageKey'] = NULL;
$arguments58['alternativeLanguageKeys'] = NULL;
$arguments58['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nopageselected';

$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output57 .= '
			</div>
		</div>
	';
return $output57;
};
$arguments52 = array();
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$arguments52['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array55);
$array54['1'] = ' == 0';

$expression56 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments52['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments52['__thenClosure'] = $renderChildrenClosure53;

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output28 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
			<input type="hidden" name="formSubmitted" value="1">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
					<input type="hidden" name="route" value="/web/NewsTxNewsM2/">
					<input type="hidden" name="token" value="';
$array85 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array85)]);

$output84 .= '">
				';
return $output84;
};
$arguments82 = array();

$output81 .= '';

$output81 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
					<input type="hidden" name="M" value="web_NewsTxNewsM2">
					<input type="hidden" name="moduleToken" value="';
$array89 = array (
);
$output88 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array89)]);

$output88 .= '">
				';
return $output88;
};
$arguments86 = array();
$arguments86['if'] = NULL;

$output81 .= '';

$output81 .= '
			';
return $output81;
};
$arguments72 = array();
$arguments72['then'] = NULL;
$arguments72['else'] = NULL;
$arguments72['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['0'] = $renderingContext->getVariableProvider()->getByPath('is9up', $array79);

$expression80 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments72['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)
					),
					$renderingContext
				);
$arguments72['__thenClosure'] = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
					<input type="hidden" name="route" value="/web/NewsTxNewsM2/">
					<input type="hidden" name="token" value="';
$array75 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array75)]);

$output74 .= '">
				';
return $output74;
};
$arguments72['__elseClosures'][] = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
					<input type="hidden" name="M" value="web_NewsTxNewsM2">
					<input type="hidden" name="moduleToken" value="';
$array77 = array (
);
$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array77)]);

$output76 .= '">
				';
return $output76;
};

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '

			<input type="hidden" name="id" value="';
$array90 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page', $array90)]);

$output71 .= '">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['additionalAttributes'] = NULL;
$arguments91['data'] = NULL;
$arguments91['name'] = NULL;
$arguments91['value'] = NULL;
$arguments91['property'] = NULL;
$arguments91['disabled'] = NULL;
$arguments91['errorClass'] = 'f3-form-error';
$arguments91['class'] = NULL;
$arguments91['dir'] = NULL;
$arguments91['id'] = NULL;
$arguments91['lang'] = NULL;
$arguments91['style'] = NULL;
$arguments91['title'] = NULL;
$arguments91['accesskey'] = NULL;
$arguments91['tabindex'] = NULL;
$arguments91['onclick'] = NULL;
$arguments91['checked'] = NULL;
$arguments91['multiple'] = false;
$arguments91['style'] = 'display:none';
$arguments91['property'] = 'selectedCategories';
$arguments91['value'] = 0;

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output71 .= '

			<div id="setting-container" style="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('hideForm', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['then'] = 'display:none';
$arguments93['else'] = '';

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output71 .= '">
				<div class="settings">
					<div class="row form-horizontal">
						<div class="col-xs-6">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
							<div class="form-group">
								<label for="searchWord" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['key'] = NULL;
$arguments104['id'] = NULL;
$arguments104['default'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['extensionName'] = NULL;
$arguments104['languageKey'] = NULL;
$arguments104['alternativeLanguageKeys'] = NULL;
$arguments104['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.searchWord';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext)]);

$output103 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['additionalAttributes'] = NULL;
$arguments106['data'] = NULL;
$arguments106['name'] = NULL;
$arguments106['value'] = NULL;
$arguments106['property'] = NULL;
$arguments106['autofocus'] = NULL;
$arguments106['disabled'] = NULL;
$arguments106['maxlength'] = NULL;
$arguments106['readonly'] = NULL;
$arguments106['size'] = NULL;
$arguments106['placeholder'] = NULL;
$arguments106['pattern'] = NULL;
$arguments106['errorClass'] = 'f3-form-error';
$arguments106['class'] = NULL;
$arguments106['dir'] = NULL;
$arguments106['id'] = NULL;
$arguments106['lang'] = NULL;
$arguments106['style'] = NULL;
$arguments106['title'] = NULL;
$arguments106['accesskey'] = NULL;
$arguments106['tabindex'] = NULL;
$arguments106['onclick'] = NULL;
$arguments106['required'] = false;
$arguments106['type'] = 'text';
$arguments106['property'] = 'searchWord';
$arguments106['id'] = 'searchWord';
$arguments106['class'] = 'form-control t3js-clearable';

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output103 .= '
								</div>
							</div>
							';
return $output103;
};
$arguments98 = array();
$arguments98['then'] = NULL;
$arguments98['else'] = NULL;
$arguments98['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['0'] = $renderingContext->getVariableProvider()->getByPath('filters.searchWord', $array101);

$expression102 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments98['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)
					),
					$renderingContext
				);
$arguments98['__thenClosure'] = $renderChildrenClosure99;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
							<div class="form-group">
								<label for="timeRestriction" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['key'] = NULL;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$arguments114['languageKey'] = NULL;
$arguments114['alternativeLanguageKeys'] = NULL;
$arguments114['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.timeRange';

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext)]);

$output113 .= '
								</label>

								<div class="col-xs-8">
									<div class="input-group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['additionalAttributes'] = NULL;
$arguments116['data'] = NULL;
$arguments116['name'] = NULL;
$arguments116['value'] = NULL;
$arguments116['property'] = NULL;
$arguments116['autofocus'] = NULL;
$arguments116['disabled'] = NULL;
$arguments116['maxlength'] = NULL;
$arguments116['readonly'] = NULL;
$arguments116['size'] = NULL;
$arguments116['placeholder'] = NULL;
$arguments116['pattern'] = NULL;
$arguments116['errorClass'] = 'f3-form-error';
$arguments116['class'] = NULL;
$arguments116['dir'] = NULL;
$arguments116['id'] = NULL;
$arguments116['lang'] = NULL;
$arguments116['style'] = NULL;
$arguments116['title'] = NULL;
$arguments116['accesskey'] = NULL;
$arguments116['tabindex'] = NULL;
$arguments116['onclick'] = NULL;
$arguments116['required'] = false;
$arguments116['type'] = 'text';
$arguments116['type'] = 'datetime';
$arguments116['property'] = 'timeRestriction';
$arguments116['id'] = 'timeRestriction';
$arguments116['class'] = 'form-control t3js-datetimepicker t3js-clearable';
// Rendering Array
$array118 = array();
$array118['date-type'] = 'datetime';
$array118['date-offset'] = 0;
$arguments116['data'] = $array118;

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output113 .= '
										<span class="input-group-btn">
											<label class="btn btn-default" for="timeRestriction">
												<span class="fa fa-calendar"></span>
											</label>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="timeRestriction" class="col-xs-4 control-label">
									-
								</label>
								<div class="col-xs-8">
									<div class="input-group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['additionalAttributes'] = NULL;
$arguments119['data'] = NULL;
$arguments119['name'] = NULL;
$arguments119['value'] = NULL;
$arguments119['property'] = NULL;
$arguments119['autofocus'] = NULL;
$arguments119['disabled'] = NULL;
$arguments119['maxlength'] = NULL;
$arguments119['readonly'] = NULL;
$arguments119['size'] = NULL;
$arguments119['placeholder'] = NULL;
$arguments119['pattern'] = NULL;
$arguments119['errorClass'] = 'f3-form-error';
$arguments119['class'] = NULL;
$arguments119['dir'] = NULL;
$arguments119['id'] = NULL;
$arguments119['lang'] = NULL;
$arguments119['style'] = NULL;
$arguments119['title'] = NULL;
$arguments119['accesskey'] = NULL;
$arguments119['tabindex'] = NULL;
$arguments119['onclick'] = NULL;
$arguments119['required'] = false;
$arguments119['type'] = 'text';
$arguments119['type'] = 'datetime';
$arguments119['property'] = 'timeRestrictionHigh';
$arguments119['id'] = 'timeRestrictionHigh';
$arguments119['class'] = 'form-control t3js-datetimepicker t3js-clearable';
// Rendering Array
$array121 = array();
$array121['date-type'] = 'datetime';
$array121['date-offset'] = 0;
$arguments119['data'] = $array121;

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output113 .= '
										<span class="input-group-btn">
											<label class="btn btn-default" for="timeRestrictionHigh">
												<span class="fa fa-calendar"></span>
											</label>
										</span>
									</div>
								</div>
							</div>
							';
return $output113;
};
$arguments108 = array();
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$arguments108['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['0'] = $renderingContext->getVariableProvider()->getByPath('filters.timeRestriction', $array111);

$expression112 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments108['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression112(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)
					),
					$renderingContext
				);
$arguments108['__thenClosure'] = $renderChildrenClosure109;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
							<div class="form-group">
								<label for="topNewsRestriction" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['key'] = NULL;
$arguments128['id'] = NULL;
$arguments128['default'] = NULL;
$arguments128['arguments'] = NULL;
$arguments128['extensionName'] = NULL;
$arguments128['languageKey'] = NULL;
$arguments128['alternativeLanguageKeys'] = NULL;
$arguments128['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction';

$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext)]);

$output127 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['name'] = NULL;
$arguments130['value'] = NULL;
$arguments130['property'] = NULL;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['size'] = NULL;
$arguments130['disabled'] = NULL;
$arguments130['options'] = NULL;
$arguments130['optionsAfterContent'] = false;
$arguments130['optionValueField'] = NULL;
$arguments130['optionLabelField'] = NULL;
$arguments130['sortByOptionLabel'] = false;
$arguments130['selectAllByDefault'] = false;
$arguments130['errorClass'] = 'f3-form-error';
$arguments130['prependOptionLabel'] = NULL;
$arguments130['prependOptionValue'] = NULL;
$arguments130['multiple'] = false;
$arguments130['required'] = false;
$arguments130['property'] = 'topNewsRestriction';
$arguments130['class'] = 'form-control';
// Rendering Array
$array132 = array();
$array132['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['key'] = NULL;
$arguments133['id'] = NULL;
$arguments133['default'] = NULL;
$arguments133['arguments'] = NULL;
$arguments133['extensionName'] = NULL;
$arguments133['languageKey'] = NULL;
$arguments133['alternativeLanguageKeys'] = NULL;
$arguments133['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction.1';
$array132['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['key'] = NULL;
$arguments135['id'] = NULL;
$arguments135['default'] = NULL;
$arguments135['arguments'] = NULL;
$arguments135['extensionName'] = NULL;
$arguments135['languageKey'] = NULL;
$arguments135['alternativeLanguageKeys'] = NULL;
$arguments135['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction.2';
$array132['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);
$arguments130['options'] = $array132;
$arguments130['id'] = 'topNewsRestriction';

$output127 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output127 .= '
								</div>
							</div>
							';
return $output127;
};
$arguments122 = array();
$arguments122['then'] = NULL;
$arguments122['else'] = NULL;
$arguments122['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array124 = array();
$array125 = array (
);$array124['0'] = $renderingContext->getVariableProvider()->getByPath('filters.topNewsRestriction', $array125);

$expression126 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments122['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)
					),
					$renderingContext
				);
$arguments122['__thenClosure'] = $renderChildrenClosure123;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
							<div class="form-group">
								<label for="hidden" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['key'] = NULL;
$arguments143['id'] = NULL;
$arguments143['default'] = NULL;
$arguments143['arguments'] = NULL;
$arguments143['extensionName'] = NULL;
$arguments143['languageKey'] = NULL;
$arguments143['alternativeLanguageKeys'] = NULL;
$arguments143['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden';

$output142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext)]);

$output142 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['additionalAttributes'] = NULL;
$arguments145['data'] = NULL;
$arguments145['name'] = NULL;
$arguments145['value'] = NULL;
$arguments145['property'] = NULL;
$arguments145['class'] = NULL;
$arguments145['dir'] = NULL;
$arguments145['id'] = NULL;
$arguments145['lang'] = NULL;
$arguments145['style'] = NULL;
$arguments145['title'] = NULL;
$arguments145['accesskey'] = NULL;
$arguments145['tabindex'] = NULL;
$arguments145['onclick'] = NULL;
$arguments145['size'] = NULL;
$arguments145['disabled'] = NULL;
$arguments145['options'] = NULL;
$arguments145['optionsAfterContent'] = false;
$arguments145['optionValueField'] = NULL;
$arguments145['optionLabelField'] = NULL;
$arguments145['sortByOptionLabel'] = false;
$arguments145['selectAllByDefault'] = false;
$arguments145['errorClass'] = 'f3-form-error';
$arguments145['prependOptionLabel'] = NULL;
$arguments145['prependOptionValue'] = NULL;
$arguments145['multiple'] = false;
$arguments145['required'] = false;
$arguments145['property'] = 'hidden';
$arguments145['class'] = 'form-control';
// Rendering Array
$array147 = array();
$array147['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['key'] = NULL;
$arguments148['id'] = NULL;
$arguments148['default'] = NULL;
$arguments148['arguments'] = NULL;
$arguments148['extensionName'] = NULL;
$arguments148['languageKey'] = NULL;
$arguments148['alternativeLanguageKeys'] = NULL;
$arguments148['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden.hidden';
$array147['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments150 = array();
$arguments150['key'] = NULL;
$arguments150['id'] = NULL;
$arguments150['default'] = NULL;
$arguments150['arguments'] = NULL;
$arguments150['extensionName'] = NULL;
$arguments150['languageKey'] = NULL;
$arguments150['alternativeLanguageKeys'] = NULL;
$arguments150['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden.nonHidden';
$array147['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);
$arguments145['options'] = $array147;
$arguments145['id'] = 'hidden';

$output142 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output142 .= '
								</div>
							</div>
							';
return $output142;
};
$arguments137 = array();
$arguments137['then'] = NULL;
$arguments137['else'] = NULL;
$arguments137['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array139 = array();
$array140 = array (
);$array139['0'] = $renderingContext->getVariableProvider()->getByPath('filters.hidden', $array140);

$expression141 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments137['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression141(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array139)
					),
					$renderingContext
				);
$arguments137['__thenClosure'] = $renderChildrenClosure138;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
							<div class="form-group">
								<label for="archived" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['key'] = NULL;
$arguments158['id'] = NULL;
$arguments158['default'] = NULL;
$arguments158['arguments'] = NULL;
$arguments158['extensionName'] = NULL;
$arguments158['languageKey'] = NULL;
$arguments158['alternativeLanguageKeys'] = NULL;
$arguments158['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction';

$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext)]);

$output157 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['additionalAttributes'] = NULL;
$arguments160['data'] = NULL;
$arguments160['name'] = NULL;
$arguments160['value'] = NULL;
$arguments160['property'] = NULL;
$arguments160['class'] = NULL;
$arguments160['dir'] = NULL;
$arguments160['id'] = NULL;
$arguments160['lang'] = NULL;
$arguments160['style'] = NULL;
$arguments160['title'] = NULL;
$arguments160['accesskey'] = NULL;
$arguments160['tabindex'] = NULL;
$arguments160['onclick'] = NULL;
$arguments160['size'] = NULL;
$arguments160['disabled'] = NULL;
$arguments160['options'] = NULL;
$arguments160['optionsAfterContent'] = false;
$arguments160['optionValueField'] = NULL;
$arguments160['optionLabelField'] = NULL;
$arguments160['sortByOptionLabel'] = false;
$arguments160['selectAllByDefault'] = false;
$arguments160['errorClass'] = 'f3-form-error';
$arguments160['prependOptionLabel'] = NULL;
$arguments160['prependOptionValue'] = NULL;
$arguments160['multiple'] = false;
$arguments160['required'] = false;
$arguments160['property'] = 'archived';
$arguments160['class'] = 'form-control';
// Rendering Array
$array162 = array();
$array162['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['key'] = NULL;
$arguments163['id'] = NULL;
$arguments163['default'] = NULL;
$arguments163['arguments'] = NULL;
$arguments163['extensionName'] = NULL;
$arguments163['languageKey'] = NULL;
$arguments163['alternativeLanguageKeys'] = NULL;
$arguments163['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction.active';
$array162['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments165 = array();
$arguments165['key'] = NULL;
$arguments165['id'] = NULL;
$arguments165['default'] = NULL;
$arguments165['arguments'] = NULL;
$arguments165['extensionName'] = NULL;
$arguments165['languageKey'] = NULL;
$arguments165['alternativeLanguageKeys'] = NULL;
$arguments165['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction.archived';
$array162['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);
$arguments160['options'] = $array162;
$arguments160['id'] = 'archived';

$output157 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);

$output157 .= '
								</div>
							</div>
							';
return $output157;
};
$arguments152 = array();
$arguments152['then'] = NULL;
$arguments152['else'] = NULL;
$arguments152['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array154 = array();
$array155 = array (
);$array154['0'] = $renderingContext->getVariableProvider()->getByPath('filters.archived', $array155);

$expression156 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments152['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array154)
					),
					$renderingContext
				);
$arguments152['__thenClosure'] = $renderChildrenClosure153;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
							<div class="form-group">
								<label for="sortingField" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['key'] = NULL;
$arguments173['id'] = NULL;
$arguments173['default'] = NULL;
$arguments173['arguments'] = NULL;
$arguments173['extensionName'] = NULL;
$arguments173['languageKey'] = NULL;
$arguments173['alternativeLanguageKeys'] = NULL;
$arguments173['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy';

$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext)]);

$output172 .= '
								</label>

								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['name'] = NULL;
$arguments175['value'] = NULL;
$arguments175['property'] = NULL;
$arguments175['class'] = NULL;
$arguments175['dir'] = NULL;
$arguments175['id'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['title'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['onclick'] = NULL;
$arguments175['size'] = NULL;
$arguments175['disabled'] = NULL;
$arguments175['options'] = NULL;
$arguments175['optionsAfterContent'] = false;
$arguments175['optionValueField'] = NULL;
$arguments175['optionLabelField'] = NULL;
$arguments175['sortByOptionLabel'] = false;
$arguments175['selectAllByDefault'] = false;
$arguments175['errorClass'] = 'f3-form-error';
$arguments175['prependOptionLabel'] = NULL;
$arguments175['prependOptionValue'] = NULL;
$arguments175['multiple'] = false;
$arguments175['required'] = false;
$arguments175['class'] = 'form-control';
$arguments175['property'] = 'sortingField';
// Rendering Array
$array177 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['key'] = NULL;
$arguments178['id'] = NULL;
$arguments178['default'] = NULL;
$arguments178['arguments'] = NULL;
$arguments178['extensionName'] = NULL;
$arguments178['languageKey'] = NULL;
$arguments178['alternativeLanguageKeys'] = NULL;
$arguments178['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.title';
$array177['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['key'] = NULL;
$arguments180['id'] = NULL;
$arguments180['default'] = NULL;
$arguments180['arguments'] = NULL;
$arguments180['extensionName'] = NULL;
$arguments180['languageKey'] = NULL;
$arguments180['alternativeLanguageKeys'] = NULL;
$arguments180['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.datetime';
$array177['datetime'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['key'] = NULL;
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$arguments182['languageKey'] = NULL;
$arguments182['alternativeLanguageKeys'] = NULL;
$arguments182['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.tstamp';
$array177['tstamp'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['key'] = NULL;
$arguments184['id'] = NULL;
$arguments184['default'] = NULL;
$arguments184['arguments'] = NULL;
$arguments184['extensionName'] = NULL;
$arguments184['languageKey'] = NULL;
$arguments184['alternativeLanguageKeys'] = NULL;
$arguments184['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.archive';
$array177['archive'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['key'] = NULL;
$arguments186['id'] = NULL;
$arguments186['default'] = NULL;
$arguments186['arguments'] = NULL;
$arguments186['extensionName'] = NULL;
$arguments186['languageKey'] = NULL;
$arguments186['alternativeLanguageKeys'] = NULL;
$arguments186['key'] = 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel';
$array177['author'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);
$arguments175['options'] = $array177;
$arguments175['id'] = 'sortingField';

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output172 .= '
								</div>
								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['additionalAttributes'] = NULL;
$arguments188['data'] = NULL;
$arguments188['name'] = NULL;
$arguments188['value'] = NULL;
$arguments188['property'] = NULL;
$arguments188['class'] = NULL;
$arguments188['dir'] = NULL;
$arguments188['id'] = NULL;
$arguments188['lang'] = NULL;
$arguments188['style'] = NULL;
$arguments188['title'] = NULL;
$arguments188['accesskey'] = NULL;
$arguments188['tabindex'] = NULL;
$arguments188['onclick'] = NULL;
$arguments188['size'] = NULL;
$arguments188['disabled'] = NULL;
$arguments188['options'] = NULL;
$arguments188['optionsAfterContent'] = false;
$arguments188['optionValueField'] = NULL;
$arguments188['optionLabelField'] = NULL;
$arguments188['sortByOptionLabel'] = false;
$arguments188['selectAllByDefault'] = false;
$arguments188['errorClass'] = 'f3-form-error';
$arguments188['prependOptionLabel'] = NULL;
$arguments188['prependOptionValue'] = NULL;
$arguments188['multiple'] = false;
$arguments188['required'] = false;
$arguments188['class'] = 'form-control';
$arguments188['property'] = 'sortingDirection';
// Rendering Array
$array190 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['key'] = NULL;
$arguments191['id'] = NULL;
$arguments191['default'] = NULL;
$arguments191['arguments'] = NULL;
$arguments191['extensionName'] = NULL;
$arguments191['languageKey'] = NULL;
$arguments191['alternativeLanguageKeys'] = NULL;
$arguments191['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderDirection.asc';
$array190['asc'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['key'] = NULL;
$arguments193['id'] = NULL;
$arguments193['default'] = NULL;
$arguments193['arguments'] = NULL;
$arguments193['extensionName'] = NULL;
$arguments193['languageKey'] = NULL;
$arguments193['alternativeLanguageKeys'] = NULL;
$arguments193['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderDirection.desc';
$array190['desc'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);
$arguments188['options'] = $array190;
$arguments188['id'] = 'sortingDirection';

$output172 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output172 .= '
								</div>
							</div>
							';
return $output172;
};
$arguments167 = array();
$arguments167['then'] = NULL;
$arguments167['else'] = NULL;
$arguments167['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array169 = array();
$array170 = array (
);$array169['0'] = $renderingContext->getVariableProvider()->getByPath('filters.sortingField', $array170);

$expression171 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments167['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression171(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array169)
					),
					$renderingContext
				);
$arguments167['__thenClosure'] = $renderChildrenClosure168;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output71 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output200 = '';

$output200 .= '
							<div class="form-group">
								<label for="recursive" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['key'] = NULL;
$arguments201['id'] = NULL;
$arguments201['default'] = NULL;
$arguments201['arguments'] = NULL;
$arguments201['extensionName'] = NULL;
$arguments201['languageKey'] = NULL;
$arguments201['alternativeLanguageKeys'] = NULL;
$arguments201['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.recursive';

$output200 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext)]);

$output200 .= '
								</label>

								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['additionalAttributes'] = NULL;
$arguments203['data'] = NULL;
$arguments203['name'] = NULL;
$arguments203['value'] = NULL;
$arguments203['property'] = NULL;
$arguments203['autofocus'] = NULL;
$arguments203['disabled'] = NULL;
$arguments203['maxlength'] = NULL;
$arguments203['readonly'] = NULL;
$arguments203['size'] = NULL;
$arguments203['placeholder'] = NULL;
$arguments203['pattern'] = NULL;
$arguments203['errorClass'] = 'f3-form-error';
$arguments203['class'] = NULL;
$arguments203['dir'] = NULL;
$arguments203['id'] = NULL;
$arguments203['lang'] = NULL;
$arguments203['style'] = NULL;
$arguments203['title'] = NULL;
$arguments203['accesskey'] = NULL;
$arguments203['tabindex'] = NULL;
$arguments203['onclick'] = NULL;
$arguments203['required'] = false;
$arguments203['type'] = 'text';
$arguments203['type'] = 'number';
// Rendering Array
$array205 = array();
$array205['min'] = 0;
$arguments203['additionalAttributes'] = $array205;
$arguments203['property'] = 'recursive';
$arguments203['id'] = 'recursive';
$arguments203['class'] = 'form-control';

$output200 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output200 .= '
								</div>
							</div>
							';
return $output200;
};
$arguments195 = array();
$arguments195['then'] = NULL;
$arguments195['else'] = NULL;
$arguments195['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array197 = array();
$array198 = array (
);$array197['0'] = $renderingContext->getVariableProvider()->getByPath('filters.number', $array198);

$expression199 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments195['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression199(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array197)
					),
					$renderingContext
				);
$arguments195['__thenClosure'] = $renderChildrenClosure196;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output71 .= '
							<div class="form-group">
								<div class="col-xs-offset-4 col-xs-8">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$output224 = '';

$output224 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['additionalAttributes'] = NULL;
$arguments225['data'] = NULL;
$arguments225['name'] = NULL;
$arguments225['value'] = NULL;
$arguments225['property'] = NULL;
$arguments225['disabled'] = NULL;
$arguments225['class'] = NULL;
$arguments225['dir'] = NULL;
$arguments225['id'] = NULL;
$arguments225['lang'] = NULL;
$arguments225['style'] = NULL;
$arguments225['title'] = NULL;
$arguments225['accesskey'] = NULL;
$arguments225['tabindex'] = NULL;
$arguments225['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['key'] = NULL;
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$arguments227['languageKey'] = NULL;
$arguments227['alternativeLanguageKeys'] = NULL;
$arguments227['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';
$arguments225['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);
$arguments225['class'] = 'btn btn-primary';

$output224 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output224 .= '
										';
return $output224;
};
$arguments222 = array();

$output221 .= '';

$output221 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['additionalAttributes'] = NULL;
$arguments232['data'] = NULL;
$arguments232['name'] = NULL;
$arguments232['value'] = NULL;
$arguments232['property'] = NULL;
$arguments232['disabled'] = NULL;
$arguments232['class'] = NULL;
$arguments232['dir'] = NULL;
$arguments232['id'] = NULL;
$arguments232['lang'] = NULL;
$arguments232['style'] = NULL;
$arguments232['title'] = NULL;
$arguments232['accesskey'] = NULL;
$arguments232['tabindex'] = NULL;
$arguments232['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments234 = array();
$arguments234['key'] = NULL;
$arguments234['id'] = NULL;
$arguments234['default'] = NULL;
$arguments234['arguments'] = NULL;
$arguments234['extensionName'] = NULL;
$arguments234['languageKey'] = NULL;
$arguments234['alternativeLanguageKeys'] = NULL;
$arguments234['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_common.xlf:search';
$arguments232['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);
$arguments232['class'] = 'btn btn-primary';

$output231 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output231 .= '
										';
return $output231;
};
$arguments229 = array();
$arguments229['if'] = NULL;

$output221 .= '';

$output221 .= '
									';
return $output221;
};
$arguments206 = array();
$arguments206['then'] = NULL;
$arguments206['else'] = NULL;
$arguments206['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array218 = array();
$array219 = array (
);$array218['0'] = $renderingContext->getVariableProvider()->getByPath('is9up', $array219);

$expression220 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments206['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression220(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array218)
					),
					$renderingContext
				);
$arguments206['__thenClosure'] = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['additionalAttributes'] = NULL;
$arguments209['data'] = NULL;
$arguments209['name'] = NULL;
$arguments209['value'] = NULL;
$arguments209['property'] = NULL;
$arguments209['disabled'] = NULL;
$arguments209['class'] = NULL;
$arguments209['dir'] = NULL;
$arguments209['id'] = NULL;
$arguments209['lang'] = NULL;
$arguments209['style'] = NULL;
$arguments209['title'] = NULL;
$arguments209['accesskey'] = NULL;
$arguments209['tabindex'] = NULL;
$arguments209['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$arguments211['key'] = NULL;
$arguments211['id'] = NULL;
$arguments211['default'] = NULL;
$arguments211['arguments'] = NULL;
$arguments211['extensionName'] = NULL;
$arguments211['languageKey'] = NULL;
$arguments211['alternativeLanguageKeys'] = NULL;
$arguments211['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';
$arguments209['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);
$arguments209['class'] = 'btn btn-primary';

$output208 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output208 .= '
										';
return $output208;
};
$arguments206['__elseClosures'][] = function() use ($renderingContext, $self) {
$output213 = '';

$output213 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['additionalAttributes'] = NULL;
$arguments214['data'] = NULL;
$arguments214['name'] = NULL;
$arguments214['value'] = NULL;
$arguments214['property'] = NULL;
$arguments214['disabled'] = NULL;
$arguments214['class'] = NULL;
$arguments214['dir'] = NULL;
$arguments214['id'] = NULL;
$arguments214['lang'] = NULL;
$arguments214['style'] = NULL;
$arguments214['title'] = NULL;
$arguments214['accesskey'] = NULL;
$arguments214['tabindex'] = NULL;
$arguments214['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['key'] = NULL;
$arguments216['id'] = NULL;
$arguments216['default'] = NULL;
$arguments216['arguments'] = NULL;
$arguments216['extensionName'] = NULL;
$arguments216['languageKey'] = NULL;
$arguments216['alternativeLanguageKeys'] = NULL;
$arguments216['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_common.xlf:search';
$arguments214['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);
$arguments214['class'] = 'btn btn-primary';

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output213 .= '
										';
return $output213;
};

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output71 .= '
								</div>
							</div>
						</div>
						<div class="col-xs-6">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$output241 = '';

$output241 .= '
							<div class="category-tree">
								<div class="form-group">
									<div class="tree-wrapper">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['section'] = NULL;
$arguments242['partial'] = NULL;
$arguments242['delegate'] = NULL;
$arguments242['renderable'] = NULL;
$arguments242['arguments'] = array (
);
$arguments242['optional'] = false;
$arguments242['default'] = NULL;
$arguments242['contentAs'] = NULL;
$arguments242['debug'] = true;
$arguments242['section'] = 'categoryTree';
// Rendering Array
$array244 = array();
$array245 = array (
);$array244['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array245);
$array246 = array (
);$array244['categories'] = $renderingContext->getVariableProvider()->getByPath('categories', $array246);
$array244['class'] = 'list-tree';
$arguments242['arguments'] = $array244;

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output241 .= '
									</div>
								</div>

								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output252 = '';

$output252 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
									<div class="form-group">
										<label for="categoryConjunction" class="col-xs-4 control-label">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments259 = array();
$arguments259['key'] = NULL;
$arguments259['id'] = NULL;
$arguments259['default'] = NULL;
$arguments259['arguments'] = NULL;
$arguments259['extensionName'] = NULL;
$arguments259['languageKey'] = NULL;
$arguments259['alternativeLanguageKeys'] = NULL;
$arguments259['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.categoryConjunction';

$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext)]);

$output258 .= '
										</label>

										<div class="col-xs-4">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['additionalAttributes'] = NULL;
$arguments261['data'] = NULL;
$arguments261['name'] = NULL;
$arguments261['value'] = NULL;
$arguments261['property'] = NULL;
$arguments261['class'] = NULL;
$arguments261['dir'] = NULL;
$arguments261['id'] = NULL;
$arguments261['lang'] = NULL;
$arguments261['style'] = NULL;
$arguments261['title'] = NULL;
$arguments261['accesskey'] = NULL;
$arguments261['tabindex'] = NULL;
$arguments261['onclick'] = NULL;
$arguments261['size'] = NULL;
$arguments261['disabled'] = NULL;
$arguments261['options'] = NULL;
$arguments261['optionsAfterContent'] = false;
$arguments261['optionValueField'] = NULL;
$arguments261['optionLabelField'] = NULL;
$arguments261['sortByOptionLabel'] = false;
$arguments261['selectAllByDefault'] = false;
$arguments261['errorClass'] = 'f3-form-error';
$arguments261['prependOptionLabel'] = NULL;
$arguments261['prependOptionValue'] = NULL;
$arguments261['multiple'] = false;
$arguments261['required'] = false;
$arguments261['class'] = 'form-control';
$arguments261['property'] = 'categoryConjunction';
$arguments261['id'] = 'categoryConjunction';
// Rendering Array
$array263 = array();
$array263['AND'] = 'AND';
$array263['OR'] = 'OR';
$array263['notor'] = 'notor';
$array263['notand'] = 'notand';
$arguments261['options'] = $array263;

$output258 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext);

$output258 .= '
										</div>
									</div>
									';
return $output258;
};
$arguments253 = array();
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$arguments253['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array255 = array();
$array256 = array (
);$array255['0'] = $renderingContext->getVariableProvider()->getByPath('filters.categoryConjunction', $array256);

$expression257 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments253['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression257(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array255)
					),
					$renderingContext
				);
$arguments253['__thenClosure'] = $renderChildrenClosure254;

$output252 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output252 .= '

									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
									<div class="form-group">
										<label for="includeSubCategories" class="col-xs-4 control-label">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['key'] = NULL;
$arguments270['id'] = NULL;
$arguments270['default'] = NULL;
$arguments270['arguments'] = NULL;
$arguments270['extensionName'] = NULL;
$arguments270['languageKey'] = NULL;
$arguments270['alternativeLanguageKeys'] = NULL;
$arguments270['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.includeSubCategories';

$output269 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext)]);

$output269 .= '
										</label>

										<div class="col-xs-8">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['additionalAttributes'] = NULL;
$arguments272['data'] = NULL;
$arguments272['name'] = NULL;
$arguments272['value'] = NULL;
$arguments272['property'] = NULL;
$arguments272['disabled'] = NULL;
$arguments272['errorClass'] = 'f3-form-error';
$arguments272['class'] = NULL;
$arguments272['dir'] = NULL;
$arguments272['id'] = NULL;
$arguments272['lang'] = NULL;
$arguments272['style'] = NULL;
$arguments272['title'] = NULL;
$arguments272['accesskey'] = NULL;
$arguments272['tabindex'] = NULL;
$arguments272['onclick'] = NULL;
$arguments272['checked'] = NULL;
$arguments272['multiple'] = false;
$arguments272['class'] = 'checkbox';
$arguments272['property'] = 'includeSubCategories';
$arguments272['value'] = 1;
$arguments272['id'] = 'includeSubCategories';

$output269 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output269 .= '
										</div>
									</div>
									';
return $output269;
};
$arguments264 = array();
$arguments264['then'] = NULL;
$arguments264['else'] = NULL;
$arguments264['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array266 = array();
$array267 = array (
);$array266['0'] = $renderingContext->getVariableProvider()->getByPath('filters.includeSubCategories', $array267);

$expression268 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments264['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression268(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array266)
					),
					$renderingContext
				);
$arguments264['__thenClosure'] = $renderChildrenClosure265;

$output252 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output252 .= '
								';
return $output252;
};
$arguments247 = array();
$arguments247['then'] = NULL;
$arguments247['else'] = NULL;
$arguments247['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array249 = array();
$array250 = array (
);$array249['0'] = $renderingContext->getVariableProvider()->getByPath('categories', $array250);

$expression251 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments247['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression251(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array249)
					),
					$renderingContext
				);
$arguments247['__thenClosure'] = $renderChildrenClosure248;

$output241 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output241 .= '
							</div>
							';
return $output241;
};
$arguments236 = array();
$arguments236['then'] = NULL;
$arguments236['else'] = NULL;
$arguments236['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array238 = array();
$array239 = array (
);$array238['0'] = $renderingContext->getVariableProvider()->getByPath('filters.categories', $array239);

$expression240 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments236['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression240(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array238)
					),
					$renderingContext
				);
$arguments236['__thenClosure'] = $renderChildrenClosure237;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext);

$output71 .= '
						</div>
					</div>
				</div>
			</div>
		';
return $output71;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['action'] = NULL;
$arguments66['arguments'] = array (
);
$arguments66['controller'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['pluginName'] = NULL;
$arguments66['pageUid'] = NULL;
$arguments66['object'] = NULL;
$arguments66['pageType'] = 0;
$arguments66['noCache'] = false;
$arguments66['noCacheHash'] = false;
$arguments66['section'] = '';
$arguments66['format'] = '';
$arguments66['additionalParams'] = array (
);
$arguments66['absolute'] = false;
$arguments66['addQueryString'] = false;
$arguments66['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments66['addQueryStringMethod'] = 'GET';
$arguments66['fieldNamePrefix'] = NULL;
$arguments66['actionUri'] = NULL;
$arguments66['objectName'] = NULL;
$arguments66['hiddenFieldClassName'] = NULL;
$arguments66['enctype'] = NULL;
$arguments66['method'] = NULL;
$arguments66['name'] = NULL;
$arguments66['onreset'] = NULL;
$arguments66['onsubmit'] = NULL;
$arguments66['target'] = NULL;
$arguments66['novalidate'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['id'] = 'administrationForm';
$arguments66['name'] = 'demand';
$array68 = array (
);$arguments66['object'] = $renderingContext->getVariableProvider()->getByPath('demand', $array68);
$arguments66['method'] = 'get';
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['autoSubmitForm'] = $renderingContext->getVariableProvider()->getByPath('autoSubmitForm', $array70);
$arguments66['data'] = $array69;

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
	';
return $output65;
};
$arguments60 = array();
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$arguments60['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['0'] = $renderingContext->getVariableProvider()->getByPath('showSearchForm', $array63);

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments60['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);
$arguments60['__thenClosure'] = $renderChildrenClosure61;

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output28 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
$output292 = '';

$output292 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output295 = '';

$output295 .= '
			<div class="result">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$array298 = array (
);return $renderingContext->getVariableProvider()->getByPath('news', $array298);
};
$arguments296 = array();
$arguments296['value'] = NULL;

$output295 .= isset($arguments296['value']) ? $arguments296['value'] : $renderChildrenClosure297();

$output295 .= '
			</div>
		';
return $output295;
};
$arguments293 = array();

$output292 .= '';

$output292 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$output301 = '';

$output301 .= '
			<div class="callout callout-info">
				<div class="media">
					<div class="media-left">
						<span class="fa-stack fa-lg callout-icon"> <i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-info fa-stack-1x"></i> </span>
					</div>
					<div class="media-body">
						<h4 class="callout-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['key'] = NULL;
$arguments302['id'] = NULL;
$arguments302['default'] = NULL;
$arguments302['arguments'] = NULL;
$arguments302['extensionName'] = NULL;
$arguments302['languageKey'] = NULL;
$arguments302['alternativeLanguageKeys'] = NULL;
$arguments302['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfound';

$output301 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext)]);

$output301 .= '</h4>
						<div class="callout-body">
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['key'] = NULL;
$arguments304['id'] = NULL;
$arguments304['default'] = NULL;
$arguments304['arguments'] = NULL;
$arguments304['extensionName'] = NULL;
$arguments304['languageKey'] = NULL;
$arguments304['alternativeLanguageKeys'] = NULL;
$arguments304['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundText';

$output301 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext)]);

$output301 .= '</p>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments308 = array();
$arguments308['key'] = NULL;
$arguments308['id'] = NULL;
$arguments308['default'] = NULL;
$arguments308['arguments'] = NULL;
$arguments308['extensionName'] = NULL;
$arguments308['languageKey'] = NULL;
$arguments308['alternativeLanguageKeys'] = NULL;
$arguments308['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundSwitch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext)]);
};
$arguments306 = array();
$arguments306['additionalAttributes'] = NULL;
$arguments306['data'] = NULL;
$arguments306['class'] = NULL;
$arguments306['dir'] = NULL;
$arguments306['id'] = NULL;
$arguments306['lang'] = NULL;
$arguments306['style'] = NULL;
$arguments306['title'] = NULL;
$arguments306['accesskey'] = NULL;
$arguments306['tabindex'] = NULL;
$arguments306['onclick'] = NULL;
$arguments306['name'] = NULL;
$arguments306['rel'] = NULL;
$arguments306['rev'] = NULL;
$arguments306['target'] = NULL;
$arguments306['action'] = NULL;
$arguments306['controller'] = NULL;
$arguments306['extensionName'] = NULL;
$arguments306['pluginName'] = NULL;
$arguments306['pageUid'] = NULL;
$arguments306['pageType'] = NULL;
$arguments306['noCache'] = NULL;
$arguments306['noCacheHash'] = NULL;
$arguments306['section'] = NULL;
$arguments306['format'] = NULL;
$arguments306['linkAccessRestrictedPages'] = NULL;
$arguments306['additionalParams'] = NULL;
$arguments306['absolute'] = NULL;
$arguments306['addQueryString'] = NULL;
$arguments306['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments306['addQueryStringMethod'] = NULL;
$arguments306['arguments'] = NULL;
$arguments306['action'] = 'newsPidListing';
$arguments306['class'] = 'btn btn-info';

$output301 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output301 .= '
							</p>
						</div>
					</div>
				</div>
			</div>

		';
return $output301;
};
$arguments299 = array();
$arguments299['if'] = NULL;

$output292 .= '';

$output292 .= '
	';
return $output292;
};
$arguments274 = array();
$arguments274['then'] = NULL;
$arguments274['else'] = NULL;
$arguments274['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array289 = array();
$array290 = array (
);$array289['0'] = $renderingContext->getVariableProvider()->getByPath('newsCount', $array290);

$expression291 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments274['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression291(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array289)
					),
					$renderingContext
				);
$arguments274['__thenClosure'] = function() use ($renderingContext, $self) {
$output276 = '';

$output276 .= '
			<div class="result">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
$array279 = array (
);return $renderingContext->getVariableProvider()->getByPath('news', $array279);
};
$arguments277 = array();
$arguments277['value'] = NULL;

$output276 .= isset($arguments277['value']) ? $arguments277['value'] : $renderChildrenClosure278();

$output276 .= '
			</div>
		';
return $output276;
};
$arguments274['__elseClosures'][] = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
			<div class="callout callout-info">
				<div class="media">
					<div class="media-left">
						<span class="fa-stack fa-lg callout-icon"> <i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-info fa-stack-1x"></i> </span>
					</div>
					<div class="media-body">
						<h4 class="callout-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['key'] = NULL;
$arguments281['id'] = NULL;
$arguments281['default'] = NULL;
$arguments281['arguments'] = NULL;
$arguments281['extensionName'] = NULL;
$arguments281['languageKey'] = NULL;
$arguments281['alternativeLanguageKeys'] = NULL;
$arguments281['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfound';

$output280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext)]);

$output280 .= '</h4>
						<div class="callout-body">
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['key'] = NULL;
$arguments283['id'] = NULL;
$arguments283['default'] = NULL;
$arguments283['arguments'] = NULL;
$arguments283['extensionName'] = NULL;
$arguments283['languageKey'] = NULL;
$arguments283['alternativeLanguageKeys'] = NULL;
$arguments283['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundText';

$output280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext)]);

$output280 .= '</p>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments287 = array();
$arguments287['key'] = NULL;
$arguments287['id'] = NULL;
$arguments287['default'] = NULL;
$arguments287['arguments'] = NULL;
$arguments287['extensionName'] = NULL;
$arguments287['languageKey'] = NULL;
$arguments287['alternativeLanguageKeys'] = NULL;
$arguments287['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundSwitch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext)]);
};
$arguments285 = array();
$arguments285['additionalAttributes'] = NULL;
$arguments285['data'] = NULL;
$arguments285['class'] = NULL;
$arguments285['dir'] = NULL;
$arguments285['id'] = NULL;
$arguments285['lang'] = NULL;
$arguments285['style'] = NULL;
$arguments285['title'] = NULL;
$arguments285['accesskey'] = NULL;
$arguments285['tabindex'] = NULL;
$arguments285['onclick'] = NULL;
$arguments285['name'] = NULL;
$arguments285['rel'] = NULL;
$arguments285['rev'] = NULL;
$arguments285['target'] = NULL;
$arguments285['action'] = NULL;
$arguments285['controller'] = NULL;
$arguments285['extensionName'] = NULL;
$arguments285['pluginName'] = NULL;
$arguments285['pageUid'] = NULL;
$arguments285['pageType'] = NULL;
$arguments285['noCache'] = NULL;
$arguments285['noCacheHash'] = NULL;
$arguments285['section'] = NULL;
$arguments285['format'] = NULL;
$arguments285['linkAccessRestrictedPages'] = NULL;
$arguments285['additionalParams'] = NULL;
$arguments285['absolute'] = NULL;
$arguments285['addQueryString'] = NULL;
$arguments285['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments285['addQueryStringMethod'] = NULL;
$arguments285['arguments'] = NULL;
$arguments285['action'] = 'newsPidListing';
$arguments285['class'] = 'btn btn-info';

$output280 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output280 .= '
							</p>
						</div>
					</div>
				</div>
			</div>

		';
return $output280;
};

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output28 .= '
	<script type="text/javascript">
		T3_THIS_LOCATION = {requestUri -> f:format.raw()};

        function jumpToUrl(URL) {
            window.location.href = URL;
            return false;
        }
        function jumpExt(URL,anchor) {	//
            var anc = anchor?anchor:"";
            window.location.href = URL+(T3_THIS_LOCATION?"&returnUrl="+T3_THIS_LOCATION:"")+anc;
            return false;
        }
        function jumpSelf(URL) {	//
            window.location.href = URL+(T3_RETURN_URL?"&returnUrl="+T3_RETURN_URL:"");
            return false;
        }
	</script>
';

return $output28;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output310 = '';

$output310 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments311 = array();
$arguments311['name'] = NULL;
$arguments311['name'] = 'Backend/Default';

$output310 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output310 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
	<ul class="';
$array316 = array (
);
$output315 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array316)]);

$output315 .= '">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
$output320 = '';

$output320 .= '
			<li>
				<label title="';
$array321 = array (
);
$output320 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.uid', $array321)]);

$output320 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$array325 = array (
);return $renderingContext->getVariableProvider()->getByPath('category.item.title', $array325);
};
$arguments322 = array();
$arguments322['value'] = NULL;
$arguments322['keepQuotes'] = false;
$arguments322['encoding'] = 'UTF-8';
$arguments322['doubleEncode'] = true;
$value324 = ($arguments322['value'] !== NULL ? $arguments322['value'] : $renderChildrenClosure323());

$output320 .= !is_string($value324) && !(is_object($value324) && method_exists($value324, '__toString')) ? $value324 : htmlspecialchars($value324, ($arguments322['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments322['encoding'], $arguments322['doubleEncode']);

$output320 .= '">
					<input type="checkbox" ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\Be\IsCheckboxActiveViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments326 = array();
$arguments326['id'] = NULL;
$arguments326['categories'] = array (
);
$array328 = array (
);$arguments326['id'] = $renderingContext->getVariableProvider()->getByPath('category.item.uid', $array328);
$array329 = array (
);$arguments326['categories'] = $renderingContext->getVariableProvider()->getByPath('demand.selectedCategories', $array329);

$output320 .= GeorgRinger\News\ViewHelpers\Be\IsCheckboxActiveViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output320 .= ' name="tx_news_web_newstxnewsm2[demand][selectedCategories][]" value="';
$array330 = array (
);
$output320 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.uid', $array330)]);

$output320 .= '" /> ';
$array331 = array (
);
$output320 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('category.item.title', $array331)]);

$output320 .= '
				</label>

				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$output337 = '';

$output337 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments338 = array();
$arguments338['section'] = NULL;
$arguments338['partial'] = NULL;
$arguments338['delegate'] = NULL;
$arguments338['renderable'] = NULL;
$arguments338['arguments'] = array (
);
$arguments338['optional'] = false;
$arguments338['default'] = NULL;
$arguments338['contentAs'] = NULL;
$arguments338['debug'] = true;
$arguments338['section'] = 'categoryTree';
// Rendering Array
$array340 = array();
$array341 = array (
);$array340['categories'] = $renderingContext->getVariableProvider()->getByPath('category.children', $array341);
$array342 = array (
);$array340['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array342);
$arguments338['arguments'] = $array340;

$output337 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output337 .= '
				';
return $output337;
};
$arguments332 = array();
$arguments332['then'] = NULL;
$arguments332['else'] = NULL;
$arguments332['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array334 = array();
$array335 = array (
);$array334['0'] = $renderingContext->getVariableProvider()->getByPath('category.children', $array335);

$expression336 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments332['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression336(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array334)
					),
					$renderingContext
				);
$arguments332['__thenClosure'] = $renderChildrenClosure333;

$output320 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output320 .= '
			</li>
		';
return $output320;
};
$arguments317 = array();
$arguments317['each'] = NULL;
$arguments317['as'] = NULL;
$arguments317['key'] = NULL;
$arguments317['reverse'] = false;
$arguments317['iteration'] = NULL;
$array319 = array (
);$arguments317['each'] = $renderingContext->getVariableProvider()->getByPath('categories', $array319);
$arguments317['as'] = 'category';

$output315 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext);

$output315 .= '
	</ul>
';
return $output315;
};
$arguments313 = array();
$arguments313['name'] = NULL;
$arguments313['name'] = 'categoryTree';

$output310 .= NULL;

$output310 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
	<h1>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments346 = array();
$arguments346['key'] = NULL;
$arguments346['id'] = NULL;
$arguments346['default'] = NULL;
$arguments346['arguments'] = NULL;
$arguments346['extensionName'] = NULL;
$arguments346['languageKey'] = NULL;
$arguments346['alternativeLanguageKeys'] = NULL;
$arguments346['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.title';

$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext)]);

$output345 .= '
	</h1>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
$output353 = '';

$output353 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
$output359 = '';

$output359 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments360 = array();
$arguments360['key'] = NULL;
$arguments360['id'] = NULL;
$arguments360['default'] = NULL;
$arguments360['arguments'] = NULL;
$arguments360['extensionName'] = NULL;
$arguments360['languageKey'] = NULL;
$arguments360['alternativeLanguageKeys'] = NULL;
$arguments360['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.why.text';

$output359 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext)]);

$output359 .= '
			<br>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$output364 = '';

$output364 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments365 = array();
$arguments365['identifier'] = NULL;
$arguments365['size'] = 'small';
$arguments365['overlay'] = NULL;
$arguments365['state'] = 'default';
$arguments365['alternativeMarkupIdentifier'] = NULL;
$arguments365['identifier'] = 'ext-news-donation';

$output364 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output364 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments367 = array();
$arguments367['key'] = NULL;
$arguments367['id'] = NULL;
$arguments367['default'] = NULL;
$arguments367['arguments'] = NULL;
$arguments367['extensionName'] = NULL;
$arguments367['languageKey'] = NULL;
$arguments367['alternativeLanguageKeys'] = NULL;
$arguments367['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.link';

$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext)]);

$output364 .= '
				';
return $output364;
};
$arguments362 = array();
$arguments362['additionalAttributes'] = NULL;
$arguments362['data'] = NULL;
$arguments362['class'] = NULL;
$arguments362['dir'] = NULL;
$arguments362['id'] = NULL;
$arguments362['lang'] = NULL;
$arguments362['style'] = NULL;
$arguments362['title'] = NULL;
$arguments362['accesskey'] = NULL;
$arguments362['tabindex'] = NULL;
$arguments362['onclick'] = NULL;
$arguments362['name'] = NULL;
$arguments362['rel'] = NULL;
$arguments362['rev'] = NULL;
$arguments362['target'] = NULL;
$arguments362['action'] = NULL;
$arguments362['controller'] = NULL;
$arguments362['extensionName'] = NULL;
$arguments362['pluginName'] = NULL;
$arguments362['pageUid'] = NULL;
$arguments362['pageType'] = NULL;
$arguments362['noCache'] = NULL;
$arguments362['noCacheHash'] = NULL;
$arguments362['section'] = NULL;
$arguments362['format'] = NULL;
$arguments362['linkAccessRestrictedPages'] = NULL;
$arguments362['additionalParams'] = NULL;
$arguments362['absolute'] = NULL;
$arguments362['addQueryString'] = NULL;
$arguments362['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments362['addQueryStringMethod'] = NULL;
$arguments362['arguments'] = NULL;
$arguments362['action'] = 'donate';
$arguments362['class'] = 'btn btn-default';

$output359 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output359 .= '
		';
return $output359;
};
$arguments354 = array();
$arguments354['message'] = NULL;
$arguments354['title'] = NULL;
$arguments354['state'] = -2;
$arguments354['iconName'] = NULL;
$arguments354['disableIcon'] = false;
$output356 = '';

$output356 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments357 = array();
$arguments357['key'] = NULL;
$arguments357['id'] = NULL;
$arguments357['default'] = NULL;
$arguments357['arguments'] = NULL;
$arguments357['extensionName'] = NULL;
$arguments357['languageKey'] = NULL;
$arguments357['alternativeLanguageKeys'] = NULL;
$arguments357['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.donation.support';

$output356 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);
$arguments354['title'] = $output356;
$arguments354['state'] = -1;
$renderChildrenClosure355 = ($arguments354['message'] !== null) ? function() use ($arguments354) { return $arguments354['message']; } : $renderChildrenClosure355;
$output353 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);

$output353 .= '
	';
return $output353;
};
$arguments348 = array();
$arguments348['then'] = NULL;
$arguments348['else'] = NULL;
$arguments348['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array350 = array();
$array351 = array (
);$array350['0'] = $renderingContext->getVariableProvider()->getByPath('showSupportArea', $array351);

$expression352 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments348['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression352(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array350)
					),
					$renderingContext
				);
$arguments348['__thenClosure'] = $renderChildrenClosure349;

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);

$output345 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
$output374 = '';

$output374 .= '
		<div class="alert alert-info">
			<div class="message-body">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments375 = array();
$arguments375['key'] = NULL;
$arguments375['id'] = NULL;
$arguments375['default'] = NULL;
$arguments375['arguments'] = NULL;
$arguments375['extensionName'] = NULL;
$arguments375['languageKey'] = NULL;
$arguments375['alternativeLanguageKeys'] = NULL;
$arguments375['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nopageselected';

$output374 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext)]);

$output374 .= '
			</div>
		</div>
	';
return $output374;
};
$arguments369 = array();
$arguments369['then'] = NULL;
$arguments369['else'] = NULL;
$arguments369['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array371 = array();
$array372 = array (
);$array371['0'] = $renderingContext->getVariableProvider()->getByPath('page', $array372);
$array371['1'] = ' == 0';

$expression373 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments369['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression373(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array371)
					),
					$renderingContext
				);
$arguments369['__thenClosure'] = $renderChildrenClosure370;

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output345 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
$output382 = '';

$output382 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$output388 = '';

$output388 .= '
			<input type="hidden" name="formSubmitted" value="1">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
$output398 = '';

$output398 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
					<input type="hidden" name="route" value="/web/NewsTxNewsM2/">
					<input type="hidden" name="token" value="';
$array402 = array (
);
$output401 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array402)]);

$output401 .= '">
				';
return $output401;
};
$arguments399 = array();

$output398 .= '';

$output398 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
$output405 = '';

$output405 .= '
					<input type="hidden" name="M" value="web_NewsTxNewsM2">
					<input type="hidden" name="moduleToken" value="';
$array406 = array (
);
$output405 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array406)]);

$output405 .= '">
				';
return $output405;
};
$arguments403 = array();
$arguments403['if'] = NULL;

$output398 .= '';

$output398 .= '
			';
return $output398;
};
$arguments389 = array();
$arguments389['then'] = NULL;
$arguments389['else'] = NULL;
$arguments389['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array395 = array();
$array396 = array (
);$array395['0'] = $renderingContext->getVariableProvider()->getByPath('is9up', $array396);

$expression397 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments389['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression397(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array395)
					),
					$renderingContext
				);
$arguments389['__thenClosure'] = function() use ($renderingContext, $self) {
$output391 = '';

$output391 .= '
					<input type="hidden" name="route" value="/web/NewsTxNewsM2/">
					<input type="hidden" name="token" value="';
$array392 = array (
);
$output391 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array392)]);

$output391 .= '">
				';
return $output391;
};
$arguments389['__elseClosures'][] = function() use ($renderingContext, $self) {
$output393 = '';

$output393 .= '
					<input type="hidden" name="M" value="web_NewsTxNewsM2">
					<input type="hidden" name="moduleToken" value="';
$array394 = array (
);
$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleToken', $array394)]);

$output393 .= '">
				';
return $output393;
};

$output388 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output388 .= '

			<input type="hidden" name="id" value="';
$array407 = array (
);
$output388 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page', $array407)]);

$output388 .= '">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments408 = array();
$arguments408['additionalAttributes'] = NULL;
$arguments408['data'] = NULL;
$arguments408['name'] = NULL;
$arguments408['value'] = NULL;
$arguments408['property'] = NULL;
$arguments408['disabled'] = NULL;
$arguments408['errorClass'] = 'f3-form-error';
$arguments408['class'] = NULL;
$arguments408['dir'] = NULL;
$arguments408['id'] = NULL;
$arguments408['lang'] = NULL;
$arguments408['style'] = NULL;
$arguments408['title'] = NULL;
$arguments408['accesskey'] = NULL;
$arguments408['tabindex'] = NULL;
$arguments408['onclick'] = NULL;
$arguments408['checked'] = NULL;
$arguments408['multiple'] = false;
$arguments408['style'] = 'display:none';
$arguments408['property'] = 'selectedCategories';
$arguments408['value'] = 0;

$output388 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);

$output388 .= '

			<div id="setting-container" style="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments410 = array();
$arguments410['then'] = NULL;
$arguments410['else'] = NULL;
$arguments410['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array412 = array();
$array413 = array (
);$array412['0'] = $renderingContext->getVariableProvider()->getByPath('hideForm', $array413);

$expression414 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments410['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression414(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array412)
					),
					$renderingContext
				);
$arguments410['then'] = 'display:none';
$arguments410['else'] = '';

$output388 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);

$output388 .= '">
				<div class="settings">
					<div class="row form-horizontal">
						<div class="col-xs-6">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
$output420 = '';

$output420 .= '
							<div class="form-group">
								<label for="searchWord" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments421 = array();
$arguments421['key'] = NULL;
$arguments421['id'] = NULL;
$arguments421['default'] = NULL;
$arguments421['arguments'] = NULL;
$arguments421['extensionName'] = NULL;
$arguments421['languageKey'] = NULL;
$arguments421['alternativeLanguageKeys'] = NULL;
$arguments421['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.searchWord';

$output420 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext)]);

$output420 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments423 = array();
$arguments423['additionalAttributes'] = NULL;
$arguments423['data'] = NULL;
$arguments423['name'] = NULL;
$arguments423['value'] = NULL;
$arguments423['property'] = NULL;
$arguments423['autofocus'] = NULL;
$arguments423['disabled'] = NULL;
$arguments423['maxlength'] = NULL;
$arguments423['readonly'] = NULL;
$arguments423['size'] = NULL;
$arguments423['placeholder'] = NULL;
$arguments423['pattern'] = NULL;
$arguments423['errorClass'] = 'f3-form-error';
$arguments423['class'] = NULL;
$arguments423['dir'] = NULL;
$arguments423['id'] = NULL;
$arguments423['lang'] = NULL;
$arguments423['style'] = NULL;
$arguments423['title'] = NULL;
$arguments423['accesskey'] = NULL;
$arguments423['tabindex'] = NULL;
$arguments423['onclick'] = NULL;
$arguments423['required'] = false;
$arguments423['type'] = 'text';
$arguments423['property'] = 'searchWord';
$arguments423['id'] = 'searchWord';
$arguments423['class'] = 'form-control t3js-clearable';

$output420 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext);

$output420 .= '
								</div>
							</div>
							';
return $output420;
};
$arguments415 = array();
$arguments415['then'] = NULL;
$arguments415['else'] = NULL;
$arguments415['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array417 = array();
$array418 = array (
);$array417['0'] = $renderingContext->getVariableProvider()->getByPath('filters.searchWord', $array418);

$expression419 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments415['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression419(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array417)
					),
					$renderingContext
				);
$arguments415['__thenClosure'] = $renderChildrenClosure416;

$output388 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);

$output388 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
$output430 = '';

$output430 .= '
							<div class="form-group">
								<label for="timeRestriction" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments431 = array();
$arguments431['key'] = NULL;
$arguments431['id'] = NULL;
$arguments431['default'] = NULL;
$arguments431['arguments'] = NULL;
$arguments431['extensionName'] = NULL;
$arguments431['languageKey'] = NULL;
$arguments431['alternativeLanguageKeys'] = NULL;
$arguments431['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.timeRange';

$output430 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext)]);

$output430 .= '
								</label>

								<div class="col-xs-8">
									<div class="input-group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments433 = array();
$arguments433['additionalAttributes'] = NULL;
$arguments433['data'] = NULL;
$arguments433['name'] = NULL;
$arguments433['value'] = NULL;
$arguments433['property'] = NULL;
$arguments433['autofocus'] = NULL;
$arguments433['disabled'] = NULL;
$arguments433['maxlength'] = NULL;
$arguments433['readonly'] = NULL;
$arguments433['size'] = NULL;
$arguments433['placeholder'] = NULL;
$arguments433['pattern'] = NULL;
$arguments433['errorClass'] = 'f3-form-error';
$arguments433['class'] = NULL;
$arguments433['dir'] = NULL;
$arguments433['id'] = NULL;
$arguments433['lang'] = NULL;
$arguments433['style'] = NULL;
$arguments433['title'] = NULL;
$arguments433['accesskey'] = NULL;
$arguments433['tabindex'] = NULL;
$arguments433['onclick'] = NULL;
$arguments433['required'] = false;
$arguments433['type'] = 'text';
$arguments433['type'] = 'datetime';
$arguments433['property'] = 'timeRestriction';
$arguments433['id'] = 'timeRestriction';
$arguments433['class'] = 'form-control t3js-datetimepicker t3js-clearable';
// Rendering Array
$array435 = array();
$array435['date-type'] = 'datetime';
$array435['date-offset'] = 0;
$arguments433['data'] = $array435;

$output430 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext);

$output430 .= '
										<span class="input-group-btn">
											<label class="btn btn-default" for="timeRestriction">
												<span class="fa fa-calendar"></span>
											</label>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="timeRestriction" class="col-xs-4 control-label">
									-
								</label>
								<div class="col-xs-8">
									<div class="input-group">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments436 = array();
$arguments436['additionalAttributes'] = NULL;
$arguments436['data'] = NULL;
$arguments436['name'] = NULL;
$arguments436['value'] = NULL;
$arguments436['property'] = NULL;
$arguments436['autofocus'] = NULL;
$arguments436['disabled'] = NULL;
$arguments436['maxlength'] = NULL;
$arguments436['readonly'] = NULL;
$arguments436['size'] = NULL;
$arguments436['placeholder'] = NULL;
$arguments436['pattern'] = NULL;
$arguments436['errorClass'] = 'f3-form-error';
$arguments436['class'] = NULL;
$arguments436['dir'] = NULL;
$arguments436['id'] = NULL;
$arguments436['lang'] = NULL;
$arguments436['style'] = NULL;
$arguments436['title'] = NULL;
$arguments436['accesskey'] = NULL;
$arguments436['tabindex'] = NULL;
$arguments436['onclick'] = NULL;
$arguments436['required'] = false;
$arguments436['type'] = 'text';
$arguments436['type'] = 'datetime';
$arguments436['property'] = 'timeRestrictionHigh';
$arguments436['id'] = 'timeRestrictionHigh';
$arguments436['class'] = 'form-control t3js-datetimepicker t3js-clearable';
// Rendering Array
$array438 = array();
$array438['date-type'] = 'datetime';
$array438['date-offset'] = 0;
$arguments436['data'] = $array438;

$output430 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext);

$output430 .= '
										<span class="input-group-btn">
											<label class="btn btn-default" for="timeRestrictionHigh">
												<span class="fa fa-calendar"></span>
											</label>
										</span>
									</div>
								</div>
							</div>
							';
return $output430;
};
$arguments425 = array();
$arguments425['then'] = NULL;
$arguments425['else'] = NULL;
$arguments425['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array427 = array();
$array428 = array (
);$array427['0'] = $renderingContext->getVariableProvider()->getByPath('filters.timeRestriction', $array428);

$expression429 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments425['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression429(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array427)
					),
					$renderingContext
				);
$arguments425['__thenClosure'] = $renderChildrenClosure426;

$output388 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);

$output388 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
$output444 = '';

$output444 .= '
							<div class="form-group">
								<label for="topNewsRestriction" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments445 = array();
$arguments445['key'] = NULL;
$arguments445['id'] = NULL;
$arguments445['default'] = NULL;
$arguments445['arguments'] = NULL;
$arguments445['extensionName'] = NULL;
$arguments445['languageKey'] = NULL;
$arguments445['alternativeLanguageKeys'] = NULL;
$arguments445['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction';

$output444 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext)]);

$output444 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments447 = array();
$arguments447['additionalAttributes'] = NULL;
$arguments447['data'] = NULL;
$arguments447['name'] = NULL;
$arguments447['value'] = NULL;
$arguments447['property'] = NULL;
$arguments447['class'] = NULL;
$arguments447['dir'] = NULL;
$arguments447['id'] = NULL;
$arguments447['lang'] = NULL;
$arguments447['style'] = NULL;
$arguments447['title'] = NULL;
$arguments447['accesskey'] = NULL;
$arguments447['tabindex'] = NULL;
$arguments447['onclick'] = NULL;
$arguments447['size'] = NULL;
$arguments447['disabled'] = NULL;
$arguments447['options'] = NULL;
$arguments447['optionsAfterContent'] = false;
$arguments447['optionValueField'] = NULL;
$arguments447['optionLabelField'] = NULL;
$arguments447['sortByOptionLabel'] = false;
$arguments447['selectAllByDefault'] = false;
$arguments447['errorClass'] = 'f3-form-error';
$arguments447['prependOptionLabel'] = NULL;
$arguments447['prependOptionValue'] = NULL;
$arguments447['multiple'] = false;
$arguments447['required'] = false;
$arguments447['property'] = 'topNewsRestriction';
$arguments447['class'] = 'form-control';
// Rendering Array
$array449 = array();
$array449['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments450 = array();
$arguments450['key'] = NULL;
$arguments450['id'] = NULL;
$arguments450['default'] = NULL;
$arguments450['arguments'] = NULL;
$arguments450['extensionName'] = NULL;
$arguments450['languageKey'] = NULL;
$arguments450['alternativeLanguageKeys'] = NULL;
$arguments450['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction.1';
$array449['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments452 = array();
$arguments452['key'] = NULL;
$arguments452['id'] = NULL;
$arguments452['default'] = NULL;
$arguments452['arguments'] = NULL;
$arguments452['extensionName'] = NULL;
$arguments452['languageKey'] = NULL;
$arguments452['alternativeLanguageKeys'] = NULL;
$arguments452['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.topNewsRestriction.2';
$array449['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext);
$arguments447['options'] = $array449;
$arguments447['id'] = 'topNewsRestriction';

$output444 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output444 .= '
								</div>
							</div>
							';
return $output444;
};
$arguments439 = array();
$arguments439['then'] = NULL;
$arguments439['else'] = NULL;
$arguments439['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array441 = array();
$array442 = array (
);$array441['0'] = $renderingContext->getVariableProvider()->getByPath('filters.topNewsRestriction', $array442);

$expression443 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments439['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression443(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array441)
					),
					$renderingContext
				);
$arguments439['__thenClosure'] = $renderChildrenClosure440;

$output388 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output388 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
$output459 = '';

$output459 .= '
							<div class="form-group">
								<label for="hidden" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments460 = array();
$arguments460['key'] = NULL;
$arguments460['id'] = NULL;
$arguments460['default'] = NULL;
$arguments460['arguments'] = NULL;
$arguments460['extensionName'] = NULL;
$arguments460['languageKey'] = NULL;
$arguments460['alternativeLanguageKeys'] = NULL;
$arguments460['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden';

$output459 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext)]);

$output459 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['additionalAttributes'] = NULL;
$arguments462['data'] = NULL;
$arguments462['name'] = NULL;
$arguments462['value'] = NULL;
$arguments462['property'] = NULL;
$arguments462['class'] = NULL;
$arguments462['dir'] = NULL;
$arguments462['id'] = NULL;
$arguments462['lang'] = NULL;
$arguments462['style'] = NULL;
$arguments462['title'] = NULL;
$arguments462['accesskey'] = NULL;
$arguments462['tabindex'] = NULL;
$arguments462['onclick'] = NULL;
$arguments462['size'] = NULL;
$arguments462['disabled'] = NULL;
$arguments462['options'] = NULL;
$arguments462['optionsAfterContent'] = false;
$arguments462['optionValueField'] = NULL;
$arguments462['optionLabelField'] = NULL;
$arguments462['sortByOptionLabel'] = false;
$arguments462['selectAllByDefault'] = false;
$arguments462['errorClass'] = 'f3-form-error';
$arguments462['prependOptionLabel'] = NULL;
$arguments462['prependOptionValue'] = NULL;
$arguments462['multiple'] = false;
$arguments462['required'] = false;
$arguments462['property'] = 'hidden';
$arguments462['class'] = 'form-control';
// Rendering Array
$array464 = array();
$array464['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments465 = array();
$arguments465['key'] = NULL;
$arguments465['id'] = NULL;
$arguments465['default'] = NULL;
$arguments465['arguments'] = NULL;
$arguments465['extensionName'] = NULL;
$arguments465['languageKey'] = NULL;
$arguments465['alternativeLanguageKeys'] = NULL;
$arguments465['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden.hidden';
$array464['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments467 = array();
$arguments467['key'] = NULL;
$arguments467['id'] = NULL;
$arguments467['default'] = NULL;
$arguments467['arguments'] = NULL;
$arguments467['extensionName'] = NULL;
$arguments467['languageKey'] = NULL;
$arguments467['alternativeLanguageKeys'] = NULL;
$arguments467['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.filter.hidden.nonHidden';
$array464['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments467, $renderChildrenClosure468, $renderingContext);
$arguments462['options'] = $array464;
$arguments462['id'] = 'hidden';

$output459 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);

$output459 .= '
								</div>
							</div>
							';
return $output459;
};
$arguments454 = array();
$arguments454['then'] = NULL;
$arguments454['else'] = NULL;
$arguments454['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array456 = array();
$array457 = array (
);$array456['0'] = $renderingContext->getVariableProvider()->getByPath('filters.hidden', $array457);

$expression458 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments454['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression458(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array456)
					),
					$renderingContext
				);
$arguments454['__thenClosure'] = $renderChildrenClosure455;

$output388 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext);

$output388 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
$output474 = '';

$output474 .= '
							<div class="form-group">
								<label for="archived" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments475 = array();
$arguments475['key'] = NULL;
$arguments475['id'] = NULL;
$arguments475['default'] = NULL;
$arguments475['arguments'] = NULL;
$arguments475['extensionName'] = NULL;
$arguments475['languageKey'] = NULL;
$arguments475['alternativeLanguageKeys'] = NULL;
$arguments475['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction';

$output474 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments475, $renderChildrenClosure476, $renderingContext)]);

$output474 .= '
								</label>

								<div class="col-xs-8">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments477 = array();
$arguments477['additionalAttributes'] = NULL;
$arguments477['data'] = NULL;
$arguments477['name'] = NULL;
$arguments477['value'] = NULL;
$arguments477['property'] = NULL;
$arguments477['class'] = NULL;
$arguments477['dir'] = NULL;
$arguments477['id'] = NULL;
$arguments477['lang'] = NULL;
$arguments477['style'] = NULL;
$arguments477['title'] = NULL;
$arguments477['accesskey'] = NULL;
$arguments477['tabindex'] = NULL;
$arguments477['onclick'] = NULL;
$arguments477['size'] = NULL;
$arguments477['disabled'] = NULL;
$arguments477['options'] = NULL;
$arguments477['optionsAfterContent'] = false;
$arguments477['optionValueField'] = NULL;
$arguments477['optionLabelField'] = NULL;
$arguments477['sortByOptionLabel'] = false;
$arguments477['selectAllByDefault'] = false;
$arguments477['errorClass'] = 'f3-form-error';
$arguments477['prependOptionLabel'] = NULL;
$arguments477['prependOptionValue'] = NULL;
$arguments477['multiple'] = false;
$arguments477['required'] = false;
$arguments477['property'] = 'archived';
$arguments477['class'] = 'form-control';
// Rendering Array
$array479 = array();
$array479['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments480 = array();
$arguments480['key'] = NULL;
$arguments480['id'] = NULL;
$arguments480['default'] = NULL;
$arguments480['arguments'] = NULL;
$arguments480['extensionName'] = NULL;
$arguments480['languageKey'] = NULL;
$arguments480['alternativeLanguageKeys'] = NULL;
$arguments480['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction.active';
$array479['1'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments482 = array();
$arguments482['key'] = NULL;
$arguments482['id'] = NULL;
$arguments482['default'] = NULL;
$arguments482['arguments'] = NULL;
$arguments482['extensionName'] = NULL;
$arguments482['languageKey'] = NULL;
$arguments482['alternativeLanguageKeys'] = NULL;
$arguments482['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.archiveRestriction.archived';
$array479['2'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext);
$arguments477['options'] = $array479;
$arguments477['id'] = 'archived';

$output474 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments477, $renderChildrenClosure478, $renderingContext);

$output474 .= '
								</div>
							</div>
							';
return $output474;
};
$arguments469 = array();
$arguments469['then'] = NULL;
$arguments469['else'] = NULL;
$arguments469['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array471 = array();
$array472 = array (
);$array471['0'] = $renderingContext->getVariableProvider()->getByPath('filters.archived', $array472);

$expression473 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments469['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression473(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array471)
					),
					$renderingContext
				);
$arguments469['__thenClosure'] = $renderChildrenClosure470;

$output388 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments469, $renderChildrenClosure470, $renderingContext);

$output388 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
$output489 = '';

$output489 .= '
							<div class="form-group">
								<label for="sortingField" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments490 = array();
$arguments490['key'] = NULL;
$arguments490['id'] = NULL;
$arguments490['default'] = NULL;
$arguments490['arguments'] = NULL;
$arguments490['extensionName'] = NULL;
$arguments490['languageKey'] = NULL;
$arguments490['alternativeLanguageKeys'] = NULL;
$arguments490['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy';

$output489 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments490, $renderChildrenClosure491, $renderingContext)]);

$output489 .= '
								</label>

								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments492 = array();
$arguments492['additionalAttributes'] = NULL;
$arguments492['data'] = NULL;
$arguments492['name'] = NULL;
$arguments492['value'] = NULL;
$arguments492['property'] = NULL;
$arguments492['class'] = NULL;
$arguments492['dir'] = NULL;
$arguments492['id'] = NULL;
$arguments492['lang'] = NULL;
$arguments492['style'] = NULL;
$arguments492['title'] = NULL;
$arguments492['accesskey'] = NULL;
$arguments492['tabindex'] = NULL;
$arguments492['onclick'] = NULL;
$arguments492['size'] = NULL;
$arguments492['disabled'] = NULL;
$arguments492['options'] = NULL;
$arguments492['optionsAfterContent'] = false;
$arguments492['optionValueField'] = NULL;
$arguments492['optionLabelField'] = NULL;
$arguments492['sortByOptionLabel'] = false;
$arguments492['selectAllByDefault'] = false;
$arguments492['errorClass'] = 'f3-form-error';
$arguments492['prependOptionLabel'] = NULL;
$arguments492['prependOptionValue'] = NULL;
$arguments492['multiple'] = false;
$arguments492['required'] = false;
$arguments492['class'] = 'form-control';
$arguments492['property'] = 'sortingField';
// Rendering Array
$array494 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments495 = array();
$arguments495['key'] = NULL;
$arguments495['id'] = NULL;
$arguments495['default'] = NULL;
$arguments495['arguments'] = NULL;
$arguments495['extensionName'] = NULL;
$arguments495['languageKey'] = NULL;
$arguments495['alternativeLanguageKeys'] = NULL;
$arguments495['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.title';
$array494['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments495, $renderChildrenClosure496, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments497 = array();
$arguments497['key'] = NULL;
$arguments497['id'] = NULL;
$arguments497['default'] = NULL;
$arguments497['arguments'] = NULL;
$arguments497['extensionName'] = NULL;
$arguments497['languageKey'] = NULL;
$arguments497['alternativeLanguageKeys'] = NULL;
$arguments497['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.datetime';
$array494['datetime'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure500 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments499 = array();
$arguments499['key'] = NULL;
$arguments499['id'] = NULL;
$arguments499['default'] = NULL;
$arguments499['arguments'] = NULL;
$arguments499['extensionName'] = NULL;
$arguments499['languageKey'] = NULL;
$arguments499['alternativeLanguageKeys'] = NULL;
$arguments499['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderBy.tstamp';
$array494['tstamp'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments499, $renderChildrenClosure500, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments501 = array();
$arguments501['key'] = NULL;
$arguments501['id'] = NULL;
$arguments501['default'] = NULL;
$arguments501['arguments'] = NULL;
$arguments501['extensionName'] = NULL;
$arguments501['languageKey'] = NULL;
$arguments501['alternativeLanguageKeys'] = NULL;
$arguments501['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.archive';
$array494['archive'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure504 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments503 = array();
$arguments503['key'] = NULL;
$arguments503['id'] = NULL;
$arguments503['default'] = NULL;
$arguments503['arguments'] = NULL;
$arguments503['extensionName'] = NULL;
$arguments503['languageKey'] = NULL;
$arguments503['alternativeLanguageKeys'] = NULL;
$arguments503['key'] = 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel';
$array494['author'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments503, $renderChildrenClosure504, $renderingContext);
$arguments492['options'] = $array494;
$arguments492['id'] = 'sortingField';

$output489 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext);

$output489 .= '
								</div>
								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments505 = array();
$arguments505['additionalAttributes'] = NULL;
$arguments505['data'] = NULL;
$arguments505['name'] = NULL;
$arguments505['value'] = NULL;
$arguments505['property'] = NULL;
$arguments505['class'] = NULL;
$arguments505['dir'] = NULL;
$arguments505['id'] = NULL;
$arguments505['lang'] = NULL;
$arguments505['style'] = NULL;
$arguments505['title'] = NULL;
$arguments505['accesskey'] = NULL;
$arguments505['tabindex'] = NULL;
$arguments505['onclick'] = NULL;
$arguments505['size'] = NULL;
$arguments505['disabled'] = NULL;
$arguments505['options'] = NULL;
$arguments505['optionsAfterContent'] = false;
$arguments505['optionValueField'] = NULL;
$arguments505['optionLabelField'] = NULL;
$arguments505['sortByOptionLabel'] = false;
$arguments505['selectAllByDefault'] = false;
$arguments505['errorClass'] = 'f3-form-error';
$arguments505['prependOptionLabel'] = NULL;
$arguments505['prependOptionValue'] = NULL;
$arguments505['multiple'] = false;
$arguments505['required'] = false;
$arguments505['class'] = 'form-control';
$arguments505['property'] = 'sortingDirection';
// Rendering Array
$array507 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments508 = array();
$arguments508['key'] = NULL;
$arguments508['id'] = NULL;
$arguments508['default'] = NULL;
$arguments508['arguments'] = NULL;
$arguments508['extensionName'] = NULL;
$arguments508['languageKey'] = NULL;
$arguments508['alternativeLanguageKeys'] = NULL;
$arguments508['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderDirection.asc';
$array507['asc'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments510 = array();
$arguments510['key'] = NULL;
$arguments510['id'] = NULL;
$arguments510['default'] = NULL;
$arguments510['arguments'] = NULL;
$arguments510['extensionName'] = NULL;
$arguments510['languageKey'] = NULL;
$arguments510['alternativeLanguageKeys'] = NULL;
$arguments510['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.orderDirection.desc';
$array507['desc'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext);
$arguments505['options'] = $array507;
$arguments505['id'] = 'sortingDirection';

$output489 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext);

$output489 .= '
								</div>
							</div>
							';
return $output489;
};
$arguments484 = array();
$arguments484['then'] = NULL;
$arguments484['else'] = NULL;
$arguments484['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array486 = array();
$array487 = array (
);$array486['0'] = $renderingContext->getVariableProvider()->getByPath('filters.sortingField', $array487);

$expression488 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments484['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression488(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array486)
					),
					$renderingContext
				);
$arguments484['__thenClosure'] = $renderChildrenClosure485;

$output388 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext);

$output388 .= '

							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
$output517 = '';

$output517 .= '
							<div class="form-group">
								<label for="recursive" class="col-xs-4 control-label">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure519 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments518 = array();
$arguments518['key'] = NULL;
$arguments518['id'] = NULL;
$arguments518['default'] = NULL;
$arguments518['arguments'] = NULL;
$arguments518['extensionName'] = NULL;
$arguments518['languageKey'] = NULL;
$arguments518['alternativeLanguageKeys'] = NULL;
$arguments518['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:module.recursive';

$output517 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments518, $renderChildrenClosure519, $renderingContext)]);

$output517 .= '
								</label>

								<div class="col-xs-4">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments520 = array();
$arguments520['additionalAttributes'] = NULL;
$arguments520['data'] = NULL;
$arguments520['name'] = NULL;
$arguments520['value'] = NULL;
$arguments520['property'] = NULL;
$arguments520['autofocus'] = NULL;
$arguments520['disabled'] = NULL;
$arguments520['maxlength'] = NULL;
$arguments520['readonly'] = NULL;
$arguments520['size'] = NULL;
$arguments520['placeholder'] = NULL;
$arguments520['pattern'] = NULL;
$arguments520['errorClass'] = 'f3-form-error';
$arguments520['class'] = NULL;
$arguments520['dir'] = NULL;
$arguments520['id'] = NULL;
$arguments520['lang'] = NULL;
$arguments520['style'] = NULL;
$arguments520['title'] = NULL;
$arguments520['accesskey'] = NULL;
$arguments520['tabindex'] = NULL;
$arguments520['onclick'] = NULL;
$arguments520['required'] = false;
$arguments520['type'] = 'text';
$arguments520['type'] = 'number';
// Rendering Array
$array522 = array();
$array522['min'] = 0;
$arguments520['additionalAttributes'] = $array522;
$arguments520['property'] = 'recursive';
$arguments520['id'] = 'recursive';
$arguments520['class'] = 'form-control';

$output517 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext);

$output517 .= '
								</div>
							</div>
							';
return $output517;
};
$arguments512 = array();
$arguments512['then'] = NULL;
$arguments512['else'] = NULL;
$arguments512['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array514 = array();
$array515 = array (
);$array514['0'] = $renderingContext->getVariableProvider()->getByPath('filters.number', $array515);

$expression516 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments512['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression516(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array514)
					),
					$renderingContext
				);
$arguments512['__thenClosure'] = $renderChildrenClosure513;

$output388 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);

$output388 .= '
							<div class="form-group">
								<div class="col-xs-offset-4 col-xs-8">
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure524 = function() use ($renderingContext, $self) {
$output538 = '';

$output538 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$output541 = '';

$output541 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments542 = array();
$arguments542['additionalAttributes'] = NULL;
$arguments542['data'] = NULL;
$arguments542['name'] = NULL;
$arguments542['value'] = NULL;
$arguments542['property'] = NULL;
$arguments542['disabled'] = NULL;
$arguments542['class'] = NULL;
$arguments542['dir'] = NULL;
$arguments542['id'] = NULL;
$arguments542['lang'] = NULL;
$arguments542['style'] = NULL;
$arguments542['title'] = NULL;
$arguments542['accesskey'] = NULL;
$arguments542['tabindex'] = NULL;
$arguments542['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['key'] = NULL;
$arguments544['id'] = NULL;
$arguments544['default'] = NULL;
$arguments544['arguments'] = NULL;
$arguments544['extensionName'] = NULL;
$arguments544['languageKey'] = NULL;
$arguments544['alternativeLanguageKeys'] = NULL;
$arguments544['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';
$arguments542['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext);
$arguments542['class'] = 'btn btn-primary';

$output541 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext);

$output541 .= '
										';
return $output541;
};
$arguments539 = array();

$output538 .= '';

$output538 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
$output548 = '';

$output548 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments549 = array();
$arguments549['additionalAttributes'] = NULL;
$arguments549['data'] = NULL;
$arguments549['name'] = NULL;
$arguments549['value'] = NULL;
$arguments549['property'] = NULL;
$arguments549['disabled'] = NULL;
$arguments549['class'] = NULL;
$arguments549['dir'] = NULL;
$arguments549['id'] = NULL;
$arguments549['lang'] = NULL;
$arguments549['style'] = NULL;
$arguments549['title'] = NULL;
$arguments549['accesskey'] = NULL;
$arguments549['tabindex'] = NULL;
$arguments549['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure552 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments551 = array();
$arguments551['key'] = NULL;
$arguments551['id'] = NULL;
$arguments551['default'] = NULL;
$arguments551['arguments'] = NULL;
$arguments551['extensionName'] = NULL;
$arguments551['languageKey'] = NULL;
$arguments551['alternativeLanguageKeys'] = NULL;
$arguments551['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_common.xlf:search';
$arguments549['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments551, $renderChildrenClosure552, $renderingContext);
$arguments549['class'] = 'btn btn-primary';

$output548 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext);

$output548 .= '
										';
return $output548;
};
$arguments546 = array();
$arguments546['if'] = NULL;

$output538 .= '';

$output538 .= '
									';
return $output538;
};
$arguments523 = array();
$arguments523['then'] = NULL;
$arguments523['else'] = NULL;
$arguments523['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array535 = array();
$array536 = array (
);$array535['0'] = $renderingContext->getVariableProvider()->getByPath('is9up', $array536);

$expression537 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments523['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression537(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array535)
					),
					$renderingContext
				);
$arguments523['__thenClosure'] = function() use ($renderingContext, $self) {
$output525 = '';

$output525 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments526 = array();
$arguments526['additionalAttributes'] = NULL;
$arguments526['data'] = NULL;
$arguments526['name'] = NULL;
$arguments526['value'] = NULL;
$arguments526['property'] = NULL;
$arguments526['disabled'] = NULL;
$arguments526['class'] = NULL;
$arguments526['dir'] = NULL;
$arguments526['id'] = NULL;
$arguments526['lang'] = NULL;
$arguments526['style'] = NULL;
$arguments526['title'] = NULL;
$arguments526['accesskey'] = NULL;
$arguments526['tabindex'] = NULL;
$arguments526['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments528 = array();
$arguments528['key'] = NULL;
$arguments528['id'] = NULL;
$arguments528['default'] = NULL;
$arguments528['arguments'] = NULL;
$arguments528['extensionName'] = NULL;
$arguments528['languageKey'] = NULL;
$arguments528['alternativeLanguageKeys'] = NULL;
$arguments528['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:search';
$arguments526['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments528, $renderChildrenClosure529, $renderingContext);
$arguments526['class'] = 'btn btn-primary';

$output525 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);

$output525 .= '
										';
return $output525;
};
$arguments523['__elseClosures'][] = function() use ($renderingContext, $self) {
$output530 = '';

$output530 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure532 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments531 = array();
$arguments531['additionalAttributes'] = NULL;
$arguments531['data'] = NULL;
$arguments531['name'] = NULL;
$arguments531['value'] = NULL;
$arguments531['property'] = NULL;
$arguments531['disabled'] = NULL;
$arguments531['class'] = NULL;
$arguments531['dir'] = NULL;
$arguments531['id'] = NULL;
$arguments531['lang'] = NULL;
$arguments531['style'] = NULL;
$arguments531['title'] = NULL;
$arguments531['accesskey'] = NULL;
$arguments531['tabindex'] = NULL;
$arguments531['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments533 = array();
$arguments533['key'] = NULL;
$arguments533['id'] = NULL;
$arguments533['default'] = NULL;
$arguments533['arguments'] = NULL;
$arguments533['extensionName'] = NULL;
$arguments533['languageKey'] = NULL;
$arguments533['alternativeLanguageKeys'] = NULL;
$arguments533['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_common.xlf:search';
$arguments531['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments533, $renderChildrenClosure534, $renderingContext);
$arguments531['class'] = 'btn btn-primary';

$output530 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments531, $renderChildrenClosure532, $renderingContext);

$output530 .= '
										';
return $output530;
};

$output388 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments523, $renderChildrenClosure524, $renderingContext);

$output388 .= '
								</div>
							</div>
						</div>
						<div class="col-xs-6">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
$output558 = '';

$output558 .= '
							<div class="category-tree">
								<div class="form-group">
									<div class="tree-wrapper">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments559 = array();
$arguments559['section'] = NULL;
$arguments559['partial'] = NULL;
$arguments559['delegate'] = NULL;
$arguments559['renderable'] = NULL;
$arguments559['arguments'] = array (
);
$arguments559['optional'] = false;
$arguments559['default'] = NULL;
$arguments559['contentAs'] = NULL;
$arguments559['debug'] = true;
$arguments559['section'] = 'categoryTree';
// Rendering Array
$array561 = array();
$array562 = array (
);$array561['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array562);
$array563 = array (
);$array561['categories'] = $renderingContext->getVariableProvider()->getByPath('categories', $array563);
$array561['class'] = 'list-tree';
$arguments559['arguments'] = $array561;

$output558 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments559, $renderChildrenClosure560, $renderingContext);

$output558 .= '
									</div>
								</div>

								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure565 = function() use ($renderingContext, $self) {
$output569 = '';

$output569 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
$output575 = '';

$output575 .= '
									<div class="form-group">
										<label for="categoryConjunction" class="col-xs-4 control-label">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure577 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments576 = array();
$arguments576['key'] = NULL;
$arguments576['id'] = NULL;
$arguments576['default'] = NULL;
$arguments576['arguments'] = NULL;
$arguments576['extensionName'] = NULL;
$arguments576['languageKey'] = NULL;
$arguments576['alternativeLanguageKeys'] = NULL;
$arguments576['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.categoryConjunction';

$output575 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments576, $renderChildrenClosure577, $renderingContext)]);

$output575 .= '
										</label>

										<div class="col-xs-4">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments578 = array();
$arguments578['additionalAttributes'] = NULL;
$arguments578['data'] = NULL;
$arguments578['name'] = NULL;
$arguments578['value'] = NULL;
$arguments578['property'] = NULL;
$arguments578['class'] = NULL;
$arguments578['dir'] = NULL;
$arguments578['id'] = NULL;
$arguments578['lang'] = NULL;
$arguments578['style'] = NULL;
$arguments578['title'] = NULL;
$arguments578['accesskey'] = NULL;
$arguments578['tabindex'] = NULL;
$arguments578['onclick'] = NULL;
$arguments578['size'] = NULL;
$arguments578['disabled'] = NULL;
$arguments578['options'] = NULL;
$arguments578['optionsAfterContent'] = false;
$arguments578['optionValueField'] = NULL;
$arguments578['optionLabelField'] = NULL;
$arguments578['sortByOptionLabel'] = false;
$arguments578['selectAllByDefault'] = false;
$arguments578['errorClass'] = 'f3-form-error';
$arguments578['prependOptionLabel'] = NULL;
$arguments578['prependOptionValue'] = NULL;
$arguments578['multiple'] = false;
$arguments578['required'] = false;
$arguments578['class'] = 'form-control';
$arguments578['property'] = 'categoryConjunction';
$arguments578['id'] = 'categoryConjunction';
// Rendering Array
$array580 = array();
$array580['AND'] = 'AND';
$array580['OR'] = 'OR';
$array580['notor'] = 'notor';
$array580['notand'] = 'notand';
$arguments578['options'] = $array580;

$output575 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments578, $renderChildrenClosure579, $renderingContext);

$output575 .= '
										</div>
									</div>
									';
return $output575;
};
$arguments570 = array();
$arguments570['then'] = NULL;
$arguments570['else'] = NULL;
$arguments570['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array572 = array();
$array573 = array (
);$array572['0'] = $renderingContext->getVariableProvider()->getByPath('filters.categoryConjunction', $array573);

$expression574 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments570['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression574(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array572)
					),
					$renderingContext
				);
$arguments570['__thenClosure'] = $renderChildrenClosure571;

$output569 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext);

$output569 .= '

									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
$output586 = '';

$output586 .= '
									<div class="form-group">
										<label for="includeSubCategories" class="col-xs-4 control-label">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments587 = array();
$arguments587['key'] = NULL;
$arguments587['id'] = NULL;
$arguments587['default'] = NULL;
$arguments587['arguments'] = NULL;
$arguments587['extensionName'] = NULL;
$arguments587['languageKey'] = NULL;
$arguments587['alternativeLanguageKeys'] = NULL;
$arguments587['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:flexforms_general.includeSubCategories';

$output586 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext)]);

$output586 .= '
										</label>

										<div class="col-xs-8">
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure590 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments589 = array();
$arguments589['additionalAttributes'] = NULL;
$arguments589['data'] = NULL;
$arguments589['name'] = NULL;
$arguments589['value'] = NULL;
$arguments589['property'] = NULL;
$arguments589['disabled'] = NULL;
$arguments589['errorClass'] = 'f3-form-error';
$arguments589['class'] = NULL;
$arguments589['dir'] = NULL;
$arguments589['id'] = NULL;
$arguments589['lang'] = NULL;
$arguments589['style'] = NULL;
$arguments589['title'] = NULL;
$arguments589['accesskey'] = NULL;
$arguments589['tabindex'] = NULL;
$arguments589['onclick'] = NULL;
$arguments589['checked'] = NULL;
$arguments589['multiple'] = false;
$arguments589['class'] = 'checkbox';
$arguments589['property'] = 'includeSubCategories';
$arguments589['value'] = 1;
$arguments589['id'] = 'includeSubCategories';

$output586 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments589, $renderChildrenClosure590, $renderingContext);

$output586 .= '
										</div>
									</div>
									';
return $output586;
};
$arguments581 = array();
$arguments581['then'] = NULL;
$arguments581['else'] = NULL;
$arguments581['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array583 = array();
$array584 = array (
);$array583['0'] = $renderingContext->getVariableProvider()->getByPath('filters.includeSubCategories', $array584);

$expression585 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments581['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression585(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array583)
					),
					$renderingContext
				);
$arguments581['__thenClosure'] = $renderChildrenClosure582;

$output569 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments581, $renderChildrenClosure582, $renderingContext);

$output569 .= '
								';
return $output569;
};
$arguments564 = array();
$arguments564['then'] = NULL;
$arguments564['else'] = NULL;
$arguments564['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array566 = array();
$array567 = array (
);$array566['0'] = $renderingContext->getVariableProvider()->getByPath('categories', $array567);

$expression568 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments564['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression568(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array566)
					),
					$renderingContext
				);
$arguments564['__thenClosure'] = $renderChildrenClosure565;

$output558 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments564, $renderChildrenClosure565, $renderingContext);

$output558 .= '
							</div>
							';
return $output558;
};
$arguments553 = array();
$arguments553['then'] = NULL;
$arguments553['else'] = NULL;
$arguments553['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array555 = array();
$array556 = array (
);$array555['0'] = $renderingContext->getVariableProvider()->getByPath('filters.categories', $array556);

$expression557 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments553['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression557(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array555)
					),
					$renderingContext
				);
$arguments553['__thenClosure'] = $renderChildrenClosure554;

$output388 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext);

$output388 .= '
						</div>
					</div>
				</div>
			</div>
		';
return $output388;
};
$arguments383 = array();
$arguments383['additionalAttributes'] = NULL;
$arguments383['data'] = NULL;
$arguments383['action'] = NULL;
$arguments383['arguments'] = array (
);
$arguments383['controller'] = NULL;
$arguments383['extensionName'] = NULL;
$arguments383['pluginName'] = NULL;
$arguments383['pageUid'] = NULL;
$arguments383['object'] = NULL;
$arguments383['pageType'] = 0;
$arguments383['noCache'] = false;
$arguments383['noCacheHash'] = false;
$arguments383['section'] = '';
$arguments383['format'] = '';
$arguments383['additionalParams'] = array (
);
$arguments383['absolute'] = false;
$arguments383['addQueryString'] = false;
$arguments383['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments383['addQueryStringMethod'] = 'GET';
$arguments383['fieldNamePrefix'] = NULL;
$arguments383['actionUri'] = NULL;
$arguments383['objectName'] = NULL;
$arguments383['hiddenFieldClassName'] = NULL;
$arguments383['enctype'] = NULL;
$arguments383['method'] = NULL;
$arguments383['name'] = NULL;
$arguments383['onreset'] = NULL;
$arguments383['onsubmit'] = NULL;
$arguments383['target'] = NULL;
$arguments383['novalidate'] = NULL;
$arguments383['class'] = NULL;
$arguments383['dir'] = NULL;
$arguments383['id'] = NULL;
$arguments383['lang'] = NULL;
$arguments383['style'] = NULL;
$arguments383['title'] = NULL;
$arguments383['accesskey'] = NULL;
$arguments383['tabindex'] = NULL;
$arguments383['onclick'] = NULL;
$arguments383['id'] = 'administrationForm';
$arguments383['name'] = 'demand';
$array385 = array (
);$arguments383['object'] = $renderingContext->getVariableProvider()->getByPath('demand', $array385);
$arguments383['method'] = 'get';
// Rendering Array
$array386 = array();
$array387 = array (
);$array386['autoSubmitForm'] = $renderingContext->getVariableProvider()->getByPath('autoSubmitForm', $array387);
$arguments383['data'] = $array386;

$output382 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output382 .= '
	';
return $output382;
};
$arguments377 = array();
$arguments377['then'] = NULL;
$arguments377['else'] = NULL;
$arguments377['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array379 = array();
$array380 = array (
);$array379['0'] = $renderingContext->getVariableProvider()->getByPath('showSearchForm', $array380);

$expression381 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments377['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression381(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array379)
					),
					$renderingContext
				);
$arguments377['__thenClosure'] = $renderChildrenClosure378;

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);

$output345 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure592 = function() use ($renderingContext, $self) {
$output609 = '';

$output609 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure611 = function() use ($renderingContext, $self) {
$output612 = '';

$output612 .= '
			<div class="result">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure614 = function() use ($renderingContext, $self) {
$array615 = array (
);return $renderingContext->getVariableProvider()->getByPath('news', $array615);
};
$arguments613 = array();
$arguments613['value'] = NULL;

$output612 .= isset($arguments613['value']) ? $arguments613['value'] : $renderChildrenClosure614();

$output612 .= '
			</div>
		';
return $output612;
};
$arguments610 = array();

$output609 .= '';

$output609 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure617 = function() use ($renderingContext, $self) {
$output618 = '';

$output618 .= '
			<div class="callout callout-info">
				<div class="media">
					<div class="media-left">
						<span class="fa-stack fa-lg callout-icon"> <i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-info fa-stack-1x"></i> </span>
					</div>
					<div class="media-body">
						<h4 class="callout-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure620 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments619 = array();
$arguments619['key'] = NULL;
$arguments619['id'] = NULL;
$arguments619['default'] = NULL;
$arguments619['arguments'] = NULL;
$arguments619['extensionName'] = NULL;
$arguments619['languageKey'] = NULL;
$arguments619['alternativeLanguageKeys'] = NULL;
$arguments619['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfound';

$output618 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments619, $renderChildrenClosure620, $renderingContext)]);

$output618 .= '</h4>
						<div class="callout-body">
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure622 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments621 = array();
$arguments621['key'] = NULL;
$arguments621['id'] = NULL;
$arguments621['default'] = NULL;
$arguments621['arguments'] = NULL;
$arguments621['extensionName'] = NULL;
$arguments621['languageKey'] = NULL;
$arguments621['alternativeLanguageKeys'] = NULL;
$arguments621['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundText';

$output618 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments621, $renderChildrenClosure622, $renderingContext)]);

$output618 .= '</p>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure624 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure626 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments625 = array();
$arguments625['key'] = NULL;
$arguments625['id'] = NULL;
$arguments625['default'] = NULL;
$arguments625['arguments'] = NULL;
$arguments625['extensionName'] = NULL;
$arguments625['languageKey'] = NULL;
$arguments625['alternativeLanguageKeys'] = NULL;
$arguments625['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundSwitch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments625, $renderChildrenClosure626, $renderingContext)]);
};
$arguments623 = array();
$arguments623['additionalAttributes'] = NULL;
$arguments623['data'] = NULL;
$arguments623['class'] = NULL;
$arguments623['dir'] = NULL;
$arguments623['id'] = NULL;
$arguments623['lang'] = NULL;
$arguments623['style'] = NULL;
$arguments623['title'] = NULL;
$arguments623['accesskey'] = NULL;
$arguments623['tabindex'] = NULL;
$arguments623['onclick'] = NULL;
$arguments623['name'] = NULL;
$arguments623['rel'] = NULL;
$arguments623['rev'] = NULL;
$arguments623['target'] = NULL;
$arguments623['action'] = NULL;
$arguments623['controller'] = NULL;
$arguments623['extensionName'] = NULL;
$arguments623['pluginName'] = NULL;
$arguments623['pageUid'] = NULL;
$arguments623['pageType'] = NULL;
$arguments623['noCache'] = NULL;
$arguments623['noCacheHash'] = NULL;
$arguments623['section'] = NULL;
$arguments623['format'] = NULL;
$arguments623['linkAccessRestrictedPages'] = NULL;
$arguments623['additionalParams'] = NULL;
$arguments623['absolute'] = NULL;
$arguments623['addQueryString'] = NULL;
$arguments623['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments623['addQueryStringMethod'] = NULL;
$arguments623['arguments'] = NULL;
$arguments623['action'] = 'newsPidListing';
$arguments623['class'] = 'btn btn-info';

$output618 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments623, $renderChildrenClosure624, $renderingContext);

$output618 .= '
							</p>
						</div>
					</div>
				</div>
			</div>

		';
return $output618;
};
$arguments616 = array();
$arguments616['if'] = NULL;

$output609 .= '';

$output609 .= '
	';
return $output609;
};
$arguments591 = array();
$arguments591['then'] = NULL;
$arguments591['else'] = NULL;
$arguments591['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array606 = array();
$array607 = array (
);$array606['0'] = $renderingContext->getVariableProvider()->getByPath('newsCount', $array607);

$expression608 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments591['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression608(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array606)
					),
					$renderingContext
				);
$arguments591['__thenClosure'] = function() use ($renderingContext, $self) {
$output593 = '';

$output593 .= '
			<div class="result">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure595 = function() use ($renderingContext, $self) {
$array596 = array (
);return $renderingContext->getVariableProvider()->getByPath('news', $array596);
};
$arguments594 = array();
$arguments594['value'] = NULL;

$output593 .= isset($arguments594['value']) ? $arguments594['value'] : $renderChildrenClosure595();

$output593 .= '
			</div>
		';
return $output593;
};
$arguments591['__elseClosures'][] = function() use ($renderingContext, $self) {
$output597 = '';

$output597 .= '
			<div class="callout callout-info">
				<div class="media">
					<div class="media-left">
						<span class="fa-stack fa-lg callout-icon"> <i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-info fa-stack-1x"></i> </span>
					</div>
					<div class="media-body">
						<h4 class="callout-title">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure599 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments598 = array();
$arguments598['key'] = NULL;
$arguments598['id'] = NULL;
$arguments598['default'] = NULL;
$arguments598['arguments'] = NULL;
$arguments598['extensionName'] = NULL;
$arguments598['languageKey'] = NULL;
$arguments598['alternativeLanguageKeys'] = NULL;
$arguments598['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfound';

$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments598, $renderChildrenClosure599, $renderingContext)]);

$output597 .= '</h4>
						<div class="callout-body">
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure601 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments600 = array();
$arguments600['key'] = NULL;
$arguments600['id'] = NULL;
$arguments600['default'] = NULL;
$arguments600['arguments'] = NULL;
$arguments600['extensionName'] = NULL;
$arguments600['languageKey'] = NULL;
$arguments600['alternativeLanguageKeys'] = NULL;
$arguments600['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundText';

$output597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext)]);

$output597 .= '</p>
							<p>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure605 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments604 = array();
$arguments604['key'] = NULL;
$arguments604['id'] = NULL;
$arguments604['default'] = NULL;
$arguments604['arguments'] = NULL;
$arguments604['extensionName'] = NULL;
$arguments604['languageKey'] = NULL;
$arguments604['alternativeLanguageKeys'] = NULL;
$arguments604['key'] = 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:administration.nonewsfoundSwitch';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments604, $renderChildrenClosure605, $renderingContext)]);
};
$arguments602 = array();
$arguments602['additionalAttributes'] = NULL;
$arguments602['data'] = NULL;
$arguments602['class'] = NULL;
$arguments602['dir'] = NULL;
$arguments602['id'] = NULL;
$arguments602['lang'] = NULL;
$arguments602['style'] = NULL;
$arguments602['title'] = NULL;
$arguments602['accesskey'] = NULL;
$arguments602['tabindex'] = NULL;
$arguments602['onclick'] = NULL;
$arguments602['name'] = NULL;
$arguments602['rel'] = NULL;
$arguments602['rev'] = NULL;
$arguments602['target'] = NULL;
$arguments602['action'] = NULL;
$arguments602['controller'] = NULL;
$arguments602['extensionName'] = NULL;
$arguments602['pluginName'] = NULL;
$arguments602['pageUid'] = NULL;
$arguments602['pageType'] = NULL;
$arguments602['noCache'] = NULL;
$arguments602['noCacheHash'] = NULL;
$arguments602['section'] = NULL;
$arguments602['format'] = NULL;
$arguments602['linkAccessRestrictedPages'] = NULL;
$arguments602['additionalParams'] = NULL;
$arguments602['absolute'] = NULL;
$arguments602['addQueryString'] = NULL;
$arguments602['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments602['addQueryStringMethod'] = NULL;
$arguments602['arguments'] = NULL;
$arguments602['action'] = 'newsPidListing';
$arguments602['class'] = 'btn btn-info';

$output597 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext);

$output597 .= '
							</p>
						</div>
					</div>
				</div>
			</div>

		';
return $output597;
};

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments591, $renderChildrenClosure592, $renderingContext);

$output345 .= '
	<script type="text/javascript">
		T3_THIS_LOCATION = {requestUri -> f:format.raw()};

        function jumpToUrl(URL) {
            window.location.href = URL;
            return false;
        }
        function jumpExt(URL,anchor) {	//
            var anc = anchor?anchor:"";
            window.location.href = URL+(T3_THIS_LOCATION?"&returnUrl="+T3_THIS_LOCATION:"")+anc;
            return false;
        }
        function jumpSelf(URL) {	//
            window.location.href = URL+(T3_RETURN_URL?"&returnUrl="+T3_RETURN_URL:"");
            return false;
        }
	</script>
';
return $output345;
};
$arguments343 = array();
$arguments343['name'] = NULL;
$arguments343['name'] = 'content';

$output310 .= NULL;

$output310 .= '

';

return $output310;
}


}
#