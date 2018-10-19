<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Video List</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('video/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
						<th>Video Id</th>
                        <th>Technology Name</th>
						<th>Category Name</th>
						<th>Title</th>
                        <th>Description</th>
						<th>Video Url</th>
                        <th>Added By</th>
						<th>Actions</th>
                    </tr>
                    <?php $i=1;foreach($video as $v){ ?>
                    <tr>
						<td><?php echo $i; $i++; ?></td>
                        <td><?php echo $technology['name']; ?></td>
						<td><?php echo $category['name']; ?></td>
						<td><?php echo $v['title']; ?></td>
                        <td><?php echo $v['description']; ?></td>
						<td><?php echo $v['video_url']; ?></td>
                        <td><?php echo $v['addedBy']; ?></td>
						<td>
                            <a href="<?php echo site_url('video/edit/'.$v['video_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('video/remove/'.$v['video_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
</div>
