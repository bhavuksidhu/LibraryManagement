
      <div class="row">

        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
            <h2 class="box-title"><?= lang('create_user_import_user_by_csv_heading'); ?></h2>
          

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <?php
                $attrib = array('class' => 'form-horizontal', 'data-toggle' => 'validator', 'role' => 'form');
                echo form_open_multipart("panel/auth/import_csv", $attrib)
                ?>
                <div class="row">
                    <div class="col-md-12">

                        <div class="well well-small">
                        

                            <a href="<?php echo base_url(); ?>assets/csv/sample_user.csv"
                               class="btn btn-primary pull-right"><i class="fa fa-download"></i><?= lang('download_sample_file'); ?></a>
                                <span class="text-warning"><?= lang('create_user_import_user_by_csv_heading'); ?></span><br/>
                               <span class="text-info"><?= lang('csv_user_sname_label'); ?>,<?= lang('csv_user_faname_label'); ?>,<?= lang('csv_user_rollno_label'); ?>,<?= lang('csv_user_email_label'); ?>,<?= lang('csv_user_username_label'); ?>,<?= lang('csv_user_phone_label'); ?>,<?= lang('csv_user_gender_label'); ?>,<?= lang('csv_user_password_label'); ?>,<?= lang('csv_user_address_label'); ?>,<?= lang('csv_user_name_label'); ?>,<?= lang('csv_user_occupation_label'); ?></span>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="csv_file"><?= lang("upload_file"); ?></label>
                                <input type="file" data-browse-label="<?= lang('browse'); ?>" name="userfile" class="form-control file" data-show-upload="false"
                                       data-show-preview="false" id="csv_file" required="required"/>
                            </div>

                            <div class="form-group">
                                <?php echo form_submit('import', lang('import_csv'), 'class="btn btn-primary"'); ?>
                            </div>
                        </div>
                    </div>
                    <?= form_close(); ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->









      <div class="row">
        <div class="col-xs-12">
          <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
<h3 class="box-title"> <?php echo lang('create_user_heading');?>
              <small><?php echo lang('create_user_subheading');?></small></h3>
          



            </div>
                        <div id="infoMessage"><?php echo $message;?></div>

            <!-- /.box-header -->
            <div class="box-body">

              <?php echo form_open_multipart("panel/auth/create_user");?>

                    <p>
                          <?php echo lang('create_user_sname_label', 'student_name');?> <br />
                          <?php echo form_input($student_name, '', 'class="form-control"');?>
                    </p>

                    <p>
                          <?php echo lang('create_user_faname_label', 'fathers_name');?> <br />
                          <?php echo form_input($fathers_name, '', 'class="form-control"');?>
                    </p>
                    
                    <?php
                    if($identity_column!=='roll_no') {
                        echo '<p>';
                        echo lang('create_user_identity_label', 'identity');
                        echo '<br />';
                        echo form_error('identity');
                        echo form_input($identity);
                        echo '</p>';
                    }
                    ?>

                    <p>
                          <?php echo lang('create_user_rollno_label', 'roll_no');?> <br />
                          <?php echo form_input($roll_no, '', 'class="form-control"');?>
                    </p>

                    <p>
                          <?php echo lang('create_user_email_label', 'email');?> <br />
                          <?php echo form_input($email, '', 'class="form-control"');?>
                    </p>
                    <p>
                          <?php echo lang('create_user_username_label', 'username');?> <br />
                          <?php echo form_input($username, '', 'class="form-control"');?>
                    </p>

                    <p>
                          <?php echo lang('create_user_phone_label', 'phone');?> <br />
                          <?php echo form_input($phone, '', 'class="form-control"');?>
                    </p>

                  <div class="form-group">
                      <label for="gender"><?php echo lang('user_gender_label') ?></label>
                      <select class="form-control" id="gender" name="gender" required="required">
                        <option value="Male"><?php echo lang('user_gender_male') ?></option>
                        <option value="Female"><?php echo lang('user_gender_female') ?></option>
                        <option value="Other"><?php echo lang('user_gender_other') ?></option>
                      </select>

                    </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
        </div>
         <div class="col-xs-6">
          <div class="box">

            <!-- /.box-header -->
            <div class="box-body">



                 
                    <p>
                          <?php echo lang('create_user_password_label', 'password');?> <br />
                          <?php echo form_input($password, '', 'class="form-control"');?>
                    </p>

                    <p>
                          <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                          <?php echo form_input($password_confirm, '', 'class="form-control"');?>
                    </p>
                      <div class="form-group">
                        <label for="user_image"><?php echo lang('user_image_upload'); ?></label>                        
                        <input id="user_image" type="file" name="user_image" data-show-upload="false" data-show-preview="false" accept="image/*" class="form-control file">
                                  


                    </div>
                   
                    <div class="form-group">
                          <?php echo lang('user_address_label');?> <br />

                          <?php echo form_input($address, '', 'class="form-control"');?>
                      

                    </div>
                     <div class="form-group">
                    
                    <label class="control-label" for="borrowertype"><?= lang('memtype_name_label')?></label>

                        <select id="member_type" name="member_type" class="form-control">
                          <?php foreach($member_types as $type): ?>
                            <option value="<?= $type->type_id; ?>">
                              <?= $type->borrowertype; ?>
                            </option>
                          <?php endforeach; ?>  
                        </select>
                       
                    </div> 
                    <div class="form-group">
                    
                    <label class="control-label" for="borrowertype"><?= lang('occu_name_label')?></label>

                         <select id="class" name="class" class="form-control">
                          <option><?= lang('occu_name_label')?></option>
                        </select>
                       
                    </div> 
                    
                   
                    <?php if ($this->ion_auth->is_admin()): ?>
          <h3><?php echo lang('create_user_groups_heading');?></h3>
        
 <div class="form-group">
    <div class=" col-sm-12">
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="radio" class="skip" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>
    </div>
  </div>
      <?php endif ?> 
                  

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
            <div class="col-xs-12">
              <p>
                      <?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-success"');?>
                      <a href="<?php echo base_url('panel/auth/index'); ?>" class="btn btn-primary">Cancel</a>
                    </p>

              <?php echo form_close();?>
          </div>
         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
<script type="text/javascript">
  $("#member_type").select2({
      placeholder: 'Select Member Type'
    });

  $("#class").select2({
  placeholder: '',
  ajax: {
    url: '<?= base_url();?>panel/auth/json_occu',
    type: 'POST',
    data: function (params) {
      return {
        id: $("#member_type").val(),
        search: params.term
      }
    },
     processResults: function (data) {
            return {
                results: $.map(data, function (item) {
                    return {
                        text: item.text,
                        id: item.id
                    }
                })
            };
        }
  }
});
var radioButtons = document.getElementsByName('groups[]');
radioButtons[1].checked=true

</script>