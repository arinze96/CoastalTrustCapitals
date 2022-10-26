(window.webpackJsonp_N_E = window.webpackJsonp_N_E || []).push([
  [8],
  {
    "60Bi": function (e, t, n) {
      "use strict";
      Object.defineProperty(t, "__esModule", { value: !0 });
      var o = (function () {
          function e(e, t) {
            for (var n = 0; n < t.length; n++) {
              var o = t[n];
              (o.enumerable = o.enumerable || !1),
                (o.configurable = !0),
                "value" in o && (o.writable = !0),
                Object.defineProperty(e, o.key, o);
            }
          }
          return function (t, n, o) {
            return n && e(t.prototype, n), o && e(t, o), t;
          };
        })(),
        a = l(n("q1tI")),
        s = l(n("Si88"));
      function l(e) {
        return e && e.__esModule ? e : { default: e };
      }
      var i = (function (e) {
        function t(e) {
          !(function (e, t) {
            if (!(e instanceof t))
              throw new TypeError("Cannot call a class as a function");
          })(this, t);
          var n = (function (e, t) {
            if (!e)
              throw new ReferenceError(
                "this hasn't been initialised - super() hasn't been called"
              );
            return !t || ("object" !== typeof t && "function" !== typeof t)
              ? e
              : t;
          })(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e));
          return (
            (n.state = { isOpen: !1 }),
            (n.closeModal = n.closeModal.bind(n)),
            (n.updateFocus = n.updateFocus.bind(n)),
            n
          );
        }
        return (
          (function (e, t) {
            if ("function" !== typeof t && null !== t)
              throw new TypeError(
                "Super expression must either be null or a function, not " +
                  typeof t
              );
            (e.prototype = Object.create(t && t.prototype, {
              constructor: {
                value: e,
                enumerable: !1,
                writable: !0,
                configurable: !0,
              },
            })),
              t &&
                (Object.setPrototypeOf
                  ? Object.setPrototypeOf(e, t)
                  : (e.__proto__ = t));
          })(t, e),
          o(
            t,
            [
              {
                key: "openModal",
                value: function () {
                  this.setState({ isOpen: !0 });
                },
              },
              {
                key: "closeModal",
                value: function () {
                  this.setState({ isOpen: !1 }),
                    "function" === typeof this.props.onClose &&
                      this.props.onClose();
                },
              },
              {
                key: "keydownHandler",
                value: function (e) {
                  27 === e.keyCode && this.closeModal();
                },
              },
              {
                key: "componentDidMount",
                value: function () {
                  document.addEventListener(
                    "keydown",
                    this.keydownHandler.bind(this)
                  );
                },
              },
              {
                key: "componentWillUnmount",
                value: function () {
                  document.removeEventListener(
                    "keydown",
                    this.keydownHandler.bind(this)
                  );
                },
              },
              {
                key: "componentDidUpdate",
                value: function () {
                  this.state.isOpen && this.modal && this.modal.focus();
                },
              },
              {
                key: "updateFocus",
                value: function (e) {
                  9 === e.keyCode &&
                    (e.preventDefault(),
                    e.stopPropagation(),
                    this.modal === document.activeElement
                      ? this.modalbtn.focus()
                      : this.modal.focus());
                },
              },
              {
                key: "getQueryString",
                value: function (e) {
                  var t = "";
                  for (var n in e)
                    e.hasOwnProperty(n) &&
                      null !== e[n] &&
                      (t += n + "=" + e[n] + "&");
                  return t.substr(0, t.length - 1);
                },
              },
              {
                key: "getYoutubeUrl",
                value: function (e, t) {
                  return (
                    "//www.youtube.com/embed/" +
                    t +
                    "?" +
                    this.getQueryString(e)
                  );
                },
              },
              {
                key: "getVimeoUrl",
                value: function (e, t) {
                  return (
                    "//player.vimeo.com/video/" +
                    t +
                    "?" +
                    this.getQueryString(e)
                  );
                },
              },
              {
                key: "getYoukuUrl",
                value: function (e, t) {
                  return (
                    "//player.youku.com/embed/" +
                    t +
                    "?" +
                    this.getQueryString(e)
                  );
                },
              },
              {
                key: "getVideoUrl",
                value: function (e, t) {
                  return "youtube" === e.channel
                    ? this.getYoutubeUrl(e.youtube, t)
                    : "vimeo" === e.channel
                    ? this.getVimeoUrl(e.vimeo, t)
                    : "youku" === e.channel
                    ? this.getYoukuUrl(e.youku, t)
                    : "custom" === e.channel
                    ? e.url
                    : void 0;
                },
              },
              {
                key: "getPadding",
                value: function (e) {
                  var t = e.split(":"),
                    n = Number(t[0]);
                  return (100 * Number(t[1])) / n + "%";
                },
              },
              {
                key: "render",
                value: function () {
                  var e = this,
                    t = { paddingBottom: this.getPadding(this.props.ratio) };
                  return a.default.createElement(
                    s.default,
                    {
                      classNames: this.props.classNames.modalVideoEffect,
                      timeout: this.props.animationSpeed,
                    },
                    function () {
                      return e.state.isOpen
                        ? a.default.createElement(
                            "div",
                            {
                              className: e.props.classNames.modalVideo,
                              tabIndex: "-1",
                              role: "dialog",
                              "aria-label": e.props.aria.openMessage,
                              onClick: e.closeModal,
                              ref: function (t) {
                                e.modal = t;
                              },
                              onKeyDown: e.updateFocus,
                            },
                            a.default.createElement(
                              "div",
                              { className: e.props.classNames.modalVideoBody },
                              a.default.createElement(
                                "div",
                                {
                                  className: e.props.classNames.modalVideoInner,
                                },
                                a.default.createElement(
                                  "div",
                                  {
                                    className:
                                      e.props.classNames.modalVideoIframeWrap,
                                    style: t,
                                  },
                                  a.default.createElement("button", {
                                    className:
                                      e.props.classNames.modalVideoCloseBtn,
                                    "aria-label":
                                      e.props.aria.dismissBtnMessage,
                                    ref: function (t) {
                                      e.modalbtn = t;
                                    },
                                    onKeyDown: e.updateFocus,
                                  }),
                                  e.props.children ||
                                    a.default.createElement("iframe", {
                                      width: "460",
                                      height: "230",
                                      src: e.getVideoUrl(
                                        e.props,
                                        e.props.videoId
                                      ),
                                      frameBorder: "0",
                                      allow:
                                        "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture",
                                      allowFullScreen: e.props.allowFullScreen,
                                      tabIndex: "-1",
                                    })
                                )
                              )
                            )
                          )
                        : null;
                    }
                  );
                },
              },
            ],
            [
              {
                key: "getDerivedStateFromProps",
                value: function (e) {
                  return { isOpen: e.isOpen };
                },
              },
            ]
          ),
          t
        );
      })(a.default.Component);
      (t.default = i),
        (i.defaultProps = {
          channel: "youtube",
          isOpen: !1,
          youtube: {
            autoplay: 1,
            cc_load_policy: 1,
            color: null,
            controls: 1,
            disablekb: 0,
            enablejsapi: 0,
            end: null,
            fs: 1,
            h1: null,
            iv_load_policy: 1,
            list: null,
            listType: null,
            loop: 0,
            modestbranding: null,
            origin: null,
            playlist: null,
            playsinline: null,
            rel: 0,
            showinfo: 1,
            start: 0,
            wmode: "transparent",
            theme: "dark",
            mute: 0,
          },
          ratio: "16:9",
          vimeo: {
            api: !1,
            autopause: !0,
            autoplay: !0,
            byline: !0,
            callback: null,
            color: null,
            height: null,
            loop: !1,
            maxheight: null,
            maxwidth: null,
            player_id: null,
            portrait: !0,
            title: !0,
            width: null,
            xhtml: !1,
          },
          youku: { autoplay: 1, show_related: 0 },
          allowFullScreen: !0,
          animationSpeed: 300,
          classNames: {
            modalVideoEffect: "modal-video-effect",
            modalVideo: "modal-video",
            modalVideoClose: "modal-video-close",
            modalVideoBody: "modal-video-body",
            modalVideoInner: "modal-video-inner",
            modalVideoIframeWrap: "modal-video-movie-wrap",
            modalVideoCloseBtn: "modal-video-close-btn",
          },
          aria: {
            openMessage: "You just openned the modal video",
            dismissBtnMessage: "Close the modal by clicking here",
          },
        });
    },
    LKaZ: function (e, t, n) {
      "use strict";
      var o = n("q1tI"),
        a = n.n(o),
        s = n("YFqc"),
        l = n.n(s),
        i = a.a.createElement;
      t.a = function () {
        return i(
          "div",
          { className: "blog-area pt-100 pb-70" },
          i(
            "div",
            { className: "container" },
            i(
              "div",
              { className: "section-title" },
              i("span", { className: "top-title" }, "News"),
              i("h2", null, "Our Latest News"),
              i(
                "p",
                null,
                ""
              )
            ),
            i(
              "div",
              { className: "row" },
              i(
                "div",
                { className: "col-lg-4 col-md-6" },
                i(
                  "div",
                  { className: "single-blog" },
                  i(
                    l.a,
                    { href: "#" },
                    i(
                      "a",
                      null,
                      i("img", { src: "/img/blog/blog1.jpg", alt: "Image" })
                    )
                  ),
                  i("span", null, "27 July 2022"),
                  i(
                    "div",
                    { className: "blog-content" },
                    i(
                      "ul",
                      null,
                      i("li", null, i("a", { href: "#" }, "Medical"))
                    ),
                    i(
                      l.a,
                      { href: "#" },
                      i(
                        "a",
                        null,
                        i("h3", null, "250+ Medical Tips We just had to share")
                      )
                    ),
                    
                  )
                )
              ),
              i(
                "div",
                { className: "col-lg-4 col-md-6" },
                i(
                  "div",
                  { className: "single-blog" },
                  i(
                    l.a,
                    { href: "#" },
                    i(
                      "a",
                      null,
                      i("img", { src: "/img/blog/blog2.jpg", alt: "Image" })
                    )
                  ),
                  i("span", null, "11 May 2022"),
                  i(
                    "div",
                    { className: "blog-content" },
                    i(
                      "ul",
                      null,
                      i("li", null, i("a", { href: "#" }, "Treatment"))
                    ),
                    i(
                      l.a,
                      { href: "#" },
                      i(
                        "a",
                        null,
                        i(
                          "h3",
                          null,
                          "What Can I Do To Prevent Myself & prevent Disease"
                        )
                      )
                    ),
                    
                  )
                )
              ),
              i(
                "div",
                { className: "col-lg-4 col-md-6 offset-md-3 offset-lg-0" },
                i(
                  "div",
                  { className: "single-blog" },
                  i(
                    l.a,
                    { href: "#" },
                    i(
                      "a",
                      null,
                      i("img", { src: "/img/blog/blog3.jpg", alt: "Image" })
                    )
                  ),
                  i("span", null, "13 Sept 2022"),
                  i(
                    "div",
                    { className: "blog-content" },
                    i(
                      "ul",
                      null,
                      i("li", null, i("a", { href: "#" }, "COVID-19"))
                    ),
                    i(
                      l.a,
                      { href: "#" },
                      i(
                        "a",
                        null,
                        i(
                          "h3",
                          null,
                          "CCU For Emergency  Services  & Medical support"
                        )
                      )
                    ),
                    
                  )
                )
              )
            )
          )
        );
      };
    },
    S3Uj: function (e, t, n) {
      "use strict";
      (t.__esModule = !0),
        (t.default =
          t.EXITING =
          t.ENTERED =
          t.ENTERING =
          t.EXITED =
          t.UNMOUNTED =
            void 0);
      var o = (function (e) {
          if (e && e.__esModule) return e;
          var t = {};
          if (null != e)
            for (var n in e)
              if (Object.prototype.hasOwnProperty.call(e, n)) {
                var o =
                  Object.defineProperty && Object.getOwnPropertyDescriptor
                    ? Object.getOwnPropertyDescriptor(e, n)
                    : {};
                o.get || o.set ? Object.defineProperty(t, n, o) : (t[n] = e[n]);
              }
          return (t.default = e), t;
        })(n("17x9")),
        a = i(n("q1tI")),
        s = i(n("i8i4")),
        l = n("VCL8");
      n("xfxO");
      function i(e) {
        return e && e.__esModule ? e : { default: e };
      }
      t.UNMOUNTED = "unmounted";
      t.EXITED = "exited";
      t.ENTERING = "entering";
      t.ENTERED = "entered";
      t.EXITING = "exiting";
      var r = (function (e) {
        var t, n;
        function o(t, n) {
          var o;
          o = e.call(this, t, n) || this;
          var a,
            s = n.transitionGroup,
            l = s && !s.isMounting ? t.enter : t.appear;
          return (
            (o.appearStatus = null),
            t.in
              ? l
                ? ((a = "exited"), (o.appearStatus = "entering"))
                : (a = "entered")
              : (a =
                  t.unmountOnExit || t.mountOnEnter ? "unmounted" : "exited"),
            (o.state = { status: a }),
            (o.nextCallback = null),
            o
          );
        }
        (n = e),
          ((t = o).prototype = Object.create(n.prototype)),
          (t.prototype.constructor = t),
          (t.__proto__ = n);
        var l = o.prototype;
        return (
          (l.getChildContext = function () {
            return { transitionGroup: null };
          }),
          (o.getDerivedStateFromProps = function (e, t) {
            return e.in && "unmounted" === t.status
              ? { status: "exited" }
              : null;
          }),
          (l.componentDidMount = function () {
            this.updateStatus(!0, this.appearStatus);
          }),
          (l.componentDidUpdate = function (e) {
            var t = null;
            if (e !== this.props) {
              var n = this.state.status;
              this.props.in
                ? "entering" !== n && "entered" !== n && (t = "entering")
                : ("entering" !== n && "entered" !== n) || (t = "exiting");
            }
            this.updateStatus(!1, t);
          }),
          (l.componentWillUnmount = function () {
            this.cancelNextCallback();
          }),
          (l.getTimeouts = function () {
            var e,
              t,
              n,
              o = this.props.timeout;
            return (
              (e = t = n = o),
              null != o &&
                "number" !== typeof o &&
                ((e = o.exit),
                (t = o.enter),
                (n = void 0 !== o.appear ? o.appear : t)),
              { exit: e, enter: t, appear: n }
            );
          }),
          (l.updateStatus = function (e, t) {
            if ((void 0 === e && (e = !1), null !== t)) {
              this.cancelNextCallback();
              var n = s.default.findDOMNode(this);
              "entering" === t ? this.performEnter(n, e) : this.performExit(n);
            } else
              this.props.unmountOnExit &&
                "exited" === this.state.status &&
                this.setState({ status: "unmounted" });
          }),
          (l.performEnter = function (e, t) {
            var n = this,
              o = this.props.enter,
              a = this.context.transitionGroup
                ? this.context.transitionGroup.isMounting
                : t,
              s = this.getTimeouts(),
              l = a ? s.appear : s.enter;
            t || o
              ? (this.props.onEnter(e, a),
                this.safeSetState({ status: "entering" }, function () {
                  n.props.onEntering(e, a),
                    n.onTransitionEnd(e, l, function () {
                      n.safeSetState({ status: "entered" }, function () {
                        n.props.onEntered(e, a);
                      });
                    });
                }))
              : this.safeSetState({ status: "entered" }, function () {
                  n.props.onEntered(e);
                });
          }),
          (l.performExit = function (e) {
            var t = this,
              n = this.props.exit,
              o = this.getTimeouts();
            n
              ? (this.props.onExit(e),
                this.safeSetState({ status: "exiting" }, function () {
                  t.props.onExiting(e),
                    t.onTransitionEnd(e, o.exit, function () {
                      t.safeSetState({ status: "exited" }, function () {
                        t.props.onExited(e);
                      });
                    });
                }))
              : this.safeSetState({ status: "exited" }, function () {
                  t.props.onExited(e);
                });
          }),
          (l.cancelNextCallback = function () {
            null !== this.nextCallback &&
              (this.nextCallback.cancel(), (this.nextCallback = null));
          }),
          (l.safeSetState = function (e, t) {
            (t = this.setNextCallback(t)), this.setState(e, t);
          }),
          (l.setNextCallback = function (e) {
            var t = this,
              n = !0;
            return (
              (this.nextCallback = function (o) {
                n && ((n = !1), (t.nextCallback = null), e(o));
              }),
              (this.nextCallback.cancel = function () {
                n = !1;
              }),
              this.nextCallback
            );
          }),
          (l.onTransitionEnd = function (e, t, n) {
            this.setNextCallback(n);
            var o = null == t && !this.props.addEndListener;
            e && !o
              ? (this.props.addEndListener &&
                  this.props.addEndListener(e, this.nextCallback),
                null != t && setTimeout(this.nextCallback, t))
              : setTimeout(this.nextCallback, 0);
          }),
          (l.render = function () {
            var e = this.state.status;
            if ("unmounted" === e) return null;
            var t = this.props,
              n = t.children,
              o = (function (e, t) {
                if (null == e) return {};
                var n,
                  o,
                  a = {},
                  s = Object.keys(e);
                for (o = 0; o < s.length; o++)
                  (n = s[o]), t.indexOf(n) >= 0 || (a[n] = e[n]);
                return a;
              })(t, ["children"]);
            if (
              (delete o.in,
              delete o.mountOnEnter,
              delete o.unmountOnExit,
              delete o.appear,
              delete o.enter,
              delete o.exit,
              delete o.timeout,
              delete o.addEndListener,
              delete o.onEnter,
              delete o.onEntering,
              delete o.onEntered,
              delete o.onExit,
              delete o.onExiting,
              delete o.onExited,
              "function" === typeof n)
            )
              return n(e, o);
            var s = a.default.Children.only(n);
            return a.default.cloneElement(s, o);
          }),
          o
        );
      })(a.default.Component);
      function u() {}
      (r.contextTypes = { transitionGroup: o.object }),
        (r.childContextTypes = { transitionGroup: function () {} }),
        (r.propTypes = {}),
        (r.defaultProps = {
          in: !1,
          mountOnEnter: !1,
          unmountOnExit: !1,
          appear: !1,
          enter: !0,
          exit: !0,
          onEnter: u,
          onEntering: u,
          onEntered: u,
          onExit: u,
          onExiting: u,
          onExited: u,
        }),
        (r.UNMOUNTED = 0),
        (r.EXITED = 1),
        (r.ENTERING = 2),
        (r.ENTERED = 3),
        (r.EXITING = 4);
      var c = (0, l.polyfill)(r);
      t.default = c;
    },
    Si88: function (e, t, n) {
      "use strict";
      (t.__esModule = !0), (t.default = void 0);
      !(function (e) {
        if (e && e.__esModule) return e;
        var t = {};
        if (null != e)
          for (var n in e)
            if (Object.prototype.hasOwnProperty.call(e, n)) {
              var o =
                Object.defineProperty && Object.getOwnPropertyDescriptor
                  ? Object.getOwnPropertyDescriptor(e, n)
                  : {};
              o.get || o.set ? Object.defineProperty(t, n, o) : (t[n] = e[n]);
            }
        t.default = e;
      })(n("17x9"));
      var o = i(n("ycFn")),
        a = i(n("VOcB")),
        s = i(n("q1tI")),
        l = i(n("S3Uj"));
      n("xfxO");
      function i(e) {
        return e && e.__esModule ? e : { default: e };
      }
      function r() {
        return (r =
          Object.assign ||
          function (e) {
            for (var t = 1; t < arguments.length; t++) {
              var n = arguments[t];
              for (var o in n)
                Object.prototype.hasOwnProperty.call(n, o) && (e[o] = n[o]);
            }
            return e;
          }).apply(this, arguments);
      }
      var u = function (e, t) {
          return (
            e &&
            t &&
            t.split(" ").forEach(function (t) {
              return (0, o.default)(e, t);
            })
          );
        },
        c = function (e, t) {
          return (
            e &&
            t &&
            t.split(" ").forEach(function (t) {
              return (0, a.default)(e, t);
            })
          );
        },
        p = (function (e) {
          var t, n;
          function o() {
            for (
              var t, n = arguments.length, o = new Array(n), a = 0;
              a < n;
              a++
            )
              o[a] = arguments[a];
            return (
              ((t = e.call.apply(e, [this].concat(o)) || this).onEnter =
                function (e, n) {
                  var o = t.getClassNames(n ? "appear" : "enter").className;
                  t.removeClasses(e, "exit"),
                    u(e, o),
                    t.props.onEnter && t.props.onEnter(e, n);
                }),
              (t.onEntering = function (e, n) {
                var o = t.getClassNames(n ? "appear" : "enter").activeClassName;
                t.reflowAndAddClass(e, o),
                  t.props.onEntering && t.props.onEntering(e, n);
              }),
              (t.onEntered = function (e, n) {
                var o = t.getClassNames("appear").doneClassName,
                  a = t.getClassNames("enter").doneClassName,
                  s = n ? o + " " + a : a;
                t.removeClasses(e, n ? "appear" : "enter"),
                  u(e, s),
                  t.props.onEntered && t.props.onEntered(e, n);
              }),
              (t.onExit = function (e) {
                var n = t.getClassNames("exit").className;
                t.removeClasses(e, "appear"),
                  t.removeClasses(e, "enter"),
                  u(e, n),
                  t.props.onExit && t.props.onExit(e);
              }),
              (t.onExiting = function (e) {
                var n = t.getClassNames("exit").activeClassName;
                t.reflowAndAddClass(e, n),
                  t.props.onExiting && t.props.onExiting(e);
              }),
              (t.onExited = function (e) {
                var n = t.getClassNames("exit").doneClassName;
                t.removeClasses(e, "exit"),
                  u(e, n),
                  t.props.onExited && t.props.onExited(e);
              }),
              (t.getClassNames = function (e) {
                var n = t.props.classNames,
                  o = "string" === typeof n,
                  a = o ? (o && n ? n + "-" : "") + e : n[e];
                return {
                  className: a,
                  activeClassName: o ? a + "-active" : n[e + "Active"],
                  doneClassName: o ? a + "-done" : n[e + "Done"],
                };
              }),
              t
            );
          }
          (n = e),
            ((t = o).prototype = Object.create(n.prototype)),
            (t.prototype.constructor = t),
            (t.__proto__ = n);
          var a = o.prototype;
          return (
            (a.removeClasses = function (e, t) {
              var n = this.getClassNames(t),
                o = n.className,
                a = n.activeClassName,
                s = n.doneClassName;
              o && c(e, o), a && c(e, a), s && c(e, s);
            }),
            (a.reflowAndAddClass = function (e, t) {
              t && (e && e.scrollTop, u(e, t));
            }),
            (a.render = function () {
              var e = r({}, this.props);
              return (
                delete e.classNames,
                s.default.createElement(
                  l.default,
                  r({}, e, {
                    onEnter: this.onEnter,
                    onEntered: this.onEntered,
                    onEntering: this.onEntering,
                    onExit: this.onExit,
                    onExiting: this.onExiting,
                    onExited: this.onExited,
                  })
                )
              );
            }),
            o
          );
        })(s.default.Component);
      (p.defaultProps = { classNames: "" }), (p.propTypes = {});
      var d = p;
      (t.default = d), (e.exports = t.default);
    },
    VCL8: function (e, t, n) {
      "use strict";
      function o() {
        var e = this.constructor.getDerivedStateFromProps(
          this.props,
          this.state
        );
        null !== e && void 0 !== e && this.setState(e);
      }
      function a(e) {
        this.setState(
          function (t) {
            var n = this.constructor.getDerivedStateFromProps(e, t);
            return null !== n && void 0 !== n ? n : null;
          }.bind(this)
        );
      }
      function s(e, t) {
        try {
          var n = this.props,
            o = this.state;
          (this.props = e),
            (this.state = t),
            (this.__reactInternalSnapshotFlag = !0),
            (this.__reactInternalSnapshot = this.getSnapshotBeforeUpdate(n, o));
        } finally {
          (this.props = n), (this.state = o);
        }
      }
      function l(e) {
        var t = e.prototype;
        if (!t || !t.isReactComponent)
          throw new Error("Can only polyfill class components");
        if (
          "function" !== typeof e.getDerivedStateFromProps &&
          "function" !== typeof t.getSnapshotBeforeUpdate
        )
          return e;
        var n = null,
          l = null,
          i = null;
        if (
          ("function" === typeof t.componentWillMount
            ? (n = "componentWillMount")
            : "function" === typeof t.UNSAFE_componentWillMount &&
              (n = "UNSAFE_componentWillMount"),
          "function" === typeof t.componentWillReceiveProps
            ? (l = "componentWillReceiveProps")
            : "function" === typeof t.UNSAFE_componentWillReceiveProps &&
              (l = "UNSAFE_componentWillReceiveProps"),
          "function" === typeof t.componentWillUpdate
            ? (i = "componentWillUpdate")
            : "function" === typeof t.UNSAFE_componentWillUpdate &&
              (i = "UNSAFE_componentWillUpdate"),
          null !== n || null !== l || null !== i)
        ) {
          var r = e.displayName || e.name,
            u =
              "function" === typeof e.getDerivedStateFromProps
                ? "getDerivedStateFromProps()"
                : "getSnapshotBeforeUpdate()";
          throw Error(
            "Unsafe legacy lifecycles will not be called for components using new component APIs.\n\n" +
              r +
              " uses " +
              u +
              " but also contains the following legacy lifecycles:" +
              (null !== n ? "\n  " + n : "") +
              (null !== l ? "\n  " + l : "") +
              (null !== i ? "\n  " + i : "") +
              "\n\nThe above lifecycles should be removed. Learn more about this warning here:\nhttps://fb.me/react-async-component-lifecycle-hooks"
          );
        }
        if (
          ("function" === typeof e.getDerivedStateFromProps &&
            ((t.componentWillMount = o), (t.componentWillReceiveProps = a)),
          "function" === typeof t.getSnapshotBeforeUpdate)
        ) {
          if ("function" !== typeof t.componentDidUpdate)
            throw new Error(
              "Cannot polyfill getSnapshotBeforeUpdate() for components that do not define componentDidUpdate() on the prototype"
            );
          t.componentWillUpdate = s;
          var c = t.componentDidUpdate;
          t.componentDidUpdate = function (e, t, n) {
            var o = this.__reactInternalSnapshotFlag
              ? this.__reactInternalSnapshot
              : n;
            c.call(this, e, t, o);
          };
        }
        return e;
      }
      n.r(t),
        n.d(t, "polyfill", function () {
          return l;
        }),
        (o.__suppressDeprecationWarning = !0),
        (a.__suppressDeprecationWarning = !0),
        (s.__suppressDeprecationWarning = !0);
    },
    VOcB: function (e, t, n) {
      "use strict";
      function o(e, t) {
        return e
          .replace(new RegExp("(^|\\s)" + t + "(?:\\s|$)", "g"), "$1")
          .replace(/\s+/g, " ")
          .replace(/^\s*|\s*$/g, "");
      }
      e.exports = function (e, t) {
        e.classList
          ? e.classList.remove(t)
          : "string" === typeof e.className
          ? (e.className = o(e.className, t))
          : e.setAttribute(
              "class",
              o((e.className && e.className.baseVal) || "", t)
            );
      };
    },
    xfxO: function (e, t, n) {
      "use strict";
      (t.__esModule = !0), (t.classNamesShape = t.timeoutsShape = void 0);
      var o;
      (o = n("17x9")) && o.__esModule;
      t.timeoutsShape = null;
      t.classNamesShape = null;
    },
    yD6e: function (e, t, n) {
      "use strict";
      (t.__esModule = !0),
        (t.default = function (e, t) {
          return e.classList
            ? !!t && e.classList.contains(t)
            : -1 !==
                (" " + (e.className.baseVal || e.className) + " ").indexOf(
                  " " + t + " "
                );
        }),
        (e.exports = t.default);
    },
    ycFn: function (e, t, n) {
      "use strict";
      var o = n("TqRt");
      (t.__esModule = !0),
        (t.default = function (e, t) {
          e.classList
            ? e.classList.add(t)
            : (0, a.default)(e, t) ||
              ("string" === typeof e.className
                ? (e.className = e.className + " " + t)
                : e.setAttribute(
                    "class",
                    ((e.className && e.className.baseVal) || "") + " " + t
                  ));
        });
      var a = o(n("yD6e"));
      e.exports = t.default;
    },
  },
]);
