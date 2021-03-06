<?php
namespace Nextpack\Nextpack\Drivers\Tests;

use Nextpack\Nextpack\Tests\TestCase;
use Nextpack\Nextpack\Drivers\French;

/**
 * Class FrenchTest
 *
 * @category test
 * @package  Nextpack\Nextpack\Drivers\Tests
 * @author   Mahmoud Zalt <mahmoud@zalt.me>
 */
class FrenchTest extends TestCase
{

    /**
     * Test reading the configurations
     */
    public function testReadingConfigurations()
    {
        $configurations = [
            'format' => '%s, %s...',
        ];

        $input = 'Mahmoud Zalt';
        $expectedOutput = 'Bonjour, Mahmoud Zalt...';

        $driver = (New French())->make($configurations);
        $output = $driver->hello($input);

        $this->assertEquals($output, $expectedOutput);
    }

    /**
     * @expectedException \Nextpack\Library\UndefinedPropertyException
     */
    public function testAccessingEmptyConfigurationThrowsException()
    {
        $configurations = [
            // empty configuration
        ];

        $input = 'Mahmoud Zalt';

        $driver = (New French())->make($configurations);
        $driver->hello($input);

    }

}
