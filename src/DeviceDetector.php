<?php

namespace Visernic\DeviceDetector;

use DeviceDetector\DeviceDetector as BaseDetector;

class DeviceDetector
{
    protected BaseDetector $detector;

    public function __construct()
    {
        $this->detector = new BaseDetector();
    }

    public function detect(string $userAgent, array $server = []): BaseDetector
    {
        $this->detector->setUserAgent($userAgent);
        $this->detector->setServer($server);
        $this->detector->parse();

        return $this->detector;
    }

    public function detectRequest(\Illuminate\Http\Request $request): BaseDetector
    {
        return $this->detect(
            $request->header('User-Agent', ''),
            $request->server()
        );
    }
}
