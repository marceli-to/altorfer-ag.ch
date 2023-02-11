<?php

class partial_List_Item_759d91a52b41bfe1c72455b064a6e6ce2b82f812 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<div class="news-list-item" itemscope="itemscope" itemtype="http://schema.org/Article">
	';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['newsItem'] = NULL;
$array3 = array (
);$arguments1['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array3);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
	
	<div class="news-list-item__header">
		<span class="news-list-date">
			<time itemprop="datePublished" datetime="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['date'] = NULL;
$arguments4['format'] = '';
$arguments4['base'] = NULL;
$array6 = array (
);$arguments4['date'] = $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array6);
$arguments4['format'] = 'd-m-Y';
$renderChildrenClosure5 = ($arguments4['date'] !== null) ? function() use ($arguments4) { return $arguments4['date']; } : $renderChildrenClosure5;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$array11 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.datetime', $array11);
};
$arguments7 = array();
$arguments7['date'] = NULL;
$arguments7['format'] = '';
$arguments7['base'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'dateFormat';
$arguments7['format'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);
$renderChildrenClosure8 = ($arguments7['date'] !== null) ? function() use ($arguments7) { return $arguments7['date']; } : $renderChildrenClosure8;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= '
			</time>
		</span>
		<h2>
			';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
				<span itemprop="headline">';
$array18 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array18)]);

$output17 .= '</span>
			';
return $output17;
};
$arguments12 = array();
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['newsItem'] = NULL;
$arguments12['settings'] = array (
);
$arguments12['uriOnly'] = false;
$arguments12['configuration'] = array (
);
$arguments12['content'] = '';
$arguments12['section'] = NULL;
$array14 = array (
);$arguments12['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array14);
$array15 = array (
);$arguments12['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array15);
$array16 = array (
);$arguments12['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array16);

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output0 .= '
		</h2>
	</div>
	
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
			<div class="news-list-item__image">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['additionalAttributes'] = NULL;
$arguments68['data'] = NULL;
$arguments68['class'] = NULL;
$arguments68['dir'] = NULL;
$arguments68['id'] = NULL;
$arguments68['lang'] = NULL;
$arguments68['style'] = NULL;
$arguments68['title'] = NULL;
$arguments68['accesskey'] = NULL;
$arguments68['tabindex'] = NULL;
$arguments68['onclick'] = NULL;
$arguments68['alt'] = NULL;
$arguments68['ismap'] = NULL;
$arguments68['longdesc'] = NULL;
$arguments68['usemap'] = NULL;
$arguments68['src'] = NULL;
$arguments68['treatIdAsReference'] = NULL;
$arguments68['image'] = NULL;
$arguments68['crop'] = NULL;
$arguments68['cropVariant'] = 'default';
$arguments68['width'] = NULL;
$arguments68['height'] = NULL;
$arguments68['minWidth'] = NULL;
$arguments68['minHeight'] = NULL;
$arguments68['maxWidth'] = NULL;
$arguments68['maxHeight'] = NULL;
$arguments68['absolute'] = false;
$array70 = array (
);$arguments68['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array70);
$array71 = array (
);$arguments68['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array71);
$array72 = array (
);$arguments68['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array72);
$arguments68['width'] = '400c';
$arguments68['height'] = '240c';

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
						';
return $output67;
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array65);
$array64['1'] = ' == 2';

$expression66 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = $renderChildrenClosure63;

$output61 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
					';
return $output61;
};
$arguments57 = array();
$arguments57['map'] = NULL;
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array60);
$arguments57['map'] = $array59;

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
				';
return $output56;
};
$arguments51 = array();
$arguments51['additionalAttributes'] = NULL;
$arguments51['data'] = NULL;
$arguments51['class'] = NULL;
$arguments51['dir'] = NULL;
$arguments51['id'] = NULL;
$arguments51['lang'] = NULL;
$arguments51['style'] = NULL;
$arguments51['title'] = NULL;
$arguments51['accesskey'] = NULL;
$arguments51['tabindex'] = NULL;
$arguments51['onclick'] = NULL;
$arguments51['newsItem'] = NULL;
$arguments51['settings'] = array (
);
$arguments51['uriOnly'] = false;
$arguments51['configuration'] = array (
);
$arguments51['content'] = '';
$arguments51['section'] = NULL;
$array53 = array (
);$arguments51['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array53);
$array54 = array (
);$arguments51['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array54);
$array55 = array (
);$arguments51['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array55);

$output50 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
			</div>
		';
return $output50;
};
$arguments48 = array();

$output47 .= '';

$output47 .= '
	';
return $output47;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array45);

$expression46 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression46(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$arguments19['__thenClosure'] = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
			<div class="news-list-item__image">
				';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['class'] = NULL;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['title'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['alt'] = NULL;
$arguments39['ismap'] = NULL;
$arguments39['longdesc'] = NULL;
$arguments39['usemap'] = NULL;
$arguments39['src'] = NULL;
$arguments39['treatIdAsReference'] = NULL;
$arguments39['image'] = NULL;
$arguments39['crop'] = NULL;
$arguments39['cropVariant'] = 'default';
$arguments39['width'] = NULL;
$arguments39['height'] = NULL;
$arguments39['minWidth'] = NULL;
$arguments39['minHeight'] = NULL;
$arguments39['maxWidth'] = NULL;
$arguments39['maxHeight'] = NULL;
$arguments39['absolute'] = false;
$array41 = array (
);$arguments39['image'] = $renderingContext->getVariableProvider()->getByPath('mediaElement', $array41);
$array42 = array (
);$arguments39['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array42);
$array43 = array (
);$arguments39['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array43);
$arguments39['width'] = '400c';
$arguments39['height'] = '240c';

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
						';
return $output38;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.type', $array36);
$array35['1'] = ' == 2';

$expression37 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = $renderChildrenClosure34;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
					';
return $output32;
};
$arguments28 = array();
$arguments28['map'] = NULL;
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['mediaElement'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array31);
$arguments28['map'] = $array30;

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
				';
return $output27;
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['newsItem'] = NULL;
$arguments22['settings'] = array (
);
$arguments22['uriOnly'] = false;
$arguments22['configuration'] = array (
);
$arguments22['content'] = '';
$arguments22['section'] = NULL;
$array24 = array (
);$arguments22['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array24);
$array25 = array (
);$arguments22['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array25);
$array26 = array (
);$arguments22['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array26);

$output21 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
			</div>
		';
return $output21;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '

	<div class="news-list-item__teaser">
		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
					<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$array110 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array110);
};
$arguments105 = array();
$arguments105['maxCharacters'] = NULL;
$arguments105['append'] = '&hellip;';
$arguments105['respectWordBoundaries'] = true;
$arguments105['respectHtml'] = true;
$array107 = array (
);$arguments105['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array107);
// Rendering Boolean node
// Rendering Array
$array108 = array();
$array108['0'] = 1;

$expression109 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments105['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression109(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);
};
$arguments103 = array();
$arguments103['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '</div>
				';
return $output102;
};
$arguments100 = array();

$output99 .= '';

$output99 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
					<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$array121 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array121);
};
$arguments116 = array();
$arguments116['maxCharacters'] = NULL;
$arguments116['append'] = '&hellip;';
$arguments116['respectWordBoundaries'] = true;
$arguments116['respectHtml'] = true;
$array118 = array (
);$arguments116['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array118);
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array119['0'] = 1;

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments116['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);
};
$arguments114 = array();
$arguments114['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output113 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '</div>
				';
return $output113;
};
$arguments111 = array();
$arguments111['if'] = NULL;

$output99 .= '';

$output99 .= '
			';
return $output99;
};
$arguments76 = array();
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$arguments76['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array96 = array();
$array97 = array (
);$array96['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array97);

$expression98 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments76['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array96)
					),
					$renderingContext
				);
$arguments76['__thenClosure'] = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
					<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$array86 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array86);
};
$arguments81 = array();
$arguments81['maxCharacters'] = NULL;
$arguments81['append'] = '&hellip;';
$arguments81['respectWordBoundaries'] = true;
$arguments81['respectHtml'] = true;
$array83 = array (
);$arguments81['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array83);
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array84['0'] = 1;

$expression85 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments81['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);
};
$arguments79 = array();
$arguments79['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '</div>
				';
return $output78;
};
$arguments76['__elseClosures'][] = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
					<div itemprop="description">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$array95 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array95);
};
$arguments90 = array();
$arguments90['maxCharacters'] = NULL;
$arguments90['append'] = '&hellip;';
$arguments90['respectWordBoundaries'] = true;
$arguments90['respectHtml'] = true;
$array92 = array (
);$arguments90['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array92);
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array93['0'] = 1;

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments90['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);
};
$arguments88 = array();
$arguments88['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '</div>
				';
return $output87;
};

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
		';
return $output75;
};
$arguments73 = array();

$output0 .= GeorgRinger\News\ViewHelpers\RemoveMediaTagsViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output0 .= '

		';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return '
			weiterlesen
		';
};
$arguments122 = array();
$arguments122['additionalAttributes'] = NULL;
$arguments122['data'] = NULL;
$arguments122['class'] = NULL;
$arguments122['dir'] = NULL;
$arguments122['id'] = NULL;
$arguments122['lang'] = NULL;
$arguments122['style'] = NULL;
$arguments122['title'] = NULL;
$arguments122['accesskey'] = NULL;
$arguments122['tabindex'] = NULL;
$arguments122['onclick'] = NULL;
$arguments122['newsItem'] = NULL;
$arguments122['settings'] = array (
);
$arguments122['uriOnly'] = false;
$arguments122['configuration'] = array (
);
$arguments122['content'] = '';
$arguments122['section'] = NULL;
$array124 = array (
);$arguments122['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array124);
$array125 = array (
);$arguments122['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array125);
$arguments122['class'] = 'more';
$array126 = array (
);$arguments122['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array126);

$output0 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output0 .= '
	</div>

</div>

';

return $output0;
}


}
#