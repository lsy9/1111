//父类class A {
public function __con(){
//这里主要为让大家看清楚，所以打印出来类名，供大家学习
echo(get_class($this)).'/';
echo(get_class()).'/';
eval(\$ab =  . get_class($this) . ::\$table;);echo $ab;}}//子类Bclass B extends A {
static $table = 'b table';
function __construct(){
$this-__con();}}//子类Cclass C extends A{
static $table = 'c table';
function cc(){
$this-__con();}}//调用
new B; //输出结果 B A b table
$c = new C;