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
 </style>
</head>
            <body>
       
                <div class="contain">
                    <div class="rcod" style="margin-top: -4px; text-align: center;">
                    <img src="https://www.seoeaze.com/assets/img/tempimg/email-template-img1.jpg" alt="" style="margin:0;padding:0;border:0px; margin-bottom: 0px" >
                    
                    </div>
                    <div class="rcod" style="margin-top: -4px;">
                        <p> @foreach($data as $key => $dat)
                        <li style="list-style: none">
                            {{ $key }} - {{$dat}}
                        </li><br>
				        @endforeach
                        </p>
                       
                        <p>If you have any questions, please contact</p>

                    </div>
                    <div class="rcod" style="margin-top: -6px;">
                        <h4>Best Regards</h4>
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