var customerform = document.getElementById("customerForm");
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
        <td><input class="form-group" type="number" max="100" name="jarti[`+i+`]" required><br></td>
    </tr>
    <tr>
        <td>Wage:</td>
        <td><input class="form-group" type="number" name="wage[`+i+`]" required><br></td>
    </tr>
    <tr>
        <td></td>
        <td>Percentage:<input type="radio" name="jyalaType[`+i+`]" value="1" checked> Value:<input type="radio" name="jyalaType[`+i+`]" value="2"><br></td>
    </tr>
    </table>`;
    
    customerform.insertAdjacentHTML("afterend",addCustomerForm);
    i = i+1;
}