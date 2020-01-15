<head>
    <title>Popup</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="stylesheet" href="css/main.css"/>
</head>

<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="background-image"></div>
<div class="popup login_popup">


    <div class="dialog">
        <div class="form-box">
            <div class="top_wrap">
                <div class="img"><img src="images/icon.svg" alt=""></div>

            </div>
            <div class="form-box-wrap">

                <form action="{{route('login')}}" method="post">
                    <div class="input_r">
                        <div class="input-wrap">
                            <label for="">User Name</label>
                            <input type="text" name="user_name">
                        </div>

                        <div class="input-wrap">
                            <label for="">Password</label>
                            <label for="" class="error"> </label>
                            <input type="password" name="password">
                        </div>
                    </div>
                    {{csrf_field()}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <a href="{{route('passwordIndex')}}">Forgot Password ?</a>
                    <button>Sign In</button>
                </form>

            </div>
        </div>
        <div class="close-popup"></div>
    </div>
</div>
</body>


