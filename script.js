// Calculate price based on fuel type and quantity
document.getElementById("calculatePrice").addEventListener("click", function() {
    const fuelType = document.getElementById("fuel_type").value;
    const quantity = parseFloat(document.getElementById("quantity").value);
    
    // Define prices per liter for different fuel types (customize as needed)
    const prices = {
        petrol: 111.62,
        diesel: 99.36,
        natural_gas: 94
    };

    if (!isNaN(quantity) && quantity > 0) {
        const price = quantity * prices[fuelType];
        document.getElementById("price").value = + price.toFixed(2);
    } else {
        alert("Please enter a valid quantity.");
    }
});
