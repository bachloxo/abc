var requirejs, require, define;
if (+ function(e) {
        "use strict";
        var t = e.fn.jquery.split(" ")[0].split(".");
        if (t[0] < 2 && t[1] < 9 || 1 == t[0] && 9 == t[1] && t[2] < 1) throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher")
    }(jQuery), define("bootstrap", ["jquery"], function() {}), $(function() {
        $.fn.showLoaderLayer = function() {
            var e = "loader_" + Math.floor(1e6 * Math.random()),
                t = this.is("body") ? "" : " is-child";
            return this.append('<div class="loader' + t + '" id="' + e + '"><div class="loader-overlay"></div><div class="loader-circle">Vui lÃ²ng chá» ...</div></div>'), $(".loader").show(), $("#" + e)
        }
    }), define("functions", ["jquery"], function() {}), function(e, t) {
        "use strict";
        "function" == typeof define && define.amd ? define("bootbox", ["jquery"], t) : "object" == typeof exports ? module.exports = t(require("jquery")) : e.bootbox = t(e.jQuery)
    }(this, function e(t, i) {
        "use strict";

        function n(e) {
            var t = g[h.locale];
            return t ? t[e] : g.en[e]
        }

        function a(e, i, n) {
            e.stopPropagation(), e.preventDefault();
            var a = t.isFunction(n) && n(e) === !1;
            a || i.modal("hide")
        }

        function s(e) {
            var t, i = 0;
            for (t in e) i++;
            return i
        }

        function o(e, i) {
            var n = 0;
            t.each(e, function(e, t) {
                i(e, t, n++)
            })
        }

        function r(e) {
            var i, n;
            if ("object" != typeof e) throw new Error("Please supply an object of options");
            if (!e.message) throw new Error("Please specify a message");
            return e = t.extend({}, h, e), e.buttons || (e.buttons = {}), e.backdrop = e.backdrop ? "static" : !1, i = e.buttons, n = s(i), o(i, function(e, a, s) {
                if (t.isFunction(a) && (a = i[e] = {
                        callback: a
                    }), "object" !== t.type(a)) throw new Error("button with key " + e + " must be an object");
                a.label || (a.label = e), a.className || (2 >= n && s === n - 1 ? a.className = "btn-primary" : a.className = "btn-default")
            }), e
        }

        function l(e, t) {
            var i = e.length,
                n = {};
            if (1 > i || i > 2) throw new Error("Invalid argument length");
            return 2 === i || "string" == typeof e[0] ? (n[t[0]] = e[0], n[t[1]] = e[1]) : n = e[0], n
        }

        function d(e, i, n) {
            return t.extend(!0, {}, e, l(i, n))
        }

        function c(e, t, i, n) {
            var a = {
                className: "bootbox-" + e,
                buttons: p.apply(null, t)
            };
            return u(d(a, n, i), t)
        }

        function p() {
            for (var e = {}, t = 0, i = arguments.length; i > t; t++) {
                var a = arguments[t],
                    s = a.toLowerCase(),
                    o = a.toUpperCase();
                e[s] = {
                    label: n(o)
                }
            }
            return e
        }

        function u(e, t) {
            var n = {};
            return o(t, function(e, t) {
                n[t] = !0
            }), o(e.buttons, function(e) {
                if (n[e] === i) throw new Error("button key " + e + " is not allowed (options are " + t.join("\n") + ")")
            }), e
        }
        var f = {
                dialog: "<div class='bootbox modal' tabindex='-1' role='dialog'><div class='modal-dialog'><div class='modal-content'><div class='modal-body'><div class='bootbox-body'></div></div></div></div></div>",
                header: "<div class='modal-header'><h4 class='modal-title'></h4></div>",
                footer: "<div class='modal-footer'></div>",
                closeButton: "<button type='button' class='bootbox-close-button close' data-dismiss='modal' aria-hidden='true'>&times;</button>",
                form: "<form class='bootbox-form'></form>",
                inputs: {
                    text: "<input class='bootbox-input bootbox-input-text form-control' autocomplete=off type=text />",
                    textarea: "<textarea class='bootbox-input bootbox-input-textarea form-control'></textarea>",
                    email: "<input class='bootbox-input bootbox-input-email form-control' autocomplete='off' type='email' />",
                    select: "<select class='bootbox-input bootbox-input-select form-control'></select>",
                    checkbox: "<div class='checkbox'><label><input class='bootbox-input bootbox-input-checkbox' type='checkbox' /></label></div>",
                    date: "<input class='bootbox-input bootbox-input-date form-control' autocomplete=off type='date' />",
                    time: "<input class='bootbox-input bootbox-input-time form-control' autocomplete=off type='time' />",
                    number: "<input class='bootbox-input bootbox-input-number form-control' autocomplete=off type='number' />",
                    password: "<input class='bootbox-input bootbox-input-password form-control' autocomplete='off' type='password' />"
                }
            },
            h = {
                locale: "en",
                backdrop: !0,
                animate: !0,
                className: null,
                closeButton: !0,
                show: !0,
                container: "body"
            },
            m = {};
        m.alert = function() {
            var e;
            if (e = c("alert", ["ok"], ["message", "callback"], arguments), e.callback && !t.isFunction(e.callback)) throw new Error("alert requires callback property to be a function when provided");
            return e.buttons.ok.callback = e.onEscape = function() {
                return t.isFunction(e.callback) ? e.callback() : !0
            }, m.dialog(e)
        }, m.confirm = function() {
            var e;
            if (e = c("confirm", ["cancel", "confirm"], ["message", "callback"], arguments), e.buttons.cancel.callback = e.onEscape = function() {
                    return e.callback(!1)
                }, e.buttons.confirm.callback = function() {
                    return e.callback(!0)
                }, !t.isFunction(e.callback)) throw new Error("confirm requires a callback");
            return m.dialog(e)
        }, m.prompt = function() {
            var e, n, a, s, r, l, c;
            if (s = t(f.form), n = {
                    className: "bootbox-prompt",
                    buttons: p("cancel", "confirm"),
                    value: "",
                    inputType: "text"
                }, e = u(d(n, arguments, ["title", "callback"]), ["cancel", "confirm"]), l = e.show === i ? !0 : e.show, e.message = s, e.buttons.cancel.callback = e.onEscape = function() {
                    return e.callback(null)
                }, e.buttons.confirm.callback = function() {
                    var i;
                    switch (e.inputType) {
                        case "text":
                        case "textarea":
                        case "email":
                        case "select":
                        case "date":
                        case "time":
                        case "number":
                        case "password":
                            i = r.val();
                            break;
                        case "checkbox":
                            var n = r.find("input:checked");
                            i = [], o(n, function(e, n) {
                                i.push(t(n).val())
                            })
                    }
                    return e.callback(i)
                }, e.show = !1, !e.title) throw new Error("prompt requires a title");
            if (!t.isFunction(e.callback)) throw new Error("prompt requires a callback");
            if (!f.inputs[e.inputType]) throw new Error("invalid prompt type");
            switch (r = t(f.inputs[e.inputType]), e.inputType) {
                case "text":
                case "textarea":
                case "email":
                case "date":
                case "time":
                case "number":
                case "password":
                    r.val(e.value);
                    break;
                case "select":
                    var h = {};
                    if (c = e.inputOptions || [], !c.length) throw new Error("prompt with select requires options");
                    o(c, function(e, n) {
                        var a = r;
                        if (n.value === i || n.text === i) throw new Error("given options in wrong format");
                        n.group && (h[n.group] || (h[n.group] = t("<optgroup/>").attr("label", n.group)), a = h[n.group]), a.append("<option value='" + n.value + "'>" + n.text + "</option>")
                    }), o(h, function(e, t) {
                        r.append(t)
                    }), r.val(e.value);
                    break;
                case "checkbox":
                    var g = t.isArray(e.value) ? e.value : [e.value];
                    if (c = e.inputOptions || [], !c.length) throw new Error("prompt with checkbox requires options");
                    if (!c[0].value || !c[0].text) throw new Error("given options in wrong format");
                    r = t("<div/>"), o(c, function(i, n) {
                        var a = t(f.inputs[e.inputType]);
                        a.find("input").attr("value", n.value), a.find("label").append(n.text), o(g, function(e, t) {
                            t === n.value && a.find("input").prop("checked", !0)
                        }), r.append(a)
                    })
            }
            return e.placeholder && r.attr("placeholder", e.placeholder), e.pattern && r.attr("pattern", e.pattern), s.append(r), s.on("submit", function(e) {
                e.preventDefault(), e.stopPropagation(), a.find(".btn-primary").click()
            }), a = m.dialog(e), a.off("shown.bs.modal"), a.on("shown.bs.modal", function() {
                r.focus()
            }), l === !0 && a.modal("show"), a
        }, m.dialog = function(e) {
            e = r(e);
            var i = t(f.dialog),
                n = i.find(".modal-dialog"),
                s = i.find(".modal-body"),
                l = e.buttons,
                d = "",
                c = {
                    onEscape: e.onEscape
                };
            if (o(l, function(e, t) {
                    d += "<button data-bb-handler='" + e + "' type='button' class='btn " + t.className + "'>" + t.label + "</button>", c[e] = t.callback
                }), s.find(".bootbox-body").html(e.message), e.animate === !0 && i.addClass("fade"), e.className && i.addClass(e.className), "large" === e.size && n.addClass("modal-lg"), "small" === e.size && n.addClass("modal-sm"), e.title && s.before(f.header), e.closeButton) {
                var p = t(f.closeButton);
                e.title ? i.find(".modal-header").prepend(p) : p.css("margin-top", "-10px").prependTo(s)
            }
            return e.title && i.find(".modal-title").html(e.title), d.length && (s.after(f.footer), i.find(".modal-footer").html(d)), i.on("hidden.bs.modal", function(e) {
                e.target === this && i.remove()
            }), i.on("shown.bs.modal", function() {
                i.find(".btn-primary:first").focus()
            }), i.on("escape.close.bb", function(e) {
                c.onEscape && a(e, i, c.onEscape)
            }), i.on("click", ".modal-footer button", function(e) {
                var n = t(this).data("bb-handler");
                a(e, i, c[n])
            }), i.on("click", ".bootbox-close-button", function(e) {
                a(e, i, c.onEscape)
            }), i.on("keyup", function(e) {
                27 === e.which && i.trigger("escape.close.bb")
            }), t(e.container).append(i), i.modal({
                backdrop: e.backdrop,
                keyboard: !1,
                show: !1
            }), e.show && i.modal("show"), i
        }, m.setDefaults = function() {
            var e = {};
            2 === arguments.length ? e[arguments[0]] = arguments[1] : e = arguments[0], t.extend(h, e)
        }, m.hideAll = function() {
            return t(".bootbox").modal("hide"), m
        };
        var g = {
            br: {
                OK: "OK",
                CANCEL: "Cancelar",
                CONFIRM: "Sim"
            },
            cs: {
                OK: "OK",
                CANCEL: "ZruÅ¡it",
                CONFIRM: "Potvrdit"
            },
            da: {
                OK: "OK",
                CANCEL: "Annuller",
                CONFIRM: "Accepter"
            },
            de: {
                OK: "OK",
                CANCEL: "Abbrechen",
                CONFIRM: "Akzeptieren"
            },
            el: {
                OK: "Î•Î½Ï„Î¬Î¾ÎµÎ¹",
                CANCEL: "Î‘ÎºÏÏÏ‰ÏƒÎ·",
                CONFIRM: "Î•Ï€Î¹Î²ÎµÎ²Î±Î¯Ï‰ÏƒÎ·"
            },
            en: {
                OK: "OK",
                CANCEL: "Cancel",
                CONFIRM: "OK"
            },
            es: {
                OK: "OK",
                CANCEL: "Cancelar",
                CONFIRM: "Aceptar"
            },
            et: {
                OK: "OK",
                CANCEL: "Katkesta",
                CONFIRM: "OK"
            },
            fi: {
                OK: "OK",
                CANCEL: "Peruuta",
                CONFIRM: "OK"
            },
            fr: {
                OK: "OK",
                CANCEL: "Annuler",
                CONFIRM: "D'accord"
            },
            he: {
                OK: "××™×©×•×¨",
                CANCEL: "×‘×™×˜×•×œ",
                CONFIRM: "××™×©×•×¨"
            },
            id: {
                OK: "OK",
                CANCEL: "Batal",
                CONFIRM: "OK"
            },
            it: {
                OK: "OK",
                CANCEL: "Annulla",
                CONFIRM: "Conferma"
            },
            ja: {
                OK: "OK",
                CANCEL: "ã‚­ãƒ£ãƒ³ã‚»ãƒ«",
                CONFIRM: "ç¢ºèª"
            },
            lt: {
                OK: "Gerai",
                CANCEL: "AtÅ¡aukti",
                CONFIRM: "Patvirtinti"
            },
            lv: {
                OK: "Labi",
                CANCEL: "Atcelt",
                CONFIRM: "ApstiprinÄt"
            },
            nl: {
                OK: "OK",
                CANCEL: "Annuleren",
                CONFIRM: "Accepteren"
            },
            no: {
                OK: "OK",
                CANCEL: "Avbryt",
                CONFIRM: "OK"
            },
            pl: {
                OK: "OK",
                CANCEL: "Anuluj",
                CONFIRM: "PotwierdÅº"
            },
            pt: {
                OK: "OK",
                CANCEL: "Cancelar",
                CONFIRM: "Confirmar"
            },
            ru: {
                OK: "OK",
                CANCEL: "ÐžÑ‚Ð¼ÐµÐ½Ð°",
                CONFIRM: "ÐŸÑ€Ð¸Ð¼ÐµÐ½Ð¸Ñ‚ÑŒ"
            },
            sv: {
                OK: "OK",
                CANCEL: "Avbryt",
                CONFIRM: "OK"
            },
            tr: {
                OK: "Tamam",
                CANCEL: "Ä°ptal",
                CONFIRM: "Onayla"
            },
            zh_CN: {
                OK: "OK",
                CANCEL: "å–æ¶ˆ",
                CONFIRM: "ç¡®è®¤"
            },
            zh_TW: {
                OK: "OK",
                CANCEL: "å–æ¶ˆ",
                CONFIRM: "ç¢ºèª"
            }
        };
        return m.init = function(i) {
            return e(i || t)
        }, m
    }), define("tala", ["bootbox"], function(e) {
        var t = {
            log: function(e) {
                console.log(e)
            },
            ajax: function(t, i) {
                var n = null,
                    a = t.data ? t.data : {},
                    s = t.loader ? t.loader : null,
                    o = t.csrf ? t.csrf : !1,
                    r = $("input[name=TIKI_CSRF_TOKEN]").val();
                o && ($.isArray(a) && $.merge(a, [{
                    name: "TIKI_CSRF_TOKEN",
                    value: r
                }]), $.extend(a, {
                    TIKI_CSRF_TOKEN: r
                }));
                var l = "";
                t.url && (l = t.url, -1 === t.url.indexOf(rootUrl) && (l = rootUrl + t.url)), $.ajax({
                    type: t.type ? t.type : "post",
                    url: l,
                    data: a,
                    dataType: t.dataType ? t.dataType : "json",
                    timeout: 3e4,
                    xhrFields: {
                        withCredentials: !0
                    },
                    beforeSend: function(e, i) {
                        s && (n = s.showLoaderLayer()), t.beforeSend && t.beforeSend()
                    },
                    error: function(e, t, i) {
                        s && n && n.remove()
                    },
                    success: function(a) {
                        if (s && n && n.remove(), a.error && a.error.message) {
                            if ($.fancybox.close(), 401 === a.error.code) return void e.alert(a.error.message, function() {
                                $(".user-name-login").trigger("click")
                            });
                            if (444 === a.error.code) return void e.alert(a.error.message, function() {
                                location.reload()
                            });
                            e.alert(a.error.message, i)
                        } else t.success(a)
                    }
                })
            },
            submit: function(e) {
                var t = jQuery("<form>", {
                    id: "form-" + generateRandomNumber(),
                    method: "post",
                    action: e.url
                });
                e.params && $.each(e.params, function(e, i) {
                    t.append(jQuery("<input>", {
                        name: i.name,
                        value: i.value,
                        type: "hidden"
                    }))
                }), t.appendTo(document.body).submit()
            },
            alert: function(t, i) {
                e.alert(t, i)
            },
            confirm: function(t, i, n) {
                e.confirm({
                    buttons: {
                        confirm: {
                            label: "Tiáº¿p Tá»¥c",
                            className: "btn btn-primary"
                        },
                        cancel: {
                            label: "KhÃ´ng",
                            className: "btn btn-default"
                        }
                    },
                    message: t,
                    callback: function(e) {
                        e === !0 ? i(e) : "undefined" != typeof n && n()
                    }
                })
            },
            reload: function() {
                return location.reload(), !1
            },
            "goto": function(e) {
                return location.href = e, !1
            },
            gotoTop: function() {
                window.scrollTo(0, 0), location.reload()
            },
            alertAddedCart: function(e) {
                $("html,body").animate({
                    scrollTop: 0
                }, "slow", function() {
                    var t = null;
                    t = Modernizr.mq("(min-width : 992px)") ? ".user-cart" : ".user-cart-mobile", $(t).popover({
                        trigger: "focus",
                        html: !0,
                        template: '<div class="popover alert-added-cart"><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title"></h3><div class="popover-content"><p></p></div></div></div>'
                    });
                    var i = $(t).data("bs.popover");
                    i.options.content = '<p class="icon">' + e + '</p><p class="text">sáº£n pháº©m Ä‘Ã£ thÃªm vÃ o giá» hÃ ng<a href="/checkout/cart">Xem giá» hÃ ng cá»§a tÃ´i</a></p>', $(t).popover("show")
                })
            },
            fbEventAddToCart: function(e) {
                getURLParameter("src");
                "undefined" != typeof fbq && (fbq("track", "AddToCart", {
                    content_name: e.productName,
                    content_ids: [e.productId],
                    content_type: "product",
                    value: e.price,
                    currency: "VND"
                }), console.log("Da gui fb pixel thanh cong"));
                var t = window._fbq || (window._fbq = []);
                if (!t.loaded) {
                    var i = document.createElement("script");
                    i.async = !0, i.src = "//connect.facebook.net/en_US/fbds.js";
                    var n = document.getElementsByTagName("script")[0];
                    n.parentNode.insertBefore(i, n), t.loaded = !0
                }
                window._fbq = window._fbq || [], window._fbq.push(["track", "6016441010425", {
                    value: e.price,
                    currency: "VND"
                }])
            },
            gaEventAddToCart: function(e) {
                ga("ecommerce:addItem", e), ga("ecommerce:send")
            },
            createCookie: function(e, t, i) {
                var n;
                if (i) {
                    var a = new Date;
                    a.setTime(a.getTime() + 24 * i * 60 * 60 * 1e3), n = "; expires=" + a.toGMTString()
                } else n = "";
                document.cookie = encodeURIComponent(e) + "=" + encodeURIComponent(t) + n + "; path=/"
            },
            readCookie: function(e) {
                for (var t = encodeURIComponent(e) + "=", i = document.cookie.split(";"), n = 0; n < i.length; n++) {
                    for (var a = i[n];
                        " " === a.charAt(0);) a = a.substring(1, a.length);
                    if (0 === a.indexOf(t)) return decodeURIComponent(a.substring(t.length, a.length))
                }
                return null
            },
            eraseCookie: function(e) {
                t.createCookie(e, "", -1)
            },
            getUrlParameter: function(e) {
                var t, i, n = decodeURIComponent(window.location.search.substring(1)),
                    a = n.split("&");
                for (i = 0; i < a.length; i++)
                    if (t = a[i].split("="), t[0] === e) return void 0 === t[1] ? !0 : t[1]
            }
        };
        return window.Tala = t, t
    }), ! function(e, t, i) {
        var n = window.matchMedia;
        "undefined" != typeof module && module.exports ? module.exports = i(n) : "function" == typeof define && define.amd ? define("enquire", [], function() {
            return t[e] = i(n)
        }) : t[e] = i(n)
    }("enquire", this, function(e) {
        "use strict";

        function t(e, t) {
            var i, n = 0,
                a = e.length;
            for (n; a > n && (i = t(e[n], n), i !== !1); n++);
        }

        function i(e) {
            return "[object Array]" === Object.prototype.toString.apply(e)
        }

        function n(e) {
            return "function" == typeof e
        }

        function a(e) {
            this.options = e, !e.deferSetup && this.setup()
        }

        function s(t, i) {
            this.query = t, this.isUnconditional = i, this.handlers = [], this.mql = e(t);
            var n = this;
            this.listener = function(e) {
                n.mql = e, n.assess()
            }, this.mql.addListener(this.listener)
        }

        function o() {
            if (!e) throw new Error("matchMedia not present, legacy browsers require a polyfill");
            this.queries = {}, this.browserIsIncapable = !e("only all").matches
        }
        return a.prototype = {
            setup: function() {
                this.options.setup && this.options.setup(), this.initialised = !0
            },
            on: function() {
                !this.initialised && this.setup(), this.options.match && this.options.match()
            },
            off: function() {
                this.options.unmatch && this.options.unmatch()
            },
            destroy: function() {
                this.options.destroy ? this.options.destroy() : this.off()
            },
            equals: function(e) {
                return this.options === e || this.options.match === e
            }
        }, s.prototype = {
            addHandler: function(e) {
                var t = new a(e);
                this.handlers.push(t), this.matches() && t.on()
            },
            removeHandler: function(e) {
                var i = this.handlers;
                t(i, function(t, n) {
                    return t.equals(e) ? (t.destroy(), !i.splice(n, 1)) : void 0
                })
            },
            matches: function() {
                return this.mql.matches || this.isUnconditional
            },
            clear: function() {
                t(this.handlers, function(e) {
                    e.destroy()
                }), this.mql.removeListener(this.listener), this.handlers.length = 0
            },
            assess: function() {
                var e = this.matches() ? "on" : "off";
                t(this.handlers, function(t) {
                    t[e]()
                })
            }
        }, o.prototype = {
            register: function(e, a, o) {
                var r = this.queries,
                    l = o && this.browserIsIncapable;
                return r[e] || (r[e] = new s(e, l)), n(a) && (a = {
                    match: a
                }), i(a) || (a = [a]), t(a, function(t) {
                    n(t) && (t = {
                        match: t
                    }), r[e].addHandler(t)
                }), this
            },
            unregister: function(e, t) {
                var i = this.queries[e];
                return i && (t ? i.removeHandler(t) : (i.clear(), delete this.queries[e])), this
            }
        }, new o
    }), function() {
        "use strict";

        function e(t, n) {
            function a(e, t) {
                return function() {
                    return e.apply(t, arguments)
                }
            }
            var s;
            if (n = n || {}, this.trackingClick = !1, this.trackingClickStart = 0, this.targetElement = null, this.touchStartX = 0, this.touchStartY = 0, this.lastTouchIdentifier = 0, this.touchBoundary = n.touchBoundary || 10, this.layer = t, this.tapDelay = n.tapDelay || 200, this.tapTimeout = n.tapTimeout || 700, !e.notNeeded(t)) {
                for (var o = ["onMouse", "onClick", "onTouchStart", "onTouchMove", "onTouchEnd", "onTouchCancel"], r = this, l = 0, d = o.length; d > l; l++) r[o[l]] = a(r[o[l]], r);
                i && (t.addEventListener("mouseover", this.onMouse, !0), t.addEventListener("mousedown", this.onMouse, !0), t.addEventListener("mouseup", this.onMouse, !0)), t.addEventListener("click", this.onClick, !0), t.addEventListener("touchstart", this.onTouchStart, !1), t.addEventListener("touchmove", this.onTouchMove, !1), t.addEventListener("touchend", this.onTouchEnd, !1), t.addEventListener("touchcancel", this.onTouchCancel, !1), Event.prototype.stopImmediatePropagation || (t.removeEventListener = function(e, i, n) {
                    var a = Node.prototype.removeEventListener;
                    "click" === e ? a.call(t, e, i.hijacked || i, n) : a.call(t, e, i, n)
                }, t.addEventListener = function(e, i, n) {
                    var a = Node.prototype.addEventListener;
                    "click" === e ? a.call(t, e, i.hijacked || (i.hijacked = function(e) {
                        e.propagationStopped || i(e)
                    }), n) : a.call(t, e, i, n)
                }), "function" == typeof t.onclick && (s = t.onclick, t.addEventListener("click", function(e) {
                    s(e)
                }, !1), t.onclick = null)
            }
        }
        var t = navigator.userAgent.indexOf("Windows Phone") >= 0,
            i = navigator.userAgent.indexOf("Android") > 0 && !t,
            n = /iP(ad|hone|od)/.test(navigator.userAgent) && !t,
            a = n && /OS 4_\d(_\d)?/.test(navigator.userAgent),
            s = n && /OS [6-7]_\d/.test(navigator.userAgent),
            o = navigator.userAgent.indexOf("BB10") > 0;
        e.prototype.needsClick = function(e) {
            switch (e.nodeName.toLowerCase()) {
                case "button":
                case "select":
                case "textarea":
                    if (e.disabled) return !0;
                    break;
                case "input":
                    if (n && "file" === e.type || e.disabled) return !0;
                    break;
                case "label":
                case "iframe":
                case "video":
                    return !0
            }
            return /\bneedsclick\b/.test(e.className)
        }, e.prototype.needsFocus = function(e) {
            switch (e.nodeName.toLowerCase()) {
                case "textarea":
                    return !0;
                case "select":
                    return !i;
                case "input":
                    switch (e.type) {
                        case "button":
                        case "checkbox":
                        case "file":
                        case "image":
                        case "radio":
                        case "submit":
                            return !1
                    }
                    return !e.disabled && !e.readOnly;
                default:
                    return /\bneedsfocus\b/.test(e.className)
            }
        }, e.prototype.sendClick = function(e, t) {
            var i, n;
            document.activeElement && document.activeElement !== e && document.activeElement.blur(), n = t.changedTouches[0], i = document.createEvent("MouseEvents"), i.initMouseEvent(this.determineEventType(e), !0, !0, window, 1, n.screenX, n.screenY, n.clientX, n.clientY, !1, !1, !1, !1, 0, null), i.forwardedTouchEvent = !0, e.dispatchEvent(i)
        }, e.prototype.determineEventType = function(e) {
            return i && "select" === e.tagName.toLowerCase() ? "mousedown" : "click"
        }, e.prototype.focus = function(e) {
            var t;
            n && e.setSelectionRange && 0 !== e.type.indexOf("date") && "time" !== e.type && "month" !== e.type ? (t = e.value.length, e.setSelectionRange(t, t)) : e.focus()
        }, e.prototype.updateScrollParent = function(e) {
            var t, i;
            if (t = e.fastClickScrollParent, !t || !t.contains(e)) {
                i = e;
                do {
                    if (i.scrollHeight > i.offsetHeight) {
                        t = i, e.fastClickScrollParent = i;
                        break
                    }
                    i = i.parentElement
                } while (i)
            }
            t && (t.fastClickLastScrollTop = t.scrollTop)
        }, e.prototype.getTargetElementFromEventTarget = function(e) {
            return e.nodeType === Node.TEXT_NODE ? e.parentNode : e
        }, e.prototype.onTouchStart = function(e) {
            var t, i, s;
            if (e.targetTouches.length > 1) return !0;
            if (t = this.getTargetElementFromEventTarget(e.target), i = e.targetTouches[0], n) {
                if (s = window.getSelection(), s.rangeCount && !s.isCollapsed) return !0;
                if (!a) {
                    if (i.identifier && i.identifier === this.lastTouchIdentifier) return e.preventDefault(), !1;
                    this.lastTouchIdentifier = i.identifier,
                        this.updateScrollParent(t)
                }
            }
            return this.trackingClick = !0, this.trackingClickStart = e.timeStamp, this.targetElement = t, this.touchStartX = i.pageX, this.touchStartY = i.pageY, e.timeStamp - this.lastClickTime < this.tapDelay && e.preventDefault(), !0
        }, e.prototype.touchHasMoved = function(e) {
            var t = e.changedTouches[0],
                i = this.touchBoundary;
            return Math.abs(t.pageX - this.touchStartX) > i || Math.abs(t.pageY - this.touchStartY) > i ? !0 : !1
        }, e.prototype.onTouchMove = function(e) {
            return this.trackingClick ? ((this.targetElement !== this.getTargetElementFromEventTarget(e.target) || this.touchHasMoved(e)) && (this.trackingClick = !1, this.targetElement = null), !0) : !0
        }, e.prototype.findControl = function(e) {
            return void 0 !== e.control ? e.control : e.htmlFor ? document.getElementById(e.htmlFor) : e.querySelector("button, input:not([type=hidden]), keygen, meter, output, progress, select, textarea")
        }, e.prototype.onTouchEnd = function(e) {
            var t, o, r, l, d, c = this.targetElement;
            if (!this.trackingClick) return !0;
            if (e.timeStamp - this.lastClickTime < this.tapDelay) return this.cancelNextClick = !0, !0;
            if (e.timeStamp - this.trackingClickStart > this.tapTimeout) return !0;
            if (this.cancelNextClick = !1, this.lastClickTime = e.timeStamp, o = this.trackingClickStart, this.trackingClick = !1, this.trackingClickStart = 0, s && (d = e.changedTouches[0], c = document.elementFromPoint(d.pageX - window.pageXOffset, d.pageY - window.pageYOffset) || c, c.fastClickScrollParent = this.targetElement.fastClickScrollParent), r = c.tagName.toLowerCase(), "label" === r) {
                if (t = this.findControl(c)) {
                    if (this.focus(c), i) return !1;
                    c = t
                }
            } else if (this.needsFocus(c)) return e.timeStamp - o > 100 || n && window.top !== window && "input" === r ? (this.targetElement = null, !1) : (this.focus(c), this.sendClick(c, e), n && "select" === r || (this.targetElement = null, e.preventDefault()), !1);
            return n && !a && (l = c.fastClickScrollParent, l && l.fastClickLastScrollTop !== l.scrollTop) ? !0 : (this.needsClick(c) || (e.preventDefault(), this.sendClick(c, e)), !1)
        }, e.prototype.onTouchCancel = function() {
            this.trackingClick = !1, this.targetElement = null
        }, e.prototype.onMouse = function(e) {
            return this.targetElement ? e.forwardedTouchEvent ? !0 : e.cancelable && (!this.needsClick(this.targetElement) || this.cancelNextClick) ? (e.stopImmediatePropagation ? e.stopImmediatePropagation() : e.propagationStopped = !0, e.stopPropagation(), e.preventDefault(), !1) : !0 : !0
        }, e.prototype.onClick = function(e) {
            var t;
            return this.trackingClick ? (this.targetElement = null, this.trackingClick = !1, !0) : "submit" === e.target.type && 0 === e.detail ? !0 : (t = this.onMouse(e), t || (this.targetElement = null), t)
        }, e.prototype.destroy = function() {
            var e = this.layer;
            i && (e.removeEventListener("mouseover", this.onMouse, !0), e.removeEventListener("mousedown", this.onMouse, !0), e.removeEventListener("mouseup", this.onMouse, !0)), e.removeEventListener("click", this.onClick, !0), e.removeEventListener("touchstart", this.onTouchStart, !1), e.removeEventListener("touchmove", this.onTouchMove, !1), e.removeEventListener("touchend", this.onTouchEnd, !1), e.removeEventListener("touchcancel", this.onTouchCancel, !1)
        }, e.notNeeded = function(e) {
            var t, n, a, s;
            if ("undefined" == typeof window.ontouchstart) return !0;
            if (n = +(/Chrome\/([0-9]+)/.exec(navigator.userAgent) || [, 0])[1]) {
                if (!i) return !0;
                if (t = document.querySelector("meta[name=viewport]")) {
                    if (-1 !== t.content.indexOf("user-scalable=no")) return !0;
                    if (n > 31 && document.documentElement.scrollWidth <= window.outerWidth) return !0
                }
            }
            if (o && (a = navigator.userAgent.match(/Version\/([0-9]*)\.([0-9]*)/), a[1] >= 10 && a[2] >= 3 && (t = document.querySelector("meta[name=viewport]")))) {
                if (-1 !== t.content.indexOf("user-scalable=no")) return !0;
                if (document.documentElement.scrollWidth <= window.outerWidth) return !0
            }
            return "none" === e.style.msTouchAction || "manipulation" === e.style.touchAction ? !0 : (s = +(/Firefox\/([0-9]+)/.exec(navigator.userAgent) || [, 0])[1], s >= 27 && (t = document.querySelector("meta[name=viewport]"), t && (-1 !== t.content.indexOf("user-scalable=no") || document.documentElement.scrollWidth <= window.outerWidth)) ? !0 : "none" === e.style.touchAction || "manipulation" === e.style.touchAction ? !0 : !1)
        }, e.attach = function(t, i) {
            return new e(t, i)
        }, "function" == typeof define && "object" == typeof define.amd && define.amd ? define("fastclick", [], function() {
            return e
        }) : "undefined" != typeof module && module.exports ? (module.exports = e.attach, module.exports.FastClick = e) : window.FastClick = e
    }(), function(e, t, i, n) {
        "use strict";
        var a = i("html"),
            s = i(e),
            o = i(t),
            r = i.fancybox = function() {
                r.open.apply(this, arguments)
            },
            l = navigator.userAgent.match(/msie/i),
            d = null,
            c = t.createTouch !== n,
            p = function(e) {
                return e && e.hasOwnProperty && e instanceof i
            },
            u = function(e) {
                return e && "string" === i.type(e)
            },
            f = function(e) {
                return u(e) && e.indexOf("%") > 0
            },
            h = function(e) {
                return e && !(e.style.overflow && "hidden" === e.style.overflow) && (e.clientWidth && e.scrollWidth > e.clientWidth || e.clientHeight && e.scrollHeight > e.clientHeight)
            },
            m = function(e, t) {
                var i = parseInt(e, 10) || 0;
                return t && f(e) && (i = r.getViewport()[t] / 100 * i), Math.ceil(i)
            },
            g = function(e, t) {
                return m(e, t) + "px"
            };
        i.extend(r, {
            version: "2.1.5",
            defaults: {
                padding: 15,
                margin: 20,
                width: 800,
                height: 600,
                minWidth: 100,
                minHeight: 100,
                maxWidth: 9999,
                maxHeight: 9999,
                pixelRatio: 1,
                autoSize: !0,
                autoHeight: !1,
                autoWidth: !1,
                autoResize: !0,
                autoCenter: !c,
                fitToView: !0,
                aspectRatio: !1,
                topRatio: .5,
                leftRatio: .5,
                scrolling: "auto",
                wrapCSS: "",
                arrows: !0,
                closeBtn: !0,
                closeClick: !1,
                nextClick: !1,
                mouseWheel: !0,
                autoPlay: !1,
                playSpeed: 3e3,
                preload: 3,
                modal: !1,
                loop: !0,
                ajax: {
                    dataType: "html",
                    headers: {
                        "X-fancyBox": !0
                    }
                },
                iframe: {
                    scrolling: "auto",
                    preload: !0
                },
                swf: {
                    wmode: "transparent",
                    allowfullscreen: "true",
                    allowscriptaccess: "always"
                },
                keys: {
                    next: {
                        13: "left",
                        34: "up",
                        39: "left",
                        40: "up"
                    },
                    prev: {
                        8: "right",
                        33: "down",
                        37: "right",
                        38: "down"
                    },
                    close: [27],
                    play: [32],
                    toggle: [70]
                },
                direction: {
                    next: "left",
                    prev: "right"
                },
                scrollOutside: !0,
                index: 0,
                type: null,
                href: null,
                content: null,
                title: null,
                tpl: {
                    wrap: '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',
                    image: '<img class="fancybox-image" src="{href}" alt="" />',
                    iframe: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen' + (l ? ' allowtransparency="true"' : "") + "></iframe>",
                    error: '<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',
                    closeBtn: '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',
                    next: '<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',
                    prev: '<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'
                },
                openEffect: "fade",
                openSpeed: 250,
                openEasing: "swing",
                openOpacity: !0,
                openMethod: "zoomIn",
                closeEffect: "fade",
                closeSpeed: 250,
                closeEasing: "swing",
                closeOpacity: !0,
                closeMethod: "zoomOut",
                nextEffect: "elastic",
                nextSpeed: 250,
                nextEasing: "swing",
                nextMethod: "changeIn",
                prevEffect: "elastic",
                prevSpeed: 250,
                prevEasing: "swing",
                prevMethod: "changeOut",
                helpers: {
                    overlay: !0,
                    title: !0
                },
                onCancel: i.noop,
                beforeLoad: i.noop,
                afterLoad: i.noop,
                beforeShow: i.noop,
                afterShow: i.noop,
                beforeChange: i.noop,
                beforeClose: i.noop,
                afterClose: i.noop
            },
            group: {},
            opts: {},
            previous: null,
            coming: null,
            current: null,
            isActive: !1,
            isOpen: !1,
            isOpened: !1,
            wrap: null,
            skin: null,
            outer: null,
            inner: null,
            player: {
                timer: null,
                isActive: !1
            },
            ajaxLoad: null,
            imgPreload: null,
            transitions: {},
            helpers: {},
            open: function(e, t) {
                return e && (i.isPlainObject(t) || (t = {}), !1 !== r.close(!0)) ? (i.isArray(e) || (e = p(e) ? i(e).get() : [e]), i.each(e, function(a, s) {
                    var o, l, d, c, f, h, m, g = {};
                    "object" === i.type(s) && (s.nodeType && (s = i(s)), p(s) ? (g = {
                        href: s.data("fancybox-href") || s.attr("href"),
                        title: s.data("fancybox-title") || s.attr("title"),
                        isDom: !0,
                        element: s
                    }, i.metadata && i.extend(!0, g, s.metadata())) : g = s), o = t.href || g.href || (u(s) ? s : null), l = t.title !== n ? t.title : g.title || "", d = t.content || g.content, c = d ? "html" : t.type || g.type, !c && g.isDom && (c = s.data("fancybox-type"), c || (f = s.prop("class").match(/fancybox\.(\w+)/), c = f ? f[1] : null)), u(o) && (c || (r.isImage(o) ? c = "image" : r.isSWF(o) ? c = "swf" : "#" === o.charAt(0) ? c = "inline" : u(s) && (c = "html", d = s)), "ajax" === c && (h = o.split(/\s+/, 2), o = h.shift(), m = h.shift())), d || ("inline" === c ? o ? d = i(u(o) ? o.replace(/.*(?=#[^\s]+$)/, "") : o) : g.isDom && (d = s) : "html" === c ? d = o : c || o || !g.isDom || (c = "inline", d = s)), i.extend(g, {
                        href: o,
                        type: c,
                        content: d,
                        title: l,
                        selector: m
                    }), e[a] = g
                }), r.opts = i.extend(!0, {}, r.defaults, t), t.keys !== n && (r.opts.keys = t.keys ? i.extend({}, r.defaults.keys, t.keys) : !1), r.group = e, r._start(r.opts.index)) : void 0
            },
            cancel: function() {
                var e = r.coming;
                e && !1 !== r.trigger("onCancel") && (r.hideLoading(), r.ajaxLoad && r.ajaxLoad.abort(), r.ajaxLoad = null, r.imgPreload && (r.imgPreload.onload = r.imgPreload.onerror = null), e.wrap && e.wrap.stop(!0, !0).trigger("onReset").remove(), r.coming = null, r.current || r._afterZoomOut(e))
            },
            close: function(e) {
                r.cancel(), !1 !== r.trigger("beforeClose") && (r.unbindEvents(), r.isActive && (r.isOpen && e !== !0 ? (r.isOpen = r.isOpened = !1, r.isClosing = !0, i(".fancybox-item, .fancybox-nav").remove(), r.wrap.stop(!0, !0).removeClass("fancybox-opened"), r.transitions[r.current.closeMethod]()) : (i(".fancybox-wrap").stop(!0).trigger("onReset").remove(), r._afterZoomOut())))
            },
            play: function(e) {
                var t = function() {
                        clearTimeout(r.player.timer)
                    },
                    i = function() {
                        t(), r.current && r.player.isActive && (r.player.timer = setTimeout(r.next, r.current.playSpeed))
                    },
                    n = function() {
                        t(), o.unbind(".player"), r.player.isActive = !1, r.trigger("onPlayEnd")
                    },
                    a = function() {
                        r.current && (r.current.loop || r.current.index < r.group.length - 1) && (r.player.isActive = !0, o.bind({
                            "onCancel.player beforeClose.player": n,
                            "onUpdate.player": i,
                            "beforeLoad.player": t
                        }), i(), r.trigger("onPlayStart"))
                    };
                e === !0 || !r.player.isActive && e !== !1 ? a() : n()
            },
            next: function(e) {
                var t = r.current;
                t && (u(e) || (e = t.direction.next), r.jumpto(t.index + 1, e, "next"))
            },
            prev: function(e) {
                var t = r.current;
                t && (u(e) || (e = t.direction.prev), r.jumpto(t.index - 1, e, "prev"))
            },
            jumpto: function(e, t, i) {
                var a = r.current;
                a && (e = m(e), r.direction = t || a.direction[e >= a.index ? "next" : "prev"], r.router = i || "jumpto", a.loop && (0 > e && (e = a.group.length + e % a.group.length), e %= a.group.length), a.group[e] !== n && (r.cancel(), r._start(e)))
            },
            reposition: function(e, t) {
                var n, a = r.current,
                    s = a ? a.wrap : null;
                s && (n = r._getPosition(t), e && "scroll" === e.type ? (delete n.position, s.stop(!0, !0).animate(n, 200)) : (s.css(n), a.pos = i.extend({}, a.dim, n)))
            },
            update: function(e) {
                var t = e && e.type,
                    i = !t || "orientationchange" === t;
                i && (clearTimeout(d), d = null), r.isOpen && !d && (d = setTimeout(function() {
                    var n = r.current;
                    n && !r.isClosing && (r.wrap.removeClass("fancybox-tmp"), (i || "load" === t || "resize" === t && n.autoResize) && r._setDimension(), "scroll" === t && n.canShrink || r.reposition(e), r.trigger("onUpdate"), d = null)
                }, i && !c ? 0 : 300))
            },
            toggle: function(e) {
                r.isOpen && (r.current.fitToView = "boolean" === i.type(e) ? e : !r.current.fitToView, c && (r.wrap.removeAttr("style").addClass("fancybox-tmp"), r.trigger("onUpdate")), r.update())
            },
            hideLoading: function() {
                o.unbind(".loading"), i("#fancybox-loading").remove()
            },
            showLoading: function() {
                var e, t;
                r.hideLoading(), e = i('<div id="fancybox-loading"><div></div></div>').click(r.cancel).appendTo("body"), o.bind("keydown.loading", function(e) {
                    27 === (e.which || e.keyCode) && (e.preventDefault(), r.cancel())
                }), r.defaults.fixed || (t = r.getViewport(), e.css({
                    position: "absolute",
                    top: .5 * t.h + t.y,
                    left: .5 * t.w + t.x
                }))
            },
            getViewport: function() {
                var t = r.current && r.current.locked || !1,
                    i = {
                        x: s.scrollLeft(),
                        y: s.scrollTop()
                    };
                return t ? (i.w = t[0].clientWidth, i.h = t[0].clientHeight) : (i.w = c && e.innerWidth ? e.innerWidth : s.width(), i.h = c && e.innerHeight ? e.innerHeight : s.height()), i
            },
            unbindEvents: function() {
                r.wrap && p(r.wrap) && r.wrap.unbind(".fb"), o.unbind(".fb"), s.unbind(".fb")
            },
            bindEvents: function() {
                var e, t = r.current;
                t && (s.bind("orientationchange.fb" + (c ? "" : " resize.fb") + (t.autoCenter && !t.locked ? " scroll.fb" : ""), r.update), e = t.keys, e && o.bind("keydown.fb", function(a) {
                    var s = a.which || a.keyCode,
                        o = a.target || a.srcElement;
                    return 27 === s && r.coming ? !1 : void(a.ctrlKey || a.altKey || a.shiftKey || a.metaKey || o && (o.type || i(o).is("[contenteditable]")) || i.each(e, function(e, o) {
                        return t.group.length > 1 && o[s] !== n ? (r[e](o[s]), a.preventDefault(), !1) : i.inArray(s, o) > -1 ? (r[e](), a.preventDefault(), !1) : void 0
                    }))
                }), i.fn.mousewheel && t.mouseWheel && r.wrap.bind("mousewheel.fb", function(e, n, a, s) {
                    for (var o = e.target || null, l = i(o), d = !1; l.length && !(d || l.is(".fancybox-skin") || l.is(".fancybox-wrap"));) d = h(l[0]), l = i(l).parent();
                    0 === n || d || r.group.length > 1 && !t.canShrink && (s > 0 || a > 0 ? r.prev(s > 0 ? "down" : "left") : (0 > s || 0 > a) && r.next(0 > s ? "up" : "right"), e.preventDefault())
                }))
            },
            trigger: function(e, t) {
                var n, a = t || r.coming || r.current;
                if (a) {
                    if (i.isFunction(a[e]) && (n = a[e].apply(a, Array.prototype.slice.call(arguments, 1))), n === !1) return !1;
                    a.helpers && i.each(a.helpers, function(t, n) {
                        n && r.helpers[t] && i.isFunction(r.helpers[t][e]) && r.helpers[t][e](i.extend(!0, {}, r.helpers[t].defaults, n), a)
                    }), o.trigger(e)
                }
            },
            isImage: function(e) {
                return u(e) && e.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i)
            },
            isSWF: function(e) {
                return u(e) && e.match(/\.(swf)((\?|#).*)?$/i)
            },
            _start: function(e) {
                var t, n, a, s, o, l = {};
                if (e = m(e), t = r.group[e] || null, !t) return !1;
                if (l = i.extend(!0, {}, r.opts, t), s = l.margin, o = l.padding, "number" === i.type(s) && (l.margin = [s, s, s, s]), "number" === i.type(o) && (l.padding = [o, o, o, o]), l.modal && i.extend(!0, l, {
                        closeBtn: !1,
                        closeClick: !1,
                        nextClick: !1,
                        arrows: !1,
                        mouseWheel: !1,
                        keys: null,
                        helpers: {
                            overlay: {
                                closeClick: !1
                            }
                        }
                    }), l.autoSize && (l.autoWidth = l.autoHeight = !0), "auto" === l.width && (l.autoWidth = !0), "auto" === l.height && (l.autoHeight = !0), l.group = r.group, l.index = e, r.coming = l, !1 === r.trigger("beforeLoad")) return void(r.coming = null);
                if (a = l.type, n = l.href, !a) return r.coming = null, r.current && r.router && "jumpto" !== r.router ? (r.current.index = e, r[r.router](r.direction)) : !1;
                if (r.isActive = !0, ("image" === a || "swf" === a) && (l.autoHeight = l.autoWidth = !1, l.scrolling = "visible"), "image" === a && (l.aspectRatio = !0), "iframe" === a && c && (l.scrolling = "scroll"), l.wrap = i(l.tpl.wrap).addClass("fancybox-" + (c ? "mobile" : "desktop") + " fancybox-type-" + a + " fancybox-tmp " + l.wrapCSS).appendTo(l.parent || "body"), i.extend(l, {
                        skin: i(".fancybox-skin", l.wrap),
                        outer: i(".fancybox-outer", l.wrap),
                        inner: i(".fancybox-inner", l.wrap)
                    }), i.each(["Top", "Right", "Bottom", "Left"], function(e, t) {
                        l.skin.css("padding" + t, g(l.padding[e]))
                    }), r.trigger("onReady"), "inline" === a || "html" === a) {
                    if (!l.content || !l.content.length) return r._error("content")
                } else if (!n) return r._error("href");
                "image" === a ? r._loadImage() : "ajax" === a ? r._loadAjax() : "iframe" === a ? r._loadIframe() : r._afterLoad()
            },
            _error: function(e) {
                i.extend(r.coming, {
                    type: "html",
                    autoWidth: !0,
                    autoHeight: !0,
                    minWidth: 0,
                    minHeight: 0,
                    scrolling: "no",
                    hasError: e,
                    content: r.coming.tpl.error
                }), r._afterLoad()
            },
            _loadImage: function() {
                var e = r.imgPreload = new Image;
                e.onload = function() {
                    this.onload = this.onerror = null, r.coming.width = this.width / r.opts.pixelRatio, r.coming.height = this.height / r.opts.pixelRatio, r._afterLoad()
                }, e.onerror = function() {
                    this.onload = this.onerror = null, r._error("image")
                }, e.src = r.coming.href, e.complete !== !0 && r.showLoading()
            },
            _loadAjax: function() {
                var e = r.coming;
                r.showLoading(), r.ajaxLoad = i.ajax(i.extend({}, e.ajax, {
                    url: e.href,
                    error: function(e, t) {
                        r.coming && "abort" !== t ? r._error("ajax", e) : r.hideLoading()
                    },
                    success: function(t, i) {
                        "success" === i && (e.content = t, r._afterLoad())
                    }
                }))
            },
            _loadIframe: function() {
                var e = r.coming,
                    t = i(e.tpl.iframe.replace(/\{rnd\}/g, (new Date).getTime())).attr("scrolling", c ? "auto" : e.iframe.scrolling).attr("src", e.href);
                i(e.wrap).bind("onReset", function() {
                    try {
                        i(this).find("iframe").hide().attr("src", "//about:blank").end().empty()
                    } catch (e) {}
                }), e.iframe.preload && (r.showLoading(), t.one("load", function() {
                    i(this).data("ready", 1), c || i(this).bind("load.fb", r.update), i(this).parents(".fancybox-wrap").width("100%").removeClass("fancybox-tmp").show(), r._afterLoad()
                })), e.content = t.appendTo(e.inner), e.iframe.preload || r._afterLoad()
            },
            _preloadImages: function() {
                var e, t, i = r.group,
                    n = r.current,
                    a = i.length,
                    s = n.preload ? Math.min(n.preload, a - 1) : 0;
                for (t = 1; s >= t; t += 1) e = i[(n.index + t) % a], "image" === e.type && e.href && ((new Image).src = e.href)
            },
            _afterLoad: function() {
                var e, t, n, a, s, o, l = r.coming,
                    d = r.current,
                    c = "fancybox-placeholder";
                if (r.hideLoading(), l && r.isActive !== !1) {
                    if (!1 === r.trigger("afterLoad", l, d)) return l.wrap.stop(!0).trigger("onReset").remove(), void(r.coming = null);
                    switch (d && (r.trigger("beforeChange", d), d.wrap.stop(!0).removeClass("fancybox-opened").find(".fancybox-item, .fancybox-nav").remove()), r.unbindEvents(), e = l, t = l.content, n = l.type, a = l.scrolling, i.extend(r, {
                        wrap: e.wrap,
                        skin: e.skin,
                        outer: e.outer,
                        inner: e.inner,
                        current: e,
                        previous: d
                    }), s = e.href, n) {
                        case "inline":
                        case "ajax":
                        case "html":
                            e.selector ? t = i("<div>").html(t).find(e.selector) : p(t) && (t.data(c) || t.data(c, i('<div class="' + c + '"></div>').insertAfter(t).hide()), t = t.show().detach(), e.wrap.bind("onReset", function() {
                                i(this).find(t).length && t.hide().replaceAll(t.data(c)).data(c, !1)
                            }));
                            break;
                        case "image":
                            t = e.tpl.image.replace("{href}", s);
                            break;
                        case "swf":
                            t = '<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="' + s + '"></param>', o = "", i.each(e.swf, function(e, i) {
                                t += '<param name="' + e + '" value="' + i + '"></param>', o += " " + e + '="' + i + '"'
                            }), t += '<embed src="' + s + '" type="application/x-shockwave-flash" width="100%" height="100%"' + o + "></embed></object>"
                    }
                    p(t) && t.parent().is(e.inner) || e.inner.append(t), r.trigger("beforeShow"), e.inner.css("overflow", "yes" === a ? "scroll" : "no" === a ? "hidden" : a), r._setDimension(), r.reposition(), r.isOpen = !1, r.coming = null, r.bindEvents(), r.isOpened ? d.prevMethod && r.transitions[d.prevMethod]() : i(".fancybox-wrap").not(e.wrap).stop(!0).trigger("onReset").remove(), r.transitions[r.isOpened ? e.nextMethod : e.openMethod](), r._preloadImages()
                }
            },
            _setDimension: function() {
                var e, t, n, a, s, o, l, d, c, p, u, h, v, b, y, w = r.getViewport(),
                    x = 0,
                    Q = !1,
                    $ = !1,
                    S = r.wrap,
                    k = r.skin,
                    T = r.inner,
                    C = r.current,
                    I = C.width,
                    A = C.height,
                    j = C.minWidth,
                    E = C.minHeight,
                    _ = C.maxWidth,
                    R = C.maxHeight,
                    P = C.scrolling,
                    D = C.scrollOutside ? C.scrollbarWidth : 0,
                    V = C.margin,
                    N = m(V[1] + V[3]),
                    M = m(V[0] + V[2]);
                if (S.add(k).add(T).width("auto").height("auto").removeClass("fancybox-tmp"), e = m(k.outerWidth(!0) - k.width()), t = m(k.outerHeight(!0) - k.height()), n = N + e, a = M + t, s = f(I) ? (w.w - n) * m(I) / 100 : I, o = f(A) ? (w.h - a) * m(A) / 100 : A, "iframe" === C.type) {
                    if (b = C.content, C.autoHeight && 1 === b.data("ready")) try {
                        b[0].contentWindow.document.location && (T.width(s).height(9999), y = b.contents().find("body"), D && y.css("overflow-x", "hidden"), o = y.outerHeight(!0))
                    } catch (O) {}
                } else(C.autoWidth || C.autoHeight) && (T.addClass("fancybox-tmp"), C.autoWidth || T.width(s), C.autoHeight || T.height(o), C.autoWidth && (s = T.width()), C.autoHeight && (o = T.height()), T.removeClass("fancybox-tmp"));
                if (I = m(s), A = m(o), c = s / o, j = m(f(j) ? m(j, "w") - n : j), _ = m(f(_) ? m(_, "w") - n : _), E = m(f(E) ? m(E, "h") - a : E), R = m(f(R) ? m(R, "h") - a : R), l = _, d = R, C.fitToView && (_ = Math.min(w.w - n, _), R = Math.min(w.h - a, R)), h = w.w - N, v = w.h - M, C.aspectRatio ? (I > _ && (I = _, A = m(I / c)), A > R && (A = R, I = m(A * c)), j > I && (I = j, A = m(I / c)), E > A && (A = E, I = m(A * c))) : (I = Math.max(j, Math.min(I, _)), C.autoHeight && "iframe" !== C.type && (T.width(I), A = T.height()), A = Math.max(E, Math.min(A, R))), C.fitToView)
                    if (T.width(I).height(A), S.width(I + e), p = S.width(), u = S.height(), C.aspectRatio)
                        for (;
                            (p > h || u > v) && I > j && A > E && !(x++ > 19);) A = Math.max(E, Math.min(R, A - 10)), I = m(A * c), j > I && (I = j, A = m(I / c)), I > _ && (I = _, A = m(I / c)), T.width(I).height(A), S.width(I + e), p = S.width(), u = S.height();
                    else I = Math.max(j, Math.min(I, I - (p - h))), A = Math.max(E, Math.min(A, A - (u - v)));
                D && "auto" === P && o > A && h > I + e + D && (I += D), T.width(I).height(A), S.width(I + e), p = S.width(), u = S.height(), Q = (p > h || u > v) && I > j && A > E, $ = C.aspectRatio ? l > I && d > A && s > I && o > A : (l > I || d > A) && (s > I || o > A), i.extend(C, {
                    dim: {
                        width: g(p),
                        height: g(u)
                    },
                    origWidth: s,
                    origHeight: o,
                    canShrink: Q,
                    canExpand: $,
                    wPadding: e,
                    hPadding: t,
                    wrapSpace: u - k.outerHeight(!0),
                    skinSpace: k.height() - A
                }), !b && C.autoHeight && A > E && R > A && !$ && T.height("auto")
            },
            _getPosition: function(e) {
                var t = r.current,
                    i = r.getViewport(),
                    n = t.margin,
                    a = r.wrap.width() + n[1] + n[3],
                    s = r.wrap.height() + n[0] + n[2],
                    o = {
                        position: "absolute",
                        top: n[0],
                        left: n[3]
                    };
                return t.autoCenter && t.fixed && !e && s <= i.h && a <= i.w ? o.position = "fixed" : t.locked || (o.top += i.y, o.left += i.x), o.top = g(Math.max(o.top, o.top + (i.h - s) * t.topRatio)), o.left = g(Math.max(o.left, o.left + (i.w - a) * t.leftRatio)), o
            },
            _afterZoomIn: function() {
                var e = r.current;
                e && (r.isOpen = r.isOpened = !0, r.wrap.css("overflow", "visible").addClass("fancybox-opened"), r.update(), (e.closeClick || e.nextClick && r.group.length > 1) && r.inner.css("cursor", "pointer").bind("click.fb", function(t) {
                    i(t.target).is("a") || i(t.target).parent().is("a") || (t.preventDefault(), r[e.closeClick ? "close" : "next"]())
                }), e.closeBtn && i(e.tpl.closeBtn).appendTo(r.skin).bind("click.fb", function(e) {
                    e.preventDefault(), r.close()
                }), e.arrows && r.group.length > 1 && ((e.loop || e.index > 0) && i(e.tpl.prev).appendTo(r.outer).bind("click.fb", r.prev), (e.loop || e.index < r.group.length - 1) && i(e.tpl.next).appendTo(r.outer).bind("click.fb", r.next)), r.trigger("afterShow"), e.loop || e.index !== e.group.length - 1 ? r.opts.autoPlay && !r.player.isActive && (r.opts.autoPlay = !1, r.play()) : r.play(!1))
            },
            _afterZoomOut: function(e) {
                e = e || r.current, i(".fancybox-wrap").trigger("onReset").remove(), i.extend(r, {
                    group: {},
                    opts: {},
                    router: !1,
                    current: null,
                    isActive: !1,
                    isOpened: !1,
                    isOpen: !1,
                    isClosing: !1,
                    wrap: null,
                    skin: null,
                    outer: null,
                    inner: null
                }), r.trigger("afterClose", e)
            }
        }), r.transitions = {
            getOrigPosition: function() {
                var e = r.current,
                    t = e.element,
                    i = e.orig,
                    n = {},
                    a = 50,
                    s = 50,
                    o = e.hPadding,
                    l = e.wPadding,
                    d = r.getViewport();
                return !i && e.isDom && t.is(":visible") && (i = t.find("img:first"), i.length || (i = t)), p(i) ? (n = i.offset(), i.is("img") && (a = i.outerWidth(), s = i.outerHeight())) : (n.top = d.y + (d.h - s) * e.topRatio, n.left = d.x + (d.w - a) * e.leftRatio), ("fixed" === r.wrap.css("position") || e.locked) && (n.top -= d.y, n.left -= d.x), n = {
                    top: g(n.top - o * e.topRatio),
                    left: g(n.left - l * e.leftRatio),
                    width: g(a + l),
                    height: g(s + o)
                }
            },
            step: function(e, t) {
                var i, n, a, s = t.prop,
                    o = r.current,
                    l = o.wrapSpace,
                    d = o.skinSpace;
                ("width" === s || "height" === s) && (i = t.end === t.start ? 1 : (e - t.start) / (t.end - t.start), r.isClosing && (i = 1 - i), n = "width" === s ? o.wPadding : o.hPadding, a = e - n, r.skin[s](m("width" === s ? a : a - l * i)), r.inner[s](m("width" === s ? a : a - l * i - d * i)))
            },
            zoomIn: function() {
                var e = r.current,
                    t = e.pos,
                    n = e.openEffect,
                    a = "elastic" === n,
                    s = i.extend({
                        opacity: 1
                    }, t);
                delete s.position, a ? (t = this.getOrigPosition(), e.openOpacity && (t.opacity = .1)) : "fade" === n && (t.opacity = .1), r.wrap.css(t).animate(s, {
                    duration: "none" === n ? 0 : e.openSpeed,
                    easing: e.openEasing,
                    step: a ? this.step : null,
                    complete: r._afterZoomIn
                })
            },
            zoomOut: function() {
                var e = r.current,
                    t = e.closeEffect,
                    i = "elastic" === t,
                    n = {
                        opacity: .1
                    };
                i && (n = this.getOrigPosition(), e.closeOpacity && (n.opacity = .1)), r.wrap.animate(n, {
                    duration: "none" === t ? 0 : e.closeSpeed,
                    easing: e.closeEasing,
                    step: i ? this.step : null,
                    complete: r._afterZoomOut
                })
            },
            changeIn: function() {
                var e, t = r.current,
                    i = t.nextEffect,
                    n = t.pos,
                    a = {
                        opacity: 1
                    },
                    s = r.direction,
                    o = 200;
                n.opacity = .1, "elastic" === i && (e = "down" === s || "up" === s ? "top" : "left", "down" === s || "right" === s ? (n[e] = g(m(n[e]) - o), a[e] = "+=" + o + "px") : (n[e] = g(m(n[e]) + o), a[e] = "-=" + o + "px")), "none" === i ? r._afterZoomIn() : r.wrap.css(n).animate(a, {
                    duration: t.nextSpeed,
                    easing: t.nextEasing,
                    complete: r._afterZoomIn
                })
            },
            changeOut: function() {
                var e = r.previous,
                    t = e.prevEffect,
                    n = {
                        opacity: .1
                    },
                    a = r.direction,
                    s = 200;
                "elastic" === t && (n["down" === a || "up" === a ? "top" : "left"] = ("up" === a || "left" === a ? "-" : "+") + "=" + s + "px"), e.wrap.animate(n, {
                    duration: "none" === t ? 0 : e.prevSpeed,
                    easing: e.prevEasing,
                    complete: function() {
                        i(this).trigger("onReset").remove()
                    }
                })
            }
        }, r.helpers.overlay = {
            defaults: {
                closeClick: !0,
                speedOut: 200,
                showEarly: !0,
                css: {},
                locked: !c,
                fixed: !0
            },
            overlay: null,
            fixed: !1,
            el: i("html"),
            create: function(e) {
                e = i.extend({}, this.defaults, e), this.overlay && this.close(), this.overlay = i('<div class="fancybox-overlay"></div>').appendTo(r.coming ? r.coming.parent : e.parent), this.fixed = !1, e.fixed && r.defaults.fixed && (this.overlay.addClass("fancybox-overlay-fixed"), this.fixed = !0)
            },
            open: function(e) {
                var t = this;
                e = i.extend({}, this.defaults, e), this.overlay ? this.overlay.unbind(".overlay").width("auto").height("auto") : this.create(e), this.fixed || (s.bind("resize.overlay", i.proxy(this.update, this)), this.update()), e.closeClick && this.overlay.bind("click.overlay", function(e) {
                    return i(e.target).hasClass("fancybox-overlay") ? (r.isActive ? r.close() : t.close(), !1) : void 0
                }), this.overlay.css(e.css).show()
            },
            close: function() {
                var e, t;
                s.unbind("resize.overlay"), this.el.hasClass("fancybox-lock") && (i(".fancybox-margin").removeClass("fancybox-margin"), e = s.scrollTop(), t = s.scrollLeft(), this.el.removeClass("fancybox-lock"), s.scrollTop(e).scrollLeft(t)), i(".fancybox-overlay").remove().hide(), i.extend(this, {
                    overlay: null,
                    fixed: !1
                })
            },
            update: function() {
                var e, i = "100%";
                this.overlay.width(i).height("100%"), l ? (e = Math.max(t.documentElement.offsetWidth, t.body.offsetWidth), o.width() > e && (i = o.width())) : o.width() > s.width() && (i = o.width()), this.overlay.width(i).height(o.height())
            },
            onReady: function(e, t) {
                var n = this.overlay;
                i(".fancybox-overlay").stop(!0, !0), n || this.create(e), e.locked && this.fixed && t.fixed && (n || (this.margin = o.height() > s.height() ? i("html").css("margin-right").replace("px", "") : !1), t.locked = this.overlay.append(t.wrap), t.fixed = !1), e.showEarly === !0 && this.beforeShow.apply(this, arguments)
            },
            beforeShow: function(e, t) {
                var n, a;
                t.locked && (this.margin !== !1 && (i("*").filter(function() {
                    return "fixed" === i(this).css("position") && !i(this).hasClass("fancybox-overlay") && !i(this).hasClass("fancybox-wrap")
                }).addClass("fancybox-margin"), this.el.addClass("fancybox-margin")), n = s.scrollTop(), a = s.scrollLeft(), this.el.addClass("fancybox-lock"), s.scrollTop(n).scrollLeft(a)), this.open(e)
            },
            onUpdate: function() {
                this.fixed || this.update()
            },
            afterClose: function(e) {
                this.overlay && !r.coming && this.overlay.fadeOut(e.speedOut, i.proxy(this.close, this))
            }
        }, r.helpers.title = {
            defaults: {
                type: "float",
                position: "bottom"
            },
            beforeShow: function(e) {
                var t, n, a = r.current,
                    s = a.title,
                    o = e.type;
                if (i.isFunction(s) && (s = s.call(a.element, a)), u(s) && "" !== i.trim(s)) {
                    switch (t = i('<div class="fancybox-title fancybox-title-' + o + '-wrap">' + s + "</div>"), o) {
                        case "inside":
                            n = r.skin;
                            break;
                        case "outside":
                            n = r.wrap;
                            break;
                        case "over":
                            n = r.inner;
                            break;
                        default:
                            n = r.skin, t.appendTo("body"), l && t.width(t.width()), t.wrapInner('<span class="child"></span>'), r.current.margin[2] += Math.abs(m(t.css("margin-bottom")))
                    }
                    t["top" === e.position ? "prependTo" : "appendTo"](n)
                }
            }
        }, i.fn.fancybox = function(e) {
            var t, n = i(this),
                a = this.selector || "",
                s = function(s) {
                    var o, l, d = i(this).blur(),
                        c = t;
                    s.ctrlKey || s.altKey || s.shiftKey || s.metaKey || d.is(".fancybox-wrap") || (o = e.groupAttr || "data-fancybox-group", l = d.attr(o), l || (o = "rel", l = d.get(0)[o]), l && "" !== l && "nofollow" !== l && (d = a.length ? i(a) : n, d = d.filter("[" + o + '="' + l + '"]'), c = d.index(this)), e.index = c, r.open(d, e) !== !1 && s.preventDefault())
                };
            return e = e || {}, t = e.index || 0, a && e.live !== !1 ? o.undelegate(a, "click.fb-start").delegate(a + ":not('.fancybox-item, .fancybox-nav')", "click.fb-start", s) : n.unbind("click.fb-start").bind("click.fb-start", s), this.filter("[data-fancybox-start=1]").trigger("click"), this
        }, o.ready(function() {
            var t, s;
            i.scrollbarWidth === n && (i.scrollbarWidth = function() {
                var e = i('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo("body"),
                    t = e.children(),
                    n = t.innerWidth() - t.height(99).innerWidth();
                return e.remove(), n
            }), i.support.fixedPosition === n && (i.support.fixedPosition = function() {
                var e = i('<div style="position:fixed;top:20px;"></div>').appendTo("body"),
                    t = 20 === e[0].offsetTop || 15 === e[0].offsetTop;
                return e.remove(), t
            }()), i.extend(r.defaults, {
                scrollbarWidth: i.scrollbarWidth(),
                fixed: i.support.fixedPosition,
                parent: i("body")
            }), t = i(e).width(), a.addClass("fancybox-lock-test"), s = i(e).width(), a.removeClass("fancybox-lock-test"), i("<style type='text/css'>.fancybox-margin{margin-right:" + (s - t) + "px;}</style>").appendTo("head")
        })
    }(window, document, jQuery), define("fancybox", function() {}), function(e) {
        var t = {
                "short": ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"],
                "long": ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"]
            },
            i = new Date,
            n = i.getFullYear();
        i.getMonth() + 1, i.getDate();
        e.fn.birthdaypicker = function(i) {
            var a = {
                maxAge: 120,
                minAge: 0,
                futureDates: !1,
                maxYear: n,
                dateFormat: "middleEndian",
                monthFormat: "short",
                placeholder: !0,
                legend: "",
                defaultDate: !1,
                fieldName: "birthdate",
                fieldId: "birthdate",
                hiddenDate: !0,
                onChange: null,
                tabindex: null
            };
            return this.each(function() {
                i && e.extend(a, i);
                var s = e("<fieldset class='birthday-picker'></fieldset>"),
                    o = e("<select class='birth-year form-control' name='birth[year]'></select>"),
                    r = e("<select class='birth-month form-control' name='birth[month]'></select>"),
                    l = e("<select class='birth-day form-control' name='birth[day]'></select>");
                a.legend && e("<legend>" + a.legend + "</legend>").appendTo(s);
                var d = a.tabindex;
                "bigEndian" == a.dateFormat ? (s.append(o).append(r).append(l), null != d && (o.attr("tabindex", d), r.attr("tabindex", d++), l.attr("tabindex", d++))) : "littleEndian" == a.dateFormat ? (s.append(l).append(r).append(o), null != d && (l.attr("tabindex", d), r.attr("tabindex", d++), o.attr("tabindex", d++))) : (s.append(r).append(l).append(o), null != d && (r.attr("tabindex", d), l.attr("tabindex", d++), o.attr("tabindex", d++))), a.placeholder && (e("<option value='0'>NÄƒm</option>").appendTo(o), e("<option value='0'>ThÃ¡ng</option>").appendTo(r), e("<option value='0'>NgÃ y</option>").appendTo(l));
                var c;
                if (a.defaultDate) {
                    var p = new Date(a.defaultDate + "T00:00:00"),
                        u = p.getFullYear(),
                        f = p.getMonth() + 1,
                        h = p.getDate();
                    10 > f && (f = "0" + f), 10 > h && (h = "0" + h), c = u + "-" + f + "-" + h
                }
                a.hiddenDate && (null != c ? e("<input type='hidden' name='" + a.fieldName + "'/>").attr("id", a.fieldId).val(c).appendTo(s) : e("<input type='hidden' name='" + a.fieldName + "'/>").attr("id", a.fieldId).appendTo(s));
                var m = n - a.minAge,
                    g = n - a.maxAge;
                a.futureDates && a.maxYear != n && (m = a.maxYear > 1e3 ? a.maxYear : n + a.maxYear);
                for (var v = m; v >= g; v--) e("<option></option>").attr("value", v).text(v).appendTo(o);
                for (var b = 0; 12 > b; b++) e("<option></option>").attr("value", b + 1).text(t[a.monthFormat][b]).appendTo(r);
                for (var y = 1; 32 > y; y++) e("<option></option>").attr("value", y).text(y).appendTo(l);
                if (e(this).append(s), a.defaultDate) {
                    var w = new Date(a.defaultDate + "T00:00:00");
                    o.find("option").removeAttr("selected"), o.find("option[value='" + w.getFullYear() + "']").attr("selected", !0), r.find("option").removeAttr("selected"), r.find("option[value='" + (w.getMonth() + 1) + "']").attr("selected", !0), l.find("option").removeAttr("selected"), l.find("option[value='" + w.getDate() + "']").attr("selected", !0)
                }
                s.change(function() {
                    var i = new Date,
                        n = (i.getFullYear(), i.getMonth() + 1),
                        s = i.getDate(),
                        d = parseInt(o.val(), 10),
                        p = parseInt(r.val(), 10),
                        u = parseInt(l.val(), 10),
                        f = new Date(d, p, 0).getDate(),
                        h = parseInt(r.children(":last").val()),
                        g = parseInt(l.children(":last").val());
                    if (g > f)
                        for (; g > f;) l.children(":last").remove(), g--;
                    else if (f > g)
                        for (; f > g;) g++, l.append("<option value=" + g + ">" + g + "</option>");
                    if (!a.futureDates && d == m) {
                        if (h > n) {
                            for (; h > n;) r.children(":last").remove(), h--;
                            l.children(":first").attr("selected", "selected")
                        }
                        if (p === n)
                            for (; g > s;) l.children(":last").remove(), g -= 1
                    }
                    if (d != m && 12 != h)
                        for (; 12 > h;) r.append("<option value=" + (h + 1) + ">" + t[a.monthFormat][h] + "</option>"), h++;
                    d * p * u != 0 && (10 > p && (p = "0" + p), 10 > u && (u = "0" + u), c = d + "-" + p + "-" + u, e(this).find("#" + a.fieldId).val(c), null != a.onChange && a.onChange(c))
                })
            })
        }
    }(jQuery), define("bday_picker", function() {}), function() {
        var e = [].slice;
        ! function(t, i) {
            "use strict";
            var n;
            return n = function() {
                function e(e, i) {
                    null == i && (i = {}), this.$element = t(e), this.options = t.extend({}, t.fn.bootstrapSwitch.defaults, {
                        state: this.$element.is(":checked"),
                        size: this.$element.data("size"),
                        animate: this.$element.data("animate"),
                        disabled: this.$element.is(":disabled"),
                        readonly: this.$element.is("[readonly]"),
                        indeterminate: this.$element.data("indeterminate"),
                        onColor: this.$element.data("on-color"),
                        offColor: this.$element.data("off-color"),
                        onText: this.$element.data("on-text"),
                        offText: this.$element.data("off-text"),
                        labelText: this.$element.data("label-text"),
                        baseClass: this.$element.data("base-class"),
                        wrapperClass: this.$element.data("wrapper-class"),
                        radioAllOff: this.$element.data("radio-all-off")
                    }, i), this.$wrapper = t("<div>", {
                        "class": function(e) {
                            return function() {
                                var t;
                                return t = ["" + e.options.baseClass].concat(e._getClasses(e.options.wrapperClass)), t.push(e.options.state ? "" + e.options.baseClass + "-on" : "" + e.options.baseClass + "-off"), null != e.options.size && t.push("" + e.options.baseClass + "-" + e.options.size), e.options.animate && t.push("" + e.options.baseClass + "-animate"), e.options.disabled && t.push("" + e.options.baseClass + "-disabled"), e.options.readonly && t.push("" + e.options.baseClass + "-readonly"), e.options.indeterminate && t.push("" + e.options.baseClass + "-indeterminate"), e.$element.attr("id") && t.push("" + e.options.baseClass + "-id-" + e.$element.attr("id")), t.join(" ");
                            }
                        }(this)()
                    }), this.$container = t("<div>", {
                        "class": "" + this.options.baseClass + "-container"
                    }), this.$on = t("<span>", {
                        html: this.options.onText,
                        "class": "" + this.options.baseClass + "-handle-on " + this.options.baseClass + "-" + this.options.onColor
                    }), this.$off = t("<span>", {
                        html: this.options.offText,
                        "class": "" + this.options.baseClass + "-handle-off " + this.options.baseClass + "-" + this.options.offColor
                    }), this.$label = t("<label>", {
                        html: this.options.labelText,
                        "class": "" + this.options.baseClass + "-label"
                    }), this.options.indeterminate && this.$element.prop("indeterminate", !0), this.$element.on("init.bootstrapSwitch", function(t) {
                        return function() {
                            return t.options.onInit.apply(e, arguments)
                        }
                    }(this)), this.$element.on("switchChange.bootstrapSwitch", function(t) {
                        return function() {
                            return t.options.onSwitchChange.apply(e, arguments)
                        }
                    }(this)), this.$container = this.$element.wrap(this.$container).parent(), this.$wrapper = this.$container.wrap(this.$wrapper).parent(), this.$element.before(this.$on).before(this.$label).before(this.$off).trigger("init.bootstrapSwitch"), this._elementHandlers(), this._handleHandlers(), this._labelHandlers(), this._formHandler()
                }
                return e.prototype._constructor = e, e.prototype.state = function(e, t) {
                    return "undefined" == typeof e ? this.options.state : this.options.disabled || this.options.readonly || this.options.indeterminate ? this.$element : this.options.state && !this.options.radioAllOff && this.$element.is(":radio") ? this.$element : (e = !!e, this.$element.prop("checked", e).trigger("change.bootstrapSwitch", t), this.$element)
                }, e.prototype.toggleState = function(e) {
                    return this.options.disabled || this.options.readonly || this.options.indeterminate ? this.$element : this.$element.prop("checked", !this.options.state).trigger("change.bootstrapSwitch", e)
                }, e.prototype.size = function(e) {
                    return "undefined" == typeof e ? this.options.size : (null != this.options.size && this.$wrapper.removeClass("" + this.options.baseClass + "-" + this.options.size), e && this.$wrapper.addClass("" + this.options.baseClass + "-" + e), this.options.size = e, this.$element)
                }, e.prototype.animate = function(e) {
                    return "undefined" == typeof e ? this.options.animate : (e = !!e, this.$wrapper[e ? "addClass" : "removeClass"]("" + this.options.baseClass + "-animate"), this.options.animate = e, this.$element)
                }, e.prototype.disabled = function(e) {
                    return "undefined" == typeof e ? this.options.disabled : (e = !!e, this.$wrapper[e ? "addClass" : "removeClass"]("" + this.options.baseClass + "-disabled"), this.$element.prop("disabled", e), this.options.disabled = e, this.$element)
                }, e.prototype.toggleDisabled = function() {
                    return this.$element.prop("disabled", !this.options.disabled), this.$wrapper.toggleClass("" + this.options.baseClass + "-disabled"), this.options.disabled = !this.options.disabled, this.$element
                }, e.prototype.readonly = function(e) {
                    return "undefined" == typeof e ? this.options.readonly : (e = !!e, this.$wrapper[e ? "addClass" : "removeClass"]("" + this.options.baseClass + "-readonly"), this.$element.prop("readonly", e), this.options.readonly = e, this.$element)
                }, e.prototype.toggleReadonly = function() {
                    return this.$element.prop("readonly", !this.options.readonly), this.$wrapper.toggleClass("" + this.options.baseClass + "-readonly"), this.options.readonly = !this.options.readonly, this.$element
                }, e.prototype.indeterminate = function(e) {
                    return "undefined" == typeof e ? this.options.indeterminate : (e = !!e, this.$wrapper[e ? "addClass" : "removeClass"]("" + this.options.baseClass + "-indeterminate"), this.$element.prop("indeterminate", e), this.options.indeterminate = e, this.$element)
                }, e.prototype.toggleIndeterminate = function() {
                    return this.$element.prop("indeterminate", !this.options.indeterminate), this.$wrapper.toggleClass("" + this.options.baseClass + "-indeterminate"), this.options.indeterminate = !this.options.indeterminate, this.$element
                }, e.prototype.onColor = function(e) {
                    var t;
                    return t = this.options.onColor, "undefined" == typeof e ? t : (null != t && this.$on.removeClass("" + this.options.baseClass + "-" + t), this.$on.addClass("" + this.options.baseClass + "-" + e), this.options.onColor = e, this.$element)
                }, e.prototype.offColor = function(e) {
                    var t;
                    return t = this.options.offColor, "undefined" == typeof e ? t : (null != t && this.$off.removeClass("" + this.options.baseClass + "-" + t), this.$off.addClass("" + this.options.baseClass + "-" + e), this.options.offColor = e, this.$element)
                }, e.prototype.onText = function(e) {
                    return "undefined" == typeof e ? this.options.onText : (this.$on.html(e), this.options.onText = e, this.$element)
                }, e.prototype.offText = function(e) {
                    return "undefined" == typeof e ? this.options.offText : (this.$off.html(e), this.options.offText = e, this.$element)
                }, e.prototype.labelText = function(e) {
                    return "undefined" == typeof e ? this.options.labelText : (this.$label.html(e), this.options.labelText = e, this.$element)
                }, e.prototype.baseClass = function(e) {
                    return this.options.baseClass
                }, e.prototype.wrapperClass = function(e) {
                    return "undefined" == typeof e ? this.options.wrapperClass : (e || (e = t.fn.bootstrapSwitch.defaults.wrapperClass), this.$wrapper.removeClass(this._getClasses(this.options.wrapperClass).join(" ")), this.$wrapper.addClass(this._getClasses(e).join(" ")), this.options.wrapperClass = e, this.$element)
                }, e.prototype.radioAllOff = function(e) {
                    return "undefined" == typeof e ? this.options.radioAllOff : (this.options.radioAllOff = e, this.$element)
                }, e.prototype.onInit = function(e) {
                    return "undefined" == typeof e ? this.options.onInit : (e || (e = t.fn.bootstrapSwitch.defaults.onInit), this.options.onInit = e, this.$element)
                }, e.prototype.onSwitchChange = function(e) {
                    return "undefined" == typeof e ? this.options.onSwitchChange : (e || (e = t.fn.bootstrapSwitch.defaults.onSwitchChange), this.options.onSwitchChange = e, this.$element)
                }, e.prototype.destroy = function() {
                    var e;
                    return e = this.$element.closest("form"), e.length && e.off("reset.bootstrapSwitch").removeData("bootstrap-switch"), this.$container.children().not(this.$element).remove(), this.$element.unwrap().unwrap().off(".bootstrapSwitch").removeData("bootstrap-switch"), this.$element
                }, e.prototype._elementHandlers = function() {
                    return this.$element.on({
                        "change.bootstrapSwitch": function(e) {
                            return function(i, n) {
                                var a;
                                return i.preventDefault(), i.stopImmediatePropagation(), a = e.$element.is(":checked"), a !== e.options.state ? (e.options.state = a, e.$wrapper.removeClass(a ? "" + e.options.baseClass + "-off" : "" + e.options.baseClass + "-on").addClass(a ? "" + e.options.baseClass + "-on" : "" + e.options.baseClass + "-off"), n ? void 0 : (e.$element.is(":radio") && t("[name='" + e.$element.attr("name") + "']").not(e.$element).prop("checked", !1).trigger("change.bootstrapSwitch", !0), e.$element.trigger("switchChange.bootstrapSwitch", [a]))) : void 0
                            }
                        }(this),
                        "focus.bootstrapSwitch": function(e) {
                            return function(t) {
                                return t.preventDefault(), e.$wrapper.addClass("" + e.options.baseClass + "-focused")
                            }
                        }(this),
                        "blur.bootstrapSwitch": function(e) {
                            return function(t) {
                                return t.preventDefault(), e.$wrapper.removeClass("" + e.options.baseClass + "-focused")
                            }
                        }(this),
                        "keydown.bootstrapSwitch": function(e) {
                            return function(t) {
                                if (t.which && !e.options.disabled && !e.options.readonly && !e.options.indeterminate) switch (t.which) {
                                    case 37:
                                        return t.preventDefault(), t.stopImmediatePropagation(), e.state(!1);
                                    case 39:
                                        return t.preventDefault(), t.stopImmediatePropagation(), e.state(!0)
                                }
                            }
                        }(this)
                    })
                }, e.prototype._handleHandlers = function() {
                    return this.$on.on("click.bootstrapSwitch", function(e) {
                        return function(t) {
                            return e.state(!1), e.$element.trigger("focus.bootstrapSwitch")
                        }
                    }(this)), this.$off.on("click.bootstrapSwitch", function(e) {
                        return function(t) {
                            return e.state(!0), e.$element.trigger("focus.bootstrapSwitch")
                        }
                    }(this))
                }, e.prototype._labelHandlers = function() {
                    return this.$label.on({
                        "mousemove.bootstrapSwitch touchmove.bootstrapSwitch": function(e) {
                            return function(t) {
                                var i, n, a, s;
                                if (e.isLabelDragging) return t.preventDefault(), e.isLabelDragged = !0, n = t.pageX || t.originalEvent.touches[0].pageX, a = (n - e.$wrapper.offset().left) / e.$wrapper.width() * 100, i = 25, s = 75, e.options.animate && e.$wrapper.removeClass("" + e.options.baseClass + "-animate"), i > a ? a = i : a > s && (a = s), e.$container.css("margin-left", "" + (a - s) + "%"), e.$element.trigger("focus.bootstrapSwitch")
                            }
                        }(this),
                        "mousedown.bootstrapSwitch touchstart.bootstrapSwitch": function(e) {
                            return function(t) {
                                return e.isLabelDragging || e.options.disabled || e.options.readonly || e.options.indeterminate ? void 0 : (t.preventDefault(), e.isLabelDragging = !0, e.$element.trigger("focus.bootstrapSwitch"))
                            }
                        }(this),
                        "mouseup.bootstrapSwitch touchend.bootstrapSwitch": function(e) {
                            return function(t) {
                                return e.isLabelDragging ? (t.preventDefault(), e.isLabelDragged ? (e.isLabelDragged = !1, e.state(parseInt(e.$container.css("margin-left"), 10) > -(e.$container.width() / 6)), e.options.animate && e.$wrapper.addClass("" + e.options.baseClass + "-animate"), e.$container.css("margin-left", "")) : e.state(!e.options.state), e.isLabelDragging = !1) : void 0
                            }
                        }(this),
                        "mouseleave.bootstrapSwitch": function(e) {
                            return function(t) {
                                return e.$label.trigger("mouseup.bootstrapSwitch")
                            }
                        }(this)
                    })
                }, e.prototype._formHandler = function() {
                    var e;
                    return e = this.$element.closest("form"), e.data("bootstrap-switch") ? void 0 : e.on("reset.bootstrapSwitch", function() {
                        return i.setTimeout(function() {
                            return e.find("input").filter(function() {
                                return t(this).data("bootstrap-switch")
                            }).each(function() {
                                return t(this).bootstrapSwitch("state", this.checked)
                            })
                        }, 1)
                    }).data("bootstrap-switch", !0)
                }, e.prototype._getClasses = function(e) {
                    var i, n, a, s;
                    if (!t.isArray(e)) return ["" + this.options.baseClass + "-" + e];
                    for (n = [], a = 0, s = e.length; s > a; a++) i = e[a], n.push("" + this.options.baseClass + "-" + i);
                    return n
                }, e
            }(), t.fn.bootstrapSwitch = function() {
                var i, a, s;
                return a = arguments[0], i = 2 <= arguments.length ? e.call(arguments, 1) : [], s = this, this.each(function() {
                    var e, o;
                    return e = t(this), o = e.data("bootstrap-switch"), o || e.data("bootstrap-switch", o = new n(this, a)), "string" == typeof a ? s = o[a].apply(o, i) : void 0
                }), s
            }, t.fn.bootstrapSwitch.Constructor = n, t.fn.bootstrapSwitch.defaults = {
                state: !0,
                size: null,
                animate: !0,
                disabled: !1,
                readonly: !1,
                indeterminate: !1,
                onColor: "primary",
                offColor: "default",
                onText: "ON",
                offText: "OFF",
                labelText: "&nbsp;",
                baseClass: "bootstrap-switch",
                wrapperClass: "wrapper",
                radioAllOff: !1,
                onInit: function() {},
                onSwitchChange: function() {}
            }
        }(window.jQuery, window)
    }.call(this), define("bootstrap_switch", function() {}), function(e) {
        function t(e, t, a) {
            var s = e[0],
                o = /er/.test(a) ? g : /bl/.test(a) ? h : u,
                r = a == v ? {
                    checked: s[u],
                    disabled: s[h],
                    indeterminate: "true" == e.attr(g) || "false" == e.attr(m)
                } : s[o];
            if (/^(ch|di|in)/.test(a) && !r) i(e, o);
            else if (/^(un|en|de)/.test(a) && r) n(e, o);
            else if (a == v)
                for (var l in r) r[l] ? i(e, l, !0) : n(e, l, !0);
            else t && "toggle" != a || (t || e[$]("ifClicked"), r ? s[b] !== p && n(e, o) : i(e, o))
        }

        function i(t, i, a) {
            var c = t[0],
                v = t.parent(),
                y = i == u,
                w = i == g,
                $ = i == h,
                S = w ? m : y ? f : "enabled",
                T = s(t, S + o(c[b])),
                C = s(t, i + o(c[b]));
            if (c[i] !== !0) {
                if (!a && i == u && c[b] == p && c.name) {
                    var I = t.closest("form"),
                        A = 'input[name="' + c.name + '"]';
                    A = I.length ? I.find(A) : e(A), A.each(function() {
                        this !== c && e(this).data(l) && n(e(this), i)
                    })
                }
                w ? (c[i] = !0, c[u] && n(t, u, "force")) : (a || (c[i] = !0), y && c[g] && n(t, g, !1)), r(t, y, i, a)
            }
            c[h] && s(t, k, !0) && v.find("." + d).css(k, "default"), v[x](C || s(t, i) || ""), v.attr("role") && !w && v.attr("aria-" + ($ ? h : u), "true"), v[Q](T || s(t, S) || "")
        }

        function n(e, t, i) {
            var n = e[0],
                a = e.parent(),
                l = t == u,
                c = t == g,
                p = t == h,
                v = c ? m : l ? f : "enabled",
                y = s(e, v + o(n[b])),
                w = s(e, t + o(n[b]));
            n[t] !== !1 && ((c || !i || "force" == i) && (n[t] = !1), r(e, l, v, i)), !n[h] && s(e, k, !0) && a.find("." + d).css(k, "pointer"), a[Q](w || s(e, t) || ""), a.attr("role") && !c && a.attr("aria-" + (p ? h : u), "false"), a[x](y || s(e, v) || "")
        }

        function a(t, i) {
            t.data(l) && (t.parent().html(t.attr("style", t.data(l).s || "")), i && t[$](i), t.off(".i").unwrap(), e(S + '[for="' + t[0].id + '"]').add(t.closest(S)).off(".i"))
        }

        function s(e, t, i) {
            return e.data(l) ? e.data(l).o[t + (i ? "" : "Class")] : void 0
        }

        function o(e) {
            return e.charAt(0).toUpperCase() + e.slice(1)
        }

        function r(e, t, i, n) {
            n || (t && e[$]("ifToggled"), e[$]("ifChanged")[$]("if" + o(i)))
        }
        var l = "iCheck",
            d = l + "-helper",
            c = "checkbox",
            p = "radio",
            u = "checked",
            f = "un" + u,
            h = "disabled",
            m = "determinate",
            g = "in" + m,
            v = "update",
            b = "type",
            y = "click",
            w = "touchbegin.i touchend.i",
            x = "addClass",
            Q = "removeClass",
            $ = "trigger",
            S = "label",
            k = "cursor",
            T = /ipad|iphone|ipod|android|blackberry|windows phone|opera mini|silk/i.test(navigator.userAgent);
        e.fn[l] = function(s, o) {
            var r = 'input[type="' + c + '"], input[type="' + p + '"]',
                f = e(),
                m = function(t) {
                    t.each(function() {
                        var t = e(this);
                        f = t.is(r) ? f.add(t) : f.add(t.find(r))
                    })
                };
            if (/^(check|uncheck|toggle|indeterminate|determinate|disable|enable|update|destroy)$/i.test(s)) return s = s.toLowerCase(), m(this), f.each(function() {
                var i = e(this);
                "destroy" == s ? a(i, "ifDestroyed") : t(i, !0, s), e.isFunction(o) && o()
            });
            if ("object" != typeof s && s) return this;
            var k = e.extend({
                    checkedClass: u,
                    disabledClass: h,
                    indeterminateClass: g,
                    labelHover: !0
                }, s),
                C = k.handle,
                I = k.hoverClass || "hover",
                A = k.focusClass || "focus",
                j = k.activeClass || "active",
                E = !!k.labelHover,
                _ = k.labelHoverClass || "hover",
                R = 0 | ("" + k.increaseArea).replace("%", "");
            return (C == c || C == p) && (r = 'input[type="' + C + '"]'), -50 > R && (R = -50), m(this), f.each(function() {
                var s = e(this);
                a(s);
                var o, r = this,
                    f = r.id,
                    m = -R + "%",
                    g = 100 + 2 * R + "%",
                    C = {
                        position: "absolute",
                        top: m,
                        left: m,
                        display: "block",
                        width: g,
                        height: g,
                        margin: 0,
                        padding: 0,
                        background: "#fff",
                        border: 0,
                        opacity: 0
                    },
                    P = T ? {
                        position: "absolute",
                        visibility: "hidden"
                    } : R ? C : {
                        position: "absolute",
                        opacity: 0
                    },
                    D = r[b] == c ? k.checkboxClass || "i" + c : k.radioClass || "i" + p,
                    V = e(S + '[for="' + f + '"]').add(s.closest(S)),
                    N = !!k.aria,
                    M = l + "-" + Math.random().toString(36).substr(2, 6),
                    O = '<div class="' + D + '" ' + (N ? 'role="' + r[b] + '" ' : "");
                N && V.each(function() {
                    O += 'aria-labelledby="', this.id ? O += this.id : (this.id = M, O += M), O += '"'
                }), O = s.wrap(O + "/>")[$]("ifCreated").parent().append(k.insert), o = e('<ins class="' + d + '"/>').css(C).appendTo(O), s.data(l, {
                    o: k,
                    s: s.attr("style")
                }).css(P), !!k.inheritClass && O[x](r.className || ""), !!k.inheritID && f && O.attr("id", l + "-" + f), "static" == O.css("position") && O.css("position", "relative"), t(s, !0, v), V.length && V.on(y + ".i mouseover.i mouseout.i " + w, function(i) {
                    var n = i[b],
                        a = e(this);
                    if (!r[h]) {
                        if (n == y) {
                            if (e(i.target).is("a")) return;
                            t(s, !1, !0)
                        } else E && (/ut|nd/.test(n) ? (O[Q](I), a[Q](_)) : (O[x](I), a[x](_)));
                        if (!T) return !1;
                        i.stopPropagation()
                    }
                }), s.on(y + ".i focus.i blur.i keyup.i keydown.i keypress.i", function(e) {
                    var t = e[b],
                        a = e.keyCode;
                    return t == y ? !1 : "keydown" == t && 32 == a ? (r[b] == p && r[u] || (r[u] ? n(s, u) : i(s, u)), !1) : void("keyup" == t && r[b] == p ? !r[u] && i(s, u) : /us|ur/.test(t) && O["blur" == t ? Q : x](A))
                }), o.on(y + " mousedown mouseup mouseover mouseout " + w, function(e) {
                    var i = e[b],
                        n = /wn|up/.test(i) ? j : I;
                    if (!r[h]) {
                        if (i == y ? t(s, !1, !0) : (/wn|er|in/.test(i) ? O[x](n) : O[Q](n + " " + j), V.length && E && n == I && V[/ut|nd/.test(i) ? Q : x](_)), !T) return !1;
                        e.stopPropagation()
                    }
                })
            })
        }
    }(window.jQuery || window.Zepto), define("icheck", function() {}), "undefined" == typeof jQuery) throw new Error("BootstrapValidator's JavaScript requires jQuery");
! function(e) {
    var t = function(t, i) {
        this.$form = e(t), this.options = e.extend({}, e.fn.bootstrapValidator.DEFAULT_OPTIONS, i), this.$invalidFields = e([]), this.$submitButton = null, this.$hiddenButton = null, this.STATUS_NOT_VALIDATED = "NOT_VALIDATED", this.STATUS_VALIDATING = "VALIDATING", this.STATUS_INVALID = "INVALID", this.STATUS_VALID = "VALID";
        var n = function() {
                for (var e = 3, t = document.createElement("div"), i = t.all || []; t.innerHTML = "<!--[if gt IE " + ++e + "]><br><![endif]-->", i[0];);
                return e > 4 ? e : !e
            }(),
            a = document.createElement("div");
        this._changeEvent = 9 !== n && "oninput" in a ? "input" : "keyup", this._submitIfValid = null, this._cacheFields = {}, this._init()
    };
    t.prototype = {
        constructor: t,
        _init: function() {
            var t = this,
                i = {
                    container: this.$form.attr("data-bv-container"),
                    events: {
                        formInit: this.$form.attr("data-bv-events-form-init"),
                        formError: this.$form.attr("data-bv-events-form-error"),
                        formSuccess: this.$form.attr("data-bv-events-form-success"),
                        fieldAdded: this.$form.attr("data-bv-events-field-added"),
                        fieldRemoved: this.$form.attr("data-bv-events-field-removed"),
                        fieldInit: this.$form.attr("data-bv-events-field-init"),
                        fieldError: this.$form.attr("data-bv-events-field-error"),
                        fieldSuccess: this.$form.attr("data-bv-events-field-success"),
                        fieldStatus: this.$form.attr("data-bv-events-field-status"),
                        validatorError: this.$form.attr("data-bv-events-validator-error"),
                        validatorSuccess: this.$form.attr("data-bv-events-validator-success")
                    },
                    excluded: this.$form.attr("data-bv-excluded"),
                    feedbackIcons: {
                        valid: this.$form.attr("data-bv-feedbackicons-valid"),
                        invalid: this.$form.attr("data-bv-feedbackicons-invalid"),
                        validating: this.$form.attr("data-bv-feedbackicons-validating")
                    },
                    group: this.$form.attr("data-bv-group"),
                    live: this.$form.attr("data-bv-live"),
                    message: this.$form.attr("data-bv-message"),
                    onError: this.$form.attr("data-bv-onerror"),
                    onSuccess: this.$form.attr("data-bv-onsuccess"),
                    submitButtons: this.$form.attr("data-bv-submitbuttons"),
                    threshold: this.$form.attr("data-bv-threshold"),
                    trigger: this.$form.attr("data-bv-trigger"),
                    verbose: this.$form.attr("data-bv-verbose"),
                    fields: {}
                };
            this.$form.attr("novalidate", "novalidate").addClass(this.options.elementClass).on("submit.bv", function(e) {
                e.preventDefault(), t.validate()
            }).on("click.bv", this.options.submitButtons, function() {
                t.$submitButton = e(this), t._submitIfValid = !0
            }).find("[name], [data-bv-field]").each(function() {
                var n = e(this),
                    a = n.attr("name") || n.attr("data-bv-field"),
                    s = t._parseOptions(n);
                s && (n.attr("data-bv-field", a), i.fields[a] = e.extend({}, s, i.fields[a]))
            }), this.options = e.extend(!0, this.options, i), this.$hiddenButton = e("<button/>").attr("type", "submit").prependTo(this.$form).addClass("bv-hidden-submit").css({
                display: "none",
                width: 0,
                height: 0
            }), this.$form.on("click.bv", '[type="submit"]', function(i) {
                if (!i.isDefaultPrevented()) {
                    var n = e(i.target).eq(0);
                    !t.options.submitButtons || n.is(t.options.submitButtons) || n.is(t.$hiddenButton) || t.$form.off("submit.bv").submit()
                }
            });
            for (var n in this.options.fields) this._initField(n);
            this.$form.trigger(e.Event(this.options.events.formInit), {
                bv: this,
                options: this.options
            }), this.options.onSuccess && this.$form.on(this.options.events.formSuccess, function(i) {
                e.fn.bootstrapValidator.helpers.call(t.options.onSuccess, [i])
            }), this.options.onError && this.$form.on(this.options.events.formError, function(i) {
                e.fn.bootstrapValidator.helpers.call(t.options.onError, [i])
            })
        },
        _parseOptions: function(t) {
            var i, n, a, s, o, r, l, d = t.attr("name") || t.attr("data-bv-field"),
                c = {};
            for (n in e.fn.bootstrapValidator.validators)
                if (i = e.fn.bootstrapValidator.validators[n], a = t.attr("data-bv-" + n.toLowerCase()) + "", l = "function" == typeof i.enableByHtml5 ? i.enableByHtml5(t) : null, l && "false" !== a || l !== !0 && ("" === a || "true" === a)) {
                    i.html5Attributes = e.extend({}, {
                        message: "message",
                        onerror: "onError",
                        onsuccess: "onSuccess"
                    }, i.html5Attributes), c[n] = e.extend({}, l === !0 ? {} : l, c[n]);
                    for (r in i.html5Attributes) s = i.html5Attributes[r], o = t.attr("data-bv-" + n.toLowerCase() + "-" + r), o && ("true" === o ? o = !0 : "false" === o && (o = !1), c[n][s] = o)
                }
            var p = {
                    container: t.attr("data-bv-container"),
                    excluded: t.attr("data-bv-excluded"),
                    feedbackIcons: t.attr("data-bv-feedbackicons"),
                    group: t.attr("data-bv-group"),
                    message: t.attr("data-bv-message"),
                    onError: t.attr("data-bv-onerror"),
                    onStatus: t.attr("data-bv-onstatus"),
                    onSuccess: t.attr("data-bv-onsuccess"),
                    selector: t.attr("data-bv-selector"),
                    threshold: t.attr("data-bv-threshold"),
                    trigger: t.attr("data-bv-trigger"),
                    verbose: t.attr("data-bv-verbose"),
                    validators: c
                },
                u = e.isEmptyObject(p),
                f = e.isEmptyObject(c);
            return !f || !u && this.options.fields && this.options.fields[d] ? (p.validators = c, p) : null
        },
        _initField: function(t) {
            var i = e([]);
            switch (typeof t) {
                case "object":
                    i = t, t = t.attr("data-bv-field");
                    break;
                case "string":
                    i = this.getFieldElements(t), i.attr("data-bv-field", t)
            }
            if (0 !== i.length && null !== this.options.fields[t] && null !== this.options.fields[t].validators) {
                var n;
                for (n in this.options.fields[t].validators) e.fn.bootstrapValidator.validators[n] || delete this.options.fields[t].validators[n];
                null === this.options.fields[t].enabled && (this.options.fields[t].enabled = !0);
                for (var a = this, s = i.length, o = i.attr("type"), r = 1 === s || "radio" === o || "checkbox" === o, l = "radio" === o || "checkbox" === o || "file" === o || "SELECT" === i.eq(0).get(0).tagName ? "change" : this._changeEvent, d = (this.options.fields[t].trigger || this.options.trigger || l).split(" "), c = e.map(d, function(e) {
                        return e + ".update.bv"
                    }).join(" "), p = 0; s > p; p++) {
                    var u = i.eq(p),
                        f = this.options.fields[t].group || this.options.group,
                        h = u.parents(f),
                        m = "function" == typeof(this.options.fields[t].container || this.options.container) ? (this.options.fields[t].container || this.options.container).call(this, u, this) : this.options.fields[t].container || this.options.container,
                        g = m && "tooltip" !== m && "popover" !== m ? e(m) : this._getMessageContainer(u, f);
                    m && "tooltip" !== m && "popover" !== m && g.addClass("has-error"), g.find('.help-block[data-bv-validator][data-bv-for="' + t + '"]').remove(), h.find('i[data-bv-icon-for="' + t + '"]').remove(), u.off(c).on(c, function() {
                        a.updateStatus(e(this), a.STATUS_NOT_VALIDATED)
                    }), u.data("bv.messages", g);
                    for (n in this.options.fields[t].validators) u.data("bv.result." + n, this.STATUS_NOT_VALIDATED), r && p !== s - 1 || e("<small/>").css("display", "none").addClass("help-block").attr("data-bv-validator", n).attr("data-bv-for", t).attr("data-bv-result", this.STATUS_NOT_VALIDATED).html(this._getMessage(t, n)).appendTo(g), "function" == typeof e.fn.bootstrapValidator.validators[n].init && e.fn.bootstrapValidator.validators[n].init(this, u, this.options.fields[t].validators[n]);
                    if (this.options.fields[t].feedbackIcons !== !1 && "false" !== this.options.fields[t].feedbackIcons && this.options.feedbackIcons && this.options.feedbackIcons.validating && this.options.feedbackIcons.invalid && this.options.feedbackIcons.valid && (!r || p === s - 1)) {
                        h.addClass("has-feedback");
                        var v = e("<i/>").css("display", "none").addClass("form-control-feedback").attr("data-bv-icon-for", t).insertAfter(u);
                        if ("checkbox" === o || "radio" === o) {
                            var b = u.parent();
                            b.hasClass(o) ? v.insertAfter(b) : b.parent().hasClass(o) && v.insertAfter(b.parent())
                        }
                        0 === h.find("label").length && v.addClass("bv-no-label"), 0 !== h.find(".input-group").length && v.addClass("bv-icon-input-group").insertAfter(h.find(".input-group").eq(0)), m && u.off("focus.bv").on("focus.bv", function() {
                            switch (m) {
                                case "tooltip":
                                    v.tooltip("show");
                                    break;
                                case "popover":
                                    v.popover("show")
                            }
                        }).off("blur.bv").on("blur.bv", function() {
                            switch (m) {
                                case "tooltip":
                                    v.tooltip("hide");
                                    break;
                                case "popover":
                                    v.popover("hide")
                            }
                        })
                    }
                }
                switch (i.on(this.options.events.fieldSuccess, function(t, i) {
                    var n = a.getOptions(i.field, null, "onSuccess");
                    n && e.fn.bootstrapValidator.helpers.call(n, [t, i])
                }).on(this.options.events.fieldError, function(t, i) {
                    var n = a.getOptions(i.field, null, "onError");
                    n && e.fn.bootstrapValidator.helpers.call(n, [t, i])
                }).on(this.options.events.fieldStatus, function(t, i) {
                    var n = a.getOptions(i.field, null, "onStatus");
                    n && e.fn.bootstrapValidator.helpers.call(n, [t, i])
                }).on(this.options.events.validatorError, function(t, i) {
                    var n = a.getOptions(i.field, i.validator, "onError");
                    n && e.fn.bootstrapValidator.helpers.call(n, [t, i])
                }).on(this.options.events.validatorSuccess, function(t, i) {
                    var n = a.getOptions(i.field, i.validator, "onSuccess");
                    n && e.fn.bootstrapValidator.helpers.call(n, [t, i])
                }), c = e.map(d, function(e) {
                    return e + ".live.bv"
                }).join(" "), this.options.live) {
                    case "submitted":
                        break;
                    case "disabled":
                        i.off(c);
                        break;
                    case "enabled":
                    default:
                        i.off(c).on(c, function() {
                            a._exceedThreshold(e(this)) && a.validateField(e(this))
                        })
                }
                i.trigger(e.Event(this.options.events.fieldInit), {
                    bv: this,
                    field: t,
                    element: i
                })
            }
        },
        _getMessage: function(t, i) {
            if (!(this.options.fields[t] && e.fn.bootstrapValidator.validators[i] && this.options.fields[t].validators && this.options.fields[t].validators[i])) return "";
            var n = this.options.fields[t].validators[i];
            switch (!0) {
                case !!n.message:
                    return n.message;
                case !!this.options.fields[t].message:
                    return this.options.fields[t].message;
                case !!e.fn.bootstrapValidator.i18n[i]:
                    return e.fn.bootstrapValidator.i18n[i]["default"];
                default:
                    return this.options.message
            }
        },
        _getMessageContainer: function(e, t) {
            var i = e.parent();
            if (i.is(t)) return i;
            var n = i.attr("class");
            if (!n) return this._getMessageContainer(i, t);
            n = n.split(" ");
            for (var a = n.length, s = 0; a > s; s++)
                if (/^col-(xs|sm|md|lg)-\d+$/.test(n[s]) || /^col-(xs|sm|md|lg)-offset-\d+$/.test(n[s])) return i;
            return this._getMessageContainer(i, t)
        },
        _submit: function() {
            var t = this.isValid(),
                i = t ? this.options.events.formSuccess : this.options.events.formError,
                n = e.Event(i);
            this.$form.trigger(n), this.$submitButton && (t ? this._onSuccess(n) : this._onError(n))
        },
        _isExcluded: function(t) {
            var i = t.attr("data-bv-excluded"),
                n = t.attr("data-bv-field") || t.attr("name");
            switch (!0) {
                case !!n && this.options.fields && this.options.fields[n] && ("true" === this.options.fields[n].excluded || this.options.fields[n].excluded === !0):
                case "true" === i:
                case "" === i:
                    return !0;
                case !!n && this.options.fields && this.options.fields[n] && ("false" === this.options.fields[n].excluded || this.options.fields[n].excluded === !1):
                case "false" === i:
                    return !1;
                default:
                    if (this.options.excluded) {
                        "string" == typeof this.options.excluded && (this.options.excluded = e.map(this.options.excluded.split(","), function(t) {
                            return e.trim(t)
                        }));
                        for (var a = this.options.excluded.length, s = 0; a > s; s++)
                            if ("string" == typeof this.options.excluded[s] && t.is(this.options.excluded[s]) || "function" == typeof this.options.excluded[s] && this.options.excluded[s].call(this, t, this) === !0) return !0
                    }
                    return !1
            }
        },
        _exceedThreshold: function(t) {
            var i = t.attr("data-bv-field"),
                n = this.options.fields[i].threshold || this.options.threshold;
            if (!n) return !0;
            var a = -1 !== e.inArray(t.attr("type"), ["button", "checkbox", "file", "hidden", "image", "radio", "reset", "submit"]);
            return a || t.val().length >= n
        },
        _onError: function(t) {
            if (!t.isDefaultPrevented()) {
                if ("submitted" === this.options.live) {
                    this.options.live = "enabled";
                    var i = this;
                    for (var n in this.options.fields) ! function(t) {
                        var a = i.getFieldElements(t);
                        if (a.length) {
                            var s = e(a[0]).attr("type"),
                                o = "radio" === s || "checkbox" === s || "file" === s || "SELECT" === e(a[0]).get(0).tagName ? "change" : i._changeEvent,
                                r = i.options.fields[n].trigger || i.options.trigger || o,
                                l = e.map(r.split(" "), function(e) {
                                    return e + ".live.bv"
                                }).join(" ");
                            a.off(l).on(l, function() {
                                i._exceedThreshold(e(this)) && i.validateField(e(this))
                            })
                        }
                    }(n)
                }
                var a = this.$invalidFields.eq(0);
                if (a) {
                    var s, o = a.parents(".tab-pane");
                    o && (s = o.attr("id")) && e('a[href="#' + s + '"][data-toggle="tab"]').tab("show"), a.focus()
                }
            }
        },
        _onSuccess: function(e) {
            e.isDefaultPrevented() || this.disableSubmitButtons(!0).defaultSubmit()
        },
        _onFieldValidated: function(t, i) {
            var n = t.attr("data-bv-field"),
                a = this.options.fields[n].validators,
                s = {},
                o = 0,
                r = {
                    bv: this,
                    field: n,
                    element: t,
                    validator: i,
                    result: t.data("bv.response." + i)
                };
            if (i) switch (t.data("bv.result." + i)) {
                case this.STATUS_INVALID:
                    t.trigger(e.Event(this.options.events.validatorError), r);
                    break;
                case this.STATUS_VALID:
                    t.trigger(e.Event(this.options.events.validatorSuccess), r)
            }
            s[this.STATUS_NOT_VALIDATED] = 0, s[this.STATUS_VALIDATING] = 0, s[this.STATUS_INVALID] = 0, s[this.STATUS_VALID] = 0;
            for (var l in a)
                if (a[l].enabled !== !1) {
                    o++;
                    var d = t.data("bv.result." + l);
                    d && s[d]++
                }
            s[this.STATUS_VALID] === o ? (this.$invalidFields = this.$invalidFields.not(t), t.trigger(e.Event(this.options.events.fieldSuccess), r)) : 0 === s[this.STATUS_NOT_VALIDATED] && 0 === s[this.STATUS_VALIDATING] && s[this.STATUS_INVALID] > 0 && (this.$invalidFields = this.$invalidFields.add(t), t.trigger(e.Event(this.options.events.fieldError), r))
        },
        getFieldElements: function(t) {
            return this._cacheFields[t] || (this._cacheFields[t] = this.options.fields[t] && this.options.fields[t].selector ? e(this.options.fields[t].selector) : this.$form.find('[name="' + t + '"]')), this._cacheFields[t]
        },
        getOptions: function(e, t, i) {
            if (!e) return this.options;
            if ("object" == typeof e && (e = e.attr("data-bv-field")), !this.options.fields[e]) return null;
            var n = this.options.fields[e];
            return t ? n.validators && n.validators[t] ? i ? n.validators[t][i] : n.validators[t] : null : i ? n[i] : n
        },
        disableSubmitButtons: function(e) {
            return e ? "disabled" !== this.options.live && this.$form.find(this.options.submitButtons).attr("disabled", "disabled") : this.$form.find(this.options.submitButtons).removeAttr("disabled"), this
        },
        validate: function() {
            if (!this.options.fields) return this;
            this.disableSubmitButtons(!0);
            for (var e in this.options.fields) this.validateField(e);
            return this._submit(), this
        },
        validateField: function(t) {
            var i = e([]);
            switch (typeof t) {
                case "object":
                    i = t, t = t.attr("data-bv-field");
                    break;
                case "string":
                    i = this.getFieldElements(t)
            }
            if (0 === i.length || this.options.fields[t] && this.options.fields[t].enabled === !1) return this;
            for (var n, a, s = this, o = i.attr("type"), r = "radio" === o || "checkbox" === o ? 1 : i.length, l = "radio" === o || "checkbox" === o, d = this.options.fields[t].validators, c = "true" === this.options.fields[t].verbose || this.options.fields[t].verbose === !0 || "true" === this.options.verbose || this.options.verbose === !0, p = 0; r > p; p++) {
                var u = i.eq(p);
                if (!this._isExcluded(u)) {
                    var f = !1;
                    for (n in d) {
                        if (u.data("bv.dfs." + n) && u.data("bv.dfs." + n).reject(), f) break;
                        var h = u.data("bv.result." + n);
                        if (h !== this.STATUS_VALID && h !== this.STATUS_INVALID)
                            if (d[n].enabled !== !1) {
                                if (u.data("bv.result." + n, this.STATUS_VALIDATING), a = e.fn.bootstrapValidator.validators[n].validate(this, u, d[n]), "object" == typeof a && a.resolve) this.updateStatus(l ? t : u, this.STATUS_VALIDATING, n), u.data("bv.dfs." + n, a), a.done(function(e, t, i) {
                                    e.removeData("bv.dfs." + t).data("bv.response." + t, i), i.message && s.updateMessage(e, t, i.message), s.updateStatus(l ? e.attr("data-bv-field") : e, i.valid ? s.STATUS_VALID : s.STATUS_INVALID, t), i.valid && s._submitIfValid === !0 ? s._submit() : i.valid || c || (f = !0)
                                });
                                else if ("object" == typeof a && void 0 !== a.valid && void 0 !== a.message) {
                                    if (u.data("bv.response." + n, a), this.updateMessage(l ? t : u, n, a.message), this.updateStatus(l ? t : u, a.valid ? this.STATUS_VALID : this.STATUS_INVALID, n), !a.valid && !c) break
                                } else if ("boolean" == typeof a && (u.data("bv.response." + n, a), this.updateStatus(l ? t : u, a ? this.STATUS_VALID : this.STATUS_INVALID, n), !a && !c)) break
                            } else this.updateStatus(l ? t : u, this.STATUS_VALID, n);
                        else this._onFieldValidated(u, n)
                    }
                }
            }
            return this
        },
        updateMessage: function(t, i, n) {
            var a = e([]);
            switch (typeof t) {
                case "object":
                    a = t, t = t.attr("data-bv-field");
                    break;
                case "string":
                    a = this.getFieldElements(t)
            }
            a.each(function() {
                e(this).data("bv.messages").find('.help-block[data-bv-validator="' + i + '"][data-bv-for="' + t + '"]').html(n)
            })
        },
        updateStatus: function(t, i, n) {
            var a = e([]);
            switch (typeof t) {
                case "object":
                    a = t, t = t.attr("data-bv-field");
                    break;
                case "string":
                    a = this.getFieldElements(t)
            }
            i === this.STATUS_NOT_VALIDATED && (this._submitIfValid = !1);
            for (var s = this, o = a.attr("type"), r = this.options.fields[t].group || this.options.group, l = "radio" === o || "checkbox" === o ? 1 : a.length, d = 0; l > d; d++) {
                var c = a.eq(d);
                if (!this._isExcluded(c)) {
                    var p = c.parents(r),
                        u = c.data("bv.messages"),
                        f = u.find('.help-block[data-bv-validator][data-bv-for="' + t + '"]'),
                        h = n ? f.filter('[data-bv-validator="' + n + '"]') : f,
                        m = p.find('.form-control-feedback[data-bv-icon-for="' + t + '"]'),
                        g = "function" == typeof(this.options.fields[t].container || this.options.container) ? (this.options.fields[t].container || this.options.container).call(this, c, this) : this.options.fields[t].container || this.options.container,
                        v = null;
                    if (n) c.data("bv.result." + n, i);
                    else
                        for (var b in this.options.fields[t].validators) c.data("bv.result." + b, i);
                    h.attr("data-bv-result", i);
                    var y, w, x = c.parents(".tab-pane");
                    switch (x && (y = x.attr("id")) && (w = e('a[href="#' + y + '"][data-toggle="tab"]').parent()), i) {
                        case this.STATUS_VALIDATING:
                            v = null, this.disableSubmitButtons(!0), p.removeClass("has-success").removeClass("has-error"), m && m.removeClass(this.options.feedbackIcons.valid).removeClass(this.options.feedbackIcons.invalid).addClass(this.options.feedbackIcons.validating).show(), w && w.removeClass("bv-tab-success").removeClass("bv-tab-error");
                            break;
                        case this.STATUS_INVALID:
                            v = !1, this.disableSubmitButtons(!0), p.removeClass("has-success").addClass("has-error"), m && m.removeClass(this.options.feedbackIcons.valid).removeClass(this.options.feedbackIcons.validating).addClass(this.options.feedbackIcons.invalid).show(), w && w.removeClass("bv-tab-success").addClass("bv-tab-error");
                            break;
                        case this.STATUS_VALID:
                            v = 0 === f.filter('[data-bv-result="' + this.STATUS_NOT_VALIDATED + '"]').length ? f.filter('[data-bv-result="' + this.STATUS_VALID + '"]').length === f.length : null, null !== v && (this.disableSubmitButtons(this.$submitButton ? !this.isValid() : !v), m && m.removeClass(this.options.feedbackIcons.invalid).removeClass(this.options.feedbackIcons.validating).removeClass(this.options.feedbackIcons.valid).addClass(v ? this.options.feedbackIcons.valid : this.options.feedbackIcons.invalid).show()), p.removeClass("has-error has-success").addClass(this.isValidContainer(p) ? "has-success" : "has-error"), w && w.removeClass("bv-tab-success").removeClass("bv-tab-error").addClass(this.isValidContainer(x) ? "bv-tab-success" : "bv-tab-error");
                            break;
                        case this.STATUS_NOT_VALIDATED:
                        default:
                            v = null, this.disableSubmitButtons(!1), p.removeClass("has-success").removeClass("has-error"), m && m.removeClass(this.options.feedbackIcons.valid).removeClass(this.options.feedbackIcons.invalid).removeClass(this.options.feedbackIcons.validating).hide(),
                                w && w.removeClass("bv-tab-success").removeClass("bv-tab-error")
                    }
                    switch (!0) {
                        case m && "tooltip" === g:
                            v === !1 ? m.css("cursor", "pointer").tooltip("destroy").tooltip({
                                container: "body",
                                html: !0,
                                placement: "top",
                                title: f.filter('[data-bv-result="' + s.STATUS_INVALID + '"]').eq(0).html()
                            }) : m.tooltip("hide");
                            break;
                        case m && "popover" === g:
                            v === !1 ? m.css("cursor", "pointer").popover("destroy").popover({
                                container: "body",
                                content: f.filter('[data-bv-result="' + s.STATUS_INVALID + '"]').eq(0).html(),
                                html: !0,
                                placement: "top",
                                trigger: "hover click"
                            }) : m.popover("hide");
                            break;
                        default:
                            i === this.STATUS_INVALID ? h.show() : h.hide()
                    }
                    c.trigger(e.Event(this.options.events.fieldStatus), {
                        bv: this,
                        field: t,
                        element: c,
                        status: i
                    }), this._onFieldValidated(c, n)
                }
            }
            return this
        },
        isValid: function() {
            for (var e in this.options.fields)
                if (!this.isValidField(e)) return !1;
            return !0
        },
        isValidField: function(t) {
            var i = e([]);
            switch (typeof t) {
                case "object":
                    i = t, t = t.attr("data-bv-field");
                    break;
                case "string":
                    i = this.getFieldElements(t)
            }
            if (0 === i.length || null === this.options.fields[t] || this.options.fields[t].enabled === !1) return !0;
            for (var n, a, s, o = i.attr("type"), r = "radio" === o || "checkbox" === o ? 1 : i.length, l = 0; r > l; l++)
                if (n = i.eq(l), !this._isExcluded(n))
                    for (a in this.options.fields[t].validators)
                        if (this.options.fields[t].validators[a].enabled !== !1 && (s = n.data("bv.result." + a), s !== this.STATUS_VALID)) return !1;
            return !0
        },
        isValidContainer: function(t) {
            var i = this,
                n = {},
                a = "string" == typeof t ? e(t) : t;
            if (0 === a.length) return !0;
            a.find("[data-bv-field]").each(function() {
                var t = e(this),
                    a = t.attr("data-bv-field");
                i._isExcluded(t) || n[a] || (n[a] = t)
            });
            for (var s in n) {
                var o = n[s];
                if (o.data("bv.messages").find('.help-block[data-bv-validator][data-bv-for="' + s + '"]').filter('[data-bv-result="' + this.STATUS_INVALID + '"]').length > 0) return !1
            }
            return !0
        },
        defaultSubmit: function() {
            this.$submitButton && e("<input/>").attr("type", "hidden").attr("data-bv-submit-hidden", "").attr("name", this.$submitButton.attr("name")).val(this.$submitButton.val()).appendTo(this.$form), this.$form.off("submit.bv").submit()
        },
        getInvalidFields: function() {
            return this.$invalidFields
        },
        getSubmitButton: function() {
            return this.$submitButton
        },
        getMessages: function(t, i) {
            var n = this,
                a = [],
                s = e([]);
            switch (!0) {
                case t && "object" == typeof t:
                    s = t;
                    break;
                case t && "string" == typeof t:
                    var o = this.getFieldElements(t);
                    if (o.length > 0) {
                        var r = o.attr("type");
                        s = "radio" === r || "checkbox" === r ? o.eq(0) : o
                    }
                    break;
                default:
                    s = this.$invalidFields
            }
            var l = i ? '[data-bv-validator="' + i + '"]' : "";
            return s.each(function() {
                a = a.concat(e(this).data("bv.messages").find('.help-block[data-bv-for="' + e(this).attr("data-bv-field") + '"][data-bv-result="' + n.STATUS_INVALID + '"]' + l).map(function() {
                    var t = e(this).attr("data-bv-validator"),
                        i = e(this).attr("data-bv-for");
                    return n.options.fields[i].validators[t].enabled === !1 ? "" : e(this).html()
                }).get())
            }), a
        },
        updateOption: function(e, t, i, n) {
            return "object" == typeof e && (e = e.attr("data-bv-field")), this.options.fields[e] && this.options.fields[e].validators[t] && (this.options.fields[e].validators[t][i] = n, this.updateStatus(e, this.STATUS_NOT_VALIDATED, t)), this
        },
        addField: function(t, i) {
            var n = e([]);
            switch (typeof t) {
                case "object":
                    n = t, t = t.attr("data-bv-field") || t.attr("name");
                    break;
                case "string":
                    delete this._cacheFields[t], n = this.getFieldElements(t)
            }
            n.attr("data-bv-field", t);
            for (var a = n.attr("type"), s = "radio" === a || "checkbox" === a ? 1 : n.length, o = 0; s > o; o++) {
                var r = n.eq(o),
                    l = this._parseOptions(r);
                l = null === l ? i : e.extend(!0, i, l), this.options.fields[t] = e.extend(!0, this.options.fields[t], l), this._cacheFields[t] = this._cacheFields[t] ? this._cacheFields[t].add(r) : r, this._initField("checkbox" === a || "radio" === a ? t : r)
            }
            return this.disableSubmitButtons(!1), this.$form.trigger(e.Event(this.options.events.fieldAdded), {
                field: t,
                element: n,
                options: this.options.fields[t]
            }), this
        },
        removeField: function(t) {
            var i = e([]);
            switch (typeof t) {
                case "object":
                    i = t, t = t.attr("data-bv-field") || t.attr("name"), i.attr("data-bv-field", t);
                    break;
                case "string":
                    i = this.getFieldElements(t)
            }
            if (0 === i.length) return this;
            for (var n = i.attr("type"), a = "radio" === n || "checkbox" === n ? 1 : i.length, s = 0; a > s; s++) {
                var o = i.eq(s);
                this.$invalidFields = this.$invalidFields.not(o), this._cacheFields[t] = this._cacheFields[t].not(o)
            }
            return this._cacheFields[t] && 0 !== this._cacheFields[t].length || delete this.options.fields[t], ("checkbox" === n || "radio" === n) && this._initField(t), this.disableSubmitButtons(!1), this.$form.trigger(e.Event(this.options.events.fieldRemoved), {
                field: t,
                element: i
            }), this
        },
        resetField: function(t, i) {
            var n = e([]);
            switch (typeof t) {
                case "object":
                    n = t, t = t.attr("data-bv-field");
                    break;
                case "string":
                    n = this.getFieldElements(t)
            }
            var a = n.length;
            if (this.options.fields[t])
                for (var s = 0; a > s; s++)
                    for (var o in this.options.fields[t].validators) n.eq(s).removeData("bv.dfs." + o);
            if (this.updateStatus(t, this.STATUS_NOT_VALIDATED), i) {
                var r = n.attr("type");
                "radio" === r || "checkbox" === r ? n.removeAttr("checked").removeAttr("selected") : n.val("")
            }
            return this
        },
        resetForm: function(t) {
            for (var i in this.options.fields) this.resetField(i, t);
            return this.$invalidFields = e([]), this.$submitButton = null, this.disableSubmitButtons(!1), this
        },
        revalidateField: function(e) {
            return this.updateStatus(e, this.STATUS_NOT_VALIDATED).validateField(e), this
        },
        enableFieldValidators: function(e, t, i) {
            var n = this.options.fields[e].validators;
            if (i && n && n[i] && n[i].enabled !== t) this.options.fields[e].validators[i].enabled = t, this.updateStatus(e, this.STATUS_NOT_VALIDATED, i);
            else if (!i && this.options.fields[e].enabled !== t) {
                this.options.fields[e].enabled = t;
                for (var a in n) this.enableFieldValidators(e, t, a)
            }
            return this
        },
        getDynamicOption: function(t, i) {
            var n = "string" == typeof t ? this.getFieldElements(t) : t,
                a = n.val();
            if ("function" == typeof i) return e.fn.bootstrapValidator.helpers.call(i, [a, this, n]);
            if ("string" == typeof i) {
                var s = this.getFieldElements(i);
                return s.length ? s.val() : e.fn.bootstrapValidator.helpers.call(i, [a, this, n]) || i
            }
            return null
        },
        destroy: function() {
            var t, i, n, a, s, o;
            for (t in this.options.fields) {
                i = this.getFieldElements(t), o = this.options.fields[t].group || this.options.group;
                for (var r = 0; r < i.length; r++) {
                    if (n = i.eq(r), n.data("bv.messages").find('.help-block[data-bv-validator][data-bv-for="' + t + '"]').remove().end().end().removeData("bv.messages").parents(o).removeClass("has-feedback has-error has-success").end().off(".bv").removeAttr("data-bv-field"), s = n.parents(o).find('i[data-bv-icon-for="' + t + '"]')) {
                        var l = "function" == typeof(this.options.fields[t].container || this.options.container) ? (this.options.fields[t].container || this.options.container).call(this, n, this) : this.options.fields[t].container || this.options.container;
                        switch (l) {
                            case "tooltip":
                                s.tooltip("destroy").remove();
                                break;
                            case "popover":
                                s.popover("destroy").remove();
                                break;
                            default:
                                s.remove()
                        }
                    }
                    for (a in this.options.fields[t].validators) n.data("bv.dfs." + a) && n.data("bv.dfs." + a).reject(), n.removeData("bv.result." + a).removeData("bv.response." + a).removeData("bv.dfs." + a), "function" == typeof e.fn.bootstrapValidator.validators[a].destroy && e.fn.bootstrapValidator.validators[a].destroy(this, n, this.options.fields[t].validators[a])
                }
            }
            this.disableSubmitButtons(!1), this.$hiddenButton.remove(), this.$form.removeClass(this.options.elementClass).off(".bv").removeData("bootstrapValidator").find("[data-bv-submit-hidden]").remove().end().find('[type="submit"]').off("click.bv")
        }
    }, e.fn.bootstrapValidator = function(i) {
        var n = arguments;
        return this.each(function() {
            var a = e(this),
                s = a.data("bootstrapValidator"),
                o = "object" == typeof i && i;
            s || (s = new t(this, o), a.data("bootstrapValidator", s)), "string" == typeof i && s[i].apply(s, Array.prototype.slice.call(n, 1))
        })
    }, e.fn.bootstrapValidator.DEFAULT_OPTIONS = {
        elementClass: "bv-form",
        message: "This value is not valid",
        group: ".form-group",
        container: null,
        threshold: null,
        excluded: [":disabled", ":hidden", ":not(:visible)"],
        feedbackIcons: {
            valid: null,
            invalid: null,
            validating: null
        },
        submitButtons: '[type="submit"]',
        live: "enabled",
        fields: null,
        events: {
            formInit: "init.form.bv",
            formError: "error.form.bv",
            formSuccess: "success.form.bv",
            fieldAdded: "added.field.bv",
            fieldRemoved: "removed.field.bv",
            fieldInit: "init.field.bv",
            fieldError: "error.field.bv",
            fieldSuccess: "success.field.bv",
            fieldStatus: "status.field.bv",
            validatorError: "error.validator.bv",
            validatorSuccess: "success.validator.bv"
        },
        verbose: !0
    }, e.fn.bootstrapValidator.validators = {}, e.fn.bootstrapValidator.i18n = {}, e.fn.bootstrapValidator.Constructor = t, e.fn.bootstrapValidator.helpers = {
        call: function(e, t) {
            if ("function" == typeof e) return e.apply(this, t);
            if ("string" == typeof e) {
                "()" === e.substring(e.length - 2) && (e = e.substring(0, e.length - 2));
                for (var i = e.split("."), n = i.pop(), a = window, s = 0; s < i.length; s++) a = a[i[s]];
                return "undefined" == typeof a[n] ? null : a[n].apply(this, t)
            }
        },
        format: function(t, i) {
            e.isArray(i) || (i = [i]);
            for (var n in i) t = t.replace("%s", i[n]);
            return t
        },
        date: function(e, t, i, n) {
            if (isNaN(e) || isNaN(t) || isNaN(i)) return !1;
            if (i.length > 2 || t.length > 2 || e.length > 4) return !1;
            if (i = parseInt(i, 10), t = parseInt(t, 10), e = parseInt(e, 10), 1e3 > e || e > 9999 || 0 >= t || t > 12) return !1;
            var a = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            if ((e % 400 === 0 || e % 100 !== 0 && e % 4 === 0) && (a[1] = 29), 0 >= i || i > a[t - 1]) return !1;
            if (n === !0) {
                var s = new Date,
                    o = s.getFullYear(),
                    r = s.getMonth(),
                    l = s.getDate();
                return o > e || e === o && r > t - 1 || e === o && t - 1 === r && l > i
            }
            return !0
        },
        luhn: function(e) {
            for (var t = e.length, i = 0, n = [
                    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
                    [0, 2, 4, 6, 8, 1, 3, 5, 7, 9]
                ], a = 0; t--;) a += n[i][parseInt(e.charAt(t), 10)], i ^= 1;
            return a % 10 === 0 && a > 0
        },
        mod11And10: function(e) {
            for (var t = 5, i = e.length, n = 0; i > n; n++) t = (2 * (t || 10) % 11 + parseInt(e.charAt(n), 10)) % 10;
            return 1 === t
        },
        mod37And36: function(e, t) {
            t = t || "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            for (var i = t.length, n = e.length, a = Math.floor(i / 2), s = 0; n > s; s++) a = (2 * (a || i) % (i + 1) + t.indexOf(e.charAt(s))) % i;
            return 1 === a
        }
    }
}(window.jQuery),
}(window.jQuery), define("bootstrapSlider", function() {}),
    }(jQuery), define("touchspin", function() {}), define("js/pages/product", ["tala", "bootbox", "fancybox", "magiczoom", "bxslider", "owl_carousel", "rating", "book_review", "touchspin", "ponto"], function(e) {
        return {
            initialize: function() {
                var t = !1,
                    i = {},
                    n = $("#product_id").val(),
                    a = $("#product_sku").val(),
                    s = [],
                    o = function() {
                        $("#add-to-cart").attr("action", "/checkout/ajaxAdd"), $(".js-add-to-cart, .pre-order").on("click", function() {
                            return $(this).hasClass("disabled") ? !1 : void $("#add-to-cart").submit()
                        }), $("input#qty, input.grouped-qty").TouchSpin({
                            verticalbuttons: !0
                        })
                    };
                $(".box-up-sell-product, .box-same-brand-product, .box-bought-related-product, .box-recommendation-related-product, .box-same-author-product").on("click", ".add-to-cart", function(t) {
                    t.preventDefault();
                    var i = $(this).data("id"),
                        n = this,
                        a = $(this).data("product-type");
                    if ("grouped" === a) window.location = $(n).parents(".product-box-item").children("a").attr("href");
                    else {
                        if (isNativeApp === !0) return console.log("native app"), Ponto.invoke("Messaging", "addProductToCart", {
                            id: String(i),
                            quantity: 1
                        }, null, null), !1;
                        e.ajax({
                            url: "/checkout/cart/ajaxAdd",
                            data: {
                                id: i,
                                qty: 1
                            },
                            csrf: !0,
                            loader: $("body"),
                            success: function(t) {
                                "success" === t.status && e["goto"]("/checkout/cart/")
                            }
                        }, function() {
                            window.location = $(n).parents(".product-box-item").children("a").attr("href")
                        })
                    }
                });
                var r = function() {
                        0 === $(".js-filter").length && $(".js-add-to-cart").removeClass("disabled"), $("#add-to-cart").submit(function(t) {
                            productType = $("input[name=product_type]").val();
                            var i = [];
                            "grouped" === productType ? $(".grouped-qty").each(function() {
                                var e = {};
                                e.productId = $(this).data("productid"), e.qty = $(this).val(), i.push(e)
                            }) : i = $("#qty").val();
                            var a = $("#product_price").val();
                            return isNativeApp === !0 ? (console.log("native app"), Ponto.invoke("Messaging", "addProductToCart", {
                                id: $("#product_id").val(),
                                quantity: i
                            }, null, null), !1) : (e.ajax({
                                url: "/checkout/cart/ajaxAdd",
                                data: {
                                    id: $("#product_id").val(),
                                    qty: i,
                                    product_type: productType
                                },
                                csrf: !0,
                                loader: $("body"),
                                success: function(t) {
                                    if ("catalog_gift" === t.status) return void e.alert(t.message, function() {
                                        e["goto"]("/checkout/cart")
                                    });
                                    if ("success" === t.status) {
                                        var s = $("#product_sku").val(),
                                            o = $(".item-name").text().trim(),
                                            r = $("#productset_name").val(),
                                            l = {
                                                qty: i,
                                                sku: s,
                                                price: a,
                                                productName: o,
                                                categoryName: r,
                                                productId: n
                                            };
                                        e.fbEventAddToCart(l), e["goto"]("/checkout/cart")
                                    }
                                }
                            }), void t.preventDefault())
                        })
                    },
                    l = function(e, t) {
                        return e.length > 0 ? ($.each(e, function() {
                            $(".js-thumb").append('<a href="' + this.href + '" rel="zoom-id:product-magiczoom" rev="' + this.rev + '"><img src="' + this.src + '" alt="Product"></a>')
                        }), 1 === e.length && $(".js-image-box").addClass("no-left"), slider = $(".js-thumb").bxSlider(t), slider) : !1
                    },
                    d = function() {
                        return $message = "", 0 !== c.length ? ($.each(c, function(e) {
                            "" !== $message ? $message = $message + ", " + this.toString() : $message += this.toString()
                        }), "Vui lÃ²ng chá»n " + $message) : ($(".js-add-to-cart").removeClass("disabled"), "")
                    },
                    c = [],
                    p = function() {
                        $(".options").each(function() {
                            c.push($(this).attr("data-value"))
                        })
                    };
                o(), p(), r();
                var u = null,
                    f = null;
                f = Modernizr.mq("(min-width : 480px)") ? {
                    mode: "vertical",
                    minSlides: 5,
                    slideMargin: 5,
                    pager: !1,
                    infiniteLoop: !1,
                    hideControlOnEnd: !0
                } : {
                    minSlides: 5,
                    slideMargin: 5,
                    pager: !1,
                    infiniteLoop: !1,
                    hideControlOnEnd: !0
                };
                var h = [];
                images.forEach(function(e) {
                    "all" === e.filter && h.push(e)
                }), $(".magiczoom").hasClass("have-book-review") || (u = l(h, f));
                var m = [],
                    g = function() {
                        $(".js-filter").each(function() {
                            $(this).removeClass("disabled")
                        })
                    };
                $(".js-filter").on("click", function() {
                    if ($(this).hasClass("first-option") && (g(), $(".second-option").each(function() {
                            _that = $(this), _that.removeClass("active")
                        })), !$(this).hasClass("disabled")) {
                        t = !0;
                        var e = $(this).attr("data-filter"),
                            a = $(this).attr("data-code"),
                            o = $(this).attr("data-label"),
                            r = $(this).attr("data-value");
                        newPrice = parseInt($(this).attr("data-price"), 10), $(this).hasClass("first-option") && (newPrice = parseInt($(this).attr("data-price"), 10), m.fistOptionPrice = newPrice, s = v(a, r), _option = b(s, a, r), $(".second-option").each(function() {
                            _that = $(this), -1 === jQuery.inArray(_that.attr("data-value"), _option) ? _that.css("display", "none") : _that.css("display", "")
                        })), i[a] = $.trim($(this).text()), $.each(c, function(e) {
                            this.toString() === o && c.splice(e, 1)
                        }), $addToCartButtonTitle = d(), $(".js-add-to-cart").attr("data-original-title", $addToCartButtonTitle), $(this).hasClass("second-option") ? (newPrice = parseInt($(this).attr("data-price"), 10) + parseInt(m.fistOptionPrice, 10), productIds2 = v(a, r), n = $.arrayIntersect(s, productIds2), $("#product_id").val(n)) : 0 === $(".second-option").length && (productIds2 = v(a, r), n = $.arrayIntersect(s, productIds2), $("#product_id").val(n)), oldListPrice = $("#p-listpirce").attr("data-value"), oldSpecialPrice = $("#p-specialprice").attr("data-value"), $tmpListPrice = parseInt(oldListPrice, 10) + newPrice, $tmpListPrice < 0 && ($tmpListPrice = 0), $tmpSpecialPrice = parseInt(oldSpecialPrice, 10) + newPrice, $tmpSpecialPrice < 0 && ($tmpSpecialPrice = 0), $("#p-listpirce > span:last").text(mycurrency($tmpListPrice) + " â‚«"), $("#p-specialprice > span#span-price").text(mycurrency($tmpSpecialPrice) + " â‚«"), $(".item-price > .partnership-price-item").length && (oldFinalPrice = parseInt($("#p-specialprice").attr("data-value"), 10), newFinalPrice = oldFinalPrice + newPrice, oldFinalPrice + newPrice < 2e6 ? $tmpVisaPrice = parseInt(.9 * newFinalPrice, 10) : $tmpVisaPrice = parseInt(newFinalPrice - 2e5, 10), $(" .item-price .partnership-price-item > span:nth-child(2)").text(mycurrency($tmpVisaPrice) + " â‚«")), $("#span-" + a).text($(this).text());
                        var p = [];
                        $.each(images, function() {
                            e === this.filter && p.push(this)
                        }), p.length > 0 && (u.destroySlider(), $(".js-thumb").empty(), $("#product-magiczoom").empty(), u = l(p, f), $("#product-magiczoom").append('<img src="' + p[0].rev + '" alt="Product">'), $("#product-magiczoom").attr("href", p[0].href), MagicZoomPlus.refresh()), $(".js-filter").each(function() {
                            _that = $(this), _that.attr("data-code") === a && _that.removeClass("active")
                        }), $(this).addClass("active")
                    }
                }), $.arrayIntersect = function(e, t) {
                    return $.grep(e, function(e) {
                        return $.inArray(e, t) > -1
                    })
                };
                var v = function(e, t) {
                        var i = [];
                        return $.each(configurableOptions, function(n, a) {
                            a.code === e && $.each(a.options, function(e, n) {
                                n.name === t && (i = n.products)
                            })
                        }), i
                    },
                    b = function(e, t, i) {
                        var n = [];
                        return $.each(configurableOptions, function(i, a) {
                            a.code !== t && $.each(a.options, function(i, s) {
                                $.each(s.products, function(i, o) {
                                    jQuery.inArray(o, e) > -1 && a.code !== t && n.push(s.name)
                                })
                            })
                        }), n
                    };
                $(".js-add-to-cart").on("mouseover", function() {
                    $(this).hasClass("disabled") && ($(this).tooltip({
                        placement: "top"
                    }), $(this).tooltip("show"))
                }), $addToCartButtonTitle = d(), $(".js-add-to-cart").attr("data-original-title", $addToCartButtonTitle), $(".js-author").owlCarousel({
                    lazyLoad: !0,
                    navigation: !0,
                    pagination: !1,
                    scrollPerPage: !0,
                    navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                    items: 6,
                    itemsDesktop: [1199, 5],
                    itemsDesktopSmall: [979, 4],
                    itemsTablet: [768, 3],
                    itemsMobile: [479, 2]
                }), $(".add-to-wishlist").on("click", function(t) {
                    $(".add-to-wishlist").attr("disabled", "disabled"), n = $("#product_id_for_wishlist").val(), e.ajax({
                        url: "/customer/wishlist/ajaxAdd",
                        data: {
                            product_id: n
                        },
                        csrf: !0,
                        loader: $("body"),
                        success: function(e) {
                            return "unlogin" === e.status ? ($(".user-name-login").trigger("click"), void $(".add-to-wishlist").removeAttr("disabled")) : void("success" === e.status && (window.location.href = "/customer/wishlist"))
                        }
                    })
                }), $(".js-customer-button").on("click", function() {
                    $(".js-customer-h3").toggle(), $(".js-customer-col-4").toggle(), $(".js-customer-col-5").toggle(), $(".js-customer-h3").is(":visible") ? $(this).text("ÄÃ³ng") : $(this).text("Viáº¿t nháº­n xÃ©t cá»§a báº¡n")
                });
                var y = $(".word-counter"),
                    w = 100,
                    x = 0;
                $("button.btn-add-review").attr("disabled", "disabled"), $("textarea#review_detail").on("input", function() {
                    var e = /\s+/gi;
                    x = $(this).val().trim().replace(e, " ").split(" ").length, w = 31 === parseInt($("#productset_id").val()) || 26 === parseInt($("#productset_id").val()) ? 100 : 50, x >= w ? $("button.btn-add-review").removeAttr("disabled") : $("button.btn-add-review").attr("disabled", "disabled")
                }), $("div.action").mouseenter(function() {
                    y.css("opacity", "1"), w > x ? y.html("Báº¡n cáº§n viáº¿t Ä‘á»§ <strong>" + w + "</strong> tá»« Ä‘á»ƒ gá»­i nháº­n xÃ©t há»£p lá»‡.") : y.html("")
                }), $("div.action").mouseleave(function() {
                    setTimeout(function() {
                        y.css("opacity", "0")
                    }, 3e3)
                }), $(".btn-add-review").on("click", function(t) {
                    return w > x ? void y.html("Báº¡n cáº§n viáº¿t Ä‘á»§ <strong>" + w + "</strong> tá»« Ä‘á»ƒ gá»­i nháº­n xÃ©t há»£p lá»‡.") : (title = $("#review_title").val(), detail = $("#review_detail").val(), productsetId = $("#productset_id").val(), entityPkValue = $("#entity_pk_value").val(), ratingStar = $("#rating_star").val(), showInformation = $("#show_information:checked").is(":checked") ? 1 : 0, void e.ajax({
                        url: "/product/review/ajaxAddReview",
                        data: {
                            title: title,
                            detail: detail,
                            productset_id: productsetId,
                            entity_pk_value: entityPkValue,
                            rating_star: ratingStar,
                            show_information: showInformation
                        },
                        csrf: !0,
                        loader: $("body"),
                        success: function(t) {
                            return console.log(t), "success" === t.status && t.url ? void(window.location = t.url) : "unlogin" === t.status ? void $(".header-user .user-name .user-name-box ul li .user-name-login, #register-form .head p a, .login-to-use-point").trigger("click") : "error" === t.status && "object" == typeof t.messages ? ("error" === t.messages.rating.status ? ($("#rating_error").text(t.messages.rating.messages), $("#rating_wrapper").addClass("has-error")) : ($("#rating_error").text(""), $("#rating_wrapper").removeClass("has-error")), "error" === t.messages.title.status ? ($("#title_error").text(t.messages.title.messages), $("#title_wrapper").addClass("has-error")) : ($("#title_error").text(""), $("#title_wrapper").removeClass("has-error")), void("error" === t.messages.detail.status ? ($("#detail_error").text(t.messages.detail.messages), $("#detail_wrapper").addClass("has-error")) : ($("#detail_error").text(""), $("#detail_wrapper").removeClass("has-error")))) : void e.gotoTop()
                        }
                    }))
                }), $(".thank-review").on("click", function(t) {
                    $(this).attr("disabled", !0), thisBtn = $(this), reviewId = $(this).data("review-id"), n = $(this).data("product-id"), e.ajax({
                        url: "/product/review/ajaxThankReview",
                        data: {
                            review_id: reviewId,
                            product_id: n
                        },
                        csrf: !0,
                        loader: $("body"),
                        success: function(t) {
                            return "unlogin" === t.status ? ($(".user-name-login").trigger("click"), void thisBtn.removeAttr("disabled")) : "error" === t.status ? (e.alert(t.messages), void thisBtn.removeAttr("disabled")) : void e.reload()
                        }
                    })
                }), $(".btn_add_comment").on("click", function(t) {
                    $(this).attr("disabled", !0), thisBtn = $(this), reviewId = $(this).data("review-id"), comment = $(this).parent().find(".review_comment").val(), e.ajax({
                        url: "/product/review/ajaxCommentReview",
                        data: {
                            review_id: reviewId,
                            comment: comment
                        },
                        csrf: !0,
                        loader: $("body"),
                        success: function(t) {
                            return "error" === t.status ? (thisBtn.parent().addClass("has-error"), thisBtn.parent().find(".help-block").text(t.messages.comment), void thisBtn.removeAttr("disabled")) : "unlogin" === t.status ? ($(".user-name-login").trigger("click"), void thisBtn.removeAttr("disabled")) : "error" === t.status ? (thisBtn.removeAttr("disabled"), void e.alert(t.messages)) : void e.reload()
                        }
                    })
                }), $(".save_edit_review").on("click", function(t) {
                    reviewId = $(this).data("review-id"), detailId = $(this).data("detail-id"), detail = $(this).parent().find(".edit_review").val(), productsetId = $("#productset_id").val(), thisBtn = $(this), e.ajax({
                        url: "/product/review/ajaxEditReview",
                        data: {
                            review_id: reviewId,
                            detail_id: detailId,
                            detail: detail,
                            productset_id: productsetId
                        },
                        csrf: !0,
                        loader: $("body"),
                        success: function(t) {
                            return console.log(t), "error" === t.status && "object" == typeof t.messages ? (thisBtn.parent().find(".help-block").text(t.messages.detail), void thisBtn.parent().addClass("has-error")) : "error" === t.status ? void e.alert(t.messages) : void e.gotoTop()
                        }
                    })
                }), $(".report_bad_comment").on("click", function(t) {
                    t.preventDefault(), commentId = $(this).data("comment-id"), thisBtn = $(this), e.ajax({
                        url: "/product/review/ajaxReportBadComment",
                        data: {
                            comment_id: commentId
                        },
                        csrf: !0,
                        loader: $("body"),
                        success: function(t) {
                            return console.log(t), "error" === t.status ? void e.alert(t.messages) : "success" === t.status ? void thisBtn.replaceWith('<span class="text-danger">ÄÃ£ bÃ¡o xáº¥u</span>') : void 0
                        }
                    })
                }), $("input.rating").rating(), $(".js-quick-reply").click(function(e) {
                    e.preventDefault(), $(this).parent().parent().parent().find(".quick-reply").toggle()
                }), $(".js-quick-reply-hide").click(function(e) {
                    e.preventDefault(), $(this).parent().parent().parent().find(".quick-reply").toggle()
                }), $(".js-quick-edit-btn").click(function(e) {
                    e.preventDefault(), $(this).parent().parent().parent().find(".js-description").toggle(), $(this).parent().parent().parent().find(".js-quick-edit").toggle(), $(this).parent().parent().parent().find(".review_action").toggle()
                }), $(".js-edit-remove").click(function(e) {
                    e.preventDefault(), $(this).parent().parent().parent().find(".js-description").toggle(), $(this).parent().parent().parent().find(".js-quick-edit").toggle(), $(this).parent().parent().parent().find(".review_action").toggle()
                }), $("#write_review").on("click", function(e) {
                    $(".js-customer-h3").is(":visible") || ($(".js-customer-h3").toggle(), $(".js-customer-col-4").toggle(), $(".js-customer-col-5").toggle(), $(".js-customer-button").text("ÄÃ³ng"))
                }), $(".promotion_detail").on("click", function(e) {
                    e.preventDefault(), $(".promotion_detail").fancybox({
                        autoSize: !1,
                        autoHeight: !1,
                        width: 450,
                        height: 20
                    })
                }), $(".js-open-freegift").fancybox({
                    autoSize: !1,
                    autoHeight: !0,
                    autoWidth: !1,
                    width: 410,
                    padding: [20, 20, 20, 20],
                    helpers: {
                        title: null
                    }
                }), $(".js-content").outerHeight() > 720 && ($(".js-show-more").parent().show(), $(".js-content").addClass("short")), $(".js-show-more").click(function(e) {
                    e.preventDefault(), $(".js-content").toggleClass("short"), $(".js-content").hasClass("short") && $("html,body").animate({
                        scrollTop: $(".js-content").offset().top
                    }, "slow"), $(".js-content").hasClass("short") ? $(this).text("Xem ThÃªm Ná»™i Dung") : $(this).text("Thu Gá»n Ná»™i Dung")
                }), (Modernizr.mq("(min-width : 992px)") || $("html.no-touch.lte-ie9").length > 0) && ($(".product-content-tabs").affix({
                    offset: {
                        top: function() {
                            return this.top = $(".product-content-tabs").offset().top, this.top
                        },
                        bottom: function() {
                            return this.bottom = $(document).outerHeight() - $(".question-answer-form").offset().top, this.bottom
                        }
                    }
                }), $(".product-content-tabs").on("affixed-bottom.bs.affix", function() {
                    $(this).addClass("is-hidden")
                }), $(".product-content-tabs").on("affixed.bs.affix", function() {
                    $(this).width($(".product-content-box").width()), $(this).removeClass("is-hidden")
                }), $("body").scrollspy({
                    target: "#js-product-content-tabs"
                })), $('[data-toggle="popover"]').popover();
                var Q = function(e) {
                    $("#delivery_time").text(e)
                };
                if ($("#select-prov").on("change", function() {
                        Q($(this).val())
                    }), $(".book-review-btn").length) {
                    $(".book-review-btn").readingbook({
                        data: "/catalog/product/ajaxBookReader/?id=" + $("#product_id").val(),
                        review: "/catalog/product/ajaxBookReview/?id=" + $("#product_id").val()
                    })
                }
                $(".js-book-review-show").click(function() {
                    $(".book-review-btn").trigger("click")
                }), $.get("/product/box/ajaxUpSellProduct?id=" + n, function(e) {
                    $(".box-up-sell-product").html(e).find(".product-author-content").boxProductCarousel()
                }), $.get("/product/box/ajaxSameAuthorProduct?id=" + n, function(e) {
                    $(".box-same-author-product").html(e).find(".product-author-content").boxProductCarousel()
                }), $.get("/product/box/ajaxSameBrandProduct?id=" + n, function(e) {
                    $(".box-same-brand-product").html(e).find(".product-author-content").boxProductCarousel()
                }), $.get("/product/box/ajaxBoughtRelatedProduct?id=" + n, function(e) {
                    $(".box-bought-related-product").html(e).find(".product-author-content").boxProductCarousel()
                }), $.get("/product/box/ajaxRecommendationRelatedProduct?sku=" + a, function(e) {
                    $(".box-recommendation-related-product").html(e).find(".product-author-content").boxProductCarousel()
                })
            }
        }
    }), $.fn.boxProductCarousel = function() {
        this.owlCarousel({
            lazyLoad: !0,
            navigation: !0,
            pagination: !1,
            scrollPerPage: !0,
            navigationText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
            items: 6,
            itemsDesktop: [1199, 5],
            itemsDesktopSmall: [979, 4],
            itemsTablet: [768, 3],
            itemsMobile: [479, 2]
        })
    }, 