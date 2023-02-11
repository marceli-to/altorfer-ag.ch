<?php
namespace JamonDigital\RteConfig\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Marcel Stadelmann <marcel@jamon.digital>
 */
class RteControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \JamonDigital\RteConfig\Controller\RteController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\JamonDigital\RteConfig\Controller\RteController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllRtesFromRepositoryAndAssignsThemToView()
    {

        $allRtes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $rteRepository = $this->getMockBuilder(\JamonDigital\RteConfig\Domain\Repository\RteRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $rteRepository->expects(self::once())->method('findAll')->will(self::returnValue($allRtes));
        $this->inject($this->subject, 'rteRepository', $rteRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('rtes', $allRtes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
