
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <title>E-COMMERCE</title>
    </head>
    <body class="main">
        <h1 class="title">Welcome to E-COMMERCE</h1>
            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm form">
                    <div class="card border-success mb-3" style="max-width: 18rem;">
                        <div class="card-header bg-transparent border-success">Pleace sign-in</div>
                        <div class="card-body text-success">
                            <form method="post" action="/check">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                </div>
                                <button type="submit" class="btn btn-primary">Sign-in</button>
                            </form>
                        </div>
                        <!--© 2017–2022<div class="card-footer bg-transparent border-success"></div>-->
                    </div>
                </div>
                <div class="col-sm"></div>
            </div>
    </body>
</html>