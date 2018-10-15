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
echo "<br>";

/**
 * 字符串
 */
$txt = "字符串";
echo  $txt;
echo "<br>";
// 并置运算符(.)
$txt2 = "What a nice day";
echo  $txt."".$txt2;
echo "<br>";
// strlen()函数：返回字符串长度
echo strlen("Hello World!");
echo "<br>";
// strpos()函数：查找一个字符或一段指定的文本
echo strpos("Hello World!", "World");
echo "<br>";

/**
 * 运算符
 */
// 算术运算符
$x=10;
$y=6;
echo ($x + $y); // 输出16
echo '<br>';  // 换行
echo ($x - $y); // 输出4
echo '<br>';  // 换行
echo ($x * $y); // 输出60
echo '<br>';  // 换行
echo ($x / $y); // 输出1.6666666666667
echo '<br>';  // 换行
echo ($x % $y); // 输出4
echo '<br>';  // 换行
echo -$x;
echo '<br>';
// 整数运算符intdiv()
var_dump(intdiv(10,3));
// 赋值运算符
$a = "赋值";
$b = $a . "运算符";
echo $b;
echo "<br>";
$c = "简写";
$c .= "形式";
echo $c;
echo "<br>";
// 递增递减运算符
$d = 10;
echo ++$d;  // 输出11
echo "<br>";
$e = 10;
echo $e++;  // 输出10
echo "<br>";
// 比较运算符
$f = 100;
$g = "100";
var_dump($f != $g);     // false
var_dump($f !== $g);    // true
// 逻辑运算符
var_dump(true && false);
var_dump(true and false);   // and: 都为true，返回true, 我暂时理解为&&
var_dump(true xor true); // xor: 有且仅有一个为true，返回true
// 数组运算符
$h = array("a" => "red", "b" => "green");
$i = array("c" => "blue", "d" => "yellow");
$j = $h + $i;   // h 和 i 数组合并
var_dump($j);
var_dump($h == $i); // 相同的键值对
var_dump($h === $i);    //相同的键值对，且顺序、类型相同
// 三元运算符
// 普通写法
var_dump(true ? true : false);
// PHP 5.3+ 版本写法
var_dump(true ?: false);






