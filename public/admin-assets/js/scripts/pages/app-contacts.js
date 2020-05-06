$(document).ready(function () {
    if (0 < $(".sidebar-detached.sidebar-left").length) new PerfectScrollbar(".sidebar-detached.sidebar-left", {wheelPropagation: !1});
    var c = $("#users-contacts").DataTable();
    $("#search-contacts").on("keyup", function () {
        c.search(this.value).draw()
    }), $(".input-chk").iCheck({checkboxClass: "icheckbox_square-blue", radioClass: "iradio_square-blue"}), c.on("draw.dt", function () {
        $(".input-chk").iCheck({checkboxClass: "icheckbox_square-blue", radioClass: "iradio_square-blue"})
    }), $(document).on("click", ".favorite", function () {
        $(this).toggleClass("active")
    }), $("#users-contacts").on("click", ".delete", function () {
        // c.row($(this).parents("tr")).remove().draw()
    }), $(document).on("click", ".delete-all", function () {
        c.rows($("#users-contacts").find(".checked").closest("tr")).remove().draw(), $("input#check-all").iCheck("uncheck")
    }), $(document).on("ifClicked", "input#check-all", function () {
        var e = $("input.input-chk");
        $(document).on("ifChecked", "input#check-all", function (a) {
            e.iCheck("check")
        }), $(document).on("ifUnchecked", "input#check-all", function (a) {
            e.iCheck("uncheck")
        })
    });
    $("#add-contact-item").on("click", function (a) {
        a.preventDefault();
        var e = $("#contact-name").val(), t = $("#contact-email").val(), s = $("#contact-phone").val(), i = ($("#user-image").val(), "");
        "on" == $("#favorite:checked").val() && (i = " active"), c.row.add(['<input type="checkbox" class="input-chk check">', '<div class="media"><div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../admin-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div><div class="media-body media-middle"><a class="name" class="media-heading">' + e + "</a></div></div>", '<a class="email" href="' + t + '">' + t + "</a>", '<span class="phone">' + s + "</span>", '<div class="favorite' + i + '"><i class="ft-star"></i></div>', '<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a><a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a><span class="dropdown"><a id="btnSearchDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i class="fa fa-ellipsis-v"></i></a><span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right"><a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i> Edit</a><a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a><a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a><a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a><a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a><a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a></span></span>']).draw(!1), 0
    });
    var n = null;
    $(document).on("click", ".edit", function () {
        n = $(this).parents("tr"), $("#phone").val(""), $("#name").val($(this).closest("tr").find("td .name").text()), $("#email").val($(this).closest("tr").find(".email").text()), $("#phone").val($(this).closest("tr").find("td.phone", "td .phone").text()), $("#fav").val(""), $(this).closest("tr").find(".favorite").hasClass("active") && $("#fav").text("active")
    }), $("#edit-contact-item").on("click", function (a) {
        a.preventDefault();
        var e = $("#name").val(), t = $("#email").val(), s = $("#phone").val(), i = $("#fav").text();
        c.row(n).data(['<input type="checkbox" class="input-chk check">', '<div class="media"><div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../admin-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div><div class="media-body media-middle"><a class="name" class="media-heading">' + e + "</a></div></div>", '<a class="email" href="' + t + '">' + t + "</a>", '<span class="phone">' + s + "</span>", '<div class="favorite ' + i + '"><i class="ft-star"></i></div>', '<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a><a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a><span class="dropdown"><a id="btnSearchDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i class="fa fa-ellipsis-v"></i></a><span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right"><a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i> Edit</a><a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a><a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a><a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a><a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a><a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a></span></span>']).draw(), 0
    }), $(".menu-toggle").on("click", function (a) {
        $(".app-content .sidebar-left").removeClass("show"), $(".app-content .content-overlay").removeClass("show")
    }), $(".sidebar-toggle").on("click", function (a) {
        a.stopPropagation(), $(".app-content .sidebar-left").toggleClass("show"), $(".app-content .content-overlay").addClass("show")
    }), $(".app-content .content-overlay").on("click", function (a) {
        $(".app-content .sidebar-left").removeClass("show"), $(".app-content .content-overlay").removeClass("show")
    }), 992 < $(window).width() && $(".app-content .content-overlay").hasClass("show") && $(".app-content .content-overlay").removeClass("show")
}), $(window).on("resize", function () {
    992 < $(window).width() && $(".app-content .content-overlay").hasClass("show") && ($(".app-content .sidebar-left").removeClass("show"), $(".app-content .content-overlay").removeClass("show"))
});