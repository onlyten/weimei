/*
 * ***********************************************
 * ****************** 通用规则 *******************
 * ***********************************************
 */
$(function(){
    $('#content').css({'padding-bottom': $('footer>ul').outerHeight()});
    var $body = $('body'), $doc = $(document);
    var bodyHeight = $body.height(), docHeight = $doc.height();
    if (docHeight > bodyHeight) {
        $body.height(docHeight)
    }

    $(document).on('click', function(e){
        if ($(e.target).isChildAndSelfOf('input[type="text"], input[type="number"], input[type="password"], textarea') == true) {
                $('footer').addClass('pull');
        } else {
            setTimeout(function(){
                $('footer').removeClass('pull');
            }, 200);
        }
    });
    jQuery.fn.isChildAndSelfOf = function(e){
        return (this.closest(e).length > 0);
    };
    jQuery.fn.isChildOf = function(e){
        return (this.parents(e).length > 0);
    };

    if (typeof Swiper == 'function') {
        // .
        if (typeof __CELL__ == 'undefined') __CELL__ = 0;
        var mySwiperNav = new Swiper('#swiper-nav', {
            onlyExternal : true,
            watchSlidesProgress : true,
            watchSlidesVisibility : true,
            slidesPerView : __CELL__,
            onTap: function(){
                // console.log(mySwiperNav.clickedIndex)
                mySwiperCon.slideTo( mySwiperNav.clickedIndex )
            }
        });
        var mySwiperCon = new Swiper('#swiper-container', {
            speed : 300, // default 300
            autoHeight : true,
            onSlideChangeStart: function(){
                updateNavPosition();
            }
        });

        function updateNavPosition(){
            $('#swiper-nav .active-nav').removeClass('active-nav')
            var activeNav = $('#swiper-nav .swiper-slide').eq(mySwiperCon.activeIndex).addClass('active-nav');

            if (!activeNav.hasClass('swiper-slide-visible')) {
                if (activeNav.index()>mySwiperNav.activeIndex) {
                    var thumbsPerNav = Math.floor(mySwiperNav.width/activeNav.width())-1;
                    mySwiperNav.slideTo(activeNav.index()-thumbsPerNav);
                } else {
                    mySwiperNav.slideTo(activeNav.index());
                }
            }
        }
    }
});

/*
 * ***********************************************
 * **************** 时间选择器规则 ****************
 * ***********************************************
 */
function update(data, i) {
    if (i < 0) return false;

    for (k in data) {
        data[k].active = false;
    }
    data[i].active = true;
}
function getContext() {
    var items = '';

    items += '<ol class="context-layout">';
    for (i in CONTEXT) {
        data = CONTEXT[i];

        if (data.active) {
            items += '<li class="active">' + data.value + '</li>';
        } else {
            items += '<li>' + data.value + '</li>';
        }
    }

    items += '</ol>';

    return(items);
}

$timeCell = [];
function timeSelect(time) {
    if (time == appointmentDateTime) {
        return true;
    } else {
        return false;
    }
}
function timeLimit(time) {
    var thatDay = new Date(Date.parse(time.replace(/-/g, '/'))),
        nowDay = new Date(),
        nowTime = nowDay.getTime(),
        thatTime = thatDay.getTime();

    if (thatTime - nowTime <= appointmentTimeHour*3600*1000) {
        // console.log(thatDay, nowDay);
        $('.day.prev').addClass('disabled');
        return true;
    } else {
        // console.log(time, false);
        return false;
    }
}
function getTimeCell(date, action) {
    var items = time = '';
    for (i in TIME) {
        time = TIME[i];

        var className = '';
        if (timeSelect(date + ' ' + time)) {
            className += 'active';
        }
        if (timeLimit(date + ' ' + time)) {
            className += ' disabled';
        }

        if (className == '') {
            items += '<li>' + time + '</li>';
        } else {
            items += '<li class="' + className +'">' + time + '</li>';
        }
    }

    if (action) {
        $('.time-layout').html('');
        $timeCell = $(items).appendTo('.time-layout').on('click', function(){
            var $this = $(this);

            $this.siblings().removeClass('active');
            $this.addClass('active');
        });
        // console.log($timeCell);
    } else {
        return(items);
    }
}
function getAppointmentDateTime(time) {
    var D = new Date(), date = {};

    if (time != '') {
        D = new Date(Date.parse(time.replace(/-/g, '/')));
    }

    date.Y = D.getFullYear();
    date.M = D.getMonth() + 1;
    date.D = D.getDate();
    if (date.M < 10) {
        date.M = '0' + date.M;
    }
    if (date.D < 10) {
        date.D = '0' + date.D;
    }

    var items = '';
    var DATE = date.Y + '-' + date.M + '-' + date.D;

    items += '<div class="time-container">';

    items += '<div class="time-control">';
    items += '<span id="day" data-day="' + DATE + '">' + date.M + '月' + date.D + '日</span>';
    items += '<a class="day prev" onclick="getPrevDay(this)"><i class="fa fa-chevron-left"></i>前一天</a>';
    items += '<a class="day next" onclick="getNextDay(this)">后一天<i class="fa fa-chevron-right"></i></a>';
    items += '</div>';

    items += '<ol class="time-layout">' + getTimeCell(DATE, false) + '</ol>';

    items += '</div>';

    return(items);
}

function modified() {
    var day = {},
        $obj = $('#day'),
        date = $obj.attr('data-day');

    date = date.split('-');
    day.M = date[1];
    day.D = date[2];

    $obj.text(day.M + '月' + day.D + '日');
}

// 前一天
function getPrevDay() {
    var day = $('#day').attr('data-day');
    var thisDay = new Date(Date.parse(day.replace(/-/g, '/')));

    var prevDayMilliseconds = thisDay.getTime() - 1000 * 60 * 60 * 24;
    var prevDay = new Date();
    prevDay.setTime(prevDayMilliseconds);
    var prevDayYear = prevDay.getFullYear();
    var prevDayDay = prevDay.getDate();
    var prevDayMonth = prevDay.getMonth() + 1;
    if (prevDayMonth < 10) {
        prevDayMonth = '0' + prevDayMonth;
    }
    if (prevDayDay < 10) {
        prevDayDay = '0' + prevDayDay
    }
    thatDay = prevDayYear + '-' + prevDayMonth + '-' + prevDayDay;
    $('#day').attr('data-day', thatDay);

    modified();
    getTimeCell(thatDay, true);
}

// 后一天
function getNextDay() {
    var day = $('#day').attr('data-day');
    var thisDay = new Date(Date.parse(day.replace(/-/g, '/')));

    var nextDay = new Date(thisDay.getFullYear(), thisDay.getMonth(), thisDay.getDate() + 1);
    var nextDayYear = nextDay.getFullYear()
    var nextDayMonth = nextDay.getMonth() + 1;
    var nextDayDay = nextDay.getDate();
    if (nextDayMonth < 10) {
        nextDayMonth = '0' + nextDayMonth;
    }
    if (nextDayDay < 10) {
        nextDayDay = '0' + nextDayDay
    }
    thatDay = nextDayYear + '-' + nextDayMonth + '-' + nextDayDay;
    $('#day').attr('data-day', thatDay);

    modified();
    getTimeCell(thatDay, true);

    // console.log(thatDay, TIME[TIME.length-1]);
    if (!timeLimit(thatDay + ' ' + TIME[TIME.length-1])) {
        $('.day').removeClass('disabled');
    }
}

/*
 * ***********************************************
 * ************** 所有表单的校验规则 **************
 * ***********************************************
 */
FORM = {};
CODE = 0;
mobile = 0;
function isEmpty(o) {
    if (!/[^\s*]/.test(o.val())) {
        o.siblings('.empty').addClass('has');
        o.data('success', false);
        return false;
    } else {
        o.siblings('.empty').removeClass('has');
        o.data('success', true);
        return true;
    }
}
function isSame(p, w) {
    var pValue = p.val(),
        wValue = w.val(),
        pStatus = p.data('success'),
        wStatus = w.data('success');

    if (!pStatus || !isEmpty(w)) {
        return false;
    }

    if (pValue == wValue) {
        w.siblings('.different').removeClass('has');
        w.data('success', true);
        return true;
    } else {
        w.siblings('.different').addClass('has');
        w.data('success', false);
        return false;
    }
}
$(function(){
    FORM = $('form');
    if (FORM.length>0) {
        $('.empty, .error, .different').on('click', function(){$(this).removeClass('has');});

        $('input[type="text"], input[type="number"], input[type="password"]').on('blur', function(){
            var $this = $(this),
                name = $this.attr('id'),
                value = $this.val(),
                status = $this.data('success'),
                filter = '';

            name = $this.attr('type') == 'password' ? 'password' : name;

            $this.siblings('.error').removeClass('has');

            // console.log($this);
            if (!parseInt($this.attr('data-isnull'))) {
                isEmpty($this);

                if (!status) {
                    return false;
                }
            }
            status = true;
            $this.siblings('.empty').removeClass('has');

            if (name == 'gender' && value != '男') {
                value = '女';
                $this.val(value);
            }

            switch (name) {
                case 'address':
                    filter = /^[a-zA-Z0-9_\u4e00-\u9fa5]{4,}$/;
                    break;

                case 'name':
                    filter = /^[a-zA-Z0-9_\u4e00-\u9fa5]{2,8}$/;
                    break;

                case 'mobile':
                    filter = /^1(3[0-9]|4[57]|5[0-35-9]|8[0-9]|70)\d{8}$/;
                    break;

                case 'password':
                    filter = /^[a-zA-Z0-9_]{4,8}$/;
                    break;

                case 'postcode':
                    filter = /^[1-9]\d{5}$/;
                    break;

                case 'gender':
                    filter = /^[女男]$/;
                    break;

                case 'coins':
                    filter = /^\s*$|^\d$|^[1-9]\d$|^1\d{2}$|^200$/;
                    break;

                case 'snscode':
                    filter = /^\d{4,6}$/;
                    break;

                default:
                    filter = /^[.*]$/;
                    break;
            }

            if (!filter.test(value)) {
                $this.siblings('.error').addClass('has');
                status = false;
                return false;
            } else {
                $this.siblings('.error').removeClass('has');
                status = true;
                return true;
            }

        });

        FORM.submit(function(){
            var $o = $('input[type="text"], input[type="number"], input[type="password"], input[type="hidden"], textarea');

            // 表单基本元素验证
            $o.each(function(){
                var $this = $(this),
                    name = $this.attr('id'),
                    status = $this.data('success');
                // console.log($this);

                if (parseInt($this.attr('data-isnull')) || $this.attr('readonly') || $this.attr('type') == 'hidden') {
                    // console.log($this);
                    status = true;
                }

                if (typeof status == 'undefined') {
                    isEmpty($this);
                }

                if (!status) {
                    FORM.data('submit', false);
                    // console.log($this);
                    return false;
                }

                if (name == 'gender' && $this.val() != '男') {
                    $this.val('女');
                }

                FORM.data('submit', true);
            });

            // 重置密码验证
            if ($('input[type="password"]').length == 2) {
                if ( isSame($('input[type="password"]:first'), $('input[type="password"]:last')) ) {
                    FORM.data('submit', true);
                } else {
                    FORM.data('submit', false);
                }
            }

            // 验证码验证
            if ($('#snscode').length > 0) {
                var code = $('#snscode').val();
                code = parseInt(code.trim());
                if ( code != CODE) {
                    $('#snscode').siblings('.error').addClass('has');
                    FORM.data('submit', false);
                    // console.log($this);
                }
            }

            if ($o.length == 0) {
                FORM.data('submit', true);
            };

            if (!FORM.data('submit')) {
                if (typeof layer == 'object') {
                    layer.open({content: '请检查信息是否填写正确。', time: 2});
                } else {
                    alert('请检查信息是否填写正确。');
                }

                return false;
            }
        });
    }
});