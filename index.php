<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://www.cse.ust.hk/~rossiter/dating_web_site.js"></script>
        <title></title>
    </head>
    <body>
        <h1>Please Enter Your Details For Our Dating Website!</h1>
        <form method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Your Face</legend>
                <label for="avatar">Your image:</label>
                <input type="file" id="avatar" name="avatar" required>
                <br>
                <label>Image preview: </label>
                <image id="preview" src="">
            </fieldset>
           
            <fieldset>
                <legend>Your General Detail</legend>
                <label>Name:</label>
                <input type="text" name="name" size="20" required=""><br>
                <label>Gender:</label>
                    <input type="radio" name="sex" value="male" required>Male
                    <input type="radio" name="sex" value="female">Female<br>
                <label>Age:</label>
                <input type="number" name="age" required><br>
                <label>Date of Birth: </label>
                    <input type="date" name="dob"><br>
                <label>Favorite Color: </label>
                <input type="color" name="color"><br>
                <label>Which Country:</label>
                <select>
                    <option value="China">China</option>
                    <option value="USA">United States</option>
                    <option value="UK">Unite Kingdom</option>
                    <option value="JP">Japan</option>
                </select>
            </fieldset>
           
            <fieldset>
                <legend>Your Indicators</legend>
                <label>Height: </label><span class="front">Short</span><input type="range"><span class="back">Tall</span><br>
                <label>Salary: </label><span class="front">Poor</span><input type="range"><span class="back">Rich</span>
            </fieldset>
            
            <fieldset>
                <legend>Your Contact Information</legend>
                <label>Email: </label><input type="email" size="50"><br>
                <label>Mobile: </label><input type="tel" size="50"><br>
                <label>Address: </label><textarea rows="10" cols="90"></textarea><br>
                <label>Method to contact you: </label>
                <input type="checkbox" name="contact" value="email" required>Email &nbsp;
                <input type="checkbox" name="contack" value="app">What's app &nbsp;
                <input type="checkbox" name="contack" value="inapp">In-app chat
            </fieldset>
            
            <input type="submit" vaule="Submit">
        </form>
    </body>
</html>
