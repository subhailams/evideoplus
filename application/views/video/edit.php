<div class="content-wrapper">
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Video Edit</h3>
            </div>
			<?php echo form_open('video/edit/'.$video['video_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="tech_id" class="control-label"><span class="text-danger">*</span>Technology</label>
						<div class="form-group">
							<select name="tech_id" class="form-control">
								<option value="">select technology</option>
								<?php 
								foreach($all_technology as $technology)
								{
									$selected = ($technology['tech_id'] == $video['tech_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$technology['tech_id'].'" '.$selected.'>'.$technology['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('tech_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="cat_id" class="control-label"><span class="text-danger">*</span>Category</label>
						<div class="form-group">
							<select name="cat_id" class="form-control">
								<option value="">select category</option>
								<?php 
								foreach($all_category as $category)
								{
									$selected = ($category['cat_id'] == $video['cat_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$category['cat_id'].'" '.$selected.'>'.$category['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('cat_id');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="title" class="control-label">Title</label>
						<div class="form-group">
							<input type="text" name="title" value="<?php echo ($this->input->post('title') ? $this->input->post('title') : $video['title']); ?>" class="form-control" id="title" />
							<span class="text-danger"><?php echo form_error('title');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="title" class="control-label">Description</label>
						<div class="form-group">
							<input type="text" name="description" value="<?php echo ($this->input->post('description') ? $this->input->post('title') : $video['description']); ?>" class="form-control" id="title" />
							<span class="text-danger"><?php echo form_error('description');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="video_url" class="control-label"><span class="text-danger">*</span>Video Url</label>
						<div class="form-group">
							<input type="text" name="video_url" value="<?php echo ($this->input->post('video_url') ? $this->input->post('video_url') : $video['video_url']); ?>" class="form-control" id="video_url" />
							<span class="text-danger"><?php echo form_error('video_url');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
</div>