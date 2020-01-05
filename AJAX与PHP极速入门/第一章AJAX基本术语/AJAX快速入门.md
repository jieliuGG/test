## 1什么是AJAX
异步的JavaScript和XML
## 2AJAX对象XML HttpRequest
### 方法
1. open('请求类型','请求URL','交互方式')          设置请求参数
   请求类型：GET/POST
   请求URL:HTTP/FTP
   交互方式：true异步（默认值） false同步
2. send('请求数据')                              发送URL请求
   send：请求状态改变时调用
   请求数据：get请求时为nll；post为请求的值键对
语法：
get：send(null)
post: send('name=peter&pass=123')
3. setRequestHeader(''请求头信息')            设置请求头，使用post请求
 setRequestHeader：必须是open()与send()之间调用，常用于post调用
### 2属性
1. onreadystatechange=function(){}             接受事件回调
onreadystatechange:请求状态改变时调用，必须在send()之前调用
function事件回调函数：回调是有执行条件的函数，由特定事件触发
2. readyState                                  请求状态码
   0:open()未调用，未打开
   1:send()未调用，未发送
   2:send()已调用，获取到响应头
   3:正在下载响应数据
   4:请求完成
3. status =200，响应成功                                     请求状态码
4. responseText                                响应返回的纯文本
   存储返回的字符串，包括纯文本，JSON数据
5. responseXML                                 响应返回的XML/HTML对象
存储返回的XML/HTML对象，可以直接用DOM方法解析
## 3AJAX脚本结构
1. 创建AJAX对象；
2. 设置onreadystatechange事件回调，处理响应返回的数据
3. 初始化一个请求：执行xhr的open()方法
4. 设置请求头信息（可选）
5. 发送请求：send()
## 6.用AJAX完成GET请求     使用更多的是JSON格式的数据，从服务器返回的JSON仍然是个字符串
1. 创建AJAX对象
2. 创建请求事件的回调--》获取响应数据--》执行DOM操作
3. 创建URL请求
4. 发送URL请求
   get请求的url地址
   无参数：check.php
   有参数  check.php?name=zhu&password=123456
## 用AJAX完成POST请求
1. 创建AJAX对象
2. 创建请求事件的回调--》获取响应数据--》执行DOM操作
3. 创建URL请求-->设置请求头-->发送URL请求

## 用AJAX检测用户名是否存在
1. 如果用户名已经存在，则表示是注册用户·
2. 如果用户不存在，则表示是新用户，提醒用户先注册再登陆，并把登陆按钮禁用
3. 整个过程全部在当前页面完成，无刷新跳转。