<!DOCTYPE html>
<html>
    <u>
        <h1 class = "title">&nbsp;&nbsp;エラーページ&nbsp;&nbsp;</h1>
    </u>
    <style>
        .title {
            color: black; 
            margin: 20px; 
            text-align: center;
        }
        .error {
            font-size: 20px;
        }
        .button {
            font-size: large;
            margin: 10px;
        }
    </style>
    <script type = "text/javascript">
        function yes(id) {
            localStorage.setItem("login", id);
        }
        function button1() {
            location.href = "https://localhost/new/ログイン.html";
        }
    </script>
            <?php 
        function back() {
            echo "<button class = 'button' onClick = 'button1();'>&nbsp;ログイン画面に戻る&nbsp;</button>";
            exit;
        }
        $open = "data.txt";
        $dataFile = file_get_contents($open); //ファイルの中身取得
        $id = "!*)@{$_POST["id"]}(*!"; //!*)@id(*!
        if (!(file_exists($open))) {
            echo "<div class = 'error'>ファイルの読み込みに失敗しました。</div>";
            back();
        }
        if ($_POST["id"] == "" || $_POST["id"] == null) {
            echo "<div class = 'error'>ユーザーIDの受け取りに失敗しました。</div>";
            back();
        }
        if (!(ctype_alnum($_POST["id"]))) {
            echo "<div class = 'error'>英数字以外の文字を検知しました。</div>";
            back();
        }
        if (20 <= strlen($_POST["id"])) {
            echo "<div class = 'error'>ユーザーIDが長すぎます。英数字20文字, 又は日本語10文字の20Byte未満にしてください。</div>";
            back();
        }
        if ($_POST["new"] == "新規登録") { 
            if (!(strpos($dataFile, $id) === false)) {
                echo "<div class = 'error'>既にIDは登録されています。IDを変更して試してください。</div>";
                back();
            } else {
                $fp = fopen($open, 'a');// ファイルを開く（'a'は追記モード）
                fputs($fp, $id);// ファイルに書き込む
                fclose($fp);// ファイルを閉じる
                echo '
                <script type = "text/javascript">
                yes('.$_POST["id"].');
                </script>';
            }
        }
        if ($_POST["new"] == "ログイン") {
            if (!(strpos($dataFile, $id) === false)) {
                echo '
                    <script type = "text/javascript">
                    yes('.$_POST["id"].');
                    </script>';
            } else {
                echo "<div class = 'error'>IDは登録されていません。IDを確認してください。</div>";
            }
        }
        if ($_POST["new"] == "垢削除") {
            if (strpos($dataFile, $id) === false) {
                echo "<div class = 'error'>IDは登録されていません。</div>";
                back();
            } else {
                echo "実行するよ";
                $s1 = stripos($dataFile, $id);
                $d2 = mb_substr($dataFile, 0, $s1, "utf-8");
                $d6 = mb_substr($dataFile, $s1, null, "utf-8");
                $s2 = stripos($d6, "(*!");
                $d4 = mb_substr($d6, ($s2 + 3), null, "utf-8");
                $delete = $d2.$d4;
                $fp = fopen($open, "w");// ファイルを開く（'a'は追記モード）
                fputs($fp, $delete);// ファイルに書き込む
                fclose($fp);// ファイルを閉じる
                echo "完了";
                back();
            }
        }
        echo '
        <script type="text/javascript">
        alert("任務が正常に実行されました。");
        button1();
        </script>'
        ?>
</html>
