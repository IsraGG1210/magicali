(function ($) {
  "use strict";
  $("#photolancer-dismiss-notice").on("click", ".notice-dismiss", function () {
    $.ajax({
      url: photolancer_admin_localize.ajax_url,
      method: "POST",
      data: {
        action: "photolancer_dismissble_notice",
        nonce: photolancer_admin_localize.nonce,
      },
      success: function (response) {
        if (response.success) {
          console.log("Notice dismissed successfully.");
          $("#photolancer-dismiss-notice").fadeOut(); // Hide the notice
        } else {
          console.log("Failed to dismiss notice:", response.data.message);
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error:", textStatus, errorThrown);
      },
    });
  });
  $("#photolancer-dashboard-tabs-nav li:first-child").addClass("active");
  $(".tab-content").hide();
  $(".tab-content:first").show();
  $("#photolancer-dashboard-tabs-nav li").click(function () {
    $("#photolancer-dashboard-tabs-nav li").removeClass("active");
    $(this).addClass("active");
    $(".tab-content").hide();
    var activeTab = $(this).find("a").attr("href");
    $(activeTab).fadeIn();
    return false;
  });
})(jQuery);
