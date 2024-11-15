<!-- Site header -->
<header class="cag8s c1621 chktc">
    <div class="cprys cxhtj cecgn c2iur">
        <div class="ck9br cqhau cvhzv c96dl ct0i7">

            <!-- Site branding -->
            <div class="cyyww">
                <!-- Logo -->
                <a class="cx8xx" href="{{ route('home') }}" aria-label="Cruip">
                    <img class="cnqh4" src="images/logo.svg" width="38" height="38" alt="Stellar">
                </a>
            </div>

            <!-- Desktop navigation -->
            <nav class="cxpz5 c7kdo ckp1z">

                <!-- Desktop menu links -->
                <ul class="clx5f cqhau chbtg c96dl cksot">
                    <li>
                        <a class="c5zr5 c1yjy cxkpk cveoa cy2w0 c0h1x cqso1 czlc0 cqc9p"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a class="c5zr5 c1yjy cxkpk cveoa cy2w0 c0h1x cqso1 czlc0 cqc9p"
                            href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a class="c5zr5 c1yjy cxkpk cveoa cy2w0 c0h1x cqso1 czlc0 cqc9p"
                            href="{{ route('pricing') }}">Pricing</a>
                    </li>
                    <li>
                        <a class="c5zr5 c1yjy cxkpk cveoa cy2w0 c0h1x cqso1 czlc0 cqc9p"
                            href="{{ route('customers') }}">Customers</a>
                    </li>
                </ul>

            </nav>

            <!-- Desktop sign in links -->
            <ul class="cqhau ckntc cyyww c96dl">
                <li>
                    <a class="ccqdh c5zr5 c1yjy cxkpk cveoa cy2w0 c0h1x czlc0" href="{{ route('signin') }}">Sign in</a>
                </li>
                <li class="cu8u0">
                    <a class="ckcqi chknv cplc8 cai8b c5zr5 ca8hk ctppe c1yjy cxkpk cy2w0 c0h1x c95ga ca0zp c1621 c474f"
                        href="{{ route('signup') }}">
                        <span class="cqhau cx8xx c95ga">
                            Sign up <span class="c0lwy c1ogz cg4ou cp8n5 cxkpk cy2w0 caz78">-&gt;</span>
                        </span>
                    </a>
                </li>
            </ul>

            <!-- Mobile menu -->
            <div class="cqhau cbccu c7d4m c96dl" x-data="{ expanded: false }">

                <!-- Hamburger button -->
                <button class="cyqsz" :class="{ 'active': expanded }" @click.stop="expanded = !expanded"
                    aria-controls="mobile-nav" :aria-expanded="expanded">
                    <span class="c69ch">Menu</span>
                    <svg class="c5zr5 c1yjy cyji2 cxkpk cy2w0 c0h1x cmt1w ck64a" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect y="2" width="20" height="2" rx="1"></rect>
                        <rect y="9" width="20" height="2" rx="1"></rect>
                        <rect y="16" width="20" height="2" rx="1"></rect>
                    </svg>
                </button>

                <!-- Mobile navigation -->
                <nav id="mobile-nav" class="cfekt c9mxt cdxzf cy2w0 cag8s c7emr cxhtj c3n7t c1621 cah3y c2iur"
                    x-ref="mobileNav"
                    :style="expanded ? 'max-height: ' + $refs.mobileNav.scrollHeight + 'px; opacity: 1' :
                        'max-height: 0; opacity: .8'"
                    @click.outside="expanded = false" @keydown.escape.window="expanded = false" x-cloak="">
                    <ul class="ckcqi c1edy c4sto cf9g5 c0cr8 c2iur">
                        <li>
                            <a class="c5zr5 c1yjy cveoa cf9g5 czlc0 c96dl" href="{{ route('about') }}">About</a>
                        </li>
                        <li>
                            <a class="c5zr5 c1yjy cveoa cf9g5 czlc0 c96dl" href="{{ route('pricing') }}">Pricing</a>
                        </li>
                        <li>
                            <a class="c5zr5 c1yjy cveoa cf9g5 czlc0 c96dl" href="{{ route('customers') }}">Customers</a>
                        </li>
                    </ul>
                </nav>

            </div>

        </div>
    </div>
</header>
