const customerform = document.getElementById("customerForm");
const guaranteeBill = document.getElementById("guaranteeBill");
const cashBill = document.getElementById("cashBill");
const billType = document.getElementById("billType");
const formAction = document.getElementById("form");
const formElement1 = document.getElementById("formElement1");
const formElement2 = document.getElementById("formElement2");
const formElement3 = document.getElementById("formElement3");
const formElement4 = document.getElementById("formElement4");
const formElement5 = document.getElementById("formElement5");
let i = 1;

addMore = e => {
    e.preventDefault();

    let addCustomerForm = `<table class="mx-auto my-4">
    <tr>
        <td>Product name:</td>
        <td><input class="form-group" type="name" name="pname[`+i+`]" required><br></td>
    </tr>
    <tr>
        <td>Weight(gm):</td>
        <td><input class="form-group" type="number" step="0.0001" name="weight[`+i+`]" required><br></td>
    </tr>

    <tr>
        <td>Jarti:</td>
        <td><input class="form-group" type="number" name="jarti[`+i+`]"><br></td>
    </tr>
    <tr>
        <td>Wage:</td>
        <td><input class="form-group" type="number" name="wage[`+i+`]" ><br></td>
    </tr>
    <tr>
        <td></td>
        <td>Percentage:<input type="radio" name="jyalaType[`+i+`]" value="1" checked> Value:<input type="radio" name="jyalaType[`+i+`]" value="2"><br></td>
    </tr>
    </table>`;
    
    customerform.insertAdjacentHTML("afterend",addCustomerForm);
    i = i+1;
}


guarantee = e =>{
    billType.innerText = "Guarantee Bill";
    formAction.setAttribute("action","guaranteeBill.php");
    formElement1.setAttribute("required","required");
    formElement2.setAttribute("required","required");
    formElement3.setAttribute("required","required");
    formElement4.setAttribute("required","required");
    formElement5.setAttribute("required","required");
}

cash = e =>{
    billType.innerText = "Cash Bill";
    formAction.setAttribute("action","cashBill.php");
    formElement1.removeAttribute("required");
    formElement2.removeAttribute("required");
    formElement3.removeAttribute("required");
    formElement4.removeAttribute("required");
    formElement5.removeAttribute("required");
}