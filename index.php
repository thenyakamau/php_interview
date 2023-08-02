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

        <button onclick="redirect()">Add Record</button>
    </div>
    <table>
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Gender</th>
                <th scope="col">Type of Service</th>
                <th scope="col">General comments</th>
            </tr>
        </thead>
        <tbody id='patient_body'>
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

    <script>
        async function fetchPatients() {
            const response = await fetch("/patient/index.php", {
                method: "GET"
            })

            const data = await response.json();
            const bodyContainer = document.getElementById('patient_body')
            while (bodyContainer.firstChild) bodyContainer.removeChild(bodyContainer.lastChild)

            console.log(data);
            data.forEach(item => {
                const tr = document.createElement('tr')
                const nameTd = document.createElement("td")
                nameTd.innerHTML = item?.name

                const dobTd = document.createElement("td")
                dobTd.innerHTML = item?.date_of_birth

                const genderTd = document.createElement("td")
                genderTd.innerHTML = item?.gender[0].gender_name

                const services = item?.services?.map(vitem => vitem.service_name)?.join(' ')
                const serviceTd = document.createElement("td")
                serviceTd.innerHTML = services;

                const general_comment = item?.services[0]?.general_comments;
                const generalCommentTd = document.createElement("td")
                generalCommentTd.innerHTML = general_comment;

                tr.append(nameTd, dobTd, genderTd, serviceTd, generalCommentTd)
                bodyContainer.append(tr)
            });
        }

        function redirect() {
            window.location.replace('/patient/add.php')
        }

        fetchPatients()
    </script>

</body>

</html>