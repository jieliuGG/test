# 第一章 jQuery基础篇
## j1.1QUery如何使用：
### 什么是jQUery？
1.封装JavaScript常用的功能代码，提供一种简便的JavaScript设计模式；
2.写更少的代码，做更多的事；
### jQUery核心特性：
具有独特的链式语法和短小清晰的多功能接口；
具有高效灵活的css选择器，并且可以对css选择器进行扩展；
优化HTML文档操作、事件处理、动画设计和Ajax交互
### 获取jQUery地址方法
法一： <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
法二：jQUery线上地址库（小项目方便测试）
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

## 1.2jQUery基本语法
### jQuery 通过选取HTML元素，并对选取的元素进行某些操作；
$(selector).action
$(选择器).需要执行的操作()
美元符号定义  jQuery；
### 文档就绪函数ready()     也称为jQuery入口函数
作用：为了防止文档在完全加载（就绪）之前执行jQuery代码
$(document).ready(function){
    执行的代码
})
简写：
$(function)(){
    执行的代码块
}
### JavaScript入口函数
windows.onload=function(){
    执行的代码块
}

## 1.3jQuery事件
js                      jQ                描述
onfocus                 focus              元素获得焦点    
onblur                  blur                元素失去焦点
onclick                 click          当用户点击对象时调用的事件句柄
onkeydown               keydown             某个按键被按下
onkeyup                 keyup                某个键盘按键被松开
onmouseover             mouseover              鼠标移到某元素之上

$(document).ready()当文档完成时；
$(selector).click()被选元素的点击事件；
$(selector).focus()被选元素的获得焦点事件；
$(selector).mouseover()当鼠标指针移上被选元素时；
$(selector).mouseleave()当鼠标指针离开被选元素时；
### jQuery中的事件原理：
触发被匹配元素的事件时会调用一个函数（事件处理函数）；
如：
$(选择器).click(function(){})
### jQuery中的事件方法：
触发被匹配元素的事件，调用一个函数；或理解为将函数绑定到所有被匹配的某个事件上；
$(选择器).click(function(){
    当事件触发时，执行的代码需要执行的代码块
})


