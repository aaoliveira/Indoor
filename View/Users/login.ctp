<div id="mws-login" style="height: auto;">
    <h1>Indor, Login</h1>
    <div class="mws-login-lock">
        <?php echo $this->Html->image('/css/icons/24/locked-2.png'); ?>
    </div>
    <div id="mws-login-form">
        <?php
        echo $this->Form->create('User', array(
            'method' => 'post',
            'class' => 'mws-form',
            'inputDefaults' => array(
                'div' => false,
                'label' => false
                )));
        ?>
        <div class="mws-form-row">
            <div class="mws-form-item large">
                <?php
                echo $this->Form->input('username', array('class' => 'mws-login-username mws-textinput', 'placeholder' => 'usuario')) . "\n";
                ?>
            </div>
        </div>
        <div class="mws-form-row">
            <div class="mws-form-item large">
                <?php
                echo $this->Form->input('password', array('class' => 'mws-login-password mws-textinput', 'placeholder' => 'senha', 'type' => 'password')) . "\n";
                ?>
            </div>
        </div>
        <div class="mws-form-row">
            <?php
            echo $this->Form->input(__('Login'), array('type' => 'submit', 'class' => 'mws-button green mws-login-button'))
            ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>