let win = window.location.href;
let getHref = win.split("invoice");

function changing(self) {
    let getId = self.value;
    if (getId) {
        fetch(getHref[0] + "testing/" + getId, {
            method: "GET", // *GET, POST, PUT, DELETE, etc.
            headers: {
                "Content-Type": "application/json",
                // 'Content-Type': 'application/x-www-form-urlencoded',
            },
        })
            .then((response) => response.json())
            .then((data) => {
                let products = document.querySelector(".products");
                products.innerHTML = "";
                products.innerHTML = `<option label="Choose one"></option>`;
                data.forEach((value) => {
                    products.innerHTML += `<option value="${value.product_name}"> ${value.product_name}</option>`;
                });
            });
    }
}

function calcTaxAndTotal(self) {
    let ValueRating = +self.value;
    let AmountCommission = +document.getElementById("amount_Commission").value;
    let ValueVat = +document.getElementById("value_vat").value;

    let RateValue = document.getElementById("rate_value");
    let Total = document.getElementById("total");

    let FinalRateValue = document.getElementById("final_rate_value");
    let FinalTotal = document.getElementById("final_total");

    if (ValueRating == undefined) {
        alert("Please Enter Your Rate Vat ");
    } else {

        let BeforeDis = AmountCommission - ValueVat;
        let result = BeforeDis * ValueRating / 100;
        let BeforeTotal = result + BeforeDis;

        RateValue.value = ValueRating.toFixed(2);
        Total.value = BeforeTotal.toFixed(2);

        // hidden inputs
        FinalRateValue.value = ValueRating.toFixed(2);
        FinalTotal.value = BeforeTotal.toFixed(2);

    }
}
