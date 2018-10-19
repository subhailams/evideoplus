<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Category</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('category/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id</th>
						<th>Technology Name</th>
						<th>Category Name</th>
						<th>AddedBy</th>
						<th>Date</th>
						<th>Actions</th>
                    </tr>
                    <?php $i=1; foreach($category as $c){ ?>
                    <tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $technology['name']; ?></td>
						<td><?php echo $c['name']; ?></td>
						<td><?php echo $c['addedBy']; ?></td>
						<td><?php echo $c['date']; ?></td>
						<td>
                            <a href="<?php echo site_url('category/edit/'.$c['cat_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('category/remove/'.$c['cat_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
</div>
