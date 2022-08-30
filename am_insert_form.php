<!DOCTYPE htm>
<html>

<head>
    <meta charset="UTF-8" />
    <title>わたしのAppleMusic</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        #wrapper{
            width: 100%;
            height: 100vh;
            overflow: hidden;
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;
        }

        label{
            display: block;
            text-align: center;
            padding-top: 1rem;
            font-size:80%;
        }

        input,
        select{
            width: 100%;
            display: block;
            /* text-align: center; */
            /* line-height:150%; */
            padding: 0.3rem;
            border:1px solid rgb(49, 71, 110);
            border-radius: 5px;
        }

        #push{
            margin-top: 1rem;
            background-color:#FFF;
        }

        #push:hover{
            cursor: pointer;
        }

        #memo{
            height: 6em;
            text-align: left;
            width: 100%;
            border:1px solid rgb(49, 71, 110);
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
    <form method="POST" action="am_insert_process.php">
        <div>
            <label for="title">曲のタイトル</label>
            <input id="title" type="text" name="title" size="25"/>
        </div>
        <div>
            <label for="artist">アーティスト名</label>
            <input id="artist" type="text" name="artist" size="25">
        </div>
        <div>
            <label for="price">良き？</label>
            <select name="fav" id="fav" size="1">
                <option value="良">良</option>
                <option value="そうでもない">そうでもない</option>
                <option value="スキップしがち">スキップしがち</option>
            </select>
        </div>
        <div>
            <label for="publish">日本？海外？</label>
            <select name="type" id="type" size="1">
<option value=日本">日本</option>
<option value="海外">海外</option>
</select>
        </div>
        <div>
            <label for="published">メモ</label>
            <textarea id="memo" type="text" name="memo"></textarea>
        </div>
        <div>
            <input type="submit" value="登録" id="push">
        </div>
        <?php
        session_start();
        $token = uniqid(bin2hex(random_bytes(13)), true);
        $_SESSION['token'] = $token;
        ?>
        <input type="hidden" name="token" value="<?php print $token; ?>" />
    </form>
    </div>
</body>

</html>