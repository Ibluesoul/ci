<link href="<?=base_url()?>public/css/base.css" rel="stylesheet">
<link href="<?=base_url()?>public/css/new.css" rel="stylesheet">
<style>
    .index_about{
        min-height:1000px;
        width:1030px;
    }
</style>
<!--header-->

<article class="blogs">
    <h1 class="t_nav">
        <span>您当前的位置：<a href='<?=site_url('home/index')?>'>首页</a> > <a href='javascript:;'>博客</a>  >
        </span>
        <a href="<?=site_url('home/index')?>" class="n1">网站首页</a>
    </h1>
    <div class="index_about">
        <h2 class="c_titile"><?=$article->title?></h2>
        <p class="box_c">
            <span class="d_time">发布时间：<?=$article->created_at?></span>
            <span>浏览次数：<?=$article->hits+1?></span>
        </span>
        </p>

        <ul class="infos">
            <?=$article->content?>
        </ul>
        <ul class="pagelist">

        </ul>
        <div class="keybq">

        </div>


        <div class="nextinfo">
            <p>上一篇：<?=$upArticle==null?'没有了':'<a href='.site_url('blog/index').'?id='.$upArticle->id.'>'.$upArticle->title.'</a>'?> </p>
            <p>下一篇：<?=$downArticle==null?'没有了':'<a href='.site_url('blog/index').'?id='.$downArticle->id.'>'.$downArticle->title.'</a>'?> </p>
        </div>
    </div>

</article>