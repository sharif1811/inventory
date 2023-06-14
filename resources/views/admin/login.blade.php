    <!--Fonts Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <title>LoginForm</title>
</head>
<body>
    <form class="box" action="{{ url('/admin/dashboardhere') }}" method="post">
        @csrf
        <h1>Login</h1>
        <input type="email" name="email" placeholder="email" >
        <input type="hidden" name="name" placeholder="email" >
        <input type="password" name="password" placeholder="Password">
        <input type="submit" class="submit" value="Login">
    </form>
</body>
</html>