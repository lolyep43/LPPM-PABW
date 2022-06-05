$(document).ready(function () {
    // wow initiation
    new WOW().init();

    // navigation bar toggle
    $("#navbar-toggler").click(function () {
        $(".navbar-collapse").slideToggle(400);
    });

    // navbar bg change on scroll
    $(window).scroll(function () {
        let pos = $(window).scrollTop();
        if (pos >= 100) {
            $(".navbar").addClass("cng-navbar");
        } else {
            $(".navbar").removeClass("cng-navbar");
        }
    });

    // sample video popup
    $(document).ready(function () {
        $(".popup-youtube").magnificPopup({
            disableOn: 700,
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false,
        });
    });

    // team carousel
    $(".team .owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        dots: true,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });

    // faq accordion
    $(".faq-head").each(function () {
        $(this).click(function () {
            $(this).next().toggleClass("show-faq-content");
            let icon = $(this).children("span").children("i").attr("class");

            if (icon == "fas fa-plus") {
                $(this).children("span").html('<i class = "fas fa-minus"></i>');
            } else {
                $(this).children("span").html('<i class = "fas fa-plus"></i>');
            }
        });
    });

    // testimonial carousel
    $(".testimonial .owl-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        dots: true,
        nav: false,
        items: 1,
    });

    // Bagian scroll top //
    function scrollTop() {
        const scrollTop = document.getElementById("scroll-top");
        if (this.scrollY >= 560) scrollTop.classList.add("show-scroll");
        else scrollTop.classList.remove("show-scroll");
    }
    window.addEventListener("scroll", scrollTop);

    // custom select option
    if ($(".select2")[0]) {
        $(".select2").select2({
            theme: "bootstrap",
            width: "100%",
        });
    }

    // fetch data provinsi saat halaman pertama kali dibuka
    fetchDataIndonesia(
        "http://dev.farizdotid.com/api/daerahindonesia/provinsi",
        "select-provinsi",
        "provinsi"
    );

    // fetch data kota saat value dari inputan provinsi berubah
    $(document).on("change", "#select-provinsi", function () {
        let id = $(this).val();

        fetchDataIndonesia(
            `http://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=${id}`,
            "select-kota",
            "kota_kabupaten"
        );
    });
});

function fetchDataIndonesia(url, targetInputId, responseKey) {
    /**
     * https://farizdotid.com/blog/dokumentasi-api-daerah-indonesia/
     * Kirim ajax dan append data responsenya dalam bentuk select option ke select dengan id sesuai targetInputId
     * String url: url api yang akan di fetch
     * String targetInputId: id dari inputan untuk menampilkan hasil response
     * String responseKey: key yang digunakan pada response [key "provinsi" untuk response dari api provinsi, key "kota_kabupaten" untuk response dari api kota]
     */
    $("#" + targetInputId).empty();
    $.ajax({
        url: url,
        type: "GET",
        success: function (data) {
            $("#" + targetInputId).append("<option></option>");
            $.each(data[responseKey], function (key, value) {
                $("#" + targetInputId).append(
                    '<option value="' +
                        value.id +
                        '">' +
                        value.nama +
                        "</option>"
                );
            });
        },
    });
}
