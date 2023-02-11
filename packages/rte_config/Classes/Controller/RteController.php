<?php
namespace JamonDigital\RteConfig\Controller;

/***
 *
 * This file is part of the "RTE Configuration" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Marcel Stadelmann <marcel@jamon.digital>, Jam'on digital AG
 *
 ***/

/**
 * RteController
 */
class RteController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * rteRepository
     *
     * @var \JamonDigital\RteConfig\Domain\Repository\RteRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $rteRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $rtes = $this->rteRepository->findAll();
        $this->view->assign('rtes', $rtes);
    }
}
