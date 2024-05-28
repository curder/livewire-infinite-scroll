# Livewire Infinite Scroll


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