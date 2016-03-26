function calculate()
{
   varHeight = (Number(document.getElementById("feet").value) * 12) + Number(document.getElementById("inches").value);
   varWeight = Number(document.getElementById("weight").value);
   varAge = Number(document.getElementById("age").value);
   varActivity = Number(document.getElementById("activity").value);
   varCarbs = Number(document.getElementById("carbs").value);
   
   varBMR = 0;
   
   if(document.getElementById("male").checked)
   {
      varBMR = 66 + ( 6.23 * varWeight ) + ( 12.7 * varHeight ) - ( 6.8 * varAge );
   }
   else
   {
      varBMR = 655 + ( 4.35 * varWeight ) + ( 4.7 * varHeight ) - ( 4.7 * varAge );
   }
   
   varCalories = varBMR * varActivity;
   
   varCarbPercent = (varCarbs * 4) / varCalories;
   
   varTDD = ((varWeight / 4) / .5) * varCarbPercent;
   
   varCarbRatio = (varCarbs * 2) / varTDD;
   
   varCorrection = (varCarbRatio * 1800) / 500;
   
   varBasal = (varTDD / 2) / 24;
   
   document.getElementById("TDD").innerHTML = varTDD.toFixed(1) + " units";
   document.getElementById("carb").innerHTML = "1 unit/" + varCarbRatio.toFixed(1) + " grams";
   document.getElementById("correction").innerHTML = "1 unit/" + varCorrection.toFixed(1) + " mg/dl";
   document.getElementById("basal").innerHTML = varBasal.toFixed(3) + " units/hour";
   document.getElementById("bmr").innerHTML = varBMR.toFixed(0);
   document.getElementById("calories").innerHTML = varCalories.toFixed(0);
   document.getElementById("percent").innerHTML = (varCarbPercent * 100).toFixed(0) + "%";
}