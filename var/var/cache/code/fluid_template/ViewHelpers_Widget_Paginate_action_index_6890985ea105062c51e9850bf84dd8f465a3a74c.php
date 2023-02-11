<?php

class ViewHelpers_Widget_Paginate_action_index_6890985ea105062c51e9850bf84dd8f465a3a74c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
));
}

/**
 * section paginator
 */
public function section_31b8d545b1939b065e8931304bab52b99d8b4567(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['useCacheHash'] = false;
$arguments52['addQueryStringMethod'] = NULL;
$arguments52['action'] = NULL;
$arguments52['arguments'] = array (
);
$arguments52['section'] = '';
$arguments52['format'] = '';
$arguments52['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array54['0'] = 1;

$expression55 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments52['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$array56 = array (
);$arguments52['arguments'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array56);
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);
};
$arguments50 = array();
$arguments50['value'] = NULL;
$arguments50['keepQuotes'] = false;
$arguments50['encoding'] = NULL;
$arguments50['doubleEncode'] = true;
$renderChildrenClosure51 = ($arguments50['value'] !== null) ? function() use ($arguments50) { return $arguments50['value']; } : $renderChildrenClosure51;
$output49 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '" />';
return $output49;
};
$arguments47 = array();

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output46 .= '
					';
return $output46;
};
$arguments44 = array();

$output43 .= '';

$output43 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['useCacheHash'] = false;
$arguments65['addQueryStringMethod'] = NULL;
$arguments65['action'] = NULL;
$arguments65['arguments'] = array (
);
$arguments65['section'] = '';
$arguments65['format'] = '';
$arguments65['ajax'] = false;
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);
};
$arguments63 = array();
$arguments63['value'] = NULL;
$arguments63['keepQuotes'] = false;
$arguments63['encoding'] = NULL;
$arguments63['doubleEncode'] = true;
$renderChildrenClosure64 = ($arguments63['value'] !== null) ? function() use ($arguments63) { return $arguments63['value']; } : $renderChildrenClosure64;
$output62 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '" />';
return $output62;
};
$arguments60 = array();

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output59 .= '
					';
return $output59;
};
$arguments57 = array();
$arguments57['if'] = NULL;

$output43 .= '';

$output43 .= '
				';
return $output43;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array41);
$array40['1'] = ' > 1';

$expression42 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments19['__thenClosure'] = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['useCacheHash'] = false;
$arguments27['addQueryStringMethod'] = NULL;
$arguments27['action'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['section'] = '';
$arguments27['format'] = '';
$arguments27['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array29 = array();
$array29['0'] = 1;

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments27['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)
					),
					$renderingContext
				);
$array31 = array (
);$arguments27['arguments'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array31);
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
};
$arguments25 = array();
$arguments25['value'] = NULL;
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = NULL;
$arguments25['doubleEncode'] = true;
$renderChildrenClosure26 = ($arguments25['value'] !== null) ? function() use ($arguments25) { return $arguments25['value']; } : $renderChildrenClosure26;
$output24 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '" />';
return $output24;
};
$arguments22 = array();

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output21 .= '
					';
return $output21;
};
$arguments19['__elseClosures'][] = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['useCacheHash'] = false;
$arguments38['addQueryStringMethod'] = NULL;
$arguments38['action'] = NULL;
$arguments38['arguments'] = array (
);
$arguments38['section'] = '';
$arguments38['format'] = '';
$arguments38['ajax'] = false;
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);
};
$arguments36 = array();
$arguments36['value'] = NULL;
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = NULL;
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = ($arguments36['value'] !== null) ? function() use ($arguments36) { return $arguments36['value']; } : $renderChildrenClosure37;
$output35 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '" />';
return $output35;
};
$arguments33 = array();

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output32 .= '
					';
return $output32;
};

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
			';
return $output18;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array16);

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = $renderChildrenClosure14;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '<link rel="next" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['useCacheHash'] = false;
$arguments78['addQueryStringMethod'] = NULL;
$arguments78['action'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['section'] = '';
$arguments78['format'] = '';
$arguments78['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array80 = array();
$array80['0'] = 1;

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments78['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
$array82 = array (
);$arguments78['arguments'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array82);
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);
};
$arguments76 = array();
$arguments76['value'] = NULL;
$arguments76['keepQuotes'] = false;
$arguments76['encoding'] = NULL;
$arguments76['doubleEncode'] = true;
$renderChildrenClosure77 = ($arguments76['value'] !== null) ? function() use ($arguments76) { return $arguments76['value']; } : $renderChildrenClosure77;
$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '" />';
return $output75;
};
$arguments73 = array();

$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output72 .= '
			';
return $output72;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array70);

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments67['__thenClosure'] = $renderChildrenClosure68;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output12 .= '
		';
return $output12;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.prevNextHeaderTags', $array10);

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = $renderChildrenClosure8;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '

		<div class="page-navigation">
			<p>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['key'] = NULL;
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$arguments83['languageKey'] = NULL;
$arguments83['alternativeLanguageKeys'] = NULL;
$arguments83['key'] = 'paginate_overall';
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.current', $array86);
$array87 = array (
);$array85['1'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array87);
$arguments83['arguments'] = $array85;

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext)]);

$output6 .= '
			</p>
			<ul class="f3-widget-paginator">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
					<li class="previous">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments126 = array();
$arguments126['key'] = NULL;
$arguments126['id'] = NULL;
$arguments126['default'] = NULL;
$arguments126['arguments'] = NULL;
$arguments126['extensionName'] = NULL;
$arguments126['languageKey'] = NULL;
$arguments126['alternativeLanguageKeys'] = NULL;
$arguments126['key'] = 'paginate_previous';

$output125 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext)]);

$output125 .= '
								';
return $output125;
};
$arguments119 = array();
$arguments119['additionalAttributes'] = NULL;
$arguments119['data'] = NULL;
$arguments119['class'] = NULL;
$arguments119['dir'] = NULL;
$arguments119['id'] = NULL;
$arguments119['lang'] = NULL;
$arguments119['style'] = NULL;
$arguments119['title'] = NULL;
$arguments119['accesskey'] = NULL;
$arguments119['tabindex'] = NULL;
$arguments119['onclick'] = NULL;
$arguments119['name'] = NULL;
$arguments119['rel'] = NULL;
$arguments119['rev'] = NULL;
$arguments119['target'] = NULL;
$arguments119['useCacheHash'] = false;
$arguments119['addQueryStringMethod'] = NULL;
$arguments119['action'] = NULL;
$arguments119['arguments'] = array (
);
$arguments119['section'] = '';
$arguments119['format'] = '';
$arguments119['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array121 = array();
$array121['0'] = 1;

$expression122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments119['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);
$arguments119['addQueryStringMethod'] = 'GET';
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array124);
$arguments119['arguments'] = $array123;

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
							';
return $output118;
};
$arguments116 = array();

$output115 .= '';

$output115 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['key'] = NULL;
$arguments134['id'] = NULL;
$arguments134['default'] = NULL;
$arguments134['arguments'] = NULL;
$arguments134['extensionName'] = NULL;
$arguments134['languageKey'] = NULL;
$arguments134['alternativeLanguageKeys'] = NULL;
$arguments134['key'] = 'paginate_previous';

$output133 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext)]);

$output133 .= '
								';
return $output133;
};
$arguments131 = array();
$arguments131['additionalAttributes'] = NULL;
$arguments131['data'] = NULL;
$arguments131['class'] = NULL;
$arguments131['dir'] = NULL;
$arguments131['id'] = NULL;
$arguments131['lang'] = NULL;
$arguments131['style'] = NULL;
$arguments131['title'] = NULL;
$arguments131['accesskey'] = NULL;
$arguments131['tabindex'] = NULL;
$arguments131['onclick'] = NULL;
$arguments131['name'] = NULL;
$arguments131['rel'] = NULL;
$arguments131['rev'] = NULL;
$arguments131['target'] = NULL;
$arguments131['useCacheHash'] = false;
$arguments131['addQueryStringMethod'] = NULL;
$arguments131['action'] = NULL;
$arguments131['arguments'] = array (
);
$arguments131['section'] = '';
$arguments131['format'] = '';
$arguments131['ajax'] = false;
$arguments131['addQueryStringMethod'] = 'GET';

$output130 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output130 .= '
							';
return $output130;
};
$arguments128 = array();
$arguments128['if'] = NULL;

$output115 .= '';

$output115 .= '
						';
return $output115;
};
$arguments94 = array();
$arguments94['then'] = NULL;
$arguments94['else'] = NULL;
$arguments94['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array113);
$array112['1'] = ' > 1';

$expression114 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments94['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$arguments94['__thenClosure'] = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
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
$arguments104['key'] = 'paginate_previous';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext)]);

$output103 .= '
								';
return $output103;
};
$arguments97 = array();
$arguments97['additionalAttributes'] = NULL;
$arguments97['data'] = NULL;
$arguments97['class'] = NULL;
$arguments97['dir'] = NULL;
$arguments97['id'] = NULL;
$arguments97['lang'] = NULL;
$arguments97['style'] = NULL;
$arguments97['title'] = NULL;
$arguments97['accesskey'] = NULL;
$arguments97['tabindex'] = NULL;
$arguments97['onclick'] = NULL;
$arguments97['name'] = NULL;
$arguments97['rel'] = NULL;
$arguments97['rev'] = NULL;
$arguments97['target'] = NULL;
$arguments97['useCacheHash'] = false;
$arguments97['addQueryStringMethod'] = NULL;
$arguments97['action'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['section'] = '';
$arguments97['format'] = '';
$arguments97['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array99['0'] = 1;

$expression100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments97['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments97['addQueryStringMethod'] = 'GET';
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array102);
$arguments97['arguments'] = $array101;

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
							';
return $output96;
};
$arguments94['__elseClosures'][] = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['key'] = NULL;
$arguments110['id'] = NULL;
$arguments110['default'] = NULL;
$arguments110['arguments'] = NULL;
$arguments110['extensionName'] = NULL;
$arguments110['languageKey'] = NULL;
$arguments110['alternativeLanguageKeys'] = NULL;
$arguments110['key'] = 'paginate_previous';

$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext)]);

$output109 .= '
								';
return $output109;
};
$arguments107 = array();
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['name'] = NULL;
$arguments107['rel'] = NULL;
$arguments107['rev'] = NULL;
$arguments107['target'] = NULL;
$arguments107['useCacheHash'] = false;
$arguments107['addQueryStringMethod'] = NULL;
$arguments107['action'] = NULL;
$arguments107['arguments'] = array (
);
$arguments107['section'] = '';
$arguments107['format'] = '';
$arguments107['ajax'] = false;
$arguments107['addQueryStringMethod'] = 'GET';

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
							';
return $output106;
};

$output93 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output93 .= '
					</li>
				';
return $output93;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array91);

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments88['__thenClosure'] = $renderChildrenClosure89;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
					<li class="first">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return '1';
};
$arguments142 = array();
$arguments142['additionalAttributes'] = NULL;
$arguments142['data'] = NULL;
$arguments142['class'] = NULL;
$arguments142['dir'] = NULL;
$arguments142['id'] = NULL;
$arguments142['lang'] = NULL;
$arguments142['style'] = NULL;
$arguments142['title'] = NULL;
$arguments142['accesskey'] = NULL;
$arguments142['tabindex'] = NULL;
$arguments142['onclick'] = NULL;
$arguments142['name'] = NULL;
$arguments142['rel'] = NULL;
$arguments142['rev'] = NULL;
$arguments142['target'] = NULL;
$arguments142['useCacheHash'] = false;
$arguments142['addQueryStringMethod'] = NULL;
$arguments142['action'] = NULL;
$arguments142['arguments'] = array (
);
$arguments142['section'] = '';
$arguments142['format'] = '';
$arguments142['ajax'] = false;
$arguments142['addQueryStringMethod'] = 'GET';

$output141 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output141 .= '
					</li>
				';
return $output141;
};
$arguments136 = array();
$arguments136['then'] = NULL;
$arguments136['else'] = NULL;
$arguments136['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.displayRangeStart', $array139);
$array138['1'] = ' > 1';

$expression140 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments136['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression140(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array138)
					),
					$renderingContext
				);
$arguments136['__thenClosure'] = $renderChildrenClosure137;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return '
					<li>…</li>
				';
};
$arguments144 = array();
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$arguments144['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasLessPages', $array147);

$expression148 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments144['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments144['__thenClosure'] = $renderChildrenClosure145;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$output195 = '';

$output195 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
							<li class="current">';
$array199 = array (
);
$output198 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array199)]);

$output198 .= '</li>
						';
return $output198;
};
$arguments196 = array();

$output195 .= '';

$output195 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$output202 = '';

$output202 .= '
							<li>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$array230 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array230)]);
};
$arguments224 = array();
$arguments224['additionalAttributes'] = NULL;
$arguments224['data'] = NULL;
$arguments224['class'] = NULL;
$arguments224['dir'] = NULL;
$arguments224['id'] = NULL;
$arguments224['lang'] = NULL;
$arguments224['style'] = NULL;
$arguments224['title'] = NULL;
$arguments224['accesskey'] = NULL;
$arguments224['tabindex'] = NULL;
$arguments224['onclick'] = NULL;
$arguments224['name'] = NULL;
$arguments224['rel'] = NULL;
$arguments224['rev'] = NULL;
$arguments224['target'] = NULL;
$arguments224['useCacheHash'] = false;
$arguments224['addQueryStringMethod'] = NULL;
$arguments224['action'] = NULL;
$arguments224['arguments'] = array (
);
$arguments224['section'] = '';
$arguments224['format'] = '';
$arguments224['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array226 = array();
$array226['0'] = 1;

$expression227 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments224['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression227(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array226)
					),
					$renderingContext
				);
$arguments224['addQueryStringMethod'] = 'GET';
// Rendering Array
$array228 = array();
$array229 = array (
);$array228['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array229);
$arguments224['arguments'] = $array228;

$output223 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output223 .= '
									';
return $output223;
};
$arguments221 = array();

$output220 .= '';

$output220 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$array236 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array236)]);
};
$arguments234 = array();
$arguments234['additionalAttributes'] = NULL;
$arguments234['data'] = NULL;
$arguments234['class'] = NULL;
$arguments234['dir'] = NULL;
$arguments234['id'] = NULL;
$arguments234['lang'] = NULL;
$arguments234['style'] = NULL;
$arguments234['title'] = NULL;
$arguments234['accesskey'] = NULL;
$arguments234['tabindex'] = NULL;
$arguments234['onclick'] = NULL;
$arguments234['name'] = NULL;
$arguments234['rel'] = NULL;
$arguments234['rev'] = NULL;
$arguments234['target'] = NULL;
$arguments234['useCacheHash'] = false;
$arguments234['addQueryStringMethod'] = NULL;
$arguments234['action'] = NULL;
$arguments234['arguments'] = array (
);
$arguments234['section'] = '';
$arguments234['format'] = '';
$arguments234['ajax'] = false;
$arguments234['addQueryStringMethod'] = 'GET';

$output233 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output233 .= '
									';
return $output233;
};
$arguments231 = array();
$arguments231['if'] = NULL;

$output220 .= '';

$output220 .= '
								';
return $output220;
};
$arguments203 = array();
$arguments203['then'] = NULL;
$arguments203['else'] = NULL;
$arguments203['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array217 = array();
$array218 = array (
);$array217['0'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array218);
$array217['1'] = ' > 1';

$expression219 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments203['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression219(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array217)
					),
					$renderingContext
				);
$arguments203['__thenClosure'] = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$array212 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array212)]);
};
$arguments206 = array();
$arguments206['additionalAttributes'] = NULL;
$arguments206['data'] = NULL;
$arguments206['class'] = NULL;
$arguments206['dir'] = NULL;
$arguments206['id'] = NULL;
$arguments206['lang'] = NULL;
$arguments206['style'] = NULL;
$arguments206['title'] = NULL;
$arguments206['accesskey'] = NULL;
$arguments206['tabindex'] = NULL;
$arguments206['onclick'] = NULL;
$arguments206['name'] = NULL;
$arguments206['rel'] = NULL;
$arguments206['rev'] = NULL;
$arguments206['target'] = NULL;
$arguments206['useCacheHash'] = false;
$arguments206['addQueryStringMethod'] = NULL;
$arguments206['action'] = NULL;
$arguments206['arguments'] = array (
);
$arguments206['section'] = '';
$arguments206['format'] = '';
$arguments206['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array208 = array();
$array208['0'] = 1;

$expression209 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments206['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression209(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array208)
					),
					$renderingContext
				);
$arguments206['addQueryStringMethod'] = 'GET';
// Rendering Array
$array210 = array();
$array211 = array (
);$array210['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array211);
$arguments206['arguments'] = $array210;

$output205 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '
									';
return $output205;
};
$arguments203['__elseClosures'][] = function() use ($renderingContext, $self) {
$output213 = '';

$output213 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$array216 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array216)]);
};
$arguments214 = array();
$arguments214['additionalAttributes'] = NULL;
$arguments214['data'] = NULL;
$arguments214['class'] = NULL;
$arguments214['dir'] = NULL;
$arguments214['id'] = NULL;
$arguments214['lang'] = NULL;
$arguments214['style'] = NULL;
$arguments214['title'] = NULL;
$arguments214['accesskey'] = NULL;
$arguments214['tabindex'] = NULL;
$arguments214['onclick'] = NULL;
$arguments214['name'] = NULL;
$arguments214['rel'] = NULL;
$arguments214['rev'] = NULL;
$arguments214['target'] = NULL;
$arguments214['useCacheHash'] = false;
$arguments214['addQueryStringMethod'] = NULL;
$arguments214['action'] = NULL;
$arguments214['arguments'] = array (
);
$arguments214['section'] = '';
$arguments214['format'] = '';
$arguments214['ajax'] = false;
$arguments214['addQueryStringMethod'] = 'GET';

$output213 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output213 .= '
									';
return $output213;
};

$output202 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output202 .= '
							</li>
						';
return $output202;
};
$arguments200 = array();
$arguments200['if'] = NULL;

$output195 .= '';

$output195 .= '
					';
return $output195;
};
$arguments153 = array();
$arguments153['then'] = NULL;
$arguments153['else'] = NULL;
$arguments153['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array192 = array();
$array193 = array (
);$array192['0'] = $renderingContext->getVariableProvider()->getByPath('page.isCurrent', $array193);

$expression194 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments153['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression194(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array192)
					),
					$renderingContext
				);
$arguments153['__thenClosure'] = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
							<li class="current">';
$array156 = array (
);
$output155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array156)]);

$output155 .= '</li>
						';
return $output155;
};
$arguments153['__elseClosures'][] = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
							<li>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$array185 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array185)]);
};
$arguments179 = array();
$arguments179['additionalAttributes'] = NULL;
$arguments179['data'] = NULL;
$arguments179['class'] = NULL;
$arguments179['dir'] = NULL;
$arguments179['id'] = NULL;
$arguments179['lang'] = NULL;
$arguments179['style'] = NULL;
$arguments179['title'] = NULL;
$arguments179['accesskey'] = NULL;
$arguments179['tabindex'] = NULL;
$arguments179['onclick'] = NULL;
$arguments179['name'] = NULL;
$arguments179['rel'] = NULL;
$arguments179['rev'] = NULL;
$arguments179['target'] = NULL;
$arguments179['useCacheHash'] = false;
$arguments179['addQueryStringMethod'] = NULL;
$arguments179['action'] = NULL;
$arguments179['arguments'] = array (
);
$arguments179['section'] = '';
$arguments179['format'] = '';
$arguments179['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array181 = array();
$array181['0'] = 1;

$expression182 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments179['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression182(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array181)
					),
					$renderingContext
				);
$arguments179['addQueryStringMethod'] = 'GET';
// Rendering Array
$array183 = array();
$array184 = array (
);$array183['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array184);
$arguments179['arguments'] = $array183;

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output178 .= '
									';
return $output178;
};
$arguments176 = array();

$output175 .= '';

$output175 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$array191 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array191)]);
};
$arguments189 = array();
$arguments189['additionalAttributes'] = NULL;
$arguments189['data'] = NULL;
$arguments189['class'] = NULL;
$arguments189['dir'] = NULL;
$arguments189['id'] = NULL;
$arguments189['lang'] = NULL;
$arguments189['style'] = NULL;
$arguments189['title'] = NULL;
$arguments189['accesskey'] = NULL;
$arguments189['tabindex'] = NULL;
$arguments189['onclick'] = NULL;
$arguments189['name'] = NULL;
$arguments189['rel'] = NULL;
$arguments189['rev'] = NULL;
$arguments189['target'] = NULL;
$arguments189['useCacheHash'] = false;
$arguments189['addQueryStringMethod'] = NULL;
$arguments189['action'] = NULL;
$arguments189['arguments'] = array (
);
$arguments189['section'] = '';
$arguments189['format'] = '';
$arguments189['ajax'] = false;
$arguments189['addQueryStringMethod'] = 'GET';

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '
									';
return $output188;
};
$arguments186 = array();
$arguments186['if'] = NULL;

$output175 .= '';

$output175 .= '
								';
return $output175;
};
$arguments158 = array();
$arguments158['then'] = NULL;
$arguments158['else'] = NULL;
$arguments158['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array172 = array();
$array173 = array (
);$array172['0'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array173);
$array172['1'] = ' > 1';

$expression174 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments158['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression174(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array172)
					),
					$renderingContext
				);
$arguments158['__thenClosure'] = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$array167 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array167)]);
};
$arguments161 = array();
$arguments161['additionalAttributes'] = NULL;
$arguments161['data'] = NULL;
$arguments161['class'] = NULL;
$arguments161['dir'] = NULL;
$arguments161['id'] = NULL;
$arguments161['lang'] = NULL;
$arguments161['style'] = NULL;
$arguments161['title'] = NULL;
$arguments161['accesskey'] = NULL;
$arguments161['tabindex'] = NULL;
$arguments161['onclick'] = NULL;
$arguments161['name'] = NULL;
$arguments161['rel'] = NULL;
$arguments161['rev'] = NULL;
$arguments161['target'] = NULL;
$arguments161['useCacheHash'] = false;
$arguments161['addQueryStringMethod'] = NULL;
$arguments161['action'] = NULL;
$arguments161['arguments'] = array (
);
$arguments161['section'] = '';
$arguments161['format'] = '';
$arguments161['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array163 = array();
$array163['0'] = 1;

$expression164 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments161['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression164(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array163)
					),
					$renderingContext
				);
$arguments161['addQueryStringMethod'] = 'GET';
// Rendering Array
$array165 = array();
$array166 = array (
);$array165['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array166);
$arguments161['arguments'] = $array165;

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
									';
return $output160;
};
$arguments158['__elseClosures'][] = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$array171 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array171)]);
};
$arguments169 = array();
$arguments169['additionalAttributes'] = NULL;
$arguments169['data'] = NULL;
$arguments169['class'] = NULL;
$arguments169['dir'] = NULL;
$arguments169['id'] = NULL;
$arguments169['lang'] = NULL;
$arguments169['style'] = NULL;
$arguments169['title'] = NULL;
$arguments169['accesskey'] = NULL;
$arguments169['tabindex'] = NULL;
$arguments169['onclick'] = NULL;
$arguments169['name'] = NULL;
$arguments169['rel'] = NULL;
$arguments169['rev'] = NULL;
$arguments169['target'] = NULL;
$arguments169['useCacheHash'] = false;
$arguments169['addQueryStringMethod'] = NULL;
$arguments169['action'] = NULL;
$arguments169['arguments'] = array (
);
$arguments169['section'] = '';
$arguments169['format'] = '';
$arguments169['ajax'] = false;
$arguments169['addQueryStringMethod'] = 'GET';

$output168 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
									';
return $output168;
};

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output157 .= '
							</li>
						';
return $output157;
};

$output152 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
				';
return $output152;
};
$arguments149 = array();
$arguments149['each'] = NULL;
$arguments149['as'] = NULL;
$arguments149['key'] = NULL;
$arguments149['reverse'] = false;
$arguments149['iteration'] = NULL;
$array151 = array (
);$arguments149['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.pages', $array151);
$arguments149['as'] = 'page';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return '
					<li>…</li>
				';
};
$arguments237 = array();
$arguments237['then'] = NULL;
$arguments237['else'] = NULL;
$arguments237['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array239 = array();
$array240 = array (
);$array239['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasMorePages', $array240);

$expression241 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments237['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression241(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array239)
					),
					$renderingContext
				);
$arguments237['__thenClosure'] = $renderChildrenClosure238;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$output248 = '';

$output248 .= '
					<li class="last">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$array255 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array255)]);
};
$arguments249 = array();
$arguments249['additionalAttributes'] = NULL;
$arguments249['data'] = NULL;
$arguments249['class'] = NULL;
$arguments249['dir'] = NULL;
$arguments249['id'] = NULL;
$arguments249['lang'] = NULL;
$arguments249['style'] = NULL;
$arguments249['title'] = NULL;
$arguments249['accesskey'] = NULL;
$arguments249['tabindex'] = NULL;
$arguments249['onclick'] = NULL;
$arguments249['name'] = NULL;
$arguments249['rel'] = NULL;
$arguments249['rev'] = NULL;
$arguments249['target'] = NULL;
$arguments249['useCacheHash'] = false;
$arguments249['addQueryStringMethod'] = NULL;
$arguments249['action'] = NULL;
$arguments249['arguments'] = array (
);
$arguments249['section'] = '';
$arguments249['format'] = '';
$arguments249['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array251 = array();
$array251['0'] = 1;

$expression252 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments249['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression252(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array251)
					),
					$renderingContext
				);
$arguments249['addQueryStringMethod'] = 'GET';
// Rendering Array
$array253 = array();
$array254 = array (
);$array253['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array254);
$arguments249['arguments'] = $array253;

$output248 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output248 .= '
					</li>
				';
return $output248;
};
$arguments242 = array();
$arguments242['then'] = NULL;
$arguments242['else'] = NULL;
$arguments242['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array244 = array();
$array245 = array (
);$array244['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.displayRangeEnd', $array245);
$array244['1'] = ' < ';
$array246 = array (
);$array244['2'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array246);

$expression247 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments242['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression247(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array244)
					),
					$renderingContext
				);
$arguments242['__thenClosure'] = $renderChildrenClosure243;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
$output261 = '';

$output261 .= '
					<li class="last next">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments269 = array();
$arguments269['key'] = NULL;
$arguments269['id'] = NULL;
$arguments269['default'] = NULL;
$arguments269['arguments'] = NULL;
$arguments269['extensionName'] = NULL;
$arguments269['languageKey'] = NULL;
$arguments269['alternativeLanguageKeys'] = NULL;
$arguments269['key'] = 'paginate_next';

$output268 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext)]);

$output268 .= '
						';
return $output268;
};
$arguments262 = array();
$arguments262['additionalAttributes'] = NULL;
$arguments262['data'] = NULL;
$arguments262['class'] = NULL;
$arguments262['dir'] = NULL;
$arguments262['id'] = NULL;
$arguments262['lang'] = NULL;
$arguments262['style'] = NULL;
$arguments262['title'] = NULL;
$arguments262['accesskey'] = NULL;
$arguments262['tabindex'] = NULL;
$arguments262['onclick'] = NULL;
$arguments262['name'] = NULL;
$arguments262['rel'] = NULL;
$arguments262['rev'] = NULL;
$arguments262['target'] = NULL;
$arguments262['useCacheHash'] = false;
$arguments262['addQueryStringMethod'] = NULL;
$arguments262['action'] = NULL;
$arguments262['arguments'] = array (
);
$arguments262['section'] = '';
$arguments262['format'] = '';
$arguments262['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array264 = array();
$array264['0'] = 1;

$expression265 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments262['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression265(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array264)
					),
					$renderingContext
				);
$arguments262['addQueryStringMethod'] = 'GET';
// Rendering Array
$array266 = array();
$array267 = array (
);$array266['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array267);
$arguments262['arguments'] = $array266;

$output261 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output261 .= '
					</li>
				';
return $output261;
};
$arguments256 = array();
$arguments256['then'] = NULL;
$arguments256['else'] = NULL;
$arguments256['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array258 = array();
$array259 = array (
);$array258['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array259);

$expression260 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments256['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression260(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array258)
					),
					$renderingContext
				);
$arguments256['__thenClosure'] = $renderChildrenClosure257;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output6 .= '
			</ul>
		</div>
		<div class="news-clear"></div>
	';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array4);
$array3['1'] = ' > 1';

$expression5 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output271 = '';

$output271 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$output277 = '';

$output277 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['section'] = NULL;
$arguments278['partial'] = NULL;
$arguments278['delegate'] = NULL;
$arguments278['renderable'] = NULL;
$arguments278['arguments'] = array (
);
$arguments278['optional'] = false;
$arguments278['default'] = NULL;
$arguments278['contentAs'] = NULL;
$arguments278['debug'] = true;
$arguments278['section'] = 'paginator';
// Rendering Array
$array280 = array();
$array281 = array (
);$array280['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination', $array281);
$array282 = array (
);$array280['configuration'] = $renderingContext->getVariableProvider()->getByPath('configuration', $array282);
$arguments278['arguments'] = $array280;

$output277 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output277 .= '
';
return $output277;
};
$arguments272 = array();
$arguments272['then'] = NULL;
$arguments272['else'] = NULL;
$arguments272['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array274 = array();
$array275 = array (
);$array274['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.insertAbove', $array275);

$expression276 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments272['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression276(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array274)
					),
					$renderingContext
				);
$arguments272['__thenClosure'] = $renderChildrenClosure273;

$output271 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output271 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['arguments'] = array (
);
$array285 = array (
);$arguments283['arguments'] = $renderingContext->getVariableProvider()->getByPath('contentArguments', $array285);

$output271 .= TYPO3\CMS\Fluid\ViewHelpers\RenderChildrenViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output271 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$output291 = '';

$output291 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments292 = array();
$arguments292['section'] = NULL;
$arguments292['partial'] = NULL;
$arguments292['delegate'] = NULL;
$arguments292['renderable'] = NULL;
$arguments292['arguments'] = array (
);
$arguments292['optional'] = false;
$arguments292['default'] = NULL;
$arguments292['contentAs'] = NULL;
$arguments292['debug'] = true;
$arguments292['section'] = 'paginator';
// Rendering Array
$array294 = array();
$array295 = array (
);$array294['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination', $array295);
$array296 = array (
);$array294['configuration'] = $renderingContext->getVariableProvider()->getByPath('configuration', $array296);
$arguments292['arguments'] = $array294;

$output291 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output291 .= '
';
return $output291;
};
$arguments286 = array();
$arguments286['then'] = NULL;
$arguments286['else'] = NULL;
$arguments286['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array288 = array();
$array289 = array (
);$array288['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.insertBelow', $array289);

$expression290 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments286['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression290(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array288)
					),
					$renderingContext
				);
$arguments286['__thenClosure'] = $renderChildrenClosure287;

$output271 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output271 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
$output299 = '';

$output299 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$output342 = '';

$output342 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['useCacheHash'] = false;
$arguments351['addQueryStringMethod'] = NULL;
$arguments351['action'] = NULL;
$arguments351['arguments'] = array (
);
$arguments351['section'] = '';
$arguments351['format'] = '';
$arguments351['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array353 = array();
$array353['0'] = 1;

$expression354 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments351['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression354(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array353)
					),
					$renderingContext
				);
$array355 = array (
);$arguments351['arguments'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array355);
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);
};
$arguments349 = array();
$arguments349['value'] = NULL;
$arguments349['keepQuotes'] = false;
$arguments349['encoding'] = NULL;
$arguments349['doubleEncode'] = true;
$renderChildrenClosure350 = ($arguments349['value'] !== null) ? function() use ($arguments349) { return $arguments349['value']; } : $renderChildrenClosure350;
$output348 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);

$output348 .= '" />';
return $output348;
};
$arguments346 = array();

$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext)]);

$output345 .= '
					';
return $output345;
};
$arguments343 = array();

$output342 .= '';

$output342 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
$output358 = '';

$output358 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$output361 = '';

$output361 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments364 = array();
$arguments364['useCacheHash'] = false;
$arguments364['addQueryStringMethod'] = NULL;
$arguments364['action'] = NULL;
$arguments364['arguments'] = array (
);
$arguments364['section'] = '';
$arguments364['format'] = '';
$arguments364['ajax'] = false;
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);
};
$arguments362 = array();
$arguments362['value'] = NULL;
$arguments362['keepQuotes'] = false;
$arguments362['encoding'] = NULL;
$arguments362['doubleEncode'] = true;
$renderChildrenClosure363 = ($arguments362['value'] !== null) ? function() use ($arguments362) { return $arguments362['value']; } : $renderChildrenClosure363;
$output361 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output361 .= '" />';
return $output361;
};
$arguments359 = array();

$output358 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext)]);

$output358 .= '
					';
return $output358;
};
$arguments356 = array();
$arguments356['if'] = NULL;

$output342 .= '';

$output342 .= '
				';
return $output342;
};
$arguments318 = array();
$arguments318['then'] = NULL;
$arguments318['else'] = NULL;
$arguments318['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array339 = array();
$array340 = array (
);$array339['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array340);
$array339['1'] = ' > 1';

$expression341 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments318['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression341(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array339)
					),
					$renderingContext
				);
$arguments318['__thenClosure'] = function() use ($renderingContext, $self) {
$output320 = '';

$output320 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$output323 = '';

$output323 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments326 = array();
$arguments326['useCacheHash'] = false;
$arguments326['addQueryStringMethod'] = NULL;
$arguments326['action'] = NULL;
$arguments326['arguments'] = array (
);
$arguments326['section'] = '';
$arguments326['format'] = '';
$arguments326['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array328 = array();
$array328['0'] = 1;

$expression329 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments326['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression329(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array328)
					),
					$renderingContext
				);
$array330 = array (
);$arguments326['arguments'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array330);
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);
};
$arguments324 = array();
$arguments324['value'] = NULL;
$arguments324['keepQuotes'] = false;
$arguments324['encoding'] = NULL;
$arguments324['doubleEncode'] = true;
$renderChildrenClosure325 = ($arguments324['value'] !== null) ? function() use ($arguments324) { return $arguments324['value']; } : $renderChildrenClosure325;
$output323 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output323 .= '" />';
return $output323;
};
$arguments321 = array();

$output320 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext)]);

$output320 .= '
					';
return $output320;
};
$arguments318['__elseClosures'][] = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
						';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$output334 = '';

$output334 .= '<link rel="prev" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments337 = array();
$arguments337['useCacheHash'] = false;
$arguments337['addQueryStringMethod'] = NULL;
$arguments337['action'] = NULL;
$arguments337['arguments'] = array (
);
$arguments337['section'] = '';
$arguments337['format'] = '';
$arguments337['ajax'] = false;
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);
};
$arguments335 = array();
$arguments335['value'] = NULL;
$arguments335['keepQuotes'] = false;
$arguments335['encoding'] = NULL;
$arguments335['doubleEncode'] = true;
$renderChildrenClosure336 = ($arguments335['value'] !== null) ? function() use ($arguments335) { return $arguments335['value']; } : $renderChildrenClosure336;
$output334 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output334 .= '" />';
return $output334;
};
$arguments332 = array();

$output331 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext)]);

$output331 .= '
					';
return $output331;
};

$output317 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output317 .= '
			';
return $output317;
};
$arguments312 = array();
$arguments312['then'] = NULL;
$arguments312['else'] = NULL;
$arguments312['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array314 = array();
$array315 = array (
);$array314['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array315);

$expression316 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments312['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression316(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array314)
					),
					$renderingContext
				);
$arguments312['__thenClosure'] = $renderChildrenClosure313;

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output311 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$output371 = '';

$output371 .= '
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\HeaderDataViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
$output374 = '';

$output374 .= '<link rel="next" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments377 = array();
$arguments377['useCacheHash'] = false;
$arguments377['addQueryStringMethod'] = NULL;
$arguments377['action'] = NULL;
$arguments377['arguments'] = array (
);
$arguments377['section'] = '';
$arguments377['format'] = '';
$arguments377['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array379 = array();
$array379['0'] = 1;

$expression380 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments377['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression380(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array379)
					),
					$renderingContext
				);
$array381 = array (
);$arguments377['arguments'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array381);
return TYPO3\CMS\Fluid\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);
};
$arguments375 = array();
$arguments375['value'] = NULL;
$arguments375['keepQuotes'] = false;
$arguments375['encoding'] = NULL;
$arguments375['doubleEncode'] = true;
$renderChildrenClosure376 = ($arguments375['value'] !== null) ? function() use ($arguments375) { return $arguments375['value']; } : $renderChildrenClosure376;
$output374 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext);

$output374 .= '" />';
return $output374;
};
$arguments372 = array();

$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\HeaderDataViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext)]);

$output371 .= '
			';
return $output371;
};
$arguments366 = array();
$arguments366['then'] = NULL;
$arguments366['else'] = NULL;
$arguments366['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array368 = array();
$array369 = array (
);$array368['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array369);

$expression370 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments366['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression370(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array368)
					),
					$renderingContext
				);
$arguments366['__thenClosure'] = $renderChildrenClosure367;

$output311 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output311 .= '
		';
return $output311;
};
$arguments306 = array();
$arguments306['then'] = NULL;
$arguments306['else'] = NULL;
$arguments306['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array308 = array();
$array309 = array (
);$array308['0'] = $renderingContext->getVariableProvider()->getByPath('settings.list.paginate.prevNextHeaderTags', $array309);

$expression310 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments306['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression310(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array308)
					),
					$renderingContext
				);
$arguments306['__thenClosure'] = $renderChildrenClosure307;

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output305 .= '

		<div class="page-navigation">
			<p>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['key'] = NULL;
$arguments382['id'] = NULL;
$arguments382['default'] = NULL;
$arguments382['arguments'] = NULL;
$arguments382['extensionName'] = NULL;
$arguments382['languageKey'] = NULL;
$arguments382['alternativeLanguageKeys'] = NULL;
$arguments382['key'] = 'paginate_overall';
// Rendering Array
$array384 = array();
$array385 = array (
);$array384['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.current', $array385);
$array386 = array (
);$array384['1'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array386);
$arguments382['arguments'] = $array384;

$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext)]);

$output305 .= '
			</p>
			<ul class="f3-widget-paginator">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$output392 = '';

$output392 .= '
					<li class="previous">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$output414 = '';

$output414 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
$output417 = '';

$output417 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
$output424 = '';

$output424 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments425 = array();
$arguments425['key'] = NULL;
$arguments425['id'] = NULL;
$arguments425['default'] = NULL;
$arguments425['arguments'] = NULL;
$arguments425['extensionName'] = NULL;
$arguments425['languageKey'] = NULL;
$arguments425['alternativeLanguageKeys'] = NULL;
$arguments425['key'] = 'paginate_previous';

$output424 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext)]);

$output424 .= '
								';
return $output424;
};
$arguments418 = array();
$arguments418['additionalAttributes'] = NULL;
$arguments418['data'] = NULL;
$arguments418['class'] = NULL;
$arguments418['dir'] = NULL;
$arguments418['id'] = NULL;
$arguments418['lang'] = NULL;
$arguments418['style'] = NULL;
$arguments418['title'] = NULL;
$arguments418['accesskey'] = NULL;
$arguments418['tabindex'] = NULL;
$arguments418['onclick'] = NULL;
$arguments418['name'] = NULL;
$arguments418['rel'] = NULL;
$arguments418['rev'] = NULL;
$arguments418['target'] = NULL;
$arguments418['useCacheHash'] = false;
$arguments418['addQueryStringMethod'] = NULL;
$arguments418['action'] = NULL;
$arguments418['arguments'] = array (
);
$arguments418['section'] = '';
$arguments418['format'] = '';
$arguments418['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array420 = array();
$array420['0'] = 1;

$expression421 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments418['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression421(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array420)
					),
					$renderingContext
				);
$arguments418['addQueryStringMethod'] = 'GET';
// Rendering Array
$array422 = array();
$array423 = array (
);$array422['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array423);
$arguments418['arguments'] = $array422;

$output417 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext);

$output417 .= '
							';
return $output417;
};
$arguments415 = array();

$output414 .= '';

$output414 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
$output429 = '';

$output429 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
$output432 = '';

$output432 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments433 = array();
$arguments433['key'] = NULL;
$arguments433['id'] = NULL;
$arguments433['default'] = NULL;
$arguments433['arguments'] = NULL;
$arguments433['extensionName'] = NULL;
$arguments433['languageKey'] = NULL;
$arguments433['alternativeLanguageKeys'] = NULL;
$arguments433['key'] = 'paginate_previous';

$output432 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext)]);

$output432 .= '
								';
return $output432;
};
$arguments430 = array();
$arguments430['additionalAttributes'] = NULL;
$arguments430['data'] = NULL;
$arguments430['class'] = NULL;
$arguments430['dir'] = NULL;
$arguments430['id'] = NULL;
$arguments430['lang'] = NULL;
$arguments430['style'] = NULL;
$arguments430['title'] = NULL;
$arguments430['accesskey'] = NULL;
$arguments430['tabindex'] = NULL;
$arguments430['onclick'] = NULL;
$arguments430['name'] = NULL;
$arguments430['rel'] = NULL;
$arguments430['rev'] = NULL;
$arguments430['target'] = NULL;
$arguments430['useCacheHash'] = false;
$arguments430['addQueryStringMethod'] = NULL;
$arguments430['action'] = NULL;
$arguments430['arguments'] = array (
);
$arguments430['section'] = '';
$arguments430['format'] = '';
$arguments430['ajax'] = false;
$arguments430['addQueryStringMethod'] = 'GET';

$output429 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext);

$output429 .= '
							';
return $output429;
};
$arguments427 = array();
$arguments427['if'] = NULL;

$output414 .= '';

$output414 .= '
						';
return $output414;
};
$arguments393 = array();
$arguments393['then'] = NULL;
$arguments393['else'] = NULL;
$arguments393['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array411 = array();
$array412 = array (
);$array411['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array412);
$array411['1'] = ' > 1';

$expression413 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments393['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression413(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array411)
					),
					$renderingContext
				);
$arguments393['__thenClosure'] = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
$output402 = '';

$output402 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments403 = array();
$arguments403['key'] = NULL;
$arguments403['id'] = NULL;
$arguments403['default'] = NULL;
$arguments403['arguments'] = NULL;
$arguments403['extensionName'] = NULL;
$arguments403['languageKey'] = NULL;
$arguments403['alternativeLanguageKeys'] = NULL;
$arguments403['key'] = 'paginate_previous';

$output402 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext)]);

$output402 .= '
								';
return $output402;
};
$arguments396 = array();
$arguments396['additionalAttributes'] = NULL;
$arguments396['data'] = NULL;
$arguments396['class'] = NULL;
$arguments396['dir'] = NULL;
$arguments396['id'] = NULL;
$arguments396['lang'] = NULL;
$arguments396['style'] = NULL;
$arguments396['title'] = NULL;
$arguments396['accesskey'] = NULL;
$arguments396['tabindex'] = NULL;
$arguments396['onclick'] = NULL;
$arguments396['name'] = NULL;
$arguments396['rel'] = NULL;
$arguments396['rev'] = NULL;
$arguments396['target'] = NULL;
$arguments396['useCacheHash'] = false;
$arguments396['addQueryStringMethod'] = NULL;
$arguments396['action'] = NULL;
$arguments396['arguments'] = array (
);
$arguments396['section'] = '';
$arguments396['format'] = '';
$arguments396['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array398 = array();
$array398['0'] = 1;

$expression399 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments396['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression399(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array398)
					),
					$renderingContext
				);
$arguments396['addQueryStringMethod'] = 'GET';
// Rendering Array
$array400 = array();
$array401 = array (
);$array400['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array401);
$arguments396['arguments'] = $array400;

$output395 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
							';
return $output395;
};
$arguments393['__elseClosures'][] = function() use ($renderingContext, $self) {
$output405 = '';

$output405 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$output408 = '';

$output408 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments409 = array();
$arguments409['key'] = NULL;
$arguments409['id'] = NULL;
$arguments409['default'] = NULL;
$arguments409['arguments'] = NULL;
$arguments409['extensionName'] = NULL;
$arguments409['languageKey'] = NULL;
$arguments409['alternativeLanguageKeys'] = NULL;
$arguments409['key'] = 'paginate_previous';

$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext)]);

$output408 .= '
								';
return $output408;
};
$arguments406 = array();
$arguments406['additionalAttributes'] = NULL;
$arguments406['data'] = NULL;
$arguments406['class'] = NULL;
$arguments406['dir'] = NULL;
$arguments406['id'] = NULL;
$arguments406['lang'] = NULL;
$arguments406['style'] = NULL;
$arguments406['title'] = NULL;
$arguments406['accesskey'] = NULL;
$arguments406['tabindex'] = NULL;
$arguments406['onclick'] = NULL;
$arguments406['name'] = NULL;
$arguments406['rel'] = NULL;
$arguments406['rev'] = NULL;
$arguments406['target'] = NULL;
$arguments406['useCacheHash'] = false;
$arguments406['addQueryStringMethod'] = NULL;
$arguments406['action'] = NULL;
$arguments406['arguments'] = array (
);
$arguments406['section'] = '';
$arguments406['format'] = '';
$arguments406['ajax'] = false;
$arguments406['addQueryStringMethod'] = 'GET';

$output405 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$output405 .= '
							';
return $output405;
};

$output392 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);

$output392 .= '
					</li>
				';
return $output392;
};
$arguments387 = array();
$arguments387['then'] = NULL;
$arguments387['else'] = NULL;
$arguments387['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array389 = array();
$array390 = array (
);$array389['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array390);

$expression391 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments387['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression391(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array389)
					),
					$renderingContext
				);
$arguments387['__thenClosure'] = $renderChildrenClosure388;

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext);

$output305 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
$output440 = '';

$output440 .= '
					<li class="first">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
return '1';
};
$arguments441 = array();
$arguments441['additionalAttributes'] = NULL;
$arguments441['data'] = NULL;
$arguments441['class'] = NULL;
$arguments441['dir'] = NULL;
$arguments441['id'] = NULL;
$arguments441['lang'] = NULL;
$arguments441['style'] = NULL;
$arguments441['title'] = NULL;
$arguments441['accesskey'] = NULL;
$arguments441['tabindex'] = NULL;
$arguments441['onclick'] = NULL;
$arguments441['name'] = NULL;
$arguments441['rel'] = NULL;
$arguments441['rev'] = NULL;
$arguments441['target'] = NULL;
$arguments441['useCacheHash'] = false;
$arguments441['addQueryStringMethod'] = NULL;
$arguments441['action'] = NULL;
$arguments441['arguments'] = array (
);
$arguments441['section'] = '';
$arguments441['format'] = '';
$arguments441['ajax'] = false;
$arguments441['addQueryStringMethod'] = 'GET';

$output440 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext);

$output440 .= '
					</li>
				';
return $output440;
};
$arguments435 = array();
$arguments435['then'] = NULL;
$arguments435['else'] = NULL;
$arguments435['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array437 = array();
$array438 = array (
);$array437['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.displayRangeStart', $array438);
$array437['1'] = ' > 1';

$expression439 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments435['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression439(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array437)
					),
					$renderingContext
				);
$arguments435['__thenClosure'] = $renderChildrenClosure436;

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output305 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
return '
					<li>…</li>
				';
};
$arguments443 = array();
$arguments443['then'] = NULL;
$arguments443['else'] = NULL;
$arguments443['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array445 = array();
$array446 = array (
);$array445['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasLessPages', $array446);

$expression447 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments443['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression447(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array445)
					),
					$renderingContext
				);
$arguments443['__thenClosure'] = $renderChildrenClosure444;

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);

$output305 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
$output451 = '';

$output451 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
$output494 = '';

$output494 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
$output497 = '';

$output497 .= '
							<li class="current">';
$array498 = array (
);
$output497 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array498)]);

$output497 .= '</li>
						';
return $output497;
};
$arguments495 = array();

$output494 .= '';

$output494 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure500 = function() use ($renderingContext, $self) {
$output501 = '';

$output501 .= '
							<li>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure503 = function() use ($renderingContext, $self) {
$output519 = '';

$output519 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
$output522 = '';

$output522 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure524 = function() use ($renderingContext, $self) {
$array529 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array529)]);
};
$arguments523 = array();
$arguments523['additionalAttributes'] = NULL;
$arguments523['data'] = NULL;
$arguments523['class'] = NULL;
$arguments523['dir'] = NULL;
$arguments523['id'] = NULL;
$arguments523['lang'] = NULL;
$arguments523['style'] = NULL;
$arguments523['title'] = NULL;
$arguments523['accesskey'] = NULL;
$arguments523['tabindex'] = NULL;
$arguments523['onclick'] = NULL;
$arguments523['name'] = NULL;
$arguments523['rel'] = NULL;
$arguments523['rev'] = NULL;
$arguments523['target'] = NULL;
$arguments523['useCacheHash'] = false;
$arguments523['addQueryStringMethod'] = NULL;
$arguments523['action'] = NULL;
$arguments523['arguments'] = array (
);
$arguments523['section'] = '';
$arguments523['format'] = '';
$arguments523['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array525 = array();
$array525['0'] = 1;

$expression526 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments523['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression526(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array525)
					),
					$renderingContext
				);
$arguments523['addQueryStringMethod'] = 'GET';
// Rendering Array
$array527 = array();
$array528 = array (
);$array527['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array528);
$arguments523['arguments'] = $array527;

$output522 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments523, $renderChildrenClosure524, $renderingContext);

$output522 .= '
									';
return $output522;
};
$arguments520 = array();

$output519 .= '';

$output519 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
$output532 = '';

$output532 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
$array535 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array535)]);
};
$arguments533 = array();
$arguments533['additionalAttributes'] = NULL;
$arguments533['data'] = NULL;
$arguments533['class'] = NULL;
$arguments533['dir'] = NULL;
$arguments533['id'] = NULL;
$arguments533['lang'] = NULL;
$arguments533['style'] = NULL;
$arguments533['title'] = NULL;
$arguments533['accesskey'] = NULL;
$arguments533['tabindex'] = NULL;
$arguments533['onclick'] = NULL;
$arguments533['name'] = NULL;
$arguments533['rel'] = NULL;
$arguments533['rev'] = NULL;
$arguments533['target'] = NULL;
$arguments533['useCacheHash'] = false;
$arguments533['addQueryStringMethod'] = NULL;
$arguments533['action'] = NULL;
$arguments533['arguments'] = array (
);
$arguments533['section'] = '';
$arguments533['format'] = '';
$arguments533['ajax'] = false;
$arguments533['addQueryStringMethod'] = 'GET';

$output532 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments533, $renderChildrenClosure534, $renderingContext);

$output532 .= '
									';
return $output532;
};
$arguments530 = array();
$arguments530['if'] = NULL;

$output519 .= '';

$output519 .= '
								';
return $output519;
};
$arguments502 = array();
$arguments502['then'] = NULL;
$arguments502['else'] = NULL;
$arguments502['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array516 = array();
$array517 = array (
);$array516['0'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array517);
$array516['1'] = ' > 1';

$expression518 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments502['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression518(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array516)
					),
					$renderingContext
				);
$arguments502['__thenClosure'] = function() use ($renderingContext, $self) {
$output504 = '';

$output504 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure506 = function() use ($renderingContext, $self) {
$array511 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array511)]);
};
$arguments505 = array();
$arguments505['additionalAttributes'] = NULL;
$arguments505['data'] = NULL;
$arguments505['class'] = NULL;
$arguments505['dir'] = NULL;
$arguments505['id'] = NULL;
$arguments505['lang'] = NULL;
$arguments505['style'] = NULL;
$arguments505['title'] = NULL;
$arguments505['accesskey'] = NULL;
$arguments505['tabindex'] = NULL;
$arguments505['onclick'] = NULL;
$arguments505['name'] = NULL;
$arguments505['rel'] = NULL;
$arguments505['rev'] = NULL;
$arguments505['target'] = NULL;
$arguments505['useCacheHash'] = false;
$arguments505['addQueryStringMethod'] = NULL;
$arguments505['action'] = NULL;
$arguments505['arguments'] = array (
);
$arguments505['section'] = '';
$arguments505['format'] = '';
$arguments505['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array507 = array();
$array507['0'] = 1;

$expression508 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments505['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression508(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array507)
					),
					$renderingContext
				);
$arguments505['addQueryStringMethod'] = 'GET';
// Rendering Array
$array509 = array();
$array510 = array (
);$array509['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array510);
$arguments505['arguments'] = $array509;

$output504 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments505, $renderChildrenClosure506, $renderingContext);

$output504 .= '
									';
return $output504;
};
$arguments502['__elseClosures'][] = function() use ($renderingContext, $self) {
$output512 = '';

$output512 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure514 = function() use ($renderingContext, $self) {
$array515 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array515)]);
};
$arguments513 = array();
$arguments513['additionalAttributes'] = NULL;
$arguments513['data'] = NULL;
$arguments513['class'] = NULL;
$arguments513['dir'] = NULL;
$arguments513['id'] = NULL;
$arguments513['lang'] = NULL;
$arguments513['style'] = NULL;
$arguments513['title'] = NULL;
$arguments513['accesskey'] = NULL;
$arguments513['tabindex'] = NULL;
$arguments513['onclick'] = NULL;
$arguments513['name'] = NULL;
$arguments513['rel'] = NULL;
$arguments513['rev'] = NULL;
$arguments513['target'] = NULL;
$arguments513['useCacheHash'] = false;
$arguments513['addQueryStringMethod'] = NULL;
$arguments513['action'] = NULL;
$arguments513['arguments'] = array (
);
$arguments513['section'] = '';
$arguments513['format'] = '';
$arguments513['ajax'] = false;
$arguments513['addQueryStringMethod'] = 'GET';

$output512 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments513, $renderChildrenClosure514, $renderingContext);

$output512 .= '
									';
return $output512;
};

$output501 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments502, $renderChildrenClosure503, $renderingContext);

$output501 .= '
							</li>
						';
return $output501;
};
$arguments499 = array();
$arguments499['if'] = NULL;

$output494 .= '';

$output494 .= '
					';
return $output494;
};
$arguments452 = array();
$arguments452['then'] = NULL;
$arguments452['else'] = NULL;
$arguments452['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array491 = array();
$array492 = array (
);$array491['0'] = $renderingContext->getVariableProvider()->getByPath('page.isCurrent', $array492);

$expression493 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments452['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression493(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array491)
					),
					$renderingContext
				);
$arguments452['__thenClosure'] = function() use ($renderingContext, $self) {
$output454 = '';

$output454 .= '
							<li class="current">';
$array455 = array (
);
$output454 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array455)]);

$output454 .= '</li>
						';
return $output454;
};
$arguments452['__elseClosures'][] = function() use ($renderingContext, $self) {
$output456 = '';

$output456 .= '
							<li>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
$output474 = '';

$output474 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
$array484 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array484)]);
};
$arguments478 = array();
$arguments478['additionalAttributes'] = NULL;
$arguments478['data'] = NULL;
$arguments478['class'] = NULL;
$arguments478['dir'] = NULL;
$arguments478['id'] = NULL;
$arguments478['lang'] = NULL;
$arguments478['style'] = NULL;
$arguments478['title'] = NULL;
$arguments478['accesskey'] = NULL;
$arguments478['tabindex'] = NULL;
$arguments478['onclick'] = NULL;
$arguments478['name'] = NULL;
$arguments478['rel'] = NULL;
$arguments478['rev'] = NULL;
$arguments478['target'] = NULL;
$arguments478['useCacheHash'] = false;
$arguments478['addQueryStringMethod'] = NULL;
$arguments478['action'] = NULL;
$arguments478['arguments'] = array (
);
$arguments478['section'] = '';
$arguments478['format'] = '';
$arguments478['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array480 = array();
$array480['0'] = 1;

$expression481 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments478['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression481(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array480)
					),
					$renderingContext
				);
$arguments478['addQueryStringMethod'] = 'GET';
// Rendering Array
$array482 = array();
$array483 = array (
);$array482['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array483);
$arguments478['arguments'] = $array482;

$output477 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output477 .= '
									';
return $output477;
};
$arguments475 = array();

$output474 .= '';

$output474 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
$output487 = '';

$output487 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure489 = function() use ($renderingContext, $self) {
$array490 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array490)]);
};
$arguments488 = array();
$arguments488['additionalAttributes'] = NULL;
$arguments488['data'] = NULL;
$arguments488['class'] = NULL;
$arguments488['dir'] = NULL;
$arguments488['id'] = NULL;
$arguments488['lang'] = NULL;
$arguments488['style'] = NULL;
$arguments488['title'] = NULL;
$arguments488['accesskey'] = NULL;
$arguments488['tabindex'] = NULL;
$arguments488['onclick'] = NULL;
$arguments488['name'] = NULL;
$arguments488['rel'] = NULL;
$arguments488['rev'] = NULL;
$arguments488['target'] = NULL;
$arguments488['useCacheHash'] = false;
$arguments488['addQueryStringMethod'] = NULL;
$arguments488['action'] = NULL;
$arguments488['arguments'] = array (
);
$arguments488['section'] = '';
$arguments488['format'] = '';
$arguments488['ajax'] = false;
$arguments488['addQueryStringMethod'] = 'GET';

$output487 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments488, $renderChildrenClosure489, $renderingContext);

$output487 .= '
									';
return $output487;
};
$arguments485 = array();
$arguments485['if'] = NULL;

$output474 .= '';

$output474 .= '
								';
return $output474;
};
$arguments457 = array();
$arguments457['then'] = NULL;
$arguments457['else'] = NULL;
$arguments457['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array471 = array();
$array472 = array (
);$array471['0'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array472);
$array471['1'] = ' > 1';

$expression473 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments457['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression473(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array471)
					),
					$renderingContext
				);
$arguments457['__thenClosure'] = function() use ($renderingContext, $self) {
$output459 = '';

$output459 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure461 = function() use ($renderingContext, $self) {
$array466 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array466)]);
};
$arguments460 = array();
$arguments460['additionalAttributes'] = NULL;
$arguments460['data'] = NULL;
$arguments460['class'] = NULL;
$arguments460['dir'] = NULL;
$arguments460['id'] = NULL;
$arguments460['lang'] = NULL;
$arguments460['style'] = NULL;
$arguments460['title'] = NULL;
$arguments460['accesskey'] = NULL;
$arguments460['tabindex'] = NULL;
$arguments460['onclick'] = NULL;
$arguments460['name'] = NULL;
$arguments460['rel'] = NULL;
$arguments460['rev'] = NULL;
$arguments460['target'] = NULL;
$arguments460['useCacheHash'] = false;
$arguments460['addQueryStringMethod'] = NULL;
$arguments460['action'] = NULL;
$arguments460['arguments'] = array (
);
$arguments460['section'] = '';
$arguments460['format'] = '';
$arguments460['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array462 = array();
$array462['0'] = 1;

$expression463 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments460['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression463(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array462)
					),
					$renderingContext
				);
$arguments460['addQueryStringMethod'] = 'GET';
// Rendering Array
$array464 = array();
$array465 = array (
);$array464['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array465);
$arguments460['arguments'] = $array464;

$output459 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments460, $renderChildrenClosure461, $renderingContext);

$output459 .= '
									';
return $output459;
};
$arguments457['__elseClosures'][] = function() use ($renderingContext, $self) {
$output467 = '';

$output467 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
$array470 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array470)]);
};
$arguments468 = array();
$arguments468['additionalAttributes'] = NULL;
$arguments468['data'] = NULL;
$arguments468['class'] = NULL;
$arguments468['dir'] = NULL;
$arguments468['id'] = NULL;
$arguments468['lang'] = NULL;
$arguments468['style'] = NULL;
$arguments468['title'] = NULL;
$arguments468['accesskey'] = NULL;
$arguments468['tabindex'] = NULL;
$arguments468['onclick'] = NULL;
$arguments468['name'] = NULL;
$arguments468['rel'] = NULL;
$arguments468['rev'] = NULL;
$arguments468['target'] = NULL;
$arguments468['useCacheHash'] = false;
$arguments468['addQueryStringMethod'] = NULL;
$arguments468['action'] = NULL;
$arguments468['arguments'] = array (
);
$arguments468['section'] = '';
$arguments468['format'] = '';
$arguments468['ajax'] = false;
$arguments468['addQueryStringMethod'] = 'GET';

$output467 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext);

$output467 .= '
									';
return $output467;
};

$output456 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output456 .= '
							</li>
						';
return $output456;
};

$output451 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext);

$output451 .= '
				';
return $output451;
};
$arguments448 = array();
$arguments448['each'] = NULL;
$arguments448['as'] = NULL;
$arguments448['key'] = NULL;
$arguments448['reverse'] = false;
$arguments448['iteration'] = NULL;
$array450 = array (
);$arguments448['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.pages', $array450);
$arguments448['as'] = 'page';

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext);

$output305 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
return '
					<li>…</li>
				';
};
$arguments536 = array();
$arguments536['then'] = NULL;
$arguments536['else'] = NULL;
$arguments536['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array538 = array();
$array539 = array (
);$array538['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasMorePages', $array539);

$expression540 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments536['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression540(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array538)
					),
					$renderingContext
				);
$arguments536['__thenClosure'] = $renderChildrenClosure537;

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);

$output305 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
$output547 = '';

$output547 .= '
					<li class="last">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure549 = function() use ($renderingContext, $self) {
$array554 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array554)]);
};
$arguments548 = array();
$arguments548['additionalAttributes'] = NULL;
$arguments548['data'] = NULL;
$arguments548['class'] = NULL;
$arguments548['dir'] = NULL;
$arguments548['id'] = NULL;
$arguments548['lang'] = NULL;
$arguments548['style'] = NULL;
$arguments548['title'] = NULL;
$arguments548['accesskey'] = NULL;
$arguments548['tabindex'] = NULL;
$arguments548['onclick'] = NULL;
$arguments548['name'] = NULL;
$arguments548['rel'] = NULL;
$arguments548['rev'] = NULL;
$arguments548['target'] = NULL;
$arguments548['useCacheHash'] = false;
$arguments548['addQueryStringMethod'] = NULL;
$arguments548['action'] = NULL;
$arguments548['arguments'] = array (
);
$arguments548['section'] = '';
$arguments548['format'] = '';
$arguments548['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array550 = array();
$array550['0'] = 1;

$expression551 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments548['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression551(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array550)
					),
					$renderingContext
				);
$arguments548['addQueryStringMethod'] = 'GET';
// Rendering Array
$array552 = array();
$array553 = array (
);$array552['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array553);
$arguments548['arguments'] = $array552;

$output547 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments548, $renderChildrenClosure549, $renderingContext);

$output547 .= '
					</li>
				';
return $output547;
};
$arguments541 = array();
$arguments541['then'] = NULL;
$arguments541['else'] = NULL;
$arguments541['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array543 = array();
$array544 = array (
);$array543['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.displayRangeEnd', $array544);
$array543['1'] = ' < ';
$array545 = array (
);$array543['2'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array545);

$expression546 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments541['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression546(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array543)
					),
					$renderingContext
				);
$arguments541['__thenClosure'] = $renderChildrenClosure542;

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments541, $renderChildrenClosure542, $renderingContext);

$output305 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
$output560 = '';

$output560 .= '
					<li class="last next">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure562 = function() use ($renderingContext, $self) {
$output567 = '';

$output567 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure569 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments568 = array();
$arguments568['key'] = NULL;
$arguments568['id'] = NULL;
$arguments568['default'] = NULL;
$arguments568['arguments'] = NULL;
$arguments568['extensionName'] = NULL;
$arguments568['languageKey'] = NULL;
$arguments568['alternativeLanguageKeys'] = NULL;
$arguments568['key'] = 'paginate_next';

$output567 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments568, $renderChildrenClosure569, $renderingContext)]);

$output567 .= '
						';
return $output567;
};
$arguments561 = array();
$arguments561['additionalAttributes'] = NULL;
$arguments561['data'] = NULL;
$arguments561['class'] = NULL;
$arguments561['dir'] = NULL;
$arguments561['id'] = NULL;
$arguments561['lang'] = NULL;
$arguments561['style'] = NULL;
$arguments561['title'] = NULL;
$arguments561['accesskey'] = NULL;
$arguments561['tabindex'] = NULL;
$arguments561['onclick'] = NULL;
$arguments561['name'] = NULL;
$arguments561['rel'] = NULL;
$arguments561['rev'] = NULL;
$arguments561['target'] = NULL;
$arguments561['useCacheHash'] = false;
$arguments561['addQueryStringMethod'] = NULL;
$arguments561['action'] = NULL;
$arguments561['arguments'] = array (
);
$arguments561['section'] = '';
$arguments561['format'] = '';
$arguments561['ajax'] = false;
// Rendering Boolean node
// Rendering Array
$array563 = array();
$array563['0'] = 1;

$expression564 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments561['useCacheHash'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression564(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array563)
					),
					$renderingContext
				);
$arguments561['addQueryStringMethod'] = 'GET';
// Rendering Array
$array565 = array();
$array566 = array (
);$array565['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array566);
$arguments561['arguments'] = $array565;

$output560 .= TYPO3\CMS\Fluid\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments561, $renderChildrenClosure562, $renderingContext);

$output560 .= '
					</li>
				';
return $output560;
};
$arguments555 = array();
$arguments555['then'] = NULL;
$arguments555['else'] = NULL;
$arguments555['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array557 = array();
$array558 = array (
);$array557['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array558);

$expression559 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments555['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression559(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array557)
					),
					$renderingContext
				);
$arguments555['__thenClosure'] = $renderChildrenClosure556;

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext);

$output305 .= '
			</ul>
		</div>
		<div class="news-clear"></div>
	';
return $output305;
};
$arguments300 = array();
$arguments300['then'] = NULL;
$arguments300['else'] = NULL;
$arguments300['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array302 = array();
$array303 = array (
);$array302['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array303);
$array302['1'] = ' > 1';

$expression304 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments300['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression304(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array302)
					),
					$renderingContext
				);
$arguments300['__thenClosure'] = $renderChildrenClosure301;

$output299 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output299 .= '
';
return $output299;
};
$arguments297 = array();
$arguments297['name'] = NULL;
$arguments297['name'] = 'paginator';

$output271 .= NULL;

$output271 .= '

';

return $output271;
}


}
#