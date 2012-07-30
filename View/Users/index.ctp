<div class="container top">
    <div class="page-header">
        <h2>
            <?php echo __('All Users'); ?> <?php echo $this->Html->link(__('Add a new user'), array('controller' => 'users', 'action' => 'add'), array('class'=>'btn btn-info pull-right')); ?>
        </h2>
    </div>
    <div class="row">
        <div class="span12 columns">
            <?php echo $this->Session->flash(); ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="span5"><?php echo $this->Paginator->sort('name'); ?></th>
                        <th><?php echo $this->Paginator->sort('email'); ?></th>
                        <th class="span2"><?php echo $this->Paginator->sort('created'); ?></th>
                        <th class="span1"><?php echo __('Actions'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo h($user['User']['name']) ?></td>
                            <td><?php echo h($user['User']['email']) ?></td>
                            <td><?php echo $this->Time->format('d/m/Y H:i', h($user['User']['created'])); ?></td>
                            <td class="actions">
                                <div class="btn-group">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i><i class="icon-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'icon-pencil')) . __(' Edit'), array('action' => 'edit', $user['User']['id']), array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'icon-trash')) . __(' Delete'), array('action' => 'delete', $user['User']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="4">
                            <blockquote>
                                <?php
                                echo $this->Paginator->counter(array(
                                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                                ));
                                ?>	
                            </blockquote>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php echo $this->element('pagination', array('count' => count($users))); ?>
        </div>
    </div>
</div>