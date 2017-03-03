<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Modern</a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
            <ul class="dropdown-menu">
                <li class="dropdown-menu-header">
                    <strong>Messages</strong>
                    <div class="progress thin">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                </li>
                <li class="avatar">
                    <a href="#">
                        <img src="{{asset('img/admin/1.png')}}" alt=""/>
                        <div>New message</div>
                        <small>1 minute ago</small>
                        <span class="label label-info">NEW</span>
                    </a>
                </li>
                <li class="avatar">
                    <a href="#">
                        <img src="{{asset('img/admin/2.png')}}" alt=""/>
                        <div>New message</div>
                        <small>1 minute ago</small>
                        <span class="label label-info">NEW</span>
                    </a>
                </li>
                <li class="avatar">
                    <a href="#">
                        <img src="{{asset('img/admin/3.png')}}" alt=""/>
                        <div>New message</div>
                        <small>1 minute ago</small>
                    </a>
                </li>
                <li class="avatar">
                    <a href="#">
                        <img src="{{asset('img/admin/4.png')}}" alt=""/>
                        <div>New message</div>
                        <small>1 minute ago</small>
                    </a>
                </li>
                <li class="avatar">
                    <a href="#">
                        <img src="{{asset('img/admin/5.png')}}" alt=""/>
                        <div>New message</div>
                        <small>1 minute ago</small>
                    </a>
                </li>
                <li class="avatar">
                    <a href="#">
                        <img src="{{asset('img/admin/pic1.png')}}" alt=""/>
                        <div>New message</div>
                        <small>1 minute ago</small>
                    </a>
                </li>
                <li class="dropdown-menu-footer text-center">
                    <a href="#">View all messages</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="{{asset('img/admin/1.png')}}"><span class="badge">9</span></a>
            <ul class="dropdown-menu">
                <li class="dropdown-menu-header text-center">
                    <strong>Account</strong>
                </li>
                <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
                <li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
                <li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
                <li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
                <li class="dropdown-menu-header text-center">
                    <strong>Settings</strong>
                </li>
                <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
                <li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
                <li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
                <li class="divider"></li>
                <li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
                <li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
    <form class="navbar-form navbar-right">
        <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
    </form>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <div class="panel  panel-success">
                        <div class="panel-heading">
                            <a href="/admin"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </div>
                   </div>
                </li>
                <li>
                    <div class="panel  panel-success">
                        <div class="panel-heading">
                            <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion"><i class="fa fa-laptop nav_icon"></i>Layouts<span class="fa arrow"></span></a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <ul class="nav nav-second-level panel-body">
                                <li>
                                    <a href="/admin/index/grids">Grid System</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="panel  panel-success">
                        <div class="panel-heading">
                            <a href="#collapseTwo" data-toggle="collapse" data-parent="#accordion"><i class="fa fa-indent nav_icon"></i>Menu Levels<span class="fa arrow"></span></a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <ul class="nav nav-second-level panel-body">
                                <li>
                                    <a href="/admin/index/graphs">Graphs</a>
                                </li>
                                <li>
                                    <a href="/admin/index/typography">Typography</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <div class="panel  panel-success">
                        <div class="panel-heading">
                            <a href="#collapseThree" data-toggle="collapse" data-parent="#accordion"><i class="fa fa-envelope nav_icon"></i>Mailbox<span class="fa arrow"></span></a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <ul class="nav nav-second-level panel-body">
                                <li>
                                    <a href="/admin/index/inbox">Inbox</a>
                                </li>
                                <li>
                                    <a href="/admin/index/compose">Compose email</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <div class="panel  panel-success">
                        <div class="panel-heading">
                            <a href="/admin/index/widgets"><i class="fa fa-flask nav_icon"></i>Widgets</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="panel  panel-success">
                        <div class="panel-heading">
                            <a href="#collapseFour" data-toggle="collapse" data-parent="#accordion"><i class="fa fa-check-square-o nav_icon"></i>Forms<span class="fa arrow"></span></a>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <ul class="nav nav-second-level panel-body">
                                <li>
                                    <a href="/admin/index/forms">Basic Forms</a>
                                </li>
                                <li>
                                    <a href="/admin/index/validation">Validation</a>
                                </li>
                            </ul>
                            </div>
                        </div>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <div class="panel  panel-success">
                        <div class="panel-heading">
                            <a href="#collapseFive" data-toggle="collapse" data-parent="#accordion"><i class="fa fa-table nav_icon"></i>Tables<span class="fa arrow"></span></a>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <ul class="nav nav-second-level panel-body">
                                <li>
                                    <a href="/admin/index/basic_tables">Basic Tables</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <div class="panel  panel-success">
                        <div class="panel-heading">
                            <a href="#collapseSix" data-toggle="collapse" data-parent="#accordion" ><i class="fa fa-sitemap fa-fw nav_icon"></i>Css<span class="fa arrow"></span></a>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <ul class="nav nav-second-level panel-body">
                                <li>
                                    <a href="/admin/index/media">Media</a>
                                </li>
                                <li>
                                    <a href="/admin/login">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.nav-second-level -->
                </li>
                <li v-for="item in items">
                    <div class="panel  panel-success">
                        <div class="panel-heading">
                            <a v-bind:href ="item.url" v-if="item.childer == false">
                        <i class="fa nav_icon fa-sitemap"></i>@{{item.name}}</a>
                        <a v-bind:href ="item.collapse " data-toggle="collapse" data-parent="#accordion"  v-else>
                            <i class="fa nav_icon fa-sitemap"></i>@{{item.name}}<span class="fa arrow"></span></a>
                        </div>
                        <div v-bind:id="item.collapseId" class="panel-collapse collapse">
                            <ul class="nav nav-second-level panel-body">
                        <li v-for="childer in item.childer">
                            <a v-bind:href="childer.url"> @{{childer.name}}</a>
                        </li>
                    </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
    {{--<script src="{{mix('js/admin/metisMenu.js')}}"></script>--}}
<style>
    .panel{
        margin-bottom: 0px;
    }
</style>
    <script>
        $(function () {

        });
        var list = [];
        function init() {
            $.ajax({
                url: '/admin/menu/getMenu',
                type: 'post',
                dataType: 'json',
                success: function (data) {
                    if(data.status == 0){
                        list = data.list;
                        for(var i in list){
                            if(list[i].parent_id == 0){
                                $('#collapse' + list[i].id).collapse('hide');
                            }
                            list[i]['collapse'] = '#collapse' + list[i].id;
                            list[i]['collapseId'] = 'collapse' + list[i].id;
                        }

                        var vm = new Vue({
                            el: '#side-menu',
                            data:{
                                items:list
                            }
                        });

                        /*console.log(data.list);*/
                    }
                }

            });
        }
        init();

    </script>
</nav>