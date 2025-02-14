#!/bin/bash

# Đường dẫn thư mục dự án
PROJECT_DIR="/var/www/hgdigital.site"
GIT_REPO="https://github.com/2508roblox/hgdigital.git"
SQL_FILE="${PROJECT_DIR}/hgdigital.sql"
DB_NAME="hgdigital"
DB_USER="hgdigital"
DB_PASSWORD="hgdigital"  # Thay đổi mật khẩu nếu cần

# Xóa thư mục dự án
sudo rm -rf ${PROJECT_DIR}/*
sudo rm -rf ${PROJECT_DIR}/.[^.]*

# Clone lại repo
sudo git clone -b hoang  $GIT_REPO $PROJECT_DIR

# Xóa và tạo lại database
sudo mysql -e "DROP DATABASE IF EXISTS $DB_NAME;"
sudo mysql -e "CREATE DATABASE $DB_NAME;"
sudo mysql -e "CREATE USER IF NOT EXISTS '$DB_USER'@'localhost' IDENTIFIED BY '$DB_PASSWORD';"
sudo mysql -e "GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'localhost';"
sudo mysql -e "FLUSH PRIVILEGES;"

# Nhập dữ liệu từ file SQL
if [ -f "$SQL_FILE" ]; then
    sudo mysql -u $DB_USER -p$DB_PASSWORD $DB_NAME < $SQL_FILE
else
    echo "File SQL không tồn tại: $SQL_FILE"
    exit 1
fi

# Cài đặt các gói Composer
cd $PROJECT_DIR
sudo composer install

# Sao chép tệp .env
if [ -f ".env.production" ]; then
    sudo cp .env.production .env
else
    echo "File .env.production không tồn tại."
    exit 1
fi

# Phân quyền thư mục
sudo chmod -R 777 $PROJECT_DIR

# Tạo symbolic link cho storage
sudo php artisan storage:link

echo "Triển khai hoàn tất."
