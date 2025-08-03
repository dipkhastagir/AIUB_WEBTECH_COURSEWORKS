<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bank Management System</title>
        <style>
            body 
            {
                font-family: Arial, sans-serif;
                background-color: #eaf3fb;
                margin: 0;
                padding: 0;
            }

            .header 
            {
                text-align: center;
                padding: 30px;
            }

            #main-title
            {
                font-size: 32px;
                font-weight: bold;
                color: #002c5f;
            }

            #sub-title
            {
                font-size: 18px;
                color: #113b6f;
            }

            .form-container
            {
                width: 500px;
                background: #ffffff;
                padding: 20px;
                border: 1px solid;
                margin-left: 40px;
                margin-top: 20px;
                position: relative;
            }

            .form-container h3
            {
                margin-top: 0;
            }

            .form-group
            {
                margin-bottom: 15px;
            }

            .form-group label
            {
                display: inline-block;
                width: 150px;
                vertical-align: top;
            }

            .form-group input[type="text"],
            .form-group input[type="email"],
            .form-group input[type="password"],
            .form-group input[type="date"],
            .form-group input[type="file"],
            .form-group select,
            .form-group textarea 
            {
                width: 250px;
                padding: 5px;
                border: 1px solid;
            }

            .form-group textarea 
            {
                height: 40px;
                resize: vertical;
            }

            input:focus, select:focus, textarea:focus 
            {
                outline: 2px solid #4da3ff;
            }

            .gender-options 
            {
                display: inline-block;
                width: 250px;
            }

            .form-buttons 
            {
              text-align: left;
              margin-left: 150px;
            }

            .btn 
            {
                padding: 8px 15px;
                margin: 5px 5px 0 0;
                background-color: #007bff;
                border: none;
                color: white;
                cursor: pointer;
            }

            .btn:hover 
            {
                background-color: #0056b3;
            }

            #overflow-box 
            {
                width: 300px;
                height: 70px;
                border: 1px solid #888;
                overflow: auto;
                margin-left: 40px;
                margin-top: 10px;
                padding: 5px;
                background: #fefefe;
            }
        </style>
    </head>
    
    <body>
        <div class="header">
            <div id="main-title">Bank Management System</div>
            <div id="sub-title">Your Trusted Financial Partner</div>
        </div>

        <div class="form-container">
            <h3>Customer Registration Form</h3>

            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname">
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob">
            </div>

            <div class="form-group">
                <label>Gender:</label>
                <div class="gender-options">
                    <input type="radio" name="gender" id="male"> Male
                    <input type="radio" name="gender" id="female"> Female
                    <input type="radio" name="gender" id="other"> Other
                </div>
            </div>

            <div class="form-group">
                <label for="marital">Marital Status:</label>
                <select id="marital">
                    <option>Single</option>
                    <option>Married</option>
                    <option>Divorced</option>
                </select>
            </div>

            <div class="form-group">
                <label for="account">Account Type:</label>
                <select id="account">
                    <option>Savings</option>
                    <option>Checking</option>
                </select>
            </div>

            <div class="form-group">
                <label for="deposit">Initial Deposit Amount:</label>
                <input type="text" id="deposit">
            </div>

            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="text" id="mobile">
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address"></textarea>
            </div>

            <div class="form-group">
                <label for="occupation">Occupation:</label>
                <input type="text" id="occupation">
            </div>

            <div class="form-group">
                <label for="nid">National ID (NID):</label>
                <input type="text" id="nid">
            </div>

            <div class="form-group">
                <label for="password">Set Password:</label>
                <input type="password" id="password">
            </div>

            <div class="form-group">
                <label for="idproof">Upload ID Proof:</label>
                <input type="file" id="idproof">
            </div>

            <div class="form-group">
                <label></label>
                <input type="checkbox" id="terms"> I agree to the terms and conditions
            </div>

            <div class="form-buttons">
                <button class="btn">Register</button>
                <button class="btn" type="reset">Clear</button>
            </div>
        </div>

        <div id="overflow-box">
            This is a demo text to show how overflow works in a small container with a fixed height and width. You can scroll to see more content here if it exceeds the limit.
        </div>

    </body>
</html>
