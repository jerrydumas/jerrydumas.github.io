<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web Developer Designer NYC" />
    <title>Web Developer | Jerry Dumas</title>
    <link rel="stylesheet" href="css/glstyles.css">
    <script src="https://kit.fontawesome.com/cdca4def56.js" crossorigin="anonymous"></script>
    <script src="js/data.js"></script>
</head>

<body id="top">

    <nav class="nav" data-scroll-header>
        <div class="brand">
            <h1><a href="./">JD</a></h1>
        </div>
        <div class="links">
            <ul>
                <script>
                const menu = MenuItems.map((litem) => {
                    return `<li><a href=${litem.url}>${litem.title}</a></li>
`
                }).join('')
                const lresult = document.querySelector('.links ul')
                lresult.innerHTML = menu;
                </script>
            </ul>
        </div>
        <div class="hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
    <div class="container">