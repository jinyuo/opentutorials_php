<?php
//1
echo preg_replace_callback('~-([a-z])~', function($match){
  //문자열 대문자$
  return strtoupper($match[1]);
},"hello-world<br/>\n");

//2
$greet= function ($name){
  printf("Hello %s\r<br/>\n", $name);
};

$greet("World");
$greet("PHP");

//3
//익명 함수에 사용되는 변수는 함수 정의 전에 정의되어 있어야 한다.
$message = 'hello';
$example = function() use (&$message){
  var_dump($message);
};


echo $example().'<br/>';

$message = 'world';
echo $example() ."<br/>";

$example = function ($arg) use ($message){
  var_dump($arg . ' ' .$message);
};

$example('hello');
print '<br/>';
//4

class Cart{
  const PRICE_BUTTER = 1.00;
  const PRICE_MILK = 3.00;
  const PRICE_EGGS = 6.95;

  protected $products = array();

  public function add($product, $quantity){
    $this -> products[$product] = $quantity;
  }

  public function getQuantity($product){
    return isset($this->products[$product])? $this->products[$product] : FALSE;
  }

  public function getTotal($tax){
    $total = 0.00;

    $callback = function ($quantity, $product) use ($tax, &$total){
      //클래스 내 선언된 상수값 가져옴
      $pricePerItem = constant(__CLASS__. "::PRICE_" . strtoupper($product));
      $total += ($pricePerItem * $quantity)*($tax + 1.0);
    };

    array_walk($this->products, $callback);
    return round($total, 2);
  }
}

$my_cart = new Cart;
$my_cart->add('butter', 1);
$my_cart->add('milk', 3);
$my_cart->add('eggs', 6);
var_dump($my_cart);
print $my_cart->getTotal(0.05). "<br/>\n";

?>
