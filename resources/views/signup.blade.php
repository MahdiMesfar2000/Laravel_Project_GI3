@extends('layouts/header')

@section('title', 'Stellar HTML Demo - Sign up')

<body class="ct4dl c5iq8 cmdk0 c5pf3 cq25l">

    <!-- Page wrapper -->
    <div class="ckejv cfekt c44e7 cor41 c96dl">

        <main class="cksot">

            <section class="c95ga">

                <!-- Illustration -->
                <div class="clynz c5iei ctonv clrhu c3qvt cag8s c5udx cj91p c09ly" aria-hidden="true">
                    <img src="images/auth-illustration.svg" class="cnqh4" width="1440" height="450" alt="Page Illustration">
                </div>

                <div class="cprys c95ga cxhtj cecgn c2iur">
                    <div class="cyi18 cxnez cspj9 cy2wm">

                        <!-- Page header -->
                        <div class="ce08t c3blx cecgn cspj9">
                            <!-- Logo -->
                            <div class="c7d6a">
                                <a class="cx8xx" href="index-2.html">
                                    <div class="ckcqi cplc8 cl7qh c1edy ca8hk ctppe clx5f cqhau c4448 cbvj8 c95ga c0cr8 c96dl ct0i7 cbtlt">
                                        <img class="c95ga" src="images/logo.svg" width="42" height="42" alt="Stellar">
                                    </div>
                                </a>
                            </div>
                            <!-- Page title -->
                            <h1 class="cy4g8 cz1f5 cl10g c8yrn c10r8 cmck1 c2pml">Create your free account</h1>
                        </div>

                        <!-- Form -->
                        <div class="cdzd8 cecgn">

                            <form>
                                <div class="cmxj2">
                                    <div>
                                        <label class="c1yjy cveoa czlc0 csowg cryyo" for="company">Company <span class="ck4e1">*</span></label>
                                        <input id="company" class="c17oc c1621" type="text" placeholder="mE.g., Acme Inc." required="">
                                    </div>
                                    <div>
                                        <label class="c1yjy cveoa czlc0 csowg cryyo" for="full-name">Full Name <span class="ck4e1">*</span></label>
                                        <input id="full-name" class="c17oc c1621" type="text" placeholder="E.g., Mark Rossi" required="">
                                    </div>
                                    <div>
                                        <label class="c1yjy cveoa czlc0 csowg cryyo" for="email">Email <span class="ck4e1">*</span></label>
                                        <input id="email" class="c17oc c1621" type="email" placeholder="markrossi@company.com" required="">
                                    </div>
                                    <div>
                                        <label class="c1yjy cveoa czlc0 csowg cryyo" for="password">Password <span class="ck4e1">*</span></label>
                                        <input id="password" class="c17oc c1621" type="password" autocomplete="on" required="">
                                    </div>
                                    <div>
                                        <label class="c1yjy cveoa czlc0 csowg cryyo" for="referrer">Where did you hear about us? <span class="ck4e1">*</span></label>
                                        <select id="referrer" class="c6zwa czlc0 c1621 cbw2w" required="">
                                            <option>Google</option>
                                            <option>Medium</option>
                                            <option>GitHub</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="c6ax2">
                                    <button class="ckcj1 c5rr4 c5zoy cbhty czlc0 c1621 c474f cnp54">
                                        Sign Up <span class="c0lwy c1ogz cg4ou chkot cxkpk cy2w0 caz78">-&gt;</span>
                                    </button>
                                </div>
                            </form>

                            <div class="ce08t c83bg">
                                <div class="c3pte czlc0">
                                    Already have an account? <a class="cgncf cp8n5 cxkpk cveoa cy2w0 c0h1x" href="signin.html">Sign in</a>
                                </div>
                            </div>
                            
                            <!-- Divider -->
                            <div class="cqhau cwaig c96dl">
                                <div class="cx2aj cko88 ch4e1 cksot" aria-hidden="true"></div>
                                <div class="c73ss czlc0 cik1a">or</div>
                                <div class="cx2aj cko88 c4vlp cksot" aria-hidden="true"></div>
                            </div>
                            
                            <!-- Social login -->
                            <div class="c3xc2 c96dl">
                                <button class="ckcqi chknv cplc8 cai8b c5zr5 ca8hk ctppe c1yjy cxkpk cy2w0 c0h1x c95ga c1621 c474f cnp54 cvdcu">
                                    <span class="c95ga">
                                        <span class="c69ch">Continue with Twitter</span>
                                        <svg class="cyji2" xmlns="http://www.w3.org/2000/svg" width="14" height="12">
                                            <path d="m4.34 0 2.995 3.836L10.801 0h2.103L8.311 5.084 13.714 12H9.482L6.169 7.806 2.375 12H.271l4.915-5.436L0 0h4.34Zm-.635 1.155H2.457l7.607 9.627h1.165L3.705 1.155Z"></path>
                                        </svg>
                                    </span>
                                </button>
                                <button class="ckcqi chknv cplc8 cai8b c5zr5 ca8hk ctppe c1yjy cxkpk cy2w0 c0h1x c95ga c1621 c474f cnp54 cvdcu">
                                    <span class="c95ga">
                                        <span class="c69ch">Continue with GitHub</span>
                                        <svg class="cyji2" xmlns="http://www.w3.org/2000/svg" width="16" height="15">
                                            <path d="M7.488 0C3.37 0 0 3.37 0 7.488c0 3.276 2.153 6.084 5.148 7.113.374.094.468-.187.468-.374v-1.31c-2.06.467-2.527-.936-2.527-.936-.375-.843-.843-1.124-.843-1.124-.655-.468.094-.468.094-.468.749.094 1.123.75 1.123.75.655 1.216 1.778.842 2.153.654.093-.468.28-.842.468-1.03-1.685-.186-3.37-.842-3.37-3.743 0-.843.281-1.498.75-1.966-.094-.187-.375-.936.093-1.965 0 0 .655-.187 2.059.749a6.035 6.035 0 0 1 1.872-.281c.655 0 1.31.093 1.872.28 1.404-.935 2.059-.748 2.059-.748.374 1.03.187 1.778.094 1.965.468.562.748 1.217.748 1.966 0 2.901-1.778 3.463-3.463 3.65.281.375.562.843.562 1.498v2.059c0 .187.093.468.561.374 2.996-1.03 5.148-3.837 5.148-7.113C14.976 3.37 11.606 0 7.488 0Z"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>

                        </div>

                    </div>
                </div>

            </section>

        </main>

    </div>

    <script src="js/vendors/alpinejs.min.js" defer=""></script>
    <script src="js/vendors/aos.js"></script>
    <script src="js/main.js"></script>



</body>
<!-- Mirrored from preview.cruip.com/stellar/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Oct 2024 19:24:36 GMT -->
</html>