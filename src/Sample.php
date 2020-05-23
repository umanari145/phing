<?php

$sample = new Sample('sample');
$sample->showName();


/**
 * サンプルクラス
 */
class Sample
{

    /**
     * @var string 名前
     */
    private $name;

    /**
     * コンストラクタ
     * @param string $name 名前
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * 名前を表示
     */
    public function showName()
    {
        echo $this->name. "\n";
    }

    /**
     * 名前の表示
     * @return string 名前の表示
     */
    public function getName()
    {
        return $this->name;
    }
}
