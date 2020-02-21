<?php foreach ($reverseguestbook as $message): ?>
<div class="col-lg-4">
    <div class="card clean-testimonial-item border-0 rounded-0">
        <div class="card-body">
            <h3 class="text-primary card-title"><?php echo html_entity_decode($message->title, ENT_QUOTES, 'UTF-8');?></h3>
            <p class="card-text"><?php echo html_entity_decode($message->message, ENT_QUOTES, 'UTF-8');?></p>
            <h3><?php echo $message->name;?></h3><em><?php echo html_entity_decode($message->date, ENT_QUOTES, 'UTF-8');?></em></div>
    </div>
</div>
<?php endforeach;?>


