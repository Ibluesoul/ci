<!--banner广告-->
<div class="banner">
    <section class="box">
        <ul class="texts">
            <p>一个人行走的范围，就是他的世界。</p>
            <p>为自己掘一个坟墓来葬心，红尘一梦，不再追寻。</p>
            <p>"来来来，握紧我的手，带你去看这世界"。</p>
            <p>生命匆匆，跟随心态，想去即去，想留则留。只为不枉自己 </p>
        </ul>
        <div class="avatar"><a href="/"><span>个人博客</span></a></div>
    </section>
</div>
<!--banner广告-->

<!--article主体-->
<article>

    <!--l_box-left开始-->
    <div class="l_box f_l">
        <!--topnews内容-->
        <div class="topnews">
            <h2> <b>全部</b>博客 </h2>
            <div class="blogs">
                <figure><a href='/' class='preview'><img src='images/1447642404150745-lp.png'/></a> </figure>
                <h3><a href="/">给我一个答案</a></h3>
                <p>此时此刻，我的内心是崩溃的。本来已经在回学校的路上，但是我却没赶上大巴，导致我滞留在候车室。...</p>
                <ul>
                    <p class="autor"> <span class="lm f_l"><a href="/">忙里偷闲</a></span> <span class="dtime f_l">2015-11-16</span> <span class="viewnum f_l">浏览（88）</span> <span class="pingl f_l">评论（<a>0</a>）</span> </p>
                </ul>
            </div>
            <div class="blogs">
                <figure><a href='/' class='preview'><img src='images/1447642096207160-lp.png'/></a> </figure>
                <h3><a href="/">生活是什么？</a></h3>
                <p>生活是什么？有人说，生活生活，就是生下来活下去，也有人说，生容易，活容易，生活不容易。...</p>
                <ul>
                    <p class="autor"> <span class="lm f_l"><a href="/">享受慢活</a></span> <span class="dtime f_l">2015-11-16</span> <span class="viewnum f_l">浏览（57）</span> <span class="pingl f_l">评论（<a>0</a>）</span> </p>
                </ul>
            </div>
            <div class="blogs">
                <figure><a href='/' class='preview'><img src='images/1447641406565685-lp.jpg'/></a> </figure>
                <h3><a href="/">那些不是事</a></h3>
                <p>人生，原本就该这样。再大的事，无非是个经历而己。明天的太阳照样升起，就像罗俊杰个人博客​的时候水来土掩，兵来将挡。任何事情都会成为过去，只要有好的心态，就可以面对人生的...</p>
                <ul>
                    <p class="autor"> <span class="lm f_l"><a href="/">慢阅读</a></span> <span class="dtime f_l">2015-11-16</span> <span class="viewnum f_l">浏览（123）</span> <span class="pingl f_l">评论（<a>0</a>）</span> </p>
                </ul>
            </div>
            <div class="blogs">
                <figure><a href='/' class='preview'><img src='images/1442642178239101-lp.jpg'/></a> </figure>
                <h3><a href="/">路·过-喜欢在路上</a></h3>
                <p>注定，有些路，只能一个人走；有些事，只能一个人扛。因为我喜欢在路上！走在林间小道上，一个人，晃晃悠悠，无所适从，看着那些在风中微微呻吟着的落叶，远远望去，像一群疲...</p>
                <ul>
                    <p class="autor"> <span class="lm f_l"><a href="/">悠客</a></span> <span class="dtime f_l">2015-09-19</span> <span class="viewnum f_l">浏览（109）</span> <span class="pingl f_l">评论（<a>0</a>）</span> </p>
                </ul>
            </div>
            <div class="blogs">
                <figure><a href='/' class='preview'><img src='images/1442641275653897-lp.jpg'/></a> </figure>
                <h3><a href="/">人生因分享,人生因分享的风景</a></h3>
                <p>人生的风景，该以怎样的笔墨去形容，以怎样的目光去审视，以怎样的灵魂去容纳？人生因分享，而永远都是那般的美好：生命中本就有许多无可奈何的悲伤和痛苦。路本是同样的路，...</p>
                <ul>
                    <p class="autor"> <span class="lm f_l"><a href="/">慢阅读</a></span> <span class="dtime f_l">2015-09-19</span> <span class="viewnum f_l">浏览（178）</span> <span class="pingl f_l">评论（<a>0</a>）</span> </p>
                </ul>
            </div>

            <!--topnews内容-->


        </div>
    </div>
    <!--l_box-left结束-->

    <div class="r_box f_r">

        <!--天气-->
        <div class="weather">
            <iframe width="250" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=1"></iframe>
        </div>
        <div class="moreSelect" id="lp_right_select">
            <script>
                window.onload = function ()
                {
                    var oLi = document.getElementById("tab").getElementsByTagName("li");
                    var oUl = document.getElementById("ms-main").getElementsByTagName("div");

                    for(var i = 0; i < oLi.length; i++)
                    {
                        oLi[i].index = i;
                        oLi[i].onmouseover = function ()
                        {
                            for(var n = 0; n < oLi.length; n++) oLi[n].className="";
                            this.className = "cur";
                            for(var n = 0; n < oUl.length; n++) oUl[n].style.display = "none";
                            oUl[this.index].style.display = "block"
                        }
                    }
                }
            </script>
            <div class="ms-top">
                <ul class="hd" id="tab">
                    <li class="cur"><a href="/">点击排行</a></li>
                    <li><a href="/">最新文章</a></li>
                </ul>
            </div>
            <div class="ms-main" id="ms-main">
                <div style="display: block;" class="bd bd-news" >
                    <ul>
                        <li><a href="/" target="_blank">分享一个炫酷利用纯CSS3实现的手风琴</a></li>
                        <li><a href="/" target="_blank">两只蜗牛艰难又浪漫的一吻</a></li>
                        <li><a href="/" target="_blank">每每接到新项目，都感觉困难，踏出</a></li>
                        <li><a href="/" target="_blank">春暖花开-走走停停-发现美</a></li>
                        <li><a href="/" target="_blank">Ui Parade免费的UI在线设计工具</a></li>
                        <li><a href="/" target="_blank">记得秋天吗</a></li>
                    </ul>
                </div>
                <div  class="bd bd-news">
                    <ul>
                        <li><a href="/" target="_blank">给我一个答案</a></li>
                        <li><a href="/" target="_blank">生活是什么？</a></li>
                        <li><a href="/" target="_blank">那些不是事</a></li>
                        <li><a href="/" target="_blank">路·过-喜欢在路上</a></li>
                        <li><a href="/" target="_blank">人生因分享,人生因分享的风景</a></li>
                        <li><a href="/" target="_blank">跟着自己的心走</a></li>
                    </ul>
                </div>
            </div>
            <!--ms-main end -->
        </div>
        <!--切换卡 moreSelect end -->

    </div>
    <!--r_box end -->
</article>
<!--article主体结束-->
