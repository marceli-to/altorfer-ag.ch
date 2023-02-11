<?php
namespace JamonDigital\RteConfig\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Marcel Stadelmann <marcel@jamon.digital>
 */
class RteTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \JamonDigital\RteConfig\Domain\Model\Rte
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \JamonDigital\RteConfig\Domain\Model\Rte();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }
}
