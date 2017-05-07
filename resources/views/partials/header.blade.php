<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Laravel Guide</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Blog</a></li>
      <li><a href="{{ route('about.user') }}">About</a></li>
      <li><a href="{{ route('articles.post',['id'=>1]) }}">Post</a></li>
    </ul>
  </div>
</nav>