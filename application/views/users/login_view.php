<?php if ($this->session->userdata('logged_in')) : ?>
<h2>Logout</h2>

<?php echo form_open('users/logout'); ?>

<?php if ($this->session->userdata('username')) : ?>
<?php echo "you are logged as " . $this->session->userdata('username'); ?>
<?php endif; ?>


<div class="form-group">
    <?php $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Logout '
        );


        ?>

    <?php echo form_submit($data); ?>

</div>


<?php echo form_close(); ?>



<?php else : ?>


<h2>Login form </h2>

<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal'); ?>
<?php if ($this->session->userdata('errors')) : ?>
<?php echo $this->session->userdata('errors'); ?>

<?php endif; ?>


<?php echo form_open('users/login', $attributes); ?>
<?php echo validation_errors(); ?>
<div class="form-group">
    <?php echo form_label('Username'); ?>

    <?php $data = array(
            'class' => 'form-control',
            'name' => 'username',
            'placeholder' => 'Enter Username',
            'Username' => 'required'
        );
        ?>
    <?php echo form_input($data); ?>

</div>

<div class="form-group">
    <?php echo form_label('Password'); ?>

    <?php $data = array(
            'class' => 'form-control',
            'name' => 'password',
            'placeholder' => 'Enter password'
        );


        ?>

    <?php echo form_password($data); ?>

</div>

<div class="form-group">
    <?php echo form_label('Confirm Password'); ?>

    <?php $data = array(
            'class' => 'form-control',
            'name' => 'confirm_password',
            'placeholder' => 'Confirm Password'
        );


        ?>

    <?php echo form_password($data); ?>

</div>

<div class="form-group">
    <?php $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Login '
        );


        ?>

    <?php echo form_submit($data); ?>

</div>

<?php echo form_close(); ?>

<?php endif; ?>