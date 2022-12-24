<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta property="og:title" content="検温自動化サイト">
        <meta property="og:discription" content="Googleフォームの入力時間短縮、自動送信をすること等ができるツールです。">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://rento2177.github.io/RV2.html">
        <meta property="og:image" content="Vaa2.png">
        <meta property="og:site_name" content="検温自動化サイト">
        <meta property="og:locale" content="ja_JP">
        <title>GoogleForms自動入力ツール -Rento</title>
        <link rel="icon" href = "../Vaa2.png">
    </head>
    <body>
        <h1 class = "top">Google Forms</h1>
        <h1 class = "top-left">自動入力ツール</h1><br>
        <a class = "top" href = "https://google.com">&nbsp;&nbsp;お知らせ&nbsp;&nbsp;</a>
        <a class = "top" href = "https://google.com">&nbsp;&nbsp;利用規約&nbsp;&nbsp;</a>
        <a class = "top" href = "https://google.com">&nbsp;&nbsp;使用方法&nbsp;&nbsp;</a>
        <div class = "screen"></div>
        <a class = "top" href = "https://google.com">&nbsp;&nbsp;新規作成&nbsp;&nbsp;</a>
        <a class = "top" href = "https://google.com">&nbsp;&nbsp;作成履歴&nbsp;&nbsp;</a>
        <a class = "top" href = "https://google.com">&nbsp;&nbsp;ログイン&nbsp;&nbsp;</a>
        <div class = "login" style = "margin: 1%;">ログイン情報:
            <div class = "login" id = "login">
                nill
            </div>
        </div>
        <hr>
        <main>
            <center>
                <h1>【ログイン】</h1>
                <u>
                    <div class = "iC">&nbsp;サービスを使用するにはログインする必要があります。&nbsp;</div>
                </u>
                <hr>
                <form action = "ログイン.php" method = "POST">
                    <div>
                        名前を入力<input type = "textarea" id = "name" name = "name">
                    </div>
                    <div>
                        パスワードを入力<input type = "password" id = "pssword" name = "password">
                    </div>
                    <div>
                        <input type = "submit" value = "送信する">
                    </div>
                </form>
            </center>
        </main>
    </body>
</html>
<style>
    html {
        color: white;
        background-image: url("61.jpg");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: 100%;
        background-color: black;
    }
    main {
        font-size: large;
    }
    h1.top{
        text-shadow:0 0 10px yellow;
        display: inline-block;
        font-size:
            50px;
        margin: 0;
        margin-left: 2%;
        margin-block-end: 5px;
        color: white;
    }
    h1.top-left {
        text-shadow:0 0 10px yellow;
        display: inline-block;
        font-size:
            50px;
        margin: 0;
        margin-block-end: 5px;
        color: white;
    }
    a.top{
        font-size: large;
        margin: 1%;
        background-color: white;
        border-radius: 5px;
        border: 1px solid rgb(0, 250, 162);
    }
    div.screen, .login {
        display: inline-block;
        font-size: larger;
    }
    .iC {
        margin: 0;
        font-weight: bold;
        -webkit-text-stroke: 0.4px black;
    }
    @media (max-width: 600px) { /*600px以下*/
        html {
            background-image: url("61-s.jpg");
        }
        h1.top, h1.top-left {
            font-size: 1.5em;
        }
        div.screen {
            display: block;
            margin-block-end: 0.4em;
        }
        .iC {
           font-size: 15px; 
        }
    }
</style>
<script type = "text/javascript">
    let loginData = localStorage.getItem("v1");
    var account = loginData;
    if (loginData == "" || loginData == null) {
        var account = "なし";
    }
    document.getElementById("login").innerHTML = account;
</script>
