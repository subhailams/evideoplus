<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Technology Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('technology/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Tech Id</th>
						<th>Name</th>
						<th>Date</th>
						<th>AddedBy</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($technology as $t){ ?>
                    <tr>
						<td><?php echo $t['tech_id']; ?></td>
						<td><?php echo $t['name']; ?></td>
						<td><?php echo $t['date']; ?></td>
						<td><?php echo $t['addedBy']; ?></td>
						<td>
                            <a href="<?php echo site_url('technology/edit/'.$t['tech_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('technology/remove/'.$t['tech_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
</div>
