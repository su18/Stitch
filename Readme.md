# 有中国特色的PHP大马

一个管理员看见都不确定怎么回事不敢直接删的娱乐向PHP webshell。我将其命名为：Stitch。



## 简介

学了几天PHP，主要是学习了一句话、小马、大马等的实现方式，简单了解了一下常用木马服务端如菜刀、蚁剑、冰蝎等的参数传递、功能实现、加密方式，尝试性的照着常用的大马连写带抄（~~主要是抄~~主要是写）的完成一个全新的大马，并修复了多个BUG，添加一些个人常用的功能，也能够避免使用网上流传的PHP文件留下的后门造成的危害，前前后后花了大概两周半的时间。第一次也是最后一次写PHP，难免写出各种问题漏洞，随便看看就行，别太认真。



## 功能

|   名称   |     功能     |
| :------: | :----------: |
| 通告公告 |   phpinfo    |
| 政策解读 |   系统信息   |
| 文件督查 |   文件操作   |
| 社会保障 |   代码执行   |
| 在线访谈 |   命令执行   |
| 数据查询 |   数据库执行   |
| 法律依据 |   反弹提权   |
| 办事指南 |  LD_PRELOAD  |
| 意见征集 | 查找恶意文件 |
| 标书检索 |   端口扫描   |
| 思想宣传 |  socket代理  |
| 标书下载 | 远程文件下载 |
| 在线申报 |  客户端连接  |

本PHP大马提供了webshell常见的功能：PHPINFO、系统信息、文件操作、代码执行、命令执行、数据库执行、反弹提权，查找文件、端口扫描、远程文件下载等功能，并集成了socket代理，可直接用此木马漫游内网，集成了LD_PRELOAD 绕过 disable_functions ，支持命令实时回显网页，并支持蚁剑、菜刀连接。



## 思路

主要通过类之间的传递调用、字符串变形处理、可变函数绕过静态检测，根据所学知识尝试使用了多种方式，具体可在文件 StringHandler 类中自定义，部分关键功能base64编码传递绕过流量检测（虽然没什么卵用），非正常关键字降低某些算法的检出率。

前端页面架构上模仿流行管理后台页面，符合用户习惯，让运维管理员以为是开发人员的功能，让开发人员以为是运维人员的管理平台，就是这么神奇。



## 免杀

由于时间关系只是非常粗糙的免杀了D盾，流量层面部分敏感位置使用base64编码发包，但返回包还是明文的。其他需求请自行解决。



## 设计

本PHP文件采用了极简主义风格设计，页面简约大方，布局清晰有条理，一反常见的大马经常是黑色背景绿色字体的风格，包括了常见的图标、样式，符合用户习惯的同时带来了新鲜感受。

本来是想完全模仿管理后台的那种蓝色的风格，后来一想伙伴们天天看后台看都看吐了，还是换换口味吧。

首页诗句旨在提醒各位安全从业人员，不忘初心，方得始终。你们都懂哈。



## 兼容

兼容是不可能兼容的了，我的测试PHP版本是5.6.30，MySQL 5.6.35，用的语法有新有旧，但是一些特别旧的语法已经摒弃，浏览器 chrome，显示器15寸，服务器加客户机操作系统macOS Sierra 10.12.6，如果你的各方面出现问题的话。。。跟我有什么关系。

前端部分很多内容是按照我的浏览器及分辨率给的死属性，兼容性在高分辨率机器上及其他内核浏览器上可能变弱，但展示部分还是尽量做到了自适应，建议使用chrome浏览器并适当调整窗口大小以获得最好的观感。由于太穷了，买不起智能机，现在用的还是诺基亚1110，所以没有移动端的适配。



## 截图

首页：

![image-20191025104223012](https://raw.githubusercontent.com/JosephTribbianni/Stitch/master/images/image-20191025104223012.png)

文件管理：

![image-20191031234521174](https://raw.githubusercontent.com/JosephTribbianni/Stitch/master/images/image-20191031234521174.png)

命令执行：

![image-20191025104144182](https://raw.githubusercontent.com/JosephTribbianni/Stitch/master/images/image-20191025104144182.png)

代码执行：

![image-20191025222228570](https://raw.githubusercontent.com/JosephTribbianni/Stitch/master/images/image-20191025222228570.png)

端口扫描：

![image-20191028092935675](https://raw.githubusercontent.com/JosephTribbianni/Stitch/master/images/image-20191028092935675.png)

数据库执行：

![image-20191031234447737](https://raw.githubusercontent.com/JosephTribbianni/Stitch/master/images/image-20191031234447737.png)

LD_PRELOAD：

![image-20191101103111125](https://raw.githubusercontent.com/JosephTribbianni/Stitch/master/images/image-20191101103111125.png)

消息提示：

![image-20191029141145532](https://raw.githubusercontent.com/JosephTribbianni/Stitch/master/images/image-20191029141145532.png)



这里就不过多剧透了，有兴趣请自己下载尝试。



## 使用

密码为 YZVlYfiI  ，是随机生成的字符串，用户名爱填啥填啥，不填都没人管你。



## 声明

本PHP文件仅用于学习过程中的一个简单产物，算是阶段性学习成果吧，纯技术学习，用于给跟我一样的PHP小白学习和参考。

请勿用于违法行为，后果自负。



## 反馈

全部功能已经测试成功，但是各种BUG那是一定的，欢迎提 issues 或在[博客](https://su18.org)文章下面留言，我尽量积极回复，然而更新肯定是不可能的了。



## 鸣谢

感谢前端巨佬 [**素依依**](https://github.com/LittleGremlin) 提供的前端支持（全是她写的）。

