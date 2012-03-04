<div class="mws-panel grid_5 mws-collapsible">
    <div class="mws-panel-header">
        <span class="mws-i-24 i-list"><?php echo __('User Add'); ?></span>
    </div>
    <div class="mws-panel-body">
        <?php
        echo $this->Form->create('User', array(
            'method' => 'post',
            'class' => 'mws-form',
            'id' => 'mws-validate',
            'inputDefaults' => array(
                'div' => false,
                'label' => false
                )));
        ?>
        <div class="mws-form-inline">
            <div class="mws-form-row">
                <label><?php echo __('Group'); ?></label>
                <div class="mws-form-item large">
                    <?php echo $this->Form->input('group_id', array('class' => 'required')); ?>
                </div>
            </div>
            <div class="mws-form-row">
                <label><?php echo __('Name'); ?></label>
                <div class="mws-form-item large">
                    <?php echo $this->Form->input('name', array('class' => 'mws-textinput required')); ?>
                </div>
            </div>
            <div class="mws-form-row">
                <label><?php echo __('Username'); ?></label>
                <div class="mws-form-item large">
                    <?php echo $this->Form->input('username', array('class' => 'mws-textinput required')); ?>
                </div>
            </div>
            <div class="mws-form-row">
                <label><?php echo __('Password'); ?></label>
                <div class="mws-form-item large">
                    <?php echo $this->Form->input('password', array('type'=>'password','class' => 'mws-textinput required')); ?>
                </div>
            </div>
            <div class="mws-form-row">
                <label><?php echo __('Active ?'); ?></label>
                <div class="mws-form-list inline">
                    <?php echo $this->Form->input('active'); ?>
                </div>
            </div>
            <div class="mws-form-row">
                <label><?php echo __('Photo'); ?></label>
                <div class="mws-form-item file">
                    <?php echo $this->Form->input('photo', array('type' => 'file')); ?>
                </div>
            </div>
            <div class="mws-button-row">
                <?php echo $this->Form->input(__('Save'), array('type' => 'submit', 'class' => 'mws-button green')); ?>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
        <form class="mws-form" id="mws-validate" action="">
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label>Name</label>
                    <div class="mws-form-item large">
                        <input type="text" class="mws-textinput required email" />
                    </div>
                </div>
                <div class="mws-form-row">
                    <label>Medium text field</label>
                    <div class="mws-form-item medium">
                        <input type="text" class="mws-textinput" />
                    </div>
                </div>
                <div class="mws-form-row">
                    <label>Large text field</label>
                    <div class="mws-form-item large">
                        <input type="text" class="mws-textinput" />
                    </div>
                </div>
                <div class="mws-form-row">
                    <label>Textarea</label>
                    <div class="mws-form-item large">
                        <textarea rows="100%" cols="100%"></textarea>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label>Dropdown List</label>
                    <div class="mws-form-item small">
                        <select>
                            <option>Option 1</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                        </select>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label>Checkboxes</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            <li><input type="checkbox" /> <label>Checkbox 1</label></li>
                            <li><input type="checkbox" /> <label>Checkbox 2</label></li>
                            <li><input type="checkbox" /> <label>Checkbox 3</label></li>
                            <li><input type="checkbox" /> <label>Checkbox 4</label></li>
                        </ul>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label>Radio Buttons</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            <li><input type="radio" /> <label>Radio 1</label></li>
                            <li><input type="radio" /> <label>Radio 1</label></li>
                            <li><input type="radio" /> <label>Radio 1</label></li>
                            <li><input type="radio" /> <label>Radio 1</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mws-button-row">
                <input type="submit" value="Submit" class="mws-button green" />
            </div>
        </form>
    </div>
</div>