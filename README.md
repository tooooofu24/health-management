## 健康管理アプリケーション
東京の中学校で行っている毎日の健康チェックを、WEBで管理できるようにしたものです。  
1. 生徒がGoogleFormで当日の健康状態（体温など）を回答。
2. 回答時にAPIでDBに保存。
3. 教員と保護者・生徒が回答をWEB画面で確認できる。

## 作成経緯
中学校教員をやっている先輩に「GoogleFormの回答を教員が見やすいようにまとめてほしい」とお願いされたことがきっかけでした。当初は表示だけとのことだったのでGASを使って表示をしていました。しかし、実際に使われていくにあたって「生徒の回答を承認できるようにしたい」「保護者や生徒も閲覧できるようにしたい」などの要望が増えていき、認証機能やDBが使えるLaravelでリプレイスすることにしました。

## ページ(下記のリンクにはダミーのデータが入っています)
- [トップページ](https://health-management-sample.ms2n-xxx.com/)
![image](https://user-images.githubusercontent.com/64852221/154853483-91ced646-1cd9-4e06-bff5-ec7d2ccc86f7.png)
- [教職員用管理画面](https://health-management-sample.ms2n-xxx.com/admin/classes/1)
![image](https://user-images.githubusercontent.com/64852221/154853890-1dadadce-7e05-4c29-809a-73f17ba80e99.png)
[保護者・生徒用マイページ](https://health-management-sample.ms2n-xxx.com/mypage) ※一度ログアウトが必要です
![image](https://user-images.githubusercontent.com/64852221/154853946-8376e352-2370-4827-9362-2fe020133a66.png)

## 工夫した点
>**マルチログイン機能**  

[教職員ログイン](https://health-management-sample.ms2n-xxx.com/admin/login)と[保護者・生徒ログイン](https://health-management-sample.ms2n-xxx.com/login)の二つの認証機能を実装しています。生徒のプライバシー保護の観点から、生徒・保護者ログインでは自分のデータしか閲覧できないようになっています。また、今後の拡張性も考え、認証ごとにテーブルを分けて管理しています。

>**認証機能の非同期化**  

[教職員用管理画面](https://health-management-sample.ms2n-xxx.com/admin/classes/1)での承認機能を非同期にしました。先輩から「承認は簡単にできるようにして欲しい」との声があったので、ページのリロードを挟まずに承認できるようにしています。

## 使用技術
- Laravel 8.81.0
- Vue.js 3.x
- Bootstrap
- [ConoHaのVPS(Apache、MySQL)](https://www.conoha.jp/vps/?btn_id=top--mainvisual_vps-top)
