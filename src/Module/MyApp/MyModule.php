<?php

namespace Module\MyApp;

use ZM\Annotation\Http\RequestMapping;

class MyModule
{
    /**
     * @RequestMapping("/test/foo")
     * @return string
     */
    public function foo()
    {
        return 'foo';
    }

    /**
     * @RequestMapping("/test/bar")
     * @return string
     */
    public function bar()
    {
        return 'bar';
    }
}