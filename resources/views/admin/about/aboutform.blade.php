<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Resume Entry Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<Style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
        margin: 0;
        padding: 0;
    }

    .form-container {
        background-color: #fff;
        max-width: 500px;
        margin: 40px auto;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    form label {
        display: block;
        margin-top: 15px;
        font-weight: bold;
    }

    form input,
    form textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    form button {
        margin: 20px 50px;
        padding: 12px;
        background-color: #2b2bff;
        color: #fff;
        border: none;
        width: auto;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    form button:hover {
        background-color: #1a1a99;
    }
    .btn-group{
        display: flex;
        justify-content: center;
    }

    .btn_cancel {
        background: red;
        color: white;
        margin-right: 2px;
    }
</Style>

<body>
    <div class="form-container">
        <h2>Resume Form</h2>
        <form action="/aboutform" method="POST">
            @csrf
            <label for="profilephoto">Profile Photo</label>
            <input type="file" id="profilephoto" name="profilephoto" accept="photo/*">

            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>

            <label for="title">Job Title</label>
            <input type="text" id="job-title" name="job-title" required>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>

            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="github">Github Url</label>
            <input type="github" id="github" name="github" required>

            <label for="about-short">About Short</label>
            <input type="text" id="about-short" name="about-short" maxlength="100" required>

            <label for="about-long">About Long</label>
            <textarea id="about-long" name="about-long" maxlength="500" rows="4" required></textarea>

            <div class="btn-group">
                <a href="/admin"><button class="btn_cancel"> Back</button></a>
                <button type="submit" class="btn_add">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>