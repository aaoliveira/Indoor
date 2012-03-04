<div class="mws-panel grid_8 mws-collapsible">
    <div class="mws-panel-header">
        <span class="mws-i-24 i-admin-user"><?php echo __('All Users') ?></span>
    </div>
    <div class="mws-panel-body">
        <div class="dataTables_wrapper">
            <div class="mws-panel-toolbar top clearfix">
                <ul>
                    <li><a href="#" id="cli" class="mws-ic-16 ic-accept">Accept</a></li>
                    <li><a href="#" class="mws-ic-16 ic-cross">Reject</a></li>
                    <li><a href="#" class="mws-ic-16 ic-printer">Print</a></li>
                    <li><a href="#" class="mws-ic-16 ic-arrow-refresh">Renew</a></li>
                    <li><a href="#" class="mws-ic-16 ic-edit">Update</a></li>
                </ul>
            </div>
            <table class="mws-datatable mws-table">
                <thead>
                    <tr>
                        <th style="width: 20px;"><input type="checkbox" name="_all" /></th>
                        <th style="width: 20px;" class="sorting"><?php echo $this->Paginator->sort('id'); ?></th>
                        <th class="sorting"><?php echo $this->Paginator->sort('name'); ?></th>
                        <th style="width: 115px;" class="sorting"><?php echo $this->Paginator->sort('username'); ?></th>
                        <th style="width: 90px;" class="sorting"><?php echo $this->Paginator->sort('created'); ?></th>
                        <th style="width: 90px;" class="sorting"><?php echo $this->Paginator->sort('group_id'); ?></th>
                        <th style="width: 40px;" class="sorting center"><?php echo $this->Paginator->sort('active'); ?></th>
                        <th style="width: 90px;" class="center"><?php echo __('Actions'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr class="gradeX">
                            <td><input type="checkbox" /></td>
                            <td><?php echo $user['User']['id']; ?></td>
                            <td><?php echo $user['User']['name']; ?></td>
                            <td><?php echo $user['User']['username']; ?></td>
                            <td><?php echo $this->Time->format('d/m/Y H:i', h($user['User']['created'])); ?>&nbsp;</td>
                            <td><?php echo $user['Group']['name']; ?></td>
                            <td class="center"><?php echo $user['User']['active']; ?></td>
                            <td class="center">
                                <?php echo $this->Html->link($this->Html->image('/css/icons/16/edit.png'), array('controller' => 'users', 'action' => 'edit', $user['User']['id']), array('escape' => false, 'title' => __('Edit'))); ?>
                                &nbsp;&nbsp;
                                <?php echo $this->Html->link($this->Html->image('/css/icons/16/view.png'), array('controller' => 'users', 'action' => 'view', $user['User']['id']), array('escape' => false, 'title' => __('View'))); ?>
                                &nbsp;&nbsp;
                                <?php echo $this->Form->postLink($this->Html->image('/css/icons/16/delete.png'), array('controller' => 'users', 'action' => 'delete', $user['User']['id']), array('escape' => false, 'title' => __('Delete')), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="dataTables_info">
                <?php
                echo $this->Paginator->counter(array(
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                ));
                ?>
            </div>
            <div class="dataTables_paginate paging_full_numbers">
                <?php echo $this->Paginator->prev(__('Previous'), array(), null, array('class'=>'previous prev paginate_button paginate_button_disabled')); ?>
                <span>
                    <?php echo $this->Paginator->numbers(array('separator' => '', 'class'=>'paginate_button'));?>
                </span>
                <?php echo $this->Paginator->next(__('Next'), array(), null, array('class'=>'next next paginate_button paginate_button_disabled')); ?>
            </div>
        </div>
    </div>    	
</div>