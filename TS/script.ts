export const btncal = document.getElementById("btncal") as HTMLButtonElement ;

function operationn(): void {
    const heightFeet = Number((document.getElementById("height_feet") as HTMLInputElement).value);
    const heightInch = Number((document.getElementById("height_inch") as HTMLInputElement).value);

    const genderInput = document.querySelector<HTMLInputElement>('input[name="gender"]:checked');
    const gender: string | null = genderInput ? genderInput.value : null;

    const age = Number((document.getElementById("age") as HTMLInputElement).value);
    const weight = Number((document.getElementById("weight_kg") as HTMLInputElement).value);

    const bmr_res = document.getElementById("bmr_result") as HTMLParagraphElement;
    const res = document.getElementById("bmi_result") as HTMLHeadingElement;

    let heightInMeters: number = (heightFeet * 0.3048) + (heightInch * 0.0254);

    let bmi: number = weight / (heightInMeters * heightInMeters);

    let resultText: string = `Your BMI is ${bmi.toFixed(2)}. `;

    if (!isNaN(bmi) && bmi !== Infinity) {
        res.innerHTML = resultText;

        let bmr: number;

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

        (document.getElementById("bmr_fieldset") as HTMLElement).style.visibility = "visible";

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

btncal!.addEventListener("click", operationn);