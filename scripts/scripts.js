//alert("Script file loaded")


// the following script will add two event listener to the buttons on the shop bage, and login page, the shop
// page and login frame.
// one for a mouse over, one for a mouse out.
// the functions will change the color of the button.


document.querySelectorAll('.loginButton').forEach(
    item=>{
        item.addEventListener('mouseover',buttonColorOver,false);
        item.addEventListener('mouseout',buttonColorOut,false);
    }
)

document.querySelectorAll('.shopButton').forEach(
    item=>{
        item.addEventListener('mouseover',buttonColorOverInv,false);
        item.addEventListener('mouseout',buttonColorOutInv,false);
        item.addEventListener('click',onShopClick,false);
    }
)



// function to display the content of an HTML page in a container in a main page grid
function loadPage(text){
    // clear any date in main area
    clearContent('mainText');
    // we store the display area in a zone variable
    var zone=document.getElementById('mainText');
    // we need to create an object to store the webpage
    var page=document.createElement('object');
    // we set the object type to text/HRML
    page.type="text/html";
    // the st variable will store the name of the page to load. the first part
    // being passed to the function as parameter
    var st="pages/"+text+".html";
    // we store the webpage in the object with its data attribute.
    page.data=st;
    // setting the size of the display zone
    page.width=1000;
    //page.height=850;
    // displaying the webpage in the zone
    zone.appendChild(page);
}

// this function will clear the content of a container
// it take the ID of the container as parameter
function clearContent(elementID){
    document.getElementById(elementID).innerHTML="";
}

// the function will change the border color of a field when it changed
function fieldBorder(fieldID){
    // we select the textfield
    var field1=document.getElementById(fieldID);
    // change the border style
    field1.style.borderStyle='solid';
    // change the border color
    field1.style.borderColor='#80ffdf';

}
// this function will change the color of a button when mouse is over it
function buttonColorOut(){
    // we select the button
    var button1=document.getElementById('shopButton');
    // we change the button color
    this.style.backgroundColor="#228d02";
    // we change the text color
    this.style.color='#ffffff';
}
// same logic as the butonColorOut
function buttonColorOver(){
    var button1=document.getElementById('shopButton');
    this.style.backgroundColor="#80ffdf";
    this.style.color='#000000';
}
function buttonColorOutInv(){
    // we select the button
    var button1=document.getElementById('shopButton');
    // we change the button color
    this.style.backgroundColor="#80ffdf";
    // we change the text color
    this.style.color='#000000';
}
// same logic as the butonColorOut
function buttonColorOverInv(){
    var button1=document.getElementById('shopButton');
    this.style.backgroundColor="#228d02";
    this.style.color='#ffffff';
}

// function to add an event on shop buttons
function onShopClick(){
    alert("Item added to basket");
}

// this function create and add buttons to the navbar with the onload event
function addButtons(){

    // a document fragment is a light unattached version of the DOM document
    // this will be used to add buttons to it, then append it to the site navbar.
    // idea, examples found when looking for some buttons creation loop:
    // https://stackoverflow.com/questions/32848002/how-to-use-javascript-for-loop-to-create-buttons
    // https://www.w3docs.com/snippets/javascript/how-to-loop-through-an-array-in-javascript.html

    var docfrag=document.createDocumentFragment();

    // array to store the buttons names
    let names=["Our Shop","Contact Us","Register"];
    // array to store the corresponding ID
    let ids=["shopButton","contactButton","registerButton"];
    // array to store the function calling the corresponding page
    let page=["loadPage('shop')","loadPage('contact')","loadPage('register')"];

    // loop to create the 3 buttons.
    // each buttons will be given attributes saved in the arrays.
    // buttons will be added to the doc fragment

    for(var i=0;i<3;i++){
        // creating a button
        var bttn=document.createElement('button');
        // assigning text to the button
        bttn.innerHTML=names[i];
        // assigning css style 
        bttn.setAttribute("class","NavButton");
        // adding ID to the button
        bttn.setAttribute("id",ids[i]);
        // adding the corresponding onclick event
        bttn.setAttribute("onclick",page[i]);
        // adding the button to the doc fragment
        docfrag.appendChild(bttn);
    }
    // adding some mouse events to all the buttons on the fragment

    docfrag.querySelectorAll('.NavButton').forEach(
        item=>{
            item.addEventListener('mouseover',buttonColorOver,false);
            item.addEventListener('mouseout',buttonColorOut,false);
        }
    )
        // we select the section called NavBar on the index page and add the Document fragment to it
        var nav1=document.getElementById("navBar");
        nav1.append(docfrag);
}
