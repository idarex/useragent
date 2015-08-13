<?php

use Sail\Useragent;
use Sail\Parser\Simple;

class Sail_UserAgentTest extends PHPUnit_Framework_TestCase
{

    // ua obj
    protected $ua;

    protected $userAgent = [
        [
            'string' => "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.56 Safari/537.17",
            'os' => 'OS X 10.8.2 Mountain Lion',
            'platform' => 'Browser',
            'browser' => 'Chrome 24.0.1312.56',
            'version' => '24.0.1312.56',
        ],
        [
            'string' => "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_5; en-us) AppleWebKit/525.26.2 (KHTML, like Gecko) Version/3.2 Safari/525.26.12",
            'os' => 'OS X 10.5.5 Leopard',
            'platform' => 'Browser',
            'browser' => 'Safari 3.2',
            'version' => '3.2',
        ],
        [
            'string' => "Mozilla/5.0 (Linux; Android 4.3.1; LG-D802 Build/JLS36I) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.133 Mobile Safari/537.36",
            'os' => 'Linux (Other Linux)',
            'platform' => 'Mobile',
            'browser' => 'Chrome 44.0.2403.133',
            'version' => '44.0.2403.133',
        ],
        [
            'string' => "Mozilla/5.0 (iPhone; CPU iPhone OS 8_4 like Mac OS X) Appl  eWebKit/600.1.4 (KHTML, like Gecko) Mobile/12H143 MicroMessenger/6.2.4 NetType  /WIFI Language/zh_CN",
            'os' => 'iOS 8.4',
            'platform' => 'Mobile',
            'browser' => 'MicroMessenger 6.2.4',
            'version' => '6.2.4',
        ],
        [
            'string' => "Mozilla/5.0 (iPhone; CPU iPhone OS 8_4 like Mac OS X) Appl  eWebKit/600.1.4 (KHTML, like Gecko) Mobile/12H143 MicroMessenger/6.2.4 NetType  /WIFI Language/zh_CN",
            'os' => 'iOS 8.4',
            'platform' => 'Mobile',
            'browser' => 'MicroMessenger 6.2.4',
            'version' => '6.2.4',
        ],
        [
            'string' => "Mozilla/5.0 (Linux; U; Android 4.3.1; zh-cn; LG-D802 Build  /JLS36I) AppleWebKit/533.1 (KHTML, like Gecko)Version/4.0 MQQBrowser/5.4 TBS/0  25440 Mobile Safari/533.1 MicroMessenger/6.2.4.51_rdf8da56.582 NetType/WIFI La  nguage/zh_CN",
            'os' => 'Linux (Other Linux)',
            'platform' => 'Mobile',
            'browser' => 'MicroMessenger 6.2.4.51_rdf8da56.582',
            'version' => '6.2.4.51_rdf8da56.582',
        ],
    ];

    public function setup()
    {
        $this->ua = new Useragent();
        $this->ua->pushParser(new Simple());
    }

    public function testGetUA()
    {
        foreach ($this->userAgent as $ua) {
            $this->ua->setUA($ua['string']);
            $this->assertTrue($this->ua->getUA() == $ua['string']);
        }
    }

    public function testGetBrowser()
    {
        foreach ($this->userAgent as $ua) {
            $this->ua->setUA($ua['string']);
            $this->assertTrue($this->ua->getBrowser()['name'] == $ua['browser']);
        }
    }

    public function testGetBrowserVersion()
    {
        foreach ($this->userAgent as $ua) {
            $this->ua->setUA($ua['string']);
            $this->assertTrue($this->ua->getBrowser()['version'] == $ua['version']);
        }
    }

    public function testGetOS()
    {
        foreach ($this->userAgent as $ua) {
            $this->ua->setUA($ua['string']);
            $this->assertTrue($this->ua->getOS()['name'] == $ua['os']);
        }
    }

    public function testGetPlatform()
    {
        foreach ($this->userAgent as $ua) {
            $this->ua->setUA($ua['string']);
            $this->assertTrue($this->ua->getPlatform()['platform'] == $ua['platform']);
        }
    }
}
