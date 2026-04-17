const btncall = document.getElementById("btncal");

function operation() {
    const heightFeet = document.getElementById("height_feet").value;
    const heightInch = document.getElementById("height_inch").value;

    const genderInput = document.querySelector('input[name="gender"]:checked');
    const gender = genderInput ? genderInput.value : null;

    const age = document.getElementById("age").value;

    let bmr_res= document.getElementById("bmr_result");

    let heightInMeters = (heightFeet * 0.3048) + (heightInch * 0.0254);

    const weight = document.getElementById("weight_kg").value;
    let bmi = weight / (heightInMeters * heightInMeters);

    let resultText = `Your BMI is ${bmi.toFixed(2)}. `;

    if( !isNaN(bmi) && bmi !== Infinity) {
        let res = document.getElementById("bmi_result");
        res.innerHTML = resultText;


        if(gender === "male"){
            let bmr = (10 * weight) + (6.25 * heightInMeters * 100) - (5 * age) + 5; // Assuming age is 30
            bmr_res.innerHTML = `Your BMR is ${bmr.toFixed(2)} calories/day.`;
            document.getElementById("bmr_fieldset").style.visibility = "visible";
        }else if(gender === "female"){
            let bmr = (10 * weight) + (6.25 * heightInMeters * 100) - (5 * age) - 161; // Assuming age is 30
            bmr_res.innerHTML = `Your BMR is ${bmr.toFixed(2)} calories/day.`;
            document.getElementById("bmr_fieldset").style.visibility = "visible";
        }else{
            bmr_res.innerHTML = "Please select a valid gender to calculate BMR.";
            document.getElementById("bmr_fieldset").style.visibility = "visible";
        }

        

        if(bmi < 18.5) {
            res.innerHTML += "<br>You are underweight.";
            res.style.backgroundColor = "red";
        } else if(bmi >= 18.5 && bmi < 24.9) {
            res.innerHTML += "<br>You have a normal weight.";
            res.style.backgroundColor = "green";
        } else if(bmi >= 25 && bmi < 29.9) {
            res.innerHTML += "<br>You are overweight.";
            res.style.backgroundColor = "orange";
        } else {
            res.innerHTML += "<br>You are obese.";
            res.style.backgroundColor = "red";
        }
    }
    
}
btncall.addEventListener("click", operation);