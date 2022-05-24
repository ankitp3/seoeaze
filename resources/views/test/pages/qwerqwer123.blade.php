<script src="/assets/js/jquery/jquery-1.11.1.min.js"></script>

<style>
    @import url(https://fonts.googleapis.com/css?family=Ubuntu:400,300);
    body {
        background-color: #2d2d2d;
        font-family: 'Ubuntu', sans-serif;
        color: white;
    }

    .center, .content {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
    }

    .load, .content .reset {
        border: 4px solid #e13b3b;
        font-size: 1.2em;
        cursor: pointer;
        width: auto;
        height: auto;
        padding: 0em 1em;
        text-align: center;
        border-radius: 0;
        transition: all 500ms;
    }
    .load:hover, .content .reset:hover {
        padding: .9em 1.75em;
        background-color: rgba(225, 59, 59, 0.18);
    }

    .bar {
        width: 155px;
        height: 3px;
        padding: 0;
        background-color: rgba(225, 59, 59, 0.7);
        border: none;
    }
    .bar .loader {
        width: 20px;
        height: 3px;
        background-image: linear-gradient(to right, rgba(250, 250, 250, 0.3), #fff);
        animation: slide infinite .75s linear;
    }
    .bar:hover {
        padding: 0;
        background-color: rgba(225, 59, 59, 0.7);
    }

    @keyframes slide {
        from {
            margin-left: -20px;
        }
        to {
            margin-left: 135px;
        }
    }
    .content h1 {
        text-align: center;
        font-size: 1.6em;
    }
    .content .reset {
        text-align: center;
        margin-top: 1em;
    }

</style>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile Test</title>
</head>
<body>
    <section class="action">
        <div class="load center">
            <p>HEATING CPU</p>
            <div class="loader"></div>
        </div>
    </section>

    <article class="content"></article>
</body>
</html>

<script>
        //ajax


        //kicks things off
        $('.action').on('click', '.load', function(){
            $(this).find('p').html('');
            $(this).addClass('bar');
            setTimeout(function(){
                var temp = 1;
                while(temp > 0){
                    temp++;
                }
            },1500);

        });


</script>