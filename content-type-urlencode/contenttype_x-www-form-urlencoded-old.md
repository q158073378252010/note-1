# 起因
Python POST 嵌套数组到 PHP Server



# 本质

嵌套 Json 数据在 HTTP Content-Type `application/x-www-form-urlencoded` 下，
Python requests 与 PHP 的区别。

# 其他本质

为什么 PHP 默认使用这种 Content-Type

# 题目

聊聊 HTTP 的 Content-Type（浏览器、Py POST 到 PHP）

# 请求、响应都需要正确的 HTTP 的 Header Content-Type

# Content-Type 与 MIME 关系

# HTTP Header 常见 Content-Type

http://www.runoob.com/http/http-content-type.html

# 浏览器常见默认 Content-Type

GET、POST 分别

- jQuery
- axios
- form
- AJAX
- URL 长度限制、Body 长度限制

# Python requests POST 到 PHP

- py 最舒服的 POST 方式 + PHP 适应的接收方式
- py 适应的 POST 方式 + PHP 最舒服的接收方式
- py POST 到 PHP 的 best practice
- PHP 的 best practice

## GET 默认 Content-Type

- requests 的 GET 操作不会在 HTTP Header 中设置 Content-Type

  - requests 的 `get` 函数第 2 个参数给定一个 dict，只会转化为 URL 的 query string
  - 即使为 GET 操作指定 Header 的 Content-Type，发送时 Content-Type 也会被去掉

- 浏览器的 GET 也不会设置 Content-Type

## PHP Laravel、CodeIgniter 默认接收参数的方式

# `application/x-www-form-urlencoded` 在 py requests、PHP 的不同表示方式

假设需要将下面这段数据编码为 `application/x-www-form-urlencoded`：

```json
{
  "a1": 456,
  "a2": "abc",
  "a3": ["a", "b"],
  "a4": [
    {
      "b1": 1,
      "b2": 2
    },
    "c"
  ],
  "a5": {
    "b3": 3,
    "b4": ["c1", 789]
  }
}
```

Python [requests]()


# 运行 PHP
`php -S localhost:8080`

浏览器可打开 URL： http://localhost:8080/server.php

# 运行 python
`python requests-get-url.py`

其他文件类似


# PHP 7 开始 `php://input` 允许多次读取
```json
// can read ↓
file_get_contents("php://input");

// again, can read ↓
file_get_contents("php://input");
```
