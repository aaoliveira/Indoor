<div class="modal" id="modal-login">
    <?php echo $this->Form->create('User'); ?>
    <div class="modal-header">
        <h3>
            <?php echo __('Login'); ?>
        </h3>
    </div>
    <div class="modal-body">
        <fieldset>
            <?php echo $this->Session->flash(); ?>
            <div class="control-group">
                <div class="input">
                    <?php echo $this->Form->input('email', array('id' => 'email', 'size' => '30', 'autocomplete' => 'off', 'class' => 'large validates[required]')); ?>
                </div>
            </div>
            <div class="control-group">
                <div class="input">
                    <?php echo $this->Form->input('password', array('id' => 'password', 'size' => '30', 'type' => 'password', 'class' => 'large validates[required]')); ?>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="modal-footer">
        <a href="#" class="toggle-login-recovery"><?php echo __("Can't remember your username/password?"); ?></a> 
        <button type="submit" class="btn btn-primary"><?php echo __('Login'); ?></button>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
<div class="modal" id="modal-recovery">
    <?php echo $this->Form->create('User', array('id' => 'frm-recovery')); ?>
    <div class="modal-header">
        <h3>
            <?php echo __('Password Recovery'); ?>
        </h3>
    </div>
    <div class="modal-body">
        <fieldset>
            <div class="control-group">
                <div class="input">
                    <?php echo $this->Form->input('email', array('id' => 'email', 'size' => '30', 'autocomplete' => 'off', 'class' => 'large validates[required]')); ?>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary toggle-login-recovery"><?php echo __('Cancel'); ?></button> 
        <button type="submit" class="btn btn-primary"><?php echo __('Send'); ?></button>
    </div>
    <?php echo $this->Form->end(); ?>
</div>