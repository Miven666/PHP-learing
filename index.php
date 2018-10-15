<?php
/**
 * Created by PhpStorm.
 * User: mingzhi.xie
 * Date: 2018/10/7
 * Time: 10:50
 */
echo '两个基本的输出方式：', '<br>';
print 'echo 或者 print<br>';

/**
 * 变量
 */
function test() {
    static $x = 0;
    print $x;
    $x++;
}
test();
test();
test();
test();
echo '<br>';

/**
 * echo 和 print 语句
 */
$people = array('剑圣', '小鱼人', '敌法师');
echo "我选择的英雄是 {$people[1]}<br>";
print "我选择的英雄是 {$people[1]}<br>";

/**
 * EOF(heredoc) 使用说明
 */
$name = 'mingzhi.xie';
$a = <<<text
    <pre>"双引号"
    "\\r回车加换行"\r
    '\\t是回车'\t
    '\\n回车加换行'\n
    $name
    '单引号&nbsp;1'</pre>
    <br>
text;
echo $a;

/**
 * 数据类型
 */
$x = 2.1e3; // 浮点数
var_dump($x);
echo "<br>";
$x = -345; // 负数
var_dump($x);
echo "<br>";
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
echo "<br>";
$x = 3E-2;
var_dump($x);
echo "<br>";
$cars = array("Volvo","BMW","Toyota");  // 数组
var_dump($cars);
echo "<br>";

class Car {  // 对象
    var $color;

    function setColor($color = "blue") {
        $this->color = $color;
    }

    function getColor() {
        return $this->color;
    }

}

$x="Hello world!";  // NULL值
$x=null;
var_dump($x);

/**
 * 常量
 */
// 大小写敏感
define("CONSTANT_UPPERCASE", "常量，默认常量大小写敏感,即默认为false", false);
echo CONSTANT_UPPERCASE;
echo '<br>';
// echo constant_uppercase;

define("constant_lowercase", "常量，设置大小写不敏感", true);
echo constant_lowercase;
echo "<br>";
echo CONSTANT_LOWERCASE;








