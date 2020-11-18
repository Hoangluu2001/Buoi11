<?php
class Dancer {
    public $name ;
    public  $gender;

    /**
     * Dancer constructor.
     * @param $name
     * @param $gender
     */
    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
}
$queue1 = new SplQueue();
$queue2 = new SplQueue();

$nam1 = new Dancer('Luu','nam');
$nam2 = new Dancer('Thinh','nam');
$nam3 = new Dancer('Hung','nam');
$nam4 = new Dancer('Truong','nam');

$nu1 = new Dancer('Huyen','nu');
$nu2 = new Dancer('Lan Anh','nu');
$nu3 = new Dancer('Hang','nu');

$queue1->enqueue($nam1);
$queue1->enqueue($nam2);
$queue1->enqueue($nam3);
$queue1->enqueue($nam4);
$queue2->enqueue($nu1);
$queue2->enqueue($nu2);
$queue2->enqueue($nu3);

function Check ($queue1,$queue2){
    if ($queue1->count()==0 || $queue2->count()==0){
        echo 'vui long vào hàng đợi'.'<br>';
    } else {

        echo  $queue1->dequeue()->getName() ." solo vs " . $queue2->dequeue()->getName() .'<br>' ;
    }
}
function CountWait($queue1,$queue2){
    echo $queue1->count() + $queue2->count();
}
Check($queue1,$queue2);
Check($queue1,$queue2);
Check($queue1,$queue2);
Check($queue1,$queue2);
CountWait($queue1,$queue2);
