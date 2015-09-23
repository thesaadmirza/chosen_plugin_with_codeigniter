<?php if ($flash_msg = $this->session->flashdata('notice_msg')): ?>
    <div class="alert alert-warning alert-dismissible notices attentionimg" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <strong>����� ! </strong><?= $flash_msg ?></div>
<?php elseif ($flash_msg = $this->session->flashdata('success_msg')): ?>
    <div class="alert alert-success notices succeedimg" role="alert">
        <strong>�� ������ ! </strong><?= $flash_msg ?></div>
    <p class='notice succeed'><?= $flash_msg ?></p>
<?php elseif ($flash_msg = $this->session->flashdata('error_msg')): ?>
    <div class="alert alert-danger notices errorimg" role="alert">
        <strong>��� ! </strong><?= $flash_msg ?></div>
    <p class="notice error"><?= $flash_msg ?></p>
<?php elseif ($flash_msg = $this->session->flashdata('attention_msg')): ?>
    <div class="alert alert-info notices informationimg" role="alert">
        <strong>������ ! </strong><?= $flash_msg ?></div>
<?php endif ?>





