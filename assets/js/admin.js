jQuery(document).ready(function($) {
  // Toast Bootstrap
  $(".toast").toast({
    delay: 3000
  });

  // Table sorter plugin on products table

  $.extend($.tablesorter.characterEquivalents, {
    o: "\u1ED5",
    O: "\u1ED4"
  });

  var $prodTable = $("#prodTable");
  var $orderTable = $("#orderTable");

  $prodTable
    .tablesorter({
      theme: "bootstrap",
      sortLocaleCompare: true,
      sortTable: true,
      ignoreCase: true,
      headerTemplate: "{content} {icon}",
      widthFixed: true,
      widgets: ["filter", "cssStickyHeaders"],
      widgetOptions: {
        // // extra css class name (string or array) added to the filter element (input or select)
        // filter_cssFilter: [
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control custom-select",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control",
        //   "form-control custom-select",
        //   "form-control"
        // ],
        // cssStickyHeaders_offset: 70,
        cssStickyHeaders_attachTo: ".table-wrapper",
        // Set this option to false to make the searches case sensitive
        filter_ignoreCase: true
      }
    })
    .tablesorterPager({
      // target the pager markup - see the HTML block below
      container: $(".ts-pager"),

      // target the pager page select dropdown - choose a page
      cssGoto: ".pagenum",

      // remove rows from the table to speed up the sort of large tables.
      // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
      removeRows: false,

      // output string - default is '{page}/{totalPages}';
      // possible variables: {page}, {totalPages}, {filteredPages}, {startRow}, {endRow}, {filteredRows} and {totalRows}
      output: "{startRow} - {endRow} / {filteredRows} ({totalRows})"
    });

  $orderTable
    .tablesorter({
      theme: "bootstrap",
      cssChildRow: "tablesorter-childRow",
      ignoreCase: true,
      sortLocaleCompare: true,
      sortTable: true,
      headerTemplate: "{content} {icon}",
      widthFixed: false,
      widgets: ["filter", "cssStickyHeaders"],
      widgetOptions: {
        cssStickyHeaders_attachTo: ".table-wrapper",
        filter_childRows: true,
        filter_childByColumn: true,
        filter_childWithSibs: false,
        // Set this option to false to make the searches case sensitive
        filter_ignoreCase: true
      }
    })
    .tablesorterPager({
      // target the pager markup - see the HTML block below
      container: $(".ts-pager"),

      // target the pager page select dropdown - choose a page
      cssGoto: ".pagenum",

      // remove rows from the table to speed up the sort of large tables.
      // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
      removeRows: false,

      // output string - default is '{page}/{totalPages}';
      // possible variables: {page}, {totalPages}, {filteredPages}, {startRow}, {endRow}, {filteredRows} and {totalRows}
      output: "{startRow} - {endRow} / {filteredRows} ({totalRows})"
    });

  // hide child rows - don't use .hide() because filtered rows get a "filtered" class
  // added to them, and style="display: table-row;" will override this
  $orderTable.find(".tablesorter-childRow").addClass("tablesorter-hidden");

  // Toggle child row content (td), not hiding the row since we are using rowspan
  $orderTable.delegate(".toggle", "click", function() {
    // use "nextUntil" to toggle multiple child rows
    // toggle table cells instead of the row
    $(this)
      .closest("tr")
      .nextUntil("tr.tablesorter-hasChildRow")
      .toggleClass("tablesorter-hidden");
    return false;
  });

  //Delete modal
  $("#deleteModal").on("show.bs.modal", function(event) {
    var button = $(event.relatedTarget);
    var ElementId = button.data("element-id");
    var ElementName = button.data("element-name");
    var modal = $(this);
    modal.find("input#deleteElement").val(ElementId);
    modal.find(".modal-text").text(ElementName);
  });

  //Calculate Sum of new quantity for products
  $("#newQty1").change(function() {
    $sumNew = Number($("#newQty1").val()) + Number($("#newQty2").val());
    $("#newQty").val($sumNew);
    $("#newQtyHidden").val($sumNew);
  });
  $("#newQty2").change(function() {
    $sumNew = Number($("#newQty1").val()) + Number($("#newQty2").val());
    $("#newQty").val($sumNew);
    $("#newQtyHidden").val($sumNew);
  });

  // SummerNote Editor
  $("#Description").summernote({
    toolbar: [
      ["style", ["bold", "italic", "underline", "clear"]],
      ["color", ["color"]],
      ["view", ["codeview", "help"]]
    ],
    popover: []
  });
  $("#Nutrition").summernote({
    toolbar: [
      ["style", ["bold", "italic", "underline", "clear"]],
      ["color", ["color"]],
      ["view", ["codeview", "help"]]
    ],
    popover: []
  });

  //AJAX function to update price& category of new product in Order Edit page
  $(".table-body").on("change", ".product-select", function() {
    //Price
    $.ajax({
      url: "../include/snippets/getSalePrice.php?id=" + this.value,
      method: "GET",
      context: this,
      // data: { view: view },
      // dataType: "json",
      success: function(data) {
        $(this)
          .closest("tr")
          .find(".product-price")
          .html(data);
        $(this)
          .closest("tr")
          .find(".product-price-input")
          .val(parseInt(data) * 1000);
        $quantity = parseInt(
          $(this)
            .closest("tr")
            .find(".product-quantity")
            .val()
        );
        updateTotalValue(this, parseInt(data), $quantity);
      }
    });

    //Category
    $.ajax({
      url: "../include/snippets/getType.php?id=" + this.value,
      method: "GET",
      context: this,
      success: function(data) {
        $(this)
          .closest("tr")
          .find(".product-type")
          .html(data);
      }
    });
  });

  //Delete product row
  $(".table-body").on("click", ".product-delete", function() {
    this.preventDefault;
    $(this)
      .closest("tr")
      .remove();
  });

  //calculate subtotal price for new product in Order Edit page
  $(".table-body").on("change", ".product-quantity", function() {
    $price = parseInt(
      $(this)
        .closest("tr")
        .find(".product-price")
        .html()
    );
    updateTotalValue(this, $price, this.value);
  });

  //function to update price from ajax
  function updateTotalValue(target, price, quantity) {
    $subtotal = price * quantity;
    $(target)
      .closest("tr")
      .find(".product-totalPrice")
      .html(price * quantity + ",000");

    $(target)
      .closest("tr")
      .siblings(".product-item")
      .each(function() {
        $totalPrice = parseInt(
          $(this)
            .find(".product-totalPrice")
            .html()
        );
        $subtotal += $totalPrice;
      });

    $(".product-subtotal").html($subtotal + ".000");
    $promo = $(".promo-value").val();
    $promo = parseInt($promo);
    // console.log($promo);
    $discount = ($subtotal * $promo) / 100;
    $discountText = formatNumber($discount);
    $(".product-discount").html($discountText);
    $total = $subtotal - $discount;
    $totalText = formatNumber($total);
    $(".product-total").html($totalText);
  }

  function formatNumber(number) {
    if (number % 1 > 0) {
      $numberArray = ("" + number).split(".");
      $big = $numberArray[0];
      $small = $numberArray[1];
      $smallText = "";
      $smallText = $small.length == 1 ? "00" : "0";
      $number = $big + "." + $small + $smallText;
    } else {
      $number = number + ".000";
    }
    return $number;
  }

  //AJAX Add more products into order
  $("#addProductBtn").on("click", function() {
    this.preventDefault;
    $.ajax({
      url: "../include/snippets/insertRowIntoOrder.php",
      method: "GET",
      context: this,
      success: function(data) {
        $(this)
          .closest("tr")
          .before(data);
      }
    });
  });

  //AJAX update promotion value
  $(".table-body").on("change", ".promo-select", function() {
    $.ajax({
      url: "../include/snippets/getPromo.php?id=" + this.value,
      method: "GET",
      context: this,
      success: function(data) {
        $(this)
          .closest("tr")
          .find(".promo-value")
          .val(data * 100);

        $subtotal = parseInt(
          $(".product-subtotal")
            .html()
            .replace("%", "")
        );
        $promo = data;
        $discount = $subtotal * $promo;
        $discountText = formatNumber($discount);
        $(".product-discount").html($discountText);
        $total = $subtotal - $discount;
        $totalText = formatNumber($total);
        $(".product-total").html($totalText);
      }
    });
  });

  //AJAX function to update report per Month in Home page
  function loadMonth(month, year) {
    $(".table-body").empty();
    $.ajax({
      url:
        "../include/snippets/report-getMonth.php?month=" +
        month +
        "&year=" +
        year,
      method: "GET",
      context: this,
      // data: { view: view },
      // dataType: "json",
      success: function(data) {
        $(".table-body").append(data);
        $totalRev = $(".hidden-revenue").val();
        // console.log($totalRev);
        $(".total-revenue").html($totalRev);
      }
    });
  }

  loadMonth($(".month-select").val(), $(".year-select").val());

  $(".report-form").on("change", ".month-select", function() {
    loadMonth(this.value, $("#inputYearReport").val());
  });
  $(".report-form").on("change", ".year-select", function() {
    loadMonth($("#inputMonthReport").val(), this.value);
  });

  // end $document.ready
});
