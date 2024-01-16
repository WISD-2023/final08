# 系統畫面

## ◆會員 首頁
  <a href="https://imgur.com/bxOyACC"/><img src="https://imgur.com/bxOyACC.png" title="source: imgur.com" /></a>

## ◆會員 查看BLOG資訊
  <a href="https://imgur.com/NkBmjCj"/><img src="https://imgur.com/NkBmjCj.png" title="source: imgur.com" /></a>
## ◆會員 查看BLOG內容
  <a href="https://imgur.com/6jSQjTV"/><img src="https://imgur.com/6jSQjTV.png" title="source: imgur.com" /></a>

## ◆會員 文章管理
  <a href="https://imgur.com/zzszfV7"/><img src="https://imgur.com/zzszfV7.png" title="source: imgur.com" /></a>
## ◆會員 收藏管理
  <a href="https://imgur.com/c3TSfgL"/><img src="https://imgur.com/c3TSfgL.png" title="source: imgur.com" /></a>

## ◆管理員 會員控制
  <a href="https://imgur.com/ntFchnI"/><img src="https://imgur.com/ntFchnI.png" title="source: imgur.com" /></a>
## ◆管理員 文章控制
  <a href="https://imgur.com/OR3vKDR"/><img src="https://imgur.com/OR3vKDR.png" title="source: imgur.com" /></a>

# 系統名稱及作用
blog系統
- 會員可自行在網站上傳觀看收藏blog
- 管理者可查看所有blog 並管理會員

# 系統的主要功能與負責的同學
[3B032049 鄭哲丞](https://github.com/3B032049)


- 首頁 Route::get('/', [HomeController::class, 'index'])->name('home.index');
- 首頁blog Route::get('posts', [PostsController::class, 'index'])->name('posts.index');
- 首頁blog內容 Route::get('posts/{post}', [PostsController::class, 'show'])->name('posts.show');


- 管理員下面的功用 Route::prefix('admin')->name('admin.')->group(function () {
- Route::get('/', [AdminHomeController::class, 'index'])->name("home.index");

- 文章管理 Route::get('posts', [AdminPostsController::class, 'index'])->name("posts.index");
- Route::get('posts/create', [AdminPostsController::class, 'create'])->name("posts.create");
- Route::post('posts', [AdminPostsController::class, 'store'])->name("posts.store");
- Route::get('posts/{post}/edit', [AdminPostsController::class, 'edit'])->name("posts.edit");
- Route::patch('posts/{post}', [AdminPostsController::class, 'update'])->name("posts.update");
- Route::delete('posts/{post}', [AdminPostsController::class, 'destroy'])->name("posts.destroy");

- 管理員資格管理 Route::get('members', [AdminMembersController::class, 'index'])->name("members.index");
- Route::get('members/create', [AdminMembersController::class, 'create'])->name("members.create");
- Route::post('members', [AdminMembersController::class, 'store'])->name("members.store");
- Route::get('members/{member}/edit', [AdminMembersController::class, 'edit'])->name("members.edit");
- Route::patch('members/{member}', [AdminMembersController::class, 'update'])->name("members.update");
- Route::delete('members/{member}', [AdminMembersController::class, 'destroy'])->name("members.destroy");

- 會員下面的功 Route::prefix('member')->name('member.')->group(function () {
- Route::get('/', [MemberHomeController::class, 'index'])->name("home.index");

- 文章管理Route::get('posts', [MemberPostsController::class, 'index'])->name("posts.index");
- Route::get('posts/create', [MemberPostsController::class, 'create'])->name("posts.create");
- Route::post('posts', [MemberPostsController::class, 'store'])->name("posts.store");
- Route::get('posts/{post}/edit', [MemberPostsController::class, 'edit'])->name("posts.edit");
- Route::patch('posts/{post}', [MemberPostsController::class, 'update'])->name("posts.update");
- Route::delete('posts/{post}', [MemberPostsController::class, 'destroy'])->name("posts.destroy");

- 收藏管理Route::get('/', [MemberHomeController::class, 'index'])->name("home.index");
- Route::get('collects', [MemberCollectsController::class, 'index'])->name("collects.index");
- Route::get('collects/{collects}/create', [MemberCollectsController::class, 'create'])->name("collects.create");
- Route::post('collects', [MemberCollectsController::class, 'store'])->name("collects.store");
- Route::get('collects/{collects}/edit', [MemberCollectsController::class, 'edit'])->name("collects.edit");
- Route::patch('collects/{collects}', [MemberCollectsController::class, 'update'])->name("collects.update");
- Route::delete('collects/{collects}', [MemberCollectsController::class, 'destroy'])->name("collects.destroy");
});
## ERD
<a href="https://imgur.com/PruvwqO"/><img src="https://imgur.com/PruvwqO.png" title="source: imgur.com" /></a>

## 關聯式綱要圖
<a href="https://imgur.com/X3NvUUU"/><img src="https://imgur.com/X3NvUUU.png" title="source: imgur.com" /></a>

## 實際資料表欄位設計
<a href="https://imgur.com/akk2mcu"/><img src="https://imgur.com/akk2mcu.png" title="source: imgur.com" /></a>
<a href="https://imgur.com/PruvwqO"/><img src="https://imgur.com/PruvwqO.png" title="source: imgur.com" /></a>



## 樣板
樣板 https://startbootstrap.com/template/sb-admin


## 系統測試資料存放位置
- final01底下的sql資料夾

## 系統使用者測試帳號


## 系統復原步驟
1. 複製 git@github.com:WISD-2023/final08.git 

   打開 cmder，進入www，輸入git clone git@github.com:WISD-2023/final08.git 切換至專案所在資料夾->cd final08
2. cmder輸入以下命令，復原專案
    - composer install
    - composer run-script post-root-package-install
    - composer run-script post-create-project-cmd (.evn 產生金鑰 APP_KEY=<自動產生>)
    - npm install
    - npm run build
3. 修改.env檔案
    - DB_CONNECTION=mysql
    - DB_HOST=127.0.0.1
    - DB_PORT=33060
    - DB_DATABASE=blog_website
    - DB_USERNAME=root
    - DB_PASSWORD=root
4. 復原DB/建立資料庫
    - artisan migrate


## 系統開發人員與工作分配

