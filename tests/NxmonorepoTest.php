<?php
/**
 * Tests for NxMonorepo
 */

use PHPUnit\Framework\TestCase;
use Nxmonorepo\Nxmonorepo;

class NxmonorepoTest extends TestCase {
    private Nxmonorepo $instance;

    protected function setUp(): void {
        $this->instance = new Nxmonorepo(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nxmonorepo::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
