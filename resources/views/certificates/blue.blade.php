<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blue</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        @font-face {
            font-family: customFont;
            src: url('/fonts/din-next-lt-w23-medium.ttf');
        }

        .certificate {
            /*background-image: url('/images/blue.png');*/
            width: 100%;
            /*height: 1280px;*/
            position: relative;
            background-repeat: no-repeat;
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
            top: 50%;
            left: 15%;
            font-size: 2em;
        }

        input[name='secondText'] {
            top: 77.5%;
            left: 18%;
            font-size: 2em;
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
        @media (max-width: 575.99px) {

            input[name='firstText'],input[name='secondText'] {
                font-size: 1em !important;
            }
        }
        @media (max-width:  767.99px) {

            input[name='firstText'],input[name='secondText'] {
                font-size: 1.5em;
            }

        }
    </style>
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <form class="text-center" target="_blank" action="/certificate/download/blue" method="post">
                <div class="certificate">
                    <img src="{{asset('/images/blue.png')}}" class="img-fluid">
                    @csrf
                    <input required name="firstText" placeholder="اكتب الاسم هنا">
                    <input required name="secondText" placeholder="اكتب الاسم هنا">
                    <div></div>
                </div>
                <button type="submit">Download</button>
            </form>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<script>
    $("form").on("submit", function (e) {
        $(this).find("input[type=text], textarea").val("");
    })
</script>
</html>