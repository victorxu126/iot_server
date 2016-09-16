<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx6a6ad23cd72a18fd", "2299f1284f5fca4e552e8cf8bc03e7a2");
$signPackage = $jssdk->GetSignPackage();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no"  />
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name="full-screen" content="yes">
    <title>configWXDeviceWiFi...</title>
  </head>
  <body>
    <p id="tips"> 开始扫描WiFi....</p>
    <script src="//res.wx.qq.com/open/js/jweixin-1.0.0.js" type="text/javascript"></script>
    <script src="jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        wx.config({
            beta: true,
            debug: false,
            appId: 'wx6a6ad23cd72a18fd',
            timestamp: <?php echo $signPackage["timestamp"];?>,
            nonceStr: '<?php echo $signPackage["nonceStr"];?>',
            signature: '<?php echo $signPackage["signature"];?>',
            jsApiList: ['configWXDeviceWiFi']
        });
        wx.ready(function(){
            wx.checkJsApi({
                jsApiList: ['configWXDeviceWiFi'],
                success: function(res) {
                    alert(JSON.stringify(res));
                        wx.invoke('configWXDeviceWiFi', {}, function(res){
                        err_msg = res.err_msg
                        if(err_msg == 'configWXDeviceWiFi:ok') {
                            return;
                        } else {
                            return;
                        }
                        console.log('configWXDeviceWiFi', res);
                    });
                }
            });
        });

    </script>
  </body>
</html>
