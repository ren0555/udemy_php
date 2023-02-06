<!DOCTYPE>
<html lang="ja">
    <head>
        <title>アカウント登録確認画面</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <header>ナビゲーションバー</header>
        
        <main>
            <div class="confirm">
                <div class="contents">名前（姓）
                    <div class="insert">
                        <?php echo$_POST['name1'];?>
                    </div>
                </div>
                
                <div class="contents">名前（名）
                    <div class="insert">
                        <?php echo$_POST['name2'];?>
                    </div>
                </div>
                
                <div class="contents">カナ（姓）
                    <div class="insert">
                        <?php echo$_POST['name3'];?>
                    </div>
                </div>
                
                <div class="contents">カナ（名）
                    <div class="insert">
                        <?php echo$_POST['name4'];?>
                    </div>
                </div>
                
                <div class="contents">メールアドレス
                    <div class="insert">
                        <?php echo$_POST['mail'];?>
                    </div>
                </div>
                
                <div class="contents">パスワード
                    <div class="insert">
                        <?php echo$_POST['password'];?>
                    </div>
                </div>
                
                <div class="contents">性別
                    <div class="insert">
                        <?php echo$_POST['seibetu'];?>
                    </div>
                </div>
                
                <div class="contents">郵便番号
                    <div class="insert">
                        <?php echo$_POST['yubin'];?>
                    </div>
                </div>
                
                <div class="contents">住所（都道府県）
                    <div class="insert">
                        <?php echo$_POST['prefecture'];?>
                    </div>
                </div>
                
                <div class="contents">住所（市区町村）
                    <div class="insert">
                        <?php echo$_POST['sikutyouson'];?>
                    </div>
                </div>
                
                <div class="contents">住所（番地）
                    <div class="insert">
                        <?php echo$_POST['banti'];?>
                    </div>
                </div>
                
                <div class="contents">アカウント権限
                    <div class="insert">
                        <?php echo$_POST['kengen'];?>
                    </div>
                </div>
            </div>
            <div class="from">
                <form action="regist.php">
                    <input type="submit" value="前に戻る" class="buttun1">
                </form>
                <form action="regist_complete.php" method="post" class="buttun2">
                    <input type="button" value="登録する">
                    <input type="hidden" value="<?php echo$_POST['name1'];?>" name="name1">
                    <input type="hidden" value="<?php echo$_POST['name2'];?>" name="'name2">
                    <input type="hidden" value="<?php echo$_POST['name3'];?>" name="name3">
                    <input type="hidden" value="<?php echo$_POST['name4'];?>" name="name4">
                    <input type="hidden" value="<?php echo$_POST['mail'];?>" name="mail">
                    <input type="hidden" value="<?php echo$_POST['seibetu'];?>" name="seibetu">
                    <input type="hidden" value="<?php echo$_POST['yubin'];?>" name="yubin">
                    <input type="hidden" value="<?php echo$_POST['prefecture'];?>" name="prefecture">
                    <input type="hidden" value="<?php echo$_POST['sikutyouson'];?>" name="sikutyouson">
                    <input type="hidden" value="<?php echo$_POST['banti'];?>" name="banti">
                    <input type="hidden" value="<?php echo$_POST['kengen'];?>" name="kengen">
                </form>
            </div>
            
        </main>
        <footer>フッター</footer>
    </body>
</html>