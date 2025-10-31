# mock-project
Dockerビルド  
1. git@github.com:suzu1279/mock-project.git
2. cd coachtech-laravel-mock-project
3. DockerDesktopアプリを立ち上げる
4. docker-compose up -d --build

Laravel環境構築　　
1. docker-compose exec php bash
2. composer install
3. 「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.envファイルを作成
4. .envに以下の環境変数を追加  
   DB_CONNECTION=mysql  
   DB_HOST=mysql  
   DB_PORT=3306  
   DB_DATABASE=laravel_db  
   DB_USERNAME=laravel_user  
   DB_PASSWORD=laravel_pass
5. アプリケーションキーの作成  　php artisan key:generate
6. マイグレーションの実行　　php artisan migrate
7. シーディングの実行　　php artisan db:seed
8. シンボリックリンク作成　　php artisan storage:link

使用技術（実行環境）  
・PHP8.1-fpm  
・Laravel8.83.27  
・MySQL8.0.26  

テーブル設計　　

<img width="789" height="291" alt="Image" src="https://github.com/user-attachments/assets/d3bfa89b-7a6a-4c5a-b660-1e7d293a21cf" />
<img width="797" height="292" alt="Image" src="https://github.com/user-attachments/assets/7120b61b-07f8-48c7-8238-4e14668b9530" />
<img width="795" height="293" alt="Image" src="https://github.com/user-attachments/assets/458a2c35-d776-4fe6-b49a-cdd3cc13782b" />
<img width="793" height="235" alt="Image" src="https://github.com/user-attachments/assets/e186d9b6-8ec5-4e60-965c-6753c9728212" />
<img width="799" height="308" alt="Image" src="https://github.com/user-attachments/assets/4f761256-7626-4337-a3d9-7e1578066bb6" />
<img width="795" height="305" alt="Image" src="https://github.com/user-attachments/assets/fc85e68c-227c-4852-ac9b-1cb8d88d6034" />
<img width="795" height="292" alt="Image" src="https://github.com/user-attachments/assets/a9a88fba-fe10-4e07-ad59-0a7f5b214ea4" />　　
<img width="790" height="292" alt="Image" src="https://github.com/user-attachments/assets/bbaa7096-0334-4511-8f84-41f80efde5db" />　　

ER図　

<img width="477" height="392" alt="Image" src="https://github.com/user-attachments/assets/93f19b36-a68b-4a18-a071-7ec42728e930" />　　

URL  
・開発環境：http://localhost/　　
・phpMyAdmin:：http://localhost:8080/　　



