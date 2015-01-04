function FastClick(a) {
    "use strict";
    var b, c = this;
    if (this.trackingClick = !1, this.trackingClickStart = 0, this.targetElement = null, this.touchStartX = 0, this.touchStartY = 0, this.lastTouchIdentifier = 0, this.touchBoundary = 10, this.layer = a, !a || !a.nodeType)
        throw new TypeError("Layer must be a document node");
    this.onClick = function() {
        return FastClick.prototype.onClick.apply(c, arguments)
    }, this.onMouse = function() {
        return FastClick.prototype.onMouse.apply(c, arguments)
    }, this.onTouchStart = function() {
        return FastClick.prototype.onTouchStart.apply(c, arguments)
    }, this.onTouchMove = function() {
        return FastClick.prototype.onTouchMove.apply(c, arguments)
    }, this.onTouchEnd = function() {
        return FastClick.prototype.onTouchEnd.apply(c, arguments)
    }, this.onTouchCancel = function() {
        return FastClick.prototype.onTouchCancel.apply(c, arguments)
    }, FastClick.notNeeded(a) || (this.deviceIsAndroid && (a.addEventListener("mouseover", this.onMouse, !0), a.addEventListener("mousedown", this.onMouse, !0), a.addEventListener("mouseup", this.onMouse, !0)), a.addEventListener("click", this.onClick, !0), a.addEventListener("touchstart", this.onTouchStart, !1), a.addEventListener("touchmove", this.onTouchMove, !1), a.addEventListener("touchend", this.onTouchEnd, !1), a.addEventListener("touchcancel", this.onTouchCancel, !1), Event.prototype.stopImmediatePropagation || (a.removeEventListener = function(b, c, d) {
        var e = Node.prototype.removeEventListener;
        "click" === b ? e.call(a, b, c.hijacked || c, d) : e.call(a, b, c, d)
    }, a.addEventListener = function(b, c, d) {
        var e = Node.prototype.addEventListener;
        "click" === b ? e.call(a, b, c.hijacked || (c.hijacked = function(a) {
            a.propagationStopped || c(a)
        }), d) : e.call(a, b, c, d)
    }), "function" == typeof a.onclick && (b = a.onclick, a.addEventListener("click", function(a) {
        b(a)
    }, !1), a.onclick = null))
}
function Emitter(a) {
    return a ? mixin(a) : void 0
}
function mixin(a) {
    for (var b in Emitter.prototype)
        a[b] = Emitter.prototype[b];
    return a
}
(function() {
    String.prototype.endsWith || (String.prototype.endsWith = function(a) {
        return -1 !== this.indexOf(a, this.length - a.length)
    }), String.prototype.trim || (String.prototype.trim = function() {
        return this.replace(/^\s+|\s+$/g, "")
    }), Array.prototype.indexOf || (Array.prototype.indexOf = function(a, b) {
        var c, d, e;
        if (void 0 === this || null === this)
            throw new TypeError('"this" is null or not defined');
        for (d = this.length >>> 0, b = +b || 0, 1 / 0 === Math.abs(b) && (b = 0), 0 > b && (b += d, 0 > b && (b = 0)), c = e = b; d >= b ? d > e : e > d; c = d >= b ? ++e : --e)
            if (this[c] === a)
                return c;
        return -1
    }), Function.prototype.bind || (Function.prototype.bind = function(a) {
        var b, c, d, e;
        if ("function" != typeof this)
            throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");
        return b = Array.prototype.slice.call(arguments, 1), e = this, d = function() {
        }, c = function() {
            return e.apply(this instanceof d && a ? this : a, b.concat(Array.prototype.slice.call(arguments)))
        }, d.prototype = this.prototype, c.prototype = new d, c
    }), Object.keys || (Object.keys = function() {
        "use strict";
        var a, b, c;
        return c = Object.prototype.hasOwnProperty, b = {"toString": null}.propertyIsEnumerable("toString") ? !1 : !0, a = ["toString", "toLocaleString", "valueOf", "hasOwnProperty", "isPrototypeOf", "propertyIsEnumerable", "constructor"], function(d) {
            var e, f, g, h, i, j, k;
            if ("object" != typeof d && ("function" != typeof d || null === d))
                throw new TypeError("Object.keys called on non-object");
            for (g = [], h = 0, j = d.length; j > h; h++)
                f = d[h], c.call(d, f) && g.push(f);
            if (b)
                for (i = 0, k = a.length; k > i; i++)
                    e = a[i], c.call(d, e) && g.push(e);
            return g
        }
    }.call(this)), window.getScreenSize = function(a, b) {
        return a.is(":visible") ? "small" : b.is(":visible") ? "tablet" : "desktop"
    }, window.elHasClass = function(a, b) {
        return (" " + a.className + " ").indexOf(" " + b + " ") > -1
    }, window.elRemoveClass = function(a, b) {
        return a.className = (" " + a.className + " ").replace(" " + b + " ", " ").trim()
    }
}).call(this), function() {
    var a, b;
    b = {"is_mobile": !1,"resize_delay": 400,"stored_values_prefix": "pa_","main_menu": {"accordion": !0,"animation_speed": 250,"store_state": !0,"store_state_key": "mmstate","disable_animation_on": [],"dropdown_close_delay": 300,"detect_active": !0,"detect_active_predicate": function(a, b) {
                return a === b
            }},"consts": {"COLORS": ["#71c73e", "#77b7c5", "#d54848", "#6c42e5", "#e8e64e", "#dd56e6", "#ecad3f", "#618b9d", "#b68b68", "#36a766", "#3156be", "#00b3ff", "#646464", "#a946e8", "#9d9d9d"]}}, a = function() {
        return this.init = [], this.plugins = {}, this.settings = {}, this.localStorageSupported = "undefined" != typeof window.Storage ? !0 : !1, this
    }, a.prototype.start = function(a, c) {
        return null == a && (a = []), null == c && (c = {}), window.onload = function(d) {
            return function() {
                var e, f, g, h;
                for ($("html").addClass("pxajs"), a.length > 0 && $.merge(d.init, a), d.settings = $.extend(!0, {}, b, c || {}), d.settings.is_mobile = /iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()), d.settings.is_mobile &&
                FastClick && FastClick.attach(document.body), h = d.init, f = 0, g = h.length; g > f; f++)
                    e = h[f], $.proxy(e, d)();
                return $(window).trigger("pa.loaded"), $(window).resize()
            }
        }(this), this
    }, a.prototype.addInitializer = function(a) {
        return this.init.push(a)
    }, a.prototype.initPlugin = function(a, b) {
        return this.plugins[a] = b, b.init ? b.init() : void 0
    }, a.prototype.storeValue = function(a, b, c) {
        var d;
        if (null == c && (c = !1), this.localStorageSupported && !c)
            try {
                return void window.localStorage.setItem(this.settings.stored_values_prefix + a, b)
            } catch (e) {
                d = e
            }
        return document.cookie = this.settings.stored_values_prefix + a + "=" + escape(b)
    }, a.prototype.storeValues = function(a, b) {
        var c, d, e, f;
        if (null == b && (b = !1), this.localStorageSupported && !b)
            try {
                for (d in a)
                    e = a[d], window.localStorage.setItem(this.settings.stored_values_prefix + d, e);
                return
            } catch (g) {
                c = g
            }
        f = [];
        for (d in a)
            e = a[d], f.push(document.cookie = this.settings.stored_values_prefix + d + "=" + escape(e));
        return f
    }, a.prototype.getStoredValue = function(a, b, c) {
        var d, e, f, g, h, i, j, k, l;
        if (null == b && (b = !1), null == c && (c = null), this.localStorageSupported && !b)
            try {
                return i = window.localStorage.getItem(this.settings.stored_values_prefix + a), i ? i : c
            } catch (m) {
                f = m
            }
        for (e = document.cookie.split(";"), k = 0, l = e.length; l > k; k++)
            if (d = e[k], h = d.indexOf("="), g = d.substr(0, h).replace(/^\s+|\s+$/g, ""), j = d.substr(h + 1).replace(/^\s+|\s+$/g, ""), g === this.settings.stored_values_prefix + a)
                return j;
        return c
    }, a.prototype.getStoredValues = function(a, b, c) {
        var d, e, f, g, h, i, j, k, l, m, n, o, p, q, r;
        for (null == b && (b = !1), null == c && (c = null), k = {}, m = 0, p = a.length; p > m; m++)
            h = a[m], k[h] = c;
        if (this.localStorageSupported && !b)
            try {
                for (n = 0, q = a.length; q > n; n++)
                    h = a[n], j = window.localStorage.getItem(this.settings.stored_values_prefix + h), j && (k[h] = j);
                return k
            } catch (s) {
                f = s
            }
        for (e = document.cookie.split(";"), o = 0, r = e.length; r > o; o++)
            d = e[o], i = d.indexOf("="), g = d.substr(0, i).replace(/^\s+|\s+$/g, ""), l = d.substr(i + 1).replace(/^\s+|\s+$/g, ""), g === this.settings.stored_values_prefix + h && (k[h] = l);
        return k
    }, a.Constructor = a, window.XdUI = new a
}.call(this), function() {
    var a;
    a = function(a) {
        var b;
        return b = null, function() {
            return b && clearTimeout(b), b = setTimeout(function() {
                return b = null, a.call(this)
            }, XdUI.settings.resize_delay)
        }
    }, XdUI.addInitializer(function() {
        var b, c, d, e;
        return e = null, d = $(window), b = $('<div id="small-screen-width-point" style="position:absolute;top:-10000px;width:10px;height:10px;background:#fff;"></div>'), c = $('<div id="tablet-screen-width-point" style="position:absolute;top:-10000px;width:10px;height:10px;background:#fff;"></div>'), $("body").append(b).append(c), d.on("resize", a(function() {
            return d.trigger("pa.resize"), b.is(":visible") ? ("small" !== e && d.trigger("pa.screen.small"), e = "small") : c.is(":visible") ? ("tablet" !== e && d.trigger("pa.screen.tablet"), e = "tablet") : ("desktop" !== e && d.trigger("pa.screen.desktop"), e = "desktop")
        }))
    })
}.call(this), FastClick.prototype.deviceIsAndroid = navigator.userAgent.indexOf("Android") > 0, FastClick.prototype.deviceIsIOS = /iP(ad|hone|od)/.test(navigator.userAgent), FastClick.prototype.deviceIsIOS4 = FastClick.prototype.deviceIsIOS && /OS 4_\d(_\d)?/.test(navigator.userAgent), FastClick.prototype.deviceIsIOSWithBadTarget = FastClick.prototype.deviceIsIOS && /OS ([6-9]|\d{2})_\d/.test(navigator.userAgent), FastClick.prototype.needsClick = function(a) {
    "use strict";
    switch (a.nodeName.toLowerCase()) {
        case "button":
        case "select":
        case "textarea":
            if (a.disabled)
                return !0;
            break;
        case "input":
            if (this.deviceIsIOS && "file" === a.type || a.disabled)
                return !0;
            break;
        case "label":
        case "video":
            return !0
    }
    return /\bneedsclick\b/.test(a.className)
}, FastClick.prototype.needsFocus = function(a) {
    "use strict";
    switch (a.nodeName.toLowerCase()) {
        case "textarea":
            return !0;
        case "select":
            return !this.deviceIsAndroid;
        case "input":
            switch (a.type) {
                case "button":
                case "checkbox":
                case "file":
                case "image":
                case "radio":
                case "submit":
                    return !1
            }
            return !a.disabled && !a.readOnly;
        default:
            return /\bneedsfocus\b/.test(a.className)
    }
}, FastClick.prototype.sendClick = function(a, b) {
    "use strict";
    var c, d;
    document.activeElement && document.activeElement !== a && document.activeElement.blur(), d = b.changedTouches[0], c = document.createEvent("MouseEvents"), c.initMouseEvent(this.determineEventType(a), !0, !0, window, 1, d.screenX, d.screenY, d.clientX, d.clientY, !1, !1, !1, !1, 0, null), c.forwardedTouchEvent = !0, a.dispatchEvent(c)
}, FastClick.prototype.determineEventType = function(a) {
    "use strict";
    return this.deviceIsAndroid && "select" === a.tagName.toLowerCase() ? "mousedown" : "click"
}, FastClick.prototype.focus = function(a) {
    "use strict";
    var b;
    this.deviceIsIOS && a.setSelectionRange && 0 !== a.type.indexOf("date") && "time" !== a.type ? (b = a.value.length, a.setSelectionRange(b, b)) : a.focus()
}, FastClick.prototype.updateScrollParent = function(a) {
    "use strict";
    var b, c;
    if (b = a.fastClickScrollParent, !b || !b.contains(a)) {
        c = a;
        do {
            if (c.scrollHeight > c.offsetHeight) {
                b = c, a.fastClickScrollParent = c;
                break
            }
            c = c.parentElement
        } while (c)
    }
    b && (b.fastClickLastScrollTop = b.scrollTop)
}, FastClick.prototype.getTargetElementFromEventTarget = function(a) {
    "use strict";
    return a.nodeType === Node.TEXT_NODE ? a.parentNode : a
}, FastClick.prototype.onTouchStart = function(a) {
    "use strict";
    var b, c, d;
    if (a.targetTouches.length > 1)
        return !0;
    if (b = this.getTargetElementFromEventTarget(a.target), c = a.targetTouches[0], this.deviceIsIOS) {
        if (d = window.getSelection(), d.rangeCount && !d.isCollapsed)
            return !0;
        if (!this.deviceIsIOS4) {
            if (c.identifier === this.lastTouchIdentifier)
                return a.preventDefault(), !1;
            this.lastTouchIdentifier = c.identifier, this.updateScrollParent(b)
        }
    }
    return this.trackingClick = !0, this.trackingClickStart = a.timeStamp, this.targetElement = b, this.touchStartX = c.pageX, this.touchStartY = c.pageY, a.timeStamp - this.lastClickTime < 200 && a.preventDefault(), !0
}, FastClick.prototype.touchHasMoved = function(a) {
    "use strict";
    var b = a.changedTouches[0], c = this.touchBoundary;
    return Math.abs(b.pageX - this.touchStartX) > c || Math.abs(b.pageY - this.touchStartY) > c ? !0 : !1
}, FastClick.prototype.onTouchMove = function(a) {
    "use strict";
    return this.trackingClick ? ((this.targetElement !== this.getTargetElementFromEventTarget(a.target) || this.touchHasMoved(a)) && (this.trackingClick = !1, this.targetElement = null), !0) : !0
}, FastClick.prototype.findControl = function(a) {
    "use strict";
    return void 0 !== a.control ? a.control : a.htmlFor ? document.getElementById(a.htmlFor) : a.querySelector("button, input:not([type=hidden]), keygen, meter, output, progress, select, textarea")
}, FastClick.prototype.onTouchEnd = function(a) {
    "use strict";
    var b, c, d, e, f, g = this.targetElement;
    if (!this.trackingClick)
        return !0;
    if (a.timeStamp - this.lastClickTime < 200)
        return this.cancelNextClick = !0, !0;
    if (this.cancelNextClick = !1, this.lastClickTime = a.timeStamp, c = this.trackingClickStart, this.trackingClick = !1, this.trackingClickStart = 0, this.deviceIsIOSWithBadTarget && (f = a.changedTouches[0], g = document.elementFromPoint(f.pageX - window.pageXOffset, f.pageY - window.pageYOffset) || g, g.fastClickScrollParent = this.targetElement.fastClickScrollParent), d = g.tagName.toLowerCase(), "label" === d) {
        if (b = this.findControl(g)) {
            if (this.focus(g), this.deviceIsAndroid)
                return !1;
            g = b
        }
    } else if (this.needsFocus(g))
        return a.timeStamp - c > 100 || this.deviceIsIOS && window.top !== window && "input" === d ? (this.targetElement = null, !1) : (this.focus(g), this.deviceIsIOS4 && "select" === d || (this.targetElement = null, a.preventDefault()), !1);
    return this.deviceIsIOS && !this.deviceIsIOS4 && (e = g.fastClickScrollParent, e && e.fastClickLastScrollTop !== e.scrollTop) ? !0 : (this.needsClick(g) || (a.preventDefault(), this.sendClick(g, a)), !1)
}, FastClick.prototype.onTouchCancel = function() {
    "use strict";
    this.trackingClick = !1, this.targetElement = null
}, FastClick.prototype.onMouse = function(a) {
    "use strict";
    return this.targetElement ? a.forwardedTouchEvent ? !0 : a.cancelable && (!this.needsClick(this.targetElement) || this.cancelNextClick) ? (a.stopImmediatePropagation ? a.stopImmediatePropagation() : a.propagationStopped = !0, a.stopPropagation(), a.preventDefault(), !1) : !0 : !0
}, FastClick.prototype.onClick = function(a) {
    "use strict";
    var b;
    return this.trackingClick ? (this.targetElement = null, this.trackingClick = !1, !0) : "submit" === a.target.type && 0 === a.detail ? !0 : (b = this.onMouse(a), b || (this.targetElement = null), b)
}, FastClick.prototype.destroy = function() {
    "use strict";
    var a = this.layer;
    this.deviceIsAndroid && (a.removeEventListener("mouseover", this.onMouse, !0), a.removeEventListener("mousedown", this.onMouse, !0), a.removeEventListener("mouseup", this.onMouse, !0)), a.removeEventListener("click", this.onClick, !0), a.removeEventListener("touchstart", this.onTouchStart, !1), a.removeEventListener("touchmove", this.onTouchMove, !1), a.removeEventListener("touchend", this.onTouchEnd, !1), a.removeEventListener("touchcancel", this.onTouchCancel, !1)
}, FastClick.notNeeded = function(a) {
    "use strict";
    var b, c;
    if ("undefined" == typeof window.ontouchstart)
        return !0;
    if (c = +(/Chrome\/([0-9]+)/.exec(navigator.userAgent) || [, 0])[1]) {
        if (!FastClick.prototype.deviceIsAndroid)
            return !0;
        if (b = document.querySelector("meta[name=viewport]")) {
            if (-1 !== b.content.indexOf("user-scalable=no"))
                return !0;
            if (c > 31 && window.innerWidth <= window.screen.width)
                return !0
        }
    }
    return "none" === a.style.msTouchAction ? !0 : !1
}, FastClick.attach = function(a) {
    "use strict";
    return new FastClick(a)
}, "undefined" != typeof define && define.amd ? define(function() {
    "use strict";
    return FastClick
}) : "undefined" != typeof module && module.exports ? (module.exports = FastClick.attach, module.exports.FastClick = FastClick) : window.FastClick = FastClick, function(a, b, c) {
    "use strict";
    var d = {"filterId": 0}, e = function(e, f) {
        var g = {"intensity": 5,"forceSVGUrl": !1}, h = c.extend(g, f);
        this.$elm = e instanceof c ? e : c(e);
        var i = !1, j = " -webkit- -moz- -o- -ms- ".split(" "), k = {}, l = function(a) {
            if (k[a] || "" === k[a])
                return k[a] + a;
            var c = b.createElement("div"), d = ["", "Moz", "Webkit", "O", "ms", "Khtml"];
            for (var e in d)
                if ("undefined" != typeof c.style[d[e] + a])
                    return k[a] = d[e], d[e] + a;
            return a.toLowerCase()
        }, m = function() {
            var a = b.createElement("div");
            return a.style.cssText = j.join("filter:blur(2px); "), !!a.style.length && (void 0 === b.documentMode || b.documentMode > 9)
        }(), n = function() {
            var a = !1;
            try {
                a = void 0 !== typeof SVGFEColorMatrixElement && 2 == SVGFEColorMatrixElement.SVG_FECOLORMATRIX_TYPE_SATURATE
            } catch (b) {
            }
            return a
        }(), o = function() {
            var a = "<svg id='vague-svg-blur' style='position:absolute;' width='0' height='0' ><filter id='blur-effect-id-" + d.filterId + "'><feGaussianBlur stdDeviation='" + h.intensity + "' /></filter></svg>";
            c("body").append(a)
        };
        return this.init = function() {
            n && o(), this.$elm.data("vague-filter-id", d.filterId), d.filterId++
        }, this.blur = function() {
            var b, c = a.location, d = h.forceSVGUrl ? c.protocol + "//" + c.host + c.pathname : "", e = this.$elm.data("vague-filter-id"), f = {};
            b = m ? "blur(" + h.intensity + "px)" : n ? "url(" + d + "#blur-effect-id-" + e + ")" : "progid:DXImageTransform.Microsoft.Blur(pixelradius=" + h.intensity + ")", f[l("Filter")] = b, this.$elm.css(f), i = !0
        }, this.unblur = function() {
            var a = {};
            a[l("Filter")] = "none", this.$elm.css(a), i = !1
        }, this.toggleblur = function() {
            i ? this.unblur() : this.blur()
        }, this.destroy = function() {
            n && c("filter#blur-effect-id-" + this.$elm.data("vague-filter-id")).parent().remove(), this.unblur()
        }, this.init()
    };
    c.fn.Vague = function(a) {
        return new e(this, a)
    }, a.Vague = e
}(window, document, jQuery), function(a) {
    "undefined" == typeof a.fn.each2 && a.extend(a.fn, {"each2": function(b) {
            for (var c = a([0]), d = -1, e = this.length; ++d < e && (c.context = c[0] = this[d]) && b.call(c[0], d, c) !== !1; )
                ;
            return this
        }})
}(jQuery), function() {
    XdUI.MainNavbar = function() {
        return this._scroller = !1, this._wheight = null, this.scroll_pos = 0, this
    }, XdUI.MainNavbar.prototype.init = function() {
        var a;
        return this.$navbar = $("#main-navbar"), this.$header = this.$navbar.find(".navbar-header"), this.$toggle = this.$navbar.find(".navbar-toggle:first"), this.$collapse = $("#main-navbar-collapse"), this.$collapse_div = this.$collapse.find("> div"), a = !1, $(window).on("pa.screen.small pa.screen.tablet", function(b) {
            return function() {
                return "fixed" === b.$navbar.css("position") && b._setupScroller(), a = !0
            }
        }(this)).on("pa.screen.desktop", function(b) {
            return function() {
                return b._removeScroller(), a = !1
            }
        }(this)), this.$navbar.on("click", ".nav-icon-btn.dropdown > .dropdown-toggle", function(b) {
            return a ? (b.preventDefault(), b.stopPropagation(), document.location.href = $(this).attr("href"), !1) : void 0
        })
    }, XdUI.MainNavbar.prototype._setupScroller = function() {
        return this._scroller ? void 0 : (this._scroller = !0, this.$collapse_div.pixelSlimScroll({}), this.$navbar.on("shown.bs.collapse.mn_collapse", $.proxy(function(a) {
            return function() {
                return a._updateCollapseHeight(), a._watchWindowHeight()
            }
        }(this), this)).on("hidden.bs.collapse.mn_collapse", $.proxy(function(a) {
            return function() {
                return a._wheight = null, a.$collapse_div.pixelSlimScroll({"scrollTo": "0px"})
            }
        }(this), this)).on("shown.bs.dropdown.mn_collapse", $.proxy(this._updateCollapseHeight, this)).on("hidden.bs.dropdown.mn_collapse", $.proxy(this._updateCollapseHeight, this)), this._updateCollapseHeight())
    }, XdUI.MainNavbar.prototype._removeScroller = function() {
        return this._scroller ? (this._wheight = null, this._scroller = !1, this.$collapse_div.pixelSlimScroll({"destroy": "destroy"}), this.$navbar.off("shown.bs.collapse.mn_collapse"), this.$navbar.off("hidden.bs.collapse.mn_collapse"), this.$navbar.off("shown.bs.dropdown.mn_collapse"), this.$navbar.off("hidden.bs.dropdown.mn_collapse"), this.$collapse.attr("style", "")) : void 0
    }, XdUI.MainNavbar.prototype._updateCollapseHeight = function() {
        var a, b, c;
        if (this._scroller)
            return c = $(window).innerHeight(), a = this.$header.outerHeight(), b = this.$collapse_div.scrollTop(), this.$collapse_div.css(a + this.$collapse_div.css({"max-height": "none"}).outerHeight() > c ? {"max-height": c - a} : {"max-height": "none"}), this.$collapse_div.pixelSlimScroll({"scrollTo": b + "px"})
    }, XdUI.MainNavbar.prototype._watchWindowHeight = function() {
        var a;
        return this._wheight = $(window).innerHeight(), a = function(b) {
            return function() {
                return null !== b._wheight ? (b._wheight !== $(window).innerHeight() && b._updateCollapseHeight(), b._wheight = $(window).innerHeight(), setTimeout(a, 100)) : void 0
            }
        }(this), window.setTimeout(a, 100)
    }, XdUI.MainNavbar.Constructor = XdUI.MainNavbar, XdUI.addInitializer(function() {
        return XdUI.initPlugin("main_navbar", new XdUI.MainNavbar)
    })
}.call(this), function() {
    XdUI.MainMenu = function() {
        return this._screen = null, this._last_screen = null, this._animate = !1, this._close_timer = null, this._dropdown_li = null, this._dropdown = null, this
    }, XdUI.MainMenu.prototype.init = function() {
        var a, b;
        return this.$menu = $("#main-menu"), this.$menu.length ? (this.$body = $("body"), this.menu = this.$menu[0], this.$ssw_point = $("#small-screen-width-point"), this.$tsw_point = $("#tablet-screen-width-point"), a = this, XdUI.settings.main_menu.store_state && (b = this._getMenuState(), document.body.className += " disable-mm-animation", null !== b && this.$body["collapsed" === b ? "addClass" : "removeClass"]("mmc"), setTimeout(function() {
            return function() {
                return elRemoveClass(document.body, "disable-mm-animation")
            }
        }(this), 20)), this.setupAnimation(), $(window).on("resize.pa.mm", $.proxy(this.onResize, this)), this.onResize(), this.$menu.find(".navigation > .mm-dropdown").addClass("mm-dropdown-root"), XdUI.settings.main_menu.detect_active && this.detectActiveItem(), $.support.transition && this.$menu.on("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", $.proxy(this._onAnimationEnd, this)), $("#main-menu-toggle").on("click", $.proxy(this.toggle, this)), $("#main-menu-inner").slimScroll({"height": "100%"}).on("slimscrolling", function(a) {
            return function() {
                return a.closeCurrentDropdown(!0)
            }
        }(this)), this.$menu.on("click", ".mm-dropdown > a", function() {
            var b;
            return b = this.parentNode, elHasClass(b, "mm-dropdown-root") && a._collapsed() ? elHasClass(b, "mmc-dropdown-open") ? elHasClass(b, "freeze") ? a.closeCurrentDropdown(!0) : a.freezeDropdown(b) : a.openDropdown(b, !0) : a.toggleSubmenu(b), !1
        }), this.$menu.find(".navigation").on("mouseenter.pa.mm-dropdown", ".mm-dropdown-root", function() {
            return a.clearCloseTimer(), a._dropdown_li !== this ? !a._collapsed() || a._dropdown_li && elHasClass(a._dropdown_li, "freeze") ? void 0 : a.openDropdown(this) : void 0
        }).on("mouseleave.pa.mm-dropdown", ".mm-dropdown-root", function() {
            return a._close_timer = setTimeout(function() {
                return a.closeCurrentDropdown()
            }, XdUI.settings.main_menu.dropdown_close_delay)
        }), this) : void 0
    }, XdUI.MainMenu.prototype._collapsed = function() {
        return "desktop" === this._screen && elHasClass(document.body, "mmc") || "desktop" !== this._screen && !elHasClass(document.body, "mme")
    }, XdUI.MainMenu.prototype.onResize = function() {
        return this._screen = getScreenSize(this.$ssw_point, this.$tsw_point), this._animate = -1 === XdUI.settings.main_menu.disable_animation_on.indexOf(screen), this._dropdown_li && this.closeCurrentDropdown(!0), ("small" === this._screen && this._last_screen !== this._screen || "tablet" === this._screen && "small" === this._last_screen) && (document.body.className += " disable-mm-animation", setTimeout(function() {
            return function() {
                return elRemoveClass(document.body, "disable-mm-animation")
            }
        }(this), 20)), this._last_screen = this._screen
    }, XdUI.MainMenu.prototype.clearCloseTimer = function() {
        return this._close_timer ? (clearTimeout(this._close_timer), this._close_timer = null) : void 0
    }, XdUI.MainMenu.prototype._onAnimationEnd = function(a) {
        return "desktop" === this._screen && "main-menu" === a.target.id ? $(window).trigger("resize") : void 0
    }, XdUI.MainMenu.prototype.toggle = function() {
        var a, b;
        return a = "small" === this._screen || "tablet" === this._screen ? "mme" : "mmc", elHasClass(document.body, a) ? elRemoveClass(document.body, a) : document.body.className += " " + a, "mmc" !== a ? (b = document.getElementById(""), $("#main-navbar-collapse").stop().removeClass("in collapsing").addClass("collapse")[0].style.height = "0px", $("#main-navbar .navbar-toggle").addClass("collapsed")) : (XdUI.settings.main_menu.store_state && this._storeMenuState(elHasClass(document.body, "mmc")), $.support.transition ? void 0 : $(window).trigger("resize"))
    }, XdUI.MainMenu.prototype.toggleSubmenu = function(a) {
        return this[elHasClass(a, "open") ? "collapseSubmenu" : "expandSubmenu"](a), !1
    }, XdUI.MainMenu.prototype.collapseSubmenu = function(a) {
        var b, c;
        return b = $(a), c = b.find("> ul"), this._animate ? c.animate({"height": 0}, XdUI.settings.main_menu.animation_speed, function() {
            return function() {
                return elRemoveClass(a, "open"), c.attr("style", ""), b.find(".mm-dropdown.open").removeClass("open").find("> ul").attr("style", "")
            }
        }(this)) : elRemoveClass(a, "open"), !1
    }, XdUI.MainMenu.prototype.expandSubmenu = function(a) {
        var b, c, d, e;
        return b = $(a), XdUI.settings.main_menu.accordion && this.collapseAllSubmenus(a), this._animate ? (c = b.find("> ul"), e = c[0], e.className += " get-height", d = c.height(), elRemoveClass(e, "get-height"), e.style.display = "block", e.style.height = "0px", a.className += " open", c.animate({"height": d}, XdUI.settings.main_menu.animation_speed, function() {
            return function() {
                return c.attr("style", "")
            }
        }(this))) : a.className += " open"
    }, XdUI.MainMenu.prototype.collapseAllSubmenus = function(a) {
        var b;
        return b = this, $(a).parent().find("> .mm-dropdown.open").each(function() {
            return b.collapseSubmenu(this)
        })
    }, XdUI.MainMenu.prototype.openDropdown = function(a, b) {
        var c, d, e, f, g, h, i, j, k, l, m;
        return null == b && (b = !1), this._dropdown_li && this.closeCurrentDropdown(b), c = $(a), e = c.find("> ul"), k = e[0], this._dropdown_li = a, this._dropdown = k, d = e.find("> .mmc-title"), d.length || (d = $('<div class="mmc-title"></div>').text(c.find("> a > .mm-text").text()), k.insertBefore(d[0], k.firstChild)), a.className += " mmc-dropdown-open", k.className += " mmc-dropdown-open-ul", j = c.position().top, elHasClass(document.body, "main-menu-fixed") ? (f = e.find(".mmc-wrapper"), f.length || (m = document.createElement("div"), m.className = "mmc-wrapper", m.style.overflow = "hidden", m.style.position = "relative", f = $(m), f.append(e.find("> li")), k.appendChild(m)), l = $(window).innerHeight(), i = d.outerHeight(), h = i + 3 * e.find(".mmc-wrapper > li").first().outerHeight(), j + h > l ? (g = j - $("#main-navbar").outerHeight(), k.className += " top", k.style.bottom = l - j - i + "px") : (g = l - j - i, k.style.top = j + "px"), elHasClass(k, "top") ? k.appendChild(d[0]) : k.insertBefore(d[0], k.firstChild), a.className += " slimscroll-attached", f[0].style.maxHeight = g - 10 + "px", f.pixelSlimScroll({})) : k.style.top = j + "px", b && this.freezeDropdown(a), b || e.on("mouseenter", function(a) {
            return function() {
                return a.clearCloseTimer()
            }
        }(this)).on("mouseleave", function(a) {
            return function() {
                return a._close_timer = setTimeout(function() {
                    return a.closeCurrentDropdown()
                }, XdUI.settings.main_menu.dropdown_close_delay)
            }
        }(this)), this.menu.appendChild(k)
    }, XdUI.MainMenu.prototype.closeCurrentDropdown = function(a) {
        var b, c;
        return null == a && (a = !1), !this._dropdown_li || elHasClass(this._dropdown_li, "freeze") && !a ? void 0 : (this.clearCloseTimer(), b = $(this._dropdown), elHasClass(this._dropdown_li, "slimscroll-attached") && (elRemoveClass(this._dropdown_li, "slimscroll-attached"), c = b.find(".mmc-wrapper"), c.pixelSlimScroll({"destroy": "destroy"}).find("> *").appendTo(b), c.remove()), this._dropdown_li.appendChild(this._dropdown), elRemoveClass(this._dropdown, "mmc-dropdown-open-ul"), elRemoveClass(this._dropdown, "top"), elRemoveClass(this._dropdown_li, "mmc-dropdown-open"), elRemoveClass(this._dropdown_li, "freeze"), $(this._dropdown_li).attr("style", ""), b.attr("style", "").off("mouseenter").off("mouseleave"), this._dropdown = null, this._dropdown_li = null)
    }, XdUI.MainMenu.prototype.freezeDropdown = function(a) {
        return a.className += " freeze"
    }, XdUI.MainMenu.prototype.setupAnimation = function() {
        var a, b, c, d;
        return c = document.body, d = XdUI.settings.main_menu.disable_animation_on, c.className += " dont-animate-mm-content", a = $("#main-menu"), b = a.find(".navigation"), b.find("> .mm-dropdown > ul").addClass("mmc-dropdown-delay animated"), b.find("> li > a > .mm-text").addClass("mmc-dropdown-delay animated fadeIn"), a.find(".menu-content").addClass("animated fadeIn"), b.find("> .mm-dropdown > ul").addClass(elHasClass(c, "main-menu-right") || elHasClass(c, "right-to-left") && !elHasClass(c, "main-menu-right") ? "fadeInRight" : "fadeInLeft"), c.className += -1 === d.indexOf("small") ? " animate-mm-sm" : " dont-animate-mm-content-sm", c.className += -1 === d.indexOf("tablet") ? " animate-mm-md" : " dont-animate-mm-content-md", c.className += -1 === d.indexOf("desktop") ? " animate-mm-lg" : " dont-animate-mm-content-lg", window.setTimeout(function() {
            return elRemoveClass(c, "dont-animate-mm-content")
        }, 500)
    }, XdUI.MainMenu.prototype.detectActiveItem = function() {
        var a, b, c, d, e, f, g, h, i;
        for (f = (document.location + "").replace(/\#.*?$/, ""), e = XdUI.settings.main_menu.detect_active_predicate, d = $("#main-menu .navigation"), d.find("li").removeClass("open active"), c = d[0].getElementsByTagName("a"), b = function() {
            return function(a) {
                return a.className += " active", elHasClass(a.parentNode, "navigation") ? void 0 : (a = a.parentNode.parentNode, a.className += " open", b(a))
            }
        }(this), i = [], g = 0, h = c.length; h > g; g++) {
            if (a = c[g], -1 === a.href.indexOf("#") && e(a.href, f)) {
                b(a.parentNode);
                break
            }
            i.push(void 0)
        }
        return i
    }, XdUI.MainMenu.prototype._getMenuState = function() {
        return XdUI.getStoredValue(XdUI.settings.main_menu.store_state_key, null)
    }, XdUI.MainMenu.prototype._storeMenuState = function(a) {
        return XdUI.settings.main_menu.store_state ? XdUI.storeValue(XdUI.settings.main_menu.store_state_key, a ? "collapsed" : "expanded") : void 0
    }, XdUI.MainMenu.Constructor = XdUI.MainMenu, XdUI.addInitializer(function() {
        return XdUI.initPlugin("main_menu", new XdUI.MainMenu)
    })
}.call(this), function() {
    var a, b;
    a = "pa-page-alerts-box", b = function() {
        return this
    }, b.DEFAULTS = {"type": "warning","close_btn": !0,"classes": !1,"namespace": "pa_page_alerts","animate": !0,"auto_close": !1}, b.TYPES_HASH = {"warning": "","danger": "alert-danger","success": "alert-success","info": "alert-info"}, b.prototype.init = function() {
        var b;
        return b = this, $("#main-wrapper").on("click.pa.alerts", "#" + a + " .close", function() {
            return b.close($(this).parents(".alert")), !1
        })
    }, b.prototype.add = function(c, d) {
        var e, f, g, h, i, j;
        return d = $.extend({}, b.DEFAULTS, d || {}), e = $('<div class="alert alert-page ' + d.namespace + " " + b.TYPES_HASH[d.type] + '" />').html(c), d.classes && e.addClass(d.classes), d.close_btn && e.prepend($('<button type="button" class="close" />').html("&times;")), d.animate && e.attr("data-animate", "true"), g = $("#" + a), g.length || (g = $('<div id="' + a + '" />').prependTo($("#content-wrapper"))), f = $("#" + a + " ." + d.namespace), h = e.css({"visibility": "hidden","position": "absolute","width": "100%"}).appendTo("body").outerHeight(), j = e.css("padding-top"), i = e.css("padding-bottom"), d.animate && e.attr("style", "").css({"overflow": "hidden","height": 0,"padding-top": 0,"padding-bottom": 0}), f.length ? f.last().after(e) : g.append(e), d.animate ? e.animate({"height": h,"padding-top": j,"padding-bottom": i}, 500, function(a) {
            return function() {
                return e.attr("style", ""), d.auto_close ? $.data(e, "timer", setTimeout(function() {
                    return a.close(e)
                }, 1e3 * d.auto_close)) : void 0
            }
        }(this)) : e.attr("style", "")
    }, b.prototype.close = function(a) {
        return "true" === a.attr("data-animate") ? a.animate({"height": 0,"padding-top": 0,"padding-bottom": 0}, 500, function() {
            return $.data(a, "timer") && clearTimeout($.data(a, "timer")), a.remove()
        }) : ($.data(a, "timer") && clearTimeout($.data(a, "timer")), a.remove())
    }, b.prototype.clear = function(b, c) {
        var d, e;
        return null == b && (b = !0), null == c && (c = "pa_page_alerts"), d = $("#" + a + " ." + c), d.length ? (e = this, b ? d.each(function() {
            return e.close($(this))
        }) : d.remove()) : void 0
    }, b.prototype.clearAll = function(b) {
        var c;
        return null == b && (b = !0), b ? (c = this, $("#" + a + " .alert").each(function() {
            return c.close($(this))
        })) : $("#" + a).remove()
    }, b.prototype.getContainerId = function() {
        return a
    }, b.Constructor = b, XdUI.addInitializer(function() {
        return XdUI.initPlugin("alerts", new b)
    })
}.call(this),  function() {
    var a, b, c, d, e, f;
    $.fn.modal && $.fn.Vague && $("html").hasClass("not-ie") && (e = $.fn.modal.Constructor.prototype.show, d = $.fn.modal.Constructor.prototype.hide, a = null, f = !1, c = function() {
        return f ? void 0 : (a || (a = $("#main-wrapper").Vague({"intensity": 3,"forceSVGUrl": !1})), a.blur(), f = !0)
    }, b = function() {
        return f ? (a && a.unblur(), f = !1) : void 0
    }, $.fn.modal.Constructor.prototype.show = function() {
        return e.call(this), this.$element.hasClass("modal-blur") ? ($("body").append(this.$element), "desktop" === getScreenSize($("#small-screen-width-point"), $("#tablet-screen-width-point")) && c(), $(window).on("pa.resize.modal_blur", function() {
            return "desktop" === getScreenSize($("#small-screen-width-point"), $("#tablet-screen-width-point")) ? c() : b()
        })) : b()
    }, $.fn.modal.Constructor.prototype.hide = function() {
        return d.call(this), b(), $(window).off("pa.resize.modal_blur").on("hidden", ".modal", function() {
            return alert("asd")
        })
    })
}.call(this);