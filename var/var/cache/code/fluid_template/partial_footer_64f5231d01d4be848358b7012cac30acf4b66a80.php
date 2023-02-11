<?php

class partial_footer_64f5231d01d4be848358b7012cac30acf4b66a80 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return '<footer class="site-footer">
  <div>
    <div class="footer-items">
      <div class="footer-item-address">
        <div>
          <a href="https://goo.gl/maps/M3pwaT8PTubgMfTz9" target="_blank"><strong>Altorfer AG Metallbau</strong><br>Pfäffikonerstrasse 50<br>8307 Effretikon</a><br><br>Tel. 052 355 05 05<br>
          <a href="mailto:info@altorfer-ag.ch">info@altorfer-ag.ch</a>
        </div>
      </div>
      <div class="footer-item-logos">
        <a href="https://www.metaltecsuisse.ch" target="_blank" rel="noopener">
          <img src="/fileadmin/assets/img/logo-metaltec-zuerich-schaffhausen.png" width="326" height="208" alt="Metaltec Zürich/Schaffhausen">
        </a>
        <a href="https://www.metaltecsuisse.ch/de/technik/brandschutz/" target="_blank" rel="noopener">
          <img src="/fileadmin/assets/img/logo-brandschutz-geschult.png" width="415" height="581" alt="Brandschutz geschult">
        </a>
        <a href="https://www.metaltecsuisse.ch/de/news-details/article/brandschutznorm-sn-en-16034/b/33/" target="_blank" rel="noopener">
          <img src="/fileadmin/assets/img/logo-en.png" width="264" height="177" alt="">
        </a>
        <a href="https://www.metall-und-du.ch" target="_blank" rel="noopener">
          <img src="/fileadmin/assets/img/logo-berufsbildungplus.ch.png" width="600" height="600" alt="Berufsbildungplus">
        </a>
      </div>
      <div class="footer-item-copy">
        <nav class="privacy">
          <a href="/impressum">Impressum</a>
          <a href="/datenschutz">Datenschutz</a>
          <a href="https://www.stoz.ch/" target="_blank" title="stoz.ch">design by stoz.ch</a>
        </nav>
      </div>
    </div>
  </div>
</footer>';
}


}
#