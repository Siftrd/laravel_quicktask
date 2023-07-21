<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Code of Conduct

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

##2. Nêu mục đích chính, ngắn gọn của các thư mục trong dự án.
- Thư mục app, chứa tất cả các project được tạo, hầu hết các class trong project được tạo đều ở trong đây.
    * Thư mục Console, chứa các tập tin định nghĩa các câu lệnh trên artisan.
    * Thư mục Exceptions, chứa các tập tin quản lý, điều hướng lỗi.
    * Thư mục Controllers, chứa các controller của project.
    * Thư mục Middleware, chứa các tập tin lọc và ngăn chặn các requests.
    * Thư mục Providers, chứa các file thực hiện việc khai báo service và bind vào trong Service Container.
- Thư mục bootstrap, chứa những file khởi động của framework và những file cấu hình auto loading, route, và file cache.
- Thư mục config, chứa tất cả những file cấu hình.
- Thư mục database, như tên gọi của nó, thư mục này sẽ chứa các file làm việc với cơ sở dữ liệu. Gồm 3 phần
    * Thư mục factories, chứa các file có chức năng tạo dữ liệu ảo database, phối hợp cho việc testing.
    * Thư mục migrations, chứa các file tạo và chỉnh sửa dữ liệu.
    * Thư mục seeds, chứa các file tạo dữ liệu thêm vào CSDL.
- Thư mục public, chứa file index.php giống như cổng cho tất cả các request vào project, bên trong thư mục còn chứa file JavaScript, và CSS.
- Thư mục resources, chứa những file view và raw, các file biên soạn như LESS, SASS, hoặc JavaScript. Ngoài ra còn chứa tất cả các file lang trong project.
    * Thư mục views, chứa các file view xuất giao diện người dùng.
- Thư mục routes, chứa tất cả các điều khiển route (đường dẫn) trong project. Chứa các file route sẵn có: web.php, channels.php, api.php, và console.php.
- file api.php, điều khiển các route của ứng dụng, như route của ứng dụng User (đăng ký, đăng nhập, ...).
- file web.php, điều khiển các route của view, như route của trang top, sản phẩm, ...
- Thư mục storage, chứa các file biên soạn blade templates của bạn, file based sessions, file caches, và những file sinh ra từ project.
    * Thư mục app, dùng để chứa những file sinh ra từ project.
    * Thư mục framework, chứa những file sinh ra từ framework và caches.
    * Thư mục logs, chứa những file logs.
    * Thư mục /storage/app/public, lưu những file người dùng tạo ra như hình ảnh.
 - Thư mục tests, chứa những file tests, như PHPUnit test.
 - Thư mục vendor, chứa các thư viện của Composer.
 - file .env, chứa các config chính của Laravel.
 - file artisan thực hiện lệnh của Laravel.
 - File .gitattributes/.gitignore dành cho xử lý git.
 - File của Composer: composer.json/ composer.lock/ composer-setup.php
 - file package.js, chứa các package cần dùng cho projects.
 - file phpunit.xml, xml của phpunit dùng để testing project.
 - file webpack.mix.js, file dùng để build các webpack.

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

#chapter 2
1. Migration là gì?
2. Hàm up() và down() trong một class migration dùng để làm gì?
3. Nêu các câu lệnh Migration thông dụng mà bạn biết.
1. Mass assignment là gì?
2. Cách xử lý Mass assignment trong Laravel.
3. Tại sao Laravel có cả thuộc tính ""fillable"" và ""guarded"".
4. Với các thuộc tính nằm trong blacklist, ta làm như thế nào để thay đổi nó?