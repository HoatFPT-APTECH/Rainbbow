var data = JSON.parse(
    document.querySelector("meta[name='data']").getAttribute("content")
);
var voucherCode = null;
const userS = JSON.parse(window.sessionStorage.getItem("User"));
function loadUI() {
    var STime_Hour = document.querySelectorAll(".time_hours");

    var time = STime_Hour[0].innerHTML;
    for (var e = 0; e < STime_Hour.length; e++) {
        STime_Hour[e].innerHTML = getHour(time);
    }

    var STime_DMYear = document.querySelector("#time_date");
    STime_DMYear.innerHTML = getDMYear(time);
    // setup total price
    var priceTickets = document.querySelectorAll(".ticket_price");
    var totalPrice = 0;
    for (var e = 0; e < priceTickets.length; e++) {
        totalPrice += parseFloat(priceTickets[e].innerHTML);
    }
    var totalPriceB = document.querySelector("#total_price");
    totalPriceB.innerHTML = totalPrice;
    document.querySelector("#subTotal").innerHTML = `$${totalPrice}`;
}
function checkVoucher() {
    var Ivoucher = document.querySelector(
        "body > div.st_dtts_wrapper.float_left > div > div > div.col-xl-4.col-lg-4.col-md-12.col-sm-12.col-12 > div > div > div > div.st_dtts_sb_h2.float_left > div > input"
    );
    var voucher = Ivoucher.value;
    fetch("/api/checkVoucher", {
        method: "post",
        headers: {
            "Content-type": "application/json",
            "X-CSRF-TOKEN": csrfToken, // Thêm CSRF token vào headers
        },
        body: JSON.stringify({
            userId: userS.Id,
            promotionId: voucher,
        }),
    })
        .then((rsp) => {
            if (rsp.ok) {
                return rsp.json();
            } else {
                return rsp.json();
            }
        })
        .then((data) => {
            if (data.message != null) {
                alert("Your voucher code is incorrect !");
            } else {
              
                if (data.Used === 1) alert("This voucher code is used !");
                else {
                    renderDataVoucher(data);
                    voucherCode = data.Id;
                }
            }
            Ivoucher.value = "";
        })
        .catch((err) => console.log(err));
}
function renderDataVoucher(data) {

    var BtotalPrice = document.querySelector("#total_price");
    var totalPrice = parseFloat(BtotalPrice.innerHTML);
    console.log(totalPrice);
    var content = `Voucher code: <span>${data.Id}</span> <br>
     Voucher Discount: <span>- $${data.promotion_category.Coefficient}</span> <br>
    `;
    var liVoucher = document.querySelector("#liVoucher");
    liVoucher.innerHTML = content;
    var subtotalS = document.querySelector("#subTotal");
    subtotalS.innerHTML = `$${
        totalPrice - data.promotion_category.Coefficient
    }`;
}

function postBookingType() {
    var pathQ = `/rainbow/booking_type/create?User_Id=${userS.Id} 
    &&Tickets_Id=${data.tickets_Id}
    &&Showtime_Id=${data.showTime_Id}
    &&Promotion_Id=${voucherCode}
    &&Movie_Id=${data.movie_Id}

    `;
    window.location.href = pathQ;
}

window.addEventListener("DOMContentLoaded", () => {
    loadUI();
});
