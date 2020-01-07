# jQuery动画
## jQuery显示、隐藏
1. hide(speed,callback)隐藏
2. show(speed,callback)显示
3. toggle(speed,callback)      事件切换：显示被隐藏的元素，并隐藏已显示的元素
4. hover()                     规定当鼠标悬停在被选元素上时要运行的两个函数；
   语法：
   $(selector).hover(inFunction(){},outFunction(){})
   ## jQuery淡入、淡出
   淡入淡出：jQuery是通过控制不透明度的变化来控制匹配到的元素的淡入淡出效果；
1. fadeIn(speed,callback)      用于淡入已隐藏的元素；
2. fadeOut(speed,callback)      用于淡出可见元素；
3. fadeTo(speed opacity callback)        把所有匹配到的元素的不透明度以渐进发方式调整到指定的不透明度值；
   
## jQuery滑动效果：
jQuery的滑动是通过高度的变化（向某个方向增大或缩小）来动态的显示所匹配的元素；
1. slideDown(speed,callback)     通过高度的变化，向下增大的动态效果  下滑效果；    //用在下拉菜单，500ms
2. sideUpn(speed,callback)       通过高度的变化，向上减小的动态效果  上滑效果；

## jQuery自定义动画
1. animate()方法创建自定义动画；
animate({params},speed,callback)     
必需的params参数定义形成动画的css属性；
font-size一律改成驼峰写法：fontSize
2.停止动画：
stop()   用于停止动画或效果，在它们完成之前，该方法适用于所有jQuery效果函数，包括滑动、淡入、淡出和自定义动画；
