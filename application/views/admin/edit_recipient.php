<?php if(!$this->input->is_ajax_request()){ ?>
<?php include "templates/header.php" ?>
        <!--/span-->
        <!-- left menu ends -->
<div class="ch-container">
    <div class="row footer_content"> 
        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Edit Recipient</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Recipient</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
<?php } ?>
            <?php if (isset($error_message)){ 
                    echo "<p class='error_msg_reg alert alert-info'>".$error_message."</p>";
            }?>
                <form role="form" method="POST" action="<?php echo base_url(); ?>index.php/admin/adminindex/edit_recipient/<?php echo $recipient_data['recipient_id']; ?>" name="edit_subcategory_form" class="form_submit">
                    <div class="form-group">
                        <label for="recipient_name">Recipient Name<span class="fill_symbol"> *</span></label>
                        <input type="text" class="form-control" id="recipient_name" placeholder="Enter recipient Name" name="edit_recipient_name"
                        value="<?php if(!empty($recipient_data['recipient_type'])) echo $recipient_data['recipient_type']; ?>">
                    </div>  
                    <div class="control-group">
                        <label class="control-label" for="sel_c">Choose Category<span class="fill_symbol"> *</span></label>
                        <!-- <div class="controls">
                            <select id="sel_c" class="product-type-filter form-control city_act" name="edit_select_category[]" multiple>
                            <option value="">Select Category</option>
                            <?php //foreach ($category_list as $cat): ?>
                                <option value="<?php //echo $cat["category_id"] ?>" <?php //if (in_array($cat["category_id"], $recipient_category)) echo "selected"; ?>><?php //echo $cat["category_name"] ?></option>
                            <?php //endforeach ?>
                            </select>
                        </div> -->
                        <div class="multiple_dropdown"> 
                            <div class="select_multiple_option">
                                <a id="admin_check">
                                    <span class="hida">Select</span>  <i class="fa fa-caret-down"  aria-hidden="true"></i>  
                                    <p class="multiSel"></p>  
                                </a>
                            </div>
                            <div class="mutliSelect">
                                <ul>
                                <?php foreach ($category_list as $cat):
                                    $condition = in_array($cat["category_id"], $recipient_category)?"checked":"";
                                    echo "<li><input type='checkbox' name='select_category[]' id='subcategory_name' class='edit_multiple_checkbox' 
                                    value='".$cat["category_id"]."'".$condition."/><span class='multiple_checkbox multple_checkbox_inactive edit_multiple_checkbox' value='".$cat["category_id"]."'".$condition.">".$cat["category_name"]."</span></li>";
                                endforeach ?>
                                </ul>
                            </div>
                        </div>
                        <input type="hidden" class="checkbox_array_hidden" name="removed_category">
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="sel_c">Status<span class="fill_symbol"> *</span></label>
                        <div class="controls">
                            <select name="edit_recipient_status" id="sel_c" class="form-control">
                                <option value="">Select</option>
                                <option value="1" <?php if ($recipient_data['recipient_status'] == 1) echo "selected"; ?>>
                                    <span>Active</span>
                                </option>
                                <option value="0" <?php if ($recipient_data['recipient_status'] == 0) echo "selected"; ?>>
                                    <span>Inactive</span>
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="group">    
                    <button type="submit" class="btn submit-btn btn-default">Submit</button>
                    </div>
                </form>
<?php if(!$this->input->is_ajax_request()){ ?>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
</div>
<?php include "templates/footer.php" ?>
<?php } ?>