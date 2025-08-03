function donationForm() 
{
    let fname = document.getElementById("fname").value;
    let lname = document.getElementById("lname").value;
    let phone = document.getElementById("phone").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm_password").value;

    let namePattern = /^[A-Za-z ]+$/;
    if (!namePattern.test(fname) || !namePattern.test(lname)) 
    {
        alert("Name fields must contain only letters.");
        return false;
    }

    if (!/^\d{11}$/.test(phone)) 
    {
        alert("Phone number must be 11 digits.");
        return false;
    }

    if (password !== confirmPassword) 
    {
        alert("Passwords do not match.");
        return false;
    }

    let passPattern = /(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])/;
    if (!passPattern.test(password)) 
    {
        alert("Password must include uppercase, lowercase, digit, and special character.");
        return false;
    }

    let donationRadios = document.getElementsByName("amount");
    let donationSelected = false;

    for (let radio of donationRadios) 
    {
        if (radio.checked) 
        {
            donationSelected = true;
            break;
        }
    }

    if (!donationSelected) 
    {
        alert("Please select a donation amount.");
        return false;
    }

    alert("Form submitted successfully!");
    return true;
}
