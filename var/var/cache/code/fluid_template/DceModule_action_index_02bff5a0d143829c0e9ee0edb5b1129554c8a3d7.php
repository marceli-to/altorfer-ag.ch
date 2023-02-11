<?php

class DceModule_action_index_02bff5a0d143829c0e9ee0edb5b1129554c8a3d7 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Backend';
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
));
}

/**
 * section functions
 */
public function section_2f887def33825e52ffbcca83446cfd6a6f676ff7(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper T3\Dce\ViewHelpers\Be\IncludeCssFileViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['path'] = NULL;
$arguments1['path'] = 'EXT:dce/Resources/Public/Css/dceModule.css';

$output0 .= T3\Dce\ViewHelpers\Be\IncludeCssFileViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * section buttons
 */
public function section_23396acb661dc28e4b66873f58265af6e5121de3(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '
	<h4 class="dceHeader">
		<img class="bg-pink bg-logo" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['path'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['absolute'] = false;
$arguments4['path'] = 'Icons/ext_icon_white.png';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['key'] = NULL;
$arguments6['id'] = NULL;
$arguments6['default'] = NULL;
$arguments6['arguments'] = NULL;
$arguments6['extensionName'] = NULL;
$arguments6['languageKey'] = NULL;
$arguments6['alternativeLanguageKeys'] = NULL;
$arguments6['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xml:mlang_labels_tablabel';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output3 .= '" />
		<span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['key'] = NULL;
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$arguments8['languageKey'] = NULL;
$arguments8['alternativeLanguageKeys'] = NULL;
$arguments8['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xml:mlang_labels_tablabel';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output3 .= '</span>
		<span class="dceVersion">';
// Rendering ViewHelper T3\Dce\ViewHelpers\Be\Version\DceViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['returnInt'] = false;

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [T3\Dce\ViewHelpers\Be\Version\DceViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output3 .= '</span>
	</h4>
';

return $output3;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output12 = '';

$output12 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
		<div class="row space-bottom">
			<div class="col-lg-12">
				<div class="nav-group">
					<a href="';
// Rendering ViewHelper T3\Dce\ViewHelpers\Format\TinyViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['section'] = NULL;
$arguments19['partial'] = NULL;
$arguments19['delegate'] = NULL;
$arguments19['renderable'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['optional'] = false;
$arguments19['default'] = NULL;
$arguments19['contentAs'] = NULL;
$arguments19['debug'] = true;
$arguments19['partial'] = 'Module/NewDceLink';
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);
};
$arguments17 = array();
$arguments17['subject'] = NULL;

$output16 .= T3\Dce\ViewHelpers\Format\TinyViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '" class="btn btn-primary"><i class="fa fa-plus-circle"></i>  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['languageKey'] = NULL;
$arguments21['alternativeLanguageKeys'] = NULL;
$output23 = '';
$array24 = array (
);
$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array24)]);

$output23 .= 'createNewDce';
$arguments21['key'] = $output23;

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output16 .= '</a>
					<a href="';
// Rendering ViewHelper T3\Dce\ViewHelpers\Format\TinyViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['section'] = NULL;
$arguments27['partial'] = NULL;
$arguments27['delegate'] = NULL;
$arguments27['renderable'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['optional'] = false;
$arguments27['default'] = NULL;
$arguments27['contentAs'] = NULL;
$arguments27['debug'] = true;
$arguments27['partial'] = 'Module/ListViewLink';
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
};
$arguments25 = array();
$arguments25['subject'] = NULL;

$output16 .= T3\Dce\ViewHelpers\Format\TinyViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output16 .= '" class="btn btn-default">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['identifier'] = NULL;
$arguments29['size'] = 'small';
$arguments29['overlay'] = NULL;
$arguments29['state'] = 'default';
$arguments29['alternativeMarkupIdentifier'] = NULL;
$arguments29['identifier'] = 'actions-system-list-open';

$output16 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output16 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['key'] = NULL;
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$arguments31['languageKey'] = NULL;
$arguments31['alternativeLanguageKeys'] = NULL;
$output33 = '';
$array34 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array34)]);

$output33 .= 'goToListView';
$arguments31['key'] = $output33;

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output16 .= '</a>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['identifier'] = NULL;
$arguments38['size'] = 'small';
$arguments38['overlay'] = NULL;
$arguments38['state'] = 'default';
$arguments38['alternativeMarkupIdentifier'] = NULL;
$arguments38['identifier'] = 'actions-system-cache-clear-impact-high';

$output37 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= ' ';
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
$output42 = '';
$array43 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array43)]);

$output42 .= 'clearCaches';
$arguments40['key'] = $output42;

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);
return $output37;
};
$arguments35 = array();
$arguments35['additionalAttributes'] = NULL;
$arguments35['data'] = NULL;
$arguments35['class'] = NULL;
$arguments35['dir'] = NULL;
$arguments35['id'] = NULL;
$arguments35['lang'] = NULL;
$arguments35['style'] = NULL;
$arguments35['title'] = NULL;
$arguments35['accesskey'] = NULL;
$arguments35['tabindex'] = NULL;
$arguments35['onclick'] = NULL;
$arguments35['name'] = NULL;
$arguments35['rel'] = NULL;
$arguments35['rev'] = NULL;
$arguments35['target'] = NULL;
$arguments35['action'] = NULL;
$arguments35['controller'] = NULL;
$arguments35['extensionName'] = NULL;
$arguments35['pluginName'] = NULL;
$arguments35['pageUid'] = NULL;
$arguments35['pageType'] = NULL;
$arguments35['noCache'] = NULL;
$arguments35['noCacheHash'] = NULL;
$arguments35['section'] = NULL;
$arguments35['format'] = NULL;
$arguments35['linkAccessRestrictedPages'] = NULL;
$arguments35['additionalParams'] = NULL;
$arguments35['absolute'] = NULL;
$arguments35['addQueryString'] = NULL;
$arguments35['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments35['addQueryStringMethod'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['action'] = 'clearCaches';
$arguments35['class'] = 'btn btn-default';

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output16 .= '
				</div>

				<div class="nav-group">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '<i class="fa fa-trophy"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['key'] = NULL;
$arguments47['id'] = NULL;
$arguments47['default'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['extensionName'] = NULL;
$arguments47['languageKey'] = NULL;
$arguments47['alternativeLanguageKeys'] = NULL;
$output49 = '';
$array50 = array (
);
$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array50)]);

$output49 .= 'hallOfFame';
$arguments47['key'] = $output49;

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);
return $output46;
};
$arguments44 = array();
$arguments44['additionalAttributes'] = NULL;
$arguments44['data'] = NULL;
$arguments44['class'] = NULL;
$arguments44['dir'] = NULL;
$arguments44['id'] = NULL;
$arguments44['lang'] = NULL;
$arguments44['style'] = NULL;
$arguments44['title'] = NULL;
$arguments44['accesskey'] = NULL;
$arguments44['tabindex'] = NULL;
$arguments44['onclick'] = NULL;
$arguments44['name'] = NULL;
$arguments44['rel'] = NULL;
$arguments44['rev'] = NULL;
$arguments44['target'] = NULL;
$arguments44['action'] = NULL;
$arguments44['controller'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['pluginName'] = NULL;
$arguments44['pageUid'] = NULL;
$arguments44['pageType'] = NULL;
$arguments44['noCache'] = NULL;
$arguments44['noCacheHash'] = NULL;
$arguments44['section'] = NULL;
$arguments44['format'] = NULL;
$arguments44['linkAccessRestrictedPages'] = NULL;
$arguments44['additionalParams'] = NULL;
$arguments44['absolute'] = NULL;
$arguments44['addQueryString'] = NULL;
$arguments44['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments44['addQueryStringMethod'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['action'] = 'hallOfFame';
$arguments44['class'] = 'btn btn-default';

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output16 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['section'] = NULL;
$arguments51['partial'] = NULL;
$arguments51['delegate'] = NULL;
$arguments51['renderable'] = NULL;
$arguments51['arguments'] = array (
);
$arguments51['optional'] = false;
$arguments51['default'] = NULL;
$arguments51['contentAs'] = NULL;
$arguments51['debug'] = true;
$arguments51['partial'] = 'Module/Donate';
// Rendering Array
$array53 = array();
$array53['primary'] = 1;
$arguments51['arguments'] = $array53;

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output16 .= '
				</div>

				<div class="nav-group">
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['identifier'] = NULL;
$arguments54['size'] = 'small';
$arguments54['overlay'] = NULL;
$arguments54['state'] = 'default';
$arguments54['alternativeMarkupIdentifier'] = NULL;
$arguments54['identifier'] = 'actions-system-help-open';

$output16 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output16 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['languageKey'] = NULL;
$arguments56['alternativeLanguageKeys'] = NULL;
$output58 = '';
$array59 = array (
);
$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array59)]);

$output58 .= 'help';
$arguments56['key'] = $output58;

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output16 .= ' <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a target="_blank" href="https://docs.typo3.org/typo3cms/extensions/dce/">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['languageKey'] = NULL;
$arguments60['alternativeLanguageKeys'] = NULL;
$output62 = '';
$array63 = array (
);
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array63)]);

$output62 .= 'help.manual';
$arguments60['key'] = $output62;

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output16 .= '</a></li>
							<li><a target="_blank" href="https://forge.typo3.org/projects/extension-dce/wiki/">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['key'] = NULL;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['languageKey'] = NULL;
$arguments64['alternativeLanguageKeys'] = NULL;
$output66 = '';
$array67 = array (
);
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array67)]);

$output66 .= 'help.wiki';
$arguments64['key'] = $output66;

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output16 .= '</a></li>
							<li class="divider"></li>
							<li><a target="_blank" href="https://www.facebook.com/TYPO3.DCE.Extension">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['key'] = NULL;
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$arguments68['languageKey'] = NULL;
$arguments68['alternativeLanguageKeys'] = NULL;
$output70 = '';
$array71 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array71)]);

$output70 .= 'help.facebook';
$arguments68['key'] = $output70;

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output16 .= '</a></li>
							<li><a target="_blank" href="https://bitbucket.org/ArminVieweg/dce/">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['key'] = NULL;
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['languageKey'] = NULL;
$arguments72['alternativeLanguageKeys'] = NULL;
$output74 = '';
$array75 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array75)]);

$output74 .= 'help.bitbucket';
$arguments72['key'] = $output74;

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext)]);

$output16 .= '</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row space-bottom">
			<div class="col-lg-10">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>DCEs</th>
							<th>Status</th>
							<th>Identifier</th>
							<th>UID</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['key'] = NULL;
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['languageKey'] = NULL;
$arguments76['alternativeLanguageKeys'] = NULL;
$output78 = '';
$array79 = array (
);
$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array79)]);

$output78 .= 'usage';
$arguments76['key'] = $output78;

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output16 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['key'] = NULL;
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$arguments80['languageKey'] = NULL;
$arguments80['alternativeLanguageKeys'] = NULL;
$output82 = '';
$array83 = array (
);
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array83)]);

$output82 .= 'dceStats';
$arguments80['key'] = $output82;

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext)]);

$output16 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['key'] = NULL;
$arguments84['id'] = NULL;
$arguments84['default'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['extensionName'] = NULL;
$arguments84['languageKey'] = NULL;
$arguments84['alternativeLanguageKeys'] = NULL;
$output86 = '';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array87)]);

$output86 .= 'fieldStats';
$arguments84['key'] = $output86;

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext)]);

$output16 .= '</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['section'] = NULL;
$arguments117['partial'] = NULL;
$arguments117['delegate'] = NULL;
$arguments117['renderable'] = NULL;
$arguments117['arguments'] = array (
);
$arguments117['optional'] = false;
$arguments117['default'] = NULL;
$arguments117['contentAs'] = NULL;
$arguments117['debug'] = true;
$arguments117['partial'] = 'Module/DceListItem';
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['dce'] = $renderingContext->getVariableProvider()->getByPath('dce', $array120);
$arguments117['arguments'] = $array119;

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output116 .= '
								';
return $output116;
};
$arguments113 = array();
$arguments113['each'] = NULL;
$arguments113['as'] = NULL;
$arguments113['key'] = NULL;
$arguments113['reverse'] = false;
$arguments113['iteration'] = NULL;
$array115 = array (
);$arguments113['each'] = $renderingContext->getVariableProvider()->getByPath('dces', $array115);
$arguments113['as'] = 'dce';

$output112 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
							';
return $output112;
};
$arguments110 = array();

$output109 .= '';

$output109 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$output123 = '';

$output123 .= '
								<tr><td colspan="8"><em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['key'] = NULL;
$arguments124['id'] = NULL;
$arguments124['default'] = NULL;
$arguments124['arguments'] = NULL;
$arguments124['extensionName'] = NULL;
$arguments124['languageKey'] = NULL;
$arguments124['alternativeLanguageKeys'] = NULL;
$output126 = '';
$array127 = array (
);
$output126 .= $renderingContext->getVariableProvider()->getByPath('lll', $array127);

$output126 .= 'noDcesFound';
$arguments124['key'] = $output126;

$output123 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext)]);

$output123 .= '</em></td></tr>
							';
return $output123;
};
$arguments121 = array();
$arguments121['if'] = NULL;

$output109 .= '';

$output109 .= '
						';
return $output109;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$array107 = array (
);return $renderingContext->getVariableProvider()->getByPath('dces', $array107);
};
$arguments105 = array();
$arguments105['subject'] = NULL;
$renderChildrenClosure106 = ($arguments105['subject'] !== null) ? function() use ($arguments105) { return $arguments105['subject']; } : $renderChildrenClosure106;$array104['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);
$array104['1'] = ' > 0';

$expression108 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression108(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
$arguments88['__thenClosure'] = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['section'] = NULL;
$arguments95['partial'] = NULL;
$arguments95['delegate'] = NULL;
$arguments95['renderable'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['optional'] = false;
$arguments95['default'] = NULL;
$arguments95['contentAs'] = NULL;
$arguments95['debug'] = true;
$arguments95['partial'] = 'Module/DceListItem';
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['dce'] = $renderingContext->getVariableProvider()->getByPath('dce', $array98);
$arguments95['arguments'] = $array97;

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
								';
return $output94;
};
$arguments91 = array();
$arguments91['each'] = NULL;
$arguments91['as'] = NULL;
$arguments91['key'] = NULL;
$arguments91['reverse'] = false;
$arguments91['iteration'] = NULL;
$array93 = array (
);$arguments91['each'] = $renderingContext->getVariableProvider()->getByPath('dces', $array93);
$arguments91['as'] = 'dce';

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output90 .= '
							';
return $output90;
};
$arguments88['__elseClosures'][] = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
								<tr><td colspan="8"><em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['key'] = NULL;
$arguments100['id'] = NULL;
$arguments100['default'] = NULL;
$arguments100['arguments'] = NULL;
$arguments100['extensionName'] = NULL;
$arguments100['languageKey'] = NULL;
$arguments100['alternativeLanguageKeys'] = NULL;
$output102 = '';
$array103 = array (
);
$output102 .= $renderingContext->getVariableProvider()->getByPath('lll', $array103);

$output102 .= 'noDcesFound';
$arguments100['key'] = $output102;

$output99 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext)]);

$output99 .= '</em></td></tr>
							';
return $output99;
};

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output16 .= '
					</tbody>
				</table>
			</div>
		</div>
	';
return $output16;
};
$arguments13 = array();
$arguments13['map'] = NULL;
// Rendering Array
$array15 = array();
$array15['lll'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xml:';
$arguments13['map'] = $array15;

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
';

return $output12;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output128 = '';

$output128 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['name'] = NULL;
$arguments129['name'] = 'Backend';

$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output128 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
	';
// Rendering ViewHelper T3\Dce\ViewHelpers\Be\IncludeCssFileViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['path'] = NULL;
$arguments134['path'] = 'EXT:dce/Resources/Public/Css/dceModule.css';

$output133 .= T3\Dce\ViewHelpers\Be\IncludeCssFileViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output133 .= '
';
return $output133;
};
$arguments131 = array();
$arguments131['name'] = NULL;
$arguments131['name'] = 'functions';

$output128 .= NULL;

$output128 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
	<h4 class="dceHeader">
		<img class="bg-pink bg-logo" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['path'] = NULL;
$arguments139['extensionName'] = NULL;
$arguments139['absolute'] = false;
$arguments139['path'] = 'Icons/ext_icon_white.png';

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext)]);

$output138 .= '" alt="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['key'] = NULL;
$arguments141['id'] = NULL;
$arguments141['default'] = NULL;
$arguments141['arguments'] = NULL;
$arguments141['extensionName'] = NULL;
$arguments141['languageKey'] = NULL;
$arguments141['alternativeLanguageKeys'] = NULL;
$arguments141['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xml:mlang_labels_tablabel';

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext)]);

$output138 .= '" />
		<span>';
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
$arguments143['key'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xml:mlang_labels_tablabel';

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext)]);

$output138 .= '</span>
		<span class="dceVersion">';
// Rendering ViewHelper T3\Dce\ViewHelpers\Be\Version\DceViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['returnInt'] = false;

$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [T3\Dce\ViewHelpers\Be\Version\DceViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext)]);

$output138 .= '</span>
	</h4>
';
return $output138;
};
$arguments136 = array();
$arguments136['name'] = NULL;
$arguments136['name'] = 'buttons';

$output128 .= NULL;

$output128 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
		<div class="row space-bottom">
			<div class="col-lg-12">
				<div class="nav-group">
					<a href="';
// Rendering ViewHelper T3\Dce\ViewHelpers\Format\TinyViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['section'] = NULL;
$arguments156['partial'] = NULL;
$arguments156['delegate'] = NULL;
$arguments156['renderable'] = NULL;
$arguments156['arguments'] = array (
);
$arguments156['optional'] = false;
$arguments156['default'] = NULL;
$arguments156['contentAs'] = NULL;
$arguments156['debug'] = true;
$arguments156['partial'] = 'Module/NewDceLink';
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);
};
$arguments154 = array();
$arguments154['subject'] = NULL;

$output153 .= T3\Dce\ViewHelpers\Format\TinyViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '" class="btn btn-primary"><i class="fa fa-plus-circle"></i>  ';
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
$output160 = '';
$array161 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array161)]);

$output160 .= 'createNewDce';
$arguments158['key'] = $output160;

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext)]);

$output153 .= '</a>
					<a href="';
// Rendering ViewHelper T3\Dce\ViewHelpers\Format\TinyViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['section'] = NULL;
$arguments164['partial'] = NULL;
$arguments164['delegate'] = NULL;
$arguments164['renderable'] = NULL;
$arguments164['arguments'] = array (
);
$arguments164['optional'] = false;
$arguments164['default'] = NULL;
$arguments164['contentAs'] = NULL;
$arguments164['debug'] = true;
$arguments164['partial'] = 'Module/ListViewLink';
return TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);
};
$arguments162 = array();
$arguments162['subject'] = NULL;

$output153 .= T3\Dce\ViewHelpers\Format\TinyViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output153 .= '" class="btn btn-default">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['identifier'] = NULL;
$arguments166['size'] = 'small';
$arguments166['overlay'] = NULL;
$arguments166['state'] = 'default';
$arguments166['alternativeMarkupIdentifier'] = NULL;
$arguments166['identifier'] = 'actions-system-list-open';

$output153 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output153 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['key'] = NULL;
$arguments168['id'] = NULL;
$arguments168['default'] = NULL;
$arguments168['arguments'] = NULL;
$arguments168['extensionName'] = NULL;
$arguments168['languageKey'] = NULL;
$arguments168['alternativeLanguageKeys'] = NULL;
$output170 = '';
$array171 = array (
);
$output170 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array171)]);

$output170 .= 'goToListView';
$arguments168['key'] = $output170;

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext)]);

$output153 .= '</a>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$output174 = '';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['identifier'] = NULL;
$arguments175['size'] = 'small';
$arguments175['overlay'] = NULL;
$arguments175['state'] = 'default';
$arguments175['alternativeMarkupIdentifier'] = NULL;
$arguments175['identifier'] = 'actions-system-cache-clear-impact-high';

$output174 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output174 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['key'] = NULL;
$arguments177['id'] = NULL;
$arguments177['default'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['extensionName'] = NULL;
$arguments177['languageKey'] = NULL;
$arguments177['alternativeLanguageKeys'] = NULL;
$output179 = '';
$array180 = array (
);
$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array180)]);

$output179 .= 'clearCaches';
$arguments177['key'] = $output179;

$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext)]);
return $output174;
};
$arguments172 = array();
$arguments172['additionalAttributes'] = NULL;
$arguments172['data'] = NULL;
$arguments172['class'] = NULL;
$arguments172['dir'] = NULL;
$arguments172['id'] = NULL;
$arguments172['lang'] = NULL;
$arguments172['style'] = NULL;
$arguments172['title'] = NULL;
$arguments172['accesskey'] = NULL;
$arguments172['tabindex'] = NULL;
$arguments172['onclick'] = NULL;
$arguments172['name'] = NULL;
$arguments172['rel'] = NULL;
$arguments172['rev'] = NULL;
$arguments172['target'] = NULL;
$arguments172['action'] = NULL;
$arguments172['controller'] = NULL;
$arguments172['extensionName'] = NULL;
$arguments172['pluginName'] = NULL;
$arguments172['pageUid'] = NULL;
$arguments172['pageType'] = NULL;
$arguments172['noCache'] = NULL;
$arguments172['noCacheHash'] = NULL;
$arguments172['section'] = NULL;
$arguments172['format'] = NULL;
$arguments172['linkAccessRestrictedPages'] = NULL;
$arguments172['additionalParams'] = NULL;
$arguments172['absolute'] = NULL;
$arguments172['addQueryString'] = NULL;
$arguments172['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments172['addQueryStringMethod'] = NULL;
$arguments172['arguments'] = NULL;
$arguments172['action'] = 'clearCaches';
$arguments172['class'] = 'btn btn-default';

$output153 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output153 .= '
				</div>

				<div class="nav-group">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '<i class="fa fa-trophy"></i> ';
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
$output186 = '';
$array187 = array (
);
$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array187)]);

$output186 .= 'hallOfFame';
$arguments184['key'] = $output186;

$output183 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext)]);
return $output183;
};
$arguments181 = array();
$arguments181['additionalAttributes'] = NULL;
$arguments181['data'] = NULL;
$arguments181['class'] = NULL;
$arguments181['dir'] = NULL;
$arguments181['id'] = NULL;
$arguments181['lang'] = NULL;
$arguments181['style'] = NULL;
$arguments181['title'] = NULL;
$arguments181['accesskey'] = NULL;
$arguments181['tabindex'] = NULL;
$arguments181['onclick'] = NULL;
$arguments181['name'] = NULL;
$arguments181['rel'] = NULL;
$arguments181['rev'] = NULL;
$arguments181['target'] = NULL;
$arguments181['action'] = NULL;
$arguments181['controller'] = NULL;
$arguments181['extensionName'] = NULL;
$arguments181['pluginName'] = NULL;
$arguments181['pageUid'] = NULL;
$arguments181['pageType'] = NULL;
$arguments181['noCache'] = NULL;
$arguments181['noCacheHash'] = NULL;
$arguments181['section'] = NULL;
$arguments181['format'] = NULL;
$arguments181['linkAccessRestrictedPages'] = NULL;
$arguments181['additionalParams'] = NULL;
$arguments181['absolute'] = NULL;
$arguments181['addQueryString'] = NULL;
$arguments181['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments181['addQueryStringMethod'] = NULL;
$arguments181['arguments'] = NULL;
$arguments181['action'] = 'hallOfFame';
$arguments181['class'] = 'btn btn-default';

$output153 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output153 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['section'] = NULL;
$arguments188['partial'] = NULL;
$arguments188['delegate'] = NULL;
$arguments188['renderable'] = NULL;
$arguments188['arguments'] = array (
);
$arguments188['optional'] = false;
$arguments188['default'] = NULL;
$arguments188['contentAs'] = NULL;
$arguments188['debug'] = true;
$arguments188['partial'] = 'Module/Donate';
// Rendering Array
$array190 = array();
$array190['primary'] = 1;
$arguments188['arguments'] = $array190;

$output153 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output153 .= '
				</div>

				<div class="nav-group">
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['identifier'] = NULL;
$arguments191['size'] = 'small';
$arguments191['overlay'] = NULL;
$arguments191['state'] = 'default';
$arguments191['alternativeMarkupIdentifier'] = NULL;
$arguments191['identifier'] = 'actions-system-help-open';

$output153 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output153 .= '
							';
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
$output195 = '';
$array196 = array (
);
$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array196)]);

$output195 .= 'help';
$arguments193['key'] = $output195;

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext)]);

$output153 .= ' <span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a target="_blank" href="https://docs.typo3.org/typo3cms/extensions/dce/">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['key'] = NULL;
$arguments197['id'] = NULL;
$arguments197['default'] = NULL;
$arguments197['arguments'] = NULL;
$arguments197['extensionName'] = NULL;
$arguments197['languageKey'] = NULL;
$arguments197['alternativeLanguageKeys'] = NULL;
$output199 = '';
$array200 = array (
);
$output199 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array200)]);

$output199 .= 'help.manual';
$arguments197['key'] = $output199;

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext)]);

$output153 .= '</a></li>
							<li><a target="_blank" href="https://forge.typo3.org/projects/extension-dce/wiki/">';
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
$output203 = '';
$array204 = array (
);
$output203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array204)]);

$output203 .= 'help.wiki';
$arguments201['key'] = $output203;

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext)]);

$output153 .= '</a></li>
							<li class="divider"></li>
							<li><a target="_blank" href="https://www.facebook.com/TYPO3.DCE.Extension">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['key'] = NULL;
$arguments205['id'] = NULL;
$arguments205['default'] = NULL;
$arguments205['arguments'] = NULL;
$arguments205['extensionName'] = NULL;
$arguments205['languageKey'] = NULL;
$arguments205['alternativeLanguageKeys'] = NULL;
$output207 = '';
$array208 = array (
);
$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array208)]);

$output207 .= 'help.facebook';
$arguments205['key'] = $output207;

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext)]);

$output153 .= '</a></li>
							<li><a target="_blank" href="https://bitbucket.org/ArminVieweg/dce/">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['key'] = NULL;
$arguments209['id'] = NULL;
$arguments209['default'] = NULL;
$arguments209['arguments'] = NULL;
$arguments209['extensionName'] = NULL;
$arguments209['languageKey'] = NULL;
$arguments209['alternativeLanguageKeys'] = NULL;
$output211 = '';
$array212 = array (
);
$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array212)]);

$output211 .= 'help.bitbucket';
$arguments209['key'] = $output211;

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext)]);

$output153 .= '</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row space-bottom">
			<div class="col-lg-10">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>DCEs</th>
							<th>Status</th>
							<th>Identifier</th>
							<th>UID</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments213 = array();
$arguments213['key'] = NULL;
$arguments213['id'] = NULL;
$arguments213['default'] = NULL;
$arguments213['arguments'] = NULL;
$arguments213['extensionName'] = NULL;
$arguments213['languageKey'] = NULL;
$arguments213['alternativeLanguageKeys'] = NULL;
$output215 = '';
$array216 = array (
);
$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array216)]);

$output215 .= 'usage';
$arguments213['key'] = $output215;

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext)]);

$output153 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['key'] = NULL;
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['languageKey'] = NULL;
$arguments217['alternativeLanguageKeys'] = NULL;
$output219 = '';
$array220 = array (
);
$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array220)]);

$output219 .= 'dceStats';
$arguments217['key'] = $output219;

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output153 .= '</th>
							<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['key'] = NULL;
$arguments221['id'] = NULL;
$arguments221['default'] = NULL;
$arguments221['arguments'] = NULL;
$arguments221['extensionName'] = NULL;
$arguments221['languageKey'] = NULL;
$arguments221['alternativeLanguageKeys'] = NULL;
$output223 = '';
$array224 = array (
);
$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('lll', $array224)]);

$output223 .= 'fieldStats';
$arguments221['key'] = $output223;

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext)]);

$output153 .= '</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$output253 = '';

$output253 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments254 = array();
$arguments254['section'] = NULL;
$arguments254['partial'] = NULL;
$arguments254['delegate'] = NULL;
$arguments254['renderable'] = NULL;
$arguments254['arguments'] = array (
);
$arguments254['optional'] = false;
$arguments254['default'] = NULL;
$arguments254['contentAs'] = NULL;
$arguments254['debug'] = true;
$arguments254['partial'] = 'Module/DceListItem';
// Rendering Array
$array256 = array();
$array257 = array (
);$array256['dce'] = $renderingContext->getVariableProvider()->getByPath('dce', $array257);
$arguments254['arguments'] = $array256;

$output253 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output253 .= '
								';
return $output253;
};
$arguments250 = array();
$arguments250['each'] = NULL;
$arguments250['as'] = NULL;
$arguments250['key'] = NULL;
$arguments250['reverse'] = false;
$arguments250['iteration'] = NULL;
$array252 = array (
);$arguments250['each'] = $renderingContext->getVariableProvider()->getByPath('dces', $array252);
$arguments250['as'] = 'dce';

$output249 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output249 .= '
							';
return $output249;
};
$arguments247 = array();

$output246 .= '';

$output246 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
								<tr><td colspan="8"><em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure262 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments261 = array();
$arguments261['key'] = NULL;
$arguments261['id'] = NULL;
$arguments261['default'] = NULL;
$arguments261['arguments'] = NULL;
$arguments261['extensionName'] = NULL;
$arguments261['languageKey'] = NULL;
$arguments261['alternativeLanguageKeys'] = NULL;
$output263 = '';
$array264 = array (
);
$output263 .= $renderingContext->getVariableProvider()->getByPath('lll', $array264);

$output263 .= 'noDcesFound';
$arguments261['key'] = $output263;

$output260 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext)]);

$output260 .= '</em></td></tr>
							';
return $output260;
};
$arguments258 = array();
$arguments258['if'] = NULL;

$output246 .= '';

$output246 .= '
						';
return $output246;
};
$arguments225 = array();
$arguments225['then'] = NULL;
$arguments225['else'] = NULL;
$arguments225['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array241 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$array244 = array (
);return $renderingContext->getVariableProvider()->getByPath('dces', $array244);
};
$arguments242 = array();
$arguments242['subject'] = NULL;
$renderChildrenClosure243 = ($arguments242['subject'] !== null) ? function() use ($arguments242) { return $arguments242['subject']; } : $renderChildrenClosure243;$array241['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);
$array241['1'] = ' > 0';

$expression245 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments225['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression245(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array241)
					),
					$renderingContext
				);
$arguments225['__thenClosure'] = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['section'] = NULL;
$arguments232['partial'] = NULL;
$arguments232['delegate'] = NULL;
$arguments232['renderable'] = NULL;
$arguments232['arguments'] = array (
);
$arguments232['optional'] = false;
$arguments232['default'] = NULL;
$arguments232['contentAs'] = NULL;
$arguments232['debug'] = true;
$arguments232['partial'] = 'Module/DceListItem';
// Rendering Array
$array234 = array();
$array235 = array (
);$array234['dce'] = $renderingContext->getVariableProvider()->getByPath('dce', $array235);
$arguments232['arguments'] = $array234;

$output231 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output231 .= '
								';
return $output231;
};
$arguments228 = array();
$arguments228['each'] = NULL;
$arguments228['as'] = NULL;
$arguments228['key'] = NULL;
$arguments228['reverse'] = false;
$arguments228['iteration'] = NULL;
$array230 = array (
);$arguments228['each'] = $renderingContext->getVariableProvider()->getByPath('dces', $array230);
$arguments228['as'] = 'dce';

$output227 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output227 .= '
							';
return $output227;
};
$arguments225['__elseClosures'][] = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
								<tr><td colspan="8"><em>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['key'] = NULL;
$arguments237['id'] = NULL;
$arguments237['default'] = NULL;
$arguments237['arguments'] = NULL;
$arguments237['extensionName'] = NULL;
$arguments237['languageKey'] = NULL;
$arguments237['alternativeLanguageKeys'] = NULL;
$output239 = '';
$array240 = array (
);
$output239 .= $renderingContext->getVariableProvider()->getByPath('lll', $array240);

$output239 .= 'noDcesFound';
$arguments237['key'] = $output239;

$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext)]);

$output236 .= '</em></td></tr>
							';
return $output236;
};

$output153 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output153 .= '
					</tbody>
				</table>
			</div>
		</div>
	';
return $output153;
};
$arguments150 = array();
$arguments150['map'] = NULL;
// Rendering Array
$array152 = array();
$array152['lll'] = 'LLL:EXT:dce/Resources/Private/Language/locallang_mod.xml:';
$arguments150['map'] = $array152;

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
';
return $output149;
};
$arguments147 = array();
$arguments147['name'] = NULL;
$arguments147['name'] = 'content';

$output128 .= NULL;

$output128 .= '
';

return $output128;
}


}
#