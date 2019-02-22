<?php
/**
 * Created by PhpStorm.
 * User: RC <longwtg@163.com>
 * Date: 2019/2/22
 * Time: 17:40
 */

namespace tests;


class StackTest extends \PHPUnit\Framework\TestCase
{
    public function testPushAndPop()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
        // 故意写错试试
        $this->assertEquals(1, count($stack));
    }
}