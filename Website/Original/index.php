<?php include("includes/header.php"); ?>
   <td class="contentBorder">
      <p>The information below is intended to give you an estimation of the best settings for your insulin pump. Please enter as much information as possible for the best recommended settings.</p>
      <table>
         <tr>
            <td>
               <table class="calculator">
                  <tr>
                     <td><h1>Information</h1></td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>Height</td>
                     <td><input class="inputtext" type="text" id="feet" /> ft <input class="inputtext" type="text" id="inches" /> in</td>
                  </tr>
                  <tr>
                     <td>Weight</td>
                     <td><input class="inputtext" type="text" id="weight" /> lbs</td>
                  </tr>
                  <tr>
                     <td>Age</td>
                     <td><input class="inputtext" type="text" id="age" /> yrs</td>
                  </tr>
                  <tr>
                     <td><input type="radio" name="sex" id="male" />Male</td>
                     <td><input type="radio" name="sex" id="female" />Female</td>
                  </tr>
                  <tr>
                     <td>Exercise/Week</td>
                     <td>
                        <select id="activity">
                           <option value="1.2">0</option>
                           <option value="1.258">1</option>
                           <option value="1.317">2</option>
                           <option value="1.375">3</option>
                           <option value="1.433">4</option>
                           <option value="1.492">5</option>
                           <option value="1.55">6</option>
                           <option value="1.608">7</option>
                           <option value="1.667">8</option>
                           <option value="1.725">9</option>
                           <option value="1.783">10</option>
                           <option value="1.842">11</option>
                           <option value="1.9">12</option>
                        </select>
                        hours
                     </td>
                  </tr>
                  <tr>
                     <td>Average Carbs/Day</td>
                     <td><input class="inputtext" type="text" id="carbs" /> grams</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td><input type="button" value="Calculate" onclick="javascript:calculate()" /></td>
                  </tr>
                  <tr>
                     <td><h1>Results</h1></td>
                     <td></td>
                  </tr>
                  <tr>
                     <td>Total Daily Dose</td>
                     <td class="result" id="TDD"></td>
                  </tr>
                  <tr>
                     <td>Carb Ratio</td>
                     <td class="result" id="carb"></td>
                  </tr>
                  <tr>
                     <td>Correction Ratio</td>
                     <td class="result" id="correction"></td>
                  </tr>
                  <tr>
                     <td>Basal Rate</td>
                     <td class="result" id="basal"></td>
                  </tr>
                  <tr>
                     <td>Base Metabolic Rate</td>
                     <td class="result" id="bmr"></td>
                  </tr>
                  <tr>
                     <td>Calories Burned/Day</td>
                     <td class="result" id="calories"></td>
                  </tr>
                  <tr>
                     <td>Calorie % From Carbs</td>
                     <td class="result" id="percent"></td>
                  </tr>
               </table>
            </td>
            <td>
               <table class="acrodef">
                  <tr>
                     <td><h1>Definitions</h1></td>
                  </tr>
                  <tr>
                     <td><b>Basal Rate</b><br/>The average number of units of basal insulin administered by your pump in a one hour period.</td>
                  </tr>
                  <tr>
                     <td><b>Base Metabolic Rate</b><br/>The base number of calories your body will burn in a 24 hour period before accounting for activity level.</td>
                  </tr>
                  <tr>
                     <td><b>Calories Burned Per Day</b><br/>The total number of calories your body will burn in a 24 hour period after accounting for activity level.</td>
                  </tr>
                  <tr>
                     <td><b>Calorie Percent From Carbs</b><br/>The percentage of your total daily calorie intake that comes from carbohydrates.</td>
                  </tr>
                  <tr>
                     <td><b>Carb Ratio</b><br/>The number of carbohydrates, measured in grams, that one unit of insulin will cover.</td>
                  </tr>
                  <tr>
                     <td><b>Correction Ratio</b><br/>The amount your blood sugar will drop, measured in mg/dl, when administering a one unit of insulin correction bolus on your pump.</td>
                  </tr>
                  <tr>
                     <td><b>Total Daily Dose</b><br/>The total number of units of insulin, basal and bolus, administered by your pump in a 24 hour period.</td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
   </td>
<?php include("includes/footer.php"); ?>