<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Types</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 50px;
        }

        input[type="text"],
        input[type="password"],
        input[type="radio"],
        input[type="checkbox"],
        input[type="button"],
        input[type="color"],
        input[type="email"],
        input[type="file"],
        input[type="hidden"],
        input[type="image"],
        input[type="number"] {
            display: block;
            margin: 10px auto;
            padding: 10px;
            border: 2px solid #3498db;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            width: 250px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="radio"]:focus,
        input[type="checkbox"]:focus,
        input[type="button"]:focus,
        input[type="color"]:focus,
        input[type="email"]:focus,
        input[type="file"]:focus,
        input[type="hidden"]:focus,
        input[type="image"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-color: #e74c3c;
        }

        input[type="button"]:hover {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
        }

        input[type="color"] {
            padding: 10px 40px;
        }

        input[type="color"]::-webkit-color-swatch-wrapper {
            border: none;
            padding: 0;
        }

        input[type="color"]::-webkit-color-swatch {
            border: 2px solid #3498db;
            border-radius: 5px;
        }

        input[type="color"]::-moz-color-swatch {
            border: 2px solid #3498db;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Input Types</h1>
    <input type="text" placeholder="Text Input">
    <input type="password" placeholder="Password Input">
    <input type="radio" name="radio-option" id="radio-1">Radio
    <label for="radio-1">Yes</label>
    <input type="radio" name="radio-option" id="radio-2">Radio
    <label for="radio-2">No</label>
    <input type="checkbox" id="checkbox-1">
    <label for="checkbox-1">Checkbox</label>
    <input type="button" value="Dale Click!" onclick="showAlert()">
    <input type="color" value="#3498db">
    <input type="email" placeholder="Email Address">
    <input type="file" id="fileInput" onchange="showImage(event)">
    <input type="hidden" value="Secret Value">
    <input type="image" src="image.jpg" alt="Image" id="imageInput">
    <input type="number" placeholder="Number Input">

    <script>
        function showAlert() {
            alert("¡Hola Mundo!");
        }

        function showImage(event) {
            const fileInput = event.target;
            const imageInput = document.getElementById("imageInput");

            const file = fileInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imageInput.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>
