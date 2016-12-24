<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>查看博客</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">主页</a>
            </li>
            <li>
                <a class="f">博客</a>
            </li>
            <li>
                <strong class="s">查看博客</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>所有的博客文章列表</h5>
                    <div class="ibox-tools">

                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" placeholder="请输入标题" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th></th>
                                <th width=700px">标题</th>
                                <th>创建日期</th>
                                <th>更新日期</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($list as $k =>$v): ?>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="i-checks" name="input[]">
                                    </td>
                                    <td><?=$v->title?></td>
                                    <td><?=$v->created_at?></td>
                                    <td><?=$v->updated_at=='0000-00-00 00:00:00'?'未更新':$v->updated_at?></td>
                                    <td><a href="<?=site_url('admin/blog/update').'?id='.$v->id?>">修改</a>|<a href="javascript:;" id="del" d-id="<?=$v->id?>" data-toggle="modal" data-target="#myModal4">删除</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <!--<i class="fa fa-clock-o modal-icon"></i>-->
                <h4 class="modal-title">确认删除吗?删除后无法恢复</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="submit">确认</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });


    });
</script>

<script>
    //把article的id传到模态框的确认按钮里
    $(document).on('click','#del',function(){
        $('#submit').attr('d-id',$(this).attr('d-id'));
    });

    //点击确认后ajax删除,因为偷懒所以写成成功后刷新页面
    $(document).on('click','#submit',function(){
        var id = $(this).attr('d-id');
        $.ajax({
            url:'<?=site_url('admin/blog/del')?>',
            type:'post',
            data:{id:id},
            success:function(data){
                if(data.code=='400'){
                    alert('请刷新页面重试');
                }else if(data.code=='200'){
                    console.log(data.result);
                    if(data.result){
                        alert('删除成功');
                        location.reload();//页面重新加载
                    }else{
                        alert('系统错误');
                    }
                }
            }
        })
    });
</script>