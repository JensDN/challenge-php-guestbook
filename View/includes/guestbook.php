<?php foreach ($reverseguestbook as $message): ?>
<div class="col-lg-4">
    <div class="card clean-testimonial-item border-0 rounded-0">
        <div class="card-body">
            <h3 class="text-primary card-title"><?php echo $message->title;?></h3>
            <p class="card-text"><?php echo $message->message;?></p>
            <h3><?php echo $message->name;?></h3><em><?php echo $message->date;?></em></div>
    </div>
</div>
<?php endforeach;?>


