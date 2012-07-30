<div class="container top">
    <div class="page-header">
        <h2>
            <?php echo __('Edit User'); ?> <?php echo $this->Html->link(__('All users'), array('controller' => 'users', 'action' => 'index'), array('class'=>'btn btn-info pull-right')); ?>
        </h2>
    </div>
    <div class="row">
        <div class="span9 columns">
            <?php echo $this->Session->flash(); ?>
            <?php
            echo $this->Form->create('User', array(
                'class' => 'form-inline',
                'inputDefaults' => array(
                    'div' => false,
                    'label' => false
                )
            ));
            ?>
            <fieldset>
                <?php echo $this->Form->hidden('id'); ?>
                <div class="control-group">
                    <?php echo $this->Html->tag('label', __('Name'), array('class' => 'control-label', 'for' => 'name')); ?>
                    <div class="controls">
                        <?php
                        echo $this->Form->input('name', array(
                            'id' => 'name',
                            'class' => 'span5'
                        ));
                        ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $this->Html->tag('label', __('Email'), array('class' => 'control-label', 'for' => 'email')); ?>
                    <div class="controls">
                        <?php
                        echo $this->Form->input('email', array(
                            'id' => 'email',
                            'class' => 'span5'
                        ));
                        ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $this->Html->tag('label', __('Password'), array('class' => 'control-label', 'for' => 'password')); ?>
                    <div class="controls">
                        <?php
                        echo $this->Form->input('password', array(
                            'id' => 'password',
                            'class' => 'span5',
                            'type' => 'password'
                        ));
                        ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $this->Html->tag('label', __('Password Confirmation'), array('class' => 'control-label', 'for' => 'password_confirm')); ?>
                    <div class="controls">
                        <?php
                        echo $this->Form->input('password_confirm', array(
                            'id' => 'password_confirm',
                            'class' => 'span5',
                            'type' => 'password'
                        ));
                        ?>
                    </div>
                </div>
                <div class="form-actions">
                    <?php echo $this->Form->button(__('Save'), array('class' => 'btn btn-large btn-primary')); ?>
                    <?php echo $this->Form->button(__('Cancel'), array('class' => 'btn btn-large', 'type' => 'reset')); ?>
                </div>
            </fieldset>
            <?php echo $this->Form->end(); ?>
        </div>
        <div class="span3 collumns">
            <?php echo $this->element('sidebar'); ?>
        </div>
    </div>
</div>