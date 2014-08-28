<div class="container">

    <?php if(empty($movie)) : ?>
    
    <div><div class="alert alert-danger" role="alert"><b>Movie not found!</b></div></div>
    
    <?php else: ?>

    <h2>Movies - Delete</h2>

    <div class="panel panel-danger">
      <div class="panel-heading">Title</div>
      <div class="panel-body">
        <?php echo $movie->title ?>
      </div>
    </div>
    
    <div class="panel panel-danger">
      <div class="panel-heading">Director</div>
      <div class="panel-body">
        <?php echo $movie->director ?>
      </div>
    </div>
    
    <div class="panel panel-danger">
      <div class="panel-heading">Year</div>
      <div class="panel-body">
        <?php echo $movie->year ?>
      </div>
    </div>
    <?php endif; ?>
    
    <form method="post">
        <input type="hidden" name="do_delete" value="1" />
        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete Movie</button> <a href="/movies">Cancel</a>
    </form>
    
</div>
