<div class="col-xs-9">
    <h1>Project Name:<?php echo $project_data->project_name; ?></h1>
    <p>Data Created:<?php echo $project_data->data_created; ?></p>
    <h3>Description</h3>
    <p><?php echo $project_data->project_body; ?></p>

</div>
<div class="col-xs-3 pull-right">
    <ul class="List-group">
        <h3>Project Actions </h3>

        <li class="list-group-item"><a href=""> Create Task</a></li>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit/<?php echo $project_data->id; ?>">
                Edit Project
            </a></li>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/delete/<?php echo $project_data->id; ?>">
                Delete Project
            </a></li>

    </ul>
</div>