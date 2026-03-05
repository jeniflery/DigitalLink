<?php
/**
 * Tests for DigitalLink
 */

use PHPUnit\Framework\TestCase;
use Digitallink\Digitallink;

class DigitallinkTest extends TestCase {
    private Digitallink $instance;

    protected function setUp(): void {
        $this->instance = new Digitallink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Digitallink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
