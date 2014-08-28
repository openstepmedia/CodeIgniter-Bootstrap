<div class="container">

    <?php if(empty($movie)) : ?>
    
    <div><div class="alert alert-danger" role="alert"><b>Movie not found!</b></div></div>
    
    <?php else: ?>

    <div class="row">
        <div class="col-md-4"><h2>Movies - View</h2></div>
        <div class="col-md-4 col-md-offset-4 text-right">
            <a href="/movies/update/<?php echo $movie->id ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit </a>
            <a href="/movies/delete/<?php echo $movie->id ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete </a>
        </div>
    </div>    
    
    <div class="panel panel-default">
      <div class="panel-heading">Title</div>
      <div class="panel-body">
        <?php echo $movie->title ?>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">Director</div>
      <div class="panel-body">
        <?php echo $movie->director ?>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">Year</div>
      <div class="panel-body">
        <?php echo $movie->year ?>
      </div>
    </div>
    <?php endif; ?>
    
    <a href="/movies">Back to Movies</a>
</div>
