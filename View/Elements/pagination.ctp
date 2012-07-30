<?php
$params = $this->Paginator->params();
if ($params['count'] > $params['limit']):
    ?>
    <div class="pagination">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'disabled prev'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'disabled'));
        ?>
    </div>
<?php endif; ?>