<?php echo $this->Html->script('/indoor/ckeditor/ckeditor'); ?>
<div class="container top">
    <div class="page-header">
        <h2>
            <?php echo __('New Post'); ?> <?php echo $this->Html->link(__('All posts'), array('controller' => 'posts', 'action' => 'index'), array('class' => 'btn btn-info pull-right')); ?>
        </h2>
    </div>
    <div class="row">
        <div class="span9 columns">
            <?php echo $this->Session->flash(); ?>
            <?php
            echo $this->Form->create('Post', array(
                'class' => 'form-inline',
                'type' => 'file',
                'inputDefaults' => array(
                    'div' => false,
                    'label' => false
                )
            ));
            ?>
            <fieldset>
                <?php echo $this->Form->hidden('id'); ?>
                <div class="control-group">
                    <?php echo $this->Html->tag('label', __('Title'), array('class' => 'control-label', 'for' => 'title')); ?>
                    <div class="controls">
                        <?php
                        echo $this->Form->input('title', array(
                            'id' => 'title',
                            'class' => 'span9'
                        ));
                        ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $this->Html->tag('label', __('Resume'), array('class' => 'control-label', 'for' => 'resume')); ?>
                    <div class="controls">
                        <?php
                        echo $this->Form->textArea('resume', array(
                            'id' => 'resume',
                            'class' => 'span9',
                            'rows' => 5
                        ));
                        ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $this->Html->tag('label', __('Content'), array('class' => 'control-label', 'for' => 'content')); ?>
                    <div class="controls">
                        <?php
                        echo $this->Form->textArea('content', array(
                            'id' => 'content',
                            'class' => 'span9 ckeditor',
                        ));
                        ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $this->Html->tag('label', __('Active?'), array('class' => 'control-label', 'for' => 'active')); ?>
                    <div class="controls">
                        <?php
                        echo $this->Form->select('active', array(true => __('Yes'), false => __('No')), array(
                            'id' => 'active',
                            'empty' => __('Choose one')
                        ));
                        ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $this->Html->tag('label', __('Featured?'), array('class' => 'control-label', 'for' => 'featured')); ?>
                    <div class="controls">
                        <?php
                        echo $this->Form->select('featured', array(true => __('Yes'), false => __('No')), array(
                            'id' => 'featured',
                            'empty' => __('Choose one')
                        ));
                        ?>
                    </div>
                </div>
                <div class="control-group">
                    <?php echo $this->Html->tag('label', __('Cover'), array('class' => 'control-label', 'for' => 'cover')); ?>
                    <div class="controls thumbnails">
                        <div class="thumbnail span5">
                            <?php
                            echo $this->Thumbnail->render($this->request->data['Post']['cover'], array(
                                'path' => 'uploads/images/',
                                'width' => '500',
                                'height' => '100',
                                'resizeOption' => 'landscape',
                                'quality' => '100'
                                    ), array('id' => '', 'alt' => ''));
                            ?>
                        </div>
                    </div>
                    <br >
                    <div class="controls">
                        <?php echo $this->Form->input('cover', array('type' => 'file', 'class' => 'input-xlarge')); ?>
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