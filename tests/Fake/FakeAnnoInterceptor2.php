<?php
namespace Ray\Di;

use Ray\Aop\MethodInterceptor;
use Ray\Aop\MethodInvocation;

class FakeAnnoInterceptor2 implements MethodInterceptor
{
    public function invoke(MethodInvocation $invocation)
    {
        FakeAnnoClass::$order[] = __CLASS__;

        return $invocation->proceed();
    }
}
