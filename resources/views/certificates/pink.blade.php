<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pink</title>
    <style>
        @font-face {
            font-family: customFont;
            src: url('/fonts/din-next-lt-w23-medium.ttf');
        }

        .certificate {
            background-image: url('/images/pink.png');
            width: 720px;
            height: 1280px;
            position: relative;
        }

        input, input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus {
            -webkit-text-fill-color: #fff;
            background-color: unset !important;
            border: 0;
            outline: none;
            font-size: 32px;
            color: white !important;;
            font-family: customFont;
            text-align: center;
            position: absolute;
            font-weight: 600;
            -webkit-box-shadow: 0 0 0px 1000px transparent inset;
            transition: background-color 5000s ease-in-out 0s;
        }

        input[name='firstText'] {
            top: 54.5%;
            left: 19%;
        }

        input[name='secondText'] {
            top: 79%;
            left: 20%;
        }

        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: white;
            opacity: 1; /* Firefox */
        }

        button {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out,
            background-color .15s ease-in-out,
            border-color .15s ease-in-out,
            box-shadow .15s ease-in-out;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #1e7e34;
            border-color: #1c7430;
        }
    </style>
</head>
<body>
<center>
    <form action="/certificate/download/pink" method="post">
        <div class="certificate">
            @csrf
            <input required name="firstText" placeholder="اكتب الاسم هنا">
            <input required name="secondText" placeholder="اكتب الاسم هنا">

        </div>
        <button type="submit">Download</button>
    </form>
</center>
</body>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script>
    $("form").on("submit", function (e) {
        $(this).find("input[type=text], textarea").val("");
    })
</script>
</html>