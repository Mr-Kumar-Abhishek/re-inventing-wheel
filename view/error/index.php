<H1>Error Page</H1><br>

<?php
    if(isset($this->errors)) {
        foreach ($this->errors as $key => $er ) {
            ?>
            <p id="error-<?php echo $key ?>"><?php echo $er ?></p>
            <?php
            
        }
    }