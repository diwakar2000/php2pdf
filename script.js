const customerform = document.getElementById("customerForm");
const addCustomerForm = "<tr><td>huluku</td></tr>";
const anchorTag = document.getElementById("anchor").innerText;
console.log(customerform); 

// anchorTag.addEventListener("click",function(event){
//     event.preventDefault();
//     customerform.insertAdjacentHTML = ("afterend","<p>akljsdlkajsd aj</p>");
// });

addMore = e => {
    e.preventDefault();
    console.log(customerform.innerHTML);   
    customerform.innerHTML += "Huuululuulululu";
}