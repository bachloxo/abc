$(document).ready(function() {
        var t = function() {
                var t = {
                    autoplay: 3e3,
                    longSwipesMs: 500,
                    preloadImages: !1,
                    lazyLoading: !0,
                    paginationClickable: !0,
                    spaceBetween: 0,
                    effect: "slide",
                    lazyLoadingOnTransitionStart: !0,
                    pagination: $(".home-slideshow-content").find(".swiper-pagination")
                };
                t.onLazyImageReady = function(e, t, i) {
                    $(".home-slideshow-content").find(".loader-circle").hide(), e.isEnd && $(".home-slideshow-content").find(".loader-circle").remove()
                }, t.onSlideChangeStart = function(e, t, i) {
                    $(".home-slideshow-nav .active-nav").removeClass("active-nav");
                    var n = $(".home-slideshow-nav .swiper-slide").eq(e.activeIndex).addClass("active-nav");
                    if (!n.hasClass("swiper-slide-visible"))
                        if (n.index() > a.activeIndex) {
                            var s = Math.floor(a.width / n.width()) - 1;
                            a.slideTo(n.index() - s)
                        } else a.slideTo(n.index());
                    $(".home-slideshow-content").find(".loader-circle").show()
                };
                var i, n = new Swiper($(".home-slideshow-content")[0], t),
                    a = new Swiper($(".home-slideshow-nav")[0], {
                        slidesPerView: "auto",
                        onClick: function(e, t) {
                            n.slideTo(e.clickedIndex)
                        }
                    });
                $(".home-slideshow-nav .swiper-slide").on("mouseover", function() {
                    n.stopAutoplay();
                    var e = this;
                    clearInterval(i), i = setTimeout(function() {
                        n.slideTo($(e).index())
                    }, 20)
                }), $(".home-slideshow-nav .swiper-slide").on("mouseout", function() {
                    n.startAutoplay()
                });
                var s = function() {
                    $(".home-slideshow-content")[0].swiper.params.direction = t.direction, $(".home-slideshow-content")[0].swiper.update(!0), $(".home-slideshow-content").removeClass("swiper-container-vertical swiper-container-horizontal"), $(".home-slideshow-content").addClass("swiper-container-" + t.direction)
                };
                e.register("screen and (min-width:320px) and (max-width:991px)", function() {
                    t.direction = "horizontal", s(), $(".home-slideshow-content .swiper-slide").each(function() {
                        $(this).height("auto")
                    })
                }).register("screen and (min-width:992px)", function() {
                    t.direction = "vertical", s()
                })
            },
            i = function() {
                var t = {
                    spaceBetween: 0,
                    effect: "slide",
                    loop: !0,
                    paginationClickable: !0,
                    preloadImages: !1,
                    lazyLoading: !0,
                    lazyLoadingOnTransitionStart: !0
                };
                $(".home-banner").each(function() {
                    var e = this;
                    t.nextButton = $(this).find(".swiper-button-next"), t.prevButton = $(this).find(".swiper-button-prev"), t.pagination = $(this).find(".swiper-pagination"), t.onSlideChangeStart = function(t, i, n) {
                        $(e).find(".loader-circle").show()
                    }, t.onLazyImageReady = function(t, i, n) {
                        $(e).find(".loader-circle").hide(), parseInt(t.activeIndex) === parseInt(t.bullets.length) && $(e).find(".loader-circle").remove()
                    }, t.onInit = function(e) {
                        $.each(e.slides, function(t) {
                            if ($(this).is("[title]")) {
                                var i = $(this).children("a").attr("title");
                                $(e.bullets[t]).attr("title", i)
                            }
                        }), $(e.container[0]).find(".swiper-pagination-bullet").tooltip({
                            container: "body"
                        })
                    };
                    new Swiper(this, t)
                });
                var i = function() {
                    $(".home-banner").each(function() {
                        $(this)[0].swiper.params.longSwipesMs = t.longSwipesMs, $(this)[0].swiper.update(!0)
                    })
                };
                e.register("screen and (min-width:320px) and (max-width:991px)", function() {
                    t.longSwipesMs = 500, i()
                }).register("screen and (min-width:992px)", function() {
                    t.longSwipesMs = 300, i()
                })
            },
            n = function() {
                var t = {
                    slidesPerView: 5,
                    slidesPerGroup: 5,
                    spaceBetween: 0,
                    preloadImages: !1,
                    lazyLoading: !0,
                    lazyLoadingOnTransitionStart: !0
                };
                $(".home-tabs .tab-pane.active").each(function() {
                    t.nextButton = $(this).find(".swiper-button-next"), t.prevButton = $(this).find(".swiper-button-prev");
                    new Swiper($(this).find(".home-product"), t)
                }), $(".home-tabs").on("shown.bs.tab", function(e) {
                    var i, n = $(this).find(".tab-pane.active");
                    "undefined" == typeof $(n).find(".home-product")[0].swiper ? (t.nextButton = $(n).find(".swiper-button-next"), t.prevButton = $(n).find(".swiper-button-prev"), i = new Swiper($(n).find(".home-product"), t)) : (i = $(n).find(".home-product"), $(i)[0].swiper.params.slidesPerView = t.slidesPerView, $(i)[0].swiper.params.slidesPerGroup = t.slidesPerGroup, $(i)[0].swiper.update(!0))
                });
                var i = function() {
                    $(".home-tabs .tab-pane.active .home-product").each(function() {
                        $(this)[0].swiper.params.slidesPerView = t.slidesPerView, $(this)[0].swiper.params.slidesPerGroup = t.slidesPerGroup, $(this)[0].swiper.update(!0)
                    })
                };
                e.register("screen and (min-width:320px) and (max-width:479px)", function() {
                    t.slidesPerView = 2, t.slidesPerGroup = 2, i()
                }).register("screen and (min-width:480px) and (max-width:639px)", function() {
                    t.slidesPerView = 3, t.slidesPerGroup = 3, i()
                }).register("screen and (min-width:640px) and (max-width:1199px)", function() {
                    t.slidesPerView = 4, t.slidesPerGroup = 4, i()
                }).register("screen and (min-width:1200px)", function() {
                    t.slidesPerView = 5, t.slidesPerGroup = 5, i()
                })
            };
        return {
            initialize: function() {
                $(".home-brand-item > a").hover(function() {
                    $(this).find(".image-1").toggle(), $(this).find(".image-2").toggle()
                }, function() {
                    $(this).find(".image-1").toggle(), $(this).find(".image-2").toggle()
                }), $(".home-tabs .nav-tabs").tabdrop(), t(), i(), n()
            }
        }
});