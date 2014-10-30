mihon1
======
職業訓練にて約二週間で制作した物です。

｢products.php｣と｢product_kobetu.php｣にMySQLを使用しています。
管理IDとパスワードは初期状態で｢root｣｢admin｣になっています。
ご利用の環境に合わせて｢products.php｣と｢product_kobetu.php｣の該当箇所を書き換えて頂き、
｢the_stone.sql｣をインポートして頂くと御覧いただけます。

見どころは
レスポンシブデザインによる3種類のレイアウトの切替
breakpoints.jsによる画像の切替
読み込み時の｢WELCOME｣の表示
製品一覧(products.php)と製品詳細(product_kobetu.php)にデータベースを使用しそれぞれ単ページで対応しつつ製品追加の簡略化(一覧は実際に数千件と増やす場合改ページが必要かと思いますがここではオミットしています)

｢WELCOLME｣表示はCSS3アニメーションとjQueryフェードアウトを使用していますがJavaScript非対応環境を考慮し最初は非表示(トップページを表示)、読み込みと同時に表示開始、時間経過かSKIPボタンまたはエンターキー押下でトップページを表示するようになっています。
