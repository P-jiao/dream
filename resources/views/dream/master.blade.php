<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>梦想云——@yield('title')</title>
    <meta name="description" content="Admin Platform" />
    <meta name="keywords" content="Admin Platform" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" class="ui" href="/semantic/semantic.min.css">
    <script src="/javascript/jquery-2.1.1.min.js"></script>
    <script src="/semantic/semantic.min.js"></script>
    <link rel="stylesheet" href="/css/menu.css" type="text/css" media="screen" />
<style>
body{
  background-color: #ffffff;
}
body.pushable{
  background-color: #ffffff!important;
}

.dropdown{
    z-index: 9999;
}
.top.menu{
    background-color: #fff !important;
    height: 64px;
    border-bottom: 1px solid #c0c0c0 !important;
}
.logo img{
    height:50px;
    padding-top: 10px;
}
.top.menu .launch{
     margin:10px 0 0 10px;
}
.left.sidebar{
    top:64px;
}
.top.menu .userinfo{
    padding:5px !important;
    margin:0px 20px 0px 0px;
    width:150px;
    cursor: pointer;
}
.top.menu .userinfo img{
    height:50px;
}
#content{
  margin-top:64px;
}
.bottom.menu{
    min-height: 1em;
}
.bottom.menu .footer{
    width:100%;
    border-radius: 0px;
    padding:0;
}
.margin-side{
  margin-right:85px ;
}
.top_title{
    font-family: 'Microsoft YaHei', 'SimSun', 'Arial';
    font-size: 30px;
    color: #fff;
    padding-top: 21px;
    padding-left: 50px;
}
.box_controll{
    box-shadow: 0 0px 0px 0 rgba(34,36,38,.15),0 0 0 0px rgba(34,36,38,.15)!important;
}

.ui.header{
    padding-right: 100px;
    margin-top: 13px;
}
.add.user.icon{
         width: 20px;
         color: #fff;
         position: absolute; top: 12px;right: 157px;
}
.regist{
   font-size: 20px;
   color: #fff;
   margin-top: 12px;
}
.massage{
    color: red;
    font-family: "Microsoft YaHei", "SimHei", "SimSun";
    padding-top: 50px;
    padding-left: 200px;
    font-size: 18px;
    line-height: 10px;
}
@yield('style')
</style>
<script>
    $(function(){
    $('.top.sidebar').sidebar({
      closable:false,
      dimPage:false,
      transition:'push'
    });

    $('.left.sidebar').sidebar({
      closable:false,
      dimPage:false,
      transition:'push'
    });

    $(".launch").click(function(){
        $('.left.sidebar').sidebar('toggle');
        if($('#content').hasClass('margin-side'))
            $('#content').removeClass('margin-side');
        else $('#content').addClass('margin-side');
    });

    $('.launch').trigger("click");

    $('.userinfo').popup({
        inline   : true,
        hoverable: true,
        position : 'bottom left',
        delay: {
            show: 300,
            hide: 800
        }
    });
    $('.dropdown').dropdown();


    $('.ui.accordion')
      .accordion();
    });
    $('.ui.modal')
    .modal('show')
    ;
</script>
</head>
<body>
<div  class="ui top fixed secondary menu" style="background-color: #00719b !important;">
    <?php session_start(); ?>
    <a class="item launch">
        <i class="ui big content icon"></i>
    </a>
    <a class="logo">
            <img src="/images/mxlogo.png" />
    </a>
<div class="top_title">梦想云——在线服务管理品牌</div>

    <div class="right  menu">
        <div class="ui header userinfo">
            <img class="ui circular image" src="/images/default_user.jpg">
            <div class="content">
                 <?php
                     if($_SESSION['username']){
                        echo $_SESSION['username'];
                     }else{
                        echo "请登录";
                     }
                ?>
            </div>
        </div>

        <div class="ui popup ">
            <div class="ui teal inverted vertical icon menu">
                <a class="icon item" href="/admin/user/profile/1"><i class="user icon"></i>用户信息</a>
                <a class="icon item" href="/auth/logout"><i class="key icon"></i>退出</a>
            </div>
        </div>
    </div>
</div>


<div class="ui left  vertical labeled icon sidebar menu">

         <div class="ui left teal pointing  link item" style="width: 170px;">
                  <div class="ui styled accordion box_controll" >
                          <div class="title">
                             {{-- <i class="dropdown icon"></i>--}}
                              <i class="database icon"></i>
                              基础档案
                          </div>
                          <div class="content">
                              <div class="accordion box_controll">
                                  <div class="title">
                                     {{-- <i class="dropdown icon"></i>--}}
                                      机构人员
                                  </div>
                                  <div class="content">
                                     <p><a href="/dream/setting"><i class="list layout icon"></i>部门设置</a></p>
                                     <p><a href="/dream/file"><i class="newspaper icon"></i>人员档案</a></p>
                                     <p><a href="/dream/category"><i class="sitemap icon"></i>人员类别</a></p>
                                     <p><a href="/dream/title"><i class="student icon"></i>职称</a></p>
                                     <p><a href="/dream/property"><i class="sitemap icon"></i>人员属性</a></p>

                                  </div>
                                  <div class="title">
                                    {{--  <i class="dropdown icon"></i>--}}
                                      仓库存货
                                  </div>
                                  <div class="content">
                                     <p><a href="/dream/setup"><i class="home icon"></i>仓库设置</a></p>
                                     <p><a href="/dream/conversion"><i class="leaf icon"></i>单位换算</a></p>
                                     <p><a href="/dream/inventory"><i class="sitemap icon"></i>存货分类</a></p>
                                  </div>
                                  <div class="title">
                                      {{--<i class="dropdown icon"></i>--}}
                                      往来单位
                                  </div>
                                  <div class="content">
                                     <p><a href="/dream/contact"><i class="retweet icon"></i>往来单位</a></p>
                                     <p><a href="/dream/classify"><i class="sitemap icon"></i>单位分类</a></p>
                                     <p><a href="/dream/locale"><i class="leaf icon"></i>地区设置</a></p>
                                  </div>
                                  <div class="title">
                                        {{-- <i class="dropdown icon"></i>--}}
                                       其他设置
                                  </div>
                                  <div class="content">
                                      <p><a href="/dream/shipping"><i class="shipping icon"></i>发运方式</a></p>
                                      <p><a href="/dream/vocabulary"><i class="leaf icon"></i>常用词汇</a></p>
                                  </div>
                              </div>
                          </div>
                  </div>
         </div>

         <div class="ui left teal pointing  link item" style="width: 170px;">
                  <div class="ui styled accordion box_controll" >
                          <div class="title">
                             {{-- <i class="dropdown icon"></i>--}}
                              <i class="shop icon"></i>
                             采购管理
                          </div>
                          <div class="content">
                              <div class="accordion box_controll">
                                  <div class="title">
                                     {{-- <i class="dropdown icon"></i>--}}
                                      设置
                                  </div>
                                  <div class="content">
                                     <p><a href="/dream/type"><i class="sitemap icon"></i>采购类型</a></p>

                                  </div>
                                  <div class="title">
                                    {{--  <i class="dropdown icon"></i>--}}
                                      采购业务
                                  </div>
                                  <div class="content">
                                     <p><a href="/dream/basket"><i class="file text icon"></i>进货单</a></p>
                                  </div>
                              </div>
                          </div>
                  </div>
         </div>

         <div class="ui left teal pointing  link item" style="width: 170px;">
                   <div class="ui styled accordion box_controll" >
                          <div class="title">
                             {{-- <i class="dropdown icon"></i>--}}
                              <i class="dollar icon"></i>
                             销售管理
                          </div>
                          <div class="content">
                                 <div class="accordion box_controll">
                                     <div class="title">
                                         {{-- <i class="dropdown icon"></i>--}}
                                          设置
                                     </div>
                                     <div class="content">
                                         <p><a href="/dream/stype"><i class="sitemap icon"></i>销售类型</a></p>

                                     </div>
                                     <div class="title">
                                        {{--  <i class="dropdown icon"></i>--}}
                                          销售业务
                                     </div>
                                     <div class="content">
                                     <p><a href="/dream/sorder"><i class="file text icon"></i>销售单</a></p>
                                     </div>
                                 </div>
                          </div>
                   </div>
         </div>
</div>


<div id="content" class="pusher">
                  @if(Session::has('message'))
                 <p class="massage">{{Session::get('message')}}</p>
                 @endif
  @yield('content')
</div>



<div  class="ui bottom fixed menu ">
    <div class="ui center aligned segment footer" style="background-color: #00719b">
       copyright@2015梦想云
    </div>
</div>
</body>
</html>


