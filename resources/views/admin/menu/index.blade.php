@include('admin.header')
<body>
<div id="wrapper">
@include('admin.left')
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
    <div id="page-wrapper">
        <div class="graphs">
            <div class="row form-group col-md-12"><button class="btn btn-info add">添加</button></div>
            <div id="menu-list">
                <div class="row form-group">
                    <div class="col-md-3">菜单栏</div>
                    <div class="col-md-3">地址</div>
                    <div class="col-md-3">是否显示</div>
                    <div class="col-md-3">操作</div>
                </div>
                @foreach($list as $vo)
                    <div class="row form-group">
                        <div class="col-md-3">
                           {{$vo->level}}{{$vo->name}}
                        </div>
                        <div class="col-md-3">{{$vo->url}}</div>
                        <div class="col-md-3">
                            @if($vo->is_show == 1)
                                <span class="text-info">显示</span>
                            @else
                                <span class="text-warning">不显示</span>
                            @endif
                        </div>
                        <div class="col-md-3" data-id="{{$vo->id}}" data-name="{{$vo->name}}" data-url="{{$vo->url}}" data-show="{{$vo->is_show}}" data-parent="{{$vo->parent_id}}">
                            <button class="btn btn-default edit">修改</button>
                            <button class="btn btn-danger del">删除</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- 修改 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    修改菜单栏
                </h4>
            </div>
            <div class="modal-body">
                <div class="clearfix">
                <div class="col-md-12 form-group">
                    <div class="col-md-3 text-right form_bar">名称:</div>
                    <div class="col-md-6"><input type="text" class="form-control" id="name" placeholder="请输入名称"></div>
                </div>
                <div class="col-md-12 form-group">
                    <div class="col-md-3 text-right form_bar">URL：</div>
                    <div class="col-md-6"><input type="text" class="form-control" id="url" placeholder="请输入名称"></div>
                </div>
                <div class="col-md-12 form-group">
                    <div class="col-md-3 text-right form_bar">是否显示：</div>
                    <div class="col-md-6">
                        <label><input type="radio" value="1" name="is_show">显示</label>
                        <label><input type="radio" value="0" name="is_show">不显示</label>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <div class="col-md-3 text-right form_bar">上一级：</div>
                    <div class="col-md-6">
                        <select style="width: 107px; height: 30px;" id="parentId">
                            <option value="0">顶级</option>
                            @foreach($parent as $vo)
                                <option value="{{$vo->id}}">{{$vo->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
                <button type="button" class="btn btn-primary" id="save-edit">
                    提交更改
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<!-- 添加 -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="addModalLabel">
                    修改菜单栏
                </h4>
            </div>
            <div class="modal-body">
                <div class="clearfix">
                    <div class="col-md-12 form-group">
                        <div class="col-md-3 text-right form_bar">名称:</div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="add_name" placeholder="请输入名称" required>
                        </div>
                    </div>
                    <div class="col-md-12 form-group">
                        <div class="col-md-3 text-right form_bar">URL：</div>
                        <div class="col-md-6"><input type="text" class="form-control" id="add_url" placeholder="请填写URL"></div>
                    </div>
                    <div class="col-md-12 form-group">
                        <div class="col-md-3 text-right form_bar">是否显示：</div>
                        <div class="col-md-6">
                            <label><input type="radio" value="1" name="add_is_show" checked>显示</label>
                            <label><input type="radio" value="0" name="add_is_show">不显示</label>
                        </div>
                    </div>
                    <div class="col-md-12 form-group">
                        <div class="col-md-3 text-right form_bar">上一级：</div>
                        <div class="col-md-6">
                            <select style="width: 107px; height: 30px;" id="add_parentId">
                                <option value="0">顶级</option>
                                @foreach($parent as $vo)
                                    <option value="{{$vo->id}}">{{$vo->name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
                <button type="button" class="btn btn-primary" id="save-add">
                    提交
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<!-- 添加end -->
</body>
<style>

</style>
<script>
    var id = 0;
    $('.edit').on('click',function () {
        $('#name').val($(this).parent().attr('data-name'));
        $('#url').val($(this).parent().attr('data-url'));
        id = $(this).parent().attr('data-id');
        var is_show = $(this).parent().attr('data-show');
        var parent = $(this).parent().attr('data-parent');
        if(is_show == 1){
            $('input[name=is_show]').eq(0).attr('checked',true);
        }else{
            $('input[name=is_show]').eq(1).attr('checked',true);
        }
        var len = $('#parentId').children().length;
        for(var i=0; i<len; i++){
            if($('#parentId').children().eq(i).val() == parent){
                $('#parentId').children().eq(i).attr('selected',true);
            }else{
                $('#parentId').children().eq(i).attr('selected',false);
            }
        }
        $('#myModal').modal();
        console.log(id);
    })
    
    $('#save-edit').on('click',function () {
        var name = $('#name').val();
        var url = $('#url').val();
        var is_show = $('input[name=is_show]:checked').val();
        var parent = $('#parentId').val();
        var ajaxData = {};
        ajaxData.name = name;
        ajaxData.url = url;
        ajaxData.is_show = is_show;
        ajaxData.parent_id = parent;
        ajaxData.id = id;

        if(id >= 0){
            swal({
                title: "Are you sure?",
                text: "确定修改吗",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "是的，我确定",
                closeOnConfirm: false,
                html: false
            }, function(){
                $.ajax({
                    url: '/admin/menu/editMenu',
                    data:ajaxData,
                    type: 'post',
                    dataType: 'json',
                    success: function (data) {
                        if(data.status == 0){
                            swal("提示!", "修改成功","success");
                            setTimeout(function() {
                                location.reload();
                            }, 500);
                        }else{
                            swal("提示!", data.errorMsg,"error");
                        }
                    },error:function () {
                        swal("提示!", "网络请求失败","error");
                    }

                });

            });
        }else{
            swal("提示!", "修改失败!", "error");
        }

    });
    
    $('.add').on('click',function () {
        $('#addModal').modal();
    });

    $('#save-add').on('click',function () {
        var name = $('#add_name').val();
        var url = $('#add_url').val();
        var parent = $('#add_parentId').val();
        var is_show = $('input[name=add_is_show]:checked').val();
        if(name.length < 1){
            swal('提示','请填写名称','warning');
            return;
        }
        if(url.length < 1){
            swal('提示','请填写URL','warning');
            return;
        }
        var ajaxData = {};
        ajaxData.name = name;
        ajaxData.url = url;
        ajaxData.is_show = is_show;
        ajaxData.parent_id = parent;
        swal({
            title: "Are you sure?",
            text: "确定添加吗",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "是的，我确定",
            closeOnConfirm: false,
            html: false
        }, function(){
            $.ajax({
                url: '/admin/menu/addMenu',
                data:ajaxData,
                type: 'post',
                dataType: 'json',
                success: function (data) {
                    if(data.status == 0){
                        swal("提示!", "添加成功","success");
                        setTimeout(function() {
                            location.reload();
                        }, 500);
                    }else{
                        swal("提示!", data.errorMsg,"error");
                    }
                },error:function () {
                    swal("提示!", "网络请求失败","error");
                }

            });

        });
    });

    $('.del').on('click',function () {
        var id = $(this).parent().attr('data-id');
        if(id >= 0){
            swal({
                title: "Are you sure?",
                text: "确定删除吗,将连他的子目录也会删除",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "是的，我确定",
                closeOnConfirm: false,
                html: false
            }, function(){
                $.ajax({
                    url: '/admin/menu/delMenu',
                    data:{id:id},
                    type: 'post',
                    dataType: 'json',
                    success: function (data) {
                        if(data.status == 0){
                            swal("提示!", "删除成功","success");
                            setTimeout(function() {
                                location.reload();
                            }, 500);
                        }else{
                            swal("提示!", data.errorMsg,"error");
                        }
                    },error:function () {
                        swal("提示!", "网络请求失败","error");
                    }

                });

            });
        }else{
            swal("提示!", "删除失败!", "error");
        }
    });

</script>
</html>