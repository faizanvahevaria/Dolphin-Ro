<div id="page-wrapper" xmlns="http://www.w3.org/1999/html">



    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title"><i class="fa fa-lg fa-user"></i> Change Username/Password</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php echo form_open(); ?>
                                <?php

                                $username_a = array(
                                    'type'	=> 'text',
                                    'name'	=> 'username',
                                    'id'	=> 'username',
                                    'class' => 'form-control',
                                    'placeholder' => 'Username'
                                );

                                $password_a = array(
                                    'type'	=> 'text',
                                    'name'	=> 'password',
                                    'id'	=> 'password',
                                    'class' => 'form-control',
                                    'placeholder' => 'Password'
                                );

                                $submit_a = array(
                                    'class' => 'btn btn-primary',
                                    'type' 	=> 'submit',
                                    'value' => 'Change',
                                    'name'  => 'submit',
                                    'onclick' => "return confirm('Are you sure you want to Change?');"
                                );


                                ?>


                                <div class="form-group">
                                    <?php	echo form_input($username_a); ?>
                                </div>
                                <div class="form-group">
                                    <?php	echo form_input($password_a); ?>
                                </div>
                                <div class="form-group text-center">
                                    <?php echo form_submit($submit_a); ?>
                                </div>
                                <?php echo validation_errors('<span class="error">', '</span>'); ?>
                                <?php echo form_close(); ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->



        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

