<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">    
        <a class="navbar-brand" href="/">{{config('app.name','MrClick')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/posts">Blog</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="/media">Media Center</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/posts/create">Create Post</a></li>    
            </ul>          
        </div>
    </div>
</nav>
<hr>