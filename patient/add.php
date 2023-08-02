<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
    <link rel="stylesheet" href="../styles/form.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container">
        <form id="patient_submit">
            <h1>Add Medical Patient</h1>
            <div class="form-group">
                <input type="text" required="required" name="name" />
                <label for="input" class="control-label">Name</label><i class="bar"></i>
            </div>
            <div class="form-group">
                <input type="date" required="required" name="date" />
                <label for="input" class="control-label">Date of Birth</label><i class="bar"></i>
            </div>
            <div class="form-group">
                <select id="gender" name='gender_id'>

                </select>
                <label for="select" class="control-label">Gender</label><i class="bar"></i>
            </div>

            <div class="form-group">
                <select class="js-example-basic-multiple" name="services[]" id="services" multiple="multiple">

                </select>
                <label for="select" class="control-label">Services</label><i class="bar"></i>
            </div>



            <div class="form-group">
                <textarea name="general_comments" required="required"></textarea>
                <label for="textarea" class="control-label">General Comments</label><i class="bar"></i>
            </div>

            <div class="button-container">
                <button type="submit" class="button"><span>Submit</span></button>
            </div>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        async function fetchGenders() {
            const response = await fetch("/gender/index.php", {
                method: 'GET'
            })

            const data = await response.json();

            const selectContainer = document.getElementById('gender')
            while (selectContainer.firstChild) selectContainer.removeChild(selectContainer.lastChild)

            data.forEach(item => {
                const option = document.createElement('option')
                option.value = item.gender_id
                option.innerText = item.gender_name

                selectContainer.appendChild(option)
            });
        }

        async function fetchServices() {
            const response = await fetch("/services/index.php", {
                method: 'GET'
            })

            const data = await response.json();

            const selectContainer = document.getElementById('services')
            while (selectContainer.firstChild) selectContainer.removeChild(selectContainer.lastChild)
            data.forEach(item => {
                const option = document.createElement('option')
                option.value = item.service_id
                option.innerText = item.service_name

                selectContainer.appendChild(option)
            });

        }



        window.addEventListener("DOMContentLoaded", () => {
            $('.js-example-basic-multiple').select2();
            fetchGenders()
            fetchServices()

            document.getElementById("patient_submit")?.addEventListener("submit", async (e) => {
                e.preventDefault()

                const services = $('.js-example-basic-multiple').select2('data')?.map(item => item.id);

                const formData = new FormData(e.target)
                formData.append('services', JSON.stringify(services))

                const response = await fetch("/patient/create.php", {
                    method: 'POST',
                    body: formData
                })

                const {
                    success,
                    message
                } = await response.json();
                if (!success) {
                    window.alert(message);
                    return;
                } else
                    window.location.replace("/");
            })
        })
    </script>
</body>

</html>