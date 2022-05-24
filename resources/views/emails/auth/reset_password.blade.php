<html>
<head>
 <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@900&display=swap" rel="stylesheet"> 
 <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@600;900&display=swap" rel="stylesheet">
<style type="text/css">
    body{ margin: 0; padding: 0; font-family: 'Encode Sans', sans-serif;}
    .contain {padding: 0 2%; margin: 0; width: 92%;  display: block; float:none;max-width: 600px; height: auto;}
    .contain.header {width: 100%; height: auto; float:left; display: block;}
    .contain .rcod {width: 86%; height: auto; float:left; display: block; text-align: center; padding: 5% 0;color: #77b52c;font-family: 'Encode Sans', sans-serif;background: #e6f2fe;margin-top: -4px;}
    .contain p{color: #413e3e; font-size: 16px; padding-bottom: 10px;  font-family: 'Encode Sans', sans-serif; background: #e6f2fe; margin: 0; padding: 0 7%;margin-top: -4px; }
    .rcod ul {list-style:none; margin: 0; padding: 0; margin-bottom: 20px;}
    .rcod ul li {display: inline-block;margin-right: 15px;height: 32px;line-height: 32px;}
    .rcod ul li a { text-decoration: none; color: black; font-size:16px;font-family: arial;}
    .rcod ul li a span { float:left; padding-top:0px;}
    .rcod ul li a img { padding: 5px;max-width: 20px;height:auto;margin-right:3px;}
    div {margin:0; padding: 0;}
    img {margin:0; padding: 0;max-width: 100%;height:auto;}
    .rcod h4 {margin:0;padding:0;font-size: 19px;color: black; text-align:center;font-family: 'Encode Sans', sans-serif; font-weight: 300;}
    .rcod h5 {margin:0;padding:0;text-align:center;font-size:21px; margin-bottom: 20px;}
    button {display: inline-block;margin-bottom: 0;font-weight: normal;text-align: center;vertical-align: middle;cursor: pointer;background-image: none;white-space: nowrap;color: #768399 !important;background-color: #ffffff !important;border-color: #e7e7e2 !important;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;padding: 10px 16px;font-size: 18px;line-height: 1.33;border-radius: 6px;}
 </style>
</head>
<body>
       
                <div class="contain">
                    <div class="rcod" style="margin-top: -4px; text-align: center;">
                    <img src="https://www.seoeaze.com/assets/img/tempimg/email-template-img1.jpg" alt="" style="margin:0;padding:0;border:0px; margin-bottom: 0px" >
                    </div>

                    <div class="rcod" style="margin-top: -4px;">
                    
                       <img src="https://www.seoeaze.com/assets/images/ic_vpn_key_white_48dp_2x.png" alt="" style="width: 100px; margin: 0px auto 30px auto; height: 100px; border-radius:50%; background:#72be58; padding: 10px">
                        <h3 style="text-align: center;margin: 10px; padding: 0px; font-family: 'Noto Sans',sans-serif; color:black; ">
                           Password reset
                        </h3>
                                        <p>
                    We have received a request to reset your SeoEaze password. If you did not initiate this request, please contact us immediately.
                </p><br>
               
                    <a href="https://www.seoeaze.com//password/reset/{!! $token !!}">
                        <button style="display: inline-block;
                                    margin-bottom: 0;
                                    font-weight: normal;
                                    text-align: center;
                                    vertical-align: middle;
                                    -ms-touch-action: manipulation;
                                    touch-action: manipulation;
                                    cursor: pointer;
                                    background-image: none;
                                    border: 1px solid transparent;
                                    white-space: nowrap;
                                    padding: 12px 24px;
                                    font-size: 14px;
                                    line-height: 1.42857143;
                                    border-radius: 4px;
                                    -webkit-user-select: none;
                                    background-color: #72be58 !important;
                                    border-color: #72be58 !important;
                                    color:white;
                                    ">
                            Reset Password
                        </button>
                    </a><br><br>
                    <p>
                        The Restore Code
                        <br>
                        {{ $key }}
                    </p>
                    </div>
                    <div class="rcod" style="margin-top: -6px;">
                        <h4>Sincerely,</h4>
                        <h5>Team SeoEaze</h5>
                        <ul>
                            <li><a href="mailto:info@seoeaze.com"><span><img src="https://www.seoeaze.com/assets/img/emailer_img/email.png" alt=""></span> info@seoeaze.com </a></li>
                            <li><a href="https://www.facebook.com/seoeaze/"><span><img src="https://www.seoeaze.com/assets/img/emailer_img/facebook.png" alt=""></span> / seoeaze  </a></li>
                            <li><a href="https://twitter.com/SeoEaze"><span><img src="https://www.seoeaze.com/assets/img/emailer_img/twitter.png" alt=""></span> / seoeaze  </a></li>
                        </ul>
                        <img src="https://www.seoeaze.com/assets/img/tempimg/email-template-img3.jpg" alt="" style="margin:0;padding:0;border:0px;" >
                    </div>
                </div>
       
</body>
</html>