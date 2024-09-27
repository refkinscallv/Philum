<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">

    <title><?= $title ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");

        *,
        *:after,
        *:before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            scrollbar-width: thin;
            scrollbar-color: var(--bs-gray-900) var(--bs-white);
        }
        *::-webkit-scrollbar {width: 12px}
        *::-webkit-scrollbar-track {background: var(--bs-white)}
        *::-webkit-scrollbar-thumb {background-color: var(--bs-gray-900);border: 3px solid var(--bs-white)}

        .selector-for-some-widget {box-sizing: content-box}

        body, html {
            position: relative;
            width: 100%;
            margin: auto;
            font-family: 'Quicksand', sans-serif !important;
            font-size: 14px !important;
            color: var(--bs-gray-900)
        }

        a {
            color: #018080 !important;
            text-decoration: none !important;
            cursor: pointer !important;
            transition: .3s
        }

        a:hover {
            color: var(--bs-danger) !important;
            text-decoration: none !important
        }
    </style>

</head>
<body>
    
    <div class="position-relative vh-100 overflow-auto">
        <div class="position-absolute top-50 start-50 translate-middle w-100 m-auto text-center">
            <div class="mb-5 d-flex align-items-center justify-content-center">
                <img src="https://philum.callvgroup.net/images/philum.png" alt="<?= $_SERVER["APP_NAME"] ?>" style="height: 50px">
                <div class="fs-1 fw-bold" style="color: #018080"><em>hilum</em></div>
            </div>
            <div class="fs-3">
                <em>Simple, lightweight and modular traditional PHP framework</em>
                <br>
                <em>with MVC, Routing and Query Builder/ORM</em>
            </div>
            <hr class="mx-auto my-5 w-25">
            <div class="mb-5">
                <a href="https://philum.callvgroup.net/docs" class="fs-5 me-4">Documentation</a>
                <a href="https://philum.callvgroup.net/news" class="fs-5 me-4">News & Update</a>
                <a href="https://github.com/refkinscallv/philum" class="fs-5">Github</a>
            </div>
            <div class="text-secondary">version <?= $_SERVER["PHILUM_VERSION"] ?></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
