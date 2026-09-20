<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ひとこと掲示板</title>
    <link rel="stylesheet" href="assets/main.css">
</head>

<body>
    <div class="page-cover">
        <h1>ひとこと掲示板</h1>
        <div class="form-cover">
            <!-- 投稿内容入力フォーム -->
            <form action="/" method="post">
                <div class="form-input-title">投稿者ニックネーム</div>
                <input type="text" name="autor_name" maxlength="40" value="" class="input-author-name">

                <div class="form-input-error"></div>

                <div class="form-input-title">投稿内容(必須)</div>
                <textarea name="message" class="input-message"></textarea>

                <div class="form-input-error"></div>

                <input type="hidden" name="action_type" value="insert">
                <button type="submit" class="input-submit-button">投稿する</button>
            </form>
        </div>
        <hr class="page-divider" />
        <div class="message-list-cover">
            <!-- この中に投稿された内容のリストを表示 -->
            <small>1件の返信</small>
            <div class="message-item">
                <div class="message-title">
                    <div class="">イチロー</div>
                    <small>2022-01-02 00:00:00</small>
                    <div class="spacer"></div>
                    <form action="/" method="post" style="text-align: right;">
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="action_type" value="delete">
                        <button type="submit" class="message-delete-button">削除</button>
                    </form>
                </div>
                <p class="message-line">明けましておめでとうございます</p>
            </div>
        </div>
    </div>
</body>

</html>
