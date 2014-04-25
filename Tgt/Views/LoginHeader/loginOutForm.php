<div class="loginAdditions <?php echo $data->userLoggedInStatus;?> right">
    <?php echo $data->logInOutHtml;?>
    <?php if (isset($data->logInFormHtml)) :?>
        <div class="loginDropDown">
            <?php echo $data->logInFormHtml;?>
        </div>
    <?php endif;?>
</div>
