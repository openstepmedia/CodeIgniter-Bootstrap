<div class="container">
    
    <div class="row">
        <div class="col-md-4"><h2>Movies</h2></div>
        <div class="col-md-4 col-md-offset-4 text-right"><a href="/movies/create" class="btn btn-primary">+ Add New</a></div>
    </div>
    
    
    <?php if($this->session->flashdata('message')) : ?>
        <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('message') ?></div>
    <?php endif; ?>
    
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Director</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($movies as $movie) : ?>
            <tr>
                <td><a href="/movies/view/<?php echo $movie->id ?>"><?php echo $movie->title ?></a></td>
                <td><?php echo $movie->director ?></td>
                <td><?php echo $movie->year ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	    
</div>
<script type="text/javascript">
        $(document).ready(function() {
                $('#example').dataTable();
        } );
    
	// For demo to fit into DataTables site builder...
	$('#example')
		.removeClass( 'display' )
		.addClass('table table-striped table-bordered');
</script>