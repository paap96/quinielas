
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
        <legend>CodeIgniter File Upload Demo</legend>
        <?php echo form_open_multipart('uploadfile/upload');?>

        <fieldset>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label for="filename" class="control-label">Select File to Upload</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="file" name="filename" size="20" />
                        <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="Upload File" class="btn btn-primary"/>
                    </div>
                </div>
            </div>
        </fieldset>
        
        <?php echo form_close(); ?>
        <?php if (isset($success_msg)) { echo $success_msg; } ?>
        </div>
    </div>
</div>
