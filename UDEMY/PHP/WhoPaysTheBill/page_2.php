<h2>The Partcipants Are:</h2>

<div class="form-group">
    <form>
        <div class="form-group">
            <?php foreach($namesArray as $name){ ?>
                <button type="button" class="btn btn-outline-primary">
                    <?php echo $name; ?>
                </button>
            <?php } ?>
        </div>

        <input type="hidden" name="names" value="<?php echo $_GET['names']?>">

        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="do_math"
            value="Know The Chosen One">
        </div>
    </form>
</div>