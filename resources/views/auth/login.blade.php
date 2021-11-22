<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Barcoding | Admin</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('css/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('css/theme.css') }}">
</head>
<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div
                            class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Masuk</h4>
                                        <div class="nk-block-des">
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group"><label class="form-label" for="default-01">Username</label></div>
                                        <div class="form-control-wrap"><input type="text" name="username" class="form-control form-control-lg" id="default-01" placeholder="Masukkan Username"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group"><label class="form-label" for="password">Password</label></div>
                                        <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Masukkan Password">
                                    </div>
                                    <div class="form-group"><button class="btn btn-lg btn-primary btn-block">Log In</button></div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>