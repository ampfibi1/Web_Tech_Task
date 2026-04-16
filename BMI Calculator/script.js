const btncall = document.getElementById("btncal");

function operation() {
    const heightFeet = document.getElementById("height_feet").value;
    const heightInch = document.getElementById("height_inch").value;

    let heightInMeters = (heightFeet * 0.3048) + (heightInch * 0.0254);

    const weight = document.getElementById("weight_kg").value;
    let bmi = weight / (heightInMeters * heightInMeters);

    let resultText = `Your BMI is ${bmi.toFixed(2)}. `;

    if( !isNaN(bmi)) {
        let res = document.getElementById("bmi_result");
        res.innerHTML = resultText;

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