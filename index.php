<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />


  <title>华师人导航</title>

<link rel="shortcut icon" href="http://yun.zhangxingqiu.cn/favicon.ico">

<!--
<meta name="Keywords" content="北京邮电大学,导航,北邮人,Byr,Byr.wiki"/>
<meta name="Description" content="北邮人常用的导航页，随时随地 Byr.wiki。一个框，全能搜！如打开缓慢，请访问简洁版 http://so.byr.wiki/"/>
-->

<!--
	作者：i@zhangxingqiu.cn
	时间：2016-12-15
	描述：为了提升访问速度，改为访问放在阿里云服务器里的样式文件，实际上源代码和本地一样。如果想要更换为本地的路径，可使用搜索替换功能，把 http://yun.zhangxingqiu.cn/ 替换为 ./ 即可。
-->

<link href="http://yun.zhangxingqiu.cn/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="http://yun.zhangxingqiu.cn/css/frontstyle.css">
<script src="http://yun.zhangxingqiu.cn/assets/js/jquery-3.1.0.min.js"></script>
<script src="http://yun.zhangxingqiu.cn/assets/js/jquery-migrate-3.0.0.min.js"></script>


<!--本地的样式文件
	
<link href="./css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="./css/frontstyle.css">
<script src="./assets/js/jquery-3.1.0.min.js"></script>
<script src="./assets/js/jquery-migrate-3.0.0.min.js"></script>

-->
<style type="text/css">
body  {
/*background-image:url(http://yun.zhangxingqiu.cn/images/byrbg.jpg);	*/
/*background-image:url(http://chuantu.biz/t6/198/1515217877x-1566657643.jpg);	*/
/*background-image:url(http://upload.ouliu.net/i/20180106134806ow8jx.jpeg);	*/
/*background-image:url(http://upload.ouliu.net/i/201801061348390nu06.jpeg);	*/
/*background-image:url(http://upload.ouliu.net/i/20180106134916eym0n.jpeg);	*/
background-image:url(http://upload.ouliu.net/i/20180106134536rc5tq.jpeg);	

/*作者：i@zhangxingqiu.cn
时间：2016-10-05
描述：这是本地测试的背景照路径*/

 /*background-image:url(images/2.jpg);*/

z-index: -1;
background-repeat:no-repeat;
background-attachment:fixed;
background-size: cover;
height: 100%;
width: 100%;
}

 </style>



</head>


<body>

  

<!--
	作者：i@zhangxingqiu.cn
	时间：2016-10-04
	描述：原来的蓝色背景顶部导航
-->
<div class="hidden-xs"> 
 <ul class="nav nav-tabs navbar-static-top"  role="navigation" >
    
  <div id="header">
  
   <!-- <a href="http://byr.wiki" id="zb" style="font-size: 19px;">北邮人导航</a>-->
    <!--
    <a class="LOGO1" href="http://byr.wiki"><img id="zb" src="http://yun.zhangxingqiu.cn/images/logo7.png"  alt="北邮人导航"></a>
       <a href="http://so.zhangxingqiu.cn/so/liuyan/index.html" target="_blank" class="yb">留言板</a>
       -->
    <!--<a href="http://byr-navi.com/" target="_blank" class="yb">新导航</a>-->

    <a href="http://ecnuer.top/" id="zb" style="font-size: 16px;">华师人.导航</a>
    <!-- <a href="http://gaojx.cn/" target="_blank" class="yb" style="font-size: 16px;">首页</a> -->
       
  </div>
 </ul>
</div>



<!--
	作者：i@zhangxingqiu.cn
	时间：2016-10-04
	描述：主体部分内容
-->

<div class="container">
  <!--
  	作者：i@zhangxingqiu.cn
  	时间：2016-10-20
  	描述：仅在屏幕尺寸小于 768px 可见
  -->

  <div class="visible-xs">
    <div class="row sLOGO">
      <div class="col-xs-6 col-xs-offset-3">
               
         <!-- <a href="./index.html"><img id="LOGO" src="http://yun.zhangxingqiu.cn/images/logo7.png"  alt="Responsive image"></a>   -->
       <br/>
      </div>
    </div>
  </div>
  
  
   
  <!--
  	作者：i@zhangxingqiu.cn
  	时间：2016-10-20
  	描述：仅在屏幕尺寸大于 768px 可见
  -->

  <div class="hidden-xs"> 
    <div class="row LOGO">
      <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">
      <!--  <a href="./index.html"><img id="LOGO" src="http://so.zhangxingqiu.cn/so/images/caise.png"  alt="Responsive image"></a>	-->
        
        <!--<a href="./index.html"><img id="LOGO" src="images/logo3.png"  alt="Responsive image"></a>-->
        
      </div>
    </div>
  </div>


  <div class="input-group input-group-lg">
  <span class="input-group-addon">全能搜</span>
  <form action="http://www.baidu.com/s" method="get" target="_blank" >
    
  <input type="text" class="form-control" name="wd" id="search" placeholder="输入关键词，再点击下方相应按钮，即可检索。默认回车为百度搜索，谷歌搜索需翻墙" baiduSug="5" >
</div>  
       
    <P><center>
    <input type="submit" value="百度" id="baidu" button type="button" class="btn btn-primary" />
    <input type="submit" value="谷歌" id="google" button type="button" class="btn btn-primary"/>
    <input type="submit" value="搜狗" id="sougou" button type="button" class="btn btn-primary"/>
    <input type="submit" value="京东" id="jd" button type="button" class="btn btn-primary" />
    <input type="submit" value="淘宝" id="taobao" button type="button" class="btn btn-primary" />
   <input type="submit" value="微信" id="weixin" button type="button" class="btn btn-primary" />
    <input type="submit" value="知乎" id="zhihu" button type="button" class="btn btn-primary" />
    <input type="submit" value="微博" id="weibo" button type="button" class="btn btn-primary"/>
    <input type="submit" value="豆瓣" id="douban" button type="button" class="btn btn-primary"/>
    <input type="submit" value="网盘1" id="panci" button type="button" class="btn btn-primary"/>
     <input type="submit" value="网盘2" id="quzhuanpan" button type="button" class="btn btn-primary"/>
    <input type="submit" value="影视" id="ziyuan" button type="button" class="btn btn-primary"/>
    <input type="submit" value="地图" id="ditu" button type="button" class="btn btn-primary"/>
    </center></P>   
  
   
  
  </form>

  
  <!--
	作者：i@zhangxingqiu.cn
	时间：2016-10-04
	描述：搜索框完
-->
  
       <br>
       <br>
     
 <div class="visible-xs">

  
<!--   <div class="jumbotron">
    
    <p id="zhongjian">输入关键词，再点击下方相应按钮，即可检索，默认为百度搜索！<br>随时随地  Byr.Wiki  记住一个就够了！<br>推荐使用电脑访问，效果更好！<br></p>
    <p align="center"><a class="btn btn-danger btn-md" href="http://so.zhangxingqiu.cn/so/liuyan/index.html" role="button"  target="_blank">参与留言</a></p>
    </div>
    
   
 </div> -->
      
    <br>
  	<br>

  			
  		<div class="hidden-xs">
  		<br>
  		<br>
  		<br>
  		<br>
  		
  		
  		  <!--<center>
    <p id="zhongjian">输入关键词，再点击下方相应按钮，即可检索！随时随地  Byr.wiki！</p>
        </center>	-->
              
         <!--20171112停止展示底部文案-->
         <!--<center>
    <p id="zhongjian">待更新<a class="btn btn-danger btn-md" href="http://so.zhangxingqiu.cn/so/liuyan/index.html" role="button"  target="_blank">参与留言</a></p>
        </center>	-->
        <!--
        <center>
    <p id="zhongjian">打开支付宝<a class="btn btn-danger btn-md" href="http://so.zhangxingqiu.cn/so/images/zhifubao.jpg" role="button"  target="_blank">点我领红包</a>每天可领一次！科学上网<a class="btn btn-danger btn-md" href="https://github.com/byrwiki/byrwiki/issues/13" role="button"  target="_blank">点我了解</a>站长亲测--更新于2018年1月1日</p>
        </center>
        -->
        
        
        <br>
  			<br>
     			
  			
  		  
  		</div>	
 
</div> 



<div class="container">
	<table class="table table-responsive  table-striped table-bordered table-hover acitve " >
		<thead>
			<tr class="center">
	    <th id="dingbu" colspan="5" >日常生活类</th>
      <th id="dingbu" colspan="5" >快捷服务类 </th>

			</tr>
		</thead>
		<tbody>
			<tr style="background: rgba(45, 43, 43, 0.43);" >
	      <td align="center" id="fenlei" >购物</td>
        <td align="center"><a href="http://www.jd.com/" target="_blank" id="lianjie">京东</a></td>
        <td align="center"><a href="https://www.tmall.com/" target="_blank" id="lianjie">天猫</a></td>
        <td align="center"><a href="https://www.taobao.com/" target="_blank" id="lianjie">淘宝</a></td>
        <td align="center"><a href="https://www.amazon.cn/" target="_blank" id="lianjie">亚马逊</a></td>
   <!-- <td align="center"><a href="http://gouwu.hao123.com/" target="_blank">更多</a></td>-->
        <td align="center" id="fenlei">工具</td>
        <td align="center"><a href="https://kyfw.12306.cn/otn/" target="_blank" id="lianjie1">买火车票</a></td>
        <td align="center"><a href="http://map.baidu.com/" target="_blank" id="lianjie">百度地图</a></td>
        <td align="center"><a href="http://www.kuaidi100.com/" target="_blank" id="lianjie">快递查询</a></td>
        <td align="center"><a href="http://fanyi.youdao.com/" target="_blank" id="lianjie">有道翻译</a></td>
			</tr>
		</tbody>
		<tbody>
			<tr style="background: rgba(45, 43, 43, 0.43);" >
        <td align="center" id="fenlei">视频</td>
        <td align="center"><a href="http://www.iqiyi.com/" target="_blank"  id="lianjie">爱奇艺</a></td>
        <td align="center"><a href="http://www.youku.com/" target="_blank" id="lianjie">优酷</a></td>
        <td align="center"><a href="http://www.bilibili.com/" target="_blank" id="lianjie">B 站</a></td>
        <td align="center"><a href="http://open.163.com/" target="_blank"  id="lianjie">网易公开课</a></td>
    <!--<td align="center"><a href="http://www.hao123.com/video" target="_blank">更多</a></td>-->
        <td align="center" id="fenlei">邮箱</td>
        <td align="center"><a href="https://mail.qq.com/" target="_blank" id="lianjie">腾讯邮箱</a></td>
        <td align="center"><a href="http://email.163.com/" target="_blank" id="lianjie">网易邮箱</a></td>
        <td align="center"><a href="https://mail.google.com/" target="_blank" id="lianjie">谷歌邮箱</a></td>
        <td align="center"><a href="http://mail.sina.com.cn/" target="_blank" id="lianjie1">新浪邮箱</a></td>
			</tr>
		</tbody>
		<tbody>
			<tr style="background: rgba(45, 43, 43, 0.43);" >
	    <td align="center" id="fenlei">社交</td>
      <td align="center"><a href="http://weibo.com/" target="_blank" id="lianjie1">微博</a></td>
      <td align="center"><a href="https://wx.qq.com/" target="_blank" id="lianjie">微信网页版</a></td>
      <td align="center"><a href="http://tieba.baidu.com/" target="_blank" id="lianjie">百度贴吧</a></td>
      <td align="center"><a href="https://www.zhihu.com/" target="_blank" id="lianjie1">知乎</a></td>
<!-- <td align="center"><a href="http://www.hao123.com/shequ" target="_blank">更多</a></td>-->
      <td align="center" id="fenlei">求职</td>
      <td align="center"><a href="http://www.lagou.com/" target="_blank" id="lianjie">拉勾</a></td>
      <td align="center"><a href="http://zhaopin.com" target="_blank" id="lianjie">智联招聘</a></td>
      <td align="center"><a href="http://www.51job.com/" target="_blank" id="lianjie">前程无忧</a></td>
      <td align="center"><a href="http://www.yingjiesheng.com/" target="_blank" id="lianjie">应届生</a></td>
   </tr>
	</tbody>
	
	<tbody>
		<tr style="background: rgba(45, 43, 43, 0.43);" >
      <td align="center" id="fenlei">其它</td>
      <td align="center"><a href="https://pan.baidu.com" target="_blank"  id="lianjie">百度云</a></td>
      <td align="center"><a href="https://mp.weixin.qq.com/" target="_blank" id="lianjie">微信公众号</a></td>
      <td align="center"><a href="https://app.yinxiang.com/Login.action" target="_blank"  id="lianjie">印象笔记</a></td>
      <td align="center"><a href="http://360kan.letv.com/live" target="_blank" id="lianjie">电视直播</a></td>
  <!--<td align="center"><a href="http://www.hao123.com/video" target="_blank">更多</a></td>-->
      <td align="center" id="fenlei">追剧</td>
      <td align="center"><a href="http://www.dygod.net/" target="_blank" id="lianjie">电影天堂</a></td>
      <td align="center"><a href="http://ttmeiju.com/" target="_blank" id="lianjie">天天美剧</a></td>
      <td align="center"><a href="http://www.allyingshi.com/" target="_blank" id="lianjie">人人影视</a></td>
      <td align="center"> </td>
		</tr>
	</tbody>
	
	
	<!--鉴于相关站点无人问津，所以下线-->
	<!--<tbody>
		<tr style="background: rgba(45, 43, 43, 0.43);" >
      <td align="center" id="fenlei">软件</td>
      <td align="center"><a href="http://rj.baidu.com/" target="_blank"  id="lianjie">百度软件</a></td>
      <td align="center"><a href="https://xbeta.info/" target="_blank" id="lianjie">善用佳软</a></td>
      <td align="center"><a href="http://www.appinn.com/" target="_blank"  id="lianjie">小众软件</a></td>
      <td align="center"><a href="http://sspai.com/" target="_blank" id="lianjie">少数派</a></td>
  
      <td align="center" id="fenlei">设计</td>
      <td align="center"><a href="http://so.ui001.com/" target="_blank" id="lianjie">搜素材</a></td>
      <td align="center"><a href="http://www.zcool.com.cn/" target="_blank" id="lianjie">站酷</a></td>
      <td align="center"><a href="http://image.baidu.com/" target="_blank" id="lianjie">百度图片</a></td>
      <td align="center"><a href="http://sucai.sogou.com/" target="_blank" id="lianjie">搜狗素材</a></td>
		</tr>
	</tbody>-->
		
<!-- 	<tbody>
		<tr style="background: rgba(45, 43, 43, 0.43);" >
      <td align="center" id="fenlei">资讯</td>
      <td align="center"><a href="http://news.163.com/" target="_blank"  id="lianjie">网易新闻</a></td>
      <td align="center"><a href="http://news.qq.com/" target="_blank" id="lianjie">腾讯新闻</a></td>
      <td align="center"><a href="http://www.toutiao.com/" target="_blank"  id="lianjie">今日头条</a></td>
      <td align="center"><a href="http://weixin.sogou.com/" target="_blank" id="lianjie">微信热门</a></td>
  <td align="center"><a href="http://www.hao123.com/video" target="_blank">更多</a></td>
      <td align="center" id="fenlei1">他们</td>
      <td align="center"><a href="http://aust.me/" target="_blank" id="lianjie">安理导航</a></td>
      
      <td align="center"><a href="http://timeso.cc" target="_blank" id="lianjie1">时光搜</a></td>
      <td align="center"> </td>
      <td align="center"> </td>
			</tr>
		</tbody> -->
		
	<!-- <tbody>
		<tr style="background: rgba(45, 43, 43, 0.43);" >
      <td align="center" id="fenlei1">推荐</td>
      
      <td align="center"><a href="http://www.panc.cc/" target="_blank" id="lianjie">胖次网盘</a></td>
      
      <td align="center"><a href="http://www.quzhuanpan.com/" target="_blank" id="lianjie">去转盘网</a></td>
      <td align="center"> </td>
      <td align="center"><a href="http://xiaolvji.com/" target="_blank" id="lianjie">效率集</a></td>
      <td align="center" id="fenlei">无名</td>
      <td align="center"><a href="http://ilxdh.com/" target="_blank" id="lianjie">龙轩导航</a></td>           
      <td align="center"><a href="https://movie.douban.com/chart" target="_blank" id="lianjie">高分电影</a></td>
      <td align="center"><a href="http://life.zhangxingqiu.cn/2016/01/16/%E7%BA%A2%E6%9D%8F%E5%87%BA%E5%A2%99/" target="_blank" id="lianjie1">科学上网</a></td>
      <td align="center"><<a href="https://aixyz.com/" target="_blank" id="lianjie">出墙</a></td>
      
  
		</tr>
	</tbody> -->
</table>
		
	
				
<!--作者：i@zhangxingqiu.cn
           时间：2016-10-07
           描述：这里是根据设备尺寸选择自动隐藏的内容
                        -->
<!-- <div class="hidden-xs">  -->
     
		<!--
    	作者：i@zhangxingqiu.cn
    	时间：2016-10-05
    	描述：北邮校园导航相关网址
    -->	


<table>
	<table class="table table-responsive table-striped table-bordered table-hover active" >
		<thead>
			<tr class="success">
			  <th rowspan="1" id="zuoce">华师相关</th>
		  	<td align="center"><a href="http://www.ecnu.edu.cn/" target="_blank" id="lianjie">华师官网</a></td>
        <td align="center"><a href="http://www.idc.ecnu.edu.cn/" target="_blank" id="lianjie1">公共数据库</a></td>
        <td align="center"><a href="https://elearning.ecnu.edu.cn/" target="_blank" id="lianjie1">大夏学堂</a></td>
        <td align="center"><a href="http://www.lib.ecnu.edu.cn/" target="_blank" id="lianjie">图书馆</a></td>
        <td align="center"><a href="http://mail.stu.ecnu.edu.cn/" target="_blank" id="lianjie1">学生邮箱</a></td>
        <td align="center"><a href="http://acm.ecnu.edu.cn/" target="_blank"  id="lianjie">ECNU OJ</a></td>
        <td align="center"><a href="http://faculty.ecnu.edu.cn/" target="_blank"  id="lianjie">教师名录</a></td>
       <td align="center"><a href="http://tieba.baidu.com/f?kw=%BB%AA%B6%AB%CA%A6%B7%B6%B4%F3%D1%A7&fr=ala0&tpl=5" target="_blank"id="lianjie">华师贴吧</a></td>        
        <td align="center"><a href="http://houqin.ecnu.edu.cn/s/129/t/328/p/2/c/4690/list.htm" target="_blank"id="lianjie">班车调度</a></td>        
        <td align="center"><a href="http://www.career.ecnu.edu.cn/common/index.aspx" target="_blank"id="lianjie">就业信息</a></td>
        
			</tr>
			
			<!--暂时下线北邮相关站点-->
			
			<!--<tr class="warning">
			  <th rowspan="1" id="zuoce">快捷入口</th>
			  <td align="center"><a href="http://jwc.bupt.edu.cn/content/content.php?p=10_2_235" target="_blank"id="lianjie">空余教室查询</a></td>
        <td align="center"><a href="http://jwc.bupt.edu.cn/list/list.php?p=9_38_1" target="_blank"id="lianjie">毕业设计</a></td>        
        <td align="center"><a href="http://jwc.bupt.edu.cn/content/content.php?p=5_68_111" target="_blank"id="lianjie">教学事务流程</a></td>
			
        <td align="center"><a href="http://ecard.bupt.edu.cn/" target="_blank"id="lianjie">校园一卡通</a></td>
        <td align="center"><a href="http://www.bupt.edu.cn/content/content.php?p=6_9_79" target="_blank"id="lianjie">办公电话</a></td>        
        <td align="center"><a href="http://cslab.bupt.edu.cn/innovation/" target="_blank"id="lianjie">创新实践平台</a></td>
        <td align="center"><a href="http://www.bupt.edu.cn/content/content.php?p=6_10_80" target="_blank"id="lianjie">校历</a></td>
        <td align="center"><a href="http://buptclass.com/" target="_blank" id="lianjie1">自习室查询</a></td>
  		</tr>
			
				
			<tr class="active">
			  <th rowspan="1" id="zuoce">论坛相关</th>
			  <td align="center"><a href="https://bbs.byr.cn/#!default" target="_blank" id="lianjie">北邮人论坛</a></td>
        <td align="center"><a href="http://bbs.cloud.icybee.cn" target="_blank" id="lianjie1">游客版论坛</a></td>
        <td align="center"><a href="http://search.icybee.cn/" target="_blank" id="lianjie">检索用户的回复</a></td>
        <td align="center"><a href="http://search.lovezxp.com/" target="_blank" id="lianjie">检索用户的发帖</a></td>
               <td align="center"><a href="http://bbss.zhengzi.me/" target="_blank"id="lianjie">查看每日十大</a></td>
        <td align="center"><a href="http://android.myapp.com/myapp/detail.htm?apkName=cn.byr.bbs.app" target="_blank"id="lianjie">应用下载(安卓)</a></td>
        
        <td align="center"><a href="http://weibo.com/byrbbs" target="_blank"id="lianjie">论坛官方微博</a></td>
        <td align="center"><a href="https://bbs.byr.cn/#!article/Talking/5852307" target="_blank"id="lianjie">玩转论坛指南</a></td>
               
			</tr>-->
<!-- <div class="row">
  <div class="col-xs-6 col-md-8">
    <a href="http://meiti.wiki/"  target="_blank" class="thumbnail">
      	<img src="http://yun.zhangxingqiu.cn/images/122.jpg" alt="meiti.wiki 新媒体导航">
      	
    </a>
  </div>
  
  <div class="col-xs-6 col-md-4">
    <a href="http://hao.cinemawk.com/" target="_blank" class="thumbnail">
      <img src="http://yun.zhangxingqiu.cn/images/123.jpg" alt="创影导航">
    </a>
</div>
 -->

</div>
		</table>
</table>

<!-- </div> -->





<<!-- table >
	<table class="table table-striped table-bordered table-hover active" >		
		<thead>
			<tr class="active center">
	      <th id="dingbu" >网站相关</th>
        <td align="center"><a href="http://so.zhangxingqiu.cn/so/liuyan/index.html" target="_blank"id="lianjie">关于我们</a></td>
        <td align="center"><a href="https://github.com/byrwiki/byrwiki.github.io" target="_blank"id="lianjie">网站源码</a></td>
        <td align="center"><a href="https://github.com/byrwiki/byrwiki.github.io/commits/master" target="_blank"id="lianjie1">更新日志</a></td>
        <td align="center"><a href="http://so.byr.wiki/" target="_blank"id="lianjie">全能搜索</a></td>
        <td align="center"><a href="http://720yun.com/t/e1f2exb8ayi" target="_blank"id="lianjie">全景北邮</a></td>
        <td align="center"><a href="https://zhuanlan.zhihu.com/p/22728795" target="_blank"id="lianjie">网站特色</a></td>
        <td align="center"><a href="https://github.com/byrwiki/byrwiki.github.io/wiki/%E4%BD%BF%E7%94%A8%E5%B8%AE%E5%8A%A9" target="_blank"id="lianjie">使用帮助</a></td>
        <td align="center"><a href="http://byr-navi.com" target="_blank"id="lianjie">新版导航</a></td>
        <td align="center"><a href="https://zhuanlan.zhihu.com/xiaxiaozheng" target="_blank"id="lianjie">知乎专栏</a></td>
      </tr>
		</thead>		
	</table>					
</table> -->

</div>

  <!--作者：i@zhangxingqiu.cn
        时间：2016-10-03
        描述：当前时间显示代码-->


<ul class="nav nav-tabs" ">
  <div id="footer">    
  <center>
  	 	  
  	<div id="jnkc" style="color:#8B8378">

      <script>setInterval("jnkc.innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);
      </script>
      
  	</div>
  	
  	<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1271920795'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/z_stat.php%3Fid%3D1271920795%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));</script>
  	<p></p><p></p>
  	<a style="color:#8B8378" target="_blank">Powered by byr.wiki</a>
  	
  	
  	
  </center>
  </div>
</ul>

 <!--谷歌统计代码 -->
 
  
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-72788532-6', 'auto');
  ga('send', 'pageview');
</script>


<script>
    var xlm_wid='12267';
    var xlm_url='https://www.xianliao.me/';
</script>
<script type='text/javascript' charset='UTF-8' src='https://www.xianliao.me/embed.js'></script>



</body>


<!--
	作者：i@zhangxingqiu.cn
	时间：2016-10-20
	描述：搜索完整代码
-->


  <script charset="gbk" src="assets/js/baidu.js"></script>
  
   
  <script>
    var sAddress=document.getElementsByTagName("form")[0];
    var sInfor=document.getElementById("search");
    var sBaidu=document.getElementById("baidu");
    var sGoogle=document.getElementById("google");
    var sGoogle1=document.getElementById("google1");
    var sjd=document.getElementById("jd");
    var stianmao=document.getElementById("tianmao");
    var staobao=document.getElementById("taobao");
    var sWeixin=document.getElementById("weixin");
    var sZhihu=document.getElementById("zhihu");
    var sweibo=document.getElementById("weibo");
    var sdouban=document.getElementById("douban");
    var sziyuan=document.getElementById("ziyuan");
    var sditu=document.getElementById("ditu");
    var squzhuanpan=document.getElementById("quzhuanpan");
     

    //百度
    sBaidu.onclick=function(){
      sAddress.action="https://www.baidu.com/s";
      sInfor.name="wd";
    }
    //Google
    sGoogle.onclick=function(){
      sAddress.action="http://www.google.com/search";
      sInfor.name="q";
    };
    
    //Google镜像  2017 年 2 月 11 日 更换
   
    $('#sougou').click(function() {
      var query = $('#search').val();
      if ( query ) {        window.open("https://www.sogou.com/web?query=" + query , "_blank");
        return false;
      
      };
    });
    
    
    //京东（已修复）在移动端访问会跳出两次窗口（已修复）
   
    $('#jd').click(function() {
      var query = $('#search').val();
      if ( query ) {
        window.open("http://search.jd.com/Search?enc=utf-8&keyword=" + query, "_blank");
        return false;
      };
    });


    //天猫  搜索需求下 暂时下架
//  stianmao.onclick=function(){
//    sAddress.action="https://list.tmall.com/search_product.htm?";
//    sInfor.name="q";
//    //sInfor.type="enc=utf-8";
//  }
    
    //淘宝
    staobao.onclick=function(){
      sAddress.action="https://s.taobao.com/search?";
      sInfor.name="q";
    }
    
      //微信  恢复上线
     $('#weixin').click(function() {
      var query = $('#search').val();
      if ( query ) {
        window.open("http://weixin.sogou.com/weixin?type=2&query=" + query + "&ie=utf8", "_blank");
        return false;
      
      };
    });

    //知乎
    sZhihu.onclick=function(){
      sAddress.action="https://www.zhihu.com/search";
      sInfor.name="q";
      sInfor.type="question";
    }
//    //微博 （检索异常）
//    sweibo.onclick=function(){
//      sAddress.action="http://s.weibo.com/weibo/?";
//      //sInfor.name="q";
//      //sInfor.type="question";
//    }
    $('#weibo').click(function() {
      var query = $('#search').val();
      if ( query ) {
        window.open("http://s.weibo.com/weibo/" + query, "_blank");
        return false;
      };
    });

    //豆瓣
    sdouban.onclick=function(){
      sAddress.action="https://www.douban.com/search?";
      sInfor.name="q";
      //sInfor.type="question";
    }
        
     //改用网易云音乐检索 移动端检索出现异常
     
//  $('#gequ').click(function() {
//    var query = $('#search').val();
//    if ( query ) {
//      window.open("http://music.163.com/#/search/m/?s=" + query + "&type=1", "_blank");
//      return false;
//    
//    };
//  });
    
  

// 胖次  20171120 因胖次官网出现故障，临时先更换为去转盘搜索 20171201 开始恢复为胖次搜索

 $('#panci').click(function() {
      var query = $('#search').val();
      if ( query ) {
        window.open("https://www.panc.cc/s/" + query + "/td_0", "_blank");
        return false;
      
      };
    });


// 20171201 新增去转盘网作为网盘搜索入口 

 $('#quzhuanpan').click(function() {
      var query = $('#search').val();
      if ( query ) {
        window.open("http://www.quzhuanpan.com/source/search.action?q=" + query + "&currentPage=1", "_blank");
        return false;
      
      };
    });





    //新增疯狂影视搜索入口
  
$('#ziyuan').click(function() {
      var query = $('#search').val();
      if ( query ) {
        window.open("http://ifkdy.com/?q=" + query + "&p=1", "_blank");
        return false;
      
      };
    });


// 地图搜索

 $('#ditu').click(function() {
      var query = $('#search').val();
      if ( query ) {
        window.open("http://ditu.amap.com/search?query=" + query + " ", "_blank");
        return false;
      
      };
    });




  </script>
  <link type="text/css" rel="stylesheet" href="http://yun.zhangxingqiu.cn/byrwiki/myRewards.css">
    <!-- <script>
        window.tctipConfig = {
        	//最上面的文字
            headText: "欢迎访问北邮人导航",
            //侧边栏文本
            siderText: "公告栏",
            //侧边栏文本高度调整
            siderTextTop: "-72px",
            //侧边栏背景颜色
            siderBgcolor: "#323d45",
            //整个侧边栏的高度设置可以px，em，或百分比
            siderTop:"118px",
            //底部文字
            buttomText:"点此关注作者知乎",
                      buttomLink:"https://www.zhihu.com/people/xiaxiaozheng/activities",
 
            
            list:{
                notice: {icon: "http://yun.zhangxingqiu.cn/byrwiki/tip.png", name:"网站公告", className:"myR-on", text:'北邮人导航自2016年9月23日上线至2017年9月23日，累计页面浏览已超 200W，累计访问用户超 100W，感谢一路有你！'},
                              
               alipay: {icon: "http://yun.zhangxingqiu.cn/byrwiki/alipay.png", name:"打赏我们", desc: "震惊！北邮人导航站长生活潦倒，只能靠求赏为生", qrimg: "http://yun.zhangxingqiu.cn/byrwiki/alipay.jpg"},
                weixin: {icon: "http://yun.zhangxingqiu.cn/byrwiki/weixin.png", name:"微信公号", desc: "关注作者个人微信公众号【小正说事】", qrimg: "http://yun.zhangxingqiu.cn/byrwiki/gonghao.jpg"}	
                             
                                
            }
        };
    </script>
    <script src="http://yun.zhangxingqiu.cn/byrwiki/tctip.min.js"></script>
 -->
  
  



</html>
