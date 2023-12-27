document.addEventListener("DOMContentLoaded", function () {
    var kidsInput = document.getElementById("kids");
    var adultsInput = document.getElementById("adults");
    var totalTextarea = document.getElementById("amount");

    function calculateTotal() {
        var numberOfKids = parseInt(kidsInput.value) || 0;
        var numberOfAdults = parseInt(adultsInput.value) || 0;

        var amount = 100 * numberOfKids + 120 * numberOfAdults;
        totalTextarea.value = amount;
    }

    kidsInput.addEventListener("input", calculateTotal);
    adultsInput.addEventListener("input", calculateTotal);
});
