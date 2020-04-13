$ = jQuery;
jQuery.validator.addMethod("noSpace", function (value, element) {
    return value.trim() != "";
}, "Please fill the box");
jQuery(document).ready(function ($) {
    form = jQuery("#submission_form");
    var current = 0;
    widget = $(".step");
    btnnext = $(".next");
    btnback = $(".back");
    btnsubmit = $(".submit");
    widget.not(':eq(0)').hide();
    setProgress(current);
    form.steps({
        headerTag: "h5",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex) {
            if (currentIndex > newIndex) {
                return true;
            }
            if (currentIndex < newIndex) {
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            setProgress(currentIndex);
            if (currentIndex === 2 && priorIndex === 3) {
                form.steps("previous");
            }
        },
        onFinishing: function (event, currentIndex) {
            setProgress(currentIndex+1);
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            setProgress(currentIndex+1);
            form.hide();
            $(".final-step-wrapper").show();
            setTimeout(function () {
                // form.submit();
                alert("Form submitted...!!!")
            },3000);
        }
    }).validate({
        ignore: 'input[type=hidden]',
        errorClass: 'validation-error-label',
        highlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },
        rules: {
            "Vorname": {
                required: true,
                noSpace: true,
            },
            "Nachname": {
                required: true,
                noSpace: true,
            },
            "Email": {
                required: true,
                noSpace: true,
            },
            "Telefon": {
                required: true,
                noSpace: true,
            },
            "PLZ": {
                required: true,
                noSpace: true,
            },
            "privacy-val": {
                required: true,
            },
        }
    });
    $range = $(".js-range-slider");
    $square_meters = $(".square-meters");
    $range.ionRangeSlider({
        skin: "square",
        type: "single",
        min: 0,
        max: 300,
        from: 150,
        grid: true,
        postfix: "m<sup>2</sup>",
        prettify: function (n) {
            return transform(n);
        },
        onStart: function (data) {
            $square_meters.prop("value", data.from);
        },
        onChange: function (data) {
            $square_meters.prop("value", data.from);
        }
    });
}, jQuery);
setProgress = function (currstep) {
    var percent = parseFloat(100 / widget.length) * currstep;
    percent = percent.toFixed();
    $(".progress-bar")
        .css("width", percent + "%")
        .html(percent + "%");
};

function transform(n) {
    if (n > 299) {
        return "> 300";
    }
    return n;
}
