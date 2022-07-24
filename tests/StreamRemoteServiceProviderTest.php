<?php

namespace Calcifux\LaravelStreamRemote;

use Illuminate\Routing\ResponseFactory;
use PHPUnit\Framework\TestCase;

class StreamRemoteServiceProviderTest extends TestCase
{
    /** @test */
    public function it_registers_response_factory_macro()
    {
        $provider = new StreamRemoteServiceProvider(null);

        $this->assertFalse(ResponseFactory::hasMacro('streamRemoteDownload'));

        $provider->boot();

        $this->assertTrue(ResponseFactory::hasMacro('streamRemoteDownload'));
    }
}
