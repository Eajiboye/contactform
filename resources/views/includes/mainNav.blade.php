<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Boye</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


        <ul class="navbar-nav">
            <li class="active"><a href="{{route ('home')}}">Home</a></li> &nbsp
            <li><a href="{{route ('about')}}">About</a></li> &nbsp
            <li><a href="{{route ('contact')}}">Contact</a></li> &nbsp
            <li><a href="{{route ('thanks', ['name' => 'IS601'])}}">Thanks</a></li>



   </ul>
</nav>
