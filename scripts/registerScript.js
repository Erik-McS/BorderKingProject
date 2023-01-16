//alert('Register script added');

// function to validate the form data
var globalEvent;

function registrationFormValidation(event){

    //alert('validation event added');
    globalEvent=event;
    // creating the variable that will contains the text fields values.

    var firstname=document.getElementById('firstname');
    var lastname=document.getElementById('lastname');
    var email=document.getElementById('email');
    var password=document.getElementById('password');

    // create variables to manipulate the labels
    var lb_firstname=document.getElementById('lb_firstname');
    var lb_lastname=document.getElementById('lb_lastname');
    var lb_email=document.getElementById('lb_email');
    var lb_password=document.getElementById('lb_password');

    // calling the validation functions
    checkFirstname(firstname);
    checkLastname(lastname);
    checkEmail(email);
    checkPassword(password);
}

function checkFirstname(firstname){

    // we check that the first name is valid
    
    // defining a RegEx to check if the text contains any numbers
    var namePattern= /[0-9]/;
    // checking the firstname, must not contains numbers or less than 2 characters
    if(firstname.value==""||firstname.value.length<2||namePattern.test(firstname.value))
    {
        //alert('Checking firstname');
        // setting the lable text color to red
        lb_firstname.style.color="red";
        // change the text field border to red
        // this function is at the end of this file
        redFieldBorder(firstname);
        // displaying error message
        lb_firstname.innerHTML="Incorrect format for a first name";
        // focus on the firstname filed
        firstname.focus();
        // we want to stop the form submission, but first need to check if the function is supported
        // by the browser
        if(typeof event.preventDefault !=undefined){
            event.preventDefault();
            //alert('submission prevented');
        }
        // if not, we return a false value
        else
        {
            event.returnvalue=false;
            //alert('submission prevented');
        }
    }
    // if the format condition are met
    else
    {

        lb_firstname.innerHTML="First Name";
        lb_firstname.style.color="white";
        //alert('good');
    }
}

function checkLastname(lastname){

    // we check that the last name is valid
    //alert('Checking lastname');
    // defining a RegEx to check if the text contains any numbers
    var namePattern= /[0-9]/;
    // checking the lastname, must not contains numbers or less than 2 characters
    if(namePattern.test(lastname.value)||lastname.value==""||lastname.value.length<2)
    {
        // setting the lable text color to red
        lb_lastname.style.color="red";
        // displaying error message
        lb_lastname.innerHTML="Incorrect format for a last name";
        // changing the textfield border to red
        redFieldBorder(lastname)
        // focus on the firstname field
        lastname.focus();
        // we want to stop the form submission, but first need to check if the function is supported
        // by the browser
        if(typeof event.preventDefault !=undefined){
            event.preventDefault();
            //alert('incorrect');
        }
        // if not, we return a false value
        else
        {
            //alert('incorrect');
            event.returnvalue=false;
        }
    }
    // if the format condition are met
    else
    {
        lb_lastname.innerHTML="Last Name";
        lb_lastname.style.color="white";
        //alert('good')
    }
}

function checkEmail(email){
    // alert('Checking email');
    // if the email field is empty
    if(email.value==''){
        // changing the label text color
        lb_email.style.color='red';
        // puting an error message
        lb_email.innerHTML="Invalid email format"
        // changing the textfield border to red
        redFieldBorder(lastname)
        // making sure the form is not submitted
        if(typeof event.preventDefault !=undefined){
            event.preventDefault();
        }
        // if not, we return a false value
        else
        {
            event.returnvalue=false;
        }

    }

    else{
        // setting to default style if needed
            lb_email.innerHTML="Email";
            lb_email.style.color="white";
    }
}
function checkPassword(password){
    // RegEx to make sure password conatain at least one digit
    var namePattern= /[0-9]/;
    // if the password has a digit
    if(password.test(namePattern))
    {
        lb_password.innerHTML="Email";
        lb_password.style.color="white";
    }
    // otherwise
    else
    {
        lb_password.style.color='red';
        lb_password.innerHTML="Password must contains at least one number!"
    }

}
// function to change a textfield border to red.
function redFieldBorder(fieldID){
    // put to solid so it can be seen
    fieldID.style.borderStyle='solid';
    // change the border color
    fieldID.style.borderColor='red';
}