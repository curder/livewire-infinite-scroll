# Livewire Infinite Scroll

仅 MySQL 数据库的无限滚动 Livewire 示例，使用了 MySQL 的 `FIELD()` 函数，暂时不支持 SQLite 和 PostgreSQL。

[![Livewire Infinite Scroll](https://github.com/curder/livewire-infinite-scroll/assets/8327004/52407de2-2ef1-400d-9a53-3bbabaeac91f)](https://github.com/curder/livewire-infinite-scroll/assets/8327004/d8bc1d01-78c4-4e95-b887-1db126d69836)

# 初始化

```bash
# 下载项目源代码
git clone https://github.com/curder/livewire-infinite-scroll.git

# 进入到项目源代码目录
cd livewire-infinite-scroll

# 拷贝项目本地化配置文件
cp .env.example .env

# 生成应用密钥
php artisan key:generate

# 创建数据库存储文件
touch database/database.sqlite

# 执行数据库迁移
php artisan migrate

# 填充测试数据
php artisan db:seed

# 安装PHP依赖
composer install

# 安装NPM依赖
yarn

# 运行单元测试
php artisan test -p
```

在浏览器访问地址：`http://localhost/login` 然后输入用户名/密码：`test@example.com`/`Password` 进行登录后在首页可以看到滚动加载数据。