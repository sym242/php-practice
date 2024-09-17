<?php
// Q1 tic-tac問題
for ($i=1; $i<=100; $i++){
    switch ($i){
        case ($i % 4 == 0 && $i % 5 == 0) :
            echo "tic-tac\n";
            break;
        case ($i % 4 == 0) :
            echo "tic\n";
            break;
        case ($i % 5 == 0) :
            echo "tac\n";
            break;
        default :
            echo "$i\n";
            break;
    }
}

// Q2 多次元連想配列
問題1
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222',
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444',
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666',
    ],
];
echo $personalInfos[1]['name'] . 'さんの電話番号は' . $personalInfos[1]['tel'] . 'です。';

問題2

foreach ($personalInfos as $key => $person) {
    $key++;
    var_dump($key);
    echo $key . '番目の' . ($person['name']) . 'のメールアドレスは' . ($person['mail']) . '電話番号は' . ($person['tel']) . "です\n";
}

問題3
$ageList = [25, 30, 18];
foreach($personalInfos as $key => &$person){
    $person['age'] = $ageList[$key];
}
unset($person);
var_dump($personalInfos);


foreach($ageList as $index => $age){
    $personalInfos[$index]['age'] = $age;
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student('150','山田');

echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';
// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($attend_detail)
    {
        echo $this->studentName . 'は'. $attend_detail . 'の授業に出席しました。';
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1
$date = new DateTime('2021-03-02');
$date->sub(new DateInterval('P0Y1M0D'));
echo $date->format('Y-m-d');

//問題2
$now = new DateTime();
$prev = new DateTime('1992-4-25');
echo 'あの日から' . $prev->diff($now)->format('%a') . '日経過しました。';

$date1 = new DateTime('2021-03-02');
$date2 = new DateTime('1992-04-25');
$diff = $date1 -> $diff($date2);
echo $diff -> $days;

?>