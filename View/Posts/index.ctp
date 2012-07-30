<div class="container top">
    <div class="page-header">
        <h2>
            <?php echo __('All Posts'); ?> <?php echo $this->Html->link(__('Add a new post'), array('controller' => 'posts', 'action' => 'add'), array('class' => 'btn btn-info pull-right')); ?>
        </h2>
    </div>
    <div class="row">
        <div class="span12 columns">
            <?php echo $this->Session->flash(); ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('title'); ?></th>
                        <th><?php echo $this->Paginator->sort('active ?'); ?></th>
                        <th><?php echo $this->Paginator->sort('featured ?'); ?></th>
                        <th><?php echo $this->Paginator->sort('created'); ?></th>
                        <th><?php echo __('Actions'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $post): ?>
                        <tr>
                            <td><?php echo h($post['Post']['title']) ?></td>
                            <td><?php echo ($post['Post']['active']) ? __('Yes') : __('No'); ?></td>
                            <td><?php echo ($post['Post']['featured']) ? __('Yes') : __('No'); ?></td>
                            <td><?php echo $this->Time->format('d/m/Y H:i', h($post['Post']['created'])); ?></td>
                            <td class="actions">
                                <div class="btn-group">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i><i class="icon-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'icon-pencil')) . __(' Edit'), array('action' => 'edit', $post['Post']['id']), array('escape' => false)); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'icon-trash')) . __(' Delete'), array('action' => 'delete', $post['Post']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="5">
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
            <?php echo $this->element('pagination', array('count' => count($posts))); ?>
        </div>
    </div>
</div>