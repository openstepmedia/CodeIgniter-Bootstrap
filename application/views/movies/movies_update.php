<div class="container">
    <h2>Movies - Update</h2>

    <?php if($this->session->flashdata('message')) : ?>
        <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('message') ?></div>
    <?php endif; ?>    
    <!-- ?php echo form_open("movies/update/$movie->id"); ? -->
    <form role="form" method="post" action="/movies/update/<?php echo $movie->id ?>">
        <div class="form-group">
            <label>Title:
                <input type="text" class="form-control" id="title" name="title" placeholder="Movie Title" value="<?php echo $movie->title ?>">
            </label>
            
        </div>
        <div class="form-group">
            <label>Director:
                <input type="text" class="form-control" id="director" name="director" placeholder="Director" value="<?php echo $movie->director ?>">
            </label>
        </div>
        <div class="form-group">
            <label>Year:
                <input type="text" class="form-control" id="year" name="year" placeholder="Year" value="<?php echo $movie->year ?>">
            </label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button> <a href="/movies">Cancel</a>
    </form>    
</div>
