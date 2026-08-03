<?php
/**
 * Tests for ChainGrid
 */

use PHPUnit\Framework\TestCase;
use Chaingrid\Chaingrid;

class ChaingridTest extends TestCase {
    private Chaingrid $instance;

    protected function setUp(): void {
        $this->instance = new Chaingrid(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chaingrid::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
