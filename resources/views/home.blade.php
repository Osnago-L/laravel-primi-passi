<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        section{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        div{
            text-align: center;
            position: absolute;
            z-index: 1;

        }
        span{
            font-style: italic;
        }
        .logo{
            opacity: 0;
            position: relative;
            z-index: 999;
        }
        section:hover .logo{
            opacity: 1;
        }
    </style>

</head>
<body>
    <section>
        <img class="logo" src="https://cdn.wccftech.com/wp-content/uploads/2015/08/Divinity2logo.jpg" alt="">
        <div>
            <h1>Hello World!</h1>
            <span>but now it's time to...</span>

        </div>
    </section>
</body>
</html>