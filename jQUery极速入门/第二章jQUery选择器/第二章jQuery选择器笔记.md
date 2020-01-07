# jQuery选择器
元素选择器、#id选择器、.class选择器 类型、属性、属性值
## jQuery选择器1
jQuery选择器中所有选择器都以:$(),它基于已经存在的CSS选择器；
  
### 匹配到页面中多个选择器
$('#box,.box').css('border','1px solid red')

 //属性选择器          '[属性名]'
        $('[href]').css('color','#ccf')
//属性值选择器          "链接名[属性值='']"
        $("a[target='_blank']").css('color','green')

## jQuery选择器2
jQuery中所有选择器以$符号开头:$(),基于已经存在的css选择器；
### 层级选择器（相当于父类和子类关系）
$('父级元素> 子级元素')    给定的父级元素下匹配所有的子元素
$('祖先元素 后代元素')    给定的祖先元素下匹配所有的后代元素
### 顺序选择器
1. $(':firs'）第一个元素
('li:first').css('border','1px solid pink')
2. $(':last')最后一个元素
$('li:last').css('border','1px solid pink')
3. $(':get(x)')表示大于x的值      从0开始
 ('li:get(5)').css('border','1px solid green')
4. $(':lt(x)')表示小于x的值
$('li:lt(1)').css('border','1px solid blue')
6. $(':eq(x)')表示等于值x的元素
$('li:eq(3)').css('border','1px solid red')
    