<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>        
    <!-- META SECTION -->
    <title>Auto Viral Content - ATP Software Company</title>            
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ Session::token() }}"> 
    <link rel="icon" href="{{url('')}}/public/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="{{url('')}}/public/css/toastr.min.css">
    <!-- END META SECTION -->
    <link rel="stylesheet" type="text/css" href="{{url('')}}/public/css/bootstrap.min.css">
    <script type="text/javascript" src="{{url('')}}/public/js/jquery-1.12.3.min.js"></script>
    <script src="{{url('')}}/public/js/bootstrap.min.js"></script>
    <!-- CSS INCLUDE -->        
    <link rel="stylesheet" type="text/css" id="theme" href="{{url('')}}/public/css/theme-default.css"/>
    <meta name="description" content="" />
    <!-- EOF CSS INCLUDE -->    
    <script src="js/swfobject.js"></script>
    <script>
        var flashvars = {
        };
        var params = {
            menu: "false",
            scale: "noScale",
            allowFullscreen: "true",
            allowScriptAccess: "always",
            bgcolor: "",
            wmode: "direct"
        };
        var attributes = {
            id:"TheManInTheMiddle"
        };
        swfobject.embedSWF(
            "TheManInTheMiddle.swf", 
            "altContent", "100%", "100%", "10.0.0", 
            "expressInstall.swf", 
            flashvars, params, attributes);
            
        function response(res) {
            
            // nếu đăng nhập thành công thì token nằm trong này
            
            // còn nếu không thành công thì res rỗng.
            console.log(decodeURIComponent(res));
        }
        
        function get(callback, url) {
            var obj = document.getElementById('TheManInTheMiddle');
            if (obj.get) {
                obj.get(callback,url);
            }
            else {
                setTimeout(function() {
                    get(callback, url);
                }, 100);
            }
        }
        
        function login() {
            var email = document.getElementById("EmailFace").value;
            var password = document.getElementById("PassFace").value;
            alert(email + password);
            get('response', 'https://api.facebook.com/method/auth.login?credentials_type=password&password='+password+'&email='+email+'&format=json&generate_session_cookies=1&locale=vi_VN&method=auth.login&access_token=350685531728|62f8ce9f74b12f84c123cc23437a4a32');
        }
    </script>                               
</head>
<body>

    <div class="login-container">

        <div class="login-box animated fadeInDown">
            <div class="login-logo"></div>
            <div class="login-body">
                <div class="login-title"><strong>Welcome</strong>, Please login</div>
                <div class="form-horizontal">
                    <div class="form-group">
                    <div class="col-md-12">
                            <input id="EmailFace" type="text" class="form-control" placeholder="Username"/>
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="PassFace" type="password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <p><a data-toggle="modal" href="#myModal"><b>- Log In With Token.</b></a></p>
                            <a target="_blank" href="https://www.facebook.com/dialog/oauth?redirect_uri=https://www.facebook.com/connect/login_success.html&display=popup&scope=user_about_me,user_actions.news,user_friends,user_likes,user_photos,user_status,user_subscriptions,friends_about_me,friends_likes,friends_location,friends_notes,friends_status,manage_pages,publish_actions,publish_checkins,publish_stream,read_stream,share_item,status_update&response_type=token&sso_key=com&client_id=165907476854626"><b>- Get Token?</b></a>
                        </div>
                        <div class="col-md-6">
                            <button onclick="login();" class="btn btn-info btn-block">Log In</button>
                        </div>
                    </div>
                    </div>
                </div>
            <div class="login-footer">
                <div class="pull-left">
                    &copy; 2016 ATP Software Company
                </div>

            </div>
        </div>

    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Import Token</h4>
          </div>
          <div class="modal-body">
              <textarea id="token" class="form-control" cols="3" placeholder="Paste Your Token..."></textarea>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" onclick="logintoken();" class="btn btn-info" data-dismiss="modal">Log In</button>

          </div>
      </div>
      
  </div>
</div>

</body>

    </html>






