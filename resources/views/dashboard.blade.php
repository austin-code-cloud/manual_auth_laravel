<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href=" {{ asset('asset/css/styles.css') }}">
</head>

<body>
    {{ $data->email }} <br> <br>
    <br> <br>



    <header role="banner">
        <h1>Admin Panel</h1>
        <ul class="utilities">
            <br>
            <li class="users"><a href="#">My Account</a></li>
            <li class="logout warn"><a href="logout">Log Out</a></li>
        </ul>
    </header>

    <nav role='navigation'>
        <ul class="main">
            <li class="dashboard"><a href="#">Dashboard</a></li>
            <li class="edit"><a href="#">Edit Website</a></li>
            <li class="write"><a href="#">Write news</a></li>
            <li class="comments"><a href="#">Ads</a></li>
            <li class="users"><a href="#">Manage Users</a></li>
        </ul>
    </nav>

    <main role="main">

        <section class="panel important">
            <h2>Welcome  {{ $data->firstname }} {{ $data->Surname}}</h2>
            <ul>
                <li>Information Panel</li>
            </ul>
        </section>



    </main>


</body>

</html>
