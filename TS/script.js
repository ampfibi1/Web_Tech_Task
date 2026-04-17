"use strict";
const btncal = document.getElementById("btncal");
function operationn() {
    const heightFeet = Number(document.getElementById("height_feet").value);
    const heightInch = Number(document.getElementById("height_inch").value);
    const genderInput = document.querySelector('input[name="gender"]:checked');
    const gender = genderInput ? genderInput.value : null;
    const age = Number(document.getElementById("age").value);
    const weight = Number(document.getElementById("weight_kg").value);
    const bmr_res = document.getElementById("bmr_result");
    const res = document.getElementById("bmi_result");
    let heightInMeters = (heightFeet * 0.3048) + (heightInch * 0.0254);
    let bmi = weight / (heightInMeters * heightInMeters);
    let resultText = `Your BMI is ${bmi.toFixed(2)}. `;
    if (!isNaN(bmi) && bmi !== Infinity) {
        res.innerHTML = resultText;
        let bmr;
        if (gender === "male") {
            bmr = (10 * weight) + (6.25 * heightInMeters * 100) - (5 * age) + 5;
            bmr_res.innerHTML = `Your BMR is ${bmr.toFixed(2)} calories/day.`;
        }
        else if (gender === "female") {
            bmr = (10 * weight) + (6.25 * heightInMeters * 100) - (5 * age) - 161;
            bmr_res.innerHTML = `Your BMR is ${bmr.toFixed(2)} calories/day.`;
        }
        else {
            bmr_res.innerHTML = "Please select a valid gender to calculate BMR.";
        }
        document.getElementById("bmr_fieldset").style.visibility = "visible";
        if (bmi < 18.5) {
            res.innerHTML += "<br>You are underweight.";
            res.style.backgroundColor = "red";
        }
        else if (bmi >= 18.5 && bmi < 24.9) {
            res.innerHTML += "<br>You have a normal weight.";
            res.style.backgroundColor = "green";
        }
        else if (bmi >= 25 && bmi < 29.9) {
            res.innerHTML += "<br>You are overweight.";
            res.style.backgroundColor = "orange";
        }
        else {
            res.innerHTML += "<br>You are obese.";
            res.style.backgroundColor = "red";
        }
    }
}
if (btncal) {
    btncal.addEventListener("click", operationn);
}
