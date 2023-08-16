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
                                <h3 class="text-uppercase">Login to <strong>Wizym</strong></h3>
                            </div>
                            <form action="{{ route('checkLoginShop') }}" method="post">
                                @csrf
                                @if(Session::has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('error') }}
                                </div>
                                @endif
                                <div class="form-group first">
                                    <label for="username">Email</label>
                                    <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username" name="email">
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Your Password" id="password" name="password">
                                </div>
                                <div class="d-sm-flex mb-5 align-items-center">
                                    <label class="form-check-label"><span class="caption">Remember me</span>
                                        <input type="checkbox" checked="checked" name ="remember" />
                                    </label>
                                    <span class="ml-auto"><a href="{{ route('register.shop') }}" class="forgot-pass">Register</a></span>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div>
                                <input type="submit" value="Log In" class="btn btn-block py-2 btn-primary">
                                <span class="text-center my-3 d-block">or</span>
                                <div class="">
                                    <a href="#" class="btn btn-block py-2 btn-facebook">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg> Login with facebook
                                    </a>
                                    <a href="#" class="btn btn-block py-2 btn-google"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                        </svg> Login with Google</a>
                                </div>
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