<?php

namespace HanchanDev\PhpNativeMvcTemplate\Middleware;

interface Middleware {
    function before(): void;
}