# chapter 1
## APP_KEY
- sử dụng để giữ cho cookie và dữ liệu được mã hóa khác an toàn , bao gồm session cookie,trước khi 
chuyển chúng cho trình duyệt của người dùng và sử dụng nó để giải mã cookie đọc từ trình duyệt

- tự tạo APP_KEY bằng lệnh: php artisan key:generate

## 1. Có những cách nào để tạo 1 project Laravel?

- dùng composer: 
```php
composer create-project laravel/laravel project-name
```
- sau khi cài đặt laravel bằng laravel installation thì có thể tạo project laravel bằng : 
```php
laravel new project-name
```

## 2. Nêu mục đích chính, ngắn gọn của các thư mục trong dự án.
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

## 3. Vòng đời của một request trong Laravel. (Mở rộng)

![image](https://github.com/Siftrd/laravel_quicktask/assets/90273323/cdfe67cb-986c-4287-8e77-1650dfbf15d5)

- Đầu tiên, Client sẽ gửi 1 request đến index.php <là đích đến của mọi request, khởi nguyên cho framework>.
- Index.php sẽ khởi tạo các class,model liên quan, kết nối với app.php, đăng ký các interface, chuẩn bị và khởi tạo ứng dụng.
- Tiếp theo, request của client sẽ được gửi đến HTTP Kernel <cấu hình xử lý lỗi, cấu hình logger,xác định môi trường ứng dụng, ...> để lọc các request.
- Sau khi lọc, thì HTTP kernel sẽ load các service provider.
- Tiếp thì các request sẽ gửi đến router, router sẽ kiểm tra request nếu khớp hoàn toàn với 1 route nào đó thì sẽ có 2 hướng xử lý <Khi khai báo route, Laravel cho phép ta có thể ràng buộc request đi qua bằng các middleware tự tạo>:
    1. Route -> Middleware -> Controller/Action
    2. Route -> Controller/Action
- Nếu theo route 1, thì request sẽ được middleware xử lý logic theo những ràng buộc mà coder đặt ra để quyết định xem request đó có được đi tiếp hay là không.
- Sau đó request sẽ được đưa tới Controller để xử lý, xong sẽ trả về response có thể qua view hoặc không thông qua view

# chapter 2
## 1. Migration là gì?
- Migration cho phép tạo các bảng, các cột cơ sở dữ liệu (Database) bằng các dòng lệnh PHP, ngoài ra có thể dễ dàng cập nhật nội dung các bảng, các cột đã tồn tại.
## 2. Hàm up() và down() trong một class migration dùng để làm gì?
- Hàm up có tác dụng thực thi migration, thường được sử dụng để tạo 1 bảng, cột, hay index cho database<create,update...>. 
- Hàm down có tác dụng thực thi đoạn lệnh rollback, thường sẽ làm ngược lại những hành động của hàm up<drop, delete,...>.
## 3. Nêu các câu lệnh Migration thông dụng mà bạn biết.
```php
php artisan make:migration "ten-migration" --create<tạo mới bảng>/--table<chỉnh sửa bảng> = "ten-bang"
```
Câu lệnh trên có tác dụng tạo 1 migration "ten-migration" với các tùy chọn tương ứng
```php
php artisan migrate
```
Lệnh trên có tác dụng thực thi các migration được tạo
```php
php artisan migrate:reset
```
Lệnh trên sẽ rollback toàn bộ CSDL của bạn hay đúng hơn là chạy toàn bộ function down() trong các file migration của bạn.
```php
php artisan migrate:refresh
```
Lệnh này nhằm rollback toàn bộ CSDL đồng thời chạy lại luôn toàn bộ các file migrate của bạn
```php
php artisan migrate:rollback
```
Với lệnh này,toàn bộ file có batch mới nhất trong bảng migration sẽ chạy tất cả các function down() hay chính xác hơn là đảo ngược lại thay đổi mà nó tạo ra cho CSDL
Nhưng nếu bạn không định nghĩa nội dung cho function down thì lệnh rollback coi như không có hiệu lực đồng nghĩa với việc migration đó vẫn tồn tại trong cơ sở dữ liệu.

**Các câu lệnh tạo bảng thường dùng**

$table->integer('votes'); Tương đương INTEGER.

$table->string('description',255); Cột tương đương VARCHAR với độ dài tùy chọn.

$table->boolean('confirmed'); Kiểu BOOLEAN .

$table->date('created_at');Tương đương kiểu DATETIME.

$table->double('amount', 8, 2);	Cột tương đương DOUBLE với độ chính xác (tổng số) và tỷ lệ (chữ số thập phân).

$table->float('amount', 8, 2);	Cột tương đương FLOAT với độ chính xác (tổng số) và tỷ lệ (chữ số thập phân).

$table->increments('id');	Cột tương đương tăng dần UNSIGNED 
INTEGER (khóa chính) .

...

**modifier của các bảng**

->autoIncrement()	Đặt các cột INTEGER làm tăng tự động (khóa chính)

->charset('utf8')	Chỉ định một bộ ký tự cho cột (MySQL)

->default($value)	Chỉ định giá trị "mặc định" cho cột

->nullable($value = true)	Cho phép (theo mặc định) giá trị NULL được chèn vào cột

->unsigned()	Đặt các cột INTEGER là UNSIGNED (MySQL)

...

**Cách tạo model trong Laravel.**

```php
php artisan make:model Tasks <có thể tạo luôn migration bằng cách thêm option -m hoặc --migrate>
php artisan make:model Tasks -m 
```

## 1. Mass assignment là gì?
- Lỗi bảo mật mass-assignment xảy ra khi một user truyền vào một tham số HTTP không mong muốn trong request, và tham số đó sẽ có thể thay đổi một column trong database mà bạn không ngờ tới. Ví dụ, một user xấu có thể gửi một tham số is_admin qua HTTP request, và khi giá trị này được map vào trong model qua hàm create, sẽ cho phép user thay đổi để biến thành một admin.

## 2. Cách xử lý Mass assignment trong Laravel.
- bạn cần thiết phải chỉ định thuộc tinh $fillable hoặc $guarded trong model, để Eloquent model được bảo vệ trước mass-assignment.

## 3. Tại sao Laravel có cả thuộc tính ""fillable"" và ""guarded"".

- $fillable dùng để lưu danh sách các thuộc tính "được phép" (white list) mass-assign.
- $guarded để lưu các thuộc tính mà không được phép mass-assign. Các thuộc tính khác không lưu trong $guarded sẽ được mass-assign. Vì thế, $guarded được coi như là một "black list"
- Chỉ có thể sử dụng một trong hai, hoặc $fillable hoặc $guarded, chứ không được dùng cả hai cùng một lúc

## 4. Với các thuộc tính nằm trong blacklist, ta làm như thế nào để thay đổi nó?
    


# Chapter 3

## 1. Kể tên các quan hệ của Laravel và phương thức tương ứng.
- One to One
```php
$this->hasOne('App\Avatar');

$this->belongsTo('App\User');
```

- One to Many
```php
$this->hasMany('App\Avatar');

$this->belongsTo('App\User');
```
- Many to Many
```php
$this->belongsToMany('App\Avatar');

$this->belongsToMany('App\User');
```
    - Has One Through
    ví dụ có 3 bảng
    users
    id - integer
        supplier_id - integer

    suppliers
        id - integer

    history
        id - integer
        user_id - integer

- Mặc dù bảng **history** không chứ **supplier_id** nhưng chúng ta vẫn có thể truy cập đến **user's history** bới mối quan hệ **hasOneThrough** như sau

```php
$this->hasOneThrough('App\History', 'App\User');
```
- Tham số đầu tiên của quan hệ này là tên model mà chúng ta muốn truy cập, tham số thứ hai là model trung gian. Chúng ta cũng có thể custom lại tên của các khóa ngoại bằng cách thêm các tham số, với tham số thứ 3 là khóa ngoại của bảng trung gian, tham số thứ 4 là khóa ngoại của bảng mà chúng ta muốn gọi tới, tham số thứ 5 là trường mà chúng ta muốn liên kết ở bảng đang sử dụng, tham số thứ 6 là trường mà chúng ta muốn liên kết ở bảng trung gian
```php
$this->hasOneThrough(
            'App\History',
            'App\User',
            'supplier_id', // Khóa ngoại của bảng trung gian user
            'user_id', // Khóa ngoại của bảng chúng ta muốn truy cập đến
            'id', // Khóa mà chúng ta muốn liên kết ở bảng supplier
            'id' // Khóa mà chúng ta muốn liên kết ở bảng user
        );
```
    - Has Many Through
    teams
        id - integer
        name - string

    users
        id - integer
        team_id - integer
        name - string

    posts
        id - integer
        user_id - integer
        title - string
    Mặc dù bảng posts không chứa khóa ngoại team_id, nhưng với quan hệ hasManyThrough sẽ cung cấp cho chúng ta lấy tất cả posts của một teams bằng cách $team->posts. Để thực hiện việc này thì Eloquent sẽ kiểm tra team_id thông qua bảng users. Chúng ta sẽ biểu diễn quan hệ như sau:
```php
$this->hasManyThrough('App\Post', 'App\User');
```

- Tham số đầu tiên của quan hệ này là tên model mà chúng ta muốn truy cập, tham số thứ hai là model trung gian. Chúng ta cũng có thể custom lại tên của các khóa ngoại bằng cách thêm các tham số, với tham số thứ 3 là khóa ngoại của bảng trung gian, tham số thứ 4 là khóa ngoại của bảng mà chúng ta muốn gọi tới, tham số thứ 5 là trường mà chúng ta muốn liên kết ở bảng đang sử dụng, tham số thứ 6 là trường mà chúng ta muốn liên kết ở bảng trung gian

```php
    $this->hasManyThrough(
            'App\Post',
            'App\User',
            'country_id', // khóa ngoại của bảng trung gian
            'user_id', // khóa ngoại của bảng mà chúng ta muốn gọi tới
            'id', //trường mà chúng ta muốn liên kết ở bảng đang sử dụng
            'id' // trường mà chúng ta muốn liên kết ở bảng trung gian.
        );
```
- Polymorphic Relations

## 2. Nêu các cách liên kết 2 đối tượng có quan hệ n-n.

## 3. Làm thế nào để lấy dữ liệu từ bảng trung gian trong quan hệ n-n."
