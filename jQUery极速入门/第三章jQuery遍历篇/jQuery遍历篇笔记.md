# jQuery遍历
用一种相对的关系来查找html元素
向上查找（祖先元素）
向下查找（子元素）
同级查找（同胞）
## 遍历1
### 向上查找（祖先元素）
1. parent()  返回被选元素的直接父元素；
2. parents()   返回被选元素的的所有父元素；
3. parents('div')  使用可选参数来过滤对祖先元素的搜索；

### 向下查找（子元素）
1. 向下查找子元素
    $('div').children().css('border','1px solid block')

可过滤
    $('div').children('a').css('border','1px solid blue')

2. find('标签')返回被选元素的后代元素
    $('div').fin('b').css('border','1px solid #ccc')
### 同级查找
3. siblings()                返回被选元素的所有同胞元素
    $('a').siblings().css('border','1px solid yellow')

可过滤
    $('a').siblings('span').css('border','1px solid yellow')

   