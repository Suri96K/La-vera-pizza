function isEmpty(elemValue, field){
    if(elemValue=="" || elemValue==null){
        alert("You cannot have " + field + " field empty");
        return true;
    }
    else{
        return false;
    }
}

    
function isAlphebatic(elemValue){
    var exp = /^[a-zA-Z]+$/;
    if(!isEmpty(elemValue, "lname"))
    {
        if(elemValue.match(exp)) {
            return true;
        }
        else
        {
            alert("Enter only text for your  last name");
            return false;
        }
    }
    else{
        return false;
    }
}

    
function isAlphebatic(elemValue){
    var exp = /^[a-zA-Z]+$/;
    if(!isEmpty(elemValue, "fname"))
    {
        if(elemValue.match(exp)) {
            return true;
        }
        else
        {
            alert("Enter only text for your  first name");
            return false;
        }
    }
    else{
        return false;
    }
}


function isNumeric(elemValue)
{
    if(!isEmpty(elemValue, "mobileno"))
    {
        var exp = /^[0-9]+$/;
        if(elemValue.match(exp)){
            return true;
        }
        else
        {
            alert("Enter only numbers to mobile number");
            return false;
        }
    }
    else{
        return false;
    }
}

function isNumeric(elemValue)
{
    if(!isEmpty(elemValue, "nic"))
    {
        var exp = /^[0-9]+$/;
        if(elemValue.match(exp)){
            return true;
        }
        else
        {
            alert("Enter only numbers to NIC");
            return false;
        }
    }
    else{
        return false;
    }
}

function confirmPassword(p1, p2) {
    if(!isEmpty(p1, "Password"))
    {
        if(!isEmpty(p2, "Confirm Password"))
        {
            if(p1.length >= 8)
            {
                var pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

                if(p1.match(pass))
                {
                    if(p1 != p2)
                    {
                        alert("Password didn't match!");
                        return false;
                    }
                    else
                    {
                        return true;
                    }
                }

                else
                {
                    alert("Password must be a combination of uppercase characters, lowercase characters, numeric characters and a special character!");
                    return false;
                }
            }

            else
            {
                alert("Password must at least 8 characters long!");
            }
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
}    
    
    