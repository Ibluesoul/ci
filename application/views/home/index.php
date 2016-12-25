<link href="<?=base_url()?>public/css/base1.css" rel="stylesheet">
<link href="<?=base_url()?>public/css/index1.css" rel="stylesheet">
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
            <?php foreach($all['list'] as $k =>$v): ?>
            <div class="blogs">
                <figure><a href='<?=site_url('blog/index')?>?id<?=$v->id?>' class='preview'><img src='<?=base_url('public')?>/images/s<?=rand(1,18)?>.jpg'/></a> </figure>
                <h3><a href="<?=site_url('blog/index')?>?id<?=$v->id?>"><?=$v->title?></a></h3>
                <p>此时此刻，我的内心是崩溃的。本来已经在回学校的路上，但是我却没赶上大巴，导致我滞留在候车室。...</p>
                <ul>
                    <p class="autor"> <span class="dtime f_l"><?=$v->created_at?></span> <span class="viewnum f_l">浏览（<?=$v->hits?>）</span> </p>
                </ul>
            </div>
            <?php endforeach; ?>
            <?=$all['page_link']?>
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
                        <?php foreach($hits as $k => $v): ?>
                            <li><a href="<?=site_url('blog/index')?>?id=<?=$v->id?>" target="_blank"><?=$v->title?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div  class="bd bd-news">
                    <ul>
                        <?php foreach($new as $k => $v): ?>
                            <li><a href="<?=site_url('blog/index')?>?id=<?=$v->id?>" target="_blank"><?=$v->title?></a></li>
                        <?php endforeach; ?>

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
