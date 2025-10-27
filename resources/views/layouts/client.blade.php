<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('assets/clients/wp-content/uploads/2024/04/favicon-100x100.png') }}"
        sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/clients/wp-content/uploads/2024/04/favicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/clients/wp-content/uploads/2024/04/favicon.png') }}" />
    <meta name="msapplication-TileImage"
        content="{{ asset('assets/clients/wp-content/uploads/2024/04/favicon.png') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/clients/wp-content/uploads/2024/04/favicon.png') }}" />
    <title>@yield('title')</title>
    <meta name='robots' content='max-image-preview:large' />
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <link rel='dns-prefetch' href='{{ asset('assets/fonts.googleapis.com/index.html') }}' />
    <link rel="alternate" type="application/rss+xml" title="GoldenSea &raquo; Feed"
        href="{{ asset('assets/clients/feed/index.html') }}" />
    <link rel="alternate" type="application/rss+xml" title="GoldenSea &raquo; Comments Feed"
        href="{{ asset('assets/clients/comments/feed/index.html') }}" />
    <script>
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/seabite.peacefulqode.in\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.3" } };
        /*! This file is auto-generated */
        !function (s, n) { var o, i, e; function c(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function p(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), a = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function (e, t) { return e === a[t] }) } function u(e, t) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); for (var n = e.getImageData(16, 16, 1, 1), a = 0; a < n.data.length; a++)if (0 !== n.data[a]) return !1; return !0 } function f(e, t, n, a) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\udde8\ud83c\uddf6", "\ud83c\udde8\u200b\ud83c\uddf6") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !a(e, "\ud83e\udedf") }return !1 } function g(e, t, n, a) { var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : s.createElement("canvas"), o = r.getContext("2d", { willReadFrequently: !0 }), i = (o.textBaseline = "top", o.font = "600 32px Arial", {}); return e.forEach(function (e) { i[e] = t(o, e, n, a) }), i } function t(e) { var t = s.createElement("script"); t.src = e, t.defer = !0, s.head.appendChild(t) } "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", i = ["flag", "emoji"], n.supports = { everything: !0, everythingExceptFlag: !0 }, e = new Promise(function (e) { s.addEventListener("DOMContentLoaded", e, { once: !0 }) }), new Promise(function (t) { var n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + g.toString() + "(" + [JSON.stringify(i), f.toString(), p.toString(), u.toString()].join(",") + "));", a = new Blob([e], { type: "text/javascript" }), r = new Worker(URL.createObjectURL(a), { name: "wpTestEmojiSupports" }); return void (r.onmessage = function (e) { c(n = e.data), r.terminate(), t(n) }) } catch (e) { } c(n = g(i, f, p, u)) } t(n) }).then(function (e) { for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]); n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () { n.DOMReady = !0 } }).then(function () { return e }).then(function () { var e; n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji))) })) }((window, document), window._wpemojiSettings);
    </script>
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='{{ asset('assets/clients/wp-content/plugins/contact-form-7/includes/css/stylesfc7a.css?ver=6.0.6') }}'
        media='all' />
    <link rel='stylesheet' id='magnific-popup-css'
        href='{{ asset('assets/clients/wp-content/plugins/seabite-core/public/css/vendor/magnific-popup.min8a54.css?ver=1.0.0') }}'
        media='all' />
    <link rel='stylesheet' id='jquery.mCustomScrollbar-css'
        href='{{ asset('assets/clients/wp-content/plugins/seabite-core/public/css/vendor/jquery.mCustomScrollbar.min8a54.css?ver=1.0.0') }}'
        media='all' />
    <link rel='stylesheet' id='owl.carousel-css'
        href='{{ asset('assets/clients/wp-content/plugins/seabite-core/public/css/vendor/owl.carousel.min8a54.css?ver=1.0.0') }}'
        media='all' />
    <link rel='stylesheet' id='seabite-css'
        href='{{ asset('assets/clients/wp-content/plugins/seabite-core/public/css/style8a54.css?ver=1.0.0') }}'
        media='all' />
    <link rel='stylesheet' id='progressbar-css'
        href='{{ asset('assets/clients/wp-content/plugins/seabite-core/public/css/vendor/progressbar8a54.css?ver=1.0.0') }}'
        media='all' />
    <link rel='stylesheet' id='slick-Slider-css'
        href='{{ asset('assets/clients/wp-content/plugins/seabite-core/public/css/vendor/slick8a54.css?ver=1.0.0') }}'
        media='all' />
    {{--
    <link rel='stylesheet' id='select2-css' href='{{ asset('
        assets/clients/wp-content/plugins/woocommerce/assets/css/select294cf.css?ver=9.8.1') }}' media='all' /> --}}
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='{{ asset('assets/clients/wp-content/plugins/woocommerce/assets/css/woocommerce-layout94cf.css?ver=9.8.1') }}'
        media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='{{ asset('assets/clients/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen94cf.css?ver=9.8.1') }}'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='{{ asset('assets/clients/wp-content/plugins/woocommerce/assets/css/woocommerce94cf.css?ver=9.8.1') }}'
        media='all' />
    <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='megamenu-css'
        href='{{ asset('assets/clients/wp-content/uploads/maxmegamenu/styleae9d.css?ver=287bbf') }}' media='all' />
    <link rel='stylesheet' id='dashicons-css'
        href='{{ asset('assets/clients/wp-includes/css/dashicons.min32d4.css?ver=6.8.3') }}' media='all' />
    <link rel='stylesheet' id='brands-styles-css'
        href='{{ asset('assets/clients/wp-content/plugins/woocommerce/assets/css/brands94cf.css?ver=9.8.1') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='{{ asset('assets/clients/wp-content/plugins/elementor/assets/css/frontend.min87cc.css?ver=3.28.3') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-7-css'
        href='{{ asset('assets/clients/wp-content/uploads/elementor/css/post-777d2.css?ver=1744955941') }}'
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeInUp-css'
        href='{{ asset('assets/clients/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.min87cc.css?ver=3.28.3') }}'
        media='all' />
    <link rel='stylesheet' id='widget-icon-list-css'
        href='{{ asset('assets/clients/wp-content/plugins/elementor/assets/css/widget-icon-list.min87cc.css?ver=3.28.3') }}'
        media='all' />
    <link rel='stylesheet' id='widget-image-css'
        href='{{ asset('assets/clients/wp-content/plugins/elementor/assets/css/widget-image.min87cc.css?ver=3.28.3') }}'
        media='all' />
    <link rel='stylesheet' id='widget-image-box-css'
        href='{{ asset('assets/clients/wp-content/plugins/elementor/assets/css/widget-image-box.min87cc.css?ver=3.28.3') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-2408-css'
        href='{{ asset('assets/clients/wp-content/uploads/elementor/css/post-2408e0bd.css?ver=1744984920') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-2421-css'
        href='{{ asset('assets/clients/wp-content/uploads/elementor/css/post-24218a1b.css?ver=1744986034') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-2405-css'
        href='{{ asset('assets/clients/wp-content/uploads/elementor/css/post-24050b16.css?ver=1744997150') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-4137-css'
        href='{{ asset('assets/clients/wp-content/uploads/elementor/css/post-4137b608.css?ver=1744985214') }}'
        media='all' />
    <link rel='stylesheet' id='seabite-fonts-css'
        href='{{ asset('assets/fonts.googleapis.com/css2e69e.css?family=Jost:ital,wght@0,100..900;1,100..900&amp;family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;subset=latin%2Clatin-ext&amp;display=swap') }}'
        media='all' />
    <link rel='stylesheet' id='bootstrap-css'
        href='{{ asset('assets/clients/wp-content/themes/seabite/assets/css/bootstrap.mince52.css?ver=5.0.2') }}'
        media='all' />
    <link rel='stylesheet' id='animate-min-css'
        href='{{ asset('assets/clients/wp-content/themes/seabite/assets/css/animate.mincce7.css?ver=4.0.0') }}'
        media='all' />
    <link rel='stylesheet' id='seabite-style-css'
        href='{{ asset('assets/clients/wp-content/themes/seabite/assets/css/style5152.css?ver=1.0') }}' media='all' />
    <link rel='stylesheet' id='seabite-woocommerce-css'
        href='{{ asset('assets/clients/wp-content/themes/seabite/assets/css/woocommerce5152.css?ver=1.0') }}'
        media='all' />
    <link rel='stylesheet' id='seabite-test-data-css'
        href='{{ asset('assets/clients/wp-content/themes/seabite/assets/css/test-data5152.css?ver=1.0') }}'
        media='all' />
    <link rel='stylesheet' id='seabite-responsive-css'
        href='{{ asset('assets/clients/wp-content/themes/seabite/assets/css/responsive5152.css?ver=1.0') }}'
        media='all' />
    <link rel='stylesheet' id='fontawesome-css'
        href='{{ asset('assets/clients/wp-content/themes/seabite/assets/css/font-awesome/css/fontawesome.min05c8.css?ver=5.13.0') }}'
        media='all' />
    <link rel='stylesheet' id='themify-icons-css'
        href='{{ asset('assets/clients/wp-content/themes/seabite/assets/css/fonts/themify-icons/themify-icons001e.css?ver=2.0.0') }}'
        media='all' />
    <link rel='stylesheet' id='ionicons-icon-css'
        href='{{ asset('assets/clients/wp-content/themes/seabite/assets/css/fonts/ionicons/ionicons.min001e.css?ver=2.0.0') }}'
        media='all' />
    <link rel='stylesheet' id='flaticons-icons_-css'
        href='{{ asset('assets/clients/wp-content/themes/seabite/assets/css/fonts/flaticons/flaticon001e.css?ver=2.0.0') }}'
        media='all' />
    <link rel='stylesheet' id='flaticons-icons-coll-2-css'
        href='{{ asset('assets/clients/wp-content/themes/seabite/assets/css/fonts/flaticons_2/flaticon_mycollection001e.css?ver=2.0.0') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-gf-local-cormorantgaramond-css'
        href='{{ asset('assets/clients/wp-content/uploads/elementor/google-fonts/css/cormorantgaramond85cf.css?ver=1744955943') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-gf-local-jost-css'
        href='{{ asset('assets/clients/wp-content/uploads/elementor/google-fonts/css/jost244f.css?ver=1744955944') }}'
        media='all' />
    <script src="{{ asset('assets/clients/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1') }}"
        id="jquery-core-js"></script>
    <script src="{{ asset('assets/clients/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1') }}"
        id="jquery-migrate-js"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/seabite-core/public/js/vendor/asyncloader.min8a54.js?ver=1.0.0') }}"
        id=" asyncloader-js"></script>
    <script id="seabite-js-extra">
        var PluginJsConfig = { "js_dependencies": { "Flip": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/Flip.min.js?ver=1.0", "ScrollTrigger": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/ScrollTrigger.min.js?ver=1.0", "TweenMax": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/TweenMax.min.js?ver=1.0", "aat": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/aat.min.js?ver=1.0", "asyncloader.js": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/asyncloader.js?ver=1.0", "asyncloader": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/asyncloader.min.js?ver=1.0", "circle-progress": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/circle-progress.min.js?ver=1.0", "gsap": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/gsap.min.js?ver=1.0", "handler.js": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/handler.js?ver=1.0", "isotope.pkgd": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/isotope.pkgd.min.js?ver=1.0", "jquery-scroll-trigger": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/jquery-scroll-trigger.min.js?ver=1.0", "jquery.countTo": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/jquery.countTo.min.js?ver=1.0", "jquery.mCustomScrollbar": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/jquery.mCustomScrollbar.min.js?ver=1.0", "jquery.magnific-popup": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/jquery.magnific-popup.min.js?ver=1.0", "owl.carousel": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/owl.carousel.min.js?ver=1.0", "progressbar.js": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/progressbar.js?ver=1.0", "slick.js": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/slick.js?ver=1.0", "vivus": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/seabite-core\/public\/\/js\/vendor\/vivus.min.js?ver=1.0" } };
    </script>
    <script src="{{ asset('assets/clients/wp-content/plugins/seabite-core/public/js/script8a54.js?ver=1.0.0') }}"
        id="seabite-js"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min8e23.js?ver=2.7.0-wc.9.8.1') }}"
        id="jquery-blockui-js" defer data-wp-strategy="defer"></script>
    <script id="wc-add-to-cart-js-extra">
        var wc_add_to_cart_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/seabite.peacefulqode.in\/cart\/", "is_cart": "", "cart_redirect_after_add": "no" };
    </script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min94cf.js?ver=9.8.1') }}"
        id="wc-add-to-cart-js" defer data-wp-strategy="defer"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min7db4.js?ver=2.1.4-wc.9.8.1') }}"
        id="js-cookie-js" defer data-wp-strategy="defer"></script>
    <script id="woocommerce-js-extra">
        var woocommerce_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "i18n_password_show": "Show password", "i18n_password_hide": "Hide password" };
    </script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min94cf.js?ver=9.8.1') }}"
        id="woocommerce-js" defer data-wp-strategy="defer"></script>
    <link rel="https://api.w.org/" href="{{ asset('assets/clients/wp-json/index.html') }}" />
    <link rel="alternate" title="JSON" type="application/json"
        href="{{ asset('assets/clients/wp-json/wp/v2/pages/2408.json') }}" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="{{ asset('assets/clients/wp-json/wp/v2/pages/2408.json') }}" />
    <meta name="generator" content="WordPress 6.8.3" />
    <meta name="generator" content="WooCommerce 9.8.1" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='{{ asset('assets/clients/index3fa0.html?p=2408') }}' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="{{ asset('assets/clients/wp-json/oembed/1.0/embed3c3d.json?url=https%3A%2F%2Fseabite.peacefulqode.in%2Fabout-us%2F') }}" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="{{ asset('assets/clients/wp-json/oembed/1.0/embed7ab3?url=https%3A%2F%2Fseabite.peacefulqode.in%2Fabout-us%2F&amp;format=xml') }}" />
    <style id="seabite-custom-style-9dfb4">
        .content-area .site-main {
            padding: 0 !important;
            ;
        }


        .pt-breadcrumb-style-1 {
            background-image: url({{ asset('assets/clients/wp-content/uploads/2024/04/b-3.jpg') }}) !important;
        }
    </style> <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.28.3; features: e_font_icon_svg, additional_custom_breakpoints, e_local_google_fonts; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <meta name="generator"
        content="Powered by Slider Revolution 6.6.18 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="{{ asset('assets/clients/wp-content/uploads/2024/04/favicon-100x100.png"')}} sizes="
        32x32" />
    <link rel="icon" href="{{ asset('assets/clients/wp-content/uploads/2024/04/favicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/clients/wp-content/uploads/2024/04/favicon.png') }}" />
    <meta name="msapplication-TileImage"
        content="https://seabite.peacefulqode.in/wp-content/uploads/2024/04/favicon.png" />
    <script>function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl) if (sl > nl[i] && nl[i] > 0) { sl = nl[i]; ix = i; }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };</script>
    <style>
        /** Mega Menu CSS: fs **/
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body
    class="wp-singular page-template-default page page-id-2408 wp-theme-seabite theme-seabite woocommerce-no-js mega-menu-primary mega-menu-landing page-two-column elementor-default elementor-kit-7 elementor-page elementor-page-2408">
    <!-- loading -->
    <div id="pt-loading">
        <div id="pt-loading-center">

            <img src="{{ asset('assets/clients/wp-content/uploads/2024/03/logo.png') }}" alt="loading">

        </div>
    </div>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"></a>
        <div class="pt-background-overlay"></div>
        <div class="pt-sidebar">

            <div class="pt-sidebar-block mCustomScrollbar">
                <div class="pt-sidebar-header">
                    <a class="navbar-brand" href="{{ asset('assets/clients/index.html') }}">

                        <img src="{{ asset('assets/clients/wp-content/uploads/2024/03/logo.png') }}"
                            class="pt-sidebar-logo" alt="seabite-sidebar-logo">
                    </a>
                    <div class="pt-close-btn">
                        <a class="pt-close" href="javascript:void(0)">
                            <i class="ion-android-close"></i>
                        </a>
                    </div>
                </div>
                <div class="pt-sidebar-title">
                    <h5>Provide care and support Seafood eat</h5>
                </div>
                <div class="pt-sidebar-content">
                    <p>There are many variations of passages Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected</p>
                </div>
                <div class="pt-sidebar-contact">
                    <h3 class="pt-contact-heading">Contact Us</h3>

                    <ul class="pt-contact">
                        <li>
                            <a href="tel:+1800001658">
                                <svg width="18" height="18" viewBox="0 0 20 20" fill="none"
                                    xmlns="{{ asset('assets/www.w3.org/2000/svg.html') }}">
                                    <g clip-path="url(#clip0_366_73)">
                                        <path
                                            d="M15.8054 12.3893C15.396 11.9629 14.9021 11.735 14.3787 11.735C13.8595 11.735 13.3614 11.9587 12.9351 12.3851L11.6012 13.7147C11.4914 13.6556 11.3817 13.6007 11.2761 13.5459C11.1242 13.4699 10.9807 13.3981 10.8583 13.3221C9.6088 12.5286 8.47331 11.4944 7.38426 10.1563C6.85662 9.48935 6.50204 8.92794 6.24455 8.35809C6.59069 8.0415 6.91149 7.71226 7.22386 7.39567C7.34205 7.27748 7.46024 7.15506 7.57843 7.03687C8.46487 6.15043 8.46487 5.00229 7.57843 4.11585L6.42606 2.96348C6.29521 2.83262 6.16013 2.69754 6.0335 2.56247C5.78023 2.30076 5.5143 2.03061 5.23992 1.77734C4.83047 1.37211 4.34082 1.15683 3.82584 1.15683C3.31086 1.15683 2.81277 1.37211 2.39066 1.77734C2.38644 1.78156 2.38644 1.78156 2.38221 1.78578L0.947028 3.23363C0.406722 3.77393 0.0985794 4.43243 0.0310412 5.19646C-0.0702661 6.42903 0.292752 7.57718 0.571347 8.32854C1.25517 10.1732 2.27669 11.8827 3.80052 13.7147C5.64937 15.9224 7.87391 17.6657 10.415 18.894C11.3859 19.3542 12.6818 19.8987 14.1296 19.9915C14.2183 19.9958 14.3111 20 14.3956 20C15.3707 20 16.1896 19.6496 16.8312 18.9531C16.8354 18.9447 16.8438 18.9405 16.848 18.932C17.0675 18.6661 17.3208 18.4255 17.5867 18.168C17.7683 17.9949 17.954 17.8134 18.1355 17.6235C18.5534 17.1887 18.7729 16.6822 18.7729 16.163C18.7729 15.6396 18.5492 15.1372 18.1228 14.7151L15.8054 12.3893ZM17.3166 16.8341C17.3124 16.8341 17.3124 16.8384 17.3166 16.8341C17.152 17.0114 16.9831 17.1718 16.8016 17.3491C16.5272 17.6108 16.2486 17.8852 15.9869 18.1933C15.5606 18.6492 15.0583 18.8645 14.3998 18.8645C14.3365 18.8645 14.2689 18.8645 14.2056 18.8603C12.9519 18.7801 11.7869 18.2904 10.9131 17.8725C8.52397 16.7159 6.42606 15.0739 4.68273 12.9929C3.24333 11.258 2.28091 9.65398 1.64352 7.93175C1.25095 6.88069 1.10743 6.06179 1.17075 5.28932C1.21296 4.79545 1.40291 4.386 1.75327 4.03565L3.19267 2.59624C3.39951 2.40207 3.61901 2.29654 3.83429 2.29654C4.10022 2.29654 4.3155 2.45694 4.45057 2.59202C4.45479 2.59624 4.45901 2.60046 4.46323 2.60468C4.72072 2.84528 4.96555 3.09433 5.22304 3.36026C5.35389 3.49534 5.48897 3.63042 5.62405 3.76971L6.77642 4.92208C7.22386 5.36952 7.22386 5.7832 6.77642 6.23064C6.654 6.35305 6.53581 6.47546 6.4134 6.59365C6.05882 6.95667 5.72113 7.29436 5.35389 7.62361C5.34545 7.63205 5.33701 7.63627 5.33279 7.64472C4.96977 8.00773 5.03731 8.36231 5.11329 8.60291C5.11751 8.61558 5.12173 8.62824 5.12595 8.6409C5.42565 9.36694 5.84777 10.0508 6.48938 10.8654L6.4936 10.8697C7.65864 12.3049 8.88699 13.4235 10.242 14.2803C10.415 14.3901 10.5923 14.4787 10.7612 14.5632C10.9131 14.6391 11.0566 14.7109 11.1791 14.7869C11.1959 14.7953 11.2128 14.808 11.2297 14.8164C11.3732 14.8882 11.5083 14.922 11.6476 14.922C11.998 14.922 12.2175 14.7025 12.2892 14.6307L13.7329 13.1871C13.8764 13.0436 14.1043 12.8705 14.3702 12.8705C14.632 12.8705 14.8472 13.0351 14.9781 13.1786C14.9823 13.1828 14.9823 13.1828 14.9865 13.1871L17.3124 15.5129C17.7472 15.9435 17.7472 16.3867 17.3166 16.8341Z"
                                            fill="#48B6F1" />
                                        <path
                                            d="M10.807 4.75747C11.9129 4.9432 12.9175 5.46662 13.7195 6.26863C14.5216 7.07065 15.0408 8.07528 15.2307 9.18122C15.2771 9.45981 15.5177 9.65398 15.7921 9.65398C15.8259 9.65398 15.8554 9.64976 15.8892 9.64554C16.2016 9.59489 16.4084 9.29941 16.3577 8.98705C16.1298 7.64894 15.4966 6.42904 14.53 5.4624C13.5634 4.49576 12.3434 3.86258 11.0053 3.63464C10.693 3.58399 10.4017 3.79083 10.3468 4.09897C10.292 4.40711 10.4946 4.70681 10.807 4.75747Z"
                                            fill="#48B6F1" />
                                        <path
                                            d="M19.9756 8.82242C19.6 6.61899 18.5616 4.61395 16.966 3.01836C15.3704 1.42277 13.3653 0.384369 11.1619 0.00868772C10.8538 -0.0461871 10.5625 0.16487 10.5076 0.473013C10.457 0.785377 10.6638 1.07664 10.9762 1.13151C12.9432 1.46498 14.7372 2.39785 16.1639 3.82037C17.5907 5.24712 18.5193 7.0411 18.8528 9.00815C18.8992 9.28675 19.1398 9.48092 19.4142 9.48092C19.448 9.48092 19.4775 9.4767 19.5113 9.47248C19.8195 9.42604 20.0305 9.13056 19.9756 8.82242Z"
                                            fill="#48B6F1" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_366_73">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg> <span>+1800-001-658</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@peacefulqode.com">
                                <svg width="18" height="18" viewBox="0 0 20 20" fill="none"
                                    xmlns="{{ asset('assets/www.w3.org/2000/svg.html') }}">
                                    <path
                                        d="M18.2422 2.96875H1.75781C0.790547 2.96875 0 3.75582 0 4.72656V15.2734C0 16.2445 0.791055 17.0312 1.75781 17.0312H18.2422C19.2095 17.0312 20 16.2442 20 15.2734V4.72656C20 3.75559 19.2091 2.96875 18.2422 2.96875ZM17.9723 4.14062C17.4039 4.71082 10.7283 11.4082 10.4541 11.6834C10.225 11.9131 9.77512 11.9133 9.54594 11.6834L2.02773 4.14062H17.9723ZM1.17188 15.058V4.94199L6.21348 10L1.17188 15.058ZM2.02773 15.8594L7.04078 10.83L8.71598 12.5107C9.40246 13.1994 10.5978 13.1991 11.2841 12.5107L12.9593 10.83L17.9723 15.8594H2.02773ZM18.8281 15.058L13.7865 10L18.8281 4.94199V15.058Z"
                                        fill="#48B6F1" />
                                </svg> <span>info@peacefulqode.com</span></a>
                        </li>
                        <li>

                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 20 20"
                                fill="none">
                                <g clip-path="url(#clip0_366_61)">
                                    <path
                                        d="M9.51246 19.7391C9.62113 19.9021 9.8041 20 10 20C10.1959 20 10.3789 19.9021 10.4875 19.7391C11.8742 17.6591 13.9167 15.0903 15.34 12.4778C16.478 10.3889 17.0312 8.60727 17.0312 7.03125C17.0312 3.15422 13.877 0 10 0C6.12297 0 2.96875 3.15422 2.96875 7.03125C2.96875 8.60727 3.52199 10.3889 4.66004 12.4778C6.08227 15.0883 8.12863 17.6634 9.51246 19.7391ZM10 1.17188C13.2309 1.17188 15.8594 3.80039 15.8594 7.03125C15.8594 8.40641 15.3529 10.0046 14.3109 11.9171C13.0841 14.1691 11.3334 16.4534 10 18.3738C8.66684 16.4537 6.91602 14.1692 5.6891 11.9171C4.64715 10.0046 4.14062 8.40641 4.14062 7.03125C4.14062 3.80039 6.76914 1.17188 10 1.17188Z"
                                        fill="#48B6F1"></path>
                                    <path
                                        d="M10 10.5469C11.9385 10.5469 13.5156 8.96977 13.5156 7.03125C13.5156 5.09273 11.9385 3.51562 10 3.51562C8.06148 3.51562 6.48438 5.09273 6.48438 7.03125C6.48438 8.96977 8.06148 10.5469 10 10.5469ZM10 4.6875C11.2923 4.6875 12.3438 5.73891 12.3438 7.03125C12.3438 8.32359 11.2923 9.375 10 9.375C8.70766 9.375 7.65625 8.32359 7.65625 7.03125C7.65625 5.73891 8.70766 4.6875 10 4.6875Z"
                                        fill="#48B6F1"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_366_61">
                                        <rect width="20" height="20" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg> <span>
                                5919 trussvillae crossing </span>
                        </li>
                        <li>
                            <svg width="28" height="29" viewBox="0 0 28 29" fill="none"
                                xmlns="{{ asset('assets/www.w3.org/2000/svg.html') }}">
                                <g clip-path="url(#clip0_329_6743)">
                                    <path
                                        d="M14 0.709961C6.2913 0.709961 0 7.0017 0 14.71C0 22.4187 6.29174 28.71 14 28.71C21.7087 28.71 28 22.4182 28 14.71C28 7.00127 21.7083 0.709961 14 0.709961ZM14 27.0693C7.18501 27.0693 1.64062 21.525 1.64062 14.71C1.64062 7.89497 7.18501 2.35059 14 2.35059C20.815 2.35059 26.3594 7.89497 26.3594 14.71C26.3594 21.525 20.815 27.0693 14 27.0693Z"
                                        fill="#48B6F1" />
                                    <path
                                        d="M7.03906 22.4908C7.49211 22.4908 7.85937 22.1236 7.85937 21.6705C7.85937 21.2175 7.49211 20.8502 7.03906 20.8502C6.58602 20.8502 6.21875 21.2175 6.21875 21.6705C6.21875 22.1236 6.58602 22.4908 7.03906 22.4908Z"
                                        fill="#48B6F1" />
                                    <path
                                        d="M20.9609 8.5697C21.414 8.5697 21.7812 8.20244 21.7812 7.74939C21.7812 7.29634 21.414 6.92908 20.9609 6.92908C20.5079 6.92908 20.1406 7.29634 20.1406 7.74939C20.1406 8.20244 20.5079 8.5697 20.9609 8.5697Z"
                                        fill="#48B6F1" />
                                    <path
                                        d="M6.45902 7.16932C6.13866 7.48968 6.13866 8.00904 6.45902 8.3294C6.77938 8.64976 7.29875 8.64976 7.61911 8.3294C7.93946 8.00904 7.93946 7.48968 7.61911 7.16932C7.2988 6.84896 6.77938 6.84896 6.45902 7.16932Z"
                                        fill="#48B6F1" />
                                    <path
                                        d="M20.3809 21.0905C20.0605 21.4109 20.0605 21.9302 20.3809 22.2506C20.7013 22.571 21.2206 22.571 21.541 22.2506C21.8613 21.9302 21.8613 21.4109 21.541 21.0905C21.2206 20.7702 20.7012 20.7702 20.3809 21.0905Z"
                                        fill="#48B6F1" />
                                    <path
                                        d="M14 7.32715C14.453 7.32715 14.8203 6.95987 14.8203 6.50684V4.86621C14.8203 4.41318 14.453 4.0459 14 4.0459C13.547 4.0459 13.1797 4.41318 13.1797 4.86621V6.50684C13.1797 6.95987 13.547 7.32715 14 7.32715Z"
                                        fill="#48B6F1" />
                                    <path
                                        d="M14 22.0928C13.547 22.0928 13.1797 22.4601 13.1797 22.9131V24.5537C13.1797 25.0067 13.547 25.374 14 25.374C14.453 25.374 14.8203 25.0067 14.8203 24.5537V22.9131C14.8203 22.4601 14.453 22.0928 14 22.0928Z"
                                        fill="#48B6F1" />
                                    <path
                                        d="M6.61719 14.71C6.61719 14.2569 6.24991 13.8896 5.79688 13.8896H4.15625C3.70322 13.8896 3.33594 14.2569 3.33594 14.71C3.33594 15.163 3.70322 15.5303 4.15625 15.5303H5.79688C6.24991 15.5303 6.61719 15.163 6.61719 14.71Z"
                                        fill="#48B6F1" />
                                    <path
                                        d="M21.3828 14.71C21.3828 15.163 21.7501 15.5303 22.2031 15.5303H23.8438C24.2968 15.5303 24.6641 15.163 24.6641 14.71C24.6641 14.2569 24.2968 13.8896 23.8438 13.8896H22.2031C21.7501 13.8896 21.3828 14.2569 21.3828 14.71Z"
                                        fill="#48B6F1" />
                                    <path
                                        d="M14.8203 14.3702V9.78809C14.8203 9.33505 14.453 8.96777 14 8.96777C13.547 8.96777 13.1797 9.33505 13.1797 9.78809V14.71C13.1797 14.9275 13.2661 15.1361 13.42 15.29L18.3419 20.2119C18.6622 20.5322 19.1816 20.5323 19.5019 20.2119C19.8223 19.8915 19.8223 19.3722 19.5019 19.0518L14.8203 14.3702Z"
                                        fill="#48B6F1" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_329_6743">
                                        <rect width="28" height="28" fill="white" transform="translate(0 0.709961)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>
                                Opening Hrs: 9:30 am to 5:30 pm </span>
                        </li>

                    </ul>
                </div>
                <div class="pt-sidebars">
                </div>
            </div>
        </div>
        @include('clients.partials.header')

        @hasSection('breadcrumb')
            @include('clients.partials.breadcrumb')
        @endif

        <div class="peacefulthemes-contain">
            <div class="site-content-contain">
                <main>
                    @yield('content')
                </main>
                @include('clients.partials.footer')
            </div><!-- .site-content-contain -->
        </div> <!-- Peaceful themes -->
    </div><!-- #page -->
    <!-- === back-to-top === -->
    <!-- === back-to-top End === -->

    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/seabite\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
    <script>(function () {
            function maybePrefixUrlField() {
                const value = this.value.trim()
                if (value !== '' && value.indexOf('http') !== 0) {
                    this.value = 'http://' + value
                }
            }

            const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
            for (let j = 0; j < urlFields.length; j++) {
                urlFields[j].addEventListener('blur', maybePrefixUrlField)
            }
        })();</script>
    <script>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, { rootMargin: '200px 0px 200px 0px' });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <script>
        (function () {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='{{ asset('assets/clients/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks3a56.css?ver=wc-9.8.1') }}'
        media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='{{ asset('assets/clients/wp-content/plugins/revslider/public/assets/css/rs6f266.css?ver=6.6.18') }}'
        media='all' />
    <style id='rs-plugin-settings-inline-css'>
        #rs-demo-id {}
    </style>
    <script src="{{ asset('assets/clients/wp-includes/js/dist/hooks.min4fdd.js?ver=4d63a3d491d11ffd8ac6') }}"
        id="wp-hooks-js"></script>
    <script src="{{ asset('assets/clients/wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6') }}"
        id="wp-i18n-js"></script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
    </script>
    <script src="{{ asset('assets/clients/wp-content/plugins/contact-form-7/includes/swv/js/indexfc7a.js?ver=6.0.6') }}"
        id="swv-js"></script>
    <script id="contact-form-7-js-before">
        var wpcf7 = {
            "api": {
                "root": "https:\/\/seabite.peacefulqode.in\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
    </script>
    <script src="{{ asset('assets/clients/wp-content/plugins/contact-form-7/includes/js/indexfc7a.js?ver=6.0.6') }}"
        id="contact-form-7-js"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/revslider/public/assets/js/rbtools.minf266.js?ver=6.6.18') }}"
        defer async id="tp-tools-js"></script>
    <script src="{{ asset('assets/clients/wp-content/plugins/revslider/public/assets/js/rs6.minf266.js?ver=6.6.18') }}"
        defer async id="revmin-js"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/seabite-core/public/js/vendor/TweenMax.min531b.js?ver=2.3.4') }}"
        id="TweenMax-min-js"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/seabite-core/public/js/vendor/owl.carousel.min531b.js?ver=2.3.4') }}"
        id="owl-carousel-js"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/seabite-core/public/js/vendor/progressbar531b.js?ver=2.3.4') }}"
        id="progressbar-js"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/seabite-core/public/js/vendor/jquery.countTo.min531b.js?ver=2.3.4') }}"
        id="count-js"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/seabite-core/public/js/vendor/gsap.min531b.js?ver=2.3.4') }}"
        id="gsap-min-js"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/seabite-core/public/js/vendor/Flip.min531b.js?ver=2.3.4') }}"
        id="Flip-min-js"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/seabite-core/public/js/vendor/ScrollTrigger.min531b.js?ver=2.3.4') }}"
        id="ScrollTrigger-min-js"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/seabite-core/public/js/vendor/vivus.min531b.js?ver=2.3.4') }}"
        id="vivus.min-js"></script>
    <script src="{{ asset('assets/clients/wp-content/plugins/seabite-core/public/js/vendor/slick531b.js?ver=2.3.4') }}"
        id="slick-js-js"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/seabite-core/public/js/vendor/aat.min531b.js?ver=2.3.4') }}"
        id="aat.min-js"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min94cf.js?ver=9.8.1') }}"
        id="sourcebuster-js-js"></script>
    <script id="wc-order-attribution-js-extra">
        var wc_order_attribution = { "params": { "lifetime": 1.0e-5, "session": 30, "base64": false, "ajaxurl": "https:\/\/seabite.peacefulqode.in\/wp-admin\/admin-ajax.php", "prefix": "wc_order_attribution_", "allowTracking": true }, "fields": { "source_type": "current.typ", "referrer": "current_add.rf", "utm_campaign": "current.cmp", "utm_source": "current.src", "utm_medium": "current.mdm", "utm_content": "current.cnt", "utm_id": "current.id", "utm_term": "current.trm", "utm_source_platform": "current.plt", "utm_creative_format": "current.fmt", "utm_marketing_tactic": "current.tct", "session_entry": "current_add.ep", "session_start_time": "current_add.fd", "session_pages": "session.pgs", "session_count": "udata.vst", "user_agent": "udata.uag" } };
    </script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min94cf.js?ver=9.8.1') }}"
        id="wc-order-attribution-js"></script>
    <script src="{{ asset('assets/clients/wp-content/themes/seabite/assets/js/bootstrap.mince52.js?ver=5.0.2') }}"
        id="bootstrap-js"></script>
    <script src="{{ asset('assets/clients/wp-content/themes/seabite/assets/js/script5152.js?ver=1.0') }}"
        id="seabite-script-js"></script>
    <script src="{{ asset('assets/clients/wp-includes/js/hoverIntent.min3e5a.js?ver=1.10.2') }}"
        id="hoverIntent-js"></script>
    <script src="{{ asset('assets/clients/wp-content/plugins/megamenu/js/maxmegamenu1bba.js?ver=3.5') }}"
        id="megamenu-js"></script>
    <script defer
        src="{{ asset('assets/clients/wp-content/plugins/mailchimp-for-wp/assets/js/formsad2c.js?ver=4.10.3') }}"
        id="mc4wp-forms-api-js"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/elementor/assets/js/webpack.runtime.min87cc.js?ver=3.28.3') }}"
        id="elementor-webpack-runtime-js"></script>
    <script
        src="{{ asset('assets/clients/wp-content/plugins/elementor/assets/js/frontend-modules.min87cc.js?ver=3.28.3') }}"
        id="elementor-frontend-modules-js"></script>
    <script src="{{ asset('assets/clients/wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3') }}"
        id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } }, "hasCustomBreakpoints": false }, "version": "3.28.3", "is_static": false, "experimentalFeatures": { "e_font_icon_svg": true, "additional_custom_breakpoints": true, "e_local_google_fonts": true, "editor_v2": true, "home_screen": true }, "urls": { "assets": "https:\/\/seabite.peacefulqode.in\/wp-content\/plugins\/elementor\/assets\/", "ajaxurl": "https:\/\/seabite.peacefulqode.in\/wp-admin\/admin-ajax.php", "uploadUrl": "http:\/\/seabite.peacefulqode.in\/wp-content\/uploads" }, "nonces": { "floatingButtonsClickTracking": "fc839ce37d" }, "swiperClass": "swiper", "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 2408, "title": "About%20Us%20%E2%80%93%20Seabite", "excerpt": "", "featuredImage": false } };
    </script>
    <script src="{{ asset('assets/clients/wp-content/plugins/elementor/assets/js/frontend.min87cc.js?ver=3.28.3') }}"
        id="elementor-frontend-js"></script>
    {{-- JQuery --}}
    {{--
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}
    {{-- JQuery toastify --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery-toastify@1.1.0/jquery.toastify.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- Javascript --}}
    <script src="{{ asset('assets/clients/wp-includes/js/custom.js')}}"></script>
</body>

</html>