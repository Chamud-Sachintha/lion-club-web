<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="max-image-preview:large" />
        <title>Lions International District 306 A2</title>
        <link
            rel="alternate"
            type="application/rss+xml"
            title="Lions International District 306 A2 » Feed"
            href="https://lionsdistrict306a2.org/feed/"
        />
        <link
            rel="alternate"
            type="application/rss+xml"
            title="Lions International District 306 A2 » Comments Feed"
            href="https://lionsdistrict306a2.org/comments/feed/"
        />
        <script>
            window._wpemojiSettings = {
                baseUrl:
                    "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
                ext: ".png",
                svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
                svgExt: ".svg",
                source: {
                    concatemoji:
                        "https:\/\/lionsdistrict306a2.org\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.2",
                },
            };
            /*! This file is auto-generated */
            !(function (i, n) {
                var o, s, e;
                function c(e) {
                    try {
                        var t = {
                            supportTests: e,
                            timestamp: new Date().valueOf(),
                        };
                        sessionStorage.setItem(o, JSON.stringify(t));
                    } catch (e) {}
                }
                function p(e, t, n) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                        e.fillText(t, 0, 0);
                    var t = new Uint32Array(
                            e.getImageData(
                                0,
                                0,
                                e.canvas.width,
                                e.canvas.height
                            ).data
                        ),
                        r =
                            (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                            e.fillText(n, 0, 0),
                            new Uint32Array(
                                e.getImageData(
                                    0,
                                    0,
                                    e.canvas.width,
                                    e.canvas.height
                                ).data
                            ));
                    return t.every(function (e, t) {
                        return e === r[t];
                    });
                }
                function u(e, t, n) {
                    switch (t) {
                        case "flag":
                            return n(
                                e,
                                "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                                "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
                            )
                                ? !1
                                : !n(
                                      e,
                                      "\ud83c\uddfa\ud83c\uddf3",
                                      "\ud83c\uddfa\u200b\ud83c\uddf3"
                                  ) &&
                                      !n(
                                          e,
                                          "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                          "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                      );
                        case "emoji":
                            return !n(
                                e,
                                "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                                "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff"
                            );
                    }
                    return !1;
                }
                function f(e, t, n) {
                    var r =
                            "undefined" != typeof WorkerGlobalScope &&
                            self instanceof WorkerGlobalScope
                                ? new OffscreenCanvas(300, 150)
                                : i.createElement("canvas"),
                        a = r.getContext("2d", { willReadFrequently: !0 }),
                        o =
                            ((a.textBaseline = "top"),
                            (a.font = "600 32px Arial"),
                            {});
                    return (
                        e.forEach(function (e) {
                            o[e] = t(a, e, n);
                        }),
                        o
                    );
                }
                function t(e) {
                    var t = i.createElement("script");
                    (t.src = e), (t.defer = !0), i.head.appendChild(t);
                }
                "undefined" != typeof Promise &&
                    ((o = "wpEmojiSettingsSupports"),
                    (s = ["flag", "emoji"]),
                    (n.supports = { everything: !0, everythingExceptFlag: !0 }),
                    (e = new Promise(function (e) {
                        i.addEventListener("DOMContentLoaded", e, { once: !0 });
                    })),
                    new Promise(function (t) {
                        var n = (function () {
                            try {
                                var e = JSON.parse(sessionStorage.getItem(o));
                                if (
                                    "object" == typeof e &&
                                    "number" == typeof e.timestamp &&
                                    new Date().valueOf() <
                                        e.timestamp + 604800 &&
                                    "object" == typeof e.supportTests
                                )
                                    return e.supportTests;
                            } catch (e) {}
                            return null;
                        })();
                        if (!n) {
                            if (
                                "undefined" != typeof Worker &&
                                "undefined" != typeof OffscreenCanvas &&
                                "undefined" != typeof URL &&
                                URL.createObjectURL &&
                                "undefined" != typeof Blob
                            )
                                try {
                                    var e =
                                            "postMessage(" +
                                            f.toString() +
                                            "(" +
                                            [
                                                JSON.stringify(s),
                                                u.toString(),
                                                p.toString(),
                                            ].join(",") +
                                            "));",
                                        r = new Blob([e], {
                                            type: "text/javascript",
                                        }),
                                        a = new Worker(URL.createObjectURL(r), {
                                            name: "wpTestEmojiSupports",
                                        });
                                    return void (a.onmessage = function (e) {
                                        c((n = e.data)), a.terminate(), t(n);
                                    });
                                } catch (e) {}
                            c((n = f(s, u, p)));
                        }
                        t(n);
                    })
                        .then(function (e) {
                            for (var t in e)
                                (n.supports[t] = e[t]),
                                    (n.supports.everything =
                                        n.supports.everything && n.supports[t]),
                                    "flag" !== t &&
                                        (n.supports.everythingExceptFlag =
                                            n.supports.everythingExceptFlag &&
                                            n.supports[t]);
                            (n.supports.everythingExceptFlag =
                                n.supports.everythingExceptFlag &&
                                !n.supports.flag),
                                (n.DOMReady = !1),
                                (n.readyCallback = function () {
                                    n.DOMReady = !0;
                                });
                        })
                        .then(function () {
                            return e;
                        })
                        .then(function () {
                            var e;
                            n.supports.everything ||
                                (n.readyCallback(),
                                (e = n.source || {}).concatemoji
                                    ? t(e.concatemoji)
                                    : e.wpemoji &&
                                      e.twemoji &&
                                      (t(e.twemoji), t(e.wpemoji)));
                        }));
            })((window, document), window._wpemojiSettings);
        </script>
        <style>
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
        <link
            rel="stylesheet"
            id="ts-vgallery-block-css-css"
            href="css/ts_vgallery_block.css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="metaslider-flex-slider-css"
            href="css/flexslider.css"
            media="all"
            property="stylesheet"
        />
        <link
            rel="stylesheet"
            id="metaslider-public-css"
            href="css/public.css"
            media="all"
            property="stylesheet"
        />
        <style id="wp-block-site-logo-inline-css">
            .wp-block-site-logo {
                box-sizing: border-box;
                line-height: 0;
            }
            .wp-block-site-logo a {
                display: inline-block;
            }
            .wp-block-site-logo.is-default-size img {
                height: auto;
                width: 120px;
            }
            .wp-block-site-logo img {
                height: auto;
                max-width: 100%;
            }
            .wp-block-site-logo a,
            .wp-block-site-logo img {
                border-radius: inherit;
            }
            .wp-block-site-logo.aligncenter {
                margin-left: auto;
                margin-right: auto;
                text-align: center;
            }
            .wp-block-site-logo.is-style-rounded {
                border-radius: 9999px;
            }
        </style>
        <style id="wp-block-site-title-inline-css">
            .wp-block-site-title a {
                color: inherit;
            }
            .wp-block-site-title a:where(:not(.wp-element-button)) {
                color: var(--wp--preset--color--black);
                text-decoration: none;
            }
        </style>
        <style id="wp-block-button-inline-css">
            .wp-block-button__link {
                box-sizing: border-box;
                cursor: pointer;
                display: inline-block;
                text-align: center;
                word-break: break-word;
            }
            .wp-block-button__link.aligncenter {
                text-align: center;
            }
            .wp-block-button__link.alignright {
                text-align: right;
            }
            :where(.wp-block-button__link) {
                border-radius: 9999px;
                box-shadow: none;
                padding: calc(0.667em + 2px) calc(1.333em + 2px);
                text-decoration: none;
            }
            .wp-block-button[style*="text-decoration"] .wp-block-button__link {
                text-decoration: inherit;
            }
            .wp-block-buttons > .wp-block-button.has-custom-width {
                max-width: none;
            }
            .wp-block-buttons
                > .wp-block-button.has-custom-width
                .wp-block-button__link {
                width: 100%;
            }
            .wp-block-buttons
                > .wp-block-button.has-custom-font-size
                .wp-block-button__link {
                font-size: inherit;
            }
            .wp-block-buttons > .wp-block-button.wp-block-button__width-25 {
                width: calc(25% - var(--wp--style--block-gap, 0.5em) * 0.75);
            }
            .wp-block-buttons > .wp-block-button.wp-block-button__width-50 {
                width: calc(50% - var(--wp--style--block-gap, 0.5em) * 0.5);
            }
            .wp-block-buttons > .wp-block-button.wp-block-button__width-75 {
                width: calc(75% - var(--wp--style--block-gap, 0.5em) * 0.25);
            }
            .wp-block-buttons > .wp-block-button.wp-block-button__width-100 {
                flex-basis: 100%;
                width: 100%;
            }
            .wp-block-buttons.is-vertical
                > .wp-block-button.wp-block-button__width-25 {
                width: 25%;
            }
            .wp-block-buttons.is-vertical
                > .wp-block-button.wp-block-button__width-50 {
                width: 50%;
            }
            .wp-block-buttons.is-vertical
                > .wp-block-button.wp-block-button__width-75 {
                width: 75%;
            }
            .wp-block-button.is-style-squared,
            .wp-block-button__link.wp-block-button.is-style-squared {
                border-radius: 0;
            }
            .wp-block-button.no-border-radius,
            .wp-block-button__link.no-border-radius {
                border-radius: 0 !important;
            }
            .wp-block-button .wp-block-button__link.is-style-outline,
            .wp-block-button.is-style-outline > .wp-block-button__link {
                border: 2px solid;
                padding: 0.667em 1.333em;
            }
            .wp-block-button
                .wp-block-button__link.is-style-outline:not(.has-text-color),
            .wp-block-button.is-style-outline
                > .wp-block-button__link:not(.has-text-color) {
                color: currentColor;
            }
            .wp-block-button
                .wp-block-button__link.is-style-outline:not(.has-background),
            .wp-block-button.is-style-outline
                > .wp-block-button__link:not(.has-background) {
                background-color: transparent;
                background-image: none;
            }
            .wp-block-button .wp-block-button__link:where(.has-border-color) {
                border-width: initial;
            }
            .wp-block-button
                .wp-block-button__link:where([style*="border-top-color"]) {
                border-top-width: medium;
            }
            .wp-block-button
                .wp-block-button__link:where([style*="border-right-color"]) {
                border-right-width: medium;
            }
            .wp-block-button
                .wp-block-button__link:where([style*="border-bottom-color"]) {
                border-bottom-width: medium;
            }
            .wp-block-button
                .wp-block-button__link:where([style*="border-left-color"]) {
                border-left-width: medium;
            }
            .wp-block-button
                .wp-block-button__link:where([style*="border-style"]) {
                border-width: initial;
            }
            .wp-block-button
                .wp-block-button__link:where([style*="border-top-style"]) {
                border-top-width: medium;
            }
            .wp-block-button
                .wp-block-button__link:where([style*="border-right-style"]) {
                border-right-width: medium;
            }
            .wp-block-button
                .wp-block-button__link:where([style*="border-bottom-style"]) {
                border-bottom-width: medium;
            }
            .wp-block-button
                .wp-block-button__link:where([style*="border-left-style"]) {
                border-left-width: medium;
            }
            .wp-block-button .wp-block-button__link {
                border-radius: 12px;
                border-color: transparent;
                border-width: 1px;
                border-style: solid;
                font-size: var(--wp--preset--font-size--small);
                line-height: 1.77em;
                padding-top: 10px;
                padding-right: 25px;
                padding-bottom: 10px;
                padding-left: 25px;
            }
            .wp-block-button
                .wp-block-button__link
                a:where(:not(.wp-element-button)) {
                text-decoration: none;
            }
        </style>
        <style id="wp-block-buttons-inline-css">
            .wp-block-buttons.is-vertical {
                flex-direction: column;
            }
            .wp-block-buttons.is-vertical > .wp-block-button:last-child {
                margin-bottom: 0;
            }
            .wp-block-buttons > .wp-block-button {
                display: inline-block;
                margin: 0;
            }
            .wp-block-buttons.is-content-justification-left {
                justify-content: flex-start;
            }
            .wp-block-buttons.is-content-justification-left.is-vertical {
                align-items: flex-start;
            }
            .wp-block-buttons.is-content-justification-center {
                justify-content: center;
            }
            .wp-block-buttons.is-content-justification-center.is-vertical {
                align-items: center;
            }
            .wp-block-buttons.is-content-justification-right {
                justify-content: flex-end;
            }
            .wp-block-buttons.is-content-justification-right.is-vertical {
                align-items: flex-end;
            }
            .wp-block-buttons.is-content-justification-space-between {
                justify-content: space-between;
            }
            .wp-block-buttons.aligncenter {
                text-align: center;
            }
            .wp-block-buttons:not(
                    .is-content-justification-space-between,
                    .is-content-justification-right,
                    .is-content-justification-left,
                    .is-content-justification-center
                )
                .wp-block-button.aligncenter {
                margin-left: auto;
                margin-right: auto;
                width: 100%;
            }
            .wp-block-buttons[style*="text-decoration"] .wp-block-button,
            .wp-block-buttons[style*="text-decoration"] .wp-block-button__link {
                text-decoration: inherit;
            }
            .wp-block-buttons.has-custom-font-size .wp-block-button__link {
                font-size: inherit;
            }
            .wp-block-button.aligncenter {
                text-align: center;
            }
            .wp-block-buttons .wp-element-button,
            .wp-block-buttons .wp-block-button__link {
                background-color: var(--wp--preset--color--primary);
                color: #fff;
            }
            .wp-block-buttons .wp-element-button:hover,
            .wp-block-buttons .wp-block-button__link:hover {
                background-color: var(--wp--preset--color--heading);
                color: #fff;
            }
        </style>
        <style id="wp-block-columns-inline-css">
            .wp-block-columns {
                align-items: normal !important;
                box-sizing: border-box;
                display: flex;
                flex-wrap: wrap !important;
            }
            @media (min-width: 782px) {
                .wp-block-columns {
                    flex-wrap: nowrap !important;
                }
            }
            .wp-block-columns.are-vertically-aligned-top {
                align-items: flex-start;
            }
            .wp-block-columns.are-vertically-aligned-center {
                align-items: center;
            }
            .wp-block-columns.are-vertically-aligned-bottom {
                align-items: flex-end;
            }
            @media (max-width: 781px) {
                .wp-block-columns:not(.is-not-stacked-on-mobile)
                    > .wp-block-column {
                    flex-basis: 100% !important;
                }
            }
            @media (min-width: 782px) {
                .wp-block-columns:not(.is-not-stacked-on-mobile)
                    > .wp-block-column {
                    flex-basis: 0;
                    flex-grow: 1;
                }
                .wp-block-columns:not(.is-not-stacked-on-mobile)
                    > .wp-block-column[style*="flex-basis"] {
                    flex-grow: 0;
                }
            }
            .wp-block-columns.is-not-stacked-on-mobile {
                flex-wrap: nowrap !important;
            }
            .wp-block-columns.is-not-stacked-on-mobile > .wp-block-column {
                flex-basis: 0;
                flex-grow: 1;
            }
            .wp-block-columns.is-not-stacked-on-mobile
                > .wp-block-column[style*="flex-basis"] {
                flex-grow: 0;
            }
            :where(.wp-block-columns) {
                margin-bottom: 1.75em;
            }
            :where(.wp-block-columns.has-background) {
                padding: 1.25em 2.375em;
            }
            .wp-block-column {
                flex-grow: 1;
                min-width: 0;
                overflow-wrap: break-word;
                word-break: break-word;
            }
            .wp-block-column.is-vertically-aligned-top {
                align-self: flex-start;
            }
            .wp-block-column.is-vertically-aligned-center {
                align-self: center;
            }
            .wp-block-column.is-vertically-aligned-bottom {
                align-self: flex-end;
            }
            .wp-block-column.is-vertically-aligned-bottom,
            .wp-block-column.is-vertically-aligned-center,
            .wp-block-column.is-vertically-aligned-top {
                width: 100%;
            }
            .wp-block-columns {
                font-size: var(--wp--preset--font-size--small);
            }
        </style>
        <style id="wp-block-navigation-link-inline-css">
            .wp-block-navigation .wp-block-navigation-item__label {
                overflow-wrap: break-word;
                word-break: normal;
            }
            .wp-block-navigation .wp-block-navigation-item__description {
                display: none;
            }
        </style>
        <link
            rel="stylesheet"
            id="wp-block-navigation-css"
            href="css/style.min_3.css"
            media="all"
        />
        <style id="wp-block-navigation-inline-css">
            .wp-block-navigation {
                font-size: var(--wp--preset--font-size--small);
                font-weight: 500;
                line-height: 1.77;
            }
            .wp-block-navigation a:where(:not(.wp-element-button)) {
                color: inherit;
                padding-top: 0;
                padding-right: 0;
                padding-bottom: 0;
                padding-left: 0;
            }
            .wp-block-navigation a:where(:not(.wp-element-button)):hover {
                color: var(--wp--preset--color--primary);
            }
        </style>
        <style id="wp-block-group-inline-css">
            .wp-block-group {
                box-sizing: border-box;
            }
        </style>
        <style id="wp-block-group-theme-inline-css">
            :where(.wp-block-group.has-background) {
                padding: 1.25em 2.375em;
            }
        </style>
        <style id="wp-block-template-part-theme-inline-css">
            .wp-block-template-part.has-background {
                margin-bottom: 0;
                margin-top: 0;
                padding: 1.25em 2.375em;
            }
        </style>
        <style id="wp-block-spacer-inline-css">
            .wp-block-spacer {
                clear: both;
            }
        </style>
        <style id="wp-block-heading-inline-css">
            h1.has-background,
            h2.has-background,
            h3.has-background,
            h4.has-background,
            h5.has-background,
            h6.has-background {
                padding: 1.25em 2.375em;
            }
        </style>
        <style id="wp-block-paragraph-inline-css">
            .is-small-text {
                font-size: 0.875em;
            }
            .is-regular-text {
                font-size: 1em;
            }
            .is-large-text {
                font-size: 2.25em;
            }
            .is-larger-text {
                font-size: 3em;
            }
            .has-drop-cap:not(:focus):first-letter {
                float: left;
                font-size: 8.4em;
                font-style: normal;
                font-weight: 100;
                line-height: 0.68;
                margin: 0.05em 0.1em 0 0;
                text-transform: uppercase;
            }
            body.rtl .has-drop-cap:not(:focus):first-letter {
                float: none;
                margin-left: 0.1em;
            }
            p.has-drop-cap.has-background {
                overflow: hidden;
            }
            p.has-background {
                padding: 1.25em 2.375em;
            }
            :where(p.has-text-color:not(.has-link-color)) a {
                color: inherit;
            }
            p {
                color: var(--wp--preset--color--base);
                font-size: var(--wp--preset--font-size--small);
                margin-top: 0px;
                margin-bottom: var(--wp--custom--spacing--blockbottom);
            }
            p a:where(:not(.wp-element-button)) {
                font-weight: var(--wp--custom--font-weight--semi-bold);
            }
        </style>
        <style id="wp-block-post-featured-image-inline-css">
            .wp-block-post-featured-image {
                margin-left: 0;
                margin-right: 0;
            }
            .wp-block-post-featured-image a {
                display: block;
                height: 100%;
            }
            .wp-block-post-featured-image img {
                box-sizing: border-box;
                height: auto;
                max-width: 100%;
                vertical-align: bottom;
                width: 100%;
            }
            .wp-block-post-featured-image.alignfull img,
            .wp-block-post-featured-image.alignwide img {
                width: 100%;
            }
            .wp-block-post-featured-image
                .wp-block-post-featured-image__overlay.has-background-dim {
                background-color: #000;
                inset: 0;
                position: absolute;
            }
            .wp-block-post-featured-image {
                position: relative;
            }
            .wp-block-post-featured-image
                .wp-block-post-featured-image__overlay.has-background-gradient {
                background-color: transparent;
            }
            .wp-block-post-featured-image
                .wp-block-post-featured-image__overlay.has-background-dim-0 {
                opacity: 0;
            }
            .wp-block-post-featured-image
                .wp-block-post-featured-image__overlay.has-background-dim-10 {
                opacity: 0.1;
            }
            .wp-block-post-featured-image
                .wp-block-post-featured-image__overlay.has-background-dim-20 {
                opacity: 0.2;
            }
            .wp-block-post-featured-image
                .wp-block-post-featured-image__overlay.has-background-dim-30 {
                opacity: 0.3;
            }
            .wp-block-post-featured-image
                .wp-block-post-featured-image__overlay.has-background-dim-40 {
                opacity: 0.4;
            }
            .wp-block-post-featured-image
                .wp-block-post-featured-image__overlay.has-background-dim-50 {
                opacity: 0.5;
            }
            .wp-block-post-featured-image
                .wp-block-post-featured-image__overlay.has-background-dim-60 {
                opacity: 0.6;
            }
            .wp-block-post-featured-image
                .wp-block-post-featured-image__overlay.has-background-dim-70 {
                opacity: 0.7;
            }
            .wp-block-post-featured-image
                .wp-block-post-featured-image__overlay.has-background-dim-80 {
                opacity: 0.8;
            }
            .wp-block-post-featured-image
                .wp-block-post-featured-image__overlay.has-background-dim-90 {
                opacity: 0.9;
            }
            .wp-block-post-featured-image
                .wp-block-post-featured-image__overlay.has-background-dim-100 {
                opacity: 1;
            }
        </style>
        <style id="wp-block-post-terms-inline-css">
            .wp-block-post-terms {
                box-sizing: border-box;
            }
            .wp-block-post-terms .wp-block-post-terms__separator {
                white-space: pre-wrap;
            }
            .wp-block-post-terms {
                font-weight: var(--wp--custom--font-weight--regular);
            }
        </style>
        <style id="wp-block-post-date-inline-css">
            .wp-block-post-date {
                box-sizing: border-box;
            }
            .wp-block-post-date {
                color: var(--wp--preset--color--base);
            }
        </style>
        <style id="wp-block-post-title-inline-css">
            .wp-block-post-title {
                box-sizing: border-box;
                word-break: break-word;
            }
            .wp-block-post-title a {
                display: inline-block;
            }
            .wp-block-post-title a:where(:not(.wp-element-button)) {
                color: var(--wp--preset--color--heading);
            }
        </style>
        <style id="wp-block-post-excerpt-inline-css">
            :where(.wp-block-post-excerpt) {
                margin-bottom: var(--wp--style--block-gap);
                margin-top: var(--wp--style--block-gap);
            }
            .wp-block-post-excerpt__excerpt {
                margin-bottom: 0;
                margin-top: 0;
            }
            .wp-block-post-excerpt__more-text {
                margin-bottom: 0;
                margin-top: var(--wp--style--block-gap);
            }
            .wp-block-post-excerpt__more-link {
                display: inline-block;
            }
        </style>
        <style id="wp-block-post-template-inline-css">
            .wp-block-post-template {
                list-style: none;
                margin-bottom: 0;
                margin-top: 0;
                max-width: 100%;
                padding: 0;
            }
            .wp-block-post-template.wp-block-post-template {
                background: none;
            }
            .wp-block-post-template.is-flex-container {
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                gap: 1.25em;
            }
            .wp-block-post-template.is-flex-container > li {
                margin: 0;
                width: 100%;
            }
            @media (min-width: 600px) {
                .wp-block-post-template.is-flex-container.is-flex-container.columns-2
                    > li {
                    width: calc(50% - 0.625em);
                }
                .wp-block-post-template.is-flex-container.is-flex-container.columns-3
                    > li {
                    width: calc(33.33333% - 0.83333em);
                }
                .wp-block-post-template.is-flex-container.is-flex-container.columns-4
                    > li {
                    width: calc(25% - 0.9375em);
                }
                .wp-block-post-template.is-flex-container.is-flex-container.columns-5
                    > li {
                    width: calc(20% - 1em);
                }
                .wp-block-post-template.is-flex-container.is-flex-container.columns-6
                    > li {
                    width: calc(16.66667% - 1.04167em);
                }
            }
            @media (max-width: 600px) {
                .wp-block-post-template-is-layout-grid.wp-block-post-template-is-layout-grid.wp-block-post-template-is-layout-grid.wp-block-post-template-is-layout-grid {
                    grid-template-columns: 1fr;
                }
            }
        </style>
        <link
            rel="stylesheet"
            id="wp-block-image-css"
            href="css/style.min_1.css"
            media="all"
        />
        <style id="wp-block-image-theme-inline-css">
            .wp-block-image figcaption {
                color: #555;
                font-size: 13px;
                text-align: center;
            }
            .is-dark-theme .wp-block-image figcaption {
                color: hsla(0, 0%, 100%, 0.65);
            }
            .wp-block-image {
                margin: 0 0 1em;
            }
        </style>
        <link
            rel="stylesheet"
            id="wp-block-social-links-css"
            href="css/style.min.css"
            media="all"
        />
        <style id="wp-block-separator-inline-css">
            @charset "UTF-8";
            .wp-block-separator {
                border: 1px solid;
                border-left: none;
                border-right: none;
            }
            .wp-block-separator.is-style-dots {
                background: none !important;
                border: none;
                height: auto;
                line-height: 1;
                text-align: center;
            }
            .wp-block-separator.is-style-dots:before {
                color: currentColor;
                content: "···";
                font-family: serif;
                font-size: 1.5em;
                letter-spacing: 2em;
                padding-left: 2em;
            }
        </style>
        <style id="wp-block-separator-theme-inline-css">
            .wp-block-separator.has-css-opacity {
                opacity: 0.4;
            }
            .wp-block-separator {
                border: none;
                border-bottom: 2px solid;
                margin-left: auto;
                margin-right: auto;
            }
            .wp-block-separator.has-alpha-channel-opacity {
                opacity: 1;
            }
            .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
                width: 100px;
            }
            .wp-block-separator.has-background:not(.is-style-dots) {
                border-bottom: none;
                height: 1px;
            }
            .wp-block-separator.has-background:not(.is-style-wide):not(
                    .is-style-dots
                ) {
                height: 2px;
            }
        </style>
        <style id="wp-block-library-inline-css">
            :root {
                --wp-admin-theme-color: #007cba;
                --wp-admin-theme-color--rgb: 0, 124, 186;
                --wp-admin-theme-color-darker-10: #006ba1;
                --wp-admin-theme-color-darker-10--rgb: 0, 107, 161;
                --wp-admin-theme-color-darker-20: #005a87;
                --wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
                --wp-admin-border-width-focus: 2px;
                --wp-block-synced-color: #7a00df;
                --wp-block-synced-color--rgb: 122, 0, 223;
            }
            @media (min-resolution: 192dpi) {
                :root {
                    --wp-admin-border-width-focus: 1.5px;
                }
            }
            .wp-element-button {
                cursor: pointer;
            }
            :root {
                --wp--preset--font-size--normal: 16px;
                --wp--preset--font-size--huge: 42px;
            }
            :root .has-very-light-gray-background-color {
                background-color: #eee;
            }
            :root .has-very-dark-gray-background-color {
                background-color: #313131;
            }
            :root .has-very-light-gray-color {
                color: #eee;
            }
            :root .has-very-dark-gray-color {
                color: #313131;
            }
            :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
                background: linear-gradient(135deg, #00d084, #0693e3);
            }
            :root .has-purple-crush-gradient-background {
                background: linear-gradient(
                    135deg,
                    #34e2e4,
                    #4721fb 50%,
                    #ab1dfe
                );
            }
            :root .has-hazy-dawn-gradient-background {
                background: linear-gradient(135deg, #faaca8, #dad0ec);
            }
            :root .has-subdued-olive-gradient-background {
                background: linear-gradient(135deg, #fafae1, #67a671);
            }
            :root .has-atomic-cream-gradient-background {
                background: linear-gradient(135deg, #fdd79a, #004a59);
            }
            :root .has-nightshade-gradient-background {
                background: linear-gradient(135deg, #330968, #31cdcf);
            }
            :root .has-midnight-gradient-background {
                background: linear-gradient(135deg, #020381, #2874fc);
            }
            .has-regular-font-size {
                font-size: 1em;
            }
            .has-larger-font-size {
                font-size: 2.625em;
            }
            .has-normal-font-size {
                font-size: var(--wp--preset--font-size--normal);
            }
            .has-huge-font-size {
                font-size: var(--wp--preset--font-size--huge);
            }
            .has-text-align-center {
                text-align: center;
            }
            .has-text-align-left {
                text-align: left;
            }
            .has-text-align-right {
                text-align: right;
            }
            #end-resizable-editor-section {
                display: none;
            }
            .aligncenter {
                clear: both;
            }
            .items-justified-left {
                justify-content: flex-start;
            }
            .items-justified-center {
                justify-content: center;
            }
            .items-justified-right {
                justify-content: flex-end;
            }
            .items-justified-space-between {
                justify-content: space-between;
            }
            .screen-reader-text {
                clip: rect(1px, 1px, 1px, 1px);
                word-wrap: normal !important;
                border: 0;
                -webkit-clip-path: inset(50%);
                clip-path: inset(50%);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }
            .screen-reader-text:focus {
                clip: auto !important;
                background-color: #ddd;
                -webkit-clip-path: none;
                clip-path: none;
                color: #444;
                display: block;
                font-size: 1em;
                height: auto;
                left: 5px;
                line-height: normal;
                padding: 15px 23px 14px;
                text-decoration: none;
                top: 5px;
                width: auto;
                z-index: 100000;
            }
            html :where(.has-border-color) {
                border-style: solid;
            }
            html :where([style*="border-top-color"]) {
                border-top-style: solid;
            }
            html :where([style*="border-right-color"]) {
                border-right-style: solid;
            }
            html :where([style*="border-bottom-color"]) {
                border-bottom-style: solid;
            }
            html :where([style*="border-left-color"]) {
                border-left-style: solid;
            }
            html :where([style*="border-width"]) {
                border-style: solid;
            }
            html :where([style*="border-top-width"]) {
                border-top-style: solid;
            }
            html :where([style*="border-right-width"]) {
                border-right-style: solid;
            }
            html :where([style*="border-bottom-width"]) {
                border-bottom-style: solid;
            }
            html :where([style*="border-left-width"]) {
                border-left-style: solid;
            }
            html :where(img[class*="wp-image-"]) {
                height: auto;
                max-width: 100%;
            }
            :where(figure) {
                margin: 0 0 1em;
            }
            html :where(.is-position-sticky) {
                --wp-admin--admin-bar--position-offset: var(
                    --wp-admin--admin-bar--height,
                    0px
                );
            }
            @media screen and (max-width: 600px) {
                html :where(.is-position-sticky) {
                    --wp-admin--admin-bar--position-offset: 0px;
                }
            }
        </style>
        <style id="global-styles-inline-css">
            body {
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
                --wp--preset--color--base: rgba(13, 23, 59, 0.8);
                --wp--preset--color--heading: #0d173b;
                --wp--preset--color--primary: #00529b;
                --wp--preset--color--section-bg: rgba(13, 23, 59, 0.04);
                --wp--preset--color--sub-bg: rgba(55, 115, 254, 0.12);
                --wp--preset--color--current-color: currentColor;
                --wp--preset--color--inherit: inherit;
                --wp--preset--color--transparent: transparent;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(
                    135deg,
                    rgba(6, 147, 227, 1) 0%,
                    rgb(155, 81, 224) 100%
                );
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(
                    135deg,
                    rgb(122, 220, 180) 0%,
                    rgb(0, 208, 130) 100%
                );
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(
                    135deg,
                    rgba(252, 185, 0, 1) 0%,
                    rgba(255, 105, 0, 1) 100%
                );
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(
                    135deg,
                    rgba(255, 105, 0, 1) 0%,
                    rgb(207, 46, 46) 100%
                );
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(
                    135deg,
                    rgb(238, 238, 238) 0%,
                    rgb(169, 184, 195) 100%
                );
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(
                    135deg,
                    rgb(74, 234, 220) 0%,
                    rgb(151, 120, 209) 20%,
                    rgb(207, 42, 186) 40%,
                    rgb(238, 44, 130) 60%,
                    rgb(251, 105, 98) 80%,
                    rgb(254, 248, 76) 100%
                );
                --wp--preset--gradient--blush-light-purple: linear-gradient(
                    135deg,
                    rgb(255, 206, 236) 0%,
                    rgb(152, 150, 240) 100%
                );
                --wp--preset--gradient--blush-bordeaux: linear-gradient(
                    135deg,
                    rgb(254, 205, 165) 0%,
                    rgb(254, 45, 45) 50%,
                    rgb(107, 0, 62) 100%
                );
                --wp--preset--gradient--luminous-dusk: linear-gradient(
                    135deg,
                    rgb(255, 203, 112) 0%,
                    rgb(199, 81, 192) 50%,
                    rgb(65, 88, 208) 100%
                );
                --wp--preset--gradient--pale-ocean: linear-gradient(
                    135deg,
                    rgb(255, 245, 203) 0%,
                    rgb(182, 227, 212) 50%,
                    rgb(51, 167, 181) 100%
                );
                --wp--preset--gradient--electric-grass: linear-gradient(
                    135deg,
                    rgb(202, 248, 128) 0%,
                    rgb(113, 206, 126) 100%
                );
                --wp--preset--gradient--midnight: linear-gradient(
                    135deg,
                    rgb(2, 3, 129) 0%,
                    rgb(40, 116, 252) 100%
                );
                --wp--preset--gradient--primary-blue: linear-gradient(
                    88.08deg,
                    #5da7fe -10.27%,
                    #3773fe 107.99%
                );
                --wp--preset--font-size--small: 18px;
                --wp--preset--font-size--medium: clamp(18px, 2vw, 22px);
                --wp--preset--font-size--large: clamp(24px, 3vw, 36px);
                --wp--preset--font-size--x-large: clamp(32px, 3.6vw, 48px);
                --wp--preset--font-size--small-medium: clamp(18px, 1.5vw, 20px);
                --wp--preset--font-size--medium-large: clamp(20px, 2.5vw, 24px);
                --wp--preset--font-size--xx-large: clamp(40px, 4.2vw, 56px);
                --wp--preset--font-size--xxx-large: clamp(48px, 5.4vw, 64px);
                --wp--preset--font-size--xxxx-large: clamp(48px, 6.6vw, 72px);
                --wp--preset--font-family--system-font: -apple-system,
                    BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu,
                    Cantarell, "Helvetica Neue", sans-serif;
                --wp--preset--font-family--figtree: Figtree;
                --wp--preset--spacing--50: 1.5px;
                --wp--preset--spacing--60: 3px;
                --wp--preset--spacing--70: 4.5px;
                --wp--preset--spacing--80: 6px;
                --wp--preset--spacing--90: 7.5px;
                --wp--preset--spacing--100: 9px;
                --wp--preset--spacing--110: 10.5px;
                --wp--preset--spacing--120: 12px;
                --wp--preset--spacing--130: 13.5px;
                --wp--preset--spacing--140: 15px;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
                    6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
                --wp--custom--shadow-one: 0px 6px 32px 0px rgba(0, 14, 48, 0.08);
                --wp--custom--shadow-two: 0px 72px 200px -32px #8f8f8f;
                --wp--custom--spacing--outer: min(5vw, 30px);
                --wp--custom--spacing--blockbottom: 31px;
                --wp--custom--service-boxshadow: rgba(0, 14, 48, 0.08);
                --wp--custom--font-weight--black: 900;
                --wp--custom--font-weight--extra-bold: 800;
                --wp--custom--font-weight--bold: 700;
                --wp--custom--font-weight--semi-bold: 600;
                --wp--custom--font-weight--medium: 500;
                --wp--custom--font-weight--regular: 400;
                --wp--custom--font-weight--light: 300;
                --wp--custom--font-weight--extra-light: 200;
                --wp--custom--font-weight--thin: 100;
            }
            body {
                margin: 0;
                --wp--style--global--content-size: 700px;
                --wp--style--global--wide-size: 1320px;
            }
            .wp-site-blocks {
                padding-top: var(--wp--style--root--padding-top);
                padding-bottom: var(--wp--style--root--padding-bottom);
            }
            .has-global-padding {
                padding-right: var(--wp--style--root--padding-right);
                padding-left: var(--wp--style--root--padding-left);
            }
            .has-global-padding :where(.has-global-padding) {
                padding-right: 0;
                padding-left: 0;
            }
            .has-global-padding > .alignfull {
                margin-right: calc(var(--wp--style--root--padding-right) * -1);
                margin-left: calc(var(--wp--style--root--padding-left) * -1);
            }
            .has-global-padding :where(.has-global-padding) > .alignfull {
                margin-right: 0;
                margin-left: 0;
            }
            .has-global-padding
                > .alignfull:where(:not(.has-global-padding))
                > :where(
                    [class*="wp-block-"]:not(.alignfull):not([class*="__"]),
                    p,
                    h1,
                    h2,
                    h3,
                    h4,
                    h5,
                    h6,
                    ul,
                    ol
                ) {
                padding-right: var(--wp--style--root--padding-right);
                padding-left: var(--wp--style--root--padding-left);
            }
            .has-global-padding
                :where(.has-global-padding)
                > .alignfull:where(:not(.has-global-padding))
                > :where(
                    [class*="wp-block-"]:not(.alignfull):not([class*="__"]),
                    p,
                    h1,
                    h2,
                    h3,
                    h4,
                    h5,
                    h6,
                    ul,
                    ol
                ) {
                padding-right: 0;
                padding-left: 0;
            }
            .wp-site-blocks > .alignleft {
                float: left;
                margin-right: 2em;
            }
            .wp-site-blocks > .alignright {
                float: right;
                margin-left: 2em;
            }
            .wp-site-blocks > .aligncenter {
                justify-content: center;
                margin-left: auto;
                margin-right: auto;
            }
            :where(.wp-site-blocks) > * {
                margin-block-start: 1.5rem;
                margin-block-end: 0;
            }
            :where(.wp-site-blocks) > :first-child:first-child {
                margin-block-start: 0;
            }
            :where(.wp-site-blocks) > :last-child:last-child {
                margin-block-end: 0;
            }
            body {
                --wp--style--block-gap: 1.5rem;
            }
            :where(body .is-layout-flow) > :first-child:first-child {
                margin-block-start: 0;
            }
            :where(body .is-layout-flow) > :last-child:last-child {
                margin-block-end: 0;
            }
            :where(body .is-layout-flow) > * {
                margin-block-start: 1.5rem;
                margin-block-end: 0;
            }
            :where(body .is-layout-constrained) > :first-child:first-child {
                margin-block-start: 0;
            }
            :where(body .is-layout-constrained) > :last-child:last-child {
                margin-block-end: 0;
            }
            :where(body .is-layout-constrained) > * {
                margin-block-start: 1.5rem;
                margin-block-end: 0;
            }
            :where(body .is-layout-flex) {
                gap: 1.5rem;
            }
            :where(body .is-layout-grid) {
                gap: 1.5rem;
            }
            body .is-layout-flow > .alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }
            body .is-layout-flow > .alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }
            body .is-layout-flow > .aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }
            body .is-layout-constrained > .alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }
            body .is-layout-constrained > .alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }
            body .is-layout-constrained > .aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }
            body
                .is-layout-constrained
                > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                max-width: var(--wp--style--global--content-size);
                margin-left: auto !important;
                margin-right: auto !important;
            }
            body .is-layout-constrained > .alignwide {
                max-width: var(--wp--style--global--wide-size);
            }
            body .is-layout-flex {
                display: flex;
            }
            body .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }
            body .is-layout-flex > * {
                margin: 0;
            }
            body .is-layout-grid {
                display: grid;
            }
            body .is-layout-grid > * {
                margin: 0;
            }
            body {
                background-color: var(--wp--preset--color--white);
                color: var(--wp--preset--color--base);
                font-family: var(--wp--preset--font-family--figtree);
                font-size: var(--wp--preset--font-size--small);
                line-height: 1.6;
                --wp--style--root--padding-top: 0px;
                --wp--style--root--padding-right: 0px;
                --wp--style--root--padding-bottom: 0px;
                --wp--style--root--padding-left: 0px;
            }
            a:where(:not(.wp-element-button)) {
                color: var(--wp--preset--color--primary);
                text-decoration: none;
            }
            a:where(:not(.wp-element-button)):hover {
                color: var(--wp--preset--color--heading);
            }
            a:where(:not(.wp-element-button)):focus {
                color: var(--wp--preset--color--heading);
            }
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                color: var(--wp--preset--color--heading);
            }
            h1 {
                font-size: var(--wp--preset--font-size--xx-large);
                font-weight: 600;
                line-height: 1.14;
            }
            h2 {
                font-size: var(--wp--preset--font-size--x-large);
                font-weight: 600;
                line-height: 1.16;
            }
            h3 {
                font-size: var(--wp--preset--font-size--large);
                font-weight: 600;
                line-height: 1.16;
            }
            h4 {
                font-size: var(--wp--preset--font-size--medium-large);
                font-weight: 600;
                line-height: 1.66;
            }
            h5 {
                font-size: var(--wp--preset--font-size--small-medium);
                font-weight: 600;
                line-height: 1.66;
            }
            h6 {
                font-size: var(--wp--preset--font-size--small);
                font-weight: 600;
                line-height: 1.66;
            }
            .wp-element-button,
            .wp-block-button__link {
                background-color: #32373c;
                border-width: 0;
                color: #fff;
                font-family: inherit;
                font-size: inherit;
                line-height: inherit;
                padding: calc(0.667em + 2px) calc(1.333em + 2px);
                text-decoration: none;
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
                color: var(
                    --wp--preset--color--luminous-vivid-orange
                ) !important;
            }
            .has-luminous-vivid-amber-color {
                color: var(
                    --wp--preset--color--luminous-vivid-amber
                ) !important;
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
            .has-base-color {
                color: var(--wp--preset--color--base) !important;
            }
            .has-heading-color {
                color: var(--wp--preset--color--heading) !important;
            }
            .has-primary-color {
                color: var(--wp--preset--color--primary) !important;
            }
            .has-section-bg-color {
                color: var(--wp--preset--color--section-bg) !important;
            }
            .has-sub-bg-color {
                color: var(--wp--preset--color--sub-bg) !important;
            }
            .has-current-color-color {
                color: var(--wp--preset--color--current-color) !important;
            }
            .has-inherit-color {
                color: var(--wp--preset--color--inherit) !important;
            }
            .has-transparent-color {
                color: var(--wp--preset--color--transparent) !important;
            }
            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-background-color {
                background-color: var(
                    --wp--preset--color--cyan-bluish-gray
                ) !important;
            }
            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-background-color {
                background-color: var(
                    --wp--preset--color--pale-pink
                ) !important;
            }
            .has-vivid-red-background-color {
                background-color: var(
                    --wp--preset--color--vivid-red
                ) !important;
            }
            .has-luminous-vivid-orange-background-color {
                background-color: var(
                    --wp--preset--color--luminous-vivid-orange
                ) !important;
            }
            .has-luminous-vivid-amber-background-color {
                background-color: var(
                    --wp--preset--color--luminous-vivid-amber
                ) !important;
            }
            .has-light-green-cyan-background-color {
                background-color: var(
                    --wp--preset--color--light-green-cyan
                ) !important;
            }
            .has-vivid-green-cyan-background-color {
                background-color: var(
                    --wp--preset--color--vivid-green-cyan
                ) !important;
            }
            .has-pale-cyan-blue-background-color {
                background-color: var(
                    --wp--preset--color--pale-cyan-blue
                ) !important;
            }
            .has-vivid-cyan-blue-background-color {
                background-color: var(
                    --wp--preset--color--vivid-cyan-blue
                ) !important;
            }
            .has-vivid-purple-background-color {
                background-color: var(
                    --wp--preset--color--vivid-purple
                ) !important;
            }
            .has-base-background-color {
                background-color: var(--wp--preset--color--base) !important;
            }
            .has-heading-background-color {
                background-color: var(--wp--preset--color--heading) !important;
            }
            .has-primary-background-color {
                background-color: var(--wp--preset--color--primary) !important;
            }
            .has-section-bg-background-color {
                background-color: var(
                    --wp--preset--color--section-bg
                ) !important;
            }
            .has-sub-bg-background-color {
                background-color: var(--wp--preset--color--sub-bg) !important;
            }
            .has-current-color-background-color {
                background-color: var(
                    --wp--preset--color--current-color
                ) !important;
            }
            .has-inherit-background-color {
                background-color: var(--wp--preset--color--inherit) !important;
            }
            .has-transparent-background-color {
                background-color: var(
                    --wp--preset--color--transparent
                ) !important;
            }
            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-border-color {
                border-color: var(
                    --wp--preset--color--cyan-bluish-gray
                ) !important;
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
                border-color: var(
                    --wp--preset--color--luminous-vivid-orange
                ) !important;
            }
            .has-luminous-vivid-amber-border-color {
                border-color: var(
                    --wp--preset--color--luminous-vivid-amber
                ) !important;
            }
            .has-light-green-cyan-border-color {
                border-color: var(
                    --wp--preset--color--light-green-cyan
                ) !important;
            }
            .has-vivid-green-cyan-border-color {
                border-color: var(
                    --wp--preset--color--vivid-green-cyan
                ) !important;
            }
            .has-pale-cyan-blue-border-color {
                border-color: var(
                    --wp--preset--color--pale-cyan-blue
                ) !important;
            }
            .has-vivid-cyan-blue-border-color {
                border-color: var(
                    --wp--preset--color--vivid-cyan-blue
                ) !important;
            }
            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }
            .has-base-border-color {
                border-color: var(--wp--preset--color--base) !important;
            }
            .has-heading-border-color {
                border-color: var(--wp--preset--color--heading) !important;
            }
            .has-primary-border-color {
                border-color: var(--wp--preset--color--primary) !important;
            }
            .has-section-bg-border-color {
                border-color: var(--wp--preset--color--section-bg) !important;
            }
            .has-sub-bg-border-color {
                border-color: var(--wp--preset--color--sub-bg) !important;
            }
            .has-current-color-border-color {
                border-color: var(
                    --wp--preset--color--current-color
                ) !important;
            }
            .has-inherit-border-color {
                border-color: var(--wp--preset--color--inherit) !important;
            }
            .has-transparent-border-color {
                border-color: var(--wp--preset--color--transparent) !important;
            }
            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(
                    --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple
                ) !important;
            }
            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(
                    --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan
                ) !important;
            }
            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(
                    --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange
                ) !important;
            }
            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(
                    --wp--preset--gradient--luminous-vivid-orange-to-vivid-red
                ) !important;
            }
            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(
                    --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray
                ) !important;
            }
            .has-cool-to-warm-spectrum-gradient-background {
                background: var(
                    --wp--preset--gradient--cool-to-warm-spectrum
                ) !important;
            }
            .has-blush-light-purple-gradient-background {
                background: var(
                    --wp--preset--gradient--blush-light-purple
                ) !important;
            }
            .has-blush-bordeaux-gradient-background {
                background: var(
                    --wp--preset--gradient--blush-bordeaux
                ) !important;
            }
            .has-luminous-dusk-gradient-background {
                background: var(
                    --wp--preset--gradient--luminous-dusk
                ) !important;
            }
            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }
            .has-electric-grass-gradient-background {
                background: var(
                    --wp--preset--gradient--electric-grass
                ) !important;
            }
            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }
            .has-primary-blue-gradient-background {
                background: var(
                    --wp--preset--gradient--primary-blue
                ) !important;
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
            .has-small-medium-font-size {
                font-size: var(
                    --wp--preset--font-size--small-medium
                ) !important;
            }
            .has-medium-large-font-size {
                font-size: var(
                    --wp--preset--font-size--medium-large
                ) !important;
            }
            .has-xx-large-font-size {
                font-size: var(--wp--preset--font-size--xx-large) !important;
            }
            .has-xxx-large-font-size {
                font-size: var(--wp--preset--font-size--xxx-large) !important;
            }
            .has-xxxx-large-font-size {
                font-size: var(--wp--preset--font-size--xxxx-large) !important;
            }
            .has-system-font-font-family {
                font-family: var(
                    --wp--preset--font-family--system-font
                ) !important;
            }
            .has-figtree-font-family {
                font-family: var(--wp--preset--font-family--figtree) !important;
            }
            .bgbladi {
                background: linear-gradient(
                    180deg,
                    rgb(177, 217, 242) 0%,
                    rgb(255, 255, 255) 57%
                );
            }
            .dirflx {
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }
            .has-medium-large-font-size {
                font-size: 23px !important;
            }
            .mobilhdr p {
                margin-top: 16px !important;
            }
            .margb {
                margin-bottom: 16px !important;
            }
            p {
                margin-bottom: 16px !important;
            }
            .wp-block-navigation:not(.is-responsive) {
                margin: 0 !important;
            }
            .gutena-accordion-block__panel-content ul {
                margin-left: 30px;
                margin-top: 5px;
                margin-bottom: 5px;
            }
            .psflbx {
                border: 1px solid #afafaf;
                padding: 30px 0px !important;
                margin-bottom: 50px !important;
                border-radius: 30px;
            }
            .psdghd {
                margin-bottom: 20px;
                padding-bottom: 20px;
                border-bottom: 2px solid #00529b;
                line-height: 30px;
            }
            .psdgbx {
                align-items: center !important;
            }
            .psdgsmlp img {
                max-height: 160px;
                width: auto;
            }
            .psdglph img {
                max-height: 260px;
                width: auto;
            }
            .bggradi {
                background: linear-gradient(
                    0deg,
                    rgba(246, 246, 247, 1) 0%,
                    rgba(255, 255, 255, 1) 57%
                );
            }
            .Hmdgflx {
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }
            #wpsm_counter_b_row_454 .wpsm_counterbox .wpsm_number {
                font-family: "Figtree" !important;
            }
            .Hmdgflx1 {
                max-width: 20%;
                padding: 20px;
                margin: 0px 10px;
            }
            .Hmdgflx2 {
                max-width: 20%;
                margin: 0px 10px;
            }
            .wpsm_col-md-4 {
                width: 19.333333% !important;
            }
            .bgcontact {
                background: url(images/bgcontact.jpg);
                background-size: contain;
                background-repeat: no-repeat;
                background-position-x: right;
            }
            .bgcalendar {
                background: url(images/bgcalendar.jpg);
                background-size: contain;
                background-repeat: no-repeat;
                background-position-x: right;
            }
            .bgdocs {
                background: url(images/bgdocs.jpg);
                background-size: contain;
                background-repeat: no-repeat;
                background-position-x: right;
            }
            .menumrg {
                margin-top: -40px !important;
                background: #ffcf04;
                margin-left: 0 !important;
                margin-right: 0px !important;
                max-width: 100% !important;
            }
            :target:before {
                content: "";
                display: block;
                height: 120px;
                margin: -120px 0 0;
            }
            .mylogo {
                width: 200px !important;
            }
            .wp-block-navigation__responsive-container-close {
                top: 10px;
            }
            .myflxcenter {
                display: flex;
                align-items: center;
            }

            .menupad {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
                max-width: 100% !important;
            }
            .wp-block-navigation__responsive-close {
                max-width: 100% !important;
            }

            .sliderpad {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .menumrg ul.wp-block-navigation__container > li,
            .menumrg ul.wp-block-page-list > li {
                padding: 12px 5px !important;
                font-size: 17px !important;
            }

            .wp-block-navigation .wp-block-navigation__submenu-container li {
                padding: 6px 8px !important;
                font-size: 14px;
            }
            .wp-block-navigation__container {
                gap: 11px !important;
            }
            .joinusb {
                position: absolute;
                right: 14px;
                top: 14px;
                margin-top: 0px !important;
                gap: 10px !important;
            }

            .joinusb a {
                padding: 2px 35px !important;
                font-size: 16px !important;
            }

            .wp-container-11.wp-container-11 > .alignwide,
            .wp-container-18.wp-container-18 > .alignwide {
                max-width: 90% !important;
            }
            .wp-block-post-author {
                display: none;
            }
            .resoicon {
                margin-right: 15px;
                max-width: 28px;
                vertical-align: middle;
            }
            .resolink {
                font-weight: 800 !important;
                margin-top: 16px !important;
            }

            .resolink p {
                display: flex;
                align-items: flex-start;
                flex-direction: row;
                width: 100%;
                max-width: 100%;
            }

            footer .wp-block-navigation.is-vertical .wp-block-navigation-item {
                margin-bottom: 0px !important;
            }
            footer {
                background: linear-gradient(45deg, #9ad0ff, #fff8c9);
            }
            .has-medium-font-size {
                font-size: 18px !important;
            }
            .wp-block-post-excerpt__excerpt {
                font-size: 16px !important;
            }
            .has-primary-blue-gradient-background {
                background: #00529b !important;
            }
            header {
                position: fixed;
                z-index: 1;
                background: #fff;
                width: 100%;
                top: 0px;
            }
            .wp-block-site-logo {
                margin-inline-end: 16px !important;
                z-index: 12;
                position: relative;
            }
            .hdspace {
                height: 112px !important;
                margin-top: 0px !important;
            }

            @media (max-width: 1366px) {
                body .is-layout-constrained > .alignwide {
                    max-width: 93%;
                }

                .mycontainer {
                    max-width: 93% !important;
                    width: 93%;
                    margin: auto;
                }
            }

            @media (max-width: 1024px) {
                .menumrg {
                    margin-top: 0px !important;
                }
                .mobilhdr {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
                .joinusb {
                    position: initial;
                    margin-top: 24px !important;
                }
            }

            @media (max-width: 768px) {
                .wpsm_col-md-4 {
                    width: 100% !important;
                }
                #wpsm_counter_b_row_454 .wpsm_counterbox .wpsm_number {
                    font-size: 40px !important;
                }
                .mobilhdr {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    flex-direction: column;
                }
                .wp-block-site-title {
                    text-align: center;
                }
                .menupad {
                    padding-top: 10px !important;
                    padding-bottom: 10px !important;
                }
                .wp-block-navigation__responsive-container {
                    gap: 0px;
                }
            }

            @media (max-width: 478px) {
                .mobilhdr p {
                    margin-top: 6px !important;
                    margin-bottom: 2px !important;
                }
                .Hmdgflx {
                    flex-direction: column;
                }
                .Hmdgflx1 {
                    max-width: 40%;
                }
                .Hmdgflx2 {
                    max-width: 73%;
                }
                .joinusb a {
                    padding: 2px 17px !important;
                    font-size: 12px !important;
                }
                body .is-layout-flow > .alignleft {
                    float: none;
                    text-align: center;
                    margin-inline-end: 0em;
                }
                .wp-block-site-logo img {
                    height: auto;
                    max-width: 70%;
                }
                .wp-block-site-title {
                    text-align: center;
                    font-size: 22px;
                    margin-top: 10px !important;
                }
                .joinusb {
                    position: initial;
                    margin-top: 8px !important;
                }
                .wp-container-1.wp-container-1,
                .wp-container-5.wp-container-5 {
                    justify-content: center !important;
                }
                header {
                    position: initial;
                }
                .hdspace {
                    height: 0px !important;
                }
                .liontheme .wp-block-spacer {
                    height: 16px !important;
                }
                .liontheme h2 {
                    font-size: 16px !important;
                }
                .dirflx {
                    flex-direction: column;
                }
            }
        </style>
        <style id="core-block-supports-inline-css">
            .wp-container-8.wp-container-8.wp-container-8.wp-container-8
                > *
                + * {
                margin-block-start: var(--wp--preset--spacing--110);
                margin-block-end: 0;
            }
            .wp-container-10.wp-container-10 {
                flex-wrap: nowrap;
                gap: 30px 70px;
            }
            .wp-container-24.wp-container-24 {
                flex-wrap: nowrap;
                gap: 30px 136px;
            }
            .wp-elements-fd459a3e325012a44805b12d96f694f5 a {
                color: var(--wp--preset--color--primary);
            }
            .wp-container-33.wp-container-33 {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
            .wp-container-39.wp-container-39 {
                justify-content: center;
                align-items: center;
            }
            .wp-container-53.wp-container-53 {
                gap: 7px 7px;
                justify-content: flex-start;
            }
            .wp-container-62.wp-container-62 {
                gap: 24px;
                flex-direction: column;
                align-items: flex-start;
            }
            .wp-container-64.wp-container-64 {
                flex-wrap: nowrap;
                gap: 30px 50px;
            }
            .wp-container-1.wp-container-1,
            .wp-container-5.wp-container-5 {
                justify-content: flex-end;
            }
            .wp-container-3.wp-container-3,
            .wp-container-7.wp-container-7,
            .wp-container-15.wp-container-15,
            .wp-container-20.wp-container-20,
            .wp-container-36.wp-container-36,
            .wp-container-38.wp-container-38,
            .wp-container-49.wp-container-49 {
                flex-wrap: nowrap;
            }
            .wp-container-8.wp-container-8 > *,
            .wp-container-26.wp-container-26 > *,
            .wp-container-28.wp-container-28 > *,
            .wp-container-30.wp-container-30 > *,
            .wp-container-32.wp-container-32 > *,
            .wp-container-55.wp-container-55 > *,
            .wp-container-58.wp-container-58 > *,
            .wp-container-61.wp-container-61 > * {
                margin-block-start: 0;
                margin-block-end: 0;
            }
            .wp-container-16.wp-container-16,
            .wp-container-41.wp-container-41,
            .wp-container-45.wp-container-45 {
                justify-content: center;
            }
            .wp-container-25.wp-container-25,
            .wp-container-27.wp-container-27,
            .wp-container-29.wp-container-29,
            .wp-container-31.wp-container-31,
            .wp-container-51.wp-container-51,
            .wp-container-52.wp-container-52 {
                flex-wrap: nowrap;
                gap: 10px;
                align-items: center;
            }
            .wp-container-26.wp-container-26.wp-container-26.wp-container-26
                > *
                + *,
            .wp-container-28.wp-container-28.wp-container-28.wp-container-28
                > *
                + *,
            .wp-container-30.wp-container-30.wp-container-30.wp-container-30
                > *
                + *,
            .wp-container-32.wp-container-32.wp-container-32.wp-container-32
                > *
                + * {
                margin-block-start: 0px;
                margin-block-end: 0;
            }
            .wp-container-43.wp-container-43,
            .wp-container-47.wp-container-47,
            .wp-container-66.wp-container-66 {
                flex-wrap: nowrap;
                justify-content: center;
            }
            .wp-container-55.wp-container-55.wp-container-55.wp-container-55
                > *
                + *,
            .wp-container-58.wp-container-58.wp-container-58.wp-container-58
                > *
                + *,
            .wp-container-61.wp-container-61.wp-container-61.wp-container-61
                > *
                + * {
                margin-block-start: 24px;
                margin-block-end: 0;
            }
            .wp-container-57.wp-container-57,
            .wp-container-60.wp-container-60 {
                gap: var(--wp--preset--spacing--110);
                flex-direction: column;
                align-items: flex-start;
            }
        </style>
        <link
            rel="stylesheet"
            id="wpsm_counter-font-awesome-front-css"
            href="css/font-awesome.min.css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="wpsm_counter_bootstrap-front-css"
            href="css/bootstrap-front.css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="wpsm_counter_column-css"
            href="css/counter-column.css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="ts_vgallery_fonts-css"
            href="css/ts_vgallery-fonts.css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="bwg_fonts-css"
            href="css/fonts.css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="sumoselect-css"
            href="css/sumoselect.min.css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="mCustomScrollbar-css"
            href="css/jquery.mCustomScrollbar.min.css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="bwg_googlefonts-css"
            href="https://fonts.googleapis.com/css?family=Ubuntu&amp;subset=greek,latin,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic"
            media="all"
        />
        <link
            rel="stylesheet"
            id="bwg_frontend-css"
            href="css/styles.min.css"
            media="all"
        />
        <style id="wp-webfonts-inline-css">
            @font-face {
                font-family: Figtree;
                font-style: normal;
                font-weight: 400;
                font-display: block;
                src: url("fonts/figtree-regular.ttf") format("truetype");
                font-stretch: normal;
            }
            @font-face {
                font-family: "Figtree Medium";
                font-style: normal;
                font-weight: 500;
                font-display: block;
                src: url("fonts/figtree-medium.ttf") format("truetype");
                font-stretch: normal;
            }
            @font-face {
                font-family: "Figtree Semi Bold";
                font-style: normal;
                font-weight: 600;
                font-display: block;
                src: url("fonts/figtree-semibold.ttf") format("truetype");
                font-stretch: normal;
            }
            @font-face {
                font-family: "Figtree Bold";
                font-style: normal;
                font-weight: 700;
                font-display: block;
                src: url("fonts/figtree-bold.ttf") format("truetype");
                font-stretch: normal;
            }
        </style>
        <link
            rel="stylesheet"
            id="blockscape-block-style-css"
            href="css/style.min_2.css"
            media="all"
        />
        <script src="js/jquery.min.js" id="jquery-core-js"></script>
        <script src="js/jquery-migrate.min.js" id="jquery-migrate-js"></script>
        <script
            src="js/jquery.flexslider.min.js"
            id="metaslider-flex-slider-js"
        ></script>
        <script id="metaslider-flex-slider-js-after">
            var metaslider_50 = function ($) {
                $("#metaslider_50").addClass("flexslider");
                $("#metaslider_50").flexslider({
                    slideshowSpeed: 3000,
                    animation: "fade",
                    controlNav: false,
                    directionNav: true,
                    pauseOnHover: false,
                    direction: "horizontal",
                    reverse: false,
                    keyboard: false,
                    animationSpeed: 600,
                    prevText: "Previous",
                    nextText: "Next",
                    fadeFirstSlide: false,
                    slideshow: true,
                });
                $(document).trigger("metaslider/initialized", "#metaslider_50");
            };
            var timer_metaslider_50 = function () {
                var slider = !window.jQuery
                    ? window.setTimeout(timer_metaslider_50, 100)
                    : !jQuery.isReady
                    ? window.setTimeout(timer_metaslider_50, 1)
                    : metaslider_50(window.jQuery);
            };
            timer_metaslider_50();
        </script>
        <script src="js/view.min.js" id="wp-block-navigation-view-js"></script>
        <script
            src="js/view-modal.min.js"
            id="wp-block-navigation-view-2-js"
        ></script>
        <script src="js/jquery.sumoselect.min.js" id="sumoselect-js"></script>
        <script src="js/tocca.min.js" id="bwg_mobile-js"></script>
        <script
            src="js/jquery.mCustomScrollbar.concat.min.js"
            id="mCustomScrollbar-js"
        ></script>
        <script
            src="js/jquery.fullscreen.min.js"
            id="jquery-fullscreen-js"
        ></script>
        <script id="bwg_frontend-js-extra">
            var bwg_objectsL10n = {
                bwg_field_required: "field is required.",
                bwg_mail_validation: "This is not a valid email address.",
                bwg_search_result: "There are no images matching your search.",
                bwg_select_tag: "Select Tag",
                bwg_order_by: "Order By",
                bwg_search: "Search",
                bwg_show_ecommerce: "Show Ecommerce",
                bwg_hide_ecommerce: "Hide Ecommerce",
                bwg_show_comments: "Show Comments",
                bwg_hide_comments: "Hide Comments",
                bwg_restore: "Restore",
                bwg_maximize: "Maximize",
                bwg_fullscreen: "Fullscreen",
                bwg_exit_fullscreen: "Exit Fullscreen",
                bwg_search_tag: "SEARCH...",
                bwg_tag_no_match: "No tags found",
                bwg_all_tags_selected: "All tags selected",
                bwg_tags_selected: "tags selected",
                play: "Play",
                pause: "Pause",
                is_pro: "",
                bwg_play: "Play",
                bwg_pause: "Pause",
                bwg_hide_info: "Hide info",
                bwg_show_info: "Show info",
                bwg_hide_rating: "Hide rating",
                bwg_show_rating: "Show rating",
                ok: "Ok",
                cancel: "Cancel",
                select_all: "Select all",
                lazy_load: "0",
                lazy_loader:
                    "https:\/\/lionsdistrict306a2.org\/wp-content\/plugins\/photo-gallery\/images\/ajax_loader.png",
                front_ajax: "0",
                bwg_tag_see_all: "see all tags",
                bwg_tag_see_less: "see less tags",
            };
        </script>
        <script src="js/scripts.min.js" id="bwg_frontend-js"></script>
        <link
            rel="https://api.w.org/"
            href="https://lionsdistrict306a2.org/wp-json/"
        />
        <link
            rel="EditURI"
            type="application/rsd+xml"
            title="RSD"
            href="https://lionsdistrict306a2.org/xmlrpc.php?rsd"
        />
        <meta name="generator" content="WordPress 6.3.2" />
        <link
            rel="apple-touch-icon"
            sizes="76x76"
            href="images/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="images/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="images/favicon-16x16.png"
        />
        <link
            rel="manifest"
            href="/wp-content/uploads/fbrfg/site.webmanifest"
        />
        <link rel="shortcut icon" href="favicon.ico" />
        <meta name="msapplication-TileColor" content="#da532c" />
        <meta
            name="msapplication-config"
            content="/wp-content/uploads/fbrfg/browserconfig.xml"
        />
        <meta name="theme-color" content="#ffffff" />
        <script src="js/wp-emoji-release.min.js" defer=""></script>
    </head>

    <body class="home blog wp-custom-logo wp-embed-responsive">
        <div class="wp-site-blocks">
            <header class="wp-block-template-part">
                <div
                    class="wp-block-group has-figtree-font-family has-global-padding is-content-justification-center is-layout-constrained wp-container-8 wp-block-group-is-layout-constrained"
                >
                    <div
                        class="wp-block-columns alignwide are-vertically-aligned-center is-not-stacked-on-mobile is-style-default menupad is-layout-flex wp-container-3 wp-block-columns-is-layout-flex"
                        style="
                            padding-top: 14px;
                            padding-right: 14px;
                            padding-bottom: 14px;
                            padding-left: 14px;
                        "
                    >
                        <div
                            class="wp-block-column is-vertically-aligned-center mobilhdr is-layout-flow wp-block-column-is-layout-flow"
                        >
                            <div class="alignleft wp-block-site-logo">
                                <a
                                    href="https://lionsdistrict306a2.org/"
                                    class="custom-logo-link"
                                    rel="home"
                                    aria-current="page"
                                    ><img
                                        width="198"
                                        height="98"
                                        src="images/logo.png"
                                        class="custom-logo"
                                        alt="Lions International District 306 A2"
                                        decoding="async"
                                        srcset="
                                            images/logo.png         1005w,
                                            images/logo-300x149.png  300w,
                                            images/logo-768x382.png  768w
                                        "
                                        sizes="(max-width: 198px) 100vw, 198px"
                                /></a>
                            </div>

                            <p
                                style="
                                    font-style: normal;
                                    font-weight: 900;
                                    text-transform: uppercase;
                                "
                                class="wp-block-site-title"
                            >
                                <a
                                    href="https://lionsdistrict306a2.org"
                                    target="_self"
                                    rel="home"
                                    aria-current="page"
                                    >Lions International District 306 A2</a
                                >
                            </p>

                            <div
                                class="wp-block-buttons joinusb is-horizontal is-content-justification-right is-layout-flex wp-container-1 wp-block-buttons-is-layout-flex"
                            >
                                <div class="wp-block-button">
                                    <a
                                        class="wp-block-button__link wp-element-button"
                                        href="/contact"
                                        rel="#"
                                        >District Contest</a
                                    >
                                </div>

                                <div class="wp-block-button">
                                    <a
                                        class="wp-block-button__link wp-element-button"
                                        href="https://account.lionsclubs.org/Account/Login"
                                        target="_blank"
                                        rel="# noopener"
                                        >International Login</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="wp-block-columns alignwide are-vertically-aligned-center is-not-stacked-on-mobile is-style-default menupad menumrg is-layout-flex wp-container-7 wp-block-columns-is-layout-flex"
                        style="
                            padding-top: 14px;
                            padding-right: 14px;
                            padding-bottom: 14px;
                            padding-left: 14px;
                        "
                    >
                        <div
                            class="wp-block-column is-vertically-aligned-center is-layout-flow wp-block-column-is-layout-flow"
                        >
                            <nav
                                style="font-style: normal; font-weight: 600"
                                class="is-responsive items-justified-right wp-block-navigation is-content-justification-right is-layout-flex wp-container-5 wp-block-navigation-is-layout-flex"
                                aria-label="Navigation 2"
                            >
                                <button
                                    aria-haspopup="true"
                                    aria-label="Open menu"
                                    class="wp-block-navigation__responsive-container-open"
                                    data-micromodal-trigger="modal-4"
                                >
                                    <svg
                                        width="24"
                                        height="24"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        aria-hidden="true"
                                        focusable="false"
                                    >
                                        <rect
                                            x="4"
                                            y="7.5"
                                            width="16"
                                            height="1.5"
                                        ></rect>
                                        <rect
                                            x="4"
                                            y="15"
                                            width="16"
                                            height="1.5"
                                        ></rect>
                                    </svg>
                                </button>
                                <div
                                    class="wp-block-navigation__responsive-container"
                                    style=""
                                    id="modal-4"
                                >
                                    <div
                                        class="wp-block-navigation__responsive-close"
                                        tabindex="-1"
                                        data-micromodal-close=""
                                    >
                                        <div
                                            class="wp-block-navigation__responsive-dialog"
                                            aria-label="Menu"
                                        >
                                            <button
                                                aria-label="Close menu"
                                                data-micromodal-close=""
                                                class="wp-block-navigation__responsive-container-close"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24"
                                                    width="24"
                                                    height="24"
                                                    aria-hidden="true"
                                                    focusable="false"
                                                >
                                                    <path
                                                        d="M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"
                                                    ></path>
                                                </svg>
                                            </button>
                                            <div
                                                class="wp-block-navigation__responsive-container-content"
                                                id="modal-4-content"
                                            >
                                                <ul
                                                    style="
                                                        font-style: normal;
                                                        font-weight: 600;
                                                    "
                                                    class="wp-block-navigation__container is-responsive items-justified-right wp-block-navigation"
                                                >
                                                    <li
                                                        style="
                                                            font-style: normal;
                                                            font-weight: 600;
                                                        "
                                                        class="wp-block-navigation-item wp-block-navigation-link"
                                                    >
                                                        <a
                                                            class="wp-block-navigation-item__content"
                                                            href="/who-we-are"
                                                            ><span
                                                                class="wp-block-navigation-item__label"
                                                                >Who we are
                                                            </span></a
                                                        >
                                                    </li>
                                                    <li
                                                        class="wp-block-navigation-item has-child open-on-hover-click wp-block-navigation-submenu"
                                                    >
                                                        <a
                                                            class="wp-block-navigation-item__content"
                                                            href="#"
                                                            >DG’s page</a
                                                        ><button
                                                            aria-label="DG’s page submenu"
                                                            class="wp-block-navigation__submenu-icon wp-block-navigation-submenu__toggle"
                                                            aria-expanded="false"
                                                        >
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="12"
                                                                height="12"
                                                                viewBox="0 0 12 12"
                                                                fill="none"
                                                                aria-hidden="true"
                                                                focusable="false"
                                                            >
                                                                <path
                                                                    d="M1.50002 4L6.00002 8L10.5 4"
                                                                    stroke-width="1.5"
                                                                ></path>
                                                            </svg>
                                                        </button>
                                                        <ul
                                                            class="wp-block-navigation__submenu-container wp-block-navigation-submenu"
                                                        >
                                                            <li
                                                                class="wp-block-navigation-item wp-block-navigation-link"
                                                            >
                                                                <a
                                                                    class="wp-block-navigation-item__content"
                                                                    href="https://lionsdistrict306a2.org/district-governor/"
                                                                    ><span
                                                                        class="wp-block-navigation-item__label"
                                                                        >District
                                                                        Governor</span
                                                                    ></a
                                                                >
                                                            </li>
                                                            <li
                                                                class="wp-block-navigation-item wp-block-navigation-link"
                                                            >
                                                                <a
                                                                    class="wp-block-navigation-item__content"
                                                                    href="https://lionsdistrict306a2.org/dgs-program/"
                                                                    ><span
                                                                        class="wp-block-navigation-item__label"
                                                                        >DG’s
                                                                        Program</span
                                                                    ></a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li
                                                        class="wp-block-navigation-item wp-block-navigation-link"
                                                    >
                                                        <a
                                                            class="wp-block-navigation-item__content"
                                                            href="https://lionsdistrict306a2.org/past-leaders/"
                                                            ><span
                                                                class="wp-block-navigation-item__label"
                                                                >Past
                                                                Leaders</span
                                                            ></a
                                                        >
                                                    </li>
                                                    <li
                                                        class="wp-block-navigation-item has-child open-on-hover-click wp-block-navigation-submenu"
                                                    >
                                                        <a
                                                            class="wp-block-navigation-item__content"
                                                            href="#"
                                                            >Cabinet </a
                                                        ><button
                                                            aria-label="Cabinet submenu"
                                                            class="wp-block-navigation__submenu-icon wp-block-navigation-submenu__toggle"
                                                            aria-expanded="false"
                                                        >
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="12"
                                                                height="12"
                                                                viewBox="0 0 12 12"
                                                                fill="none"
                                                                aria-hidden="true"
                                                                focusable="false"
                                                            >
                                                                <path
                                                                    d="M1.50002 4L6.00002 8L10.5 4"
                                                                    stroke-width="1.5"
                                                                ></path>
                                                            </svg>
                                                        </button>
                                                        <ul
                                                            class="wp-block-navigation__submenu-container wp-block-navigation-submenu"
                                                        >
                                                            <li
                                                                class="wp-block-navigation-item wp-block-navigation-link"
                                                            >
                                                                <a
                                                                    class="wp-block-navigation-item__content"
                                                                    href="https://lionsdistrict306a2.org/cabinet-structure/"
                                                                    ><span
                                                                        class="wp-block-navigation-item__label"
                                                                        >Cabinet
                                                                        structure</span
                                                                    ></a
                                                                >
                                                            </li>
                                                            <li
                                                                class="wp-block-navigation-item wp-block-navigation-link"
                                                            >
                                                                <a
                                                                    class="wp-block-navigation-item__content"
                                                                    ><span
                                                                        class="wp-block-navigation-item__label"
                                                                        >Principal
                                                                        Cabinet</span
                                                                    ></a
                                                                >
                                                            </li>
                                                            <li
                                                                class="wp-block-navigation-item wp-block-navigation-link"
                                                            >
                                                                <a
                                                                    class="wp-block-navigation-item__content"
                                                                    ><span
                                                                        class="wp-block-navigation-item__label"
                                                                        >Cabinet
                                                                    </span></a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li
                                                        class="wp-block-navigation-item wp-block-navigation-link"
                                                    >
                                                        <a
                                                            class="wp-block-navigation-item__content"
                                                            href="/dgs-calendar"
                                                            ><span
                                                                class="wp-block-navigation-item__label"
                                                                >DG’s
                                                                Calendar</span
                                                            ></a
                                                        >
                                                    </li>
                                                    <li
                                                        class="wp-block-navigation-item wp-block-navigation-link"
                                                    >
                                                        <a
                                                            class="wp-block-navigation-item__content"
                                                            href="/newsletters"
                                                            ><span
                                                                class="wp-block-navigation-item__label"
                                                                >Newsletters</span
                                                            ></a
                                                        >
                                                    </li>
                                                    <li
                                                        class="wp-block-navigation-item has-child open-on-hover-click wp-block-navigation-submenu"
                                                    >
                                                        <a
                                                            class="wp-block-navigation-item__content"
                                                            href="/resources"
                                                            >Resources</a
                                                        ><button
                                                            aria-label="Resources submenu"
                                                            class="wp-block-navigation__submenu-icon wp-block-navigation-submenu__toggle"
                                                            aria-expanded="false"
                                                        >
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="12"
                                                                height="12"
                                                                viewBox="0 0 12 12"
                                                                fill="none"
                                                                aria-hidden="true"
                                                                focusable="false"
                                                            >
                                                                <path
                                                                    d="M1.50002 4L6.00002 8L10.5 4"
                                                                    stroke-width="1.5"
                                                                ></path>
                                                            </svg>
                                                        </button>
                                                        <ul
                                                            class="wp-block-navigation__submenu-container wp-block-navigation-submenu"
                                                        >
                                                            <li
                                                                class="wp-block-navigation-item wp-block-navigation-link"
                                                            >
                                                                <a
                                                                    class="wp-block-navigation-item__content"
                                                                    href="/resources/#legal"
                                                                    ><span
                                                                        class="wp-block-navigation-item__label"
                                                                        >Legal</span
                                                                    ></a
                                                                >
                                                            </li>
                                                            <li
                                                                class="wp-block-navigation-item wp-block-navigation-link"
                                                            >
                                                                <a
                                                                    class="wp-block-navigation-item__content"
                                                                    href="/resources/#guidelines"
                                                                    ><span
                                                                        class="wp-block-navigation-item__label"
                                                                        >Guidelines</span
                                                                    ></a
                                                                >
                                                            </li>
                                                            <li
                                                                class="wp-block-navigation-item wp-block-navigation-link"
                                                            >
                                                                <a
                                                                    class="wp-block-navigation-item__content"
                                                                    href="/resources/#training"
                                                                    ><span
                                                                        class="wp-block-navigation-item__label"
                                                                        >Training</span
                                                                    ></a
                                                                >
                                                            </li>
                                                            <li
                                                                class="wp-block-navigation-item wp-block-navigation-link"
                                                            >
                                                                <a
                                                                    class="wp-block-navigation-item__content"
                                                                    href="/resources/#knowledge"
                                                                    ><span
                                                                        class="wp-block-navigation-item__label"
                                                                        >Knowledge</span
                                                                    ></a
                                                                >
                                                            </li>
                                                            <li
                                                                class="wp-block-navigation-item wp-block-navigation-link"
                                                            >
                                                                <a
                                                                    class="wp-block-navigation-item__content"
                                                                    href="/resources/#forms"
                                                                    ><span
                                                                        class="wp-block-navigation-item__label"
                                                                        >Forms
                                                                        and
                                                                        formats</span
                                                                    ></a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li
                                                        class="wp-block-navigation-item has-child open-on-hover-click wp-block-navigation-submenu"
                                                    >
                                                        <a
                                                            class="wp-block-navigation-item__content"
                                                            >Gallery</a
                                                        ><button
                                                            aria-label="Gallery submenu"
                                                            class="wp-block-navigation__submenu-icon wp-block-navigation-submenu__toggle"
                                                            aria-expanded="false"
                                                        >
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="12"
                                                                height="12"
                                                                viewBox="0 0 12 12"
                                                                fill="none"
                                                                aria-hidden="true"
                                                                focusable="false"
                                                            >
                                                                <path
                                                                    d="M1.50002 4L6.00002 8L10.5 4"
                                                                    stroke-width="1.5"
                                                                ></path>
                                                            </svg>
                                                        </button>
                                                        <ul
                                                            class="wp-block-navigation__submenu-container wp-block-navigation-submenu"
                                                        >
                                                            <li
                                                                class="wp-block-navigation-item wp-block-navigation-link"
                                                            >
                                                                <a
                                                                    class="wp-block-navigation-item__content"
                                                                    href="https://lionsdistrict306a2.org/photo-gallery/"
                                                                    ><span
                                                                        class="wp-block-navigation-item__label"
                                                                        >Photo
                                                                        Gallery</span
                                                                    ></a
                                                                >
                                                            </li>
                                                            <li
                                                                class="wp-block-navigation-item wp-block-navigation-link"
                                                            >
                                                                <a
                                                                    class="wp-block-navigation-item__content"
                                                                    href="https://lionsdistrict306a2.org/video-gallery/"
                                                                    ><span
                                                                        class="wp-block-navigation-item__label"
                                                                        >Video
                                                                        Gallery</span
                                                                    ></a
                                                                >
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li
                                                        class="wp-block-navigation-item wp-block-navigation-link"
                                                    >
                                                        <a
                                                            class="wp-block-navigation-item__content"
                                                            href="/contact"
                                                            ><span
                                                                class="wp-block-navigation-item__label"
                                                                >Contact</span
                                                            ></a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>

            <div class="hdspace"></div>
            <div class="sliderpad">
                <div
                    id="metaslider-id-50"
                    style="width: 100%"
                    class="ml-slider-3-33-0 metaslider metaslider-flex metaslider-50 ml-slider ms-theme-default nav-hidden"
                    role="region"
                    aria-roledescription="Slideshow"
                    aria-label="New Slideshow"
                >
                    <div id="metaslider_container_50">
                        <div id="metaslider_50">
                            <ul aria-live="polite" class="slides">
                                <li
                                    style="display: block; width: 100%"
                                    class="slide-848 ms-image"
                                    aria-roledescription="slide"
                                    aria-label="slide-848"
                                >
                                    <img
                                        width="1366"
                                        height="565"
                                        src="images/WhatsApp-Image-2023-09-30-at-10.19.50-PM.jpeg"
                                        class="slider-50 slide-848"
                                        alt=""
                                        decoding="async"
                                        rel=""
                                        title=""
                                        loading="lazy"
                                        srcset="
                                            images/WhatsApp-Image-2023-09-30-at-10.19.50-PM.jpeg          1366w,
                                            images/WhatsApp-Image-2023-09-30-at-10.19.50-PM-300x124.jpeg   300w,
                                            images/WhatsApp-Image-2023-09-30-at-10.19.50-PM-1024x424.jpeg 1024w,
                                            images/WhatsApp-Image-2023-09-30-at-10.19.50-PM-768x318.jpeg   768w
                                        "
                                        sizes="(max-width: 1366px) 100vw, 1366px"
                                    />
                                </li>
                                <li
                                    style="display: none; width: 100%"
                                    class="slide-841 ms-image"
                                    aria-roledescription="slide"
                                    aria-label="slide-841"
                                >
                                    <img
                                        width="1366"
                                        height="564"
                                        src="images/WhatsApp-Image-2023-09-28-at-11.48.23-PM.jpeg"
                                        class="slider-50 slide-841"
                                        alt=""
                                        decoding="async"
                                        rel=""
                                        title=""
                                        loading="lazy"
                                        srcset="
                                            images/WhatsApp-Image-2023-09-28-at-11.48.23-PM.jpeg          1366w,
                                            images/WhatsApp-Image-2023-09-28-at-11.48.23-PM-300x124.jpeg   300w,
                                            images/WhatsApp-Image-2023-09-28-at-11.48.23-PM-1024x423.jpeg 1024w,
                                            images/WhatsApp-Image-2023-09-28-at-11.48.23-PM-768x317.jpeg   768w
                                        "
                                        sizes="(max-width: 1366px) 100vw, 1366px"
                                    />
                                </li>
                                <li
                                    style="display: none; width: 100%"
                                    class="slide-844 ms-image"
                                    aria-roledescription="slide"
                                    aria-label="slide-844"
                                >
                                    <img
                                        width="1366"
                                        height="566"
                                        src="images/WhatsApp-Image-2023-09-22-at-5.34.43-PM.jpeg"
                                        class="slider-50 slide-844"
                                        alt=""
                                        decoding="async"
                                        rel=""
                                        title=""
                                        loading="lazy"
                                        srcset="
                                            images/WhatsApp-Image-2023-09-22-at-5.34.43-PM.jpeg          1366w,
                                            images/WhatsApp-Image-2023-09-22-at-5.34.43-PM-300x124.jpeg   300w,
                                            images/WhatsApp-Image-2023-09-22-at-5.34.43-PM-1024x424.jpeg 1024w,
                                            images/WhatsApp-Image-2023-09-22-at-5.34.43-PM-768x318.jpeg   768w
                                        "
                                        sizes="(max-width: 1366px) 100vw, 1366px"
                                    />
                                </li>
                                <li
                                    style="display: none; width: 100%"
                                    class="slide-821 ms-image"
                                    aria-roledescription="slide"
                                    aria-label="slide-821"
                                >
                                    <a
                                        href="https://online.flippingbook.com/view/664792283/"
                                        target="_blank"
                                        ><img
                                            width="1366"
                                            height="566"
                                            src="images/WhatsApp-Image-2023-08-22-at-9.25.04-AM.jpeg"
                                            class="slider-50 slide-821"
                                            alt=""
                                            decoding="async"
                                            rel=""
                                            title=""
                                            loading="lazy"
                                            srcset="
                                                images/WhatsApp-Image-2023-08-22-at-9.25.04-AM.jpeg          1366w,
                                                images/WhatsApp-Image-2023-08-22-at-9.25.04-AM-300x124.jpeg   300w,
                                                images/WhatsApp-Image-2023-08-22-at-9.25.04-AM-1024x424.jpeg 1024w,
                                                images/WhatsApp-Image-2023-08-22-at-9.25.04-AM-768x318.jpeg   768w
                                            "
                                            sizes="(max-width: 1366px) 100vw, 1366px"
                                    /></a>
                                </li>
                                <li
                                    style="display: none; width: 100%"
                                    class="slide-380 ms-image"
                                    aria-roledescription="slide"
                                    aria-label="slide-380"
                                >
                                    <img
                                        width="1366"
                                        height="566"
                                        src="images/WhatsApp-Image-2023-07-22-at-7.06.18-PM.jpeg"
                                        class="slider-50 slide-380"
                                        alt=""
                                        decoding="async"
                                        rel=""
                                        title=""
                                        loading="lazy"
                                        srcset="
                                            images/WhatsApp-Image-2023-07-22-at-7.06.18-PM.jpeg          1366w,
                                            images/WhatsApp-Image-2023-07-22-at-7.06.18-PM-300x124.jpeg   300w,
                                            images/WhatsApp-Image-2023-07-22-at-7.06.18-PM-1024x424.jpeg 1024w,
                                            images/WhatsApp-Image-2023-07-22-at-7.06.18-PM-768x318.jpeg   768w
                                        "
                                        sizes="(max-width: 1366px) 100vw, 1366px"
                                    />
                                </li>
                                <li
                                    style="display: none; width: 100%"
                                    class="slide-378 ms-image"
                                    aria-roledescription="slide"
                                    aria-label="slide-378"
                                >
                                    <img
                                        width="1366"
                                        height="566"
                                        src="images/WhatsApp-Image-2023-07-22-at-7.06.42-PM.jpeg"
                                        class="slider-50 slide-378"
                                        alt=""
                                        decoding="async"
                                        rel=""
                                        title=""
                                        loading="lazy"
                                        srcset="
                                            images/WhatsApp-Image-2023-07-22-at-7.06.42-PM.jpeg          1366w,
                                            images/WhatsApp-Image-2023-07-22-at-7.06.42-PM-300x124.jpeg   300w,
                                            images/WhatsApp-Image-2023-07-22-at-7.06.42-PM-1024x424.jpeg 1024w,
                                            images/WhatsApp-Image-2023-07-22-at-7.06.42-PM-768x318.jpeg   768w
                                        "
                                        sizes="(max-width: 1366px) 100vw, 1366px"
                                    />
                                </li>
                                <li
                                    style="display: none; width: 100%"
                                    class="slide-379 ms-image"
                                    aria-roledescription="slide"
                                    aria-label="slide-379"
                                >
                                    <img
                                        width="1366"
                                        height="566"
                                        src="images/WhatsApp-Image-2023-07-22-at-7.06.55-PM.jpeg"
                                        class="slider-50 slide-379"
                                        alt=""
                                        decoding="async"
                                        rel=""
                                        title=""
                                        loading="lazy"
                                        srcset="
                                            images/WhatsApp-Image-2023-07-22-at-7.06.55-PM.jpeg          1366w,
                                            images/WhatsApp-Image-2023-07-22-at-7.06.55-PM-300x124.jpeg   300w,
                                            images/WhatsApp-Image-2023-07-22-at-7.06.55-PM-1024x424.jpeg 1024w,
                                            images/WhatsApp-Image-2023-07-22-at-7.06.55-PM-768x318.jpeg   768w
                                        "
                                        sizes="(max-width: 1366px) 100vw, 1366px"
                                    />
                                </li>
                                <li
                                    style="display: none; width: 100%"
                                    class="slide-416 ms-image"
                                    aria-roledescription="slide"
                                    aria-label="slide-416"
                                >
                                    <img
                                        width="1366"
                                        height="566"
                                        src="images/WhatsApp-Image-2023-07-24-at-11.27.06-AM.jpeg"
                                        class="slider-50 slide-416"
                                        alt=""
                                        decoding="async"
                                        rel=""
                                        title=""
                                        loading="lazy"
                                        srcset="
                                            images/WhatsApp-Image-2023-07-24-at-11.27.06-AM.jpeg          1366w,
                                            images/WhatsApp-Image-2023-07-24-at-11.27.06-AM-300x124.jpeg   300w,
                                            images/WhatsApp-Image-2023-07-24-at-11.27.06-AM-1024x424.jpeg 1024w,
                                            images/WhatsApp-Image-2023-07-24-at-11.27.06-AM-768x318.jpeg   768w
                                        "
                                        sizes="(max-width: 1366px) 100vw, 1366px"
                                    />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="wp-block-group has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
                style="
                    margin-top: 0px;
                    margin-bottom: 0px;
                    padding-top: 0;
                    padding-right: var(--wp--preset--spacing--140);
                    padding-bottom: 0;
                    padding-left: var(--wp--preset--spacing--140);
                "
            >
                <div
                    class="wp-block-group alignwide is-style-default is-layout-flow wp-block-group-is-layout-flow"
                    style="
                        margin-top: 0px;
                        margin-bottom: 0px;
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 0px;
                    "
                >
                    <div
                        class="wp-block-group alignwide is-style-box-shadow-one liontheme has-primary-blue-gradient-background has-background has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
                        style="
                            border-radius: 12px;
                            margin-top: 0px;
                            margin-bottom: 0px;
                            padding-top: 0;
                            padding-right: 0;
                            padding-bottom: 0;
                            padding-left: 0;
                        "
                    >
                        <div
                            style="
                                margin-top: 0px;
                                margin-bottom: 0px;
                                height: 16px;
                            "
                            aria-hidden="true"
                            class="wp-block-spacer is-style-has-mb-40"
                        ></div>

                        <div
                            class="wp-block-columns alignfull is-style-default is-style-mob-pd_lr-25 is-layout-flex wp-container-10 wp-block-columns-is-layout-flex"
                            style="
                                border-radius: 12px;
                                margin-top: 0px;
                                margin-bottom: 0px;
                                padding-top: 0;
                                padding-right: 72px;
                                padding-bottom: 0;
                                padding-left: 72px;
                            "
                        >
                            <div
                                class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
                                style="flex-basis: 100%"
                            >
                                <h2
                                    class="wp-block-heading alignwide has-text-align-center has-white-color has-text-color has-medium-large-font-size"
                                    style="
                                        margin-top: 0px;
                                        margin-right: 0px;
                                        margin-bottom: 0px;
                                        margin-left: 0px;
                                    "
                                >
                                    2023-2024 THEME: SERVICE EMPOWERED WITH
                                    LEADERSHIP
                                </h2>
                            </div>
                        </div>

                        <div
                            style="
                                margin-top: 0px;
                                margin-bottom: 0px;
                                height: 15px;
                            "
                            aria-hidden="true"
                            class="wp-block-spacer is-style-has-mb-40"
                        ></div>
                    </div>
                </div>
            </div>

            <div
                class="wp-block-group has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
                style="
                    margin-top: 0px;
                    margin-bottom: 0px;
                    padding-top: 0px;
                    padding-right: var(--wp--preset--spacing--140);
                    padding-bottom: 0px;
                    padding-left: var(--wp--preset--spacing--140);
                "
            >
                <div
                    class="wp-block-group alignfull has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
                >
                    <div
                        style="
                            margin-top: 0px;
                            margin-bottom: 0px;
                            height: 28px;
                        "
                        aria-hidden="true"
                        class="wp-block-spacer is-style-has-mb-40"
                    ></div>

                    <div
                        class="wp-block-columns alignwide is-layout-flex wp-container-15 wp-block-columns-is-layout-flex"
                    >
                        <div
                            class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
                        >
                            <p class="has-text-align-center">
                                Lions International District 306 A2 was
                                inaugurated in 2005, marking a significant
                                milestone in Lionism. The district’s formation
                                was under the exemplary leadership of Lion
                                Rohantha de Fonseka MJF, who served as the First
                                District Governor, and alongside him was the
                                capable Vice District Governor, Lion Leelanada
                                de Silva MJF, for the year 2005/2006. During
                                that momentous time, District 306 A was
                                administratively divided into two districts, 306
                                A1 and 306 A2, strategically allocating
                                approximately 42 Lions Clubs with 1100 members
                                to District 306 A2.
                            </p>
                        </div>
                    </div>

                    <div
                        class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-16 wp-block-buttons-is-layout-flex"
                    >
                        <div class="wp-block-button">
                            <a
                                class="wp-block-button__link has-text-align-center wp-element-button"
                                href="/who-we-are"
                                >Read More</a
                            >
                        </div>
                    </div>

                    <div
                        style="
                            margin-top: 0px;
                            margin-bottom: 0px;
                            height: 31px;
                        "
                        aria-hidden="true"
                        class="wp-block-spacer is-style-has-mb-40"
                    ></div>
                </div>
            </div>

            <div
                class="wp-block-group bggradi has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
            >
                <div
                    class="wp-block-columns alignwide is-layout-flex wp-container-20 wp-block-columns-is-layout-flex"
                >
                    <div
                        class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
                    >
                        <div class="Hmdgflx">
                            <img
                                decoding="async"
                                class="Hmdgflx1"
                                src="images/logohm.png"
                                alt=""
                            />
                            <p></p>
                            <div>
                                <h4>District Governor</h4>
                                <h4>Lion Nuwan Ballantudawa MJF , MAF</h4>
                                <p>Lionistic Year 2023-2024</p>
                            </div>
                            <img
                                decoding="async"
                                class="Hmdgflx2"
                                src="images/dghm.png"
                                alt=""
                            />
                        </div>
                    </div>
                </div>
            </div>

            <style>
                #wpsm_counter_b_row_454 .wpsm_counterbox {
                    text-align: center;
                    margin-top: 50px;
                    margin-bottom: 50px;
                }
                #wpsm_counter_b_row_454 .wpsm_counterbox .wpsm_count-icon {
                    display: block;
                    margin-top: 20px;
                    padding-top: 0px;
                    padding-bottom: 0px;
                    margin-bottom: 0px;
                    margin: 0 auto;
                }
                #wpsm_counter_b_row_454 .wpsm_counterbox .wpsm_count-icon i {
                    font-size: 31px;
                    color: #000000;
                }
                #wpsm_counter_b_row_454 .wpsm_counterbox .wpsm_number {
                    font-size: 51px;
                    font-weight: 700;
                    color: #000000;
                    font-family: "Open Sans";
                    letter-spacing: 2px;
                    margin-top: 20px;
                    line-height: 1.3em;
                    padding-top: 0px;
                    padding-bottom: 0px;
                    margin-bottom: 0px;
                }
                #wpsm_counter_b_row_454 .wpsm_counterbox .wpsm_count-title {
                    font-size: 18px;
                    font-weight: bolder;
                    font-family: "Open Sans";
                    letter-spacing: 2px;
                    color: #000000;
                    font-weight: 700;
                    margin-top: 20px;
                    padding-top: 0px;
                    padding-bottom: 0px;
                    margin-bottom: 0px;
                    line-height: 1.3em;
                }
            </style>

            <style>
                #wpsm_counter_b_row_454			{

                		position:relative;
                		width:100%;
                		overflow:hidden;
                		text-align:center;
                	}

                	#wpsm_counter_b_row_454 .wpsm_row{
                	overflow:hidden;
                	display:block;
                	width:100%;
                	}

                	#wpsm_counter_b_row_454 .wpsm_row{
                	overflow:visible;
                	}

                	#wpsm_counter_b_row_454 .wpsm_counterbox .wpsm_count-title{
                	min-height:56px;
                	}}
            </style>

            <div class="wpsm_counter_b_row" id="wpsm_counter_b_row_454">
                <div>
                    <div class="wpsm_row">
                        <div class="wpsm_col-md-4 wpsm_col-sm-6">
                            <div class="wpsm_counterbox">
                                <div class="wpsm_count-icon">
                                    <i #000000="" class="fa fa-bank"></i>
                                </div>
                                <div class="wpsm_number" style="#000000">
                                    <span class="counter">107 </span>
                                </div>
                                <h3 class="wpsm_count-title" #000000="">
                                    Clubs
                                </h3>
                            </div>
                        </div>
                        <div class="wpsm_col-md-4 wpsm_col-sm-6">
                            <div class="wpsm_counterbox">
                                <div class="wpsm_count-icon">
                                    <i #000000="" class="fa fa-users"></i>
                                </div>
                                <div class="wpsm_number" style="#000000">
                                    <span class="counter">2541 </span>
                                </div>
                                <h3 class="wpsm_count-title" #000000="">
                                    Members
                                </h3>
                            </div>
                        </div>
                        <div class="wpsm_col-md-4 wpsm_col-sm-6">
                            <div class="wpsm_counterbox">
                                <div class="wpsm_count-icon">
                                    <i #000000="" class="fa fa-line-chart"></i>
                                </div>
                                <div class="wpsm_number" style="#000000">
                                    <span class="counter">57 </span>
                                </div>
                                <h3 class="wpsm_count-title" #000000="">
                                    Actvites
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="wpsm_row">
                        <div class="wpsm_col-md-4 wpsm_col-sm-6">
                            <div class="wpsm_counterbox">
                                <div class="wpsm_count-icon">
                                    <i #000000="" class="fa fa-user-plus"></i>
                                </div>
                                <div class="wpsm_number" style="#000000">
                                    <span class="counter">13405 </span>
                                </div>
                                <h3 class="wpsm_count-title" #000000="">
                                    People Served
                                </h3>
                            </div>
                        </div>
                        <div class="wpsm_col-md-4 wpsm_col-sm-6">
                            <div class="wpsm_counterbox">
                                <div class="wpsm_count-icon">
                                    <i #000000="" class="fa fa-usd"></i>
                                </div>
                                <div class="wpsm_number" style="#000000">
                                    <span class="counter">10188 </span>
                                </div>
                                <h3 class="wpsm_count-title" #000000="">
                                    Funds Donated (USD)
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="wp-block-group alignfull has-section-bg-background-color has-background has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
                style="
                    margin-top: 0px;
                    margin-bottom: 0px;
                    padding-top: 0px;
                    padding-right: 15px;
                    padding-bottom: 0px;
                    padding-left: 15px;
                "
            >
                <div
                    style="margin-top: 0px; margin-bottom: 0px; height: 46px"
                    aria-hidden="true"
                    class="wp-block-spacer is-style-has-mb-30"
                ></div>

                <div
                    class="wp-block-columns alignwide is-layout-flex wp-container-24 wp-block-columns-is-layout-flex"
                    style="
                        margin-top: 0px;
                        margin-bottom: 0px;
                        padding-top: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-left: 0px;
                    "
                >
                    <div
                        class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
                        style="flex-basis: 648px"
                    >
                        <div
                            class="wp-block-group has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
                            style="
                                margin-top: 0px;
                                margin-bottom: 0px;
                                padding-top: 0px;
                                padding-right: 0px;
                                padding-bottom: 0px;
                                padding-left: 0px;
                            "
                        >
                            <h2
                                class="wp-block-heading"
                                style="
                                    margin-top: 16px;
                                    margin-right: 0px;
                                    margin-bottom: 0px;
                                    margin-left: 0px;
                                "
                            >
                                Events &amp; News
                            </h2>
                        </div>
                    </div>
                </div>

                <div
                    class="wp-block-columns alignwide is-layout-flex wp-container-38 wp-block-columns-is-layout-flex"
                >
                    <div
                        class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
                    >
                        <div
                            class="wp-block-columns is-layout-flex wp-container-36 wp-block-columns-is-layout-flex"
                        >
                            <div
                                class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
                            >
                                <div
                                    class="wp-block-query alignwide is-style-mg-0 is-layout-flow wp-block-query-is-layout-flow"
                                >
                                    <div
                                        style="
                                            margin-top: 0px;
                                            margin-bottom: 0px;
                                            height: 40px;
                                        "
                                        aria-hidden="true"
                                        class="wp-block-spacer is-style-has-mb-40"
                                    ></div>

                                    <ul
                                        class="columns-4 is-style-hover-animation is-style-mg-0 wp-block-post-template has-figtree-font-family is-layout-grid wp-container-33 wp-block-post-template-is-layout-grid"
                                    >
                                        <li
                                            class="wp-block-post post-769 post type-post status-publish format-standard has-post-thumbnail hentry category-events"
                                        >
                                            <figure
                                                style="
                                                    aspect-ratio: 1;
                                                    margin-bottom: 0px;
                                                    margin-top: 0px;
                                                "
                                                class="fr-hover-scale-img wp-block-post-featured-image"
                                            >
                                                <a
                                                    href="https://lionsdistrict306a2.org/cabinet-officers-installation-ceremony-lionistic-year-2023-2024/"
                                                    target="_self"
                                                    ><img
                                                        width="663"
                                                        height="497"
                                                        src="images/e1.png"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="Cabinet Officers Installation Ceremony Lionistic Year 2023-2024"
                                                        decoding="async"
                                                        style="
                                                            border-top-left-radius: 12px;
                                                            border-top-right-radius: 12px;
                                                            border-bottom-left-radius: 0px;
                                                            border-bottom-right-radius: 0px;
                                                            width: 100%;
                                                            height: 100%;
                                                            object-fit: cover;
                                                        "
                                                        fetchpriority="high"
                                                        srcset="
                                                            images/e1.png         663w,
                                                            images/e1-300x225.png 300w
                                                        "
                                                        sizes="(max-width: 663px) 100vw, 663px"
                                                /></a>
                                            </figure>

                                            <div
                                                class="wp-block-group has-white-background-color has-background is-layout-flow wp-container-26 wp-block-group-is-layout-flow"
                                                style="
                                                    border-top-left-radius: 0px;
                                                    border-top-right-radius: 0px;
                                                    border-bottom-left-radius: 12px;
                                                    border-bottom-right-radius: 12px;
                                                    margin-top: 0px;
                                                    margin-bottom: 0px;
                                                    padding-top: 24px;
                                                    padding-right: 24px;
                                                    padding-bottom: 24px;
                                                    padding-left: 24px;
                                                "
                                            >
                                                <div
                                                    class="wp-block-group is-nowrap is-layout-flex wp-container-25 wp-block-group-is-layout-flex"
                                                >
                                                    <div
                                                        style="
                                                            font-size: 14px;
                                                            font-style: normal;
                                                            font-weight: 400;
                                                        "
                                                        class="taxonomy-category has-text-align-left has-link-color is-style-blockscape-tags-nounder wp-block-post-terms wp-elements-fd459a3e325012a44805b12d96f694f5"
                                                    >
                                                        <a
                                                            href="https://lionsdistrict306a2.org/category/events/"
                                                            rel="tag"
                                                            >Events and
                                                            Projects</a
                                                        >
                                                    </div>

                                                    <div
                                                        style="font-size: 0px"
                                                        class="wp-block-post-date"
                                                    >
                                                        <time
                                                            datetime="2023-08-10T06:13:07+00:00"
                                                            >August 10,
                                                            2023</time
                                                        >
                                                    </div>
                                                </div>

                                                <h3
                                                    style="
                                                        margin-top: 8px;
                                                        line-height: 1.6;
                                                        letter-spacing: -0.02em;
                                                    "
                                                    class="wp-block-post-title has-medium-large-font-size"
                                                >
                                                    <a
                                                        href="https://lionsdistrict306a2.org/cabinet-officers-installation-ceremony-lionistic-year-2023-2024/"
                                                        target="_self"
                                                        >Cabinet Officers
                                                        Installation Ceremony
                                                        Lionistic Year
                                                        2023-2024</a
                                                    >
                                                </h3>

                                                <div
                                                    style="margin-top: 16px"
                                                    class="has-text-color has-lightgrey-color is-style-show-three-lines wp-block-post-excerpt"
                                                >
                                                    <p
                                                        class="wp-block-post-excerpt__excerpt"
                                                    >
                                                        The Grand Inauguration
                                                        of the Annual District
                                                        Cabinet Installation
                                                        Ceremony, Lionistic Year
                                                        2023-2024 organized by
                                                        Lions District 306 A2,
                                                        took place at the
                                                        magnificent White Heaven
                                                        Hotel, Panadura
                                                    </p>
                                                    <p
                                                        class="wp-block-post-excerpt__more-text"
                                                    >
                                                        <a
                                                            class="wp-block-post-excerpt__more-link"
                                                            href="https://lionsdistrict306a2.org/cabinet-officers-installation-ceremony-lionistic-year-2023-2024/"
                                                            >Read more →
                                                        </a>
                                                    </p>
                                                </div>
                                                <style scoped="">
                                                    .is-style-show-three-lines
                                                        > p {
                                                        display: -webkit-box;
                                                        -webkit-line-clamp: 3;
                                                        -webkit-box-orient: vertical;
                                                        overflow: hidden;
                                                        margin: 0;
                                                    }
                                                    .wp-block-post-excerpt.is-style-show-three-lines
                                                        .wp-block-post-excerpt__more-text {
                                                        margin-top: 24px;
                                                    }
                                                </style>
                                            </div>
                                        </li>
                                        <li
                                            class="wp-block-post post-754 post type-post status-publish format-standard has-post-thumbnail hentry category-events"
                                        >
                                            <figure
                                                style="
                                                    aspect-ratio: 1;
                                                    margin-bottom: 0px;
                                                    margin-top: 0px;
                                                "
                                                class="fr-hover-scale-img wp-block-post-featured-image"
                                            >
                                                <a
                                                    href="https://lionsdistrict306a2.org/lions-activity-center-opening-welcome-ceremony/"
                                                    target="_self"
                                                    ><img
                                                        width="723"
                                                        height="542"
                                                        src="images/d2.png"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="Lions Activity Center Opening &amp; Welcome Ceremony"
                                                        decoding="async"
                                                        style="
                                                            border-top-left-radius: 12px;
                                                            border-top-right-radius: 12px;
                                                            border-bottom-left-radius: 0px;
                                                            border-bottom-right-radius: 0px;
                                                            width: 100%;
                                                            height: 100%;
                                                            object-fit: cover;
                                                        "
                                                        srcset="
                                                            images/d2.png         723w,
                                                            images/d2-300x225.png 300w
                                                        "
                                                        sizes="(max-width: 723px) 100vw, 723px"
                                                /></a>
                                            </figure>

                                            <div
                                                class="wp-block-group has-white-background-color has-background is-layout-flow wp-container-28 wp-block-group-is-layout-flow"
                                                style="
                                                    border-top-left-radius: 0px;
                                                    border-top-right-radius: 0px;
                                                    border-bottom-left-radius: 12px;
                                                    border-bottom-right-radius: 12px;
                                                    margin-top: 0px;
                                                    margin-bottom: 0px;
                                                    padding-top: 24px;
                                                    padding-right: 24px;
                                                    padding-bottom: 24px;
                                                    padding-left: 24px;
                                                "
                                            >
                                                <div
                                                    class="wp-block-group is-nowrap is-layout-flex wp-container-27 wp-block-group-is-layout-flex"
                                                >
                                                    <div
                                                        style="
                                                            font-size: 14px;
                                                            font-style: normal;
                                                            font-weight: 400;
                                                        "
                                                        class="taxonomy-category has-text-align-left has-link-color is-style-blockscape-tags-nounder wp-block-post-terms wp-elements-fd459a3e325012a44805b12d96f694f5"
                                                    >
                                                        <a
                                                            href="https://lionsdistrict306a2.org/category/events/"
                                                            rel="tag"
                                                            >Events and
                                                            Projects</a
                                                        >
                                                    </div>

                                                    <div
                                                        style="font-size: 0px"
                                                        class="wp-block-post-date"
                                                    >
                                                        <time
                                                            datetime="2023-08-10T05:52:02+00:00"
                                                            >August 10,
                                                            2023</time
                                                        >
                                                    </div>
                                                </div>

                                                <h3
                                                    style="
                                                        margin-top: 8px;
                                                        line-height: 1.6;
                                                        letter-spacing: -0.02em;
                                                    "
                                                    class="wp-block-post-title has-medium-large-font-size"
                                                >
                                                    <a
                                                        href="https://lionsdistrict306a2.org/lions-activity-center-opening-welcome-ceremony/"
                                                        target="_self"
                                                        >Lions Activity Center
                                                        Opening &amp; Welcome
                                                        Ceremony</a
                                                    >
                                                </h3>

                                                <div
                                                    style="margin-top: 16px"
                                                    class="has-text-color has-lightgrey-color is-style-show-three-lines wp-block-post-excerpt"
                                                >
                                                    <p
                                                        class="wp-block-post-excerpt__excerpt"
                                                    >
                                                        The Lions Activity
                                                        Center, Colombo 07, held
                                                        a special welcome
                                                        ceremony honoring our
                                                        new District Governor,
                                                        Lion Nuwan Ballantudawa
                                                        MJF! Let’s gather to
                                                        celebrate his leadership
                                                        and vision for Lions
                                                        District 306A2.
                                                    </p>
                                                    <p
                                                        class="wp-block-post-excerpt__more-text"
                                                    >
                                                        <a
                                                            class="wp-block-post-excerpt__more-link"
                                                            href="https://lionsdistrict306a2.org/lions-activity-center-opening-welcome-ceremony/"
                                                            >Read more →
                                                        </a>
                                                    </p>
                                                </div>
                                                <style scoped="">
                                                    .is-style-show-three-lines
                                                        > p {
                                                        display: -webkit-box;
                                                        -webkit-line-clamp: 3;
                                                        -webkit-box-orient: vertical;
                                                        overflow: hidden;
                                                        margin: 0;
                                                    }
                                                    .wp-block-post-excerpt.is-style-show-three-lines
                                                        .wp-block-post-excerpt__more-text {
                                                        margin-top: 24px;
                                                    }
                                                </style>
                                            </div>
                                        </li>
                                        <li
                                            class="wp-block-post post-748 post type-post status-publish format-standard has-post-thumbnail hentry category-events"
                                        >
                                            <figure
                                                style="
                                                    aspect-ratio: 1;
                                                    margin-bottom: 0px;
                                                    margin-top: 0px;
                                                "
                                                class="fr-hover-scale-img wp-block-post-featured-image"
                                            >
                                                <a
                                                    href="https://lionsdistrict306a2.org/district-governor-welcome-ceremony-to-sri-lanka/"
                                                    target="_self"
                                                    ><img
                                                        width="1024"
                                                        height="768"
                                                        src="images/c3.png"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="District Governor Welcome Ceremony to Sri Lanka"
                                                        decoding="async"
                                                        style="
                                                            border-top-left-radius: 12px;
                                                            border-top-right-radius: 12px;
                                                            border-bottom-left-radius: 0px;
                                                            border-bottom-right-radius: 0px;
                                                            width: 100%;
                                                            height: 100%;
                                                            object-fit: cover;
                                                        "
                                                        srcset="
                                                            images/c3.png         1024w,
                                                            images/c3-300x225.png  300w,
                                                            images/c3-768x576.png  768w
                                                        "
                                                        sizes="(max-width: 1024px) 100vw, 1024px"
                                                /></a>
                                            </figure>

                                            <div
                                                class="wp-block-group has-white-background-color has-background is-layout-flow wp-container-30 wp-block-group-is-layout-flow"
                                                style="
                                                    border-top-left-radius: 0px;
                                                    border-top-right-radius: 0px;
                                                    border-bottom-left-radius: 12px;
                                                    border-bottom-right-radius: 12px;
                                                    margin-top: 0px;
                                                    margin-bottom: 0px;
                                                    padding-top: 24px;
                                                    padding-right: 24px;
                                                    padding-bottom: 24px;
                                                    padding-left: 24px;
                                                "
                                            >
                                                <div
                                                    class="wp-block-group is-nowrap is-layout-flex wp-container-29 wp-block-group-is-layout-flex"
                                                >
                                                    <div
                                                        style="
                                                            font-size: 14px;
                                                            font-style: normal;
                                                            font-weight: 400;
                                                        "
                                                        class="taxonomy-category has-text-align-left has-link-color is-style-blockscape-tags-nounder wp-block-post-terms wp-elements-fd459a3e325012a44805b12d96f694f5"
                                                    >
                                                        <a
                                                            href="https://lionsdistrict306a2.org/category/events/"
                                                            rel="tag"
                                                            >Events and
                                                            Projects</a
                                                        >
                                                    </div>

                                                    <div
                                                        style="font-size: 0px"
                                                        class="wp-block-post-date"
                                                    >
                                                        <time
                                                            datetime="2023-08-10T05:46:14+00:00"
                                                            >August 10,
                                                            2023</time
                                                        >
                                                    </div>
                                                </div>

                                                <h3
                                                    style="
                                                        margin-top: 8px;
                                                        line-height: 1.6;
                                                        letter-spacing: -0.02em;
                                                    "
                                                    class="wp-block-post-title has-medium-large-font-size"
                                                >
                                                    <a
                                                        href="https://lionsdistrict306a2.org/district-governor-welcome-ceremony-to-sri-lanka/"
                                                        target="_self"
                                                        >District Governor
                                                        Welcome Ceremony to Sri
                                                        Lanka</a
                                                    >
                                                </h3>

                                                <div
                                                    style="margin-top: 16px"
                                                    class="has-text-color has-lightgrey-color is-style-show-three-lines wp-block-post-excerpt"
                                                >
                                                    <p
                                                        class="wp-block-post-excerpt__excerpt"
                                                    >
                                                        Warmly welcoming back
                                                        Lion Nuwan Ballantudawa
                                                        MJF, the newly sworn-in
                                                        District Governor of
                                                        Lions District 306A2, as
                                                        he returns to Sri Lanka
                                                        after taking his oath in
                                                        Boston, USA. We are
                                                        excited to see the
                                                        positive impact he will
                                                        bring to our Lions
                                                        community.
                                                        Congratulations once
                                                        again, Lion Nuwan!
                                                    </p>
                                                    <p
                                                        class="wp-block-post-excerpt__more-text"
                                                    >
                                                        <a
                                                            class="wp-block-post-excerpt__more-link"
                                                            href="https://lionsdistrict306a2.org/district-governor-welcome-ceremony-to-sri-lanka/"
                                                            >Read more →
                                                        </a>
                                                    </p>
                                                </div>
                                                <style scoped="">
                                                    .is-style-show-three-lines
                                                        > p {
                                                        display: -webkit-box;
                                                        -webkit-line-clamp: 3;
                                                        -webkit-box-orient: vertical;
                                                        overflow: hidden;
                                                        margin: 0;
                                                    }
                                                    .wp-block-post-excerpt.is-style-show-three-lines
                                                        .wp-block-post-excerpt__more-text {
                                                        margin-top: 24px;
                                                    }
                                                </style>
                                            </div>
                                        </li>
                                        <li
                                            class="wp-block-post post-741 post type-post status-publish format-standard has-post-thumbnail hentry category-events"
                                        >
                                            <figure
                                                style="
                                                    aspect-ratio: 1;
                                                    margin-bottom: 0px;
                                                    margin-top: 0px;
                                                "
                                                class="fr-hover-scale-img wp-block-post-featured-image"
                                            >
                                                <a
                                                    href="https://lionsdistrict306a2.org/highlights-of-the-105th-international-convention/"
                                                    target="_self"
                                                    ><img
                                                        width="1080"
                                                        height="720"
                                                        src="images/b3.jpg"
                                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                        alt="Highlights of the 105th International Convention"
                                                        decoding="async"
                                                        style="
                                                            border-top-left-radius: 12px;
                                                            border-top-right-radius: 12px;
                                                            border-bottom-left-radius: 0px;
                                                            border-bottom-right-radius: 0px;
                                                            width: 100%;
                                                            height: 100%;
                                                            object-fit: cover;
                                                        "
                                                        loading="lazy"
                                                        srcset="
                                                            images/b3.jpg          1080w,
                                                            images/b3-300x200.jpg   300w,
                                                            images/b3-1024x683.jpg 1024w,
                                                            images/b3-768x512.jpg   768w
                                                        "
                                                        sizes="(max-width: 1080px) 100vw, 1080px"
                                                /></a>
                                            </figure>

                                            <div
                                                class="wp-block-group has-white-background-color has-background is-layout-flow wp-container-32 wp-block-group-is-layout-flow"
                                                style="
                                                    border-top-left-radius: 0px;
                                                    border-top-right-radius: 0px;
                                                    border-bottom-left-radius: 12px;
                                                    border-bottom-right-radius: 12px;
                                                    margin-top: 0px;
                                                    margin-bottom: 0px;
                                                    padding-top: 24px;
                                                    padding-right: 24px;
                                                    padding-bottom: 24px;
                                                    padding-left: 24px;
                                                "
                                            >
                                                <div
                                                    class="wp-block-group is-nowrap is-layout-flex wp-container-31 wp-block-group-is-layout-flex"
                                                >
                                                    <div
                                                        style="
                                                            font-size: 14px;
                                                            font-style: normal;
                                                            font-weight: 400;
                                                        "
                                                        class="taxonomy-category has-text-align-left has-link-color is-style-blockscape-tags-nounder wp-block-post-terms wp-elements-fd459a3e325012a44805b12d96f694f5"
                                                    >
                                                        <a
                                                            href="https://lionsdistrict306a2.org/category/events/"
                                                            rel="tag"
                                                            >Events and
                                                            Projects</a
                                                        >
                                                    </div>

                                                    <div
                                                        style="font-size: 0px"
                                                        class="wp-block-post-date"
                                                    >
                                                        <time
                                                            datetime="2023-08-10T05:39:20+00:00"
                                                            >August 10,
                                                            2023</time
                                                        >
                                                    </div>
                                                </div>

                                                <h3
                                                    style="
                                                        margin-top: 8px;
                                                        line-height: 1.6;
                                                        letter-spacing: -0.02em;
                                                    "
                                                    class="wp-block-post-title has-medium-large-font-size"
                                                >
                                                    <a
                                                        href="https://lionsdistrict306a2.org/highlights-of-the-105th-international-convention/"
                                                        target="_self"
                                                        >Highlights of the 105th
                                                        International
                                                        Convention</a
                                                    >
                                                </h3>

                                                <div
                                                    style="margin-top: 16px"
                                                    class="has-text-color has-lightgrey-color is-style-show-three-lines wp-block-post-excerpt"
                                                >
                                                    <p
                                                        class="wp-block-post-excerpt__excerpt"
                                                    >
                                                        Highlighting memorable
                                                        moments from the Lions
                                                        International Convention
                                                        in Boston, where Lion
                                                        Nuwan Ballantudawa MJF
                                                        took his oath as the
                                                        District Governor of
                                                        Lions District 306A2 for
                                                        2023-2024. Let’s
                                                        celebrate this
                                                        significant achievement!
                                                    </p>
                                                    <p
                                                        class="wp-block-post-excerpt__more-text"
                                                    >
                                                        <a
                                                            class="wp-block-post-excerpt__more-link"
                                                            href="https://lionsdistrict306a2.org/highlights-of-the-105th-international-convention/"
                                                            >Read more →
                                                        </a>
                                                    </p>
                                                </div>
                                                <style scoped="">
                                                    .is-style-show-three-lines
                                                        > p {
                                                        display: -webkit-box;
                                                        -webkit-line-clamp: 3;
                                                        -webkit-box-orient: vertical;
                                                        overflow: hidden;
                                                        margin: 0;
                                                    }
                                                    .wp-block-post-excerpt.is-style-show-three-lines
                                                        .wp-block-post-excerpt__more-text {
                                                        margin-top: 24px;
                                                    }
                                                </style>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    style="margin-top: 0px; margin-bottom: 0px; height: 40px"
                    aria-hidden="true"
                    class="wp-block-spacer is-style-has-mb-30"
                ></div>

                <div
                    class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-39 wp-block-buttons-is-layout-flex"
                    style="margin-top: 0px; margin-bottom: 0px"
                >
                    <div
                        class="wp-block-button is-style-bs-button-1 is-style-blockscape-button-icon-after"
                    >
                        <a
                            class="wp-block-button__link wp-element-button"
                            href="/news-and-projects"
                            rel=""
                            >View All</a
                        >
                    </div>
                </div>

                <div
                    style="margin-top: 0px; margin-bottom: 0px; height: 62px"
                    aria-hidden="true"
                    class="wp-block-spacer is-style-has-mb-50"
                ></div>
            </div>

            <div
                class="wp-block-group bgbladi has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
            >
                <div
                    style="height: 38px"
                    aria-hidden="true"
                    class="wp-block-spacer"
                ></div>

                <div
                    class="wp-block-columns alignwide is-layout-flex wp-container-49 wp-block-columns-is-layout-flex"
                >
                    <div
                        class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
                    >
                        <div
                            class="wp-block-group dirflx is-content-justification-center is-nowrap is-layout-flex wp-container-43 wp-block-group-is-layout-flex"
                        >
                            <figure
                                class="wp-block-image aligncenter size-full is-resized"
                            >
                                <img
                                    decoding="async"
                                    src="images/Untitled.jpg"
                                    alt=""
                                    class="wp-image-787"
                                    style="width: 128px; height: 188px"
                                    width="128"
                                    height="188"
                                    srcset="
                                        images/Untitled.jpg         519w,
                                        images/Untitled-204x300.jpg 204w
                                    "
                                    sizes="(max-width: 128px) 100vw, 128px"
                                />
                            </figure>

                            <div
                                class="wp-block-group has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
                            >
                                <h4
                                    class="wp-block-heading has-text-align-center"
                                >
                                    District Directory 2023-2024
                                </h4>

                                <div
                                    style="height: 9px"
                                    aria-hidden="true"
                                    class="wp-block-spacer"
                                ></div>

                                <div
                                    class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-41 wp-block-buttons-is-layout-flex"
                                >
                                    <div class="wp-block-button">
                                        <a
                                            class="wp-block-button__link wp-element-button"
                                            href="https://online.fliphtml5.com/zsvto/cmob/"
                                            target="_blank"
                                            rel="noreferrer noopener"
                                            >View Now</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="wp-block-column is-layout-flow wp-block-column-is-layout-flow"
                    >
                        <div
                            class="wp-block-group dirflx is-content-justification-center is-nowrap is-layout-flex wp-container-47 wp-block-group-is-layout-flex"
                        >
                            <figure
                                class="wp-block-image aligncenter size-full is-resized"
                            >
                                <img
                                    decoding="async"
                                    src="images/2615105.png"
                                    alt=""
                                    class="wp-image-806"
                                    style="width: 128px; height: 188px"
                                    width="128"
                                    height="188"
                                />
                            </figure>

                            <div
                                class="wp-block-group has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
                            >
                                <h4
                                    class="wp-block-heading has-text-align-center"
                                >
                                    District Newsletters
                                </h4>

                                <div
                                    style="height: 9px"
                                    aria-hidden="true"
                                    class="wp-block-spacer"
                                ></div>

                                <div
                                    class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-45 wp-block-buttons-is-layout-flex"
                                >
                                    <div class="wp-block-button">
                                        <a
                                            class="wp-block-button__link wp-element-button"
                                            href="https://lionsdistrict306a2.org/newsletters/"
                                            target="_blank"
                                            rel="noreferrer noopener"
                                            >View Now</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    style="height: 38px"
                    aria-hidden="true"
                    class="wp-block-spacer"
                ></div>
            </div>

            <footer class="wp-block-template-part">
                <div
                    class="wp-block-group has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
                    style="margin-top: 0px; margin-bottom: 0px"
                >
                    <div
                        style="height: 53px"
                        aria-hidden="true"
                        class="wp-block-spacer is-style-has-mb-20"
                    ></div>

                    <div
                        class="wp-block-columns alignwide is-layout-flex wp-container-64 wp-block-columns-is-layout-flex"
                        style="
                            padding-top: 0px;
                            padding-right: 15px;
                            padding-bottom: 0px;
                            padding-left: 15px;
                        "
                    >
                        <div
                            class="wp-block-column is-layout-flow wp-container-55 wp-block-column-is-layout-flow"
                        >
                            <div
                                class="wp-block-group is-layout-flow wp-block-group-is-layout-flow"
                            >
                                <h3
                                    class="wp-block-heading margb has-medium-large-font-size"
                                    style="font-style: normal; font-weight: 600"
                                >
                                    Get In Touch
                                </h3>

                                <div
                                    class="wp-block-group has-heading-color has-text-color is-nowrap is-layout-flex wp-container-51 wp-block-group-is-layout-flex"
                                >
                                    <figure
                                        class="wp-block-image size-full is-style-default is-style-in-flex margb"
                                    >
                                        <img
                                            decoding="async"
                                            src="images/contact-info-phone.svg"
                                            alt=""
                                            class="wp-image-255"
                                        />
                                    </figure>

                                    <p>
                                        <strong>+94713552779<br /></strong>
                                    </p>
                                </div>

                                <div
                                    class="wp-block-group has-heading-color has-text-color is-nowrap is-layout-flex wp-container-52 wp-block-group-is-layout-flex"
                                >
                                    <figure
                                        class="wp-block-image size-full is-style-default is-style-in-flex margb"
                                    >
                                        <img
                                            decoding="async"
                                            src="images/contact-info-email.svg"
                                            alt=""
                                            class="wp-image-255"
                                        />
                                    </figure>

                                    <p style="font-size: 16px">
                                        <strong
                                            >lionsoffice306a2@gmail.com</strong
                                        >
                                    </p>
                                </div>

                                <p></p>

                                <ul
                                    class="wp-block-social-links is-style-default is-content-justification-left is-layout-flex wp-container-53 wp-block-social-links-is-layout-flex"
                                    style="
                                        margin-top: 0px;
                                        margin-right: 0px;
                                        margin-bottom: 0px;
                                        margin-left: 0px;
                                    "
                                >
                                    <li
                                        class="wp-social-link wp-social-link-twitter wp-block-social-link"
                                    >
                                        <a
                                            href="https://twitter.com/Lions306a2"
                                            class="wp-block-social-link-anchor"
                                            ><svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                aria-hidden="true"
                                                focusable="false"
                                            >
                                                <path
                                                    d="M22.23,5.924c-0.736,0.326-1.527,0.547-2.357,0.646c0.847-0.508,1.498-1.312,1.804-2.27 c-0.793,0.47-1.671,0.812-2.606,0.996C18.324,4.498,17.257,4,16.077,4c-2.266,0-4.103,1.837-4.103,4.103 c0,0.322,0.036,0.635,0.106,0.935C8.67,8.867,5.647,7.234,3.623,4.751C3.27,5.357,3.067,6.062,3.067,6.814 c0,1.424,0.724,2.679,1.825,3.415c-0.673-0.021-1.305-0.206-1.859-0.513c0,0.017,0,0.034,0,0.052c0,1.988,1.414,3.647,3.292,4.023 c-0.344,0.094-0.707,0.144-1.081,0.144c-0.264,0-0.521-0.026-0.772-0.074c0.522,1.63,2.038,2.816,3.833,2.85 c-1.404,1.1-3.174,1.756-5.096,1.756c-0.331,0-0.658-0.019-0.979-0.057c1.816,1.164,3.973,1.843,6.29,1.843 c7.547,0,11.675-6.252,11.675-11.675c0-0.178-0.004-0.355-0.012-0.531C20.985,7.47,21.68,6.747,22.23,5.924z"
                                                ></path></svg
                                            ><span
                                                class="wp-block-social-link-label screen-reader-text"
                                                >Twitter</span
                                            ></a
                                        >
                                    </li>

                                    <li
                                        class="wp-social-link wp-social-link-facebook wp-block-social-link"
                                    >
                                        <a
                                            href="https://web.facebook.com/306A2.Lions.District/"
                                            class="wp-block-social-link-anchor"
                                            ><svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                aria-hidden="true"
                                                focusable="false"
                                            >
                                                <path
                                                    d="M12 2C6.5 2 2 6.5 2 12c0 5 3.7 9.1 8.4 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.3v7C18.3 21.1 22 17 22 12c0-5.5-4.5-10-10-10z"
                                                ></path></svg
                                            ><span
                                                class="wp-block-social-link-label screen-reader-text"
                                                >Facebook</span
                                            ></a
                                        >
                                    </li>

                                    <li
                                        class="wp-social-link wp-social-link-youtube wp-block-social-link"
                                    >
                                        <a
                                            href="https://www.youtube.com/@LionsDistrict306A2"
                                            class="wp-block-social-link-anchor"
                                            ><svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                aria-hidden="true"
                                                focusable="false"
                                            >
                                                <path
                                                    d="M21.8,8.001c0,0-0.195-1.378-0.795-1.985c-0.76-0.797-1.613-0.801-2.004-0.847c-2.799-0.202-6.997-0.202-6.997-0.202 h-0.009c0,0-4.198,0-6.997,0.202C4.608,5.216,3.756,5.22,2.995,6.016C2.395,6.623,2.2,8.001,2.2,8.001S2,9.62,2,11.238v1.517 c0,1.618,0.2,3.237,0.2,3.237s0.195,1.378,0.795,1.985c0.761,0.797,1.76,0.771,2.205,0.855c1.6,0.153,6.8,0.201,6.8,0.201 s4.203-0.006,7.001-0.209c0.391-0.047,1.243-0.051,2.004-0.847c0.6-0.607,0.795-1.985,0.795-1.985s0.2-1.618,0.2-3.237v-1.517 C22,9.62,21.8,8.001,21.8,8.001z M9.935,14.594l-0.001-5.62l5.404,2.82L9.935,14.594z"
                                                ></path></svg
                                            ><span
                                                class="wp-block-social-link-label screen-reader-text"
                                                >YouTube</span
                                            ></a
                                        >
                                    </li>

                                    <li
                                        class="wp-social-link wp-social-link-instagram wp-block-social-link"
                                    >
                                        <a
                                            href="https:///#"
                                            class="wp-block-social-link-anchor"
                                            ><svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                aria-hidden="true"
                                                focusable="false"
                                            >
                                                <path
                                                    d="M12,4.622c2.403,0,2.688,0.009,3.637,0.052c0.877,0.04,1.354,0.187,1.671,0.31c0.42,0.163,0.72,0.358,1.035,0.673 c0.315,0.315,0.51,0.615,0.673,1.035c0.123,0.317,0.27,0.794,0.31,1.671c0.043,0.949,0.052,1.234,0.052,3.637 s-0.009,2.688-0.052,3.637c-0.04,0.877-0.187,1.354-0.31,1.671c-0.163,0.42-0.358,0.72-0.673,1.035 c-0.315,0.315-0.615,0.51-1.035,0.673c-0.317,0.123-0.794,0.27-1.671,0.31c-0.949,0.043-1.233,0.052-3.637,0.052 s-2.688-0.009-3.637-0.052c-0.877-0.04-1.354-0.187-1.671-0.31c-0.42-0.163-0.72-0.358-1.035-0.673 c-0.315-0.315-0.51-0.615-0.673-1.035c-0.123-0.317-0.27-0.794-0.31-1.671C4.631,14.688,4.622,14.403,4.622,12 s0.009-2.688,0.052-3.637c0.04-0.877,0.187-1.354,0.31-1.671c0.163-0.42,0.358-0.72,0.673-1.035 c0.315-0.315,0.615-0.51,1.035-0.673c0.317-0.123,0.794-0.27,1.671-0.31C9.312,4.631,9.597,4.622,12,4.622 M12,3 C9.556,3,9.249,3.01,8.289,3.054C7.331,3.098,6.677,3.25,6.105,3.472C5.513,3.702,5.011,4.01,4.511,4.511 c-0.5,0.5-0.808,1.002-1.038,1.594C3.25,6.677,3.098,7.331,3.054,8.289C3.01,9.249,3,9.556,3,12c0,2.444,0.01,2.751,0.054,3.711 c0.044,0.958,0.196,1.612,0.418,2.185c0.23,0.592,0.538,1.094,1.038,1.594c0.5,0.5,1.002,0.808,1.594,1.038 c0.572,0.222,1.227,0.375,2.185,0.418C9.249,20.99,9.556,21,12,21s2.751-0.01,3.711-0.054c0.958-0.044,1.612-0.196,2.185-0.418 c0.592-0.23,1.094-0.538,1.594-1.038c0.5-0.5,0.808-1.002,1.038-1.594c0.222-0.572,0.375-1.227,0.418-2.185 C20.99,14.751,21,14.444,21,12s-0.01-2.751-0.054-3.711c-0.044-0.958-0.196-1.612-0.418-2.185c-0.23-0.592-0.538-1.094-1.038-1.594 c-0.5-0.5-1.002-0.808-1.594-1.038c-0.572-0.222-1.227-0.375-2.185-0.418C14.751,3.01,14.444,3,12,3L12,3z M12,7.378 c-2.552,0-4.622,2.069-4.622,4.622S9.448,16.622,12,16.622s4.622-2.069,4.622-4.622S14.552,7.378,12,7.378z M12,15 c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3S13.657,15,12,15z M16.804,6.116c-0.596,0-1.08,0.484-1.08,1.08 s0.484,1.08,1.08,1.08c0.596,0,1.08-0.484,1.08-1.08S17.401,6.116,16.804,6.116z"
                                                ></path></svg
                                            ><span
                                                class="wp-block-social-link-label screen-reader-text"
                                                >Instagram</span
                                            ></a
                                        >
                                    </li>

                                    <li
                                        class="wp-social-link wp-social-link-linkedin wp-block-social-link"
                                    >
                                        <a
                                            href="https:///#"
                                            class="wp-block-social-link-anchor"
                                            ><svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                aria-hidden="true"
                                                focusable="false"
                                            >
                                                <path
                                                    d="M19.7,3H4.3C3.582,3,3,3.582,3,4.3v15.4C3,20.418,3.582,21,4.3,21h15.4c0.718,0,1.3-0.582,1.3-1.3V4.3 C21,3.582,20.418,3,19.7,3z M8.339,18.338H5.667v-8.59h2.672V18.338z M7.004,8.574c-0.857,0-1.549-0.694-1.549-1.548 c0-0.855,0.691-1.548,1.549-1.548c0.854,0,1.547,0.694,1.547,1.548C8.551,7.881,7.858,8.574,7.004,8.574z M18.339,18.338h-2.669 v-4.177c0-0.996-0.017-2.278-1.387-2.278c-1.389,0-1.601,1.086-1.601,2.206v4.249h-2.667v-8.59h2.559v1.174h0.037 c0.356-0.675,1.227-1.387,2.526-1.387c2.703,0,3.203,1.779,3.203,4.092V18.338z"
                                                ></path></svg
                                            ><span
                                                class="wp-block-social-link-label screen-reader-text"
                                                >LinkedIn</span
                                            ></a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div
                            class="wp-block-column is-layout-flow wp-container-58 wp-block-column-is-layout-flow"
                        >
                            <h3
                                class="wp-block-heading margb has-medium-large-font-size"
                                style="font-style: normal; font-weight: 600"
                            >
                                Quick Links
                            </h3>

                            <nav
                                class="is-vertical is-style-justify-right wp-block-navigation is-layout-flex wp-container-57 wp-block-navigation-is-layout-flex"
                                aria-label="Navigation 4"
                            >
                                <ul
                                    class="wp-block-navigation__container is-vertical is-style-justify-right wp-block-navigation"
                                >
                                    <li
                                        class="wp-block-navigation-item wp-block-navigation-link"
                                    >
                                        <a
                                            class="wp-block-navigation-item__content"
                                            href="/who-we-are"
                                            ><span
                                                class="wp-block-navigation-item__label"
                                                ><strong
                                                    >Who we are</strong
                                                ></span
                                            ></a
                                        >
                                    </li>
                                    <li
                                        class="wp-block-navigation-item wp-block-navigation-link"
                                    >
                                        <a
                                            class="wp-block-navigation-item__content"
                                            href="/dgs-calendar"
                                            ><span
                                                class="wp-block-navigation-item__label"
                                                ><strong
                                                    >DG’s Calendar</strong
                                                ></span
                                            ></a
                                        >
                                    </li>
                                    <li
                                        class="wp-block-navigation-item wp-block-navigation-link"
                                    >
                                        <a
                                            class="wp-block-navigation-item__content"
                                            href="/resources"
                                            ><span
                                                class="wp-block-navigation-item__label"
                                                ><strong
                                                    >Resources</strong
                                                ></span
                                            ></a
                                        >
                                    </li>
                                    <li
                                        class="wp-block-navigation-item wp-block-navigation-link"
                                    >
                                        <a
                                            class="wp-block-navigation-item__content"
                                            href="/news-and-projects"
                                            ><span
                                                class="wp-block-navigation-item__label"
                                                ><strong
                                                    >News &amp; Events</strong
                                                ></span
                                            ></a
                                        >
                                    </li>
                                    <li
                                        class="wp-block-navigation-item wp-block-navigation-link"
                                    >
                                        <a
                                            class="wp-block-navigation-item__content"
                                            href="/contact"
                                            ><span
                                                class="wp-block-navigation-item__label"
                                                ><strong>Join us</strong></span
                                            ></a
                                        >
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div
                            class="wp-block-column is-layout-flow wp-container-61 wp-block-column-is-layout-flow"
                        >
                            <h3
                                class="wp-block-heading margb has-medium-large-font-size"
                                style="font-style: normal; font-weight: 600"
                            >
                                Other Links
                            </h3>

                            <nav
                                class="is-vertical is-style-justify-right wp-block-navigation is-layout-flex wp-container-60 wp-block-navigation-is-layout-flex"
                                aria-label="Navigation 3"
                            >
                                <ul
                                    class="wp-block-navigation__container is-vertical is-style-justify-right wp-block-navigation"
                                >
                                    <li
                                        class="wp-block-navigation-item wp-block-navigation-link"
                                    >
                                        <a
                                            class="wp-block-navigation-item__content"
                                            href="#"
                                            ><span
                                                class="wp-block-navigation-item__label"
                                                ><strong
                                                    >District contest</strong
                                                ></span
                                            ></a
                                        >
                                    </li>
                                    <li
                                        class="wp-block-navigation-item wp-block-navigation-link"
                                    >
                                        <a
                                            class="wp-block-navigation-item__content"
                                            href="#"
                                            ><span
                                                class="wp-block-navigation-item__label"
                                                ><strong>DLLI</strong></span
                                            ></a
                                        >
                                    </li>
                                    <li
                                        class="wp-block-navigation-item wp-block-navigation-link"
                                    >
                                        <a
                                            class="wp-block-navigation-item__content"
                                            href="https://www.lionsclubs.org/en"
                                            target="_blank"
                                            ><span
                                                class="wp-block-navigation-item__label"
                                                ><strong
                                                    >Lions Internatonal</strong
                                                ></span
                                            ></a
                                        >
                                    </li>
                                    <li
                                        class="wp-block-navigation-item wp-block-navigation-link"
                                    >
                                        <a
                                            class="wp-block-navigation-item__content"
                                            href="https://sinhaloka.com/"
                                            target="_blank"
                                            ><span
                                                class="wp-block-navigation-item__label"
                                                ><strong
                                                    >Sinhaloka Kidney Hospital
                                                    Trust</strong
                                                ></span
                                            ></a
                                        >
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div
                            class="wp-block-column is-vertically-aligned-top is-layout-flow wp-block-column-is-layout-flow"
                        >
                            <div
                                class="wp-block-group is-vertical is-layout-flex wp-container-62 wp-block-group-is-layout-flex"
                            >
                                <div class="wp-block-site-logo">
                                    <a
                                        href="https://lionsdistrict306a2.org/"
                                        class="custom-logo-link"
                                        rel="home"
                                        aria-current="page"
                                        ><img
                                            loading="lazy"
                                            width="198"
                                            height="98"
                                            src="images/logo.png"
                                            class="custom-logo"
                                            alt="Lions International District 306 A2"
                                            decoding="async"
                                            srcset="
                                                images/logo.png         1005w,
                                                images/logo-300x149.png  300w,
                                                images/logo-768x382.png  768w
                                            "
                                            sizes="(max-width: 198px) 100vw, 198px"
                                    /></a>
                                </div>

                                <p style="font-size: 16px">
                                    <strong>Lions International</strong>
                                    <strong>District 306 A2</strong>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        style="height: 58px"
                        aria-hidden="true"
                        class="wp-block-spacer is-style-has-mb-20"
                    ></div>
                </div>

                <hr
                    class="wp-block-separator alignwide has-text-color has-alpha-channel-opacity has-background is-style-wide"
                    style="
                        margin-top: 0px;
                        margin-bottom: 0px;
                        background-color: #00000014;
                        color: #00000014;
                    "
                />

                <div
                    class="wp-block-group alignfull has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
                    style="
                        margin-top: 0px;
                        margin-bottom: 0px;
                        padding-top: 0;
                        padding-right: 15px;
                        padding-bottom: 0;
                        padding-left: 15px;
                    "
                >
                    <div
                        class="wp-block-group alignwide is-horizontal is-content-justification-center is-nowrap is-layout-flex wp-container-66 wp-block-group-is-layout-flex"
                        style="
                            margin-top: 0px;
                            margin-bottom: 0px;
                            padding-top: 15px;
                            padding-right: 15px;
                            padding-bottom: 15px;
                            padding-left: 15px;
                        "
                    >
                        <p
                            class="has-text-align-center"
                            style="
                                margin-top: 0px;
                                margin-right: 0px;
                                margin-bottom: 0px;
                                margin-left: 0px;
                                padding-top: 0px;
                                padding-right: 0px;
                                padding-bottom: 0px;
                                padding-left: 0px;
                                font-size: 14px;
                            "
                        >
                            © 2023 LIONS INTERNATIONAL DISTRICT 306 A2. All
                            Rights Reserved.
                        </p>
                    </div>
                </div>
            </footer>
        </div>

        <style id="skip-link-styles">
            .skip-link.screen-reader-text {
                border: 0;
                clip: rect(1px, 1px, 1px, 1px);
                clip-path: inset(50%);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute !important;
                width: 1px;
                word-wrap: normal !important;
            }

            .skip-link.screen-reader-text:focus {
                background-color: #eee;
                clip: auto !important;
                clip-path: none;
                color: #444;
                display: block;
                font-size: 1em;
                height: auto;
                left: 5px;
                line-height: normal;
                padding: 15px 23px 14px;
                text-decoration: none;
                top: 5px;
                width: auto;
                z-index: 100000;
            }
        </style>
        <script>
            (function () {
                var skipLinkTarget = document.querySelector("main"),
                    sibling,
                    skipLinkTargetID,
                    skipLink;

                // Early exit if a skip-link target can't be located.
                if (!skipLinkTarget) {
                    return;
                }

                /*
                 * Get the site wrapper.
                 * The skip-link will be injected in the beginning of it.
                 */
                sibling = document.querySelector(".wp-site-blocks");

                // Early exit if the root element was not found.
                if (!sibling) {
                    return;
                }

                // Get the skip-link target's ID, and generate one if it doesn't exist.
                skipLinkTargetID = skipLinkTarget.id;
                if (!skipLinkTargetID) {
                    skipLinkTargetID = "wp--skip-link--target";
                    skipLinkTarget.id = skipLinkTargetID;
                }

                // Create the skip link.
                skipLink = document.createElement("a");
                skipLink.classList.add("skip-link", "screen-reader-text");
                skipLink.href = "#" + skipLinkTargetID;
                skipLink.innerHTML = "Skip to content";

                // Inject the skip link.
                sibling.parentElement.insertBefore(skipLink, sibling);
            })();
        </script>
        <script
            src="js/bootstrap.js"
            id="wpsm_count_bootstrap-js-front-js"
        ></script>
        <script
            src="js/counter_nscript.js"
            id="wpsm-new_count_script3-js"
        ></script>
        <script
            src="js/waypoints.min.js"
            id="wpsm-new_count_waypoints-js"
        ></script>
        <script
            src="js/jquery.counterup.min.js"
            id="wpsm-new_count_script2-js"
        ></script>
        <script src="js/init.min.js" id="blockscape-custom-scripts-js"></script>
    </body>
</html>
