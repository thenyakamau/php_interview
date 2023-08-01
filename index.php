<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Information</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
    <div style="display: flex; justify-content: space-between; padding: 20px;">
        <caption>Medical Records</caption>

        <button>Add Record</button>
    </div>
    <table>
        <thead>
            <tr>
                <th scope="col">Account</th>
                <th scope="col">Due Date</th>
                <th scope="col">Amount</th>
                <th scope="col">Period</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td data-label="Account">Visa - 3412</td>
                <td data-label="Due Date">04/01/2016</td>
                <td data-label="Amount">$1,190</td>
                <td data-label="Period">03/01/2016 - 03/31/2016</td>
            </tr>
            <tr>
                <td scope="row" data-label="Account">Visa - 6076</td>
                <td data-label="Due Date">03/01/2016</td>
                <td data-label="Amount">$2,443</td>
                <td data-label="Period">02/01/2016 - 02/29/2016</td>
            </tr>
            <tr>
                <td scope="row" data-label="Account">Corporate AMEX</td>
                <td data-label="Due Date">03/01/2016</td>
                <td data-label="Amount">$1,181</td>
                <td data-label="Period">02/01/2016 - 02/29/2016</td>
            </tr>
            <tr>
                <td scope="row" data-label="Acount">Visa - 3412</td>
                <td data-label="Due Date">02/01/2016</td>
                <td data-label="Amount">$842</td>
                <td data-label="Period">01/01/2016 - 01/31/2016</td>
            </tr>
        </tbody>
    </table>
</body>

</html>