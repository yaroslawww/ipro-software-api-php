<?php

namespace Angecode\IproSoftware\Tests\Unit\AccessToken;

use Angecode\IproSoftware\AccessToken\NoneCacher;
use Angecode\IproSoftware\Contracts\AccessToken;
use Angecode\IproSoftware\Contracts\AccessTokenCacher;
use Angecode\IproSoftware\Tests\TestCase;

class NoneCacherTest extends TestCase
{
    /** @var AccessTokenCacher */
    protected $cacher;

    protected function setUp(): void
    {
        parent::setUp();

        $this->cacher = new NoneCacher();
    }

    public function testPut()
    {
        $result = $this->cacher->put(\Mockery::mock(AccessToken::class));

        $this->assertTrue($result);
    }

    public function testGet()
    {
        $result = $this->cacher->put(\Mockery::mock(AccessToken::class));
        $this->assertTrue($result);
        $this->assertNull($this->cacher->get());
    }
}
