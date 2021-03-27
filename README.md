# wordpress-github-actionn-sample
## 使い方
1. git管理下に.github/workflows/deploy.ymlを配置する。  
https://github.com/dich1/wordpress-github-actionn-sample/blob/main/.github/workflows/deploy.yml
```
例)
REMOTE_DIR: /サーバー名/public_html/wp-content/themes/テーマ名
```
REMOTE_DIRをgit管理下のルートディレクトリと合わせる。

2. Githubの/settings/secrets/actions/newから環境変数を追加する。  
https://github.com/ユーザー名/リポジトリ名/settings/secrets/actions/new  
FTP_SERVER  
FTP_USERNAME  
FTP_PASSWORD  

3. mainブランチにpushする。
https://github.com/dich1/wordpress-github-actionn-sample/actions  
上記でデプロイが成功したかどうか確認出来ます。  
