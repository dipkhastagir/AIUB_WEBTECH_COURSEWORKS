<!DOCTYPE html>
<html>
    <head>
        <title>This is a registration form</title>
    </head>
    <body>
        <center>
            <h1>AIUB</h1>
            <h2>Registration Form</h2>
        </center>

        <h3 align="left">Complete the Registration</h3>

        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text"></td>
                <td>Password: <input type="text"></td>
            </tr>

            <tr>
                <td>Select your language</td>
                <td>
                    <input type="radio" name="des"> Male
                    <input type="radio" name="des"> Other
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="checkbox"> English
                    <input type="checkbox"> Bengali
                    <input type="checkbox"> Hindi
                </td>
            </tr>

            <tr>
                <td>Country:</td>
                <td>
                    <select>
                        <option value="">--Select Option</option>
                        <option value="">Bangladesh</option>
                        <option value="">Japan</option>
                        <option value="">USA</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Date of Birth:</td>
                <td><input type="date"></td>
            </tr>

            <tr>
                <td>Upload Photo:</td>
                <td><input type="file"></td>
            </tr>

            <tr>
                <td>Comments:</td>
                <td><textarea></textarea></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Register"></td>
            </tr>
        </table>
    </body>
</html>
