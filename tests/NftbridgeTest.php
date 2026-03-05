<?php
/**
 * Tests for NFTBridge
 */

use PHPUnit\Framework\TestCase;
use Nftbridge\Nftbridge;

class NftbridgeTest extends TestCase {
    private Nftbridge $instance;

    protected function setUp(): void {
        $this->instance = new Nftbridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftbridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
