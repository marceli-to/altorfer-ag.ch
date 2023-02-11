<?php

class partial_Header_375b5410a8f97b0da994f9dec64a9a4abd171cd4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'xlink' => NULL,
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<header class="site-header js-header">
    <div>
      <a href="javascript:;" class="btn-menu js-btn-menu" title="Menu anzeigen"></a>
      <a href="/" class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 265 81"><style>.st0,.st1,.st2{fill:#10069f}.st1,.st2{clip-path:url(#SVGID_2_)}.st2{clip-path:url(#SVGID_4_)}.st3,.st4,.st5{clip-path:url(#SVGID_6_);fill:#10069f}.st4,.st5{clip-path:url(#SVGID_8_)}.st5{clip-path:url(#SVGID_10_)}</style><path class="st0" d="M20.73 0v49.89H0v15.68h20.73V81h20.2V0zM66.02 34.84l9.81 15.05h-9.81V34.84zM45.82 0v81h20.2V65.26h19.84L96.12 81h15.81l-.03-14.82L68.65 0H45.82zM151.89 39.01h-7.33V23.06h2.25v13.75h5.08zM156.7 39.01h-2.25V25.2h-2.9v-2.14h8.05v2.14h-2.9z"/><defs><path id="SVGID_1_" d="M0 0h265.15v81H0z"/></defs><clipPath id="SVGID_2_"><use xlink:href="#SVGID_1_" overflow="visible"/></clipPath><path class="st1" d="M162.03 30.96c0 .83.13 1.62.4 2.36.27.74.66 1.38 1.16 1.92.53.57 1.15 1.01 1.84 1.33.69.31 1.41.47 2.13.47 1.6 0 2.94-.59 4.02-1.76 1.08-1.17 1.62-2.63 1.62-4.37 0-.74-.13-1.44-.39-2.11-.26-.67-.63-1.29-1.13-1.85-.59-.65-1.22-1.13-1.89-1.44-.67-.31-1.41-.47-2.23-.47-.73 0-1.43.14-2.09.43-.66.28-1.25.7-1.76 1.24-.54.57-.95 1.22-1.25 1.96-.28.75-.43 1.51-.43 2.29m-2.34-.02c0-1.12.21-2.18.62-3.18.41-1 1.01-1.9 1.81-2.71.75-.76 1.59-1.34 2.51-1.72.92-.39 1.91-.59 2.97-.59 1.08 0 2.09.19 3.02.59.93.39 1.78.97 2.54 1.75.79.8 1.38 1.69 1.78 2.67.4.99.6 2.05.6 3.19 0 1.13-.17 2.17-.51 3.13-.34.95-.85 1.81-1.53 2.57-.8.89-1.7 1.56-2.69 2.02-.99.45-2.07.68-3.22.68-1.17 0-2.24-.23-3.22-.69-.99-.46-1.87-1.14-2.65-2.05a7.794 7.794 0 0 1-1.5-2.57c-.36-.97-.53-2-.53-3.09M180.34 31.34h1.15c1.55 0 2.71-.26 3.47-.78.76-.52 1.14-1.31 1.14-2.37 0-1.03-.33-1.79-.98-2.27-.65-.48-1.69-.72-3.1-.72h-1.68v6.14zm0 7.67h-2.25V23.06h4.48c1.86 0 3.28.44 4.26 1.33.98.89 1.47 2.16 1.47 3.84 0 1.3-.41 2.39-1.23 3.26-.82.87-1.88 1.34-3.17 1.41l4.4 6.13h-2.81l-5.14-7.41v7.39z"/><path class="st0" d="M191.25 39.01V23.06h7.64v2.12h-5.41v4.77h5.41v2.08h-5.41v6.98zM209.15 39.01h-8.06V23.06h8.06v2.12h-5.81v4.77h5.81v2.08h-5.81v4.78h5.81z"/><defs><path id="SVGID_3_" d="M0 0h265.15v81H0z"/></defs><clipPath id="SVGID_4_"><use xlink:href="#SVGID_3_" overflow="visible"/></clipPath><path class="st2" d="M213.92 31.34h1.15c1.55 0 2.71-.26 3.47-.78.76-.52 1.14-1.31 1.14-2.37 0-1.03-.33-1.79-.98-2.27-.65-.48-1.69-.72-3.1-.72h-1.68v6.14zm0 7.67h-2.25V23.06h4.48c1.86 0 3.28.44 4.26 1.33.98.89 1.47 2.16 1.47 3.84 0 1.3-.41 2.39-1.23 3.26-.82.87-1.88 1.34-3.17 1.41l4.4 6.13h-2.81l-5.14-7.41v7.39z"/><path class="st0" d="M244.2 32.12l.1-6.06-4.51 6.06h4.41zm-6.06 2.25l-3.5 4.65h-2.38l12.09-15.96h2.18l.03 15.96h-2.46l.05-4.65h-6.01z"/><defs><path id="SVGID_5_" d="M0 0h265.15v81H0z"/></defs><clipPath id="SVGID_6_"><use xlink:href="#SVGID_5_" overflow="visible"/></clipPath><path class="st3" d="M255.26 30.96h9.89c-.11 2.49-.92 4.51-2.43 6.05-1.51 1.54-3.42 2.32-5.73 2.32-1.2 0-2.31-.23-3.32-.69-1.01-.46-1.92-1.14-2.73-2.05-.68-.75-1.2-1.61-1.55-2.57-.35-.96-.53-1.99-.53-3.08 0-1.12.21-2.18.64-3.18.42-1 1.05-1.9 1.87-2.71a7.67 7.67 0 0 1 2.6-1.74c.96-.39 2.02-.58 3.2-.58 1.62 0 3.03.38 4.25 1.13 1.22.76 2.14 1.83 2.76 3.23h-2.85a5.124 5.124 0 0 0-1.89-1.53c-.73-.34-1.55-.52-2.45-.52-.75 0-1.47.14-2.15.43-.68.28-1.29.7-1.81 1.24-.55.57-.98 1.22-1.29 1.96-.31.74-.46 1.5-.46 2.28 0 .83.14 1.62.41 2.36.28.74.68 1.38 1.2 1.92.55.57 1.18 1.01 1.9 1.33.72.31 1.45.47 2.19.47 1.22 0 2.29-.32 3.22-.97.93-.65 1.69-1.6 2.29-2.87h-7.24v-2.23z"/><path class="st0" d="M139.84 32.12l.01-6.06-4.53 6.06h4.52zm-6.17 2.25l-3.52 4.65h-2.38l12.14-15.96h2.15l.02 15.96h-2.24l-.01-4.65h-6.16zM130.83 62.55h-2.98l11.16-15.96h2.38l-.01 10.49 7.22-10.49h2.44v15.96h-2.25V50.72l-8.27 11.83h-1.38l-.01-11.83zM161.43 62.55h-8.05V46.59h8.05v2.13h-5.8v4.76h5.8v2.08h-5.8v4.78h5.8zM168.15 62.55h-2.25V48.74H163v-2.15h8.04v2.15h-2.89zM179.81 55.66l-2.18-6.06-2.23 6.06h4.41zm-5.21 2.24l-1.75 4.65h-2.38l6.06-15.96h2.19l6.06 15.96h-2.46l-1.7-4.65h-6.02zM193.56 62.55h-7.33V46.59h2.25v13.75h5.08zM203.08 62.55h-7.33V46.59h2.24v13.75h5.09z"/><g><defs><path id="SVGID_7_" d="M0 0h265.15v81H0z"/></defs><clipPath id="SVGID_8_"><use xlink:href="#SVGID_7_" overflow="visible"/></clipPath><path class="st4" d="M207.75 53.28h.71c1.16 0 1.99-.18 2.48-.54.49-.37.74-.96.74-1.79 0-.74-.23-1.28-.67-1.64-.45-.36-1.13-.53-2.05-.53h-1.2v4.5zm-.03 7.11h1.77c1.04 0 1.8-.2 2.29-.6.49-.4.74-1.01.74-1.85 0-.9-.26-1.59-.77-2.06s-1.27-.7-2.26-.7h-1.77v5.21zm1.13-13.8c1.65 0 2.91.37 3.77 1.12.86.74 1.29 1.83 1.29 3.25 0 .66-.14 1.24-.42 1.74-.28.5-.69.92-1.23 1.25.76.23 1.36.68 1.8 1.35s.66 1.46.66 2.38c0 .74-.14 1.44-.4 2.1-.27.65-.64 1.2-1.12 1.63-.47.41-1 .7-1.59.88-.59.18-1.43.26-2.51.26h-3.58V46.59h3.33z"/></g><path class="st0" d="M224.51 55.66l-2.18-6.06-2.23 6.06h4.41zm-5.21 2.24l-1.74 4.65h-2.38l6.06-15.96h2.18l6.06 15.96h-2.46l-1.7-4.65h-6.02z"/><g><defs><path id="SVGID_9_" d="M0 0h265.15v81H0z"/></defs><clipPath id="SVGID_10_"><use xlink:href="#SVGID_9_" overflow="visible"/></clipPath><path class="st5" d="M230.99 46.59h2.25v10.15c0 1.45.21 2.45.63 3.01.42.57 1.13.84 2.14.84.96 0 1.64-.29 2.03-.86.4-.57.6-1.57.6-3V46.59h2.25v10.13c0 1.08-.06 1.91-.18 2.49-.12.57-.31 1.08-.58 1.5-.47.73-1.04 1.27-1.71 1.63-.67.36-1.46.53-2.37.53-1 0-1.83-.17-2.51-.52-.68-.34-1.27-.88-1.77-1.62-.28-.42-.48-.9-.6-1.42-.12-.53-.18-1.39-.18-2.58V46.59z"/></g></svg>
      </a>
      <nav class="site-nav js-menu">
	  	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$array3 = array (
);return $renderingContext->getVariableProvider()->getByPath('menuMain', $array3);
};
$arguments1 = array();
$arguments1['value'] = NULL;

$output0 .= isset($arguments1['value']) ? $arguments1['value'] : $renderChildrenClosure2();

$output0 .= '	
        <div class="nav-icons">
          <a href="mailto:info@altorfer-ag.ch" target="_blank" class="icon-mail"></a>
          <a href="tel:+41523550505" target="_blank" class="icon-phone"></a>
        </div>
      </nav>
    </div>
</header>';

return $output0;
}


}
#