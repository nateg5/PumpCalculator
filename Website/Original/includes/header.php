<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>Pump Calculator</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="description" content="A resource for calculating the correct settings for an insulin pump." />
      <meta name="keywords" content="insulin pump, pump calulator, diabetes, insulin sensitivity, total daily dose, carb ratio, correction factor, basal rate" />
      <meta name="robot" content="index,follow" />
      <meta name="author" content="Nate Gardner" />
      <meta name="revisit-after" content="30" />
      <link rel="stylesheet" type="text/css" href="style/style.css" />
   </head>
   <body>
      <table class="mainTable">
         <tr>
            <td class="logo"><a href="index.php"></a></td>
         </tr>
         <tr>
            <td>
               <table>
                  <tr>
                     <td>
                        <table class="nav">
                           <tr>
                              <td>
                                 <a href="index.php"<?php if(strrchr($_SERVER["SCRIPT_NAME"], "/") == "/index.php") { echo " style='background-color: #000080;'"; } ?>>Home</a>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <a href="about.php"<?php if(strrchr($_SERVER["SCRIPT_NAME"], "/") == "/about.php") { echo " style='background-color: #000080;'"; } ?>>About</a>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <a href="howItWorks.php"<?php if(strrchr($_SERVER["SCRIPT_NAME"], "/") == "/howItWorks.php") { echo " style='background-color: #000080;'"; } ?>>How It Works</a>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <a href="resources.php"<?php if(strrchr($_SERVER["SCRIPT_NAME"], "/") == "/resources.php") { echo " style='background-color: #000080;'"; } ?>>Resources</a>
                              </td>
                           </tr>
                        </table>
                     </td>
                     <td>
                        <table class="navExt">
                           <tr>
                              <td>
                                 <div<?php if(strrchr($_SERVER["SCRIPT_NAME"], "/") == "/index.php") { echo " style='background-color: #000080;'"; } ?>></div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div<?php if(strrchr($_SERVER["SCRIPT_NAME"], "/") == "/about.php") { echo " style='background-color: #000080;'"; } ?>></div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div<?php if(strrchr($_SERVER["SCRIPT_NAME"], "/") == "/howItWorks.php") { echo " style='background-color: #000080;'"; } ?>></div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <div<?php if(strrchr($_SERVER["SCRIPT_NAME"], "/") == "/resources.php") { echo " style='background-color: #000080;'"; } ?>></div>
                              </td>
                           </tr>
                        </table>
                     </td>
                     <td class="content">
                        <table>
                           <tr>