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
var_dump(true && false);    // 比and优先级高
var_dump(true and false);   // and: 都为true，返回true
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
// 组合比较符
echo 1 <=> 2; // -1
echo "<br>";
echo 1.2 <=> 2.4; // -1
echo "<br>";
echo "a" <=> "b"; // -1
echo "<br>";
echo "e" <=> "a"; // 1
echo "<br>";

/**
 * If...Else 语句
 */
// 如果当前时间小于 20，下面的实例将输出 "Have a good day!"
$t = date("H");
if ($t < 20) {
    echo "Have a good day!";
    echo "<br>";
}

/**
 * Switch 语句
 */
$color = "red";
switch ($color) {
    case "red":
        echo "我喜欢的是红色";
        echo "<br>";
        break;
    case "blue":
        echo "我喜欢的蓝色";
        break;
    default:
        echo "默认颜色";
}

/**
 * 数组
 */
// 数值数组，自动分配 ID 键（ID 键总是从 0 开始）
$list = array("list1", 2, 3.0);
echo "list[0] = " . $list[0] . ", " . "list[1] = " . $list[1] . ", " . "list[2] = " . $list[2] . ", 长度是：" . count($list);   // 获取数组的长度: count() 函数
echo "<br>";
// 遍历数值数组
for ($i = 0; $i < count($list); $i++) {
    echo $list[$i];
    echo "<br>";
}
// 关联数组
$map = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Map is " . $map["Joe"] . " years old!";
echo "<br>";
// 遍历关联数组
foreach ($map as $key => $value) {
    echo "Key = " . $key . ", Value = " . $value;
    echo "<br>";
}


/**
 * 数组排序
 */
// sort() - 对数组进行升序排列
$sort = array("sort3", "sort2", "sort1");
var_dump($sort);
echo "<br>";
sort($sort);
var_dump($sort);

// rsort() - 对数组进行降序排列
$rsort = array("rsort1", "rsort2", "rsort3");
var_dump($rsort);
echo "<br>";
rsort($rsort);
var_dump($rsort);

// asort() - 根据数组的值，对数组进行升序排列
$asort = array("asort1" => 3, "asort2" => 2, "asort3" => 1);
var_dump($asort);
echo "<br>";
asort($asort);
var_dump($asort);

// ksort() - 根据数组的键，对数组进行升序排列
$ksort = array("ksort3" => 1, "ksort2" => 2, "ksort1" => 3);
var_dump($ksort);
echo "<br>";
ksort($ksort);
var_dump($ksort);

// arsort() - 根据数组的值，对数组进行降序排列
$arsort = array("arsort1" => 1, "arsort2" => 2, "arsort3" => 3);
var_dump($arsort);
echo "<br>";
arsort($arsort);
var_dump($arsort);

// krsort() - 根据数组的键，对数组进行降序排列
$krsort = array("krsort1" => 1, "krsort2" => 2, "krsort3" => 3);
var_dump($krsort);
echo "<br>";
krsort($krsort);
var_dump($krsort);

/**
 * 超级全局变量
 */
// $GLOBALS 是PHP的一个超级全局变量组，在一个PHP脚本的全部作用域中都可以访问。
// $GLOBALS 是一个包含了全部变量的全局组合数组。变量的名字就是数组的键。
$x = 10;
$y = 20;
function addition() {
    $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
}
addition();
echo $GLOBALS["z"];
echo "<br>";

// $_SERVER 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。
// 这个数组中的项目由Web服务器创建。
echo "PHP_SELF ======> " . $_SERVER['PHP_SELF'];
echo "<br>";
echo "SERVER_NAME ======> " . $_SERVER['SERVER_NAME'];
echo "<br>";
echo "HTTP_HOST ======> " . $_SERVER['HTTP_HOST'];
echo "<br>";
echo "HTTP_USER_AGENT ======> " . $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "SCRIPT_NAME ======> " . $_SERVER['SCRIPT_NAME'];
echo "<br>";

// $_REQUEST 用于收集HTML表单提交的数据。
// $_POST 被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="post"。
// $_GET 同样被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="get"。也可以收集URL中发送的数据。

/**
 * While 循环
 */
// while 循环将重复执行代码块，直到指定的条件不成立
// do...while 语句会至少执行一次代码，然后检查条件，只要条件成立，就会重复进行循环。

/**
 * For 循环
 */
// for 循环用于您预先知道脚本需要运行的次数的情况
// foreach 循环用于遍历数组

/**
 * 函数
 */
// 内建函数。 在 PHP 中，提供了超过 1000 个内建的函数。
// 自定义函数。
// 添加参数。 为了给函数添加更多的功能，我们可以添加参数。参数类似变量。参数就在函数名称后面有一个括号内指定。
// 返回值。如需让函数返回一个值，请使用 return 语句。

/**
 * 魔术常量
 * 这些特殊的常量不区分大小写
 */
// __LINE__ 文件中的当前行号。
echo '这是第"' . __line__ . '"行';
echo "<br>";
// __FILE__ 文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名。
echo '该文件位于 "' . __file__ . '"';
echo "<br>";
// __DIR__  文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。
echo '该文件位于“' . __DIR__ . '"';
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";










