@include('admin.header')
<body>
<div id="wrapper">
     <!-- Navigation -->
    @include('admin.left')
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3>Compose</h3>
  	         <div class="col-md-4 email-list1">
               <ul class="collection">
                    <li class="collection-item avatar email-unread">
                      <i class="fa fa-users icon_1"></i>
                      <div class="avatar_left">
                      	<span class="email-title">Social</span>
                        <p class="truncate grey-text ultra-small">Lorem Ipsum is simply dummy text of.</p>
                      </div>
                      <a href="#!" class="secondary-content"><span class="new badge blue">4</span></a>
                      <div class="clearfix"> </div>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="fa fa-exclamation-circle icon_2"></i>
                      <div class="avatar_left">
                      	<span class="email-title">Updates</span>
                        <p class="truncate grey-text ultra-small">It is a long established fact that a reader.</p>
                      </div>
                      <a href="#!" class="secondary-content"><span class="new badge red">4</span></a>
                      <div class="clearfix"> </div>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="fa fa-tag icon_3"></i>
                      <div class="avatar_left">
                      	<span class="email-title">Promotions</span>
                        <p class="truncate grey-text ultra-small">There are many variations of passages.</p>
                      </div>
                      <a href="#!" class="secondary-content"><span class="new badge blue1">4</span></a>
                      <div class="clearfix"> </div>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="icon_4">G</i>
                      <div class="avatar_left">
                      	<span class="email-title">Gmail</span>
                        <p class="truncate grey-text ultra-small">Sed ut perspiciatis unde omnis iste.</p>
                      </div>
                      <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>
                      <div class="clearfix"> </div>
                    </li>
                    <li class="collection-item avatar email-unread">
                      <i class="icon_4 icon_5">F</i>
                      <div class="avatar_left">
                      	<span class="email-title">Facebook</span>
                        <p class="truncate grey-text ultra-small">But I must explain to you how.</p>
                      </div>
                      <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>
                      <div class="clearfix"> </div>
                    </li>
                    <li class="collection-item avatar email-unread email_last">
                      <i class="icon_4 icon_6">T</i>
                      <div class="avatar_left">
                      	<span class="email-title">Twitter</span>
                        <p class="truncate grey-text ultra-small">At vero eos et accusamus et iusto odio.</p>
                      </div>
                      <a href="#!" class="secondary-content"><span class="blue-text ultra-small">2:15 pm</span></a>
                      <div class="clearfix"> </div>
                    </li>
              </ul>
         <div class="content-box  mrg15B">
          <div class="content-box-wrapper text-center">
            <h4 class="content-box-header">
            Chat
            <small>(Online friends)</small>
            </h4>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="{{URL::asset('img/admin/1.png')}}" alt="">
                <div class="small-badge bg-red"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="{{URL::asset('img/admin/2.png')}}" alt="">
                <div class="small-badge bg-orange"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="{{URL::asset('img/admin/3.png')}}" alt="">
                <div class="small-badge bg-red"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="{{URL::asset('img/admin/4.png')}}" alt="">
                <div class="small-badge bg-green1"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="{{URL::asset('img/admin/5.png')}}" alt="">
                <div class="small-badge bg-orange"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="{{URL::asset('img/admin/1.png')}}" alt="">
                <div class="small-badge bg-red"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="{{URL::asset('img/admin/2.png')}}" alt="">
                <div class="small-badge bg-green1"></div>
            </div>
            <div class="status-badge mrg10A">
                <img class="img-circle" width="40" src="{{URL::asset('img/admin/3.png')}}" alt="">
                <div class="small-badge bg-orange"></div>
            </div>
          </div>
        </div>
        </div>
        <div class="col-md-8 inbox_right">
        	<div class="Compose-Message">               
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Compose New Message 
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-info">
                            Please fill details to send a new message
                        </div>
                        <hr>
                        <label>Enter Recipient Name : </label>
                        <input type="text" class="form-control1 control3">
                        <label>Enter Subject :  </label>
                        <input type="text" class="form-control1 control3">
                        <label>Enter Message : </label>
                        <textarea rows="6" class="form-control1 control2"></textarea>
                        <hr>
                        <a href="#" class="btn btn-warning btn-warng1"><span class="glyphicon glyphicon-envelope tag_02"></span> Send Message </a>&nbsp;
                      <a href="#" class="btn btn-success btn-warng1"><span class="glyphicon glyphicon-tags tag_01"></span> Save To Drafts </a>
                    </div>
                 </div>
              </div>
         </div>
         <div class="clearfix"> </div>
   </div>
    <div class="copy_layout">
         <p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
       </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->

</body>
</html>
