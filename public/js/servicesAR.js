
    $('.auto-loadSVG').hide();
$('.auto-loadNoMore').hide();
$('.auto-loadSe').hide();

var ENDPOINT = '/Castingstars/';
var page = 1;

var CID = "{!! $CID !!}";

infinteLoadMore(page);
$("#submit_1").click(function () {
    page++;
    infinteLoadMore(page);
})

function infinteLoadMore(page) {
    $.ajax({
        url: ENDPOINT + "servicesAR/" + CID + "?page=" + page,
        datatype: "html",
        data: {
            CID: CID

        },
        type: "get",
        beforeSend: function () {
            $('.auto-loadSVG').show();
        }
    })
        .done(function (response) {
            if (response.length == 0) {
                $('.auto-loadNoMore').html("لا يوجد المزيد");
                $('.auto-loadNoMore').show();
                $('.auto-loadMain').hide();
                $('.auto-loadSVG').hide();
                return;
            }
            $("#data-wrapper").append(response);
            $('.auto-loadSVG').hide();

        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            console.log('Server error occured');
        });
}

/**********************************************************Check Box Fillters************************************************************/
var keyGE = [];
var keysS = [];
var keysSE = [];
var keysSA = [];
var keysJB = [];
var search ;
var fmaxw;
var fminw;
var ENDPOINT = '/Castingstars/';
page2 = 1;
$("#submit_2").click(function () {
    page2++;
    infinteLoadMore2(page2);

})

function infinteLoadMore2(page2) {


    $.ajax({
        url: ENDPOINT + "search-serviceAR?page=" + page2,
        datatype: "html",
        data: {
            search: search,
            keyGE: keyGE,
            keysS: keysS,
            keysSE: keysSE,
            keysSA: keysSA,
            keysJB: keysJB,
            fmaxw: fmaxw,
            fminw: fminw,
            CID: CID

        },
        type: "get",
        beforeSend: function () {
            $('.auto-loadll').show();
        }
    })
        .done(function (response) {
            if (response.length == 0) {
                $('.auto-loadNoMore').html("لا يوجد المزيد");
                $('.auto-loadSe').hide();
                $('.auto-loadNoMore').show();
                $('.auto-loadSVG').hide();


                return;
            }
            $("#data-wrapper").append(response);
            $('.auto-loadSVG').hide();
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            console.log('Server error occured');
        });
}


/**********Gender Fillter Script**************/
$(".dropdownGES dtGES a").on('click', function () {
    $(".dropdownGES ddGES .labelGES").slideToggle('fast');
    $(".dropdownS ddS .labelS").hide();

});
$(".dropdownGES ddGES .labelGES labelGES a").on('click', function () {
    $(".dropdownGES ddGES .labelGES").hide();
});

function getSelectedValueGES(id) {
    return $("#" + id).find("dtGES a span.value").html();
}

$(document).bind('click', function (e) {
    var $clickedST = $(e.target);
    if (!$clickedST.parents().hasClass("dropdown")) $(".dropdownGES ddGES .labelGES").hide();

});
$('.mutliSelectGES input[type="checkbox"]').on('click', function () {

    var titleST = $(this).closest('.mutliSelectGES').find('input[type="checkbox"]').val(),
        titleST = $(this).val();
    $('.auto-loadSe').show();
    if ($(this).is(':checked')) {
        keyGE.push(titleST);
        $.ajax({
            type: "get",
            url: "{{URL::to('search-serviceAR')}}",
            data: {
                search: search,
                keyGE: keyGE,
                keysS: keysS,
                keysSE: keysSE,
                keysSA: keysSA,
                keysJB: keysJB,
                fmaxw: fmaxw,
                fminw: fminw,
                CID: CID
            }, success: function (data) {
                $("#data-wrapper").empty().html(data);
                $('.auto-loadNoMore').hide();
                $('.auto-loadMain').hide();
                page2 = 1;
                return (keyGE, page2);
            }
        })
    } else {
        const index = keyGE.indexOf(titleST);
        keyGE.splice(index, 1);
        if (keyGE.length == 0) {
            if (search != undefined || search != "" || keyGE != "" || keysS != "" ||
                keysSE != "" || keysSA != "" || keysJB != "" || fmaxw != undefined ||
                fmaxw != "" || fmaxw != "" || fminw != undefined || fminw != "") {
                $.ajax({
                    type: "get",
                    url: "{{URL::to('search-serviceAR')}}",
                    data: {
                        search: search,
                        keyGE: keyGE,
                        keysS: keysS,
                        keysSE: keysSE,
                        keysSA: keysSA,
                        keysJB: keysJB,
                        fmaxw: fmaxw,
                        fminw: fminw,
                        CID: CID
                    }, success: function (data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return (keyGE, page2);
                    }
                })
            } else {
                keyGE = [];
                $("#data-wrapper").empty().html();
                page = 1;
                infinteLoadMore(page)
                $('.auto-loadSVG').hide();
                $('.auto-loadNoMore').hide();
                $('.auto-loadSe').hide();
                $('.auto-loadMain').show();

            }
        } else {
            $.ajax({
                type: "get",
                url: "{{URL::to('search-serviceAR')}}",
                data: {
                    search: search,
                    keyGE: keyGE,
                    keysS: keysS,
                    keysSE: keysSE,
                    keysSA: keysSA,
                    keysJB: keysJB,
                    fmaxw: fmaxw,
                    fminw: fminw,
                    CID: CID
                }, success: function (data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    page2 = 1;
                    return (keyGE, page2);
                }
            })
        }
    }
});
/**********Gender Fillter Script**************/
/**********State Fillter Script**************/
$(".dropdownS dtS a").on('click', function () {
    $(".dropdownS ddS .labelS").slideToggle('fast');
    $(".dropdownGES ddGES .labelGES").hide();

});
$(".dropdownS ddS .labelS labelS a").on('click', function () {
    $(".dropdownS ddS .labelS").hide();
});

function getSelectedValueS(id) {
    return $("#" + id).find("dtS a span.value").html();
}

$(document).bind('click', function (e) {
    var $clickedST = $(e.target);
    if (!$clickedST.parents().hasClass("dropdown")) $(".dropdownS ddS .labelS").hide();

});
$('.mutliSelectS input[type="checkbox"]').on('click', function () {


    var titleS = $(this).closest('.mutliSelectS').find('input[type="checkbox"]').val(),
        titleS = $(this).val();
    $('.auto-loadSe').show();
    if ($(this).is(':checked')) {

        keysS.push(titleS);

        $.ajax({
            type: "get",
            url: "{{URL::to('search-serviceAR')}}",
            data: {
                search: search,
                keyGE: keyGE,
                keysS: keysS,
                keysSE: keysSE,
                keysSA: keysSA,
                keysJB: keysJB,
                fmaxw: fmaxw,
                fminw: fminw,
                CID: CID
            }, success: function (data) {
                $("#data-wrapper").empty().html(data);
                $('.auto-loadNoMore').hide();
                $('.auto-loadMain').hide();
                page2 = 1;
                return (keysS, page2);
            }
        })
    } else {
        const index = keysS.indexOf(titleS);
        keysS.splice(index, 1);
        if (keysS.length == 0) {
            if (search != undefined || keyGE != "" || keysS != "" ||
                keysSE != "" || keysSA != "" || keysJB != "" || fmaxw != undefined ||
                fminw != undefined) {
                $.ajax({
                    type: "get",
                    url: "{{URL::to('search-serviceAR')}}",
                    data: {
                        search: search,
                        keyGE: keyGE,
                        keysS: keysS,
                        keysSE: keysSE,
                        keysSA: keysSA,
                        keysJB: keysJB,
                        fmaxw: fmaxw,
                        fminw: fminw,
                        CID: CID
                    }, success: function (data) {
                        $("#data-wrapper").empty().html(data);
                        $('.auto-loadNoMore').hide();
                        $('.auto-loadMain').hide();
                        page2 = 1;
                        return (keysS, page2);
                    }
                })
            } else {
                keysS = [];
                $("#data-wrapper").empty().html();
                page = 1;
                infinteLoadMore(page)
                $('.auto-loadSVG').hide();
                $('.auto-loadNoMore').hide();
                $('.auto-loadSe').hide();
                $('.auto-loadMain').show();

            }
        } else {
            $.ajax({
                type: "get",
                url: "{{URL::to('search-serviceAR')}}",
                data: {
                    search: search,
                    keyGE: keyGE,
                    keysS: keysS,
                    keysSE: keysSE,
                    keysSA: keysSA,
                    keysJB: keysJB,
                    fmaxw: fmaxw,
                    fminw: fminw,
                    CID: CID
                }, success: function (data) {
                    $("#data-wrapper").empty().html(data);
                    $('.auto-loadNoMore').hide();
                    $('.auto-loadMain').hide();
                    page2 = 1;
                    return (keysS, page2);
                }
            })
        }
    }
});
/**********State Fillter Script**************/
/**********Services Fillter Script**************/
$('#services-dropdown').on('change', function () {
    $("#job-dropdown").html('');
    document.getElementById("speciali-dropdown").style.display = "block";
    document.getElementById("job-dropdown").style.display = "none";
    var service_id = this.value;
    $("#speciali-dropdown").html('');
    $.ajax({
        url: "{{url('get-speciali-by-service')}}",
        type: "POST",
        data: {

            service_id: service_id,
            _token: '{{csrf_token()}}'
        },
        dataType: 'json',

        success: function (result) {
            $("#speciali-dropdown").append('<option hidden class="Statedropdown" value="">Select</option>');
            $.each(result.Allspeciali, function (key, value) {
                $("#speciali-dropdown").append('<option class="Statedropdown" value="' + value.ID + '">' + value.specialization_nameAR + '</option>');
            });
        }
    });
    keysSE = [];
    keysSE.push(service_id);
    keysSA = [];
    keysJB = [];

    $('.auto-loadSe').show();
    $.ajax({
        type: "get",
        url: "{{URL::to('search-serviceAR')}}",
        data: {
            search: search,
            keyGE: keyGE,
            keysS: keysS,
            keysSE: keysSE,
            keysSA: keysSA,
            keysJB: keysJB,
            fmaxw: fmaxw,
            fminw: fminw,
            CID: CID
        }, success: function (data) {
            $("#data-wrapper").empty().html(data);
            $('.auto-loadNoMore').hide();
            $('.auto-loadMain').hide();
            page2 = 1;
            return (keysSE, page2);
        }
    })
});
/**********Services Fillter Script**************/
/**********specializations Fillter Script**************/
$('#speciali-dropdown').on('change', function () {
    var job_id = this.value;
    $("#job-dropdown").html('');
    $.ajax({
        url: "{{url('get-job-by-speciali')}}",
        type: "POST",
        data: {
            specializ_id: job_id,
            _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function (result) {
            $("#job-dropdown").append('<option hidden class="Statedropdown" value="">Select</option>');
            $.each(result.Alljobs, function (key, value) {

                if (value != '') {
                    $("#job-dropdown").append('<option class="Statedropdown" value="' + value.ID + '">' + value.job_nameAR + '</option>');
                    document.getElementById("job-dropdown").style.display = "block";
                }
            });
        }
    });
    keysSA = [];
    keysSA.push(job_id);
    keysJB = [];
    $('.auto-loadSe').show();
    $.ajax({
        type: "get",
        url: "{{URL::to('search-serviceAR')}}",
        data: {
            search: search,
            keyGE: keyGE,
            keysS: keysS,
            keysSE: keysSE,
            keysSA: keysSA,
            keysJB: keysJB,
            fmaxw: fmaxw,
            fminw: fminw,
            CID: CID
        }, success: function (data) {
            $("#data-wrapper").empty().html(data);
            $('.auto-loadNoMore').hide();
            $('.auto-loadMain').hide();
            page2 = 1;
            return (keysSE, page2);
        }
    })

});
/**********specializations Fillter Script**************/
/**********Job Fillter Script**************/
$('#job-dropdown').on('change', function () {
    var job_id = this.value;

    keysJB = [];
    keysJB.push(job_id);
    $('.auto-loadSe').show();
    $.ajax({
        type: "get",
        url: "{{URL::to('search-serviceAR')}}",
        data: {
            search: search,
            keyGE: keyGE,
            keysS: keysS,
            keysSE: keysSE,
            keysSA: keysSA,
            keysJB: keysJB,
            fmaxw: fmaxw,
            fminw: fminw,
            CID: CID
        }, success: function (data) {
            $("#data-wrapper").empty().html(data);
            $('.auto-loadNoMore').hide();
            $('.auto-loadMain').hide();
            page2 = 1;
            return (keysSE, page2);
        }
    })
});
/**********Job Fillter Script**************/
$(document).ready(function () {
    /**********Experience data geter**************/
    var max_wff;
    var min_wff;
    let inputLeftW = document.getElementById("input-leftW");
    let inputRightW = document.getElementById("input-rightW");
    let rangeW = document.querySelector(".sliderW > .rangeW");
    let priceFromW = document.querySelector(".price-fromW");
    let priceToW = document.querySelector(".price-toW");

    function setLeftValueW() {
        let _this = inputLeftW,
            min = parseInt(_this.min),
            max = parseInt(_this.max);
        _this.value = Math.min(
            parseInt(_this.value),
            parseInt(inputRightW.value) - 1
        );
        priceFromW.textContent = `${_this.value * 1}`;
        let percent = ((_this.value - min) / (max - min)) * 100;
        rangeW.style.left = percent + "%";
    }

    setLeftValueW();

    function setRightValueW() {
        let _this = inputRightW,
            min = parseInt(_this.min),
            max = parseInt(_this.max);

        _this.value = Math.max(parseInt(_this.value), parseInt(inputLeftW.value) + 1);
        priceToW.textContent = `${_this.value * 1}`;
        let percent = ((_this.value - min) / (max - min)) * 100;
        rangeW.style.right = 100 - percent + "%";
    }

    setRightValueW();
    inputLeftW.addEventListener("input", setLeftValueW);
    inputRightW.addEventListener("input", setRightValueW);
    inputLeftW.addEventListener("mouseover", (e) => {
        inputLeftW.classList.add("hover");
    });
    inputLeftW.addEventListener("mouseout", (e) => {
        inputLeftW.classList.remove("hover");
    });
    inputLeftW.addEventListener("mousedown", (e) => {
        inputLeftW.classList.add("active");
    });
    inputLeftW.addEventListener("mouseup", (e) => {
        inputLeftW.classList.remove("active");
        min_wff = document.getElementById("input-leftW").value,
            max_wff = document.getElementById("input-rightW").value;
        var min_w = parseInt(min_wff);
        var max_w = parseInt(max_wff);
        fmaxw = max_w;
        fminw = min_w;
        $.ajax({
            type: "get",
            url: "{{URL::to('search-serviceAR')}}",
            data: {
                search: search,
                keyGE: keyGE,
                keysS: keysS,
                keysSE: keysSE,
                keysSA: keysSA,
                keysJB: keysJB,
                fmaxw: fmaxw,
                fminw: fminw,
                CID: CID
            }, success: function (data) {
                $("#data-wrapper").empty().html(data);
                $('.auto-loadNoMore').hide();
                $('.auto-loadMain').hide();
                $('.auto-loadSe').show();
                page2 = 1;
                return (page2);
            }
        })
    });
    inputLeftW.addEventListener("touchstart", (e) => {
        inputLeftW.classList.add("active");
    });
    inputLeftW.addEventListener("touchend", (e) => {
        inputLeftW.classList.remove("active");
        min_wff = document.getElementById("input-leftW").value,
            max_wff = document.getElementById("input-rightW").value;
        var min_w = parseInt(min_wff);
        var max_w = parseInt(max_wff);
        fmaxw = max_w;
        fminw = min_w;
        $.ajax({
            type: "get",
            url: "{{URL::to('search-serviceAR')}}",
            data: {
                search: search,
                keyGE: keyGE,
                keysS: keysS,
                keysSE: keysSE,
                keysSA: keysSA,
                keysJB: keysJB,
                fmaxw: fmaxw,
                fminw: fminw,
                CID: CID
            }, success: function (data) {
                $("#data-wrapper").empty().html(data);
                $('.auto-loadNoMore').hide();
                $('.auto-loadMain').hide();
                $('.auto-loadSe').show();
                page2 = 1;
                return (page2);
            }
        })
    });
    inputRightW.addEventListener("mouseover", (e) => {
        inputRightW.classList.add("hover");
    });
    inputRightW.addEventListener("mouseout", (e) => {
        inputRightW.classList.remove("hover");
    });
    inputRightW.addEventListener("mousedown", (e) => {
        inputRightW.classList.add("active");
    });
    inputRightW.addEventListener("mouseup", (e) => {
        inputRightW.classList.remove("active");
        min_wff = document.getElementById("input-leftW").value,
            max_wff = document.getElementById("input-rightW").value;
        var min_w = parseInt(min_wff);
        var max_w = parseInt(max_wff);
        fmaxw = max_w;
        fminw = min_w;
        $.ajax({
            type: "get",
            url: "{{URL::to('search-serviceAR')}}",
            data: {
                search: search,
                keyGE: keyGE,
                keysS: keysS,
                keysSE: keysSE,
                keysSA: keysSA,
                keysJB: keysJB,
                fmaxw: fmaxw,
                fminw: fminw,
                CID: CID
            }, success: function (data) {
                $("#data-wrapper").empty().html(data);
                $('.auto-loadNoMore').hide();
                $('.auto-loadMain').hide();
                $('.auto-loadSe').show();
                page2 = 1;
                return (page2);
            }
        })
    });
    inputRightW.addEventListener("touchstart", (e) => {
        inputRightW.classList.add("active");
    });
    inputRightW.addEventListener("touchend", (e) => {
        inputRightW.classList.remove("active");
        min_wff = document.getElementById("input-leftW").value,
            max_wff = document.getElementById("input-rightW").value;
        var min_w = parseInt(min_wff);
        var max_w = parseInt(max_wff);
        fmaxw = max_w;
        fminw = min_w;
        $.ajax({
            type: "get",
            url: "{{URL::to('search-serviceAR')}}",
            data: {
                search: search,
                keyGE: keyGE,
                keysS: keysS,
                keysSE: keysSE,
                keysSA: keysSA,
                keysJB: keysJB,
                fmaxw: fmaxw,
                fminw: fminw,
                CID: CID
            }, success: function (data) {
                $("#data-wrapper").empty().html(data);
                $('.auto-loadNoMore').hide();
                $('.auto-loadMain').hide();
                $('.auto-loadSe').show();
                page2 = 1;
                return (page2);
            }
        })
    });
    /**********Experience data geter**************/
});
/**********Services data geter**************/
/**************Search Box Script*************/
$('#search').keyup(function () {
    $('.auto-loadSe').show();
    var search1 = $('#search').val();
    search = search1;
    if (search != "") {
        $.ajax({
            type: "get",
            url: "{{URL::to('search-serviceAR')}}",
            data: {
                search: search,
                keyGE: keyGE,
                keysS: keysS,
                keysSE: keysSE,
                keysSA: keysSA,
                keysJB: keysJB,
                fmaxw: fmaxw,
                fminw: fminw,
                CID: CID
            }, success: function (data) {
                $("#data-wrapper").empty().html(data);
                $('.auto-loadNoMore').hide();
                $('.auto-loadMain').hide();
                page2 = 1;
                return (page2);
            }
        })
    } else {
        $("#data-wrapper").empty().html();
        page = 1;
        $("#data-wrapper").empty().html();
        infinteLoadMore(page)
        $('.auto-loadSVG').hide();
        $('.auto-loadNoMore').hide();
        $('.auto-loadSe').hide();
        $('.auto-loadMain').show();

    }

})
/**************Search Box Script*************/

/**********EOF Services data geter**************/
/**********************************************************EOF Check Box Fillters************************************************************/
function handleonfocus(x) {
    x.style.backgroundColor = "#E9204F";
}

function handleonblur(x) {
    x.style.backgroundColor = "white";
}
