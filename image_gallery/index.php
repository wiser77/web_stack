<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Image Gallery</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Image Gallery</h2>
    <div class="gallery" id="gallery"></div>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: "fetch_images.php",
                method: "GET",
                success: function(response) {
                    let images = JSON.parse(response);
                    images.forEach(img => {
                        $("#gallery").append(
                            `<div class='gallery-item'>
                                <img src='${img.image}' alt='${img.title}'>
                                <p>${img.title}</p>
                            </div>`
                        );
                    });
                }
            });
        });
    </script>
</body>
</html>
