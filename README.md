# 飲食店予約サービス　Rese(リーズ)
飲食店の予約を簡潔に行うことのできるサービスです。

## 概要
予約機能は、会員登録をしていただくだけで可能になります。この他、気のなる店舗をお気に入り登録することもできます。また、予約、お気に入り登録をした店舗はマイページにて確認、日時等の変更、または取り消しもできるようになっております。  
レビュー機能も使用可能となり、予約する際に参考にしやすい仕様になっております。  
店舗の代表者は、店舗の新規登録や店舗の情報の変更、店舗ごとに予約の確認をすることができる仕様になっています。代表者は、まず会員登録していただき、管理者が代表者に設定する仕様となっております。  
予約当日には、リマインダー機能で予約確認メールを送信する仕様となっており、メールには来店時に予約確認用のQRコードを載せており、店舗側がスムーズにご案内できるようになっております。


## 機能一覧
全ユーザー共通  
・ユーザー新規登録機能  
・ログイン機能  
利用者用機能  
・予約機能  
・お気に入り登録機能  
・マイページにて予約・お気に入り店舗確認、変更、取り消し  
代表者用機能  
・新規店舗登録機能  
・店舗情報変更機能  
・店舗別予約確認機能  
管理者用機能  
・代表者選択機能  
・利用者にメール送信


## 使用技術
nginx:1.21.1  
mysql:8.0.26   
php:7.4.9   
laravel 8.83.27

## 環境構築
1.git cloneを作成する  
git clone git@github.com:tanakayosiki/Rese.git  
2.ファイルに移動  
cd Rese  
3.dockerを構築する  
$ docker-compose up -d --build
$ code .  
4.laravelパッケージをインストール  
$ docker-compose exec php bash  
$ composer install  
5..env ファイルの作成  
$ cp .env.example .env
$ exit  
.envファイル内
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass  
6.ユーザー登録後、管理者に設定  
<img width="789" alt="スクリーンショット 2024-01-08 20 50 36" src="https://github.com/tanakayosiki/Rese/assets/135409428/feed033c-14cc-421a-8b26-6a7fd319bc62">
上記の画像の左上のサイトのタイトルであるReseの横にある四角のアイコンをクリックすると  
<img width="777" alt="スクリーンショット 2024-01-08 21 01 02" src="https://github.com/tanakayosiki/Rese/assets/135409428/3e7b1f1b-4613-484d-b7bc-fa661d39cbb2">
が表示されるので、Registrationをクリックしていただくと会員登録画面に移りますので、登録を登録をお願いいたします。
その後、http://localhost:8080/  
に入り、role_userをクリックすると、以下の画像のように表示されるので  
<img width="815" alt="スクリーンショット 2024-01-08 21 18 24" src="https://github.com/tanakayosiki/Rese/assets/135409428/6100862f-8d36-4533-a94e-140a73a42b78">
role_idの3をダブルクリックしてください。以下の画像のように表示されますので、1のadminをクリックしていただくと管理者の設定完了です。  
<img width="815" alt="スクリーンショット 2024-01-08 21 22 52" src="https://github.com/tanakayosiki/Rese/assets/135409428/5ea9f4c7-6927-437a-b1db-e72fbe7d0762">

## ER図
<img width="672" alt="スクリーンショット 2024-01-07 16 36 42" src="https://github.com/tanakayosiki/Rese/assets/135409428/60553d9d-4c1d-402a-a904-079c01587d53">
