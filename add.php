<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
    <link rel="stylesheet" href="styles/form.css">
</head>

<body>

    <div class="container">
        <form>
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
                <select name='gender'>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <label for="select" class="control-label">Gender</label><i class="bar"></i>
            </div>

            <div class="form-group">
                <textarea name="general_comments" required="required"></textarea>
                <label for="textarea" class="control-label">General Comments</label><i class="bar"></i>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" checked="checked" /><i class="helper"></i>I'm the label from a checkbox
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" /><i class="helper"></i>I'm the label from a checkbox
                </label>
            </div>
            <div class="form-radio">
                <div class="radio">
                    <label>
                        <input type="radio" name="radio" checked="checked" /><i class="helper"></i>I'm the label from a radio button
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="radio" /><i class="helper"></i>I'm the label from a radio button
                    </label>
                </div>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" /><i class="helper"></i>I'm the label from a checkbox
                </label>
            </div>
        </form>
        <div class="button-container">
            <button type="button" class="button"><span>Submit</span></button>
        </div>
    </div>
</body>

</html>