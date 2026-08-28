<?php
/**
 * Tests for ThriveApex
 */

use PHPUnit\Framework\TestCase;
use Thriveapex\Thriveapex;

class ThriveapexTest extends TestCase {
    private Thriveapex $instance;

    protected function setUp(): void {
        $this->instance = new Thriveapex(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Thriveapex::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
