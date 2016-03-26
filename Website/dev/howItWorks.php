<?php include("includes/header.php"); ?>
   <td class="contentBorder">
      <p>This page provides an in-depth look at the formula that drives <a href="index.php">Pump Calculator</a> to provide to most accurate insulin pump setting recommendations possible.</p>
      <h1>Step 1 - Calculate Base Metabolic Rate</h1>
      <p>Base Metabolic Rate is calculated using the <a href="resources.php#bmr">BMR Formula</a> shown below. This formula uses the variables of height, weight, age and gender.</p>
      <p><b>Women BMR</b> = 655 + (4.35 * weight) + (4.7 * height) - (4.7 * age)</p>
      <p><b>Men BMR</b> = 66 + (6.23 * weight) + (12.7 * height) - (6.8 * age)</p>
      <h1>Step 2 - Calculate Calories Burned Per Day</h1>
      <p>Calories Burned Per Day is calculated using the <a href="resources.php#harris">Harris Benedict Formula</a> shown below. This formula uses the variables base metabolic rate and hours of exercise per week.</p>
      <p><b>Calories Burned Per Day</b> = BMR * (1.2 + (0.0583 * hour of exercise per week))</p>
      <h1>Step 3 - Calculate Calorie Percent From Carbs</h1>
      <p>Calorie Percent From Carbs is calculated using the formula show below. This formula uses the variables calories burned per day and average carbs eaten per day.</p>
      <p><b>Calorie Percent From Carbs</b> = (carbs eaten per day * 4) / calories burned per day</p>
      <h1>Step 4 - Calculate Total Daily Dose</h1>
      <p>Total Daily Dose is calculated using the modified <a href="resources.php#tdd">Insulin Sensitivity</a> formula shown below. This formula uses the variables weight and calorie percent from carbs.</p>
      <p><b>Total Daily Dose</b> = ((weight / 4) / 0.5) * calorie percent from carbs</p>
      <h1>Step 5 - Calculate Carb Ratio</h1>
      <p>Carb Ratio is calculated using the modified <a href="resources.php#500">500 Rule</a> formula shown below. This formula uses the variables average carbs eaten per day and total daily dose.</p>
      <p><b>Carb Ratio</b> = (carbs eaten per day * 2) / total daily dose</p>
      <h1>Step 6 - Calculate Correction Ratio</h1>
      <p>Correction Ratio is calculated using the modified <a href="resources.php#1800">1800 Rule</a> formula shown below. This formula uses the variable carb ratio.</p>
      <p><b>Correction Ratio</b> = (carb ratio * 1800) / 500</p>
      <h1>Step 7 - Calculate Basal Rate</h1>
      <p>Basal Rate is calculated using the formula shown below, which incorporates the <a href="resources.php#basal">Basal Insulin</a> formula. This formula uses the variable total daily does.</p>
      <p><b>Basal Rate</b> = (total daily dose / 2) / 24</p>
   </td>
<?php include("includes/footer.php"); ?>