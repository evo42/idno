<form action="<?=$vars['object']->getURL()?>" method="post">

    <div class="row">

        <div class="span10 offset1">

            <p>
                <small><a href="#" onclick="$('#in-reply-to').show()">Is this a reply to a post somewhere?</a></small>
                <span id="in-reply-to" style="display:none">
                    <br />
                    <input type="text" name="inreplyto" placeholder="The website address of the post you're replying to" class="span9" value="<?=htmlspecialchars($vars['object']->inreplyto)?>" />
                </span>
            </p>
            <p>
                <label>
                    What are you up to?<br />
                    <input type="text" name="body" id="body" value="<?=htmlspecialchars($vars['object']->body)?>" class="span9" />
                </label>
                <?= \Idno\Core\site()->actions()->signForm('/status/edit') ?>
                <input type="submit" class="btn btn-primary" value="Save" />
                <input type="button" class="btn" value="Cancel" onclick="hideContentCreateForm();" />
            </p>
        </div>

    </div>
</form>