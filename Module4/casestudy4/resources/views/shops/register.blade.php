<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('login/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('loginshop/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('loginshop/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('loginshop/css/style.css')}}">
    <title>Login #5</title>
    <script nonce="49747ce2-277e-4c53-91c4-14208a925e0b">
        (function(w, d) {
            ! function(bt, bu, bv, bw) {
                bt[bv] = bt[bv] || {};
                bt[bv].executed = [];
                bt.zaraz = {
                    deferred: [],
                    listeners: []
                };
                bt.zaraz.q = [];
                bt.zaraz._f = function(bx) {
                    return function() {
                        var by = Array.prototype.slice.call(arguments);
                        bt.zaraz.q.push({
                            m: bx,
                            a: by
                        })
                    }
                };
                for (const bz of ["track", "set", "debug"]) bt.zaraz[bz] = bt.zaraz._f(bz);
                bt.zaraz.init = () => {
                    var bA = bu.getElementsByTagName(bw)[0],
                        bB = bu.createElement(bw),
                        bC = bu.getElementsByTagName("title")[0];
                    bC && (bt[bv].t = bu.getElementsByTagName("title")[0].text);
                    bt[bv].x = Math.random();
                    bt[bv].w = bt.screen.width;
                    bt[bv].h = bt.screen.height;
                    bt[bv].j = bt.innerHeight;
                    bt[bv].e = bt.innerWidth;
                    bt[bv].l = bt.location.href;
                    bt[bv].r = bu.referrer;
                    bt[bv].k = bt.screen.colorDepth;
                    bt[bv].n = bu.characterSet;
                    bt[bv].o = (new Date).getTimezoneOffset();
                    if (bt.dataLayer)
                        for (const bG of Object.entries(Object.entries(dataLayer).reduce(((bH, bI) => ({
                                ...bH[1],
                                ...bI[1]
                            })), {}))) zaraz.set(bG[0], bG[1], {
                            scope: "page"
                        });
                    bt[bv].q = [];
                    for (; bt.zaraz.q.length;) {
                        const bJ = bt.zaraz.q.shift();
                        bt[bv].q.push(bJ)
                    }
                    bB.defer = !0;
                    for (const bK of [localStorage, sessionStorage]) Object.keys(bK || {}).filter((bM => bM.startsWith("_zaraz_"))).forEach((bL => {
                        try {
                            bt[bv]["z_" + bL.slice(7)] = JSON.parse(bK.getItem(bL))
                        } catch {
                            bt[bv]["z_" + bL.slice(7)] = bK.getItem(bL)
                        }
                    }));
                    bB.referrerPolicy = "origin";
                    bB.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bt[bv])));
                    bA.parentNode.insertBefore(bB, bA)
                };
                ["complete", "interactive"].includes(bu.readyState) ? zaraz.init() : bt.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body>
    <div class="d-md-flex half">
        <div class="bg" style="background-image: url('{{asset('loginshop/images/kr02-5.jpg')}}');"></div>
        <div class="contents">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-12">
                        <div class="form-block mx-auto">
                            <div class="text-center mb-5">
                                <h3 class="text-uppercase">Register to <strong>Wizym</strong></h3>
                            </div>
                            <form action="{{ route('register.shop') }}" method="post">
                                @csrf
                                @if(Session::has('Success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('Success') }}
                                </div>
                                @endif
                                <div class="form-group first">
                                    <label for="name">Username</label>
                                    <input type="name" class="form-control" placeholder="Username" id="name" name="name">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" placeholder="your-email@gmail.com" id="email" name ="email">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Your Password" id="password" name ="password">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password" id="password2" name ="password">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="address">Address</label>
                                    <input type="address" class="form-control" placeholder="Address" id="address" name="address">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="phone">Phone</label>
                                    <input type="phone" class="form-control" placeholder="Phone number" id="phone" name="phone">
                                </div>
                                <div class="d-sm-flex mb-5 align-items-center">
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div>
                                <div class="d-sm-flex mb-5 align-items-center">
                                    <span class="ml-auto"><a href="{{ route('login.shop') }}" class="forgot-pass">Login</a></span>
                                </div>
                                <input type="submit" value="Register" class="btn btn-block py-2 btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('loginshop/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('loginshop/js/popper.min.js')}}"></script>
    <script src="{{asset('loginshop/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('loginshop/js/main.js')}}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7f16045dddc00968","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.7.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>