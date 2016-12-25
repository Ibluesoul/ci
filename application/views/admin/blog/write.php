<style>
    .note-editable{
        min-height: 300px;
    }
</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>博客</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?=site_url('admin/home/index')?>">主页</a>
            </li>
            <li>
                <a class="f">博客</a>
            </li>
            <li>
                <strong class="s">写博客</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content">

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>写点什么吧</h5>
                    <div class="ibox-tools">
                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" id="submit"><strong>保 存</strong>
                        </button>
                    </div>
                </div>

                    <div class="ibox  float-e-margins" style="margin-bottom: auto">
                        <div class="ibox-title ">
                            <input type="text" placeholder="请写个标题" id="title" class="form-control " style="width: 600px; margin-bottom: 20px;">

                            <textarea id="abstract" class="form-control" placeholder="请写点详细描述"  style="width: 600px; " ></textarea> <span class="help-block m-b-none"></span>
                        </div>

                    </div>



                <div class="ibox-content">

                    <div class="summernote">


                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

<!-- SUMMERNOTE -->
<script src="<?=base_url()?>public/admin/js/plugins/summernote/summernote.min.js"></script>
<script src="<?=base_url()?>public/admin/js/plugins/summernote/summernote-zh-CN.js"></script>

<script>
    $(document).ready(function () {

        $('.summernote').summernote({
            lang: 'zh-CN'
        });

        $('#submit').on('click',write);

    });
    var edit = function () {
        $("#eg").addClass("no-padding");
        $('.click2edit').summernote({
            lang: 'zh-CN',
            focus: true
        });
    };
    var save = function () {
        $("#eg").removeClass("no-padding");
        var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
        $('.click2edit').destroy();
    };
</script>

<script>
    //写入博客数据的js
    function write(){
        var title = $('#title').val();
        var content = $('.note-editable').html();
        var abstract = $('#abstract').val();
        $.ajax({
            url:"<?=site_url('admin/blog/ajax')?>",
            type:'post',
            dataType:'json',
            data:{title: title, abstract:abstract, content:content},
            success:function(data){
                if(data.code=='400'){
                    alert('请填写完整');
                }else if(data.code=='200'){
                    if(data.result){
                        alert('保存成功');
                        location.href='<?=site_url('admin/blog/index')?>';//页面跳转到查看博客
                    }else{
                        alert('数据库写入错误,请重试');
                    }
                }
            }
        })
    }
</script>