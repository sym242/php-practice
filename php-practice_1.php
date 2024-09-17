<?php
// Q1 変数と文字列
$name = '齋藤';
$message = '私の名前は「' . $name . '」です';
var_dump($message);
echo "$message";

// Q2 四則演算
$num = 5 * 4;
$surplus = $num / 2;
var_dump($num);
var_dump($surplus);
echo "$num\n";
echo "$surplus";

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$today = date("Y年m月d日 H時i分s秒");
$message = '現在時刻は、' . $today . 'です。';
var_dump($message);
echo "$message";

// Q4 条件分岐-1 if文
$device = 'windows';
if($device === 'windows' || $device === 'mac') {
    $message = '使用OSは、' . $device . 'です。';
} else {
    $message = 'どちらでもありません。';
}
var_dump($message);
echo $message;

// Q5 条件分岐-2 三項演算子
$age = '18';
$message = ($age >= 18) ? '成人です。' : '未成年です。';
var_dump($message);
echo $message;

// Q6 配列
$prefecture = ['東京都','神奈川県','栃木県','千葉県',
'埼玉県','群馬県','茨城県'];
echo $prefecture[2] . 'と' . $prefecture[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$prefecture = ['東京都' => '新宿区','神奈川県' => '横浜市',
'千葉県' => '千葉市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市',
'群馬県' => '前橋市','茨城県' => '水戸市'];
foreach($prefecture as $prefecture_detail => $city) {
    echo "$city\n";
}

// Q8 連想配列-2
$prefecture = ['東京都' => '新宿区','神奈川県' => '横浜市',
'千葉県' => '千葉市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市',
'群馬県' => '前橋市','茨城県' => '水戸市'];
foreach($prefecture as $prefecture_detail => $city) {
    if($prefecture_detail=== '埼玉県' && $city === 'さいたま市') {
        echo "$prefecture_detail" . 'の県庁所在地は、' . "$city" . 'です';
    }
}

// Q9 連想配列-3
//愛知、大阪をどうやって弾くか
$prefecture = ['東京都' => '新宿区','神奈川県' => '横浜市',
'千葉県' => '千葉市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市',
'群馬県' => '前橋市','茨城県' => '水戸市'];
$prefecture['愛知県'] = '名古屋市'; 
$prefecture['大阪府'] = '大阪市'; 
$prefecture_not_kanto = ['愛知県','大阪府'];

foreach($prefecture as $prefecture_detail => $city) {
    if(in_array($prefecture_detail,$prefecture_not_kanto) ){ 
           echo "$prefecture_detail" . "は関東地方ではありません。\n"; 
    }
    else{
        echo "$prefecture_detail" . 'の県庁所在地は' . "$city" . "です\n";
    }
}

// Q10 関数-1
function hello($name) {
    return $name . "さん、こんにちは。\n";
}
echo hello('佐藤');
echo hello('鈴木');


// Q11 関数-2
//1000を入力しても先に計算されるから1100円が出てくる
function calcTaxInPrice($price) {
    $taxInPrice = $price * 1.1;
    return $taxInPrice;
}

$price = 1000;
echo $price . '円の商品の税込価格は' . calcTaxInPrice($price) . '円です。';


// Q12 関数とif文
function distinguishNum ($num){
    if($num % 2 == 0){
        return "$num" . 'は偶数です。';
    }
    else{
        return "$num" . 'は奇数です。';
    }
}
echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($grades){
    switch($grades){
        case "A" :
        case "B" :
            return "合格です。\n";
        case "C" :
            return "合格ですが追加課題があります。\n";
        case "D" :
            return "不合格です。\n";
        default :
            return "判定不明です。講師に問い合わせてください。\n";
    }
}
echo evaluateGrade("A");
echo evaluateGrade("C");
?>