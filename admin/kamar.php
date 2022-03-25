<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin | Kamar</title>
</head>

<body>

    <header class="bg-dark navbar navbar-expand-md navbar-dark bd-navbar">
        <nav class="container-xxl flex-wrap flex-md-nowrap my-1" aria-label="Main navigation">
            <a class="navbar-brand d-flex align-items-center p-0 me-2" href="/" aria-label="Bootstrap">
                <svg style="color: white;" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path
                        d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z" />
                </svg>
                <span class="px-3">Admin</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar"
                aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
                    </path>
                </svg>

            </button>

            <div class="collapse navbar-collapse d-flex justify-content-end" id="bdNavbar">
                <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2 active" href="index.php">Kamar</a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2" href="about.php">Fasilitas Kamar</a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                        <a class="nav-link p-2" href="kamar.php">Fasilitas Hotel</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="container my-5">
        <div class="card p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>

    <footer class="bd-footer mt-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/"
                        aria-label="Bootstrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block me-2"
                            viewBox="0 0 118 94" role="img">
                            <title>Bootstrap</title>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                                fill="currentColor"></path>
                        </svg>
                        <span class="fs-5">Bootstrap</span>
                    </a>
                    <ul class="list-unstyled small text-muted">
                        <li class="mb-2">Designed and built with all the love in the world by the <a
                                href="/docs/5.1/about/team/">Bootstrap team</a> with the help of <a
                                href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/">Home</a></li>
                        <li class="mb-2"><a href="/docs/5.1/">Docs</a></li>
                        <li class="mb-2"><a href="/docs/5.1/examples/">Examples</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Guides</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/docs/5.1/getting-started/">Getting started</a></li>
                        <li class="mb-2"><a href="/docs/5.1/examples/starter-template/">Starter template</a></li>
                        <li class="mb-2"><a href="/docs/5.1/getting-started/webpack/">Webpack</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Projects</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://github.com/twbs/bootstrap">Bootstrap 5</a></li>
                        <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev">Bootstrap 4</a></li>
                        <li class="mb-2"><a href="https://github.com/twbs/icons">Icons</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <h5>Community</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="https://github.com/twbs/bootstrap/issues">Issues</a></li>
                        <li class="mb-2"><a href="https://github.com/twbs/bootstrap/discussions">Discussions</a></li>
                        <li class="mb-2"><a href="https://github.com/sponsors/twbs">Corporate sponsors</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>