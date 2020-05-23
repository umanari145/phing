# phing

## ファイル構成

- src/ 実行ファイルディレクトリ
- tests/ テストファイルディレクトリ
- build_type1.xml phingの設定ファイル(グローバルにphpunit,phpdocなどがインストールされている時)
- build_type2.xml phingの設定ファイル(任意のコマンドなど)


## 各タスクに関して

- phpUnit phpのテストフレームワーク
- phpdocument Document作成フレームワーク
- php_codesniffer コードスタイルチェック(主に規約のチェックを行う)
- phpmd PHPの静的解析ツール(コードが大きすぎないか、使われていない変数名がないかなどのチェック)

PHP_CodeSnifferとPHPMDを使って自動的にコードを少しでも綺麗にする<br>
https://simple-it-life.com/2016/12/03/php-check/


## 実行パスに関して

ローカルのライブラリをグローバルに

```
ln -s /var/www/html/vendor/bin/phpdoc  /usr/bin/phpdoc
ln -s /var/www/html/vendor/bin/phing  /usr/bin/phing
ln -s /var/www/html/vendor/bin/phpunit  /usr/bin/phpunit
.....
```

build.xmlのプロパティで実行パスを代行
```
<phpunit pharlocation="./vendor/bin/phpunit">

```

## 実行コマンド

```
docker exec  phing_phing_1 phing -buildfile build_type1.xml
```

## 注意
- phing:2.*ではphpunit:3でないと自動で動かないためpharlocationパスが必須
